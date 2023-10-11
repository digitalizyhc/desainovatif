<x-panel-layout>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
        <style>
            .select2-container .select2-selection--single {
                height: 100%;
                border-color: #ced4da;
            }

            .select2-container--default .select2-selection--single .select2-selection__rendered {
                line-height: 30px;
            }
        </style>
    @endpush
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h3 class="mb-0">Data Desa</h3>
        <a href="{{ route('admin.desa.create') }}" class="btn btn-primary"><i
                class="fas fa-plus-circle me-1"></i>Tambah</a>
    </div>
    <div class="card">
        <div class="card-body">
            <form>
                <div class="row mb-3">
                    <div class="col-12 col-sm-auto mb-2 mb-sm-0">
                        <x-filter.rows />
                    </div>
                    <div class="col-12 col-sm-3 mb-2 mb-sm-0">
                        <x-filter.select name="provinsi" class="select2">
                            <option value="">-Semua Provinsi-</option>
                            @foreach ($allProvinsi as $provinsi)
                                <option value="{{ $provinsi->id }}" {{ @$_GET['Provinsi'] == $provinsi->id ? 'selected' : '' }}>
                                    {{ $provinsi->name }}</option>
                            @endforeach
                        </x-filter.select>
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
                            <th>Nama Desa</th>
                            <th>Kecamatan</th>
                            <th>Kabupaten</th>
                            <th>Provinsi</th>
                            <th>Domain</th>
                            <th>Nama Admin</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($allDesa as $desa)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $desa->name }}</td>
                                <td>{{ $desa->kecamatan?->name }}</td>
                                <td>{{ $desa->kabupaten?->name }}</td>
                                <td>{{ $desa->provinsi?->name }}</td>
                                <td>{{ $desa->user?->tenant?->name . '.' . env('APP_CENTRAL_DOMAIN') }}</td>
                                <td>{{ $desa->user?->name }}</td>
                                <td>{{ $desa->user?->email }}</td>
                                <td>
                                    <div class="nowrap">
                                        <a href="{{ route('admin.desa.edit', $desa->id) }}" class="btn btn-success btn-sm">
                                            <i class="fas fa-pencil-alt me-1"></i> Edit
                                        </a>
                                        <button class="btn btn-danger btn-sm action-delete"
                                            data-url="{{ route('admin.desa.destroy', $desa) }}"
                                            data-title="Yakin ingin menghapus data?">
                                            <i class="fas fa-trash-alt me-1"></i> Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" align="center">-tidak ada data-</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{ $allDesa->withQueryString()->links() }}
        </div>
    </div>
    @push('scripts')
        <script src="{{ asset('assets/js/select2.min.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.select2').select2({
                    width: '100%'
                });
            });
        </script>
    @endpush
</x-panel-layout>
