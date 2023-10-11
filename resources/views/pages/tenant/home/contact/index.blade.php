@section('title', $title ?? 'Desa ' . (tenant('name')))
<x-tenant-layout>
    @push('styles')
        <style>
            .btn-primary {
                background-color: #42AE68;
                border: none;
            }

            .btn-primary:hover {
                background-color: #42AE68;
            }
            .btn-primary:active {
                --bs-btn-active-bg: #2e8d4f;
            }

            .btn.disabled {
                background-color: #2e8d4f;
                border: none;
            }
        </style>
    @endpush
    <div class="container py-4">
        <div>
            <x-breadcrumbs active="Kontak"/>
        </div>
        <div class="row my-3" data-aos="zoom-in" data-aos-duration="600">
            <div class="col-12 col-md-6">
                <div class="d-flex justify-content-center align-items-center mt-5">
                    <div>
                        <img src="{{ asset('assets/img/icons/logo-desa-inovatif.png') }}" alt="" width="75px">
                        <div class="mt-4">
                            <h3 class="fw-medium text-green-primary">Desa <span class="fw-bold text-capitalize">{{ tenant('name') }}</span></h3>
                            <p class="fw-medium text-muted">Lingkungan yang lebih<br>berkelanjutan, efisien, dan berkualitas</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <h3 class="fw-bold">Kontak Kami</h3>
                @include('includes.partials.flash-message')
                <div class="row justify-content-center mt-3">
                    <x-form action="{{ route('tenant.send-message') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" id="name" placeholder="Masukkan nama anda" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" id="email" placeholder="example@gmail.com" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Pesan</label>
                            <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="7" placeholder="Masukkan pesan anda"></textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <input type="hidden" name="tenant" value="{{ tenant('id') }}">

                        <div class="d-grid mt-3">
                            <x-button.submit class="btn btn-primary">Kirim Pesan</x-button.submit>
                        </div>
                    </x-form>
                </div>
            </div>
        </div>
    </div>
</x-tenant-layout>
