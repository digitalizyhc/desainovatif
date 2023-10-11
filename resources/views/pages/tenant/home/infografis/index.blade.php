@section('title', $title ?? 'Desa ' . (tenant('name')))
<x-tenant-layout>
    @push('styles')
        <style>
            .bg-body {
                background-color: #F5F5F5;
            }

            .bg-blue-badge {
                background-color: #BDD8FF;
                color: #404040;
            }
            .card, .table th, .table td{
                background-color: transparent;
            }

            .table tbody tr:last-child td{
                margin-bottom: 0;
                padding-bottom: 0;
                border-bottom: 0;
            }

            .table thead tr th:last-child, .table tbody tr td:last-child {
                text-align: center;
            }

            .table thead tr:last-child {
                background-color: #EAECF0;
            }

            .table thead tr:last-child p {
                color: #757575;
            }
        </style>
    @endpush
    <div class="container pt-4 pb-2 px-3">
        <x-breadcrumbs active="Infografis"/>
    </div>
    @if (@$infografis)
        <div class="container pb-4">
            <x-content>
                <div data-aos="zoom-in" data-aos-duration="800">
                    <h2 class="fw-bold">Informasi <span class="text-color-primary">Wilayah</span></h2>
                    <div class="row my-5">
                        <div class="col-12 col-md-6">
                            <div class="row">
                                <div class="col-4">
                                    <img src="{{ asset('assets/img/icons/map1.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-8">
                                    <h1 class="fw-bold text-green-third my-0 py-0">{{ $infografis->luas_tanah }} m2</h1>
                                    <h2 class="fw-bold">Luas Tanah</h2>
                                    <p class="fw-normal">
                                        {{ $infografis->deskripsi_luas_tanah }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="row mb-4">
                                <div class="col-4 col-md-3">
                                    <img src="{{ asset('assets/img/icons/map2.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-8 col-md-9">
                                    <h1 class="fw-bold text-blue-secondary my-0 py-0">{{ $infografis->luas_kas }} m2</h1>
                                    <h2 class="fw-bold text-dark-blue">Luas Kas</h2>
                                    <p class="fw-normal">
                                        {{ $infografis->deskripsi_luas_kas }}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 col-md-3">
                                    <img src="{{ asset('assets/img/icons/map3.png') }}" alt="" class="img-fluid">
                                </div>
                                <div class="col-8 col-md-9">
                                    <h1 class="fw-bold text-gray my-0 py-0">{{ $infografis->luas_dhkp }}</h1>
                                    <h2 class="fw-bold text-dark-blue">Luas DHKP</h2>
                                    <p class="fw-normal">
                                        {{ $infografis->deskripsi_luas_dhkp }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </x-content>
        </div>
        <div class="p-5 mb-4 bg-body rounded-3" data-aos="fade-up" data-aos-duration="800">
            <div class="row text-center">
                <h2 class="fw-bold">Demografis <span class="text-color-primary">Kependudukan</span></h2>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-12 col-sm-6 col-md-4 text-center my-3 my-md-0">
                    <img src="{{ asset('assets/img/icons/map4.png') }}" alt="">
                    <div class="mt-3">
                        <h4 class="fw-bold my-0 text-yellow">{{ $infografis->jumlah_penduduk }}</h4>
                        <p class="fw-semibold my-0 text-dark-blue">Total Penduduk</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 text-center my-3 my-md-0">
                    <img src="{{ asset('assets/img/icons/map5.png') }}" alt="">
                    <div class="mt-3">
                        <h4 class="fw-bold my-0 text-red">{{ $infografis->penduduk_laki_laki }}</h4>
                        <p class="fw-semibold my-0 text-dark-blue">Penduduk laki-laki</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 text-center my-3 my-md-0">
                    <img src="{{ asset('assets/img/icons/map6.png') }}" alt="">
                    <div class="mt-3">
                        <h4 class="fw-bold my-0 text-blue">{{ $infografis->penduduk_perempuan }}</h4>
                        <p class="fw-semibold my-0 text-dark-blue">Penduduk Perempuan</p>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="container py-4" data-aos="fade-up" data-aos-duration="800">
        <div class="row justify-content-center my-3">
            <div class="col-md-10">
                <div class="row justify-content-center">
                    @if (@$education)
                        <div class="col-12 col-md-5">
                            <div class="card">
                                <div class="card-body mx-0 px-0 pb-0 mb-0">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">
                                                    <p class="text-start ps-3">
                                                        Tabel Demografi Pendidikan <span class="rounded-pill bg-blue-badge px-2 ms-2">{{ $education->total }} orang</span>
                                                    </p>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p class="fw-semibold my-2 ps-3">Tingkat Pendidikan</p>
                                                </th>
                                                <th>
                                                    <p class="fw-semibold my-2 ps-3">
                                                        Jumlah Orang
                                                    </p>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p class="fw-medium my-2 ps-3">
                                                        <span class="me-1">
                                                            <img src="{{ asset('assets/img/icons/edu3.png') }}" alt="">
                                                        </span>
                                                        Tidak/Belum Sekolah
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                    <p class="fw-normal my-2">
                                                        {{ $education->belum_sekolah }}
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="fw-medium my-2 ps-3">
                                                        <span class="me-1">
                                                            <img src="{{ asset('assets/img/icons/edu1.png') }}" alt="">
                                                        </span>
                                                        Tamat SD Sederjat
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                    <p class="fw-normal my-2">
                                                        {{ $education->sd }}
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="fw-medium my-2 ps-3">
                                                        <span class="me-1">
                                                            <img src="{{ asset('assets/img/icons/edu2.png') }}" alt="">
                                                        </span>
                                                        Tamat SLTP Sederajat
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                    <p class="fw-normal my-2">
                                                        {{ $education->sltp }}
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="fw-medium my-2 ps-3">
                                                        <span class="me-1">
                                                            <img src="{{ asset('assets/img/icons/edu4.png') }}" alt="">
                                                        </span>
                                                        Tamat SLTA Sederajat
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                    <p class="fw-normal my-2">
                                                        {{ $education->slta }}
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="fw-medium my-2 ps-3">
                                                        <span class="me-1">
                                                            <img src="{{ asset('assets/img/icons/edu5.png') }}" alt="">
                                                        </span>
                                                        Tamat Diploma 3
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                    <p class="fw-normal my-2">
                                                        {{ $education->diploma }}
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="fw-medium my-2 ps-3">
                                                        <span class="me-1">
                                                            <img src="{{ asset('assets/img/icons/edu5.png') }}" alt="">
                                                        </span>
                                                        Tamat Diploma 4/S1
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                    <p class="fw-normal my-2">
                                                        {{ $education->sarjana }}
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if (@$work)
                        <div class="col-12 col-md-5 offset-md-1">
                            <div class="card">
                                <div class="card-body mx-0 px-0 pb-0 mb-0">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">
                                                    <p class="text-start ps-3">
                                                        Tabel Demografi Pekerjaan <span class="rounded-pill bg-blue-badge px-2 ms-2">{{ $work->total }} orang</span>
                                                    </p>
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <p class="fw-semibold my-2 ps-3">Tingkat Pendidikan</p>
                                                </th>
                                                <th>
                                                    <p class="fw-semibold my-2 ps-3">
                                                        Jumlah Orang
                                                    </p>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p class="fw-medium my-2 ps-3">
                                                        <span class="me-1">
                                                            <img src="{{ asset('assets/img/icons/edu1.png') }}" alt="">
                                                        </span>
                                                        Tidak/Belum Bekerja
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                    <p class="fw-normal my-2">
                                                        {{ $work->belum_bekerja }}
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="fw-medium my-2 ps-3">
                                                        <span class="me-1">
                                                            <img src="{{ asset('assets/img/icons/edu3.png') }}" alt="">
                                                        </span>
                                                        Mengurus Rumah Tangga
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                    <p class="fw-normal my-2">
                                                        {{ $work->rumah_tangga }}
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="fw-medium my-2 ps-3">
                                                        <span class="me-1">
                                                            <img src="{{ asset('assets/img/icons/edu2.png') }}" alt="">
                                                        </span>
                                                        Pelajar/Mahasiswa
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                    <p class="fw-normal my-2">
                                                        {{ $work->pelajar }}
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="fw-medium my-2 ps-3">
                                                        <span class="me-1">
                                                            <img src="{{ asset('assets/img/icons/edu4.png') }}" alt="">
                                                        </span>
                                                        Wiraswasta
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                    <p class="fw-normal my-2">
                                                        {{ $work->wiraswasta }}
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="fw-medium my-2 ps-3">
                                                        <span class="me-1">
                                                            <img src="{{ asset('assets/img/icons/edu5.png') }}" alt="">
                                                        </span>
                                                        Buruh Harian Lepas
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                    <p class="fw-normal my-2">
                                                        {{ $work->buruh }}
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="fw-medium my-2 ps-3">
                                                        <span class="me-1">
                                                            <img src="{{ asset('assets/img/icons/edu5.png') }}" alt="">
                                                        </span>
                                                        Pegawai Ngeri Sipil(PNS)
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                    <p class="fw-normal my-2">
                                                        {{ $work->pns }}
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="fw-medium my-2 ps-3">
                                                        <span class="me-1">
                                                            <img src="{{ asset('assets/img/icons/edu5.png') }}" alt="">
                                                        </span>
                                                        Karyawan Swasta
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                    <p class="fw-normal my-2">
                                                        {{ $work->karyawan }}
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="fw-medium my-2 ps-3">
                                                        <span class="me-1">
                                                            <img src="{{ asset('assets/img/icons/edu5.png') }}" alt="">
                                                        </span>
                                                        Petani/Berkebun
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                    <p class="fw-normal my-2">
                                                        {{ $work->petani }}
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="fw-medium my-2 ps-3">
                                                        <span class="me-1">
                                                            <img src="{{ asset('assets/img/icons/edu5.png') }}" alt="">
                                                        </span>
                                                        Lain-lainnya
                                                    </p>
                                                </td>
                                                <td class="align-middle">
                                                    <p class="fw-normal my-2">
                                                        {{ $work->other }}
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-tenant-layout>
