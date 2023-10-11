<nav class="navbar navbar-expand navbar-light navbar-bg shadow-sm">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <div>
        <p class="mb-0 fw-bold d-block d-md-none text-capitalize">Desa {{ tenant('name') ? tenant('name') : 'Inovatif' }}</p>
        <p class="mb-0 fw-bold d-none d-md-block text-capitalize">Desa {{ tenant('name') ? tenant('name') : 'Inovatif' }}</p>
    </div>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                    <div class="position-relative">
                        <i class="align-middle fe fe-bell"></i>
                        {{-- <span class="indicator">{{ auth()->user()->unreadNotifications->count() }}</span> --}}
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                    <div class="dropdown-menu-header">
                        Notifikasi
                    </div>
                    <div class="list-group">
                        <p class="list-group-item py-4 text-center">
                            -tidak ada notifikasi-
                        </p>
                        {{-- @forelse (auth()->user()->notifications->take(3) as $notification)
                        <div class="list-group-item py-1 text-center">
                                <p class="text-end m-0 p-0">{{ $notification->created_at->diffForHumans() }}</p>
                                @if ($notification->read_at == null)
                                    <span class="d-inline">&bullet;</span>
                                @endif
                                <a href="{{ route('mark-as-read', $notification->id) }}" class="stretched-link">
                                    {{ $notification->data['data'] }}
                                </a>
                            </div>
                        @empty
                            <p class="list-group-item py-4 text-center">
                                -belum ada notifikasi-
                            </p>
                        @endforelse
                        <a href="{{ route('notification') }}" class="btn btn-link">Lihat semua notifikasi</a> --}}
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle fe fe-settings"></i>
                </a>

                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                    <img src="{{ asset('assets/img/avatars/avatar.jpeg') }}"
                        class="avatar img-fluid rounded-circle me-1" alt="Charles Hall" /> <span
                        class="text-dark">{{ auth()->user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    {{-- <a class="dropdown-item" href="pages-profile.html"><i class="align-middle me-1"
                            data-feather="user"></i> Profile</a>
                    <div class="dropdown-divider"></div> --}}
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
