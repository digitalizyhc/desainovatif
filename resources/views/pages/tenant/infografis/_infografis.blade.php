<x-form action="{{ $url }}" method="POST">
    @csrf
    <label class="form-label" for="luas_tanah">Luas Tanah</label>
    <div class="input-group mb-3">
        <input type="number" min="0" class="form-control @error('luas_tanah') is-invalid @enderror"
            name="luas_tanah" value="{{ old('luas_tanah', @$infografis->luas_tanah) }}">
        <span class="input-group-text">m2</span>
        @error('luas_tanah')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Deskripsi Luas Tanah</label>
        <textarea class="form-control @error('deskripsi_luas_tanah') is-invalid @enderror" name="deskripsi_luas_tanah" rows="4" placeholder="Masukkan deskripsi luas tanah">{{ old('deskripsi_luas_tanah', @$infografis->deskripsi_luas_tanah) }}</textarea>
        @error('deskripsi_luas_tanah')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <label class="form-label" for="luas_kas">Luas Kas</label>
    <div class="input-group mb-3">
        <input type="number" min="0" class="form-control @error('luas_kas') is-invalid @enderror"
            name="luas_kas" value="{{ old('luas_kas', @$infografis->luas_kas) }}">
            <span class="input-group-text">m2</span>
        @error('luas_kas')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Deskripsi Luas Kas</label>
        <textarea class="form-control @error('deskripsi_luas_kas') is-invalid @enderror" name="deskripsi_luas_kas" rows="4" placeholder="Masukkan deskripsi luas kas">{{ old('deskripsi_luas_kas', @$infografis->deskripsi_luas_kas) }}</textarea>
        @error('deskripsi_luas_kas')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Luas DHKP</label>
        <input type="number" min="0" class="form-control @error('luas_dhkp') is-invalid @enderror"
            name="luas_dhkp" value="{{ old('luas_dhkp', @$infografis->luas_dhkp) }}">
        @error('luas_dhkp')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Deskripsi Luas DHKP</label>
        <textarea class="form-control @error('deskripsi_luas_dhkp') is-invalid @enderror" name="deskripsi_luas_dhkp" rows="4" placeholder="Masukkan deskripsi luas dhkp">{{ old('deskripsi_luas_dhkp', @$infografis->deskripsi_luas_dhkp) }}</textarea>
        @error('deskripsi_luas_dhkp')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label" for="penduduk_laki_laki">Penduduk Laki-laki</label>
        <input type="number" min="0" class="form-control @error('penduduk_laki_laki') is-invalid @enderror"
        name="penduduk_laki_laki" value="{{ old('penduduk_laki_laki', @$infografis->penduduk_laki_laki) }}">
        @error('penduduk_laki_laki')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label" for="penduduk_perempuan">Penduduk Perempuan</label>
        <input type="number" min="0" class="form-control @error('penduduk_perempuan') is-invalid @enderror"
        name="penduduk_perempuan" value="{{ old('penduduk_perempuan', @$infografis->penduduk_perempuan) }}">
        @error('penduduk_perempuan')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label" for="jumlah_penduduk">Jumlah Penduduk</label>
        <input type="number" min="0" class="form-control @error('jumlah_penduduk') is-invalid @enderror"
            name="jumlah_penduduk" value="{{ old('jumlah_penduduk', @$infografis->jumlah_penduduk) }}">
        @error('jumlah_penduduk')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="d-grid mt-3">
        <x-button.submit class="btn btn-primary">Simpan</x-button.submit>
    </div>
</x-form>
