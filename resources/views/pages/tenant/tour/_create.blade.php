@section('title', $title ?? 'Desa ' . (tenant('name')))
<x-panel-layout>

    @push('styles')
        <style>
            .ck-editor__editable {
                min-height: 250px !important;
            }

            .gallery .filepond--item {
                width: 30%;
            }

            @media screen and (max-width: 992px) {
                .gallery .filepond--item {
                    width: 45%;
                }
            }

            @media screen and (max-width: 576px) {
                .gallery .filepond--item {
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
            <x-button.back :url="route('tenant.tour.index')" />

            <div class="card">
                <div class="card-header border-bottom text-center">
                    <h6 class="mb-0">{{ $title }}</h6>
                </div>
                <div class="card-body">
                    <x-form action="{{ $url }}" method="POST">
                        @csrf
                        @if (@$tour)
                            @method('PUT')
                        @endif
                        <div class="mb-3">
                            <label class="form-label">Nama Tempat Wisata <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" id="name" value="{{ old('name', @$tour->name) }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <label class="form-label">Slug/Permalink <span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">https://desainovatif.id/tour/</span>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                name="slug" id="slug" value="{{ old('slug', @$tour->slug) }}">
                            @error('slug')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kategori <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('category') is-invalid @enderror"
                                name="category" id="category" value="{{ old('category', @$tour->category) }}">
                            @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Cover
                                @if (@!$tour)
                                    <span class="text-danger">*</span>
                                @endif
                            </label>
                            <input type="file" class="filepond @error('image') is-invalid @enderror"
                                name="image" value="{{ old('image') }}" accept="image/png, image/jpeg, image/jpg">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 gallery">
                            <label class="form-label">Galeri Wisata</label>
                            <input type="file"
                                class="filepond @error('gallery') is-invalid @enderror"
                                name="gallery[]" accept="image/png, image/jpeg, image/jpg" multiple>
                            @error('gallery')
                                <div class="invalid-feedback @error('gallery') block @enderror">{{ $message }}</div>
                            @enderror
                        </div>

                        @if (@$tour && $tour->getMedia('tour-gallery')->count() > 0)
                            <label for="">Galeri Sebelumnya</label>
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="10">#</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tour->getMedia('tour-gallery') as $tourImage)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>
                                                    <img src="{{ $tourImage->getUrl() }}"
                                                        alt="{{ $tourImage->getUrl() }}" height="100px" style="aspect-ratio: 3/2;" class="rounded-3">
                                                </td>
                                                <td>
                                                    <button class="btn btn-danger btn-sm action-delete"
                                                        data-url="{{ route('tenant.tour.deleteImage', [$tour, $tourImage->id]) }}"
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
                            <label class="form-label">Deskripsi <span class="text-danger">*</span></label>
                            <textarea id="editor" class="form-control @error('description') is-invalid @enderror" name="description">{{ old('description', @$tour->description) }}</textarea>
                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
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
                    return text.toLowerCase().replace(/[^a-zA-Z0-9]+/g,'-');
                }

                $("#name").keyup(function() {
                    let Text = $(this).val();
                    $("#slug").val(generateSlug(Text));
                });

                $("#slug").keyup(function() {
                    let Text = $(this).val();
                    $("#slug").val(generateSlug(Text));
                });
            });
        </script>
    @endpush

</x-panel-layout>
