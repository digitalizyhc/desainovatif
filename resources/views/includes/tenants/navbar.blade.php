<style>
    .navbar {
        background-color: white;
        color: #409D61;
    }

    .navbar-brand:hover {
        color: #409D61;
    }

    .nav-item {
        margin-inline: 10px;
    }

    .navbar-brand, a.nav-link, a.nav-link:not(:hover) {
        color: #409D61;
        font-weight: 500;
    }

    .navbar-toggler {
        background-color: #409D61;
    }

    a.nav-link:hover {
        color: #409D61;
        font-weight: 600;
    }

    .navbar-nav .nav-link.active {
        color: #409D61;
        font-weight: 700;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark sticky-top border-bottom">
    <div class="container">
        <a class="navbar-brand" href="{{ route('tenant.home') }}">
            <span>
                <img src="{{ asset('assets/img/icons/logo-desa-inovatif.png') }}" alt="" height="30px">
            </span>
            Desa
            <span class="fw-bold text-capitalize">
                {{ tenant('name') }}
            </span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('tenant.home') ? 'active' : '' }}" aria-current="page" href="{{ route('tenant.home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('tenant.infografis') ? 'active' : '' }}" href="{{ route('tenant.infografis') }}">Infografis</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('tenant.wisata') ? 'active' : '' }}" href="{{ route('tenant.wisata') }}">Wisata</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('tenant.produk*') ? 'active' : '' }}" href="{{ route('tenant.produk') }}">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('tenant.berita*') ? 'active' : '' }}" href="{{ route('tenant.berita') }}">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('tenant.contact') ? 'active' : '' }}" href="{{ route('tenant.contact') }}">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
