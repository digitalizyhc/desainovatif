@section('title', $title ?? 'Desa ' . (tenant('name')))
<x-tenant-layout>
    <div class="container py-4">
        @include('includes.partials.flash-message')
        <div class="mb-2">
            <x-breadcrumbs active="Berita"/>
        </div>
        @if ($articles->count() > 0)
        <x-content>
            <section data-aos="fade-up" data-aos-duration="1000">
                <h3 class="fw-bold">Berita <span class="text-green-primary">Terbaru</span></h3>
                <div class="row my-3 px-2 justify-content-center">
                    <div class="col-12 px-0 h-100 mb-2">
                        <div class="card">
                            <div class="row g-0">
                                <div class="col-md-6">
                                    <img src="{{ $firstArticle->cover_url }}" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-6 ps-md-2">
                                    <div class="card-body gray h-100 mb-0 pb-0">
                                        <div class="d-flex flex-column align-items-start h-100">
                                            <p class="fw-medium text-green-secondary mt-2">Berita Hari Ini</p>
                                            <div>
                                                <a href="{{ route('tenant.berita-detail', $firstArticle->slug) }}" class="text-decoration-none text-black stretched-link">
                                                    <h2 class="fw-semibold">
                                                        {{ $firstArticle->title }}
                                                    </h2>
                                                </a>
                                                <p class="fw-normal">{{ Str::limit(strip_tags($firstArticle->body), 100) }}</p>
                                            </div>
                                            <p class="mt-auto fw-normal">{{ $firstArticle->created_at->isoFormat('dddd, D MMMM Y') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section data-aos="fade-up" data-aos-duration="1000">
                <h3 class="fw-bold mt-5">Berita <span class="text-green-primary">Lainnya</span></h3>
                <div class="row my-3 justify-content-center">
                    @foreach ($articles as $article)
                        <div class="col-12 col-sm-6 col-md-4 py-2 py-md-3">
                            <div class="card" style="height: 400px;">
                                <img src="{{ $article->cover_url }}" class="img-fluid" style="height: 240px;object-fit: cover">
                                <div class="card-body gray d-flex flex-column">
                                    <p class="fw-medium text-green-secondary">Berita Hari Ini</p>
                                    <a href="{{ route('tenant.berita-detail', $article->slug) }}" class="card-title text-decoration-none fs-5 fw-semibold stretched-link">{{ Str::limit($article->title, 50) }}</a>
                                    <p class="card-text text-muted mt-auto">{{ $article->created_at->isoFormat('dddd, D MMMM Y') }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{ $articles->links() }}
            </section>
        </x-content>
        @else
            <div class="text-center my-5">
                <h3>Masih Belum Ada Berita</h3>
            </div>
        @endif
    </div>
</x-tenant-layout>
