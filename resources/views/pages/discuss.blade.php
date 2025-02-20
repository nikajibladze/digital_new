@extends('layout.app')
@section('content')
    <!--Contents-->
    <main class="blog-page style-5">

        <!-- ====== start solutions  ====== -->
        <section class="solutions style-10 section-padding ">
            <div class="container">

                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-sm-6">
                            <a href="#" class="solution-card">
                                <h6> 1542 აქტიური მოქალაქე </h6>
                                <span class="icon"> <img src="assets/img/icons/solution/1.png" alt=""> </span>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <a href="#" class="solution-card">
                                <h6>20 321 დისკუსია </h6>
                                <span class="icon"> <img src="assets/img/icons/solution/2.png" alt=""> </span>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <a href="#" class="solution-card">
                                <h6> 10 სამინისტრო </h6>
                                <span class="icon"> <img src="assets/img/icons/solution/3.png" alt=""> </span>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <a href="#" class="solution-card">
                                <h6>1 230 ჩართული მოხელე </h6>
                                <span class="icon"> <img src="assets/img/icons/solution/4.png" alt=""> </span>
                            </a>
                        </div>


                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end solutions  ====== -->
        <section class="contact section-padding style-6">
            <div class="container">
                <div class="section-head mb-60 style-6 text-center">
                    <h2 class="mb-20"> ახალი
                        <span> <small> დისკუსია </small> </span>
                    </h2>

                </div>
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <form action="contact.php" class="form" method="post">
                                <p class="text-center text-danger fs-12px mb-30">The field is required mark as *</p>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group mb-20">
                                            <input type="text" name="name" class="form-control"
                                                placeholder="თემის დასახელება">
                                        </div>
                                    </div>



                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" rows="10" class="form-control" placeholder="ტექსტი"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <div class="form-check d-inline-flex mt-30 mb-30">
                                            <input class="form-check-input me-2 mt-0" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label small" for="flexCheckDefault">
                                                ვეთანხმები <a href="#" class="text-decoration-underline">წესებს და
                                                    &amp; პირობებს</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <input type="submit" value="გამოქვეყნება"
                                            class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold text-light">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <img src="assets/img/icons/contact_a.png" alt="" class="contact_a">
                    <img src="assets/img/icons/contact_message.png" alt="" class="contact_message">
                </div>
            </div>
        </section>


        <!-- ====== start all-news ====== -->
        <section class="all-news blog section-padding bg-transparent style-3">
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
                                                დისკუსია </a>
                                            <i class="bi bi-clock me-1"></i>
                                            <a href="#" class="op-8">12 დღის წინ</a>
                                        </small>
                                        <a href="https://digital.gov/event/2025/01/16/uswds-monthly-call-january-2025/"
                                            target="_blank" class="card-title mb-10">სკოლებში ციფრული განათლების
                                            გაუმჯობესება</a>
                                        <p class="fs-13px color-666">
                                            მოსწავლეებისთვის საბაზისო პროგრამირების კურსის დადგენა
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
                                                class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold">დისკუსია</a>
                                            <i class="bi bi-clock me-1"></i>
                                            <a href="#" class="op-8">12 დღის წინ</a>
                                        </small>
                                        <a href="https://digital.gov/2025/01/02/rebuilding-cdc-gov/" target="_blank"
                                            class="card-title mb-10">სასწრაფო დახმარების სისტემის რეფორმა</a>
                                        <p class="fs-13px color-666">სასწრაფო დახმარების ბრიგადების რაოდენობის გაზრდა [...]
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
                                    ძებნა
                                </h6>
                                <div class="form-group position-relative">
                                    <input type="text" class="form-control rounded-pill" placeholder="ძებნა...">
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
