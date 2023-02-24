@extends('client.layout.master')

@section('title', 'Trang chủ')

@section('content-title', 'Trang chủ')

@section('content')

    {{-- Banner --}}
    <section class="home-one mt0 mt70-992 p0">
        <div class="container-fluid p0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-banner-wrapper home3_style">
                        <div class="banner-style-one no-dots owl-theme owl-carousel">
                            <div class="slide slide-one" style="background-image: url(images/home/3.jpg);height: 640px;">
                            </div>
                            <div class="slide slide-one" style="background-image: url(images/home/2.jpg);height: 640px;">
                            </div>
                            <div class="slide slide-one" style="background-image: url(images/home/6.jpg);height: 640px;">
                            </div>
                        </div>
                        <div class="carousel-btn-block banner-carousel-btn">
                            <span class="carousel-btn left-btn"><i class="flaticon-left-arrow left"></i></span>
                            <span class="carousel-btn right-btn"><i class="flaticon-right-arrow right"></i></span>
                        </div><!-- /.carousel-btn-block banner-carousel-btn -->
                    </div><!-- /.main-banner-wrapper -->
                </div>
            </div>
        </div>
    </section>

    <!-- Category -->
    <section class="car-category mobile_space bgc-f9 z-2 pb100">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-4 col-lg col-xl wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay="0.1s">
                    <div class="category_item">
                        <div class="thumb">
                            <img src="images/category-item/1.png" alt="1.png">
                        </div>
                        <div class="details">
                            <p class="title"><a href="page-car-single-v1.html">Compact</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg col-xl wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay="0.3s">
                    <div class="category_item">
                        <div class="thumb">
                            <img src="images/category-item/2.png" alt="2.png">
                        </div>
                        <div class="details">
                            <p class="title"><a href="page-car-single-v1.html">Sedan</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg col-xl wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay="0.5s">
                    <div class="category_item">
                        <div class="thumb">
                            <img src="images/category-item/3.png" alt="3.png">
                        </div>
                        <div class="details">
                            <p class="title"><a href="page-car-single-v1.html">SUV</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-4 col-lg col-xl wow fadeInUp" data-wow-duration="1s"
                    data-wow-delay="0.7s">
                    <div class="category_item">
                        <div class="thumb">
                            <img src="images/category-item/4.png" alt="4.png">
                        </div>
                        <div class="details">
                            <p class="title"><a href="page-car-single-v1.html">Convertible</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg col-xl wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
                    <div class="category_item">
                        <div class="thumb">
                            <img src="images/category-item/5.png" alt="5.png">
                        </div>
                        <div class="details">
                            <p class="title"><a href="page-car-single-v1.html">Coupe</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Product  -->
    <section class="featured-product">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="main-title text-center">
                        <h2>Sản Phẩm</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="popular_listing_sliders row">
                        <!-- Nav tabs -->
                        <div class="nav nav-tabs col-lg-12 justify-content-center" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Tất
                                cả</button>
                            <button class="nav-link" id="nav-shopping-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-shopping" role="tab" aria-controls="nav-shopping"
                                aria-selected="false">MG5</button>
                            <button class="nav-link" id="nav-hotels-tab" data-bs-toggle="tab" data-bs-target="#nav-hotels"
                                role="tab" aria-controls="nav-hotels" aria-selected="false">MG ZS</button>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content col-lg-12" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">

                                <div class="row">
                                    @foreach ($cars as $car)
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="car-listing">
                                                <div class="thumb">

                                                    <img src="images/listing/1.jpg" alt="1.jpg">
                                                    <div class="thmb_cntnt2">
                                                        <ul class="mb0">
                                                            <li class="list-inline-item"><a class="text-white"
                                                                    href="#"><span
                                                                        class="flaticon-photo-camera mr3"></span>
                                                                    22</a></li>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="thmb_cntnt3">
                                                        <ul class="mb0">
                                                            <li class="list-inline-item"><a class="text-white"
                                                                    href="#"><span
                                                                        class="flaticon-play-button mr3"></span> 3</a>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="details">
                                                    <div class="wrapper">
                                                        <h6 class="title"><a
                                                                href="page-car-single-v1.html">{{ $car->name }}</a></h6>
                                                                @foreach($category as $cate)
                                                        <h5 class="price">{{$cate->price}}</h5>
                                                        @endforeach
                                                        <div class="listign_review">
                                                            <ul class="mb0">
                                                                <li class="list-inline-item"><a href="#"><i
                                                                            class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i
                                                                            class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i
                                                                            class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i
                                                                            class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#"><i
                                                                            class="fa fa-star"></i></a></li>
                                                                <li class="list-inline-item"><a href="#">4.7</a>
                                                                </li>
                                                                <li class="list-inline-item">(684 reviews)</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="listing_footer">
                                                        <ul class="mb0">
                                                            <li class="list-inline-item"><a href="#"><span
                                                                        class="flaticon-road-perspective me-2"></span>77362</a>
                                                            </li>
                                                            <li class="list-inline-item"><a href="#"><span
                                                                        class="flaticon-gas-station me-2"></span>Diesel</a>
                                                            </li>
                                                            <li class="list-inline-item"><a href="#"><span
                                                                        class="flaticon-gear me-2"></span>Automatic</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-shopping" role="tabpanel"
                                aria-labelledby="nav-shopping-tab">
                                <div class="row">
                                    <div class="col-sm-6 col-xl-3">
                                        <div class="car-listing">
                                            <div class="thumb">
                                                <div class="tag">mg5</div>
                                                <img src="images/listing/1.jpg" alt="1.jpg">
                                                <div class="thmb_cntnt2">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a class="text-white"
                                                                href="#"><span
                                                                    class="flaticon-photo-camera mr3"></span>
                                                                22</a></li>

                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="thmb_cntnt3">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a class="text-white"
                                                                href="#"><span
                                                                    class="flaticon-play-button mr3"></span> 3</a>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <div class="wrapper">
                                                    <h5 class="price">$129</h5>
                                                    <h6 class="title"><a href="page-car-single-v1.html">Volvo
                                                            XC90 -44444</a></h6>
                                                    <div class="listign_review">
                                                        <ul class="mb0">
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="fa fa-star"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="fa fa-star"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="fa fa-star"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="fa fa-star"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="fa fa-star"></i></a></li>
                                                            <li class="list-inline-item"><a href="#">4.7</a>
                                                            </li>
                                                            <li class="list-inline-item">(684 reviews)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="listing_footer">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a href="#"><span
                                                                    class="flaticon-road-perspective me-2"></span>77362</a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"><span
                                                                    class="flaticon-gas-station me-2"></span>Diesel</a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"><span
                                                                    class="flaticon-gear me-2"></span>Automatic</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="car-listing">
                                            <div class="thumb">
                                                <img src="images/listing/5.jpg" alt="5.jpg">
                                                <div class="thmb_cntnt2">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a class="text-white"
                                                                href="#"><span
                                                                    class="flaticon-photo-camera mr3"></span>
                                                                22</a></li>

                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="thmb_cntnt3">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a class="text-white"
                                                                href="#"><span
                                                                    class="flaticon-play-button mr3"></span> 3</a>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <div class="wrapper">
                                                    <h5 class="price">$129</h5>
                                                    <h6 class="title"><a href="page-car-single-v1.html">Audi A8 L
                                                            55 - 2021</a></h6>
                                                    <div class="listign_review">
                                                        <ul class="mb0">
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="fa fa-star"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="fa fa-star"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="fa fa-star"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="fa fa-star"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="fa fa-star"></i></a></li>
                                                            <li class="list-inline-item"><a href="#">4.7</a>
                                                            </li>
                                                            <li class="list-inline-item">(684 reviews)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="listing_footer">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a href="#"><span
                                                                    class="flaticon-road-perspective me-2"></span>77362</a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"><span
                                                                    class="flaticon-gas-station me-2"></span>Diesel</a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"><span
                                                                    class="flaticon-gear me-2"></span>Automatic</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-hotels" role="tabpanel" aria-labelledby="nav-hotels-tab">
                                <div class="row">
                                    <div class="col-sm-6 col-xl-3">
                                        <div class="car-listing">
                                            <div class="thumb">
                                                <img src="images/listing/1.jpg" alt="1.jpg">
                                                <div class="thmb_cntnt2">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a class="text-white"
                                                                href="#"><span
                                                                    class="flaticon-photo-camera mr3"></span>
                                                                22</a></li>

                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="thmb_cntnt3">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a class="text-white"
                                                                href="#"><span
                                                                    class="flaticon-play-button mr3"></span> 3</a>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <div class="wrapper">
                                                    <h5 class="price">$129</h5>
                                                    <h6 class="title"><a href="page-car-single-v1.html">Volvo
                                                            XC90 - hotel2020</a></h6>
                                                    <div class="listign_review">
                                                        <ul class="mb0">
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="fa fa-star"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="fa fa-star"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="fa fa-star"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="fa fa-star"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="fa fa-star"></i></a></li>
                                                            <li class="list-inline-item"><a href="#">4.7</a></li>
                                                            <li class="list-inline-item">(684 reviews)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="listing_footer">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a href="#"><span
                                                                    class="flaticon-road-perspective me-2"></span>77362</a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"><span
                                                                    class="flaticon-gas-station me-2"></span>Diesel</a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"><span
                                                                    class="flaticon-gear me-2"></span>Automatic</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="car-listing">
                                            <div class="thumb">
                                                <img src="images/listing/5.jpg" alt="5.jpg">
                                                <div class="thmb_cntnt2">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a class="text-white"
                                                                href="#"><span
                                                                    class="flaticon-photo-camera mr3"></span>
                                                                22</a></li>

                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="thmb_cntnt3">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a class="text-white"
                                                                href="#"><span
                                                                    class="flaticon-play-button mr3"></span> 3</a>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="details">
                                                <div class="wrapper">
                                                    <h5 class="price">$129</h5>
                                                    <h6 class="title"><a href="page-car-single-v1.html">Audi A8
                                                            L 55 - 2021</a></h6>
                                                    <div class="listign_review">
                                                        <ul class="mb0">
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="fa fa-star"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="fa fa-star"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="fa fa-star"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="fa fa-star"></i></a></li>
                                                            <li class="list-inline-item"><a href="#"><i
                                                                        class="fa fa-star"></i></a></li>
                                                            <li class="list-inline-item"><a href="#">4.7</a></li>
                                                            <li class="list-inline-item">(684 reviews)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="listing_footer">
                                                    <ul class="mb0">
                                                        <li class="list-inline-item"><a href="#"><span
                                                                    class="flaticon-road-perspective me-2"></span>77362</a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"><span
                                                                    class="flaticon-gas-station me-2"></span>Diesel</a>
                                                        </li>
                                                        <li class="list-inline-item"><a href="#"><span
                                                                    class="flaticon-gear me-2"></span>Automatic</a>
                                                        </li>
                                                    </ul>
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
            <div class="row mt20">
                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="page-list-v1.html" class="more_listing">Xem tất cả</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Delivery Divider -->
    <section class="deliver-divider bg-img1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="posr">
                        <div class="home1_divider_video_pop">
                            <div class="video_popup_icon">
                                <a class="video_popup_btn popup-img popup-youtube" href="https://youtu.be/ahn39A6ITwg">
                                    <span class="flaticon-play"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-xl-5">
                    <div class="home1_divider_content">
                        <h2 class="title">We Make Finding The Right Car Simple</h2>
                        <p class="para">At Voiture what matters to us is making your car search and buying
                            experience as simple as possible, so you can find the right car quickly and get on with
                            making it yours.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Listing -->
    <section class="popular-listing pt110 pb110">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h2>Popular Vehicles</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="home1_popular_listing home4_style">
                    <div class="listing_item_car_grid_slider ">
                        <div class="item">
                            <div class="carlisting-popular-vehicles">
                                <div class="details text-center">
                                    <div class="wrapper">
                                        <h6 class="title"><a href="page-car-single-v1.html">Mercedes-Benz S 560
                                                - 2021</a></h6>
                                        <div class="listign_review">
                                            <ul class="mb0">
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#"><i
                                                            class="fa fa-star"></i></a></li>
                                                <li class="list-inline-item"><a href="#">4.7</a></li>
                                                <li class="list-inline-item">(684 reviews)</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="thumb">
                                    <img class="img-fluid" src="images/item/1.png" alt="1.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials  -->
    <section class="our-testimonials-home1 pt120 pb120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="main-title text-center">
                        <h2>Testimonials</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial_slider_home1">
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="thumb">
                                    <img class="rounded-circle" src="images/testimonial/1.png" alt="1.png">
                                    <h4 class="title">Marvin McKinney <br><small>Marketing Coordinator</small>
                                    </h4>
                                </div>
                                <div class="details">
                                    <div class="icon"><span class="fa fa-quote-left"></span></div>
                                    <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus.
                                        Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum.
                                        Aenean imperdiet. Etiam ultricies cum sociis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="thumb">
                                    <img class="rounded-circle" src="images/testimonial/2.png" alt="2.png">
                                    <h4 class="title">Brooklyn Simmons <br><small>President of Sales</small></h4>
                                </div>
                                <div class="details">
                                    <div class="icon"><span class="fa fa-quote-left"></span></div>
                                    <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus.
                                        Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum.
                                        Aenean imperdiet. Etiam ultricies cum sociis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="thumb">
                                    <img class="rounded-circle" src="images/testimonial/1.png" alt="1.png">
                                    <h4 class="title">Marvin McKinney <br><small>Marketing Coordinator</small>
                                    </h4>
                                </div>
                                <div class="details">
                                    <div class="icon"><span class="fa fa-quote-left"></span></div>
                                    <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus.
                                        Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum.
                                        Aenean imperdiet. Etiam ultricies cum sociis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="thumb">
                                    <img class="rounded-circle" src="images/testimonial/2.png" alt="2.png">
                                    <h4 class="title">Brooklyn Simmons <br><small>President of Sales</small></h4>
                                </div>
                                <div class="details">
                                    <div class="icon"><span class="fa fa-quote-left"></span></div>
                                    <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus.
                                        Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum.
                                        Aenean imperdiet. Etiam ultricies cum sociis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="thumb">
                                    <img class="rounded-circle" src="images/testimonial/1.png" alt="1.png">
                                    <h4 class="title">Marvin McKinney <br><small>Marketing Coordinator</small>
                                    </h4>
                                </div>
                                <div class="details">
                                    <div class="icon"><span class="fa fa-quote-left"></span></div>
                                    <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus.
                                        Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum.
                                        Aenean imperdiet. Etiam ultricies cum sociis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial_box">
                                <div class="thumb">
                                    <img class="rounded-circle" src="images/testimonial/2.png" alt="2.png">
                                    <h4 class="title">Brooklyn Simmons <br><small>President of Sales</small></h4>
                                </div>
                                <div class="details">
                                    <div class="icon"><span class="fa fa-quote-left"></span></div>
                                    <p>Aliquam lorem ante, dapibus in, viverra nisi quis, feugiat a, tellus.
                                        Phasellus viverra deo nulla ut metus varius qui laoreet. Quisque sum rutrum.
                                        Aenean imperdiet. Etiam ultricies cum sociis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New -->
    <section class="our-blog pb90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="main-title text-center">
                        <h2>Bài viết</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s">
                    <div class="for_blog">
                        <div class="thumb">
                            <div class="tag">BLOG</div>
                            <img class="img-whp" src="images/blog/1.jpg" alt="1.jpg">
                        </div>
                        <div class="details">
                            <div class="wrapper">
                                <div class="bp_meta">
                                    <ul>
                                        <li class="list-inline-item"><a href="page-blog-single.html"><span
                                                    class="flaticon-user"></span>Brooklyn Simmons</a></li>
                                        <li class="list-inline-item"><a href="page-blog-single.html"><span
                                                    class="flaticon-chat"></span>12 Comments</a></li>
                                        <li class="list-inline-item"><a href="page-blog-single.html"><span
                                                    class="flaticon-calendar-1"></span>April 25, 2021</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="page-blog-single.html">2021 BMW 540i M Sport Review:
                                        Light on Sport, Heavy on Tech</a></h4>
                                <a href="page-blog-single.html" class="more_listing">Đọc Thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                    <div class="for_blog">
                        <div class="thumb">
                            <div class="tag">SUV</div>
                            <img class="img-whp" src="images/blog/2.jpg" alt="2.jpg">
                        </div>
                        <div class="details">
                            <div class="wrapper">
                                <div class="bp_meta">
                                    <ul>
                                        <li class="list-inline-item"><a href="page-blog-single.html"><span
                                                    class="flaticon-user"></span>Brooklyn Simmons</a></li>
                                        <li class="list-inline-item"><a href="page-blog-single.html"><span
                                                    class="flaticon-chat"></span>12 Comments</a></li>
                                        <li class="list-inline-item"><a href="page-blog-single.html"><span
                                                    class="flaticon-calendar-1"></span>April 25, 2021</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="page-blog-single.html">2022 Volkswagen Taos First
                                        Drive: Exactly as Good as It Needs to Be</a></h4>
                                <a href="page-blog-single.html" class="more_listing">Đọc thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="for_blog">
                        <div class="thumb">
                            <div class="tag">2021</div>
                            <img class="img-whp" src="images/blog/3.jpg" alt="3.jpg">
                        </div>
                        <div class="details">
                            <div class="wrapper">
                                <div class="bp_meta">
                                    <ul>
                                        <li class="list-inline-item"><a href="page-blog-single.html"><span
                                                    class="flaticon-user"></span>Brooklyn Simmons</a></li>
                                        <li class="list-inline-item"><a href="page-blog-single.html"><span
                                                    class="flaticon-chat"></span>12 Comments</a></li>
                                        <li class="list-inline-item"><a href="page-blog-single.html"><span
                                                    class="flaticon-calendar-1"></span>April 25, 2021</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="page-blog-single.html">2021 Kia Sorento Hybrid
                                        Review: Big Vehicle With Small-Vehicle Fuel Economy</a></h4>
                                <a href="page-blog-single.html" class="more_listing">Đọc thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
