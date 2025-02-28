@extends('layout.app')
@section('content')
    <!--Contents-->
    <main>




        <!-- ====== start services ====== -->
        <section class="services style-13 section-padding">
            <div class="container">
                <div class="section-head text-center mb-40 style-13">
                    <h6> ჩვენი ხმა ჩვენი მომავალი </h6>
                    <h2> პლატფორმა რომელიც აერთიანებს მოქალექეებს და მთავრობას </h2>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="item">
                                <div class="cont">
                                    <div class="title">
                                        <img src="{{ asset('assets/img/icons/serv_icons/40.png') }}" alt=""
                                            class="icon">
                                        <span> მოქალაქეებისთვის </span>
                                    </div>
                                    <p class="text-success mt-2"><i class="fa fa-check"></i> წამოჭერით თქვენთვის
                                        მნიშვნელოვანი
                                        საკითხები </p>
                                    <p class="text-success"><i class="fa fa-check"></i> მიიღეთ პასუხი პირდაპირ
                                        პასუხისმგებელი პირისგან </p>
                                    <p class="text-success"><i class="fa fa-check"></i> თვალი ადევნეთ თქვენი ინიციატივის
                                        პროგრესს </p>
                                    <a href="#"> Service Details </a>
                                </div>
                                <span class="circle"></span>
                                <img src="{{ asset('assets/img/services/pattern1.png') }}" class="pattern"></img>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="item">
                                <div class="cont">
                                    <div class="title">
                                        <img src="{{ asset('assets/img/icons/serv_icons/41.png') }}" alt=""
                                            class="icon">
                                        <span> მთავრობისთვის </span>
                                    </div>
                                    <p class="text-success mt-2"><i class="fa fa-check"></i> გაიგეთ რა აწუხებს მოსახლეობას
                                        საკითხები </p>
                                    <p class="text-success"><i class="fa fa-check"></i> მიიღეთ უკუკავშირი გადაწყვეტილებებზე
                                    </p>
                                    <p class="text-success"><i class="fa fa-check"></i> გააუმჯობესეთ კომუნიკაცია
                                        მოქალაქეებთან </p>
                                    <a href="#"> Service Details </a>
                                </div>
                                <span class="circle"></span>
                                <img src="{{ asset('assets/img/services/pattern1.png') }}" class="pattern"></img>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end services ====== -->



        <!-- ====== start blog ====== -->
        <section class="blog section-padding style-13">
            <div class="container">
                <div class="section-head text-center mb-50 style-13">
                    <h6> როგორ მუშაობს </h6>
                    {{-- <h2> Blog & Insights </h2> --}}
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="blog-item">
                                <div class="cont">
                                    <div class="tags text-center">
                                        <a href="#">
                                            <h3>1</h3>
                                        </a>
                                    </div>
                                    <h5 class="text-center"> <a href="#"> დარეგისტრირდით</a> </h5>
                                    <div class="author d-flex align-items-center">

                                        <div class="inf text-center">
                                            <p>გაიარეთ ავტორიზაცია აიდი ბარათით ეს უზრუნველყოფს სისტემის უსაფრთხოებას</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog-item">
                                <div class="cont">
                                    <div class="tags text-center">
                                        <a href="#">
                                            <h3>2</h3>
                                        </a>
                                    </div>
                                    <h5 class="text-center"> <a href="#">წამოჭერით საკითხი </a> </h5>
                                    <div class="author d-flex align-items-center">

                                        <div class="inf text-center">
                                            <p>დაწერეთ რა გაზუხებთ ან რისი გაუმჯობესება გსურთ თქვენს რეგიონში</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="blog-item">
                                <div class="cont">
                                    <div class="tags text-center">
                                        <a href="#">
                                            <h3>3</h3>
                                        </a>
                                    </div>
                                    <h5 class="text-center"> <a href="#"> მიიღეთ პასუხი </a> </h5>
                                    <div class="author d-flex align-items-center">

                                        <div class="inf text-center">
                                            <p>პასუხისმგებელი უწყება განიხილავს თქვენს საკითხს და მოგაწვდით ინფორმაციას</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end blog ====== -->


        <section class="blog section-padding style-13">
            <div class="container">
                <div class="section-head text-center mb-50 style-13">
                    <h6> წარმატებული მაგალითები</h6>
                    {{-- <h2> Blog & Insights </h2> --}}
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="blog-item">
                                <div class="cont">
                                    <div class="tags d-flex justify-content-between">
                                        <a href="#"> სკვერის კეთილმოწყობა</a>
                                        <a href="#" class="badge bg-success"> დასრულებული </a>
                                    </div>
                                    <h5> <a href="#"> პაკის პარკის მიმდებარე ტერიტორია </a> </h5>
                                    <div class="row">

                                        <div class="col-lg-12">

                                            <div class="stat-counter">
                                                <div class="stats-parent d-flex justify-content-between mb-3">
                                                    <span>ინიციატორი</span>
                                                    <span class="fw-bold">დავით მესი</span>
                                                </div>

                                                <div class="stats-parent d-flex justify-content-between mb-3">
                                                    <span>მხარდამჭერი</span>
                                                    <span class="fw-bold">1.232</span>
                                                </div>

                                                <div class="stats-parent d-flex justify-content-between mb-3">
                                                    <span>განხორციელდა</span>
                                                    <span class="fw-bold">2 თვეში</span>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                    <div class="stats-footer mt-3">
                                        <div class="footer-actions d-flex justify-content-center">

                                            <div class="tags">

                                                <a href="#" class="badge bg-success"> ყველა წარმატებული პროექტი </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="blog-item">
                                <div class="cont">
                                    <div class="tags d-flex justify-content-between">
                                        <a href="#"> საბავშვო ბაღის რემონტი</a>
                                        <a href="#" class="badge bg-success"> დასრულებული </a>
                                    </div>
                                    <h5> <a href="#"> გლდანის მე 3 მიკრორაიონი</a> </h5>
                                    <div class="row">

                                        <div class="col-lg-12">

                                            <div class="stat-counter">
                                                <div class="stats-parent d-flex justify-content-between mb-3">
                                                    <span>ინიციატორი</span>
                                                    <span class="fw-bold">ნინო კვარაცხელია</span>
                                                </div>

                                                <div class="stats-parent d-flex justify-content-between mb-3">
                                                    <span>მხარდამჭერი</span>
                                                    <span class="fw-bold">1.232</span>
                                                </div>

                                                <div class="stats-parent d-flex justify-content-between mb-3">
                                                    <span>განხორციელდა</span>
                                                    <span class="fw-bold">2 თვეში</span>
                                                </div>


                                            </div>

                                        </div>
                                    </div>

                                    <div class="stats-footer mt-3">
                                        <div class="footer-actions d-flex justify-content-center">

                                            <div class="tags">

                                                <a href="#" class="badge bg-success"> ყველა წარმატებული პროექტი </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <!-- ====== start services ====== -->
        <section class="services style-13 section-padding">
            <div class="container">
                <div class="section-head text-center mb-40 style-13">
                    <h6> მზად ხართ დასაწყებად? </h6>
                    <h2> შემოგვიერთდით და გახდით ცვლილებების ნაწილი </h2>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="item text-center">
                                <a href="{{ route('share') }}" class="btn border border hover-blue8 bg-gray">
                                    <span class="fs-16px">დავიწყოთ</span>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end services ====== -->
    </main>
    <!--End-Contents-->
@endsection
