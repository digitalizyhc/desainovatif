<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ auth()->user()->isAdmin ? route('home') : route('tenant.home')}}">
            <span class="align-middle text-capitalize">Desa {{ tenant('name') ? tenant('name') : 'Inovatif' }}</span>
        </a>

        <ul class="sidebar-nav">
            @if (auth()->user()->isAdmin)
                @include('includes.panels.menu.admin')
            @endif

            @if (auth()->user()->isTenant)
                @include('includes.panels.menu.tenant')
            @endif
        </ul>
    </div>
</nav>
