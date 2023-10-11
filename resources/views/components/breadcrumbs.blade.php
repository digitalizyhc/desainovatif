@props(['links' => [], 'active' => null])

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('tenant.home') }}" class="text-success text-decoration-none">Home</a>
        </li>
        @foreach ($links as $link)
            <li class="breadcrumb-item">
                <a href="{{ $link['url'] }}" class="text-success text-decoration-none">{{ $link['name'] }}</a>
            </li>
        @endforeach
        <li class="breadcrumb-item active" aria-current="page">{{ $active }}</li>
    </ol>
</nav>
