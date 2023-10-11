@section('title', $title ?? 'Desa ' . (tenant('name')))
<x-tenant-layout>
    <div class="container py-4">
        @include('includes.partials.flash-message')
        <div>
            <x-breadcrumbs
                :links="[
                    ['url' => route('tenant.produk'), 'name' => 'Produk']
                ]"
                active="{{ ucwords($product->name) }}"
            />
        </div>
        <x-content>
            <div class="row my-3">
                <div class="col-12 col-md-6 ge-md-5 mb-4 mb-md-none">
                    <img src="{{ $product->product_cover_url }}" alt="" class="img-fluid rounded-2" id="preview">
                    <div class="row mt-3 justify-content-center">
                        @foreach ($product->getMedia('product') as $productImage)
                            <div class="col-6 col-lg-3 mb-4 mb-sm-none">
                                <img src="{{ $productImage->getUrl() }}" alt="" class="img-fluid btn p-0 image-show">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-12 col-md-6 gs-md-5">
                    <div class="d-flex flex-column align-items-start h-100">
                        @if ($product->is_recommendation && $product->is_best_seller)
                            <p class="rounded-pill bg-color-primary px-2 fw-light text-white mt-3">Produk Unggulan</p>
                        @endif
                        <div class="mt-2">
                            <h2 class="fw-semibold">
                                {{ $product->name }}
                            </h2>
                            <p class="fw-normal text-muted">
                                @if ($product->first_price !== 0)
                                    <del>{{ rupiahFormat($product->first_price, 'Rp. ') }}</del>
                                @endif
                                <span class="fs-5 text-gray-secondary">{{ rupiahFormat($product->end_price, 'Rp. ') }}</span>
                            </p>
                        </div>
                        <div class="mt-2">
                            <p class="fw-semibold">Detail Produk</p>
                            <div class="fw-light">
                                {!! urldecode($product->description )!!}
                            </div>
                        </div>
                        <div class="fw-normal mt-auto pb-5">
                            <p class="fw-semibold mb-4">Tertarik membeli produk ini?</p>
                            <a href="#" class="text-decoration-none bg-color-primary p-2 text-white rounded-2">Chat On Whatsapp</a>
                        </div>
                    </div>
                </div>
            </div>
            @if ($recommendationProducts->count() > 0)
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
            @endif
        </x-content>
    </div>

    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $('.image-show').click(function() {
                    $image = $(this).prop('src');
                    $('#preview').prop('src', $image);
                })
            });
        </script>
    @endpush
</x-tenant-layout>
