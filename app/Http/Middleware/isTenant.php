<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isTenant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->check() && auth()->user()->isTenant) {
            if(str_contains(request()->getHttpHost(), auth()->user()->tenant->domains[0]->domain)) {
                return $next($request);
            }
        }
        $request->session()->flush();
        return redirect('login')->with('error', 'cek domain anda');
    }
}
