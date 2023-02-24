@extends('client.layout.master')

@section('title', 'Danh sách ô tô')

@section('content-title', 'Danh sách ô tô')

@section('content')

  <!-- Inner Page Breadcrumb -->
  <section class="inner_page_breadcrumb style2 inner_page_section_spacing">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <h2 class="breadcrumb_content style2">Danh sách ô tô</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Listing Product -->
  <section class="our-listing pt0 bgc-f9 pb30-991">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-xl-3 dn-md">
          <div class="sidebar_feature_listing_widget">
            <h4 class="title">@yield('contet-title')</h4>
            <div class="listing_item_1grid_slider nav_none">
              <div class="item">
                <div class="car-listing sidebar_style">
                  <div class="thumb">
                    <img src="images/listing/16.jpg" alt="16.jpg">
                  </div>
                  <div class="details">
                    <div class="wrapper">
                      <h5 class="price">$129</h5>
                      <h6 class="title"><a href="page-car-single-v1.html">Mercedes-Benz S 560 - 2021</a></h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="car-listing sidebar_style">
                  <div class="thumb">
                    <img src="images/listing/16.jpg" alt="16.jpg">
                  </div>
                  <div class="details">
                    <div class="wrapper">
                      <h5 class="price">$129</h5>
                      <h6 class="title"><a href="page-car-single-v1.html">Mercedes-Benz S 560 - 2021</a></h6>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="car-listing sidebar_style">
                  <div class="thumb">
                    <img src="images/listing/16.jpg" alt="16.jpg">
                  </div>
                  <div class="details">
                    <div class="wrapper">
                      <h5 class="price">$129</h5>
                      <h6 class="title"><a href="page-car-single-v1.html">Mercedes-Benz S 560 - 2021</a></h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- <div class="sidebar_recent_viewed_widgets">
            <h4 class="title">Recently Viewed</h4>
            <div class="d-flex mb20">
              <div class="flex-shrink-0">
                <img class="align-self-start mr-3" src="images/blog/s1.jpg" alt="s1.jpg">
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="post_title">$129</h5>
                <p>BMW M8 Gran Coupe</p>
                <p>Base - 2021</p>
              </div>
            </div>
            <div class="d-flex mb20">
              <div class="flex-shrink-0">
                <img class="align-self-start mr-3" src="images/blog/s2.jpg" alt="s2.jpg">
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="post_title">$129</h5>
                <p>Bentley Bentayga</p>
                <p>V8 - 2020</p>
              </div>
            </div>
            <div class="d-flex">
              <div class="flex-shrink-0">
                <img class="align-self-start mr-3" src="images/blog/s3.jpg" alt="s3.jpg">
              </div>
              <div class="flex-grow-1 ms-3">
                <h5 class="post_title">$129</h5>
                <p>Ferrari 488 Spider</p>
                <p>Base - 2019</p>
              </div>
            </div>
          </div> --}}
        </div>
        <div class="col-lg-8 col-xl-9">
          <div class="row">
            <div class="listing_filter_row db-767">
              <div class="col-lg-5">
                <div class="page_control_shorting left_area tac-sm mb30-767 mt15">
                  <p>Chúng tôi có <span class="heading-color fw600">4733</span> ô tô có sẵn</p>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="page_control_shorting right_area text-end tac-xsd">
                  <ul>
                    <li class="list-inline-item short_by_text listone">Sắp xếp:</li>
                    <li class="list-inline-item listwo">
                      <select class="selectpicker show-tick">
                        <option>Mới nhất</option>
                        <option>Gần đây</option>
                      </select>
                    </li>
                    <li class="list-inline-item list-gird"><a href="#"><img src="images/icon/list-grid.svg" alt="list-grid.svg"></a></li>
                    <li class="list-inline-item list-list"><a href="#"><img src="images/icon/list-list.svg" alt="list-list.svg"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-xl-4">
              <div class="car-listing">
                <div class="thumb">
                  <div class="tag">FEATURED</div>
                  <img src="images/listing/9.jpg" alt="9.jpg">
                  <div class="thmb_cntnt2">
                    <ul class="mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
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
                    <div class="listign_review">
                      <ul class="mb0">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                        <li class="list-inline-item"><a href="#">4.7</a></li>
                        <li class="list-inline-item">(684 reviews)</li>
                      </ul>
                    </div>
                    <h5 class="price mt-3">$478</h5>
                    <h6 class="title"><a href="#">Audi A3 Hatchback - 2021</a></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="mbp_pagination mt10">
                <ul class="page_navigation">
                  <li class="page-item">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="fa fa-arrow-left"></span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#"><span class="fa fa-arrow-right"></span></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
