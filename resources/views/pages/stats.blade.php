@extends('layout.app')
@section('content')
    <main class="blog-page style-5">

        <!-- ====== start services ====== -->
        <section class="services section-padding style-1">
            <div class="container">
                <div class="row">
                    <div class="col offset-lg-1">
                        <div class="section-head mb-60">
                            <h6 class="color-main text-uppercase wow fadeInUp">სამინისტროს ანგარიშები</h6>
                            {{-- <h2 class="wow fadeInUp">
                                Perfect IT Solutions <span class="fw-normal">For Your Business</span>
                            </h2> --}}
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="service-box mb-4 wow fadeInUp" data-wow-delay="0">
                                <h5>
                                    <a href="page-services-5.html"> აქტიური პროექტები</a>
                                    <span class="num">01</span>
                                </h5>
                                <div class="icon">
                                    <h2>127</h2>
                                </div>
                                <div class="info">
                                    <div class="text text-success">
                                        <i class="fa fa-arrow-up"></i> +12% წინა თვესთან შედარებით
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="service-box mb-4 wow fadeInUp" data-wow-delay="0.2s">
                                <h5>
                                    <a href="page-services-5.html"> დასრულებული პროექტები </a>
                                    <span class="num">02</span>
                                </h5>
                                <div class="icon">
                                    <h2>85</h2>
                                </div>
                                <div class="info">
                                    <div class="text text-success">
                                        <i class="fa fa-arrow-up"></i> +12% წინა თვესთან შედარებით
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="service-box mb-4 wow fadeInUp" data-wow-delay="0.4s">
                                <h5>
                                    <a href="page-services-5.html"> მოქალაქეთა ჩართულობა </a>
                                    <span class="num">15,420</span>
                                </h5>
                                <div class="icon">
                                    <h2>127</h2>
                                </div>
                                <div class="info">
                                    <div class="text text-success">
                                        <i class="fa fa-arrow-up"></i> +12% წინა თვესთან შედარებით
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="service-box mb-4 mb-md-0 wow fadeInUp" data-wow-delay="0">
                                <h5>
                                    <a href="page-services-5.html"> ბიუჯეტის ათვისება </a>
                                    <span class="num">04</span>
                                </h5>
                                <div class="icon">
                                    <h2>78%</h2>
                                </div>
                                <div class="info">
                                    <div class="text text-warning">
                                        <i class="fa fa-arrow-up"></i>გეგმის მიხედვით
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <img src="assets/img/services/ser_shap_l.png" alt="" class="ser_shap_l">
            <img src="assets/img/services/ser_shap_r.png" alt="" class="ser_shap_r">
        </section>
        <!-- ====== end services ====== -->

        <!-- ====== start blog ====== -->
        <section class="blog section-padding style-13">
            <div class="container">

                <div class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-item">
                                <div class="cont">
                                    <div class="tags d-flex justify-content-between">
                                        <a href="#"> ჯანდაცვის სამინისტრო </a>
                                        <a href="#" class="badge bg-danger"> მაღალი პროგრესი </a>
                                    </div>
                                    <h5> <a href="#"> 2024 წლის II კვარტლის ანგარიში </a> </h5>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="stats-small-title fw-bold mb-3">პროექტების სტატუსი</div>
                                            <div class="skills mt-5 mt-lg-0">
                                                <div class="progress-item mb-2">
                                                    <div class="txt"> რეფერენტული სისტემა </div>

                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100">25%
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="progress-item mb-2">
                                                    <div class="txt">კლინიკების რეაბილიტაცია</div>

                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 19%;" aria-valuenow="19" aria-valuemin="0"
                                                            aria-valuemax="19">19%
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="progress-item mb-2">
                                                    <div class="txt"> ექიმების გადამზადება</div>

                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="stats-small-title fw-bold  mb-3">ბიუჯეტის განაწილება</div>
                                            <div class="stat-counter">
                                                <div class="stats-parent d-flex justify-content-between mb-3">
                                                    <span>ინფრასტრუქტურა</span>
                                                    <span class="fw-bold">4.2M ₾</span>
                                                </div>

                                                <div class="stats-parent d-flex justify-content-between mb-3">
                                                    <span>ტრეინინგები</span>
                                                    <span class="fw-bold">1.2M ₾</span>
                                                </div>

                                                <div class="stats-parent d-flex justify-content-between mb-3">
                                                    <span>ტექნიკური აღჭრვილობა</span>
                                                    <span class="fw-bold">2.2M ₾</span>
                                                </div>

                                                <div class="stats-parent d-flex justify-content-between mb-3">
                                                    <span>კვლევები</span>
                                                    <span class="fw-bold">0.8M ₾</span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="stats-main-info">
                                        <div class="stats-small-title fw-bold mb-3">მთავარი მიღწევები</div>



                                        <div class="row">
                                            <div class="col-lg-12">

                                                <ul>
                                                    <li>
                                                        <a href="#"> <i class="far fa-angle-right icon mb-2"></i>
                                                            შემცირდა მედიკამენტის ფასები</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"> <i class="far fa-angle-right icon mb-2"></i>
                                                            500 მა ექიმმა გაიარა ციფრული უნარების ტრეინინგი </a>
                                                    </li>
                                                    <li>
                                                        <a href="#"> <i class="far fa-angle-right icon mb-2"></i>
                                                            დასრულდა 30 კლინიკის სრული რეაბილიტაცია</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"> <i class="far fa-angle-right icon mb-2"></i>
                                                            შეიქმნა
                                                            3 ახალი ონლაინ საგანმანათლებლო პროგრამა </a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>


                                    </div>
                                    <div class="stats-footer mt-3">
                                        <div class="footer-actions d-flex justify-content-between">
                                            <div class="footer-action-item">
                                                <a href="#" class="badge bg-danger"> სრული ანგარიშის ნახვა PDF ში
                                                </a>
                                            </div>
                                            <div class="tags">
                                                <a href="#"> გაზიარება </a>
                                                <a href="#" class="badge bg-success"> შენიშვნის დამატება </a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="blog-item">
                                <div class="cont">
                                    <div class="tags d-flex justify-content-between">
                                        <a href="#"> განათლების სამინისტრო </a>
                                        <a href="#" class="badge bg-warning"> საშუალო პროგრესი </a>
                                    </div>
                                    <h5> <a href="#"> 2024 წლის I კვარტლის ანგარიში </a> </h5>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="stats-small-title fw-bold mb-3">პროექტების სტატუსი</div>
                                            <div class="skills mt-5 mt-lg-0">
                                                <div class="progress-item mb-2">
                                                    <div class="txt"> ციფრული განათლების პროგრამა </div>

                                                    <div class="progress">
                                                        <div class="progress-bar bg-success" role="progressbar"
                                                            style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100">25%
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="progress-item mb-2">
                                                    <div class="txt">სკოლების რეაბილიტაცია</div>

                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning" role="progressbar"
                                                            style="width: 19%;" aria-valuenow="19" aria-valuemin="0"
                                                            aria-valuemax="19">19%
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="progress-item mb-2">
                                                    <div class="txt"> მასწავლებელთა გადამზადება</div>

                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="stats-small-title fw-bold  mb-3">ბიუჯეტის განაწილება</div>
                                            <div class="stat-counter">
                                                <div class="stats-parent d-flex justify-content-between mb-3">
                                                    <span>ინფრასტრუქტურა</span>
                                                    <span class="fw-bold">4.2M ₾</span>
                                                </div>

                                                <div class="stats-parent d-flex justify-content-between mb-3">
                                                    <span>ტრეინინგები</span>
                                                    <span class="fw-bold">1.2M ₾</span>
                                                </div>

                                                <div class="stats-parent d-flex justify-content-between mb-3">
                                                    <span>ტექნიკური აღჭრვილობა</span>
                                                    <span class="fw-bold">2.2M ₾</span>
                                                </div>

                                                <div class="stats-parent d-flex justify-content-between mb-3">
                                                    <span>კვლევები</span>
                                                    <span class="fw-bold">0.8M ₾</span>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="stats-main-info">
                                        <div class="stats-small-title fw-bold mb-3">მთავარი მიღწევები</div>



                                        <div class="row">
                                            <div class="col-lg-12">

                                                <ul>
                                                    <li>
                                                        <a href="#"> <i class="far fa-angle-right icon mb-2"></i>
                                                            100
                                                            სკოლაში დაინერგა პროგრამირების გაკვეთილები</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"> <i class="far fa-angle-right icon mb-2"></i>
                                                            500 მა
                                                            მასწავლებელმა გაიარა ციფრული უნარების ტრეინინგი </a>
                                                    </li>
                                                    <li>
                                                        <a href="#"> <i class="far fa-angle-right icon mb-2"></i>
                                                            დასრულდა 15 სკოლის სრული რეაბილიტაცია</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"> <i class="far fa-angle-right icon mb-2"></i>
                                                            შეიქმნა
                                                            3 ახალი ონლაინ საგანმანათლებლო პროგრამა </a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>


                                    </div>
                                    <div class="stats-footer mt-3">
                                        <div class="footer-actions d-flex justify-content-between">
                                            <div class="footer-action-item">
                                                <a href="#" class="badge bg-danger"> სრული ანგარიშის ნახვა PDF ში
                                                </a>
                                            </div>
                                            <div class="tags">
                                                <a href="#"> გაზიარება </a>
                                                <a href="#" class="badge bg-success"> შენიშვნის დამატება </a>
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
        <!-- ====== end blog ====== -->
    </main>
@endsection
