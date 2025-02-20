@extends('layout.app')
@section('content')
    <!--Contents-->
    <main class="blog-page style-5">


        <!-- ====== start blog-slider ====== -->
        <section class="blog-slider pt-50 pb-50 style-1">
            <div class="container">
                <div class="section-head text-center mb-60 style-5">
                    <h2 class="mb-20"> ახალი <span> ამბები და პოდკასტები </span> </h2>
                    <div class="text color-666">გაეცანით პოდკასტებსა და ახალ ამბებს</div>
                </div>
                <div class="blog-details-slider">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="content-card">
                                    <div class="img overlay">
                                        <img src="assets/img/blog/s_blog.png" alt="">
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="cont">
                                                    <small class="date small mb-20"> <a href="#"
                                                            class="text-uppercase border-end brd-gray pe-3 me-3"> News </a>
                                                        <i class="far fa-clock me-1"></i> Posted on <a href="#">3 Days
                                                            ago</a> </small>
                                                    <h2 class="title">
                                                        <a href="https://digital.gov/event/2025/01/16/uswds-monthly-call-january-2025/"
                                                            target="_blank">SUSWDS ყოველთვიური ზარი - 2025
                                                            წლის იანვარი</a>
                                                    </h2>
                                                    <p class="fs-13px mt-10 text-light text-info">შეიტყვეთ აშშ-ს ვებ
                                                        დიზაინის სისტემის საფუძვლები, როგორ დაიწყოთ დიზაინის სისტემა და რა
                                                        მოელის შემდეგ USWDS-ს 2025 წელს.[...]</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content-card">
                                    <div class="img overlay">
                                        <img src="assets/img/blog/1.jpeg" alt="">
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="cont">
                                                    <small class="date small mb-20"> <a href="#"
                                                            class="text-uppercase border-end brd-gray pe-3 me-3"> News </a>
                                                        <i class="far fa-clock me-1"></i> Posted on <a href="#">3 Days
                                                            ago</a> </small>
                                                    <h2 class="title">
                                                        <a href="https://digital.gov/2025/01/02/rebuilding-cdc-gov/"
                                                            target="_blank">CDC.gov-ის
                                                            აღდგენა</a>
                                                    </h2>
                                                    <p class="fs-13px mt-10 text-light text-info">შეიტყვეთ, თუ როგორ
                                                        გამოიყენა CDC.gov-ის გუნდმა თამამი
                                                        „სუფთა ფიქალის“ მიდგომა საიტის ხელახლა წარმოსახვისთვის და
                                                        მომხმარებლის რეალური
                                                        საჭიროებების დასაკმაყოფილებლად. [...]</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="content-card">
                                    <div class="img overlay">
                                        <img src="assets/img/blog/2.jpeg" alt="">
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="cont">
                                                    <small class="date small mb-20"> <a href="#"
                                                            class="text-uppercase border-end brd-gray pe-3 me-3"> News </a>
                                                        <i class="far fa-clock me-1"></i> Posted on <a href="#">3 Days
                                                            ago</a> </small>
                                                    <h2 class="title">
                                                        <a href="https://digital.gov/2024/12/31/reduce-remove-remediate-pdfs-and-government-websites/"
                                                            target="_blank">შემცირება,
                                                            წაშლა,
                                                            გამოსწორება: PDF და სამთავრობო ვებსაიტები</a>
                                                    </h2>
                                                    <p class="fs-13px mt-10 text-light text-info">ბოლო დროს სამთავრობო
                                                        საზოგადოების დისკუსიაში, ჩვენ
                                                        გავუზიარეთ რჩევები სამთავრობო ვებსაიტებზე PDF-ების გამოყენების
                                                        გამოსასწორებლად,
                                                        საჭიროებების დაბალანსებაზე ფოკუსირება, ფორმატების არჩევა, დაწყებული
                                                        გამოსწორებები და დოკუმენტების ხელმისაწვდომობის უზრუნველყოფა
                                                        ყველასთვის. [...]</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ====== pagination ====== -->
                    <div class="swiper-pagination"></div>
                    <!-- ====== arrows ====== -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- ====== end blog-slider ====== -->


        <!-- ====== start Popular Posts ====== -->
        <section class="popular-posts pt-50 pb-100 border-bottom brd-gray">
            <div class="container">
                <h5 class="post-sc-title text-center text-uppercase mb-70">პოდკასტები</h5>
                <div class="row gx-5">
                    <div class="col-lg-4 border-end brd-gray">
                        <div class="card border-0 bg-transparent rounded-0 mb-30 mb-lg-0 d-block">
                            <div class="img radius-7 overflow-hidden img-cover">
                                <img src="assets/img/blog/1.jpeg" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body px-0">
                                <small class="d-block date mt-10 fs-10px fw-bold">
                                    <a href="#"
                                        class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5">News</a>
                                    <i class="bi bi-clock me-1"></i>
                                    <a href="#" class="op-8">Posted on 3 დღის წინ</a>
                                </small>
                                <h5 class="fw-bold mt-10 title">
                                    <a href="page-single-post-5.html"> პოდკასტი 2023</a>
                                </h5>
                                <p class="small mt-2 op-8 fs-10px">If there’s one way that wireless technology has
                                    changed the way we work, it’s that will everyone is now connected [...]
                                </p>
                                <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                    <div class="l_side d-flex align-items-center">
                                        <span
                                            class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
                                            a
                                        </span>
                                        <a href="#" class="mt-1">
                                            By Admin
                                        </a>
                                    </div>
                                    <div class="r-side mt-1">
                                        <i class="bi bi-chat-left-text me-1"></i>
                                        <a href="#">24</a>
                                        <i class="bi bi-eye ms-4 me-1"></i>
                                        <a href="#">774k</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 border-end brd-gray">
                        <div class="card border-0 bg-transparent rounded-0 mb-30 mb-lg-0 d-block">
                            <div class="img radius-7 overflow-hidden img-cover">
                                <img src="assets/img/blog/7.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body px-0">
                                <small class="d-block date mt-10 fs-10px fw-bold">
                                    <a href="#"
                                        class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5">News</a>
                                    <i class="bi bi-clock me-1"></i>
                                    <a href="#" class="op-8">Posted on 3 დღის წინ</a>
                                </small>
                                <h5 class="fw-bold mt-10 title">
                                    <a href="page-single-post-5.html">ახალი პოდკასტი</a>
                                </h5>
                                <p class="small mt-2 op-8 fs-10px">If there’s one way that wireless technology has
                                    changed the way we work, it’s that will everyone is now connected [...]
                                </p>
                                <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                    <div class="l_side d-flex align-items-center">
                                        <span
                                            class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
                                            a
                                        </span>
                                        <a href="#" class="mt-1">
                                            By Admin
                                        </a>
                                    </div>
                                    <div class="r-side mt-1">
                                        <i class="bi bi-chat-left-text me-1"></i>
                                        <a href="#">24</a>
                                        <i class="bi bi-eye ms-4 me-1"></i>
                                        <a href="#">774k</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0 bg-transparent rounded-0 mb-30 mb-lg-0 d-block">
                            <div class="img radius-7 overflow-hidden img-cover">
                                <img src="assets/img/blog/5.png" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body px-0">
                                <small class="d-block date mt-10 fs-10px fw-bold">
                                    <a href="#"
                                        class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5">News</a>
                                    <i class="bi bi-clock me-1"></i>
                                    <a href="#" class="op-8">Posted on 3 დღის წინ</a>
                                </small>
                                <h5 class="fw-bold mt-10 title">
                                    <a href="page-single-post-5.html">პოდკასტი ახალი 3</a>
                                </h5>
                                <p class="small mt-2 op-8 fs-10px">If there’s one way that wireless technology has
                                    changed the way we work, it’s that will everyone is now connected [...]
                                </p>
                                <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                    <div class="l_side d-flex align-items-center">
                                        <span
                                            class="icon-20 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-main p-1 me-2 text-white">
                                            a
                                        </span>
                                        <a href="#" class="mt-1">
                                            By Admin
                                        </a>
                                    </div>
                                    <div class="r-side mt-1">
                                        <i class="bi bi-chat-left-text me-1"></i>
                                        <a href="#">24</a>
                                        <i class="bi bi-eye ms-4 me-1"></i>
                                        <a href="#">774k</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end Popular Posts ====== -->


        <!-- ====== start all-news ====== -->
        <section class="all-news section-padding blog bg-transparent style-3">
            <div class="container">
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-8">
                        <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="img img-cover">
                                        <img src="assets/img/blog/6.png" class="radius-7" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="card-body p-0">
                                        <small class="d-block date text">
                                            <a href="#"
                                                class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold">
                                                სიახლე </a>
                                            <i class="bi bi-clock me-1"></i>
                                            <a href="#" class="op-8">12 დღის წინ</a>
                                        </small>
                                        <a href="https://digital.gov/event/2025/01/16/uswds-monthly-call-january-2025/"
                                            target="_blank" class="card-title mb-10">USWDS ყოველთვიური ზარი
                                            - 2025 წლის იანვარი</a>
                                        <p class="fs-13px color-666">
                                            შეიტყვეთ აშშ-ს ვებ დიზაინის სისტემის საფუძვლები, როგორ დაიწყოთ დიზაინის სისტემა
                                            და რა მოელის შემდეგ USWDS-ს 2025 წელს.
                                            [...]</p>
                                        <div
                                            class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                            <div class="l_side d-flex align-items-center">
                                                <span
                                                    class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue5 p-2 me-2 text-white">
                                                    a
                                                </span>
                                                <a href="#">
                                                    <small class="text-muted"></small> ადმინისტრატორი
                                                </a>
                                            </div>
                                            <div class="r-side mt-1">
                                                <i class="bi bi-chat-left-text me-1"></i>
                                                <a href="#">24</a>
                                                <i class="bi bi-eye ms-4 me-1"></i>
                                                <a href="#">774k</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="img img-cover">
                                        <img src="assets/img/blog/4.jpeg" class="radius-7" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="card-body p-0">
                                        <small class="d-block date text">
                                            <a href="#"
                                                class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold">news</a>
                                            <i class="bi bi-clock me-1"></i>
                                            <a href="#" class="op-8">12 დღის წინ</a>
                                        </small>
                                        <a href="https://digital.gov/2025/01/02/rebuilding-cdc-gov/" target="_blank"
                                            class="card-title mb-10">CDC.gov-ის აღდგენა</a>
                                        <p class="fs-13px color-666">შეიტყვეთ, თუ როგორ გამოიყენა CDC.gov-ის გუნდმა თამამი
                                            „სუფთა ფიქალის“ მიდგომა საიტის ხელახლა წარმოსახვისთვის და მომხმარებლის რეალური
                                            საჭიროებების დასაკმაყოფილებლად. [...]</p>
                                        <div
                                            class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                            <div class="l_side d-flex align-items-center">
                                                <span
                                                    class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue5 p-2 me-2 text-white">
                                                    a
                                                </span>
                                                <a href="#">
                                                    <small class="text-muted"></small> ადმინისტრატორი
                                                </a>
                                            </div>
                                            <div class="r-side mt-1">
                                                <i class="bi bi-chat-left-text me-1"></i>
                                                <a href="#">24</a>
                                                <i class="bi bi-eye ms-4 me-1"></i>
                                                <a href="#">774k</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="img img-cover">
                                        <img src="assets/img/blog/10.png" class="radius-7" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="card-body p-0">
                                        <small class="d-block date text">
                                            <a href="#"
                                                class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold">სიახლე</a>
                                            <i class="bi bi-clock me-1"></i>
                                            <a href="#" class="op-8">12 დღის წინ</a>
                                        </small>
                                        <a href="https://digital.gov/2024/12/31/reduce-remove-remediate-pdfs-and-government-websites/"
                                            target="_blank" class="card-title mb-10">შემცირება, წაშლა,
                                            გამოსწორება: PDF და სამთავრობო ვებსაიტები</a>
                                        <p class="fs-13px color-666">ბოლო დროს სამთავრობო საზოგადოების დისკუსიაში, ჩვენ
                                            გავუზიარეთ რჩევები სამთავრობო ვებსაიტებზე PDF-ების გამოყენების გამოსასწორებლად,
                                            საჭიროებების დაბალანსებაზე ფოკუსირება, ფორმატების არჩევა, დაწყებული
                                            გამოსწორებები და დოკუმენტების ხელმისაწვდომობის უზრუნველყოფა ყველასთვის. [...]
                                        </p>
                                        <div
                                            class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                            <div class="l_side d-flex align-items-center">
                                                <span
                                                    class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue5 p-2 me-2 text-white">
                                                    a
                                                </span>
                                                <a href="#">
                                                    <small class="text-muted"></small> ადმინისტრატორი
                                                </a>
                                            </div>
                                            <div class="r-side mt-1">
                                                <i class="bi bi-chat-left-text me-1"></i>
                                                <a href="#">24</a>
                                                <i class="bi bi-eye ms-4 me-1"></i>
                                                <a href="#">774k</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="img img-cover">
                                        <img src="assets/img/blog/11.png" class="radius-7" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="card-body p-0">
                                        <small class="d-block date text">
                                            <a href="#"
                                                class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold">სიახლე</a>
                                            <i class="bi bi-clock me-1"></i>
                                            <a href="#" class="op-8">12 დღის წინ</a>
                                        </small>
                                        <a href="https://digital.gov/2024/12/23/designing-a-multilingual-future/"
                                            target="_blank" class="card-title mb-10">მრავალენოვანი მომავლის
                                            შექმნა: საუბარი ლორა გოდფრისთან</a>
                                        <p class="fs-13px color-666">პენსიაზე გასვლის წინა დღეს, ლორა გოდფრი ასახავს
                                            მულტილინგვულობას და სამთავრობო ინფორმაციაზე თანაბარ ხელმისაწვდომობას. [...]</p>
                                        <div
                                            class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                            <div class="l_side d-flex align-items-center">
                                                <span
                                                    class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue5 p-2 me-2 text-white">
                                                    a
                                                </span>
                                                <a href="#">
                                                    <small class="text-muted"></small> ადმინისტრატორი
                                                </a>
                                            </div>
                                            <div class="r-side mt-1">
                                                <i class="bi bi-chat-left-text me-1"></i>
                                                <a href="#">24</a>
                                                <i class="bi bi-eye ms-4 me-1"></i>
                                                <a href="#">774k</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="img img-cover">
                                        <img src="assets/img/blog/9.png" class="radius-7" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="card-body p-0">
                                        <small class="d-block date text">
                                            <a href="#"
                                                class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold">სიახლე</a>
                                            <i class="bi bi-clock me-1"></i>
                                            <a href="#" class="op-8">12 დღის წინ</a>
                                        </small>
                                        <a href="https://www.section508.gov/manage/section-508-assessment/2024/executive-summary/"
                                            class="card-title
                                            mb-10">FY 24
                                            სამთავრობო ნაწილი
                                            508 შეფასება</a>
                                        <p class="fs-13px color-666">2024 წლის სამთავრობო განყოფილების 508 შეფასება ხაზს
                                            უსვამს პროგრესს და მიმდინარე გამოწვევებს ციფრული ხელმისაწვდომობის ფედერალურ
                                            მცდელობებში. [...]</p>
                                        <div
                                            class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                            <div class="l_side d-flex align-items-center">
                                                <span
                                                    class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue5 p-2 me-2 text-white">
                                                    a
                                                </span>
                                                <a href="#">
                                                    <small class="text-muted"></small> ადმინისტრატორი
                                                </a>
                                            </div>
                                            <div class="r-side mt-1">
                                                <i class="bi bi-chat-left-text me-1"></i>
                                                <a href="#">24</a>
                                                <i class="bi bi-eye ms-4 me-1"></i>
                                                <a href="#">774k</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 bg-transparent rounded-0 border-bottom brd-gray pb-30 mb-30">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="img img-cover">
                                        <img src="assets/img/blog/3.jpeg" class="radius-7" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="card-body p-0">
                                        <small class="d-block date text">
                                            <a href="#"
                                                class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold">სიახლე</a>
                                            <i class="bi bi-clock me-1"></i>
                                            <a href="#" class="op-8">12 დღის წინ</a>
                                        </small>
                                        <a href="https://digital.gov/event/2024/12/19/uswds-monthly-call-december-2024/"
                                            target="_blank" class="card-title mb-10">USWDS ყოველთვიური ზარი - 2024 წლის
                                            დეკემბერი</a>
                                        <p class="fs-13px color-666">
                                            აშშ-ის ვებ დიზაინის სისტემის გუნდს უერთდება ვებსაიტების ფედერალური სტანდარტების
                                            გუნდი, რათა გაუზიაროთ მეტი სტანდარტების, მათი წარმოშობის, მათ მხარდაჭერილი
                                            კვლევისა და შემდეგი სტანდარტების შესახებ.
                                            [...]</p>
                                        <div
                                            class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                            <div class="l_side d-flex align-items-center">
                                                <span
                                                    class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue5 p-2 me-2 text-white">
                                                    a
                                                </span>
                                                <a href="#">
                                                    <small class="text-muted"></small> ადმინისტრატორი
                                                </a>
                                            </div>
                                            <div class="r-side mt-1">
                                                <i class="bi bi-chat-left-text me-1"></i>
                                                <a href="#">24</a>
                                                <i class="bi bi-eye ms-4 me-1"></i>
                                                <a href="#">774k</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 bg-transparent rounded-0 pb-30 mb-30 mb-lg-0 pb-lg-0">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="img img-cover">
                                        <img src="assets/img/blog/12.png" class="radius-7" alt="...">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="card-body p-0">
                                        <small class="d-block date text">
                                            <a href="#"
                                                class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold">სიახლე</a>
                                            <i class="bi bi-clock me-1"></i>
                                            <a href="#" class="op-8">12 დღის წინ</a>
                                        </small>
                                        <a href="https://18f.gsa.gov/2024/12/10/how-we-measure-coaching/" target="_blank"
                                            class="card-title mb-10">როგორ გავზომოთ
                                            ქოუჩინგის ჩართულობის წარმატება</a>
                                        <p class="fs-13px color-666">18F ზომავს ქოუჩინგის წარმატებას პირველად პროდუქტის
                                            მფლობელების პროგრესის თვალყურის დევნით. თვითშეფასების და მუდმივი მხარდაჭერის
                                            საშუალებით, მათ ყურადღება გაამახვილეს ისეთი ძირითადი უნარების განვითარებაზე,
                                            როგორიცაა პროდუქტის აღმოჩენა და გამყიდველის მართვა. ეს მიდგომა მათ საშუალებას
                                            აძლევდა თვალყური ადევნონ ზრდას და უზრუნველყონ, რომ სააგენტოს პარტნიორებს მიეცათ
                                            უფლება, თავდაჯერებულად წარმართონ თავიანთი ტექნოლოგიების მოდერნიზაციის პროექტები.
                                            [...]</p>
                                        <div
                                            class="auther-comments d-flex small align-items-center justify-content-between op-9">
                                            <div class="l_side d-flex align-items-center">
                                                <span
                                                    class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue5 p-2 me-2 text-white">
                                                    a
                                                </span>
                                                <a href="#">
                                                    <small class="text-muted"></small> ადმინისტრატორი
                                                </a>
                                            </div>
                                            <div class="r-side mt-1">
                                                <i class="bi bi-chat-left-text me-1"></i>
                                                <a href="#">24</a>
                                                <i class="bi bi-eye ms-4 me-1"></i>
                                                <a href="#">774k</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pagination style-5 color-5 justify-content-center mt-60">
                            <a href="#" class="active">
                                <span>1</span>
                            </a>
                            <a href="#">
                                <span>2</span>
                            </a>
                            <a href="#">
                                <span>3</span>
                            </a>
                            <a href="#">
                                <span>4</span>
                            </a>
                            <a href="#">
                                <span>...</span>
                            </a>
                            <a href="#">
                                <span>20</span>
                            </a>
                            <a href="#">
                                <span class="text">next <i class="fas fa-chevron-right"></i> </span>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="side-blog style-5 ps-lg-5 mt-5 mt-lg-0">

                            <form action="contact.php" class="search-form mb-50" method="post">
                                <h6 class="title mb-20 text-uppercase fw-normal">
                                    search
                                </h6>
                                <div class="form-group position-relative">
                                    <input type="text" class="form-control rounded-pill"
                                        placeholder="Type and hit enter">
                                    <button class="search-btn border-0 bg-transparent"> <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>

                            <div class="side-recent-post mb-50">
                                <h6 class="title mb-20 text-uppercase fw-normal">
                                    recent post
                                </h6>
                                <a href="page-single-post-5.html" class="post-card pb-3 mb-3 border-bottom brd-gray">
                                    <div class="img me-3">
                                        <img src="assets/img/blog/1.jpeg" alt="">
                                    </div>
                                    <div class="inf">
                                        <h6> პოდკასტი 2023 </h6>
                                        <p> If there’s one way that wireless technology has [...] </p>
                                    </div>
                                </a>
                                <a href="page-single-post-5.html" class="post-card pb-3 mb-3 border-bottom brd-gray">
                                    <div class="img me-3">
                                        <img src="assets/img/blog/2.jpeg" alt="">
                                    </div>
                                    <div class="inf">
                                        <h6> How To Become Web Developer </h6>
                                        <p> If there’s one way that wireless technology has [...] </p>
                                    </div>
                                </a>
                                <a href="page-single-post-5.html" class="post-card pb-3 mb-3 border-bottom brd-gray">
                                    <div class="img me-3">
                                        <img src="assets/img/blog/3.jpeg" alt="">
                                    </div>
                                    <div class="inf">
                                        <h6> Wireframe for UI/UX </h6>
                                        <p> If there’s one way that wireless technology has [...] </p>
                                    </div>
                                </a>
                                <a href="page-single-post-5.html" class="post-card">
                                    <div class="img me-3">
                                        <img src="assets/img/blog/7.png" alt="">
                                    </div>
                                    <div class="inf">
                                        <h6> AI With Fingerprint </h6>
                                        <p> If there’s one way that wireless technology has [...] </p>
                                    </div>
                                </a>
                            </div>

                            <div class="side-categories mb-50">
                                <h6 class="title mb-20 text-uppercase fw-normal">
                                    categories
                                </h6>
                                <a href="#" class="cat-item">
                                    <span> all </span>
                                    <span> 265 </span>
                                </a>
                                <a href="#" class="cat-item">
                                    <span> News </span>
                                    <span> 38 </span>
                                </a>
                                <a href="#" class="cat-item">
                                    <span> Technology </span>
                                    <span> 16 </span>
                                </a>
                                <a href="#" class="cat-item">
                                    <span> Tips & Tricks </span>
                                    <span> 85 </span>
                                </a>
                                <a href="#" class="cat-item">
                                    <span> Career </span>
                                    <span> 21 </span>
                                </a>
                                <a href="#" class="cat-item">
                                    <span> Community </span>
                                    <span> 874 </span>
                                </a>
                                <a href="#" class="cat-item">
                                    <span> Videos </span>
                                    <span> 54 </span>
                                </a>
                                <a href="#" class="cat-item border-0">
                                    <span> Others </span>
                                    <span> 85 </span>
                                </a>
                            </div>

                            <div class="side-newsletter mb-50">
                                <h6 class="title mb-10 text-uppercase fw-normal">
                                    newsletter
                                </h6>
                                <div class="text">
                                    Register now to get latest updates on promotions & coupons.
                                </div>
                                <form action="contact.php" class="form-subscribe" method="post">
                                    <div class="email-input d-flex align-items-center py-3 px-3 bg-white mt-3 radius-5">
                                        <span class="icon me-2 flex-shrink-0">
                                            <i class="far fa-envelope"></i>
                                        </span>
                                        <input type="text" placeholder="Email Address"
                                            class="border-0 bg-transparent fs-13px">
                                    </div>
                                    <button
                                        class="btn bg-blue5 sm-butn text-white hover-darkBlue w-100 mt-3 radius-5 py-3">
                                        <span>Subscribe</span>
                                    </button>
                                </form>
                            </div>

                            <div class="side-share mb-50">
                                <h6 class="title mb-20 text-uppercase fw-normal">
                                    social
                                </h6>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-goodreads-g"></i>
                                </a>
                                <a href="#" class="social-icon">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>

                            <div class="side-insta mb-50">
                                <h6 class="title mb-20 text-uppercase fw-normal">
                                    our instagram
                                </h6>
                                <div class="d-flex justify-content-between flex-wrap">
                                    <a href="assets/img/blog/1.jpeg" class="insta-img img-cover" data-fancybox="gallery">
                                        <img src="assets/img/blog/1.jpeg" alt="">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                    <a href="assets/img/blog/10.png" class="insta-img img-cover" data-fancybox="gallery">
                                        <img src="assets/img/blog/10.png" alt="">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                    <a href="assets/img/blog/11.png" class="insta-img img-cover" data-fancybox="gallery">
                                        <img src="assets/img/blog/11.png" alt="">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                    <a href="assets/img/blog/12.png" class="insta-img img-cover" data-fancybox="gallery">
                                        <img src="assets/img/blog/12.png" alt="">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                    <a href="assets/img/blog/2.jpeg" class="insta-img img-cover" data-fancybox="gallery">
                                        <img src="assets/img/blog/2.jpeg" alt="">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                    <a href="assets/img/blog/3.jpeg" class="insta-img img-cover" data-fancybox="gallery">
                                        <img src="assets/img/blog/3.jpeg" alt="">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="side-tags">
                                <h6 class="title mb-20 text-uppercase fw-normal">
                                    popular tags
                                </h6>
                                <div class="content">
                                    <a href="#">ჯანდაცვა</a>
                                    <a href="#">მედიკამენტები</a>
                                    <a href="#">კიბერუსაფრთხოება</a>
                                    <a href="#">ელ-მმართველობა</a>
                                    <a href="#">მობილობა</a>
                                    <a href="#">ჭკვიანი ქალაქი</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end all-news ====== -->

    </main>
    <!--End-Contents-->
@endsection
