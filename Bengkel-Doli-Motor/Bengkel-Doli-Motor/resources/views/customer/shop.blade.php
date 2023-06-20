<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shop - Doli Motor</title>
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
<div class="wrapper">

    <!-- HEADER AREA START (header-4) -->
    <header class="ltn__header-area ltn__header-4 ltn__header-transparent gradient-color-2">
        <!-- ltn__header-middle-area start -->
        <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-black ltn__logo-right-menu-option plr--9">
            <div class="container-fluid">
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
                                        <li><a href="{{ url('keranjang') }}">Keranjang</a></li>
                                        <li><a href="{{ url('contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div class="ltn__header-options ltn__header-options-2">
                        <!-- Notifications -->
                        <div class="mini-cart-icon">
                            <a href="#ltn__notifikasi-cart-menu" class="ltn__utilize-toggle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                  </svg>
                            </a>
                        </div>
                        <!-- Notifications -->
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
                </div>
            </div>
        </div>
        <!-- ltn__header-middle-area end -->
    </header>
    <!-- HEADER AREA END -->

<!-- Notifikasi Cart Menu Start -->
@auth
<div id="ltn__notifikasi-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
    <div class="ltn__utilize-menu-inner ltn__scrollbar">
        <div class="ltn__utilize-menu-head">
            <span class="ltn__utilize-menu-title">Notifikasi</span>            
        </div>
        <div class="mini-cart-product-area ltn__scrollbar" style="height: 3000px;">
            @php
            $notifItems = array_merge($notifrental->toArray(), $notifservice->toArray(), $notifdoorsmeer->toArray(), $notiforder->toArray());
            usort($notifItems, function ($a, $b) {
                return strtotime($b['updated_at']) - strtotime($a['updated_at']);
            });
            @endphp
        
            @foreach ($notifItems as $item)
            @if ($item['status'] == 'Disetujui' || $item['status'] == 'Ditolak' || $item['status'] == '2' || $item['status'] == '3')
                @if (!empty($item['pemberitahuan']))
                    <div class="mini-cart-item clearfix">
                        <div class="mini-cart-info">          
                            @if($item['pemberitahuan'] == "Booking rental Anda telah diterima" || $item['pemberitahuan'] == "Booking rental Anda ditolak")                                      
                            <form action="{{ route('delete_rentalnotif', $item['id']) }}" method="post" enctype="multipart/form">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn-ltn__utilize-close" style="float: right; margin-right: 7px;">×</button>
                            </form>                            
                            @endif
                            @if($item['pemberitahuan'] == "Booking service Anda telah diterima" || $item['pemberitahuan'] == "Booking service Anda ditolak")                                      
                            <form action="{{ route('delete_servicenotif', $item['id']) }}" method="post" enctype="multipart/form">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn-ltn__utilize-close" style="float: right; margin-right: 7px;">×</button>
                            </form>
                            @endif
                            @if($item['pemberitahuan'] == "Booking doorsmeer Anda telah diterima" || $item['pemberitahuan'] == "Booking doorsmeer Anda ditolak")
                            <form action="{{ route('delete_doorsmeernotif', $item['id']) }}" method="post" enctype="multipart/form">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn-ltn__utilize-close" style="float: right; margin-right: 7px;">×</button>
                            </form>
                            @endif
                            @if($item['pemberitahuan'] == "Pesanan anda Telah Diterima" || $item['pemberitahuan'] == "Pesanan anda Ditolak")
                            <form action="{{ route('delete_ordernotif', $item['id']) }}" method="post" enctype="multipart/form">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn-ltn__utilize-close" style="float: right; margin-right: 7px;">×</button>
                            </form>
                            @endif
                            <h6>
                                <a href="#" style="margin-right: 25px;">{{ $item['pemberitahuan'] }}</a>
                            </h6>
                            <span class="mini-cart-quantity"><?php echo Carbon\Carbon::parse($item['updated_at'])->diffForHumans(); ?></span>
                        </div>
                    </div>
                @endif
            @endif
            @endforeach

    
        </div>
        
        <div class="mini-cart-footer">
            <div class="btn-wrapper">
                <a></a>
                <a href="{{ url('akun') }}" class="theme-btn-2 btn btn-effect-2">Selengkapnya</a>
            </div>
        </div>

    </div>
</div>
@endauth
<!-- Notifikasi Cart Menu End -->

    <div class="ltn__utilize-overlay"></div>

    <!-- SLIDER AREA START (slider-1) -->
    <div class="ltn__slider-area ltn__slider-6 mb-120---">
        <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
            <!-- ltn__slide-item -->
            <div class="ltn__slide-item section-bg-1">
                <div class="ltn__slide-item-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-7 col-sm-7 align-self-center">
                                <div class="slide-item-info">
                                    <div class="slide-item-info-inner ltn__slide-animation">
                                        <h4 class="slide-sub-title ltn__secondary-color animated text-uppercase">Welcome to our shop</h4>
                                        <h1 class="slide-title  animated">Sparepart & Accessoris</h1>
                                        <div class="slide-brief animated">
                                            <p>Beli suku cadang & Accessoris berkualitas untuk keamanan dan kenyamanan kendaraanmu</p>
                                        </div>
                                        <div class="btn-wrapper  animated">
                                            <a href="#product" class="theme-btn-1 btn btn-effect-1 text-uppercase">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-5 col-sm-5 align-self-center">
                                <div class="slide-item-img">
                                    <a><img src="app-assets/images/shop/1.png" alt="Image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SLIDER AREA END -->
    
    <!-- PRODUCT DETAILS AREA START -->
    <div class="ltn__product-area ltn__product-gutter mb-100" id="product">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__shop-options">
                        <ul>
                            <li>
                            </li>
                            <li>
                            </li>
                            <li> 
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row">
                                    @php
                                    $randomShop = collect($shop)->shuffle();
                                    @endphp
                                    @foreach($randomShop as $shp)
                                    <!-- ltn__product-item -->
                                    <div class="col-xl-3 col-lg-4 col-sm-6 col-6">
                                        <div class="ltn__product-item ltn__product-item-3 text-center">
                                            <div class="product-img">
                                                <a>
                                                    <img src="{{ asset('images/'.$shp->gambar) }}" alt="#" style="display: inline-block; width: 286,8px; height: 239px; overflow: hidden;">
                                                </a>
                                                <div class="product-hover-action">
                                                    <ul>
                                                        <li>
                                                            <a href="#" data-max="{{ $shp->stok }}" data-productname="{{$shp->nama}}" data-product="{{$shp->id}}" data-img="{{ asset('images/'.$shp->gambar) }}" title="Add to Cart" class="show_modal_add">
                                                                <i class="fas fa-shopping-cart"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-ratting">
                                                </div>
                                                <h2 class="product-title"><a>{{ $shp->nama }}</a></h2>
                                                <div class="product-price">
                                                    <span>Rp. {{number_format($shp->harga, 2,',','.')  }}</span>
                                                </div>
                                                <div class="product-info-brief">
                                                    <ul>
                                                        <li style="display: block; text-align: center; margin: 0 auto; margin-top: 20px;color: rgba(15, 195, 57, 0.621)">
                                                            <span>Stok : {{ $shp->stok }}</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT DETAILS AREA END -->

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
                                <a href="index.html"><img src="images/tablogo.png" alt="Logo"></a>
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

    
    <!-- MODAL AREA END -->

</div>


<!-- MODAL AREA START (Add To Cart Modal) -->
<div class="ltn__modal-area ltn__add-to-cart-modal-area">
    <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
                $user = Session::get('set_customerdata');
                ?>
                <div class="modal-body">
                        <div class="ltn__quick-view-modal-inner">
                            <div class="modal-product-item">
                            <div class="row">
                                <div class="col-12">
                                    <div class="modal-product-img">
                                        <img src="app-assets/img/product/1.png" id="imgaddcart" alt="#">
                                    </div>
                                        <div class="modal-product-info">
                                        <h5 id="productname"></h5>
                                        <form method="POST" action="{{route('addCart.post')}}">
                                        @csrf
                                        <input type="hidden" id="id_customer" name="id_customer" value="{{$user->id}}" class="form-control">
                                        <input type="hidden" id="id_product" name="id_product" class="form-control">
                                        <input required class="form-control input-sm" id="qty" name="qty" type="number" value="1" min="1" placeholder="Jumlah">
                                        <div class="btn-wrapper">
                                            <button type="submit" class="theme-btn-1 btn btn-effect-1">Add to Cart</button>
                                        </div>
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
<!-- Body main wrapper end -->

    
    <!-- All JS Plugins -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('.show_modal_add').on('click', function(){
            let img = $(this).data('img');
            $('#add_to_cart_modal').modal('show');
            $('#imgaddcart').attr('src',img);
            $('#id_product').val($(this).data('product'));
            $('#productname').html($(this).data('productname'));
            $('#qty').attr('max', $(this).data('max'));
        });
    </script>
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

