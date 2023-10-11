<li class="sidebar-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.dashboard') }}">
        <i class="align-middle fe fe-sliders"></i> <span class="align-middle">Dashboard</span>
    </a>
</li>
<li class="sidebar-item {{ request()->routeIs('admin.desa*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.desa.index') }}">
        <i class="align-middle fe fe-sliders"></i> <span class="align-middle">Desa</span>
    </a>
</li>
<li class="sidebar-item {{ request()->routeIs('admin.message.*') ? 'active' : '' }}">
    <a class="sidebar-link" href="{{ route('admin.message.index') }}">
        <i class="align-middle fe fe-mail"></i>
        <span class="align-middle">Pesan</span>
    </a>
</li>
