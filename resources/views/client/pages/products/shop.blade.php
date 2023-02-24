@extends('client.layout.master')

@section('title', 'Danh sách ô tô')

@section('content-title', 'Danh sách ô tô')

@section('content')

  <!-- Inner Page Breadcrumb -->
  <section class="inner_page_breadcrumb style2 inner_page_section_spacing">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="breadcrumb_content style2">
            <h2 class="breadcrumb_title">Used Vehicles For Sale</h2>
            <p class="subtitle">Listings</p>
            <ol class="breadcrumb fn-sm mt15-sm">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Cars for Sale</li>
            </ol>
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
          <div class="sidebar_recent_viewed_widgets">
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
          </div>
          <div class="sidebar_vichel_avail_Widget">
            <div class="thumb"><img src="images/about/sidebar-vichel.jpg" alt="sidebar-vichel.jpg"></div>
            <div class="details">
              <div class="wrapper">
                <div class="title_count">20.597 <span><img src="images/home/title-bottom-border.svg" alt=""></span></div>
                <h4 class="title">Vehicle Available</h4>
                <p class="para">Find the right price, dealer and advice.</p>
                <p class="subtitle">CALL US NOW</p>
                <a class="phone_number" href="#">+1 670 936 46 70</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 col-xl-9">
          <div class="row">
            <div class="listing_filter_row db-767">
              <div class="col-lg-5">
                <div class="page_control_shorting left_area tac-sm mb30-767 mt15">
                  <p>We found <span class="heading-color fw600">4733</span> Cars available for you</p>
                </div>
              </div>
              <div class="col-lg-7">
                <div class="page_control_shorting right_area text-end tac-xsd">
                  <ul>
                    <li class="list-inline-item short_by_text listone">Sort by:</li>
                    <li class="list-inline-item listwo">
                      <select class="selectpicker show-tick">
                        <option>Date: newest First</option>
                        <option>Most Recent</option>
                        <option>Recent</option>
                        <option>Best Selling</option>
                        <option>Old Review</option>
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
                  <img src="images/listing/1.jpg" alt="1.jpg">
                  <div class="thmb_cntnt2">
                    <ul class="mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt3">
                    <ul class="mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="wrapper">
                    <h5 class="price">$129</h5>
                    <h6 class="title"><a href="page-car-single-v1.html">Volvo XC90 - 2020</a></h6>
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
                  </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="car-listing">
                <div class="thumb">
                  <div class="tag">FEATURED</div>
                  <img src="images/listing/2.jpg" alt="2.jpg">
                  <div class="thmb_cntnt2">
                    <ul class="mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt3">
                    <ul class="mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="wrapper">
                    <h5 class="price">$56</h5>
                    <h6 class="title"><a href="page-car-single-v1.html">Mercedes-Benz S 560 - 2021</a></h6>
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
                  </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="car-listing">
                <div class="thumb">
                  <div class="tag">FEATURED</div>
                  <img src="images/listing/3.jpg" alt="3.jpg">
                  <div class="thmb_cntnt2">
                    <ul class="mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt3">
                    <ul class="mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="wrapper">
                    <h5 class="price">$230</h5>
                    <h6 class="title"><a href="page-car-single-v1.html">BMW M8 Gran Coupe Base - 2021</a></h6>
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
                  </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="car-listing">
                <div class="thumb">
                  <div class="tag">FEATURED</div>
                  <img src="images/listing/5.jpg" alt="5.jpg">
                  <div class="thmb_cntnt2">
                    <ul class="mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt3">
                    <ul class="mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="wrapper">
                    <h5 class="price">$129</h5>
                    <h6 class="title"><a href="page-car-single-v1.html">Audi A8 L 55 - 2021</a></h6>
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
                  </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="car-listing">
                <div class="thumb">
                  <div class="tag">FEATURED</div>
                  <img src="images/listing/6.jpg" alt="6.jpg">
                  <div class="thmb_cntnt2">
                    <ul class="mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt3">
                    <ul class="mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="wrapper">
                    <h5 class="price">$56</h5>
                    <h6 class="title"><a href="page-car-single-v1.html">Land Rover Range Rover HSE Westminster</a></h6>
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
                  </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="car-listing">
                <div class="thumb">
                  <div class="tag">FEATURED</div>
                  <img src="images/listing/7.jpg" alt="7.jpg">
                  <div class="thmb_cntnt2">
                    <ul class="mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt3">
                    <ul class="mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="wrapper">
                    <h5 class="price">$230</h5>
                    <h6 class="title"><a href="page-car-single-v1.html">Bentley Bentayga V8 - 2020</a></h6>
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
                  </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="car-listing">
                <div class="thumb">
                  <div class="tag">FEATURED</div>
                  <img src="images/listing/4.jpg" alt="4.jpg">
                  <div class="thmb_cntnt2">
                    <ul class="mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt3">
                    <ul class="mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="wrapper">
                    <h5 class="price">$478</h5>
                    <h6 class="title"><a href="page-car-single-v1.html">Nıssan Qasqai - Sky Pack</a></h6>
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
                  </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="car-listing">
                <div class="thumb">
                  <div class="tag">FEATURED</div>
                  <img src="images/listing/8.jpg" alt="8.jpg">
                  <div class="thmb_cntnt2">
                    <ul class="mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt3">
                    <ul class="mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="wrapper">
                    <h5 class="price">$478</h5>
                    <h6 class="title"><a href="page-car-single-v1.html">Ferrari 488 Spider Base - 2019</a></h6>
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
                  </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
                        </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-4">
              <div class="car-listing">
                <div class="thumb">
                  <div class="tag">FEATURED</div>
                  <img src="images/listing/9.jpg" alt="9.jpg">
                  <div class="thmb_cntnt2">
                    <ul class="mb0">
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-photo-camera mr3"></span> 22</a></li>
                      <li class="list-inline-item"><a class="text-white" href="#"><span class="flaticon-play-button mr3"></span> 3</a></li>
                    </ul>
                  </div>
                  <div class="thmb_cntnt3">
                    <ul class="mb0">
                      <li class="list-inline-item"><a href="#"><span class="flaticon-shuffle-arrows"></span></a></li>
                      <li class="list-inline-item"><a href="#"><span class="flaticon-heart"></span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="details">
                  <div class="wrapper">
                    <h5 class="price">$478</h5>
                    <h6 class="title"><a href="#">Audi A3 Hatchback - 2021</a></h6>
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
                  </div>
                        <div class="listing_footer">
                          <ul class="mb0">
                            <li class="list-inline-item"><a href="#"><span class="flaticon-road-perspective me-2"></span>77362</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gas-station me-2"></span>Diesel</a></li>
                            <li class="list-inline-item"><a href="#"><span class="flaticon-gear me-2"></span>Automatic</a></li>
                          </ul>
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
