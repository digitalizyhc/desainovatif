@section('title', $title ?? 'Desa ' . (tenant('name')))
<x-tenant-layout>
    <div class="container py-4">
        @include('includes.partials.flash-message')
        <div class="mb-2">
            <x-breadcrumbs
                :links="[
                    ['url' => route('tenant.berita'), 'name' => 'Berita']
                ]"
                active="{{ ucwords($article->title) }}"
            />
        </div>
        <x-content>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <img src="{{ $article->cover_url }}" alt="" class="img-fluid mx-auto d-block rounded-3">
                    <p class="fw-normal text-end mt-2">{{ $visit ?? 0 }}<i class="fas fa-eye ms-1"></i></p>
                    <div class="mt-4">
                        <p class="fw-normal text-green-secondary">Berita Hari Ini</p>
                        <h3 class="fw-semibold">{{ $article->title }}</h3>
                        <p class="fw-light text-muted mt-4">{{ $article->created_at->isoFormat('D MMMM Y') }}</p>
                        <div>
                            {!! urldecode($article->body) !!}
                        </div>
                        <a href="#" class="btn btn-sm btn-success">Share Artikel</a>
                    </div>
                    <div class="my-5">
                        @include('includes.partials.flash-message')
                        <p class="fw-semibold">Berikan Komentar</p>
                        <x-form action="#" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-12 col-md-6">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" id="name" placeholder="masukkan nama anda">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" id="email" placeholder="example@gmail.com">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Komentar</label>
                                <textarea class="form-control @error('comment') is-invalid @enderror" name="comment" rows="7" placeholder="masukkan komentar anda"></textarea>
                                @error('comment')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button class="btn btn-sm btn-success">Posting komentar</button>
                        </x-form>
                    </div>
                </div>
            </div>
        </x-content>
    </div>
</x-tenant-layout>
