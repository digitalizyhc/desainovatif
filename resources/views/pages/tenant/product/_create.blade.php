@section('title', $title ?? 'Desa ' . (tenant('name')))
<x-panel-layout>

    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
        <style>
            span.select2 {
                height: 100%;
            }

            .select2-container .select2-selection--single {
                height: 100%;
                border-color: #ced4da;
            }

            .select2-container--default .select2-selection--single .select2-selection__rendered {
                line-height: 30px;
            }

            .ck-editor__editable {
                min-height: 250px !important;
            }

            .filepond--item {
                width: 30%;
            }

            @media screen and (max-width: 992px) {
                .filepond--item {
                    width: 45%;
                }
            }

            @media screen and (max-width: 576px) {
                .filepond--item {
                    width: 100%;
                }
            }
        </style>
    @endpush


    <style>
        svg {
            display: inline-block;
        }
    </style>

    <div class="row justify-content-center">
        <div class="col-md-9">
            <x-button.back :url="route('tenant.product.index')" />

            <div class="card">
                <div class="card-header border-bottom text-center">
                    <h6 class="mb-0">{{ $title }}</h6>
                </div>
                <div class="card-body">
                    <x-form action="{{ $url }}" method="POST">
                        @csrf
                        @if (@$product)
                            @method('PUT')
                        @endif
                        <div class="mb-3">
                            <label class="form-label">Nama Produk <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" id="name" value="{{ old('name', @$product->name) }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <label class="form-label">Slug/Permalink <span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">https://desainovatif.id/product/</span>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                name="slug" id="slug" value="{{ old('slug', @$product->slug) }}">
                            @error('slug')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Gambar Produk
                                @if (@!$product)
                                    <span class="text-danger">*</span>
                                @endif
                            </label>
                            <input type="file"
                                class="filepond @error('image') is-invalid @enderror @error('image') is-invalid @enderror"
                                name="image[]" accept="image/png, image/jpeg, image/jpg" multiple>
                            @error('image')
                                <div class="invalid-feedback @error('image') block @enderror">{{ $message }}</div>
                            @enderror
                        </div>

                        @if (@$product && $product->getMedia('product')->count() > 0)
                            <label for="">Gambar Produk Sebelumnya</label>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="10">#</th>
                                            <th>Gambar Produk</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($product->getMedia('product') as $productImage)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <img src="{{ $productImage->getUrl() }}"
                                                        alt="{{ $productImage->getUrl() }}" height="100px" style="aspect-ratio: 3/2;" class="rounded-3">
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger btn-sm action-delete"
                                                        data-url="{{ route('tenant.product.deleteImage', [$product, $productImage->id]) }}"
                                                        data-title="Yakin ingin menghapus data?">
                                                        <i class="fas fa-trash-alt me-1"></i> Hapus
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif

                        <div class="mb-3">
                            <label class="form-label">Deskripsi Produk <span class="text-danger">*</span></label>
                            <textarea id="editor" class="form-control @error('description') is-invalid @enderror" name="description">{{ old('description', @$product->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <label class="form-label">Harga <span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp. </span>
                            <input type="text" class="form-control @error('first_price') is-invalid @enderror"
                                name="first_price" id="first_price"
                                value="{{ old('first_price', @$product->first_price !== 0 ? rupiahFormat(@$product->first_price) : rupiahFormat(@$product->end_price)) }}">
                            @error('first_price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox"
                                @if (@$product) @checked(old('end_price_required', @$product->first_price !== 0 ? true : false))
                            @else
                                @checked(old('end_price_required')) @endif
                                name="end_price_required" id="end_price_required">
                            <label class="form-check-label" for="end_price_required">
                                Apakah ada diskon?
                            </label>
                        </div>

                        <label class="form-label" id="end_price_label">Harga Diskon <span
                                class="text-danger">*</span></label>
                        <div class="input-group mb-3" id="end_price_div">
                            <span class="input-group-text">Rp. </span>
                            <input type="text" class="form-control @error('end_price') is-invalid @enderror"
                                name="end_price" id="end_price"
                                value="{{ old('end_price', rupiahFormat(@$product->end_price)) }}"
                                @if (@$product) {{ @$product->first_price == 0 ? 'disabled' : '' }}
                                @else
                                    disabled @endif>
                            @error('end_price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" @checked(old('is_recommendation', @$product->is_recommendation))
                                name="is_recommendation" id="is_recommendation">
                            <label class="form-check-label" for="is_recommendation">
                                Apakah produk ini termasuk rekomendasi?
                            </label>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" @checked(old('is_best_seller', @$product->is_best_seller))
                                name="is_best_seller" id="is_best_seller">
                            <label class="form-check-label" for="is_best_seller">
                                Apakah produk ini best seller?
                            </label>
                        </div>
                        <div class="d-grid mt-3">
                            <x-button.submit class="btn btn-primary">Simpan</x-button.submit>
                        </div>

                    </x-form>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('plugins/ckeditor5/build/ckeditor.js') }}"></script>
        <script>
            ClassicEditor.create(document.querySelector("#editor"), {
                removePlugins : ['Image', 'ImageUpload', 'SimpleUploadAdapter', 'Table' ,'SourceEditing', 'MediaEmbed'],
            }).catch(error => {
                console.error(error);
            });
        </script>
        <script>
            $(document).ready(function($) {
                function generateSlug(text) {
                    return text.toLowerCase().replace(/[^a-zA-Z0-9]+/g, '-');
                }

                /* Fungsi formatRupiah */
                function formatRupiah(angka, prefix) {
                    var number_string = angka.replace(/[^,\d]/g, '').toString(),
                        split = number_string.split(','),
                        sisa = split[0].length % 3,
                        rupiah = split[0].substr(0, sisa),
                        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                    // tambahkan titik jika yang di input sudah menjadi angka ribuan
                    if (ribuan) {
                        separator = sisa ? '.' : '';
                        rupiah += separator + ribuan.join('.');
                    }

                    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                    return rupiah;
                }

                $("#name").keyup(function() {
                    let Text = $(this).val();
                    $("#slug").val(generateSlug(Text));
                });

                $("#slug").keyup(function() {
                    let Text = $(this).val();
                    $("#slug").val(generateSlug(Text));
                });

                $("#first_price").keyup(function() {
                    let number = $(this).val();
                    $("#first_price").val(formatRupiah(number));
                    $("#end_price").val(formatRupiah(number));
                });

                $('input:checkbox#end_price_required').change(function() {
                    if ($(this).is(":checked")) {
                        $('#end_price').prop("disabled", false);
                    } else {
                        $('#end_price').prop("disabled", true);
                    }
                    let firstPrice = $('#first_price').val();
                    $('#end_price').val(firstPrice);
                });

                $("#end_price").keyup(function() {
                    let number = $(this).val();
                    $("#end_price").val(formatRupiah(number));
                });

            });
        </script>
    @endpush

</x-panel-layout>
