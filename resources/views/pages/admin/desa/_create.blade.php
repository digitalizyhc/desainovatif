<x-panel-layout>
    @push('styles')
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
        </style>
    @endpush

    <style>
        svg {
            display: inline-block;
        }
    </style>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <x-button.back :url="route('admin.desa.index')" />

            <div class="card">
                <div class="card-header border-bottom text-center">
                    <h6 class="mb-0">{{ $title }}</h6>
                </div>
                <div class="card-body">
                    <x-form action="{{ $url }}" method="POST">
                        @csrf
                        @if (@$desa)
                        @method('PUT')
                        @endif
                        <div class="mb-3">
                            <label class="form-label">Provinsi <span class="text-danger">*</span></label>
                            <select name="provinsi" id="provinsi-dropdown" class="form-select select2 @error('provinsi') is-invalid @enderror">
                                <option value="">-Pilih Provinsi-</option>
                                @foreach ($allProvinsi as $provinsi)
                                    <option value="{{ $provinsi->id }}"
                                        {{ old('provinsi', @$provinsiId) == $provinsi->id ? 'selected' : '' }}>
                                        {{ $provinsi->name }}</option>
                                @endforeach
                            </select>
                            @error('provinsi')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kabupaten <span class="text-danger">*</span></label>
                            <select name="kabupaten" id="kabupaten-dropdown" class="form-select select2 @error('kabupaten') is-invalid @enderror" @if (!@$desa) disabled @endif>
                                <option value="">-Pilih Kabupaten-</option>
                                @if (@$desa)
                                    @foreach ($kabupaten as $kbptn)
                                        <option value="{{ $kbptn->id }}"
                                            {{ old('kabupaten', @$kabupatenId) == $kbptn->id ? 'selected' : '' }}>
                                            {{ $kbptn->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('kabupaten')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kecamatan <span class="text-danger">*</span></label>
                            <select name="kecamatan" id="kecamatan-dropdown" class="form-select select2 @error('kecamatan') is-invalid @enderror" @if(!@$desa) disabled @endif>
                                <option value="">-Pilih Kecamatan-</option>
                                @if (@$desa)
                                    @foreach ($kecamatan as $kcmtn)
                                        <option value="{{ $kcmtn->id }}"
                                            {{ old('kecamatan', @$kecamatanId) == $kcmtn->id ? 'selected' : '' }}>
                                            {{ $kcmtn->name }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('kecamatan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Desa <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name', @$desa->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                                <label class="form-label">Domain <span class="text-danger">*</span></label>
                                <div class="input-group">
                                    <input type="text" class="form-control @error('domain') is-invalid @enderror"
                                        name="domain" value="{{ old('domain', @$desa->user?->tenant?->name) }}" required>
                                    <span class="input-group-text">{{ '.' . env('APP_CENTRAL_DOMAIN') }}</span>
                                </div>
                                @error('domain')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Admin Desa <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('admin_desa') is-invalid @enderror"
                                name="admin_desa" value="{{ old('admin_desa', @$desa->user?->name) }}" required>
                            @error('admin_desa')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email', @$desa->user->email) }}" required>
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
    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                $('.select2').select2({
                    width: '100%'
                });
            });
        </script>
    @endpush
    @include('includes.partials.dropdown-province')
</x-panel-layout>
