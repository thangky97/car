@extends('client.layout.master')

@section('title', 'Chi tiết ô tô')

@section('content-title', 'Chi tiết ô tô')

@section('content')

    <!-- Single Page Content Grid View -->
    <section class="our-agent-single pb90 bt1 pt30 mt70-992">
        <div class="container">
            <div class="row mt30 mb30">
                <div class="col-lg-7 col-xl-8">
                    <div class="single_page_heading_content">
                        <div class="car_single_content_wrapper">
                            <h2 class="title">{{ $car->name }}</h2>
                            <p class="para">{{ $car->title }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="single_page_heading_content text-start text-lg-end">
                        <div class="price_content">
                            <div class="price mt60 mb10 mt10-md">
                                {{-- <h3><small class="mr15"><del>$92,480</del></small>$89,480</h3> --}}
                                <h3><small class="mr15"></small>{{ number_format($car->price) }} đ</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-xl-8">
                    <div class="popular_listing_sliders single_page6_tabs row pr15">
                        <!-- Nav tabs -->
                        <div class="nav nav-tabs col-lg-12" role="tablist">
                            <button class="nav-link active" id="nav-description-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-description" role="tab" aria-controls="nav-description"
                                aria-selected="true">Mô tả</button>
                            <button class="nav-link" id="nav-overview-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-overview" role="tab" aria-controls="nav-overview"
                                aria-selected="false">Overview</button>
                            <button class="nav-link" id="nav-features-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-features" role="tab" aria-controls="nav-features"
                                aria-selected="false">Features</button>
                            <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review"
                                role="tab" aria-controls="nav-review" aria-selected="false">Reviews</button>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content col-lg-12" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-description" role="tabpanel"
                                aria-labelledby="nav-description-tab">
                                <div class="listing_single_description bdr_none pl0 pr0">
                                    <h4 class="mb30">Mô tả </h4>
                                    <p class="first-para">{{ $car->description }}</p>
                                    {{-- <p class="mb25">Occupying over 8,000 square feet, perched over 1,100 feet in
                                        the air with absolutely breathtaking panoramic 360-degree views of all of
                                        New York City and the surrounding tri-state area, The 82nd Floor at 432 Park
                                        Avenue has been completely reimagined by one of the most sought-after design
                                        houses in London and represents an utterly unique opportunity to own a
                                        globally significant property.</p>
                                    <p class="mt10 mb20">The Amrutha Lounge means port in the Turkish language,
                                        however the restaurant opens its doors to all aspects of the Mediterranean
                                        kitchen. The kitchen will be mostly focused on Mediterranean food; the
                                        owners of the restaurant are young professional chefs who can bring new,
                                        exciting tastes to Angel, Islington which will show through in the quality
                                        of food they prepare.</p> --}}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-overview" role="tabpanel" aria-labelledby="nav-overview-tab">
                                <div class="opening_hour_widgets p30 bdr_none pl0 pr0">
                                    <div class="wrapper">
                                        <h4 class="title">Overview</h4>
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div class="day">Make</div>
                                                </div>
                                                <span class="schedule">Volvo</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div class="day">Model</div>
                                                </div>
                                                <span class="schedule">XC 90</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div class="day">Color</div>
                                                </div>
                                                <span class="schedule">white</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div class="day">Drive Type</div>
                                                </div>
                                                <span class="schedule">4x4</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div class="day">Transmission</div>
                                                </div>
                                                <span class="schedule">Automatic</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div class="day">Condition</div>
                                                </div>
                                                <span class="schedule">Used</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div class="day">Year</div>
                                                </div>
                                                <span class="schedule">2021</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div class="day">Mileage</div>
                                                </div>
                                                <span class="schedule">280,000</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div class="day">Fuel Type</div>
                                                </div>
                                                <span class="schedule">Diesel</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div class="day">Engine Size</div>
                                                </div>
                                                <span class="schedule">5.2L</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div class="day">Doors</div>
                                                </div>
                                                <span class="schedule">5</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div class="day">Cylinders</div>
                                                </div>
                                                <span class="schedule">10</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                                <div class="me-auto">
                                                    <div class="day">VIN</div>
                                                </div>
                                                <span class="schedule">2D456THA798700213GT21</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-features" role="tabpanel"
                                aria-labelledby="nav-features-tab">
                                <div class="user_profile_service bdr_none pl0 pr0">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4 class="title">Features</h4>
                                        </div>
                                        <div class="col-lg-6 col-xl-6">
                                            <h5 class="subtitle">Convenience</h5>
                                        </div>
                                        <div class="col-lg-6 col-xl-5">
                                            <ul class="service_list">
                                                <li>Heated Seats</li>
                                                <li>Heated Steering Wheel</li>
                                                <li>Navigation System</li>
                                                <li>Power Liftgate</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-6">
                                            <h5 class="subtitle">Entertainment</h5>
                                        </div>
                                        <div class="col-lg-6 col-xl-5">
                                            <ul class="service_list">
                                                <li>Apple CarPlay/Android Auto</li>
                                                <li>Bluetooth</li>
                                                <li>HomeLink</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-6">
                                            <h5 class="subtitle">Exterior</h5>
                                        </div>
                                        <div class="col-lg-6 col-xl-5">
                                            <ul class="service_list">
                                                <li>Alloy Wheels</li>
                                                <li>Sunroof/Moonroof</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-6">
                                            <h5 class="subtitle">Safety</h5>
                                        </div>
                                        <div class="col-lg-6 col-xl-5">
                                            <ul class="service_list">
                                                <li>Backup Camera</li>
                                                <li>Blind Spot Monitor</li>
                                                <li>Brake Assist</li>
                                                <li>LED Headlights</li>
                                                <li>Stability Control</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <a class="fz12 tdu color-blue" href="#">View all features</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab">
                                <div class="user_profile_review bdr_none pl0 pr0">
                                    <div class="energy_class">
                                        <h4 class="mb30">Consumer reviews</h4>
                                        <div class="single_line">
                                            <p class="para">Comfort</p>
                                            <ul class="review">
                                                <li class="list-inline-item"><span class="total_rive_count">4.7</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="single_line">
                                            <p class="para">Interior design</p>
                                            <ul class="review">
                                                <li class="list-inline-item"><span class="total_rive_count">4.9</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="single_line">
                                            <p class="para">Performance</p>
                                            <ul class="review">
                                                <li class="list-inline-item"><span class="total_rive_count">4.6</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="single_line">
                                            <p class="para">Value for the money</p>
                                            <ul class="review">
                                                <li class="list-inline-item"><span class="total_rive_count">5.0</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="single_line">
                                            <p class="para">Exterior styling</p>
                                            <ul class="review">
                                                <li class="list-inline-item"><span class="total_rive_count">4.3</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="single_line bbn">
                                            <p class="para">Reliability</p>
                                            <ul class="review">
                                                <li class="list-inline-item"><span class="total_rive_count">4.0</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_single_content">
                                        <div class="mbp_pagination_comments">
                                            <div class="mbp_first d-flex db-414">
                                                <div class="flex-shrink-0">
                                                    <img src="images/blog/reviewer1.png" class="mr-3"
                                                        alt="reviewer1.png">
                                                </div>
                                                <div class="flex-grow-1 ms-4 ml0-414">
                                                    <h4 class="sub_title">Jane Cooper</h4>
                                                    <div class="sspd_postdate mb15">April 6, 2021 at 3:21 AM
                                                        <div class="sspd_review float-none float-sm-end">
                                                            <ul class="mb0 pl15 pl0-sm">
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
                                                                <li class="list-inline-item">(5 reviews)</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <p>Every single thing we tried with John was delicious! Found
                                                        some awesome places we would definitely go back to on our
                                                        trip. John was also super friendly and passionate about
                                                        Beşiktaş and Istanbul. </p>
                                                </div>
                                            </div>
                                            <div class="mbp_first d-flex db-414">
                                                <div class="flex-shrink-0">
                                                    <img src="images/blog/reviewer2.png" class="mr-3"
                                                        alt="reviewer2.png">
                                                </div>
                                                <div class="flex-grow-1 ms-4 ml0-414">
                                                    <h4 class="sub_title">Jane Cooper</h4>
                                                    <div class="sspd_postdate mb15">April 6, 2021 at 3:21 AM
                                                        <div class="sspd_review float-none float-sm-end">
                                                            <ul class="mb0 pl15 pl0-sm">
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
                                                                <li class="list-inline-item">(5 reviews)</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <p>Every single thing we tried with John was delicious! Found
                                                        some awesome places we would definitely go back to on our
                                                        trip. John was also super friendly and passionate about
                                                        Beşiktaş and Istanbul. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="user_review_form bdr_none pl0 pr0">
                                    <div class="bsp_reveiw_wrt">
                                        <h4 class="mt10">Write a Review</h4>
                                        <div class="df db-sm">
                                            <table class="table table-responsive table-borderless wa mr100 mr0-sm mb20">
                                                <thead>
                                                    <tr>
                                                        <th class="pl0" scope="col">Comfort</th>
                                                        <td>
                                                            <div class="sspd_review">
                                                                <ul class="mb0 pl15 pl0-lg">
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
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th class="pl0" scope="row">Performance</th>
                                                        <td>
                                                            <div class="sspd_review">
                                                                <ul class="mb0 pl15 pl0-lg">
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
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="pl0" scope="row">Exterior styling</th>
                                                        <td>
                                                            <div class="sspd_review">
                                                                <ul class="mb0 pl15 pl0-lg">
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
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table table-responsive table-borderless wa mb20">
                                                <thead>
                                                    <tr>
                                                        <th class="pl0" scope="col">Interior design</th>
                                                        <td>
                                                            <div class="sspd_review">
                                                                <ul class="mb0 pl15 pl0-lg">
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
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th class="pl0" scope="row">Value for the money</th>
                                                        <td>
                                                            <div class="sspd_review">
                                                                <ul class="mb0 pl15 pl0-lg">
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
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th class="pl0" scope="row">Reliability</th>
                                                        <td>
                                                            <div class="sspd_review">
                                                                <ul class="mb0 pl15 pl0-lg">
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
                                                                </ul>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <form class="comments_form">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control"
                                                            placeholder="Your Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="9" placeholder="Message"></textarea>
                                                    </div>
                                                    <button type="submit" class="btn btn-thm">Send Your
                                                        Review</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-4">
                    <div class="sidebar_seller_contact bgc-f9">
                        <div class="d-flex align-items-center mb30">
                            <div class="flex-shrink-0">
                                <img class="mr-3 author_img w60" src="images/team/seller.png" alt="author.png">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mt0 mb5 fz16 heading-color fw600">Volvo Cars Istanbul</h5>
                                <p class="mb0 tdu"><span class="flaticon-phone-call pr5 vam"></span>(302) 555-0107
                                </p>
                            </div>
                        </div>
                        <h4 class="mb30">Tư vấn</h4>
                        @if (Session::has('success'))
                            <div class="alert alert-success solid alert-dismissible fade show">
                                <span><i class="fas fa-check"></i></span>
                                <strong>{{ Session::get('success') }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="btn-close">
                                </button>
                            </div>
                        @endif
                        <form action="{{ route('route_FrontEnd_Contact_Create') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <input name="name" class="form-control form_control" type="text"
                                            placeholder="Tên">
                                        @error('name')
                                            <div>
                                                <p class="text-danger">{{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <input name="phone" class="form-control form_control" type="text"
                                            placeholder="Số điện thoại">
                                        @error('phone')
                                            <div>
                                                <p class="text-danger">{{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <input name="email" class="form-control form_control" type="email"
                                            placeholder="Email">
                                        @error('email')
                                            <div>
                                                <p class="text-danger">{{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <textarea name="content" class="form-control" placeholder="Mô tả" rows="6"></textarea>
                                        @error('content')
                                            <div>
                                                <p class="text-danger">{{ $message }}</p>
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <input name="car_id" value="{{ $id_car }}" hidden type="text">
                                <button type="submit" class="btn btn-block btn-thm mt10 mb20">Gửi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Shopping Product -->
    <section class="our-shop pb100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="listing_item_4grid_slider nav_none">
                        @foreach ($listCar as $car)
                            <div class="item">
                                <div class="car-listing">
                                    <div class="thumb">
                                        <div class="tag">FEATURED</div>
                                        <img src="{{ asset($car->image) ? '' . Storage::url($car->image) : $car->name }}"
                                            alt="1.jpg" style="height: 200px; width: 100%; object-fit: cover">
                                        <div class="thmb_cntnt2">
                                            <ul class="mb0">
                                                <li class="list-inline-item"><a class="text-white" href="#"><span
                                                            class="flaticon-photo-camera mr3"></span> 22</a></li>
                                                <li class="list-inline-item"><a class="text-white" href="#"><span
                                                            class="flaticon-play-button mr3"></span> 3</a></li>
                                            </ul>
                                        </div>
                                        <div class="thmb_cntnt3">
                                            <ul class="mb0">
                                                <li class="list-inline-item"><a href="#"><span
                                                            class="flaticon-shuffle-arrows"></span></a></li>
                                                <li class="list-inline-item"><a href="#"><span
                                                            class="flaticon-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="details">
                                        <div class="wrapper">
                                            <h5 class="price">{{ number_format($car->price) }} đ</h5>
                                            <h6 class="title"><a
                                                    href="{{ route('route_FrontEnd_Car_Detail', ['id' => $car->id]) }}">{{ $car->name }}</a>
                                            </h6>
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
                                                            class="flaticon-gas-station me-2"></span>Diesel</a></li>
                                                <li class="list-inline-item"><a href="#"><span
                                                            class="flaticon-gear me-2"></span>Automatic</a></li>
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
    </section>

    <!-- Our Footer -->

@endsection
