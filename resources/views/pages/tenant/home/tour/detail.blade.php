@section('title', $title ?? 'Desa ' . (tenant('name')))
<x-tenant-layout>
    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">
    @endpush
    <div class="container py-4">
        @include('includes.partials.flash-message')
        <x-breadcrumbs
            :links="[
                ['url' => route('tenant.wisata'), 'name' => 'Wisata']
            ]"
            active="{{ ucwords($tour->name) }}"
        />
        <x-content class="mt-2">
            <section data-aos="fade-up" data-aos-duration="1000">
                <h3 class="fw-bold">Destinasi <span class="text-green-primary">Wisata</span></h3>
                <div class="row my-4">
                    <div class="col-12">
                        <div class="card card-tour">
                            <img src="{{ $tour->cover_url }}" alt="Gambar" class="card-img-top">
                            <div class="text-decoration-none text-black">
                                <div class="card-overlay p-md-5">
                                    <p class="overlay-text">Destinasi Wisata</p>
                                    <h3 class="fw-semibold overlay-text">
                                        {{ $tour->name }}
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row my-4 px-2 justify-content-center">
                    <div class="col-12 px-1 h-100 mb-2">
                        <div class="card px-4">
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="card-body gray h-100 mb-0 pb-0">
                                        <div class="d-flex flex-column align-items-start h-100">
                                            <p class="fw-medium text-green-secondary mt-2">Destinasi Wisata</p>
                                            <h4 class="fw-semibold" style="color: #303030">
                                                {{ $tour->name }}
                                            </h4>
                                            <div class="fw-normal text-muted">
                                                {!! urldecode($tour->description)!!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if (@$tour && $tour->getMedia('tour-gallery')->count() > 0)
                    <div class="row my-4 px-2 justify-content-center">
                        <div class="card px-4">
                            <div class="card-body gray">
                                <p class="fw-medium text-green-secondary mt-2">Gallery Destinasi Wisata</p>
                                <h4 class="fw-semibold" style="color: #303030">
                                    {{ $tour->name }}
                                </h4>
                                <div class="row">
                                    @foreach ($tour->getMedia('tour-gallery') as $tourImage)
                                        <div class="col-12 col-sm-6 col-md-4 py-2 py-md-3">
                                            <div class="card">
                                                <a href="{{ $tourImage->getUrl() }}"  data-lightbox="gallery">
                                                    <img src="{{ $tourImage->getUrl() }}" class="img-fluid" style="height: 200px;aspect-ratio: 3/2;object-fit: cover;">
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </section>
            @if ($tours->count() > 0)
            <section data-aos="fade-up" data-aos-duration="1000">
                <h3 class="fw-bold mt-5">Wisata <span class="text-green-primary">Lainnya</span></h3>
                <div class="row my-3 justify-content-center">
                    @foreach ($tours as $otherTour)
                        <div class="col-12 col-sm-6 col-md-4 py-2 py-md-3">
                            <div class="card" style="height: 400px">
                                <img src="{{ $otherTour->cover_url }}" class="img-fluid" style="height: 240px;">
                                <div class="card-body gray d-flex flex-column">
                                    <p class="fw-medium text-green-secondary">Destinasi Wisata</p>
                                    <a href="{{ route('tenant.wisata-detail', $otherTour->slug) }}" class="card-title text-decoration-none fs-5 fw-semibold stretched-link">{{ $otherTour->name }}</a>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card-text text-muted mt-auto">
                                                {!! Str::limit(strip_tags($otherTour->description), 50) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
            @endif
        </x-content>
    </div>
    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
    @endpush
</x-tenant-layout>
