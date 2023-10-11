@section('title', $title ?? 'Desa ' . (tenant('name')))
<x-panel-layout>
    <div class="container py-4">
        <div class="alert alert-primary" role="alert">
            Halo {{ auth()->user()->name }}, selamat datang di halaman dashboard.
        </div>
    </div>
</x-panel-layout>
