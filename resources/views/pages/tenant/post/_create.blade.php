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
        </style>
    @endpush


    <style>
        svg {
            display: inline-block;
        }
    </style>

    <div class="row justify-content-center">
        <div class="col-md-9">
            <x-button.back :url="route('tenant.post.index')" />

            <div class="card">
                <div class="card-header border-bottom text-center">
                    <h6 class="mb-0">{{ $title }}</h6>
                </div>
                <div class="card-body">
                    <x-form action="{{ $url }}" method="POST">
                        @csrf
                        @if (@$post)
                            @method('PUT')
                        @endif
                        <div class="mb-3">
                            <label class="form-label">Judul <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror"
                                name="title" id="title" value="{{ old('title', @$post->title) }}">
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <label class="form-label">Slug/Permalink <span class="text-danger">*</span></label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">https://desainovatif.id/article/</span>
                            <input type="text" class="form-control @error('slug') is-invalid @enderror"
                                name="slug" id="slug" value="{{ old('slug', @$post->slug) }}">
                            @error('slug')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kategori <span class="text-danger">*</span></label>
                            <select name="category_id"
                                class="form-select @error('category_id') is-invalid @enderror">
                                <option value="">-Pilih Kategori-</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id', @$categoryId) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Cover
                                @if (@!$post)
                                    <span class="text-danger">*</span>
                                @endif
                            </label>
                            <input type="file" class="filepond @error('image') is-invalid @enderror"
                                name="image" value="{{ old('image', @$post->image) }}" accept="image/png, image/jpeg, image/jpg">
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Isi Konten <span class="text-danger">*</span></label>
                            <textarea id="editor" class="form-control @error('content') is-invalid @enderror" name="content">{{ old('content', @$post->body) }}</textarea>
                            @error('content')
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
                simpleUpload: {
                    // The URL that the images are uploaded to.
                    uploadUrl: "{{ route('tenant.post.upload') . '?_token=' . csrf_token() }}",
                },
            }).catch(error => {
                console.error(error);
            });
        </script>
        <script>
            $(document).ready(function($) {
                function generateSlug(text) {
                    return text.toLowerCase().replace(/[^a-zA-Z0-9]+/g,'-');
                }

                $("#title").keyup(function() {
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
