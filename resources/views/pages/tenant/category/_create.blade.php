<x-form action="{{ $url }}" method="POST">
    @csrf
    @if (@$category)
        @method('PUT')
    @endif
    <div class="mb-3">
        <label class="form-label">Kategori</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror"
            name="name" value="{{ old('name', @$category->name) }}" required>
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="d-grid mt-3">
        <x-button.submit class="btn btn-primary">Simpan</x-button.submit>
    </div>
</x-form>
