@section('title', $title ?? 'Desa ' . (tenant('name')))
<x-panel-layout>
    @push('styles')
        <style>
            .custom-toggle-switch input[type=checkbox] {
                height: 0;
                width: 0;
                visibility: hidden;
            }

            .custom-toggle-switch label {
                cursor: pointer;
                text-indent: -9999px;
                width: 50px;
                height: 28px;
                background: grey;
                display: block;
                border-radius: 100px;
                position: relative;
            }

            .custom-toggle-switch label:after {
                content: '';
                position: absolute;
                top: 2.5px;
                left: 3px;
                width: 23px;
                height: 23px;
                background: #fff;
                border-radius: 23px;
                transition: 0.3s;
            }

            .custom-toggle-switch input:checked+label {
                background: #1A8A42;
            }

            .custom-toggle-switch input:checked+label:after {
                left: calc(100% - 2.5px);
                transform: translateX(-100%);
            }

            .custom-toggle-switch label:active:after {
                width: 50px;
            }

            .table thead tr th:nth-child(4), .table tbody tr td:nth-child(4) {
                min-width: 70px;
            }
        </style>
    @endpush
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h3 class="mb-0">Data Artikel</h3>
        <a href="{{ route('tenant.post.create') }}" class="btn btn-primary"><i
                class="fas fa-plus-circle me-1"></i>Tambah</a>
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
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Visitor</th>
                            <th>Publish</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>{{ $post->visits?->score ?? 0 }}</td>
                                <td>
                                    <div class="custom-toggle-switch d-flex align-items-start justify-content-start me-2 pt-1">
                                        <input type="checkbox" id="switch-{{ $post->id }}"
                                            onchange="togglePublish({{ $post->id }})"
                                            {{ $post->is_published ? 'checked' : '' }} /><label
                                            for="switch-{{ $post->id }}"></label>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ route('tenant.post.edit', $post->id) }}"
                                        class="btn btn-success btn-sm">
                                        <i class="fas fa-pencil-alt me-1"></i> Edit
                                    </a>
                                    <button class="btn btn-danger btn-sm action-delete"
                                        data-url="{{ route('tenant.post.destroy', $post) }}"
                                        data-title="Yakin ingin menghapus data?">
                                        <i class="fas fa-trash-alt me-1"></i> Hapus
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" align="center">-tidak ada data-</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{ $posts->withQueryString()->links() }}
        </div>
    </div>
    @push('scripts')
        <script>
            function togglePublish(id) {
                let isPublish;
                if ($(`#switch-${id}`).is(':checked')) {
                    isPublish = 1;
                } else {
                    isPublish = 0;
                }

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                });

                $.ajax({
                    url: "{{ route('tenant.post.togglePublish') }}",
                    type: 'POST',
                    data: {
                        '_token': '{{ csrf_token() }}',
                        id,
                        isPublish
                    },
                    success: function(res) {
                        Toast.fire({
                            icon: 'success',
                            title: res.msg
                        });
                    },
                    error: function(xhr, status, error) {
                        const err = JSON.parse(xhr.responseText);
                        Toast.fire({
                            icon: 'error',
                            title: err.msg
                        });
                    }
                });
            }
        </script>
    @endpush
</x-panel-layout>
