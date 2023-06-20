<div class="page-main">
    <!-- app-Header -->
    <div class="app-header header sticky">
        <div class="container-fluid main-container">
            <div class="d-flex">
                <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                <!-- sidebar-toggle-->
                <a class="logo-horizontal " href={{ url('adminhome') }}>
                    <img src="images/logo.png" class="header-brand-img desktop-logo" alt="logo">
                    <img src="images/logo.png" class="header-brand-img light-logo1"
                        alt="logo">
                </a>
                <!-- LOGO -->
                <div class="main-header-center ms-3 d-none d-lg-block"></div>

                <div class="d-flex order-lg-2 ms-auto header-right-icons">
                    <!-- SEARCH -->
                    <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                        aria-controls="navbarSupportedContent-4" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                    </button>
                    <div class="navbar navbar-collapse responsive-navbar p-0">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                            <div class="d-flex order-lg-2">
                                <div class="dropdown d-lg-none d-flex">
                                    <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                        <i class="fe fe-search"></i>
                                    </a>
                                    <div class="dropdown-menu header-search dropdown-menu-start">
                                        <div class="input-group w-100 p-2">
                                            <input type="text" class="form-control" placeholder="Search....">
                                            <div class="input-group-text btn btn-primary">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="d-flex country">
                                    <a class="nav-link icon text-center" data-bs-target="#country-selector"
                                        data-bs-toggle="modal">
                                        <i class="fe fe-globe"></i><span
                                            class="fs-16 ms-2 d-none d-xl-block">English</span>
                                    </a>
                                </div> --}}
                                <!-- COUNTRY -->
                                <div class="d-flex">
                                    <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                        <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                        <span class="light-layout"><i class="fe fe-sun"></i></span>
                                    </a>
                                </div>
                                <!-- Theme-Layout -->
                                <div class="dropdown  d-flex shopping-cart">
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <div class="header-dropdown-list message-menu">
                                        </div>
                                    </div>
                                </div>
                                <!-- CART -->
                                <div class="dropdown  d-flex notifications">
                                    <a class="nav-link icon" data-bs-toggle="dropdown"><i
                                            class="fe fe-bell"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <div class="drop-heading border-bottom">
                                            <div class="d-flex">
                                                <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">Notifications
                                                </h6>
                                            </div>
                                        </div>
                                        <div class="notifications-menu">
                                            @php
                                            $notifItemsAdmin = array_merge($notifrentalAdmin->toArray(), $notifserviceAdmin->toArray(), $notifdoorsmeerAdmin->toArray(), $notiforderAdmin->toArray());
                                            usort($notifItemsAdmin, function ($a, $b) {
                                                return strtotime($b['created_at']) - strtotime($a['created_at']);
                                            });
                                            @endphp
                                        
                                            @foreach ($notifItemsAdmin as $item)
                                                @if ($item['status'] == 'Menunggu' || $item['status'] == '1')
                                                    <a class="dropdown-item d-flex">
                                                        <div class="mt-1 wd-80p">
                                                            <h5 class="notification-label mb-1">{{ $item['pemberitahuan'] }}</h5>
                                                            <span class="notification-subtext"><?php echo Carbon\Carbon::parse($item['created_at'])->diffForHumans(); ?></span>
                                                        </div>
                                                    </a>
                                                @endif
                                            @endforeach
                                        </div>
                                        <div class="dropdown-divider m-0"></div>
                                        <a class="dropdown-item text-center p-3 text-muted"></a>
                                    </div>
                                </div>
                                <!-- NOTIFICATIONS -->
                                <!-- SIDE-MENU -->
                                <div class="dropdown d-flex profile-1">
                                    <a class="nav-link icon" data-bs-toggle="dropdown"><i
                                        class="fe fe-user"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                        <div class="drop-heading">
                                            <div class="text-center">
                                                <h5 class="text-dark mb-0 fs-14 fw-semibold">{{ auth()->user()->name }}</h5>
                                            </div>
                                        </div>
                                        <a class="dropdown-item" href="{{ url('logout') }}">
                                            <i class="dropdown-icon fe fe-alert-circle"></i> Logout
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- /app-Header -->

    <!--APP-SIDEBAR-->
    <div class="sticky">
        <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
        <div class="app-sidebar">
            <div class="side-header">
                <a class="header-brand1" href="{{ url('admin/home') }}">
                    <img src="{{ asset('images/tablogo.png') }}" class="header-brand-img desktop-logo" alt="logo">
                    <img src="{{ asset('images/tablogo.png') }}" class="header-brand-img toggle-logo"
                        alt="logo">
                    <img src="{{ asset('images/tablogo.png') }}" class="header-brand-img light-logo" alt="logo">
                    <img src="{{ asset('images/tablogo.png') }}" class="header-brand-img light-logo1"
                        alt="logo">
                </a>
                <!-- LOGO -->
            </div>
            <div class="main-sidemenu">
                <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                        fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                    </svg></div>
                <ul class="side-menu">
                    <li class="slide">
                        <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ url('admin/home') }}"><i
                                class="side-menu__icon fe fe-home"></i><span
                                class="side-menu__label">Beranda</span></a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                class="side-menu__icon fe fe-truck"></i><span
                                class="side-menu__label">Layanan</span><i
                                class="angle fe fe-chevron-right"></i>
                        </a>
                        <ul class="slide-menu">
                            <li class="panel sidetab-menu">
                                <div class="panel-body tabs-menu-body p-0 border-0">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="side1">
                                            <ul class="sidemenu-list">
                                                <li class="side-menu-label1"><a href="javascript:void(0)">Layanan</a></li>
                                                <li><a href="{{ url('admin/rental') }}" class="slide-item"> Rental Mobil</a></li>
                                                <li><a href="{{ url('admin/service') }}" class="slide-item"> Auto Service</a></li>
                                                <li><a href="{{ url('admin/doorsmeer') }}" class="slide-item"> Doorsmeer</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    @can('is-admin')
                    <li class="slide">
                        <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ url('admin/shop') }}"><i
                                class="side-menu__icon fe fe-shopping-cart"></i><span
                                class="side-menu__label">Shop</span></a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ url('admin/order') }}"><i
                                class="side-menu__icon fe fe-check-circle"></i><span
                                class="side-menu__label">Order</span></a>
                    </li>
                    @endcan
                    <li class="slide">
                        <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ url('admin/saran') }}"><i
                                class="side-menu__icon fe fe-edit"></i><span
                                class="side-menu__label">Kritik & Saran</span></a>
                    </li>
                    @can('is-admin')
                    <li class="slide">
                        <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ url('admin/user') }}"><i
                                class="side-menu__icon fe fe-user"></i><span
                                class="side-menu__label">User</span></a>
                    </li>
                    @endcan
                </ul>
                <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                        width="24" height="24" viewBox="0 0 24 24">
                        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                    </svg></div>
            </div>
        </div>
    </div>
    <!--/APP-SIDEBAR-->
</div>