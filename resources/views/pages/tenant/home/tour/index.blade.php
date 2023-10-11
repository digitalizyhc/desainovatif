@section('title', $title ?? 'Desa ' . (tenant('name')))
<x-tenant-layout>
    <div class="container py-4">
        @include('includes.partials.flash-message')
        <div class="mx-1">
            <x-breadcrumbs active="Wisata"/>
        </div>
        @if ($tours->count() > 0)
        <x-content class="px-1">
            <section data-aos="fade-up" data-aos-duration="1000">
                <h3 class="fw-bold mt-2">Destinasi <span class="text-green-primary">Wisata</span></h3>
                <div class="row my-4">
                    <div class="col-12">
                        <div class="card card-tour">
                            <img src="{{ $firstTour->cover_url }}" alt="Gambar" class="card-img-top">
                            <a href="{{ route('tenant.wisata-detail', $firstTour->slug) }}" class="text-decoration-none text-black stretched-link">
                                <div class="card-overlay p-md-5">
                                    <p class="overlay-text">Destinasi Wisata</p>
                                    <h3 class="fw-semibold overlay-text">
                                        {{ $firstTour->name }}
                                    </h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row my-3 px-2 justify-content-center">
                    <div class="col-12 px-1 h-100 mb-2">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $firstTour->cover_url }}" class="img-fluid rounded-start" alt="..." style="height: 300px">
                                </div>
                                <div class="col-md-8 ps-md-2">
                                    <div class="card-body gray h-100 mb-0 pb-0">
                                        <div class="d-flex flex-column align-items-start h-100">
                                            <p class="fw-medium text-green-secondary mt-2">Destinasi Wisata</p>
                                            <div>
                                                <a href="{{ route('tenant.wisata-detail', $firstTour->slug) }}" class="text-decoration-none text-black stretched-link">
                                                    <h2 class="fw-semibold">
                                                        {{ $firstTour->name }}
                                                    </h2>
                                                </a>
                                                <div class="fw-normal">
                                                    {!! Str::limit(strip_tags($firstTour->description), 100) !!}
                                                </div>
                                            </div>
                                            <div class="row mt-auto w-100">
                                                <p class="fw-normal">Selengkapnya...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section data-aos="fade-up" data-aos-duration="1000">
                <h3 class="fw-bold mt-5">Wisata <span class="text-green-primary">Lainnya</span></h3>
                <div class="row my-3 justify-content-center">
                    @foreach ($tours as $tour)
                        <div class="col-12 col-sm-6 col-md-4 py-2 py-md-3">
                            <div class="card" style="height: 400px">
                                <img src="{{ $tour->cover_url }}" class="img-fluid" style="height: 240px;">
                                <div class="card-body gray d-flex flex-column">
                                    <p class="fw-medium text-green-secondary">Destinasi Wisata</p>
                                    <a href="{{ route('tenant.wisata-detail', $tour->slug) }}" class="card-title text-decoration-none fs-5 fw-semibold stretched-link">{{ $tour->name }}</a>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card-text text-muted mt-auto">
                                                {!! Str::limit(strip_tags($tour->description), 50) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $tours->links() }}
            </section>
        </x-content>
        @else
            <div class="text-center my-5">
                <h3>Masih Belum Ada Tempat Wisata</h3>
            </div>
        @endif
    </div>
</x-tenant-layout>
