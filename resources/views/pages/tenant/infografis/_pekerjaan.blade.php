<x-form action="{{ $url }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="belum_bekerja">Belum Bekerja</label>
        <input type="number" min="0" class="form-control @error('belum_bekerja') is-invalid @enderror"
        name="belum_bekerja" value="{{ old('belum_bekerja', @$work->belum_bekerja) }}">
        @error('belum_bekerja')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label" for="rumah_tangga">Mengurus Rumah Tangga</label>
        <input type="number" min="0" class="form-control @error('rumah_tangga') is-invalid @enderror"
        name="rumah_tangga" value="{{ old('rumah_tangga', @$work->rumah_tangga) }}">
        @error('rumah_tangga')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label" for="pelajar">Pelajar</label>
        <input type="number" min="0" class="form-control @error('pelajar') is-invalid @enderror"
            name="pelajar" value="{{ old('pelajar', @$work->pelajar) }}">
        @error('pelajar')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label" for="wiraswasta">Wiraswasta</label>
        <input type="number" min="0" class="form-control @error('wiraswasta') is-invalid @enderror"
            name="wiraswasta" value="{{ old('wiraswasta', @$work->wiraswasta) }}">
        @error('wiraswasta')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label" for="buruh">Buruh</label>
        <input type="number" min="0" class="form-control @error('buruh') is-invalid @enderror"
            name="buruh" value="{{ old('buruh', @$work->buruh) }}">
        @error('buruh')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label" for="pns">Pegawai Negeri Sipil(PNS)</label>
        <input type="number" min="0" class="form-control @error('pns') is-invalid @enderror"
            name="pns" value="{{ old('pns', @$work->pns) }}">
        @error('pns')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label" for="karyawan">Karyawan Swasta</label>
        <input type="number" min="0" class="form-control @error('karyawan') is-invalid @enderror"
            name="karyawan" value="{{ old('karyawan', @$work->karyawan) }}">
        @error('karyawan')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label" for="petani">Petani/Berkebun</label>
        <input type="number" min="0" class="form-control @error('petani') is-invalid @enderror"
            name="petani" value="{{ old('petani', @$work->petani) }}">
        @error('petani')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label" for="other">Lain-lainnya</label>
        <input type="number" min="0" class="form-control @error('other') is-invalid @enderror"
            name="other" value="{{ old('other', @$work->other) }}">
        @error('other')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="d-grid mt-3">
        <x-button.submit class="btn btn-primary">Simpan</x-button.submit>
    </div>
</x-form>
