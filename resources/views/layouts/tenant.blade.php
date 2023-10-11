<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    @include('includes.meta')
    @include('includes.styles')
    @stack('styles')
</head>

<body>
    @if (tenant('id'))
        @include('includes.tenants.navbar')
    @else
        @include('includes.navbar')
    @endif

    <main style="background-color: white">
        {{ $slot }}
        @include('includes.tenants.footer')
    </main>

    @include('includes.scripts')
    @stack('scripts')
</body>

</html>
