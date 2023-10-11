<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * The user has been authenticated.
     */
    protected function authenticated(): void
    {
        $checkTenant = str_contains(request()->getHttpHost(), auth()->user()->tenant?->domains[0]?->domain);
        // Check if the user has the "super admin" role
        if (auth()->user()->isAdmin) {
            // flasher
            flash('Selamat Datang di Dashboard Admin!');
            // Redirect to the admin dashboard
            $this->redirectTo = route('admin.dashboard');
        } elseif (auth()->user()->isTenant && $checkTenant) {
            $this->redirectTo = route('tenant.dashboard');
            // $this->redirectTo = auth()->user()->tenant->domains[0]->domain . '/dashboard';
        } else {
            request()->session()->flush();
            $this->redirectTo = route('home');
        }

    }

    /**
     * The user has logged out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    protected function loggedOut(Request $request)
    {
        flash('Anda telah keluar dari sistem!');
        return to_route('login');
    }
}
