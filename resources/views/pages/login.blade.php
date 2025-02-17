@extends('layout.app')

@section('content')
    <!--Contents-->
    <main class="signin-page style-5">

        <!-- ====== start careers-features ====== -->
        <section class="signin style-5">
            <div class="container">
                <div class="form-content">
                    <div class="row gx-0">
                        <div class="col-lg-6 order-last order-lg-first">
                            <div class="info">
                                <a href="#" class="logo">
                                    <img src="assets/img/gerbi.png" alt="">
                                </a>
                                <h3 class="mb-2"> გაიარეთ <span class="color-blue5"> ავტორიზაცია </span> </h3>
                                <p class="color-666"> აირჩიეთ თქვენი ტიპი: ორგანიზაცია, ფიზიკური პირი </p>
                                <div class="sign-btns mt-30">
                                    <a href="#" class="butn py-3 px-4 border-1 rounded-3 brd-gray border me-2">
                                        <span> <i class="fab fa-google me-1 color-blue5"></i> Google ავტორიცაზია</span>
                                    </a>

                                </div>
                                <div class="or-line">
                                    <span> ან </span>
                                </div>
                                <div class="row justify content-center">
                                    <div class="col-lg-12 text-center">
                                        <nav>
                                            <div class="nav nav-tabs text-center justify-content-center" id="nav-tab"
                                                role="tablist">
                                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-home" type="button" role="tab"
                                                    aria-controls="nav-home" aria-selected="true">ფიზიკური პირი</button>
                                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                                    data-bs-target="#nav-profile" type="button" role="tab"
                                                    aria-controls="nav-profile" aria-selected="false">ორგანიზაცია</button>


                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                                aria-labelledby="nav-home-tab" tabindex="0">
                                                <div class="row">
                                                    <div class="col-lg-6 mt-3">

                                                        <div class="form-group group-icon mb-20">
                                                            <input type="text" class="form-control" placeholder="სახელი">
                                                            <span class="icon"> <i class="fas fa-user"></i> </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <div class="form-group group-icon mt-3 mt-lg-0 mb-20">
                                                            <input type="password" class="form-control" placeholder="გვარი">
                                                            <span class="icon"> <i class="fas fa-user"></i> </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group group-icon mt-3 mt-lg-0 mb-20">
                                                            <input type="number" class="form-control"
                                                                placeholder="პირადი ნომერი">
                                                            <span class="icon"> <i class="fas fa-barcode"></i> </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group group-icon mt-3 mt-lg-0 mb-20">
                                                            <input type="email" class="form-control"
                                                                placeholder="ტელეფონის ნომერი">
                                                            <span class="icon"> <i class="fas fa-mobile"></i> </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group group-icon mt-3 mt-lg-0 mb-20">
                                                            <input type="email" class="form-control"
                                                                placeholder="ელ-ფოსტა">
                                                            <span class="icon"> <i class="fas fa-envelope"></i> </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group group-icon mt-3 mt-lg-0 mb-20">
                                                            <input type="password" class="form-control"
                                                                placeholder="პაროლი">
                                                            <span class="icon"> <i class="fas fa-key"></i> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                                aria-labelledby="nav-profile-tab" tabindex="0">
                                                <div class="row">
                                                    <div class="col-lg-6 mt-3">

                                                        <div class="form-group group-icon mb-20">
                                                            <input type="text" class="form-control"
                                                                placeholder="ორგანიზაციის სახელი">
                                                            <span class="icon"> <i class="fas fa-user"></i> </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mt-3">
                                                        <div class="form-group group-icon mt-3 mt-lg-0 mb-20">
                                                            <input type="password" class="form-control"
                                                                placeholder="წარმომადგენელი">
                                                            <span class="icon"> <i class="fas fa-user"></i> </span>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group group-icon mt-3 mt-lg-0 mb-20">
                                                            <input type="number" class="form-control"
                                                                placeholder="ელ-ფოსტა">
                                                            <span class="icon"> <i class="fas fa-barcode"></i> </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group group-icon mt-3 mt-lg-0 mb-20">
                                                            <input type="email" class="form-control"
                                                                placeholder="საიდენტიფიკაციო ნომერი">
                                                            <span class="icon"> <i class="fas fa-mobile"></i> </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group group-icon mt-3 mt-lg-0 mb-20">
                                                            <input type="email" class="form-control"
                                                                placeholder="ელ-ფოსტა">
                                                            <span class="icon"> <i class="fas fa-envelope"></i> </span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group group-icon mt-3 mt-lg-0 mb-20">
                                                            <input type="password" class="form-control"
                                                                placeholder="პაროლი">
                                                            <span class="icon"> <i class="fas fa-key"></i> </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>

                                </div>
                                <button class="butn bg-main border-0 rounded-3 w-100 text-white mt-20 py-3">
                                    <span> ავტორიზაცია <i class="fal fa-long-arrow-right ms-2"></i> </span>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sign-imgs-slider">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="slide-card">
                                                <h3> ჯანდაცვა </h3>
                                                <div class="img">
                                                    <img src="assets/img/health.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slide-card">
                                                <h3> ელ-მმართველობა </h3>
                                                <div class="img">
                                                    <img src="assets/img/el.jpeg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="slide-card">
                                                <h3> კიბერუსაფრთხოება </h3>
                                                <div class="img">
                                                    <img src="assets/img/header/header10_img.svg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end timeline ====== -->

    </main>
    <!--End-Contents-->
@endsection
