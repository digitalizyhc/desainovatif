<?php

namespace App\Http\Controllers\Tenant;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Auth;
use RahulHaque\Filepond\Facades\Filepond;
use App\Http\Requests\ProfileTenantRequest;
use App\Models\User;

class ProfileController extends Controller
{
    public function index()
    {
        $title = 'Profile - Desa ' . ucwords(tenant('name'));
        $data = [
            'title' => $title
        ];
        return view('pages.tenant.profile.index', $data);
    }

    public function update(ProfileTenantRequest $request)
    {
        try {
            DB::beginTransaction();
            $password = $request->password ? bcrypt($request->password) : auth()->user()?->password;

            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $password,
            ];

            $user = User::find(auth()->id());
            $user->update($data);

            $fileInfo = Filepond::field($request->avatar);
            if ($fileInfo->getFile() !== null) {
                if ($user->getFirstMediaUrl('avatar')) {
                    $user->clearMediaCollection('avatar');
                    $user->addMedia($fileInfo->getFile()->getPathname())->toMediaCollection('avatar');
                } else {
                    $user->addMedia($fileInfo->getFile()->getPathname())->toMediaCollection('avatar');
                }
                $fileInfo->delete();
            }

            DB::commit();
            return back()->with('success', 'Profile berhasil diubah');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', $th->getMessage());
        }
    }
}
