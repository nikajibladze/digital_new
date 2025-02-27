@extends('layout.app')

@section('content')
    <!--Contents-->
    <main>

        <!-- ====== start blog ====== -->
        <section class="blog style-7 section-padding">
            <div class="container">
                <div class="section-head text-center style-4 mb-80">
                    <div class="top-title mb-10">
                        <img src="{{ asset('assets/img/line_l.png') }}" alt="">

                        <img src="{{ asset('assets/img/line_r.png') }}" alt="">
                    </div>
                    <h2 class="">
                        <span>ჯანდაცვა </span>
                    </h2>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="blog-card style-7 mt-5 mt-lg-0">
                                <div class="img img-cover">
                                    <img src="{{ asset('assets/img/blog/15.png') }}" alt="">
                                </div>
                                <div class="info pt-40">
                                    <div class="date-tags">
                                        <div class="tags">
                                            <a href="page-blog-app.html">IT Solution</a>
                                        </div>
                                        <a href="#" class="date">
                                            Nov 21, 2023
                                        </a>
                                        <span class="color-999"> | </span>
                                        <a href="#" class="author color-999">
                                            By <span class="color-000 fw-bold"> Admin </span>
                                        </a>
                                    </div>
                                    <h4 class="title">
                                        <a href="page-single-post-app.html"> Create Live Segments & Target The Right
                                            People... </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog-card style-7 mt-5 mt-lg-0">
                                <div class="img img-cover">
                                    <img src="{{ asset('assets/img/blog/16.png') }}" alt="">
                                </div>
                                <div class="info pt-40">
                                    <div class="date-tags">
                                        <div class="tags">
                                            <a href="page-blog-app.html">IT Solution</a>
                                        </div>
                                        <a href="#" class="date">
                                            Nov 21, 2023
                                        </a>
                                        <span class="color-999"> | </span>
                                        <a href="#" class="author color-999">
                                            By <span class="color-000 fw-bold"> Admin </span>
                                        </a>
                                    </div>
                                    <h4 class="title">
                                        <a href="page-single-post-app.html"> Through The Collaboration With
                                            Customers... </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog-card style-7 mt-5 mt-lg-0">
                                <div class="img img-cover">
                                    <img src="{{ asset('assets/img/blog/17.png') }}" alt="">
                                </div>
                                <div class="info pt-40">
                                    <div class="date-tags">
                                        <div class="tags">
                                            <a href="page-blog-app.html">IT Solution</a>
                                        </div>
                                        <a href="#" class="date">
                                            Nov 21, 2023
                                        </a>
                                        <span class="color-999"> | </span>
                                        <a href="#" class="author color-999">
                                            By <span class="color-000 fw-bold"> Admin </span>
                                        </a>
                                    </div>
                                    <h4 class="title">
                                        <a href="page-single-post-app.html"> In Discussing Needs & Demand, We're Able
                                            To... </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('assets/img/shap_color_7.png') }}" alt="" class="shap_color">
        </section>
        <!-- ====== end blog ====== -->

        <!-- ====== start chat-banner ====== -->
        <section class="chat-banner style-7">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-3 col-sm-6 d-none d-lg-block">
                        <div class="img img1">
                            <img src="assets/img/vector1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="info">
                            <p> Hire Us For Your Project </p>
                            <h3> Lets Work Together </h3>
                            <div class="btns mt-50">
                                <a href="#0"
                                    class="btn btn-icon-circle rounded-pill bg-black fw-bold text-white me-4 mb-3 mb-lg-0">
                                    <small> Estimate Project <i class="fas fa-long-arrow-alt-right"></i> </small>
                                </a>
                                <a href="#0"
                                    class="btn btn-icon-circle rounded-pill fw-bold brd-light text-white hover-blue7">
                                    <small> Contact Us <i class="fas fa-long-arrow-alt-right bg-light"></i> </small>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="img img2">
                            <img src="assets/img/vector2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end chat-banner ====== -->
    </main>
    <!--End-Contents-->
@endsection
