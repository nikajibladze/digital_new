@extends('layout.app')

@section('content')
    <!--Contents-->
    <main class="blog-page style-5">
        <!-- ====== start all-ციფრული საქართველო ====== -->
        <section class="all-ციფრული საქართველო section-padding pt-50 blog bg-transparent style-3">
            <div class="container">
                <div class="blog-details-slider mb-20">
                    <div class="section-head text-center mb-60 style-5">
                        <h2 class="mb-20 color-000"> {{ $digital->title }} </h2>
                        <small class="d-block date text">
                            <a href="#" class="text-uppercase border-end brd-gray pe-3 me-3 color-blue5 fw-bold">
                                ციფრული საქართველო
                            </a>
                            <i class="bi bi-clock me-1"></i>
                            <span class="op-8">{{ $digital->title }}</span>
                        </small>
                    </div>

                </div>
                <div class="row gx-4 gx-lg-5">
                    <div class="col-lg-8">

                        <div class="content">

                            <div class="row">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="blog-card style-6">
                                        <a href="page-single-post-5.html" class="img img-cover d-block">
                                            <img src="{{ asset('assets/img/blog/9.png') }}" alt="">
                                        </a>
                                        <div class="info">
                                            <div class="date">
                                                <a href="#"
                                                    class="small color-blue6 fs-12px pe-3 border-end brd-gray text-uppercase fw-bold me-3">
                                                    ციფრული საქართველო </a>
                                                <small class="op-6 fs-12px"> <i class="far fa-clock"></i> Posted on </small>
                                                <a href="#" class="fs-12px">3 Days ago</a>
                                            </div>
                                            <h4 class="blog-title">
                                                <a href="{{ route('digital.single.detail') }}">ტელემედიცინის მხარდაჭერა</a>
                                            </h4>
                                            <div class="text">
                                                Dermtest არის ტელემედიცინის გადაწყვეტა, რომელიც პაციენტებს შეუძლიათ
                                                გამოიყენონ სურათებისა და კარგად სტრუქტურირებული აღწერების გასაგზავნად
                                            </div>
                                            <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                                <div class="l_side d-flex align-items-center">
                                                    <span
                                                        class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue2 p-2 me-2  text-white">
                                                        a
                                                    </span>
                                                    <a href="#">
                                                        <small class="text-muted">By</small> David
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
                                <div class="col-lg-4 col-sm-6">
                                    <div class="blog-card style-6">
                                        <a href="{{ route('digital.single.detail') }}" class="img img-cover d-block">
                                            <img src="{{ asset('assets/img/blog/9.png') }}" alt="">
                                        </a>
                                        <div class="info">
                                            <div class="date">
                                                <a href="#"
                                                    class="small color-blue6 fs-12px pe-3 border-end brd-gray text-uppercase fw-bold me-3">
                                                    ციფრული საქართველო </a>
                                                <small class="op-6 fs-12px"> <i class="far fa-clock"></i> Posted on </small>
                                                <a href="#" class="fs-12px">3 Days ago</a>
                                            </div>
                                            <h4 class="blog-title">
                                                <a href="{{ route('digital.single.detail') }}">ტელემედიცინის მხარდაჭერა</a>
                                            </h4>
                                            <div class="text">
                                                If there’s one way that wireless technology has changed the way we work,
                                                it’s that
                                                will everyone is now connected [...]
                                            </div>
                                            <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                                <div class="l_side d-flex align-items-center">
                                                    <span
                                                        class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue2 p-2 me-2  text-white">
                                                        a
                                                    </span>
                                                    <a href="#">
                                                        <small class="text-muted">By</small> David
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

                                <div class="col-lg-4 col-sm-6">
                                    <div class="blog-card style-6">
                                        <a href="{{ route('digital.single.detail') }}" class="img img-cover d-block">
                                            <img src="{{ asset('assets/img/blog/9.png') }}" alt="">
                                        </a>
                                        <div class="info">
                                            <div class="date">
                                                <a href="#"
                                                    class="small color-blue6 fs-12px pe-3 border-end brd-gray text-uppercase fw-bold me-3">
                                                    ციფრული საქართველო </a>
                                                <small class="op-6 fs-12px"> <i class="far fa-clock"></i> Posted on </small>
                                                <a href="#" class="fs-12px">3 Days ago</a>
                                            </div>
                                            <h4 class="blog-title">
                                                <a href="{{ route('digital.single.detail') }}">ტელემედიცინის მხარდაჭერა</a>
                                            </h4>
                                            <div class="text">
                                                If there’s one way that wireless technology has changed the way we work,
                                                it’s that
                                                will everyone is now connected [...]
                                            </div>
                                            <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                                <div class="l_side d-flex align-items-center">
                                                    <span
                                                        class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue2 p-2 me-2  text-white">
                                                        a
                                                    </span>
                                                    <a href="#">
                                                        <small class="text-muted">By</small> David
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
                    </div>

                    <div class="col-lg-4">
                        <div class="side-blog style-5 ps-lg-5 mt-5 mt-lg-0">
                            <form action="contact.php" class="search-form mb-50" method="post">
                                <h6 class="title mb-20 text-uppercase fw-normal">
                                    ძებნა
                                </h6>
                                <div class="form-group position-relative">
                                    <input type="text" class="form-control rounded-pill"
                                        placeholder="Type and hit enter">
                                    <button class="search-btn border-0 bg-transparent"> <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>



                            <div class="side-categories mb-50">
                                <h6 class="title mb-20 text-uppercase fw-normal">
                                    ფილტრი
                                </h6>
                                <a href="#" class="cat-item">
                                    <span> ყველა </span>
                                    <span> 265 </span>
                                </a>
                                <a href="#" class="cat-item">
                                    <span> ყველა გადაწყვეტა </span>
                                    <span> 38 </span>
                                </a>
                                <a href="#" class="cat-item">
                                    <span> შესაბამისობა </span>
                                    <span> 16 </span>
                                </a>
                                <a href="#" class="cat-item">
                                    <span> კიბერნეტიკა </span>
                                    <span> 85 </span>
                                </a>
                                <a href="#" class="cat-item">
                                    <span> მონაცემთა ანალიზი </span>
                                    <span> 21 </span>
                                </a>
                                <a href="#" class="cat-item">
                                    <span> მონაცემთა გაცვლა </span>
                                    <span> 874 </span>
                                </a>
                                <a href="#" class="cat-item">
                                    <span> მონაცემთა მართვა </span>
                                    <span> 54 </span>
                                </a>
                                <a href="#" class="cat-item border-0">
                                    <span> განაწილება </span>
                                    <span> 85 </span>
                                </a>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end all-ციფრული საქართველო ====== -->



    </main>
    <!--End-Contents-->
@endsection
