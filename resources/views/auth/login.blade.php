<x-tenant-layout>
    @push('styles')
        <style>
            .text-color-primary {
                color: #409D61;
            }

            .text-color-secondary {
                color: #1A8A42;
            }

            .btn-primary {
                background-color: #42AE68;
                border: none;
            }

            .btn-primary:hover {
                background-color: #42AE68;
            }

            .btn-primary:active {
                --bs-btn-active-bg: #2e8d4f;
            }

            .btn.disabled {
                background-color: #2e8d4f;
                border: none;
            }

            .cursor-pointer {
                cursor: pointer;
            }
        </style>
    @endpush
    <div class="container py-4 mb-5">
        <div class="row my-3">
            <div class="col-12 col-md-6 mb-3">
                <div class="d-flex justify-content-center align-items-center mt-3">
                    <div>
                        <img src="{{ asset('assets/img/icons/logo-desa-inovatif.png') }}" alt="" width="100px">
                        <div class="mt-4">
                            <h3 class="fw-medium text-color-primary">Desa <span class="fw-bold text-capitalize">{{ tenant('name') ? tenant('name') : 'Inovatif' }}</span></h3>
                            <p class="fw-medium text-muted">Lingkungan yang lebih<br>berkelanjutan, efisien, dan berkualitas</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="row justify-content-start">
                    <div class="col-md-8">
                        <h3 class="fw-bold">Login</h3>
                        <p class="text-muted">Selamat Datang kembali! Silahkan login ke akun Anda</p>
                        @include('includes.partials.flash-message')
                        <div class="row justify-content-center mt-3">
                            <x-form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" id="email" placeholder="example@gmail.com" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <x-form.password />
                                </div>

                                <div class="text-end">
                                    <a href="https://wa.me/6282255276688" class="text-muted text-decoration-none">Lupa Password?</a>
                                </div>

                                <div class="d-grid mt-3">
                                    <x-button.submit class="btn btn-primary">Login</x-button.submit>
                                </div>
                            </x-form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('includes.partials.flash-message')
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</x-tenant-layout>
