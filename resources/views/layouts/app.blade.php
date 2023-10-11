<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    @include('includes.meta')
    @include('includes.styles')
</head>

<body>
    @include('includes.navbar')

    <main>
        {{ $slot }}
    </main>

    @include('includes.scripts')
</body>

</html>
