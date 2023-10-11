<?php

namespace App\Http\Controllers\Admin;

use App\Models\Desa;
use App\Models\User;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\DesaRequest;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Models\Category;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allDesa     = Desa::with(['provinsi', 'kabupaten', 'kecamatan', 'user'])->filter(request())->latest()->paginate(request()->row ?? 10);
        $allProvinsi = Provinsi::all();

        return view('pages.admin.desa.index', compact('allDesa', 'allProvinsi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'allProvinsi' => Provinsi::all(),
            'allKabupaten' => Kabupaten::all(),
            'allKecamatan' => Kecamatan::all(),
            'url'        => route('admin.desa.store'),
            'title'      => 'Tambah Desa',
        ];

        return view('pages.admin.desa._create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DesaRequest $request)
    {
        $checkDesa = Desa::where('kecamatan_id', $request->kecamatan)
            ->where('kabupaten_id', $request->kabupaten)
            ->where('provinsi_id', $request->provinsi)
            ->where('name', 'like', $request->name)
            ->count();
        if ($checkDesa > 0) {
            return back()->with('error', 'Desa Sudah ada');
        }

        DB::beginTransaction();
        try {
            $dataUser = [
                'name'     => $request->admin_desa,
                'email'    => $request->email,
                'password' => bcrypt($request->password ?? 'password'),
            ];

            $user = User::create($dataUser);
            // assign admin desa
            $role = Role::findById(3);
            $user->assignRole($role);

            $data = [
                'provinsi_id'   => $request->provinsi,
                'kabupaten_id'  => $request->kabupaten,
                'kecamatan_id'  => $request->kecamatan,
                'name'          => $request->name,
                'admin_desa_id' => $user->id,
            ];

            Desa::create($data);

            $user->tenant()->create([
                'name' => $request->domain,
                'user_id' => $user->id,
            ]);

            $news = 'Berita Harian';
            $category  = [
                'name'      => $news,
                'slug'      => Str::slug($news, '-'),
                'tenant_id' => $user->tenant?->id,
            ];

            Category::create($category);

            DB::commit();
            return back()->with('success', 'Berhasil Menambahkan Data.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->with('error', 'Gagal Menambahkan Data.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Desa $desa)
    {
        $data = [
            'desa'          => $desa,
            'allProvinsi'   => Provinsi::all(),
            'kabupaten'     => Kabupaten::where('provinsi_id', $desa->provinsi_id)->get(),
            'kecamatan'     => Kecamatan::where('kabupaten_id', $desa->kabupaten_id)->get(),
            'url'           => route('admin.desa.update', $desa),
            'title'         => 'Edit Desa',
            'provinsiId'    => $desa->provinsi_id,
            'kabupatenId'   => $desa->kabupaten_id,
            'kecamatanId'   => $desa->kecamatan_id,
        ];

        return view('pages.admin.desa._create', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DesaRequest $request, Desa $desa)
    {
        $checkDesa = Desa::where('kecamatan_id', $request->kecamatan)
            ->where('kabupaten_id', $request->kabupaten)
            ->where('provinsi_id', $request->provinsi)
            ->where('name', 'like', $request->name)
            ->where('id', '<>', $desa->id)
            ->count();
        if ($checkDesa > 0) {
            return back()->with('error', 'Desa Sudah ada');
        }

        DB::transaction(function () use ($request, $desa) {
            $password = $request->password ? bcrypt($request->password) : $desa->user?->password;

            $data = [
                'provinsi_id'   => $request->provinsi,
                'kabupaten_id'  => $request->kabupaten,
                'kecamatan_id'  => $request->kecamatan,
                'name'          => $request->name,
            ];
            // update desa
            $desa->update($data);

            // update admin desa
            $dataUser = [
                'name'     => $request->admin_desa,
                'email'    => $request->email,
                'password' => $password,
            ];

            $desa->user->update($dataUser);

            $desa->user->tenant()->update([
                'name' => $request->domain,
            ]);
        });

        return back()->with('success', 'Berhasil Mengubah Data.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Desa $desa)
    {
        try {
            // delete desa and admin desa
            DB::transaction(function () use ($desa) {
                $desa->user->tenant()->delete();
                $desa->user->removeRole('tenant');
                $desa->user->delete();
                $desa->delete();
            });
            return back()->with('success', 'Berhasil Menghapus Data.');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    public function fetchKabupaten(Request $request)
    {
        $data['kabupaten'] = Kabupaten::where("provinsi_id", $request->provinsi_id)->get(["name", "id"]);
        return response()->json($data);
    }

    public function fetchKecamatan(Request $request)
    {
        $data['kecamatan'] = Kecamatan::where("kabupaten_id", $request->kabupaten_id)->get(["name", "id"]);
        return response()->json($data);
    }
}
