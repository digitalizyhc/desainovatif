@if ($errors->any())
    <div class="alert alert-danger">
        <div class="fw-bold">Whoops! Terdapat kesalahan pada Inputan Anda. Silakan coba lagi!</div>
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
