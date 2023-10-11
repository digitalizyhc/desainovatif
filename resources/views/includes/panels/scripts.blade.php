<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="//unpkg.com/alpinejs" defer></script>
<script src="{{ asset('assets/js/jquery-3.6.3.min.js') }}"></script>

{{-- select2 --}}
<script src="{{ asset('assets/js/select2.min.js') }}"></script>

{{-- toastr from cdn css --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

{{-- toastr from cdn js --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

{{-- Sweetalert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function($) {
        $(".open-modal").on("show.bs.modal", (event) => {
            var button = $(event.relatedTarget);
            var modal = $(this);
            var url = button.data("url");

            modal.find(".modal-title-custom").html(button.data("title"));
            modal.find(".modal-body-custom").load(url);
        });

        $(".modal-close").click(function() {
            $(".modal-body-custom").html("");
        });
    });

    // delete data
    $(document).on('click', '.action-delete', function(e) {
        e.preventDefault();
        var url = $(this).attr('data-url');
        var title = $(this).attr('data-title');
        deleteData(url, title);
    });

    function deleteData(url, title) {
        var csrf_token = $('meta[name="csrf-token"]').attr('content');
        Swal.fire({
            title: title,
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: url,
                    type: "POST",
                    data: {
                        '_method': 'DELETE',
                        '_token': csrf_token
                    },
                    success: function(data) {
                        Swal.fire({
                            title: 'Berhasil!',
                            text: "Data berhasil dihapus.",
                            icon: 'success',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                location.reload();
                            }
                        })
                    },
                    error: function(err) {
                        console.log(err)
                        Swal.fire({
                            title: 'Gagal!',
                            text: "Data gagal dihapus.",
                            icon: 'error',
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'OK'
                        })
                    }
                });
            }
        })
    }
</script>
