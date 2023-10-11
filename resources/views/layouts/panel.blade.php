<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
    @include('includes.meta')
    @include('includes.panels.styles')
    @stack('styles')
</head>

<body>
    <div class="wrapper">
        @include('includes.panels.sidebar')

        <div class="main">
            @include('includes.panels.navbar')

            <main class="content p-4">
                <div class="container-fluid p-0">
                    @include('includes.partials.flash-message')
                    {{ $slot }}
                </div>
            </main>

            @include('includes.panels.footer')
        </div>
    </div>

    <div class="modal fade open-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-white">
                    <h1 class="modal-title modal-title-custom fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-body-custom bg-white">
                    <div class="text-center py-5">
                        <div class="spinner-grow"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.panels.scripts')
    @stack('scripts')
</body>

</html>
