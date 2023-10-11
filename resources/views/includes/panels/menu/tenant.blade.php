<li class="sidebar-item {{ request()->routeIs('tenant.dashboard') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('tenant.dashboard') }}">
        <i class="align-middle fe fe-sliders"></i>
        <span class="align-middle">Dashboard</span>
    </a>
</li>
<li class="sidebar-item {{ request()->routeIs('tenant.profile*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('tenant.profile.index') }}">
        <i class="align-middle fe fe-user"></i>
        <span class="align-middle">Profile</span>
    </a>
</li>
<li class="sidebar-item {{ request()->routeIs('tenant.category.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('tenant.category.index') }}">
        <i class="align-middle fe fe-book"></i>
        <span class="align-middle">Kategori Artikel</span>
    </a>
</li>
<li class="sidebar-item {{ request()->routeIs('tenant.post.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('tenant.post.index') }}">
        <i class="align-middle fe fe-book"></i>
        <span class="align-middle">Artikel</span>
    </a>
</li>
<li class="sidebar-item {{ request()->routeIs('tenant.product.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('tenant.product.index') }}">
        <i class="align-middle fe fe-shopping-bag"></i>
        <span class="align-middle">Produk</span>
    </a>
</li>
<li class="sidebar-item {{ request()->routeIs('tenant.tour.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('tenant.tour.index') }}">
        <i class="align-middle fe fe-map"></i>
        <span class="align-middle">Wisata</span>
    </a>
</li>
<li class="sidebar-item {{ request()->routeIs('tenant.message.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('tenant.message.index') }}">
        <i class="align-middle fe fe-mail"></i>
        <span class="align-middle">Pesan</span>
    </a>
</li>
<li class="sidebar-item {{ request()->routeIs('tenant.infografis.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('tenant.infografis.setting') }}">
        <i class="align-middle fe fe-map-pin"></i>
        <span class="align-middle">Infografis</span>
    </a>
</li>
