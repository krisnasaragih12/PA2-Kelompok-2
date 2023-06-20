<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Akun Saya - Doli Motor</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="images/tablogo.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="app-assets/css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="app-assets/css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="app-assets/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="app-assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

<!-- Body main wrapper start -->
<div class="body-wrapper">

    <!-- HEADER AREA START (header-4) -->
    <header class="ltn__header-area ltn__header-4 ltn__header-transparent gradient-color-2">
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black ltn__logo-right-menu-option">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="index.html"><img src="images/tablogo.png" alt="Logo"></a>
                            </div>
                            <div class="get-support clearfix get-support-color-white">
                                <div class="get-support-icon">
                                    <i class="icon-call"></i>
                                </div>
                                <div class="get-support-info">
                                    <h6>Get Support</h6>
                                    <h4><a href="tel:+123456789">0812-6268-356</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col header-menu-column menu-color-white">
                        <div class="header-menu d-none d-xl-block">
                            <nav>
                                <div class="ltn__main-menu">
                                    <ul>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li class="menu"><a href="{{ url('/') }}">Beranda</a>
                                        </li>
                                        <li class="menu"><a href="#">Layanan</a>
                                            <ul>
                                                <li><a href="{{ url('rental') }}">Rental Mobil</a></li>
                                                <li><a href="{{ url('service') }}">Auto Service</a></li>
                                                <li><a href="{{ url('doorsmer') }}">Doorsmer</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu"><a href="{{ url('shop') }}">Shop</a>
                                        </li>
                                        <li><a href="{{ url('contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="ltn__header-options ltn__header-options-2">
                        <!-- user-menu -->
                        <div class="ltn__drop-menu user-menu">
                            <ul>
                                <li>
                                    <a href="#"><i class="icon-user"></i></a>
                                    <ul>
                                        @guest
                                        <li><a href="{{ url('register') }}">Register</a></li>
                                        <li><a href="{{ url('login') }}">Login</a></li>
                                        @endguest
                                        @auth
                                        <li><a href="{{ url('akun') }}">Akun</a></li>
                                        <li><a href="{{ url('logout') }}">Logout</a></li>
                                        @endauth
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Mobile Menu Button -->
                        <div class="mobile-menu-toggle d-xl-none">
                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                    <path d="M300,320 L540,320" id="middle"></path>
                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <!-- Mobile Menu Button -->
                    <div class="mobile-menu-toggle menu-btn-white menu-btn-border--- d-xl-none">
                        <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                            <svg viewBox="0 0 800 600">
                                <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                <path d="M300,320 L540,320" id="middle"></path>
                                <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->

    <div class="ltn__utilize-overlay"></div>

    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area ltn__breadcrumb-area-2 ltn__breadcrumb-color-white bg-overlay-theme-black-90 bg-image" data-bs-bg="app-assets/images/home/6.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner ltn__breadcrumb-inner-2 justify-content-between">
                        <div class="section-title-area ltn__section-title-2">
                            <h6 class="section-subtitle ltn__secondary-color">//  Welcome to Doli Motor</h6>
                            <h1 class="section-title white-color">Akun Saya</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->

    <!-- WISHLIST AREA START -->
    <div class="liton__wishlist-area pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- PRODUCT TAB AREA START -->
                    <div class="ltn__product-tab-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="ltn__tab-menu-list mb-50">
                                        <div class="nav">
                                            <a class="active show" data-bs-toggle ="tab" href="#liton_tab_1_1">Akun <i class="fas fa-user"></i></a>
                                            <a data-bs-toggle ="tab" href="#liton_tab_1_2">Booking <i class="fas fa-file-alt"></i></a>
                                            <a data-bs-toggle ="tab" href="#liton_tab_1_3">Detail Order <i class="fas fa-arrow-down"></i></a>
                                            <a href="{{ url('logout') }}">Logout <i class="fas fa-sign-out-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="liton_tab_1_1">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <p>Hello <strong>{{ auth()->user()->name }}</strong> (Bukan <strong>{{ auth()->user()->name }}</strong>? <small><a href="{{ url('logout') }}">Log out</a></small> )</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="liton_tab_1_2">
                                            <div class="ltn__myaccount-tab-content-inner" style="margin-bottom: 50px;">
                                                <div class="text-center" style="margin-bottom: 10px;"><strong>Rental</strong></div>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Nomor</th>
                                                                <th>Tanggal Rental</th>
                                                                <th>Pengembalian</th>
                                                                <th>Type Mobil</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                            $reversed_rentals = $rentals->where('user_id', Auth::user()->id)->reverse();
                                                            @endphp

                                                            @foreach ($reversed_rentals as $item)
                                                                <tr>
                                                                    <td>{{ $loop->iteration }}</td>
                                                                    <td>{{ $item->tanggalrental }}</td>
                                                                    <td>{{ $item->tanggalpengembalian }}</td>
                                                                    <td>{{ $item->type }}</td>
                                                                    <td>{{ $item->status }}</td>
                                                                    <td>
                                                                        <b><a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#delete-rental-{{ $item->id }}">Batalkan</a></b>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="ltn__myaccount-tab-content-inner" style="margin-bottom: 50px;">
                                                <div class="text-center" style="margin-bottom: 10px;"><strong>AutoService</strong></div>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Nomor</th>
                                                                <th>Tanggal</th>
                                                                <th>Waktu</th>
                                                                <th>Tipe Mobil</th>
                                                                <th>Layanan</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                            $reversed_services = $services->where('user_id', Auth::user()->id)->reverse();
                                                            @endphp

                                                            @foreach ($reversed_services as $item)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                                                <td>{{ $item->waktu}}</td>
                                                                <td>{{ $item->tipemobil}}</td>
                                                                <td>{{ $item->layanan }}</td>
                                                                <td>{{ $item->status }}</td>
                                                                <td>
                                                                    <b><a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#delete-service-{{ $item->id }}">Batalkan</a></b>
                                                                </td>
                                                            </tr>    
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="ltn__myaccount-tab-content-inner" style="margin-bottom: 50px;">
                                                <div class="text-center" style="margin-bottom: 10px;"><strong>Doorsmeer</strong></div>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Nomor</th>
                                                                <th>Tanggal</th>
                                                                <th>Waktu</th>
                                                                <th>Tipe Mobil</th>
                                                                <th>Jenis Doorsmeer</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @php
                                                                $reversed_doorsmeers = $doorsmeers->where('user_id', Auth::user()->id)->reverse();
                                                            @endphp

                                                            @foreach ($reversed_doorsmeers as $item)
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                                                <td>{{ $item->waktu }}</td>
                                                                <td>{{ $item->tipekendaraan }}</td>
                                                                <td>{{ $item->jenis }}</td>
                                                                <td>{{ $item->status }}</td>
                                                                <td>
                                                                <b><a href="#" title="Add to Cart" data-bs-toggle ="modal" data-bs-target="#delete-doorsmeer-{{ $item->id }}">Batalkan</a></b>
                                                                </td>
                                                            </tr>    
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="liton_tab_1_3">
                                            <div class="ltn__myaccount-tab-content-inner">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Nomor</th>
                                                                <th>ID Pesanan</th>
                                                                <th>Tanggal</th>
                                                                <th>Total Harga</th>
                                                                <th>Selengkapnya</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        @php
                                                            $reversed_order_ps = $order_ps->where('user_id', Auth::user()->id)->reverse();
                                                            $order_ps_grouped = $reversed_order_ps->groupBy('id_order');
                                                        @endphp

                                                        @foreach ($order_ps_grouped as $group)
                                                            @php
                                                                $item = $group->first();
                                                                $total_harga = $group->sum('total_harga');
                                                            @endphp
                                                            <tr>
                                                                <td>{{ $loop->iteration }}</td>
                                                                <td>{{ $item->id_order }}</td>
                                                                <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                                                <td>Rp.{{ number_format($total_harga, 0, ',', '.') }}</td>
                                                                <td>
                                                                    <b><a href="{{ route('download-pdf', $item->id_order) }}">Download Here</a></b>
                                                                </td>
                                                            </tr>
                                                        @endforeach

                                                        </tbody>
                                                    </table>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PRODUCT TAB AREA END -->
                </div>
            </div>
        </div>
    </div>
    <!-- WISHLIST AREA START -->

    <!-- FOOTER AREA START (ltn__footer-2 ltn__footer-color-1) -->
    <footer id = "footer" class="ltn__footer-area ltn__footer-2 ltn__footer-color-1">
        <div class="footer-top-area  section-bg-2">
            <div class="container">
                <div class="row">
                    <div class="google-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4273.512469444017!2d98.97380259573357!3d2.024513102901373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e6e8bb68902c3%3A0xe62c3e5496d04234!2sDoli%20Motor%20Workshop%20%26%20Rental%20Tarutung!5e0!3m2!1sid!2sid!4v1677573583950!5m2!1sid!2sid" width="100%" height="85%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="col-xl-4 col-md-5">
                        <div class="footer-widget ltn__footer-timeline-widget ltn__footer-timeline-widget-1 bg-image bg-overlay-theme-black-90" data-bs-bg="img/bg/4.jpg">
                            <h6 class="ltn__secondary-color text-uppercase">// Jadwal</h6>
                            <h4 class="footer-title">Jam Buka Bengkel</h4>
                            <ul>
                                <li>Senin <span>07:30AM - 18:00PM</span></li>
                                <li>Selasa <span>07:30AM - 18:00PM</span></li>
                                <li>Rabu <span>07:30AM - 18:00PM</span></li>
                                <li>Kamis <span>07:30AM - 18:00PM</span></li>
                                <li>Jumat <span>07:30AM - 18:00PM</span></li>
                                <li>Sabtu <span>07:30AM - 18:00PM</span></li>
                                <li>Minggu <span>Tutup</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-7">
                        <div class="footer-widget footer-menu-widget footer-menu-widget-2-column clearfix">
                            <h4 class="footer-title">Auto Service</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li>General Repair</li>
                                    <li>Ganti Oli</li>
                                    <li>Alarm & Central Locks</li>
                                    <li>Immobilizer Programming</li>
                                    <li>Scanning ECU</li>
                                    <li>Air Conditioning (AC)</li>
                                </ul>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li>Service Rem</li>
                                    <li>AR/MT Transmission</li>
                                    <li>GPS Tracker</li>
                                    <li>Tune Up</li>
                                    <li>ABS & Brake System</li>
                                    <li>Electrical Repair</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="footer-widget footer-blog-widget">
                            <h4 class="footer-title">Rental</h4>
                            <div class="footer-menu">
                                <ul>
                                    <li>Toyota Grand New Avanza</li>
                                    <li>Toyota Kijang Innova Reborn</li>
                                    <li>Toyota Fortuner VRZ</li>
                                    <li>Daihatsuz Grand New Xenia</li>
                                    <li>VW Safari Wedding Car</li>
                                    <li>Hyundai H-1</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ltn__copyright-area ltn__copyright-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="site-logo-wrap">
                            <div class="site-logo">
                                <a href="#"><img src="images/tablogo.png" alt="Logo"></a>
                            </div>
                            <div class="get-support ltn__copyright-design clearfix">
                                <div class="get-support-info">
                                    <h6>Copyright & Design By</h6>
                                    <h4>Group 2 PA II - <span class="current-year">2023</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER AREA END -->

    <!-- MODAL AREA START (Add To Cart Modal) -->
    @foreach ($rentals as $item)
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="delete-rental-{{ $item->id }}" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                         <div class="modal-product-info">
                                            <h5 style="text-align: center;"><a>Action</a></h5>
                                            <p class="added-cart" style="text-align: center;">Apakah anda yakin ingin membatalkan dan menghapus bookingan anda?</p>
                                            <div class="btn-wrapper" style="text-align: center;">
                                                <form action="{{ route('rental.destroy',$item->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="theme-btn-1 btn btn-effect-1">Batalkan Sekarang</a></button>
                                                </form>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @foreach ($services as $item)
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="delete-service-{{ $item->id }}" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                         <div class="modal-product-info">
                                            <h5 style="text-align: center;"><a>Action</a></h5>
                                            <p class="added-cart" style="text-align: center;">Apakah anda yakin ingin menghapus bookingan anda?</p>
                                            <div class="btn-wrapper" style="text-align: center;">
                                                <form action="{{ route('service.destroy',$item->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="theme-btn-1 btn btn-effect-1">Hapus Sekarang</a></button>
                                                </form>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @foreach ($doorsmeers as $item)
    <div class="ltn__modal-area ltn__add-to-cart-modal-area">
        <div class="modal fade" id="delete-doorsmeer-{{ $item->id }}" tabindex="-1">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                         <div class="ltn__quick-view-modal-inner">
                             <div class="modal-product-item">
                                <div class="row">
                                    <div class="col-12">
                                         <div class="modal-product-info">
                                            <h5 style="text-align: center;"><a>Action</a></h5>
                                            <p class="added-cart" style="text-align: center;">Apakah anda yakin ingin menghapus bookingan anda?</p>
                                            <div class="btn-wrapper" style="text-align: center;">
                                                <form action="{{ route('doorsmeer.destroy',$item->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="theme-btn-1 btn btn-effect-1">Hapus Sekarang</a></button>
                                                </form>
                                            </div>
                                         </div>
                                    </div>
                                </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- MODAL AREA END -->

</div>
<!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="app-assets/js/plugins.js"></script>
    <!-- Main JS -->
    <script src="app-assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if(session()->has('success'))
        toastr.options = {
            "closeButton": true
        }
        toastr.success("{{ session()->get('success') }}")
        @endif
    </script>
    <script>
        @if(session()->has('error'))
        toastr.options = {
            "closeButton": true
        }
        toastr.error("{{ session()->get('error') }}")
        @endif
    </script>
  
</body>
</html>

