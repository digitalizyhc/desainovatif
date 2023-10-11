@section('title', $title ?? 'Desa ' . (tenant('name')))
<x-panel-layout>
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h3 class="mb-0">Data Kategori Artikel</h3>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".open-modal" data-title="Tambah Kategori Baru" data-url="{{ route('tenant.category.create') }}">
            <i class="fas fa-plus-circle me-1"></i> Tambah
        </button>
    </div>
    <div class="card">
        <div class="card-body">
            <form>
                <div class="row mb-3">
                    <div class="col-12 col-sm-auto mb-2 mb-sm-0">
                        <x-filter.rows />
                    </div>
                    <div class="col-12 col-sm-3 ms-auto">
                        <x-filter.search />
                    </div>
                </div>
            </form>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th width="10">#</th>
                            <th>Kategori</th>
                            <th>Slug</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($allCategory as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>
                                    <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target=".open-modal" data-title="Edit Assessment" data-url="{{ route('tenant.category.edit', $category->id) }}">
                                        <i class="fas fa-pencil-alt me-1"></i>Edit
                                    </button>
                                    <button class="btn btn-danger btn-sm action-delete"
                                        data-url="{{ route('tenant.category.destroy', $category) }}"
                                        data-title="Yakin ingin menghapus data?">
                                        <i class="fas fa-trash-alt me-1"></i> Hapus
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" align="center">-tidak ada data-</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{ $allCategory->withQueryString()->links() }}
        </div>
    </div>
</x-panel-layout>
