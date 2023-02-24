@extends('client.layout.master')

@section('title', 'Liên hệ')

@section('content-title', 'Liên hệ')

@section('content')

    <!-- Map -->
    <section class="our-contact p0 mt0 mt70-992">
        <div class="container-fluid p0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="h600" id="map-canvas"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section class="our-contact inner_page_section_spacing bgc-f9">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact_icon_box mb50">
                        <div class="details">
                            <h3 class="title">Thông tin</h3>
                            <p>CT5 — Tòa MHDI Lê Đức Thọ, Phường Mỹ Đình 2, <br>
                                Quận Nam Từ Liêm, Hà Nội</p>
                            <h4 class="subtitle">+1 670 936 46 70</h4>
                            <p>hello@voiture.com</p>
                            <div class="footer_social_widget">
                                <ul class="mb0">
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="form_grid">
                        <div class="wrapper">
                            <h3 class="title mb20">@yield('content-title')</h3>
                            <form class="contact_form" name="contact_form" action="#" method="post" novalidate>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Mẫu xe</label>
                                            <select class="form-control" name="" id="">
                                                <option value="0">--Chọn xe--</option>
                                                <option value="1">MG5</option>
                                                <option value="2">MG ZS</option>
                                            </select>
                                            {{-- <input class="form-control" type="text" placeholder="Message"> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Tên*</label>
                                            <input class="form-control" type="text" placeholder="Tên...">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Email*</label>
                                            <input class="form-control email" type="email"
                                                placeholder="creativelayers088@gmail.com">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Số điện thoại*</label>
                                            <input class="form-control" type="text" placeholder="Số điện thoại...">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="form-label">Nội dung</label>
                                            <textarea name="form_message" class="form-control" rows="6"></textarea>
                                        </div>
                                        <div class="form-group mb0">
                                            <button type="button" class="btn btn-thm">Nhận tư vấn</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
