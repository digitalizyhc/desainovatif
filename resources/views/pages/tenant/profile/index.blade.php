@section('title', $title ?? 'Desa ' . (tenant('name')))
<x-panel-layout>
    @push('styles')
        <style>
            .filepond--drop-label {
                color: #4c4e53;
            }

            .filepond--label-action {
                text-decoration-color: #babdc0;
            }

            .filepond--panel-root {
                background-color: #edf0f4;
            }

            .filepond--root {
                width: 120px;
                margin: 0 auto;
            }

            .filepond--root[data-style-panel-layout~=circle] .filepond--file [data-align*=right] {
                bottom: calc(50% - 3em);
            }
        </style>
    @endpush

    @if (Session::has('errors'))
        @push('scripts')
            <script>
                $(document).ready(function() {
                    $("#staticBackdrop").modal('show');
                });
            </script>
        @endpush
    @endif

    <x-error-list />

    <div class="d-flex flex-row bd-highlight mb-3 align-items-center">
        <div class="p-2 bd-highlight">
            <div class="bg-white p-2 rounded-2 shadow-sm fs-2  text-center" style="width:55px;height:55px">
                <i class="fe fe-user "></i>
            </div>
        </div>

        <div class="">
            <div class="bd-highlight fs-2">Profil</div>
            <div class="bd-highlight">Pastikan Data Pada Profil Sesuai Dengan Data Baru</div>
        </div>
    </div>


    <div class="card rounded-3">
        <div class="card-body">
            <div class="border-bottom pb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex flex-row align-items-center">
                        <div class="me-4">
                            <img src="{{ Auth::user()->avatar_url }}" class="rounded-circle"
                                style="width:50px;height:50px" alt="Avatar" />
                        </div>
                        <div class="fs-3 text-bold"> {{ Auth::user()->name }}</div>
                    </div>
                    <div>
                        <button class="btn  btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Edit
                            Profile</button>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <div class="mb-1 fw-bold">Email</div>
                <div>{{ Auth::user()->email }}</div>
            </div>
        </div>
    </div>

    <!-- MODAL -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Edit Profile {{ Auth::user()->name }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <x-form action="{{ route('tenant.profile.update', 'id') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="mb-3 col-md-12">
                                <input type="file" class="filepond" name="avatar"
                                    accept="image/png, image/jpeg, image/jpg" />
                                <p class="text-center">only format: png, jpg, and jpeg</p>
                                @error('avatar')
                                    <div class="invalid-feedback @error('avatar') block @enderror">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name', Auth::user()->name) }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email', Auth::user()->email) }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <x-form.password />
                        </div>

                        <div class="d-grid mt-3">
                            <x-button.submit class="btn btn-primary">Simpan</x-button.submit>
                        </div>
                    </x-form>
                </div>
            </div>
        </div>
    </div>
</x-panel-layout>
