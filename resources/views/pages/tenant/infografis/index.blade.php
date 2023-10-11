@section('title', $title ?? 'Desa ' . (tenant('name')))
<x-panel-layout>
    <div class="d-flex flex-row bd-highlight mb-3 align-items-center">
        <div class="p-2 bd-highlight">
            <div class="bg-white p-2 rounded-2 shadow-sm fs-2  text-center" style="width:55px;height:55px">
                <i class="fe fe-map-pin "></i>
            </div>
        </div>

        <div class="">
            <div class="bd-highlight fs-2">Infografis</div>
            <div class="bd-highlight">Pastikan Data Pada Infografis Sesuai Dengan Data Baru</div>
        </div>
    </div>

    <div class="card rounded-3">
        <div class="card-body">
            <div class="border-bottom pb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-row align-items-center">
                        <div class="fs-3 text-bold">Informasi Wilayah dan Kependudukan</div>
                    </div>
                    <div>
                        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target=".open-modal"
                            data-title="{{ $infografis ? 'Edit Informasi' : 'Tambah Informasi' }}"
                            data-url="{{ route('tenant.infografis.edit-informasi') }}">
                            <i class="fas fa-pencil-alt me-1"></i>
                            {{ $infografis ? 'Edit Informasi' : 'Tambahkan Informasi' }}
                        </button>
                    </div>
                </div>
            </div>
            @if ($infografis)
                <div class="mt-4 row justify-content-center">
                    <div class="col-12 col-md-6">
                        <table class="table table-bordered mb-0">
                            <tr>
                                <th>
                                    Luas Tanah
                                </th>
                                <td>
                                    {{ $infografis->luas_tanah }} m2
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Luas Kas
                                </th>
                                <td>
                                    {{ $infografis->luas_kas }} m2
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Luas DHKP
                                </th>
                                <td>
                                    {{ $infografis->luas_dhkp }}
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-12 col-md-6">
                        <table class="table table-bordered mb-0">
                            <tr>
                                <th>
                                    Total Penduduk
                                </th>
                                <td>
                                    {{ $infografis->jumlah_penduduk }} orang
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Penduduk Laki-laki
                                </th>
                                <td>
                                    {{ $infografis->penduduk_laki_laki }} orang
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Penduduk Perempuan
                                </th>
                                <td>
                                    {{ $infografis->penduduk_perempuan }} orang
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            @else
                <div class="text-center mt-4">
                    <p>Masih belum ada data</p>
                </div>
            @endif
        </div>
    </div>

    <div class="card rounded-3">
        <div class="card-body">
            <div class="border-bottom pb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-row align-items-center">
                        <div class="fs-3 text-bold">Informasi Demografi Pendidikan</div>
                    </div>
                    <div>
                        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target=".open-modal"
                            data-title="{{ $education ? 'Edit Demografi Pendidikan' : 'Tambah Demografi Pendidikan' }}"
                            data-url="{{ route('tenant.infografis.edit-demografi-pendidikan') }}">
                            <i class="fas fa-pencil-alt me-1"></i>
                            {{ $education ? 'Edit Demografi Pendidikan' : 'Tambah Demografi Pendidikan' }}
                        </button>
                    </div>
                </div>
            </div>
            @if ($education)
                <div class="mt-4 row justify-content-center">
                    <div class="col-12 col-md-6">
                        <table class="table table-bordered mb-0">
                            <tr>
                                <th>
                                    Tidak/Belum Sekolah
                                </th>
                                <td>
                                    {{ $education->belum_sekolah }} orang
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Tamat SD Sederajat
                                </th>
                                <td>
                                    {{ $education->sd }} orang
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Tamat SLTP Sederajat
                                </th>
                                <td>
                                    {{ $education->sltp }} orang
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-12 col-md-6">
                        <table class="table table-bordered mb-0">
                            <tr>
                                <th>
                                    Tamat SLTA Sederajat
                                </th>
                                <td>
                                    {{ $education->slta }} orang
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Tamat Diploma 3
                                </th>
                                <td>
                                    {{ $education->diploma }} orang
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Tamat Diploma 4/S1
                                </th>
                                <td>
                                    {{ $education->sarjana }} orang
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            @else
                <div class="text-center mt-4">
                    <p>Masih belum ada data</p>
                </div>
            @endif
        </div>
    </div>

    <div class="card rounded-3">
        <div class="card-body">
            <div class="border-bottom pb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-row align-items-center">
                        <div class="fs-3 text-bold">Informasi Demografi Pekerjaan</div>
                    </div>
                    <div>
                        <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target=".open-modal"
                            data-title="Edit Informasi"
                            data-url="{{ route('tenant.infografis.edit-demografi-pekerjaan') }}">
                            <i class="fas fa-pencil-alt me-1"></i>
                            Edit Demografi Pekerjaan
                        </button>
                    </div>
                </div>
            </div>
            @if (@$work)
                <div class="mt-4 row justify-content-center">
                    <div class="col-12 col-md-6">
                        <table class="table table-bordered mb-0">
                            <tr>
                                <th>
                                    Tidak/Belum Bekerja
                                </th>
                                <td>
                                    {{ $work->belum_bekerja }} orang
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Mengurus Rumah Tangga
                                </th>
                                <td>
                                    {{ $work->rumah_tangga }} orang
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Pelajar/Mahasiswa
                                </th>
                                <td>
                                    {{ $work->pelajar }} orang
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Wiraswasta
                                </th>
                                <td>
                                    {{ $work->wiraswasta }} orang
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Buruh Harian Lepas
                                </th>
                                <td>
                                    {{ $work->buruh }} orang
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-12 col-md-6">
                        <table class="table table-bordered mb-0">
                            <tr>
                                <th>
                                    Pegawai Negeri Sipil(PNS)
                                </th>
                                <td>
                                    {{ $work->pns }} orang
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Karyawan Swasta
                                </th>
                                <td>
                                    {{ $work->karyawan }} orang
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Petani/Berkebun
                                </th>
                                <td>
                                    {{ $work->petani }} orang
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Lain-lainnya
                                </th>
                                <td>
                                    {{ $work->other }} orang
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            @else
                <div class="text-center mt-4">
                    <p>Masih belum ada data</p>
                </div>
            @endif
        </div>
    </div>
</x-panel-layout>
