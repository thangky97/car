<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="auto, car, car dealer, car dealership, car listing, cars, classified, dealership, directory, listing, modern, motors, responsive">
    <meta name="description" content="MG Miền Bắc - Website bán ô tô MG">
    <meta name="CreativeLayers" content="ATFN">
    
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    
    <title>@yield('title') - MG Miền Bắc</title>
    
    <link href="{{ asset('images/favicon.png') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset('images/favicon.png') }}" sizes="128x128" rel="shortcut icon" />

</head>

<body>
    <div class="wrapper ovh">

        <!-- Header -->
        @include('client.layout.header')

        <!-- Header Nav For Mobile -->
        <div id="page" class="stylehome1 h0">
            <div class="mobile-menu">
                <div class="header stylehome1">
                    <div class="mobile_menu_bar">
                        <a class="menubar" href="#menu"><span></span></a>
                    </div>
                    <div class="mobile_menu_main_logo"><img class="nav_logo_img img-fluid" src="images/logo-mg-new2.png"
                            alt="images/logo-mg-new2.png"></div>
                </div>
            </div>
            <!-- /.mobile-menu -->
            <nav id="menu" class="stylehome1">
                <ul>
                    <li> <a href="#"><span class="title">Trang chủ</span></a></li>
                    <li> <a href="#"><span class="title">Explore</span></a>
                        <!-- Level Two-->
                        <ul>
                            <li><a href="page-dashboard.html">Dashboard</a></li>
                            <li><a href="page-dashboard-profile.html">Profile</a></li>
                            <li><a href="page-login.html">Logout</a></li>
                        </ul>
                    </li>
                    <li> <a href="#"><span class="title">Tin tức</span></a></li>
                    <li> <a href="#"><span class="title">Sản phẩm</span></a></li>
                    <li> <a href="#"><span class="title">Dịch vụ</span></a></li>
                    <li> <a href="#"><span class="title">Pages</span></a>
                        <ul>
                            <li><a href="page-about.html">About Us</a></li>
                            <li><a href="page-calculator.html">Calculator</a></li>
                            <li><a href="page-compare.html">Compare</a></li>
                            <li><a href="page-contact.html">Contact</a></li>
                            <li><a href="page-faq.html">Faq</a></li>
                            <li><a href="page-login.html">Login</a></li>
                            <li><a href="page-register.html">Register</a></li>
                            <li><a href="page-service.html">Service</a></li>
                        </ul>
                    </li>
                    <!-- Only for Mobile View -->
                    <li class="mm-add-listing">
                        <span class="border-none">
                            <span class="mmenu-contact-info">
                                <span class="phone-num"><i class="flaticon-map"></i> <a href="#">47 Bakery Street,
                                        London, UK</a></span>
                                <span class="phone-num"><i class="flaticon-phone-call"></i> <a
                                        href="#">1-800-458-56987</a></span>
                                <span class="phone-num"><i class="flaticon-clock"></i> <a href="#">Mon - Fri 8:00
                                        - 18:00</a></span>
                            </span>
                            <span class="social-links">
                                <a href="#"><span class="fab fa-facebook-f"></span></a>
                                <a href="#"><span class="fab fa-twitter"></span></a>
                                <a href="#"><span class="fab fa-instagram"></span></a>
                                <a href="#"><span class="fab fa-youtube"></span></a>
                                <a href="#"><span class="fab fa-pinterest"></span></a>
                            </span>
                        </span>
                    </li>
                </ul>
            </nav>
        </div>

        @yield('content')

        <!-- Footer -->
        @include('client.layout.footer')
    </div>
    
    <script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mmenu.all.js') }}"></script>
    <script src="{{ asset('js/ace-responsive-menu.js') }}"></script>
    <script src="{{ asset('js/isotop.js') }}"></script>
    <script src="{{ asset('js/snackbar.min.js') }}"></script>
    <script src="{{ asset('js/simplebar.js') }}"></script>
    <script src="{{ asset('js/parallax.js') }}"></script>
    <script src="{{ asset('js/scrollto.js') }}"></script>
    <script src="{{ asset('js/jquery-scrolltofixed-min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/progressbar.js') }}"></script>
    <script src="{{ asset('js/slider.js') }}"></script>
    <script src="{{ asset('js/timepicker.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
