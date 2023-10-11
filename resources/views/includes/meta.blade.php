<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="icon" type="image/x-icon" href="{{ asset('assets/img/icons/logo-desa-inovatif.png') }}">
{!! SEO::generate(true) !!}
<title>
    @yield('title', 'Desa Inovatif')
</title>
