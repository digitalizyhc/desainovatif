@push('scripts')
    <script>
        $(document).ready(function () {
            $('#provinsi-dropdown').on('change', function () {
                var idProvinsi = this.value;
                $("#kecamatan-dropdown").prop("disabled", true);
                $("#kabupaten-dropdown").html('');
                $.ajax({
                    url: "{{ route('admin.fetch-kabupaten')}}",
                    type: "POST",
                    data: {
                        provinsi_id: idProvinsi,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    beforeSend: function() {
                        $("#kabupaten-dropdown").prop("disabled", true);
                        $("#kabupaten-dropdown").html('<option value="">Sedang Memuat...</option>');
                    },
                    success: function (result) {
                        $("#kabupaten-dropdown").prop("disabled", false);
                        $('#kabupaten-dropdown').html('<option value="">-- Pilih Kabupaten --</option>');
                        $.each(result.kabupaten, function (key, value) {
                            $("#kabupaten-dropdown").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                        $('#kecamatan-dropdown').html('<option value="">-- Pilih Kecamatan --</option>');
                    }
                });
            });

            $('#kabupaten-dropdown').on('change', function () {
                var idKabupaten = this.value;
                $("#kecamatan-dropdown").html('');
                $.ajax({
                    url: "{{ route('admin.fetch-kecamatan') }}",
                    type: "POST",
                    data: {
                        kabupaten_id: idKabupaten,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    beforeSend: function() {
                        $("#kecamatan-dropdown").prop('disabled', true);
                        $("#kecamatan-dropdown").html('<option value="">Sedang Memuat...</option>');
                    },
                    success: function (res) {
                        $("#kecamatan-dropdown").prop('disabled', false);
                        $('#kecamatan-dropdown').html('<option value="">-- Pilih Kecamatan --</option>');
                        $.each(res.kecamatan, function (key, value) {
                            $("#kecamatan-dropdown").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@endpush
