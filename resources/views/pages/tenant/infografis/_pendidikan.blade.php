<x-form action="{{ $url }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="belum_sekolah">Tidak/Belum Sekolah</label>
        <input type="number" min="0" class="form-control @error('belum_sekolah') is-invalid @enderror"
        name="belum_sekolah" value="{{ old('belum_sekolah', @$education->belum_sekolah) }}">
        @error('belum_sekolah')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label" for="sd">Tamat SD Sederajat</label>
        <input type="number" min="0" class="form-control @error('sd') is-invalid @enderror"
        name="sd" value="{{ old('sd', @$education->sd) }}">
        @error('sd')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label" for="sltp">Tamat SLTP Sederajat</label>
        <input type="number" min="0" class="form-control @error('sltp') is-invalid @enderror"
            name="sltp" value="{{ old('sltp', @$education->sltp) }}">
        @error('sltp')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label" for="slta">Tamat SLTA Sederajat</label>
        <input type="number" min="0" class="form-control @error('slta') is-invalid @enderror"
            name="slta" value="{{ old('slta', @$education->slta) }}">
        @error('slta')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label" for="diploma">Tamat Diploma 3</label>
        <input type="number" min="0" class="form-control @error('diploma') is-invalid @enderror"
            name="diploma" value="{{ old('diploma', @$education->diploma) }}">
        @error('diploma')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label" for="sarjana">Tamat Diploma4/S1</label>
        <input type="number" min="0" class="form-control @error('sarjana') is-invalid @enderror"
            name="sarjana" value="{{ old('sarjana', @$education->sarjana) }}">
        @error('sarjana')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="d-grid mt-3">
        <x-button.submit class="btn btn-primary">Simpan</x-button.submit>
    </div>
</x-form>
