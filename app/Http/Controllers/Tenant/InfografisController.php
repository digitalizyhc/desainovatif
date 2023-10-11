<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Models\DemografiPekerjaan;
use App\Models\DemografiPendidikan;
use App\Models\Infografis;
use Illuminate\Http\Request;

class InfografisController extends Controller
{
    public function index()
    {
        $title = 'Infografis - Desa ' . ucwords(tenant('name')) ;
        $infografis = Infografis::where('tenant_id', tenant('id'))->first();
        $education  = DemografiPendidikan::where('tenant_id', tenant('id'))->first();
        $work       = DemografiPekerjaan::where('tenant_id', tenant('id'))->first();

        $data = [
            'title'      => $title,
            'infografis' => $infografis,
            'education'  => $education,
            'work'       => $work,
        ];
        return view('pages.tenant.infografis.index', $data);
    }

    public function editInfografis()
    {
        $infografis = Infografis::where('tenant_id', tenant('id'))->first();

        $data = [
            'url' => route('tenant.infografis.post-informasi'),
            'title' => $infografis ? 'Edit Informasi' : 'Tambah Informasi',
            'infografis' => $infografis,
        ];

        return view('pages.tenant.infografis._infografis', $data);
    }

    public function postInfografis(Request $request)
    {
        $request->validate([
            'luas_tanah'           => ['required', 'numeric'],
            'deskripsi_luas_tanah' => ['required', 'string'],
            'luas_kas'             => ['required', 'numeric'],
            'deskripsi_luas_kas'   => ['required', 'string'],
            'luas_dhkp'            => ['required', 'numeric'],
            'deskripsi_luas_dhkp'  => ['required', 'string'],
            'jumlah_penduduk'      => ['required', 'numeric'],
            'penduduk_laki_laki'   => ['required', 'numeric'],
            'penduduk_perempuan'   => ['required', 'numeric'],
        ]);

        try {
            Infografis::updateOrCreate([
                'tenant_id' => tenant('id'),
            ],
            [
                'luas_tanah'           => $request->luas_tanah,
                'deskripsi_luas_tanah' => $request->deskripsi_luas_tanah,
                'luas_kas'             => $request->luas_kas,
                'deskripsi_luas_kas'   => $request->deskripsi_luas_kas,
                'luas_dhkp'            => $request->luas_dhkp,
                'deskripsi_luas_dhkp'  => $request->deskripsi_luas_dhkp,
                'jumlah_penduduk'      => $request->jumlah_penduduk,
                'penduduk_laki_laki'   => $request->penduduk_laki_laki,
                'penduduk_perempuan'   => $request->penduduk_perempuan,
            ]);

            return back()->with('success', 'Berhasil Memperbarui Data');
        } catch (\Throwable $th) {
            return back()->with('error', 'Gagal Memperbarui Data');
        }
    }

    public function editDemografiPendidikan()
    {
        $education = DemografiPendidikan::where('tenant_id', tenant('id'))->first();

        $data = [
            'url' => route('tenant.infografis.post-demografi-pendidikan'),
            'title' => $education ? 'Edit Demografi Pendidikan' : 'Tambah Demografi Pendidikan',
            'education' => $education,
        ];

        return view('pages.tenant.infografis._pendidikan', $data);
    }

    public function postDemografiPendidikan(Request $request)
    {
        $request->validate([
            'belum_sekolah' => ['required', 'numeric'],
            'sd'            => ['required', 'numeric'],
            'sltp'          => ['required', 'numeric'],
            'slta'          => ['required', 'numeric'],
            'diploma'       => ['required', 'numeric'],
            'sarjana'       => ['required', 'numeric'],
        ]);

        try {
            $total = $request->belum_sekolah + $request->sd + $request->sltp + $request->slta + $request->diploma + $request->sarjana;
            DemografiPendidikan::updateOrCreate([
                'tenant_id' => tenant('id'),
            ],
            [
                'belum_sekolah' => $request->belum_sekolah,
                'sd'            => $request->sd,
                'sltp'          => $request->sltp,
                'slta'          => $request->slta,
                'diploma'       => $request->diploma,
                'sarjana'       => $request->sarjana,
                'total'         => $total,
            ]);

            return back()->with('success', 'Berhasil Memperbarui Data');
        } catch (\Throwable $th) {
            return back()->with('error', 'Gagal Memperbarui Data');
        }
    }

    public function editDemografiPekerjaan()
    {
        $work = DemografiPekerjaan::where('tenant_id', tenant('id'))->first();

        $data = [
            'url' => route('tenant.infografis.post-demografi-pekerjaan'),
            'title' => $work ? 'Edit Demografi Pekerjaan' : 'Tambah Demografi Pekerjaan',
            'work' => $work,
        ];

        return view('pages.tenant.infografis._pekerjaan', $data);
    }

    public function postDemografiPekerjaan(Request $request)
    {
        $request->validate([
            'belum_bekerja' => ['required', 'numeric'],
            'rumah_tangga'  => ['required', 'numeric'],
            'pelajar'       => ['required', 'numeric'],
            'wiraswasta'    => ['required', 'numeric'],
            'buruh'         => ['required', 'numeric'],
            'pns'           => ['required', 'numeric'],
            'karyawan'      => ['required', 'numeric'],
            'petani'        => ['required', 'numeric'],
            'other'         => ['required', 'numeric'],
        ]);

        try {
            $total = $request->belum_bekerja + $request->rumah_tangga + $request->pelajar + $request->wiraswasta + $request->buruh + $request->pns + $request->karyawan + $request->petani + $request->other;
            DemografiPeKerjaan::updateOrCreate([
                'tenant_id' => tenant('id'),
            ],
            [
                'belum_bekerja' => $request->belum_bekerja,
                'rumah_tangga'  => $request->rumah_tangga,
                'pelajar'       => $request->pelajar,
                'wiraswasta'    => $request->wiraswasta,
                'buruh'         => $request->buruh,
                'pns'           => $request->pns,
                'karyawan'      => $request->karyawan,
                'petani'        => $request->petani,
                'other'         => $request->other,
                'total'         => $total,
            ]);

            return back()->with('success', 'Berhasil Memperbarui Data');
        } catch (\Throwable $th) {
            return back()->with('error', 'Gagal Memperbarui Data');
        }
    }
}
