@extends('client.layout.master')

@section('title', 'Bài viết')

@section('content-title', 'Bài viết')

@section('content')
    <!-- Inner Page Breadcrumb -->
        <div class="container mt90">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb_content">
                        <h2 class="breadcrumb_title">@yield('content-title')</h2>
                    </div>
                </div>
            </div>
        </div>

    <!-- Main Blog Post Content -->
    <section class="blog_post_container inner_page_section_spacing">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="for_blog">
                        <div class="thumb">
                            <div class="tag">BLOG</div>
                            <img class="img-whp" src="images/blog/1.jpg" alt="1.jpg">
                        </div>
                        <div class="details">
                            <div class="wrapper">
                                <div class="bp_meta">
                                    <ul>
                                        <li class="list-inline-item"><a href="/new/detail"><span
                                                    class="flaticon-user"></span>Brooklyn Simmons</a></li>
                                        <li class="list-inline-item"><a href="/new/detail"><span
                                                    class="flaticon-chat"></span>12 Comments</a></li>
                                        <li class="list-inline-item"><a href="/new/detail"><span
                                                    class="flaticon-calendar-1"></span>April 25, 2021</a></li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="/new/detail">2021 BMW 540i M Sport Review: Light
                                        on Sport, Heavy on Tech</a></h4>
                                <a href="/new/detail" class="more_listing">Read More <span
                                        class="icon"><span class="fas fa-plus"></span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="mbp_pagination mt20">
                        <ul class="page_navigation">
                            <li class="page-item">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span
                                        class="fa fa-arrow-left"></span></a>
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
    </section>

@endsection
