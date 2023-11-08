<header class="header-nav menu_style_home_one home3_style main-menu">
    <!-- Ace Responsive Menu -->
    <nav>
        <div class="container posr">
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="index.html" class="navbar_brand float-start dn-md">
                <img class="logo1 img-fluid" src="images/logo-mg-new2.png" alt="header-logo2.png">
                <img class="logo2 img-fluid" src="images/logo-mg-new2.png" alt="logo-mg-new2.png">
            </a>
            <!-- Responsive Menu Structure-->
            <ul id="respMenu" class="ace-responsive-menu menu_list_custom_code wa text-end"
                data-menu-style="horizontal">
                <li> <a href="{{ route('route_FrontEnd_Home') }}"><span class="title">Trang chủ</span></a></li>
                <li><a href="#"><span class="title">Về chúng tôi</span></a></li>
                <li> <a href="{{ route('route_FrontEnd_Car') }}"><span class="title">Ô tô</span></a>
                    {{-- <ul>
                        <li><a href="#">MG5</a></li>
                        <li><a href="#">MG ZS</a></li>
                    </ul> --}}
                </li>
                <li> <a href="#"><span class="title">Dịch vụ</span></a>
                    <ul>
                        <li><a href="#">Chính sách bảo hành</a></li>
                        <li><a href="#">Dịch vụ bảo dưỡng</a></li>
                        <li><a href="#">Dịch vụ sữa chữa</a></li>
                        <li><a href="/contact">Liên hệ</a></li>
                    </ul>
                </li>
                <li> <a href="/news"><span class="title">Tin tức</span></a></li>
                <li> <a href="#"><span class="title">Dự tính chi phí</span></a>
                    <ul>
                        <li><a href="#">Chi phí lăn bánh</a></li>
                        <li><a href="#">Chi phí trả góp</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
