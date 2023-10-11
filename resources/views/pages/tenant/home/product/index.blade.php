@section('title', $title ?? 'Desa ' . (tenant('name')))
<x-tenant-layout>
    @push('styles')
        <style>
            .card {
                background-color: #F5F5F5;
            }
        </style>
    @endpush
    <div class="container py-4">
        @include('includes.partials.flash-message')
        <x-breadcrumbs
            active='Produk'
        />
        <x-content>
            @if (@$products->count() > 0)
                <div class="row my-3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-12 {{ @$products->count() > 1 ? 'col-md-6' : '' }}">
                        <div class="card">
                            <img src="{{ $products[0]->product_cover_url }}" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column">
                                <a href="{{ route('tenant.produk-detail', $products[0]->slug) }}" class="card-title text-decoration-none fw-semibold stretched-link">{{ $products[0]->name }}</a>
                                <p class="card-text fw-bold text-green-primary">{{ rupiahFormat($products[0]->end_price, 'Rp. ') }}</p>
                            </div>
                        </div>
                    </div>
                    @if (@$products->count() > 1)
                        <div class="col-12 col-md-6 gx-md-5">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <img src="{{ $products[1]->product_cover_url }}" class="card-img-top" alt="...">
                                        <div class="card-body d-flex flex-column">
                                            <a href="{{ route('tenant.produk-detail', $products[1]->slug) }}" class="card-title text-decoration-none fw-semibold stretched-link">{{ $products[1]->name }}</a>
                                            <p class="card-text fw-bold text-green-primary">{{ rupiahFormat($products[1]->end_price, 'Rp. ') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if (@$products->count() > 2)
                                <div class="row">
                                    <div class="col-12 {{ @$products->count() > 3 ? 'col-md-6' : '' }}">
                                        <div class="card">
                                            <img src="{{ $products[2]->product_cover_url }}" class="card-img-top" alt="...">
                                            <div class="card-body d-flex flex-column">
                                                <a href="{{ route('tenant.produk-detail', $products[2]->slug) }}" class="card-title text-decoration-none fw-semibold stretched-link">{{ $products[2]->name }}</a>
                                                <p class="card-text fw-bold text-green-primary">{{ rupiahFormat($products[2]->end_price, 'Rp. ') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @if (@$products->count() > 3)
                                        <div class="col-12 col-md-6">
                                            <div class="card">
                                                <img src="{{ $products[3]->product_cover_url }}" class="card-img-top" alt="...">
                                                <div class="card-body d-flex flex-column">
                                                    <a href="{{ route('tenant.produk-detail', $products[3]->slug) }}" class="card-title text-decoration-none fw-semibold stretched-link">{{ $products[3]->name }}</a>
                                                    <p class="card-text fw-bold text-green-primary">{{ rupiahFormat($products[3]->end_price, 'Rp. ') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endif
                        </div>
                    @endif
                </div>
                @if ($recommendationProducts->count() > 0)
                <section data-aos="fade-up" data-aos-duration="1000">
                    <h3 class="fw-bold mt-5">Produk <span class="text-green-primary">Rekomendasi</span></h3>
                    <div class="row my-3 justify-content-center">
                        @foreach ($recommendationProducts as $recommendation)
                            <div class="col-12 col-sm-4 col-md-3 py-2 py-md-3">
                                <div class="card">
                                    <img src="{{ $recommendation->product_cover_url }}" class="card-img-top" alt="...">
                                    <div class="card-body d-flex flex-column">
                                        <a href="{{ route('tenant.produk-detail', $recommendation->slug) }}" class="card-title text-decoration-none fw-semibold stretched-link">{{ $recommendation->name }}</a>
                                        <p class="card-text fw-bold text-green-primary">{{ rupiahFormat($recommendation->end_price, 'Rp. ') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
                @endif
                @if ($bestSellerProducts->count() > 0)
                <section data-aos="fade-up" data-aos-duration="1000">
                    <h3 class="fw-bold mt-5">Produk <span class="text-green-primary">Terlaris</span></h3>
                    <div class="row my-3 justify-content-center">
                        @foreach ($bestSellerProducts as $bestSeller)
                            <div class="col-12 col-sm-4 col-md-3 py-2 py-md-3">
                                <div class="card">
                                    <img src="{{ $bestSeller->product_cover_url }}" class="card-img-top" alt="...">
                                    <div class="card-body d-flex flex-column">
                                        <a href="{{ route('tenant.produk-detail', $bestSeller->slug) }}" class="card-title text-decoration-none fw-semibold stretched-link">{{ $bestSeller->name }}</a>
                                        <p class="card-text fw-bold text-green-primary">{{ rupiahFormat($bestSeller->end_price, 'Rp. ') }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{ $bestSellerProducts->links() }}
                </section>
                @endif
            @else
                <div class="text-center my-5">
                    <h3>Masih Belum Ada Produk</h3>
                </div>
            @endif
        </x-content>
    </div>
</x-tenant-layout>
