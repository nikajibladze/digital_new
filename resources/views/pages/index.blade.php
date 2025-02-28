@extends('layout.app')

@section('content')
    <header class="section-padding style-1">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="info">
                            <div class="section-head mb-60">
                                <h3 class="color-main text-uppercase">გაუზიარე შენი </h3>
                                <h2>
                                    მოსაზრება <span class="fw-normal">სახელმწიფოს</span>
                                </h2>
                            </div>
                            <div class="text">
                                {{-- We transform businesses of most major sectors with powerful and adaptable digital
                                solutions that satisfy the needs of today. --}}
                            </div>
                            <div class="bttns mt-5">
                                <a href="{{ route('share') }}" class="btn btn-dark">
                                    <span>გაზიარება</span>
                                </a>
                                <a href="https://youtu.be/pGbIOC83-So?t=21" data-lity class="vid-btn">
                                    <i class="bi bi-play wow heartBeat infinite slow"></i>
                                    <span>
                                        Iteck’s <br> Showreels
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="img">
                            <img src="assets/img/header/head.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="assets/img/header/head_shape_r.png" alt="" class="head-shape-r wow">
        <img src="assets/img/header/head_shape_l.png" alt="" class="head-shape-l wow">
    </header>
    <!-- ====== start about ====== -->
    <main>
        <section class="about style-1">
            <div class="container">
                <div class="content">
                    <div
                        class="about-logos d-flex align-items-center justify-content-between border-bottom border-1 brd-light pb-20">
                        <a href="#" class="logo wow fadeInUp" data-wow-delay="0">
                            <h4 class="light">თემა 1</h4>
                        </a>
                        <a href="#" class="logo wow fadeInUp" data-wow-delay="0.2s">
                            <h4 class="light">თემა 2</h4>
                        </a>
                        <a href="#" class="logo wow fadeInUp" data-wow-delay="0.4s">
                            <h4 class="light">თემა 3</h4>
                        </a>
                        <a href="#" class="logo wow fadeInUp" data-wow-delay="0.6s">
                            <h4 class="light">თემა 4</h4>
                        </a>
                        <a href="#" class="logo wow fadeInUp" data-wow-delay="0.8s">
                            <h4 class="light">თემა 5</h4>
                        </a>
                    </div>
                    <div class="about-info">
                        <div class="row justify-content-between">
                            <div class="col-lg-5">
                                <div class="title">
                                    <h3 class=" wow fadeInUp slow">ციფრული პარლამენტი - მოქალაქეთა პლატფორმა
                                    </h3>
                                    <small class=" wow fadeInUp slow fw-bold"></small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="info">
                                    <h6 class=" wow fadeInUp slow">We can help to maintain and modernize your IT
                                        infrastructure & solve various infrastructure-specific issues a business may
                                        face.</h6>
                                    <p class=" wow fadeInUp slow">Iteck Co is the partner of choice for many of the
                                        world’s leading enterprises, SMEs and technology challengers. We help businesses
                                        elevate their value through custom software development, product design, QA and
                                        consultancy services.</p>
                                    <a href="{{ route('discuss') }}"
                                        class="btn btn-outline-light mt-5 sm-butn wow fadeInUp slow">
                                        <span>დისკუსიის დაწყება</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-numbers">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="num-item wow fadeInUp" data-wow-delay="0">
                                    <div class="num">
                                        <span class="counter">
                                            20
                                        </span>
                                        <span>
                                            <i class="fas fa-plus"></i>
                                        </span>
                                    </div>
                                    <div class="inf">
                                        აქტიური მოქალაქე
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="num-item wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="num">
                                        <span class="counter">
                                            15
                                        </span>
                                        <span>
                                            K
                                        </span>
                                    </div>
                                    <div class="inf">
                                        დისკუსია
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="num-item wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="num">
                                        <span class="counter">
                                            240
                                        </span>
                                    </div>
                                    <div class="inf">
                                        სამინისტრო
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="num-item wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="num">
                                        <span class="counter">
                                            180
                                        </span>
                                    </div>
                                    <div class="inf">
                                        საჯარო მოხელე
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <img src="assets/img/about/num_shap.png" alt="" class="about_shap">
                </div>
            </div>
        </section>
        <!-- ====== end about ====== -->

        <!-- ====== start features ====== -->
        <section class="features style-7 section-padding">
            <div class="container">
                <div class="section-head text-center style-4 mb-40">
                    <div class="top-title mb-10">
                        <img src="assets/img/line_l.png" alt="">
                        <h5> გადაწყვეტილებები </h5>
                        <img src="assets/img/line_r.png" alt="">
                    </div>
                    <h2 class="">
                        საქართველოს <span> ტექნიკური </span> <br>და IT გადაწყვეტილებები
                    </h2>
                </div>
            </div>
            <div class="content">
                <div class="features-slider7">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="{{ route('digital.single', ['id' => 1]) }}" class="features-card style-7">
                                    <div class="icon">
                                        <img src="assets/img/icons/fe1.png" alt="">
                                    </div>
                                    <div class="info">
                                        <p class="color-999"> გადაწყვეტილება 01 </p>
                                        <h5>ჯანდაცვა </h5>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="{{ route('digital.single', ['id' => 2]) }}" class="features-card style-7">
                                    <div class="icon">
                                        <img src="assets/img/icons/fe2.png" alt="">
                                    </div>
                                    <div class="info">
                                        <p class="color-999"> გადაწყვეტილება 02 </p>
                                        <h5> ელ-მმართველობა </h5>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="{{ route('digital.single', ['id' => 3]) }}" class="features-card style-7">
                                    <div class="icon">
                                        <img src="assets/img/icons/fe3.png" alt="">
                                    </div>
                                    <div class="info">
                                        <p class="color-999"> გადაწყვეტილება 03 </p>
                                        <h5> კიბერუსაფრთხოება </h5>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="features-card style-7">
                                    <div class="icon">
                                        <img src="assets/img/icons/fe4.png" alt="">
                                    </div>
                                    <div class="info">
                                        <p class="color-999"> გადაწყვეტილება 04 </p>
                                        <h5> ჭკვიანი ქალაქი <br> მობილობა </h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btns text-center mt-10">
                    <a href="#0"
                        class="btn btn-icon-circle rounded-pill bg-blue7 fw-bold text-white me-4 mb-4 mb-lg-0">
                        <small> სრულად ნახვა<i class="fas fa-long-arrow-alt-right"></i> </small>
                    </a>
                    {{-- <a href="#0" class="btn btn-icon-circle rounded-pill bg-white fw-bold me-4">
                        <small> Purchase Now <i class="fas fa-long-arrow-alt-right bg-light"></i> </small>
                    </a> --}}
                </div>
            </div>
            <img src="assets/img/feat_circle.png" alt="" class="img-circle rotate-center">
        </section>
        <!-- ====== end features ====== -->





        <!-- ====== start blog ====== -->
        <section class="blog section-padding bg-gray style-1" data-scroll-index="6">
            <div class="container">
                <div class="row">
                    <div class="col offset-lg-1">
                        {{-- <div class="section-head mb-60">
                            <h6 class="color-main text-uppercase wow fadeInUp">our press</h6>
                            <h2 class="wow fadeInUp">
                                Latest Posts <span class="fw-normal">From Our Press</span>
                            </h2>
                        </div> --}}
                    </div>
                </div>
                <div class="content">
                    <div class="blog_slider">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="blog_box">
                                        <div class="tags">
                                            <a href="#">ანგარიშები</a>
                                        </div>
                                        <div class="img">
                                            <img src="assets/img/blog/19.jpg" alt="">
                                        </div>
                                        <div class="info">
                                            <h6><a href="{{ route('stats') }}">სამინისტროს ანგარიშები</a></h6>


                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog_box">
                                        <div class="tags">
                                            <a href="#">იდეები</a>
                                        </div>
                                        <div class="img">
                                            <img src="assets/img/blog/2.jpeg" alt="">
                                        </div>
                                        <div class="info">
                                            <h6><a href="page-single-post-5.html">მოსახლეობის მიერ სტრუქტურებში გაგზავნილი
                                                    იდეები</a></h6>


                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog_box">
                                        <div class="tags">
                                            <a href="#">სტატისტიკები</a>
                                        </div>
                                        <div class="img">
                                            <img src="assets/img/blog/3.jpeg" alt="">
                                        </div>
                                        <div class="info">
                                            <h6><a href="#">მოსახლეობის მიერ სტრუქტურაში გაგზავნილი
                                                    იდეების სტატისტიკა</a></h6>


                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog_box">
                                        <div class="tags">
                                            <a href="#">დიზაინი</a>
                                        </div>
                                        <div class="img">
                                            <img src="assets/img/blog/4.jpeg" alt="">
                                        </div>
                                        <div class="info">
                                            <h6><a href="#"> სახელმწიფოს მიერ შესრულებული სამუშაოები</a></h6>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- ====== slider navigation ====== -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end blog ====== -->


        <!-- ====== start services ====== -->
        {{-- <section class="services section-padding style-1">
            <div class="container">
                <div class="row">
                    <div class="col offset-lg-1">
                 
                    </div>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="service-box mb-4 wow fadeInUp" data-wow-delay="0">
                                <h5>
                                    <a href="{{ route('stats') }}"> სამინისტროს ანგარიშები</a>
                                    <span class="num">01</span>
                                </h5>
                                <div class="icon">
                                    <img src="assets/img/icons/serv_icons/1.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="text">
                                        Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                    </div>
                                    <div class="tags">
                                        <a href="#">Strategy</a>
                                        <a href="#">Consultation</a>
                                        <a href="#">Management</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="service-box mb-4 wow fadeInUp" data-wow-delay="0.2s">
                                <h5>
                                    <a href="page-services-5.html"> მოსახლეობის მიერ სტრუქტურებში გაგზავნილი იდეები
                                    </a>
                                    <span class="num">02</span>
                                </h5>
                                <div class="icon">
                                    <img src="assets/img/icons/serv_icons/2.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="text">
                                        Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                    </div>
                                    <div class="tags">
                                        <a href="#">Management</a>
                                        <a href="#">Backup & Recovery</a>
                                        <a href="#">Transfer</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="service-box mb-4 wow fadeInUp" data-wow-delay="0.4s">
                                <h5>
                                    <a href="{{ route('stats') }}"> მოსახლეობის მიერ სტრუქტურაში გაგზავნილი იდეების
                                        სტატისტიკა </a>
                                    <span class="num">03</span>
                                </h5>
                                <div class="icon">
                                    <img src="assets/img/icons/serv_icons/3.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="text">
                                        Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                    </div>
                                    <div class="tags">
                                        <a href="#">Ecommerce</a>
                                        <a href="#">Landing Page</a>
                                        <a href="#">CMS</a>
                                        <a href="#">Plugin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="service-box mb-4 mb-md-0 wow fadeInUp" data-wow-delay="0">
                                <h5>
                                    <a href="page-services-5.html"> UI/UX Design </a>
                                    <span class="num">04</span>
                                </h5>
                                <div class="icon">
                                    <img src="assets/img/icons/serv_icons/4.png" alt="">
                                </div>
                                <div class="info">
                                    <div class="text">
                                        Trust our top minds to eliminate workflow pain points, implement new tech & app.
                                    </div>
                                    <div class="tags">
                                        <a href="#">Website</a>
                                        <a href="#">Mobile App</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <img src="assets/img/services/ser_shap_l.png" alt="" class="ser_shap_l">
            <img src="assets/img/services/ser_shap_r.png" alt="" class="ser_shap_r">
        </section> --}}
        <!-- ====== end services ====== -->

        <!-- ====== start process ====== -->
        <section class="tc-process-st17">
            <div class="container">
                <h2 class="lg-title"> ციფრული საჯარო სერვისის ევოლუცია</h2>
                <div class="cards">
                    <div class="row gx-5">
                        <div class="col-lg-3">
                            <div class="process-card wow fadeInUp" data-wow-delay="0.1s">
                                <span class="num"> 1 </span>
                                <h4> ტკივილი</h4>
                                <div class="text"> ფულის, რესურსების ან სამუშაო ძალის ნაკლებობა
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="process-card wow fadeInUp" data-wow-delay="0.2s">
                                <span class="num"> 2 </span>
                                <h4> გაგება</h4>
                                <div class="text"> დიგიტალიზაციას შეუძლია მოაგვაროს ეს საკითხები სერვისებზე
                                    ხელმისაწვდომობის გაზრდით
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="process-card wow fadeInUp" data-wow-delay="0.3s">
                                <span class="num"> 3 </span>
                                <h4> მხარდაჭერა </h4>
                                <div class="text">პოლიტიკური ნება და საზოგადოების მხარდაჭერა სიტუაციის
                                    გასაუმჯობესებლად, IT წიგნიერება და ცოდნა
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="process-card wow fadeInUp" data-wow-delay="0.4s">
                                <span class="num"> 4 </span>
                                <h4> სამართლებრივი ჩარჩო</h4>
                                <div class="text"> სავალდებულო ელექტრონული პირადობის მოწმობა, დეცენტრალიზაცია და
                                    მხოლოდ ერთხელ პოლიტიკა, ნდობა დიზაინის მიდგომა, არა მემკვიდრეობითი პოლიტიკა
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="cards">
                    <div class="row gx-5">
                        <div class="col-lg-3">
                            <div class="process-card wow fadeInUp" data-wow-delay="0.1s">
                                <span class="num"> 5 </span>
                                <h4> კერძო სექტორი</h4>
                                <div class="text"> კერძო სექტორთან თანამშრომლობა
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="process-card wow fadeInUp" data-wow-delay="0.2s">
                                <span class="num"> 6 </span>
                                <h4> ფონდები </h4>
                                <div class="text"> e-ID, X-Road (მონაცემთა გაცვლა), კიბერუსაფრთხოება დიზაინის
                                    მიხედვით, მონაცემთა დაცვა
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="process-card wow fadeInUp" data-wow-delay="0.3s">
                                <span class="num"> 7 </span>
                                <h4> დიზაინი </h4>
                                <div class="text"> დაკავშირება (ინტერნეტი), სერვისის დიზაინი, დოკუმენტების ციფრულზე
                                    გადაწერა, განსხვავებული აზროვნება
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="process-card wow fadeInUp" data-wow-delay="0.4s">
                                <span class="num"> 8 </span>
                                <h4> ინტერესები ელექტრონული სერვისების მიმართ</h4>
                                <div class="text"> ელექტრონული გადასახადი, ციფრული ხელმოწერა, ელექტრონული რეცეპტი,
                                    სამართალი და საზოგადოებრივი უსაფრთხოება
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end process ====== -->



        <!-- ====== start portfolio ====== -->
        <section class="portfolio section-padding bg-gray style-1">
            <div class="container">
                <div class="row">
                    <div class="col offset-lg-1">
                        <div class="section-head mb-60">
                            <h6 class="color-main text-uppercase wow fadeInUp">თემები</h6>
                            <h2 class="wow fadeInUp">
                                ბოლო თემები<span class="fw-normal"></span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="content wow fadeIn slow">
                    <div class="portfolio-slider">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="portfolio-card">
                                        <div class="img">
                                            <img src="assets/img/projects/prog/1.jpeg" alt="">
                                        </div>
                                        <div class="info">
                                            <h5>
                                                <a href="page-single-project-5.html">მედიკამენტების რეფერენტული
                                                    ფასი</a>
                                            </h5>
                                            <small class="d-block color-main text-uppercase"><a
                                                    href="#">მედიკამენტები</a></small>
                                            <div class="text">
                                                საქართველოს მთავრობის გადაწყვეტილებით ქრონიკულ დაავადებათა სამკურნალო
                                                მედიკამენტების პროგრამა ფართოვდება
                                            </div>
                                            <div class="tags">
                                                <a href="#">ინფრასტუქტურა</a>
                                                <a href="#">პროექტები</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio-card">
                                        <div class="img">
                                            <img src="assets/img/projects/prog/1.jpeg" alt="">
                                        </div>
                                        <div class="info">
                                            <h5>
                                                <a href="page-single-project-5.html">ციფრული ტექნოლოგიები</a>
                                            </h5>
                                            <small class="d-block color-main text-uppercase"><a
                                                    href="#">მედიკამენტები</a></small>
                                            <div class="text">
                                                საინფორმაციო ტექნოლოგიებისა და კომუნიკაციების სექტორი გახდა ყველაზე
                                                მაღალანაზღაურებადი სფერო საქართველოში
                                            </div>
                                            <div class="tags">
                                                <a href="#">ინფრასტუქტურა</a>
                                                <a href="#">პროექტები</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio-card">
                                        <div class="img">
                                            <img src="assets/img/projects/prog/1.jpeg" alt="">
                                        </div>
                                        <div class="info">
                                            <h5>
                                                <a href="page-single-project-5.html">მედიკამენტების რეფერენტული
                                                    ფასი</a>
                                            </h5>
                                            <small class="d-block color-main text-uppercase"><a
                                                    href="#">მედიკამენტები</a></small>
                                            <div class="text">
                                                საქართველოს მთავრობის გადაწყვეტილებით ქრონიკულ დაავადებათა სამკურნალო
                                                მედიკამენტების პროგრამა ფართოვდება
                                            </div>
                                            <div class="tags">
                                                <a href="#">ინფრასტუქტურა</a>
                                                <a href="#">პროექტები</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="portfolio-card">
                                        <div class="img">
                                            <img src="assets/img/projects/prog/1.jpeg" alt="">
                                        </div>
                                        <div class="info">
                                            <h5>
                                                <a href="page-single-project-5.html">მედიკამენტების რეფერენტული
                                                    ფასი</a>
                                            </h5>
                                            <small class="d-block color-main text-uppercase"><a
                                                    href="#">მედიკამენტები</a></small>
                                            <div class="text">
                                                საქართველოს მთავრობის გადაწყვეტილებით ქრონიკულ დაავადებათა სამკურნალო
                                                მედიკამენტების პროგრამა ფართოვდება
                                            </div>
                                            <div class="tags">
                                                <a href="#">ინფრასტუქტურა</a>
                                                <a href="#">პროექტები</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ====== slider pagination ====== -->
                        <div class="swiper-pagination"></div>

                        <!-- ====== slider navigation ====== -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
            <img src="assets/img/projects/prog/shap_r.png" alt="" class="shap_r">
            <img src="assets/img/projects/prog/shap_l.png" alt="" class="shap_l">
        </section>
        <!-- ====== end portfolio ====== -->


        <!-- ====== start team ====== -->
        <section class="team section-padding style-1">
            <div class="container">
                <div class="section-head mb-60 text-center">
                    <h6 class="color-main text-uppercase wow fadeInUp">ჩვენი გუნდი</h6>

                </div>
                <div class="content">
                    <div class="team_box wow fadeInUp" data-wow-delay="0">
                        <div class="avatar">
                            <img src="assets/img/team/1.jpeg" alt="">
                        </div>
                        <div class="info">
                            <h6><a href="#">Michael Edwards</a></h6>
                            <small>CEO Founder</small>
                            <div class="social_icons">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team_box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="avatar">
                            <img src="assets/img/team/2.jpeg" alt="">
                        </div>
                        <div class="info">
                            <h6><a href="#">Bobby Kane</a></h6>
                            <small>CTO</small>
                            <div class="social_icons">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team_box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="avatar">
                            <img src="assets/img/team/3.jpeg" alt="">
                        </div>
                        <div class="info">
                            <h6><a href="#">Robert Downey Jr</a></h6>
                            <small>Project Manager</small>
                            <div class="social_icons">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team_box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="avatar">
                            <img src="assets/img/team/4.jpeg" alt="">
                        </div>
                        <div class="info">
                            <h6><a href="#">Andrew Robertson</a></h6>
                            <small>Marketing Leader</small>
                            <div class="social_icons">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="team_box wow fadeInUp" data-wow-delay="0.8s">
                        <div class="avatar">
                            <img src="assets/img/team/5.jpeg" alt="">
                        </div>
                        <div class="info">
                            <h6><a href="#">Alexander Avery</a></h6>
                            <small>Creative Director</small>
                            <div class="social_icons">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bttns mt-4 text-center">
                    <a href="page-about-5.html" class="btn btn-dark wow zoomIn">
                        <span>See All Team</span>
                    </a>
                    <a href="#" class="btn butn-gard border-0 text-white wow zoomIn">
                        <span>Join Our Team</span>
                    </a>
                </div>
            </div>
            <img src="assets/img/team/team_shap.png" alt="" class="team_shap">
        </section>
        <!-- ====== end team ====== -->

        <!-- ====== start blog ====== -->
        <section class="blog section-padding bg-gray style-1">
            <div class="container">
                <div class="row">
                    <div class="col offset-lg-1">
                        <div class="section-head mb-60">
                            <h6 class="color-main text-uppercase wow fadeInUp">our press</h6>
                            <h2 class="wow fadeInUp">
                                Latest Posts <span class="fw-normal">From Our Press</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="blog_slider">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="blog_box">
                                        <div class="tags">
                                            <a href="#">news</a>
                                        </div>
                                        <div class="img">
                                            <img src="assets/img/blog/1.jpeg" alt="">
                                        </div>
                                        <div class="info">
                                            <h6><a href="page-single-post-5.html">Crypto Trends 2023</a></h6>
                                            <div class="auther">
                                                <span>
                                                    <img class="auther-img" src="assets/img/testimonials/user1.jpeg"
                                                        alt="">
                                                    <small><a href="#">By Admin</a></small>
                                                </span>
                                                <span>
                                                    <i class="bi bi-calendar2"></i>
                                                    <small><a href="#">May 15, 2023</a></small>
                                                </span>
                                            </div>
                                            <div class="text">
                                                If there’s one way that wireless technology has changed the way we work,
                                                it’s that will everyone is now connected [...]
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog_box">
                                        <div class="tags">
                                            <a href="#">technology</a>
                                        </div>
                                        <div class="img">
                                            <img src="assets/img/blog/2.jpeg" alt="">
                                        </div>
                                        <div class="info">
                                            <h6><a href="page-single-post-5.html">How To Become Web Developer</a></h6>
                                            <div class="auther">
                                                <span>
                                                    <img class="auther-img" src="assets/img/testimonials/user2.jpeg"
                                                        alt="">
                                                    <small><a href="#">By Moussa</a></small>
                                                </span>
                                                <span>
                                                    <i class="bi bi-calendar2"></i>
                                                    <small><a href="#">May 15, 2023</a></small>
                                                </span>
                                            </div>
                                            <div class="text">
                                                If there’s one way that wireless technology has changed the way we work,
                                                it’s that will everyone is now connected [...]
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog_box">
                                        <div class="tags">
                                            <a href="#">tips & tricks</a>
                                        </div>
                                        <div class="img">
                                            <img src="assets/img/blog/3.jpeg" alt="">
                                        </div>
                                        <div class="info">
                                            <h6><a href="page-single-post-5.html">Wireframe For UI/UX?</a></h6>
                                            <div class="auther">
                                                <span>
                                                    <img class="auther-img" src="assets/img/testimonials/user3.jpeg"
                                                        alt="">
                                                    <small><a href="#">By Admin</a></small>
                                                </span>
                                                <span>
                                                    <i class="bi bi-calendar2"></i>
                                                    <small><a href="#">May 15, 2023</a></small>
                                                </span>
                                            </div>
                                            <div class="text">
                                                If there’s one way that wireless technology has changed the way we work,
                                                it’s that will everyone is now connected [...]
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog_box">
                                        <div class="tags">
                                            <a href="#">news</a>
                                        </div>
                                        <div class="img">
                                            <img src="assets/img/blog/4.jpeg" alt="">
                                        </div>
                                        <div class="info">
                                            <h6><a href="page-single-post-5.html">VR Game, Opportunity & Challenge</a>
                                            </h6>
                                            <div class="auther">
                                                <span>
                                                    <img class="auther-img" src="assets/img/testimonials/user1.jpeg"
                                                        alt="">
                                                    <small><a href="#">By David</a></small>
                                                </span>
                                                <span>
                                                    <i class="bi bi-calendar2"></i>
                                                    <small><a href="#">May 15, 2023</a></small>
                                                </span>
                                            </div>
                                            <div class="text">
                                                If there’s one way that wireless technology has changed the way we work,
                                                it’s that will everyone is now connected [...]
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="blog_box">
                                        <div class="tags">
                                            <a href="#">technology</a>
                                        </div>
                                        <div class="img">
                                            <img src="assets/img/blog/2.jpeg" alt="">
                                        </div>
                                        <div class="info">
                                            <h6><a href="page-single-post-5.html">How To Become Web Developer</a></h6>
                                            <div class="auther">
                                                <span>
                                                    <img class="auther-img" src="assets/img/testimonials/user2.jpeg"
                                                        alt="">
                                                    <small><a href="#">By Moussa</a></small>
                                                </span>
                                                <span>
                                                    <i class="bi bi-calendar2"></i>
                                                    <small><a href="#">May 15, 2023</a></small>
                                                </span>
                                            </div>
                                            <div class="text">
                                                If there’s one way that wireless technology has changed the way we work,
                                                it’s that will everyone is now connected [...]
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ====== slider navigation ====== -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end blog ====== -->


        <!-- ====== start contact ====== -->
        <section class="contact section-padding bg-gradient style-1">
            <div class="container">
                <div class="section-head mb-60 text-center">
                    <h6 class="text-white text-uppercase wow fadeInUp">contact us</h6>
                    <h2 class="wow fadeInUp text-white">
                        Request Free <span class="fw-normal">Consultancy</span>
                    </h2>
                </div>
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="contact_info text-white">
                                <p class="wow fadeInUp">Hotline 24/7</p>
                                <h4 class="wow fadeInUp">(+23) 5535 68 68</h4>
                                <ul>
                                    <li class="wow fadeInUp">
                                        <strong>Address : </strong> 58 Howard Street, San Francisco, CA 941
                                    </li>
                                    <li class="wow fadeInUp">
                                        <strong>Email : </strong> contact@Iteck.co
                                    </li>
                                    <li class="wow fadeInUp">
                                        <strong>Fax : </strong> fax@Iteck.co
                                    </li>
                                    <li class="wow fadeInUp">
                                        <strong>Work Hour : </strong> Mon - Sat: 9:00 - 18:00
                                    </li>
                                </ul>
                                <a href="#" class="wow fadeInUp">get direction</a>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-1">
                            <form class="contact_form" action="contact.php" method="post">
                                <div class="row gx-3">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3 wow fadeInUp">
                                            <input type="text" name="name" class="form-control"
                                                placeholder="name *">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-3 wow fadeInUp">
                                            <input type="text" name="email" class="form-control"
                                                placeholder="Email Address *">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3 wow fadeInUp">
                                            <select name="option" class="form-select"
                                                aria-label="Default select example">
                                                <option selected>Your inquiry about</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-3 wow fadeInUp">
                                            <textarea class="form-control" rows="4" placeholder="Write your inquiry here"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check mb-4 wow fadeInUp">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label text-light small" for="flexCheckDefault">
                                                By submitting, i’m agreed to the <a href="#"
                                                    class="text-decoration-underline">Terms & Conditons</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="submit" value="Request Now"
                                            class="btn btn-dark wow fadeInUp text-light fs-14px">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/img/contact_globe.svg" alt="" class="contact_globe">
        </section>
        <!-- ====== end contact ====== -->
    </main>
@endsection
