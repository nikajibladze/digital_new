<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Iteck Multi-Purpose themeforest" />
    <meta name="description" content="Iteck - Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>ციფრული საქართველო</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/gerbi.png') }}" title="Favicon" />

    <!-- ====== bootstrap icons cdn ====== -->
    {{-- <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('assets/css/lib/bootstrap.min.css') }}">

    <!-- ====== font family ====== -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet"> --}}

    <link rel="stylesheet" href="{{ asset('assets/css/lib/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lib/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lib/jquery.fancybox.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lib/lity.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/lib/swiper.min.css') }}" />
    <!-- ====== global style ====== -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/new.css') }}" />
    @vite(['resources/js/app.js'])

</head>

<body>

    <!-- ====== start loading page ====== -->
    <!-- <div id="preloader">
    </div> -->
    <!-- ---------- loader ---------- -->
    <div id="preloader">
        <div id="loading-wrapper" class="show">
            <div id="loading-text"> <img src="{{ asset('assets/img/gerbi_big.png') }}" alt=""> </div>
            <div id="loading-content"></div>
        </div>
    </div>
    <!-- ====== end loading page ====== -->


    <!-- ====== start top navbar ====== -->
    <div class="top-navbar style-1">
        <div class="container">
            <div class="content">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="top-links">
                            {{-- <div class="text text-white">
                                <i class="fas fa-bullhorn"></i>
                                <strong>Now Hiring:</strong>
                                <span>Are you a driven and motivated <a href="#" class="p-0"><u>1st Line IT
                                            Support
                                            Engineer?</u></a></span>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="r-side">
                            <div class="socail-icons">
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
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img class="me-1" src="{{ asset('assets/img/lang.png') }}" alt="">
                                    English
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">French</a></li>
                                    <li><a class="dropdown-item" href="#">Arabic</a></li>
                                    <li><a class="dropdown-item" href="#">Spanish</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ====== end top navbar ====== -->


    <!-- ====== start navbar ====== -->
    <nav class="navbar navbar-expand-lg navbar-light style-1">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/gerbi.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}">
                            მთავარი
                        </a>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            ციფრული საქართველო
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li><a class="dropdown-item"
                                    href="{{ route('digital.single', ['id' => 1]) }}">ჯანდაცვა</a>
                            </li>
                            <li><a class="dropdown-item"
                                    href="{{ route('digital.single', ['id' => 2]) }}">ელექტრონული მმართველობა</a></li>
                            <li><a class="dropdown-item"
                                    href="{{ route('digital.single', ['id' => 3]) }}">კიბერუსაფრთხოება</a></li>
                            <li><a class="dropdown-item" href="{{ route('digital.single', ['id' => 4]) }}">განათლება
                                    და კვლევა</a></li>
                            <li><a class="dropdown-item" href="{{ route('digital.single', ['id' => 5]) }}">ინდუსტრიის
                                    გაციფრულება</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('podcast') }}">
                            ახალი ამბები და პოდკასტები
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            ფორუმი
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            არჩევნები
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            გამოკითხვა
                        </a>
                    </li>
                </ul>
                <div class="nav-side">
                    <div class="hotline pe-4">

                    </div>
                    <div class="qoute-nav ps-4">
                        <a href="#" class="search-icon me-3">
                            <i class="bi bi-search"></i>
                        </a>


                    </div>
                </div>
            </div>
            <div class="nav-side">
                <div class="d-flex align-items-center">
                    <a href="{{ route('login') }}" class="search-icon me-4">
                        <i class="bi bi-person"></i>
                    </a>
                    <a href="{{ route('login') }}" class="btn rounded-pill brd-gray hover-blue4 sm-butn fw-bold">
                        <span>ავტორიზაცია <i class="bi bi-arrow-right ms-1"></i> </span>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- ====== end navbar ====== -->


    <!-- ====== start header ====== -->

    <!-- ====== end header ====== -->


    <!--Contents-->


    @yield('content')

    <!--End-Contents-->


    <!-- ====== start footer ====== -->
    <footer class="style-1">
        <div class="container">
            <div class="content">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="foot_info">
                            <a href="#" class="logo mb-3">
                                <img src="{{ asset('assets/img/gerbi.png') }}" alt="">
                            </a>
                            <div class="text mb-4">
                                გაუზიარე შენი მოსაზრება სახელმწიფოს
                            </div>
                            <ul class="mb-4">
                                <li class="d-flex">
                                    <i class="bi bi-house me-3"></i>
                                    <a href="#">
                                        <span>საქართველო</span>
                                    </a>
                                </li>
                                <li class="d-flex">
                                    <i class="bi bi-envelope me-3"></i>
                                    <a href="#">
                                        <span>test@test.ge</span>
                                    </a>
                                </li>
                                <li class="d-flex">
                                    <i class="bi bi-phone me-3"></i>
                                    <a href="#">
                                        <span>(+995) 555 68 68</span>
                                    </a>
                                </li>
                            </ul>
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
                    <div class="col-lg-2">
                        <div class="links">
                            <div class="cont">
                                <h6 class="link_title">
                                    სერვისები
                                </h6>
                                <ul>
                                    <li>
                                        <a href="#">ჯანდაცვა </a>
                                    </li>
                                    <li>
                                        <a href="#">ელექტორნული მმართველობა</a>
                                    </li>
                                    <li>
                                        <a href="#">კიბერუსაფრთხოება </a>
                                    </li>
                                    <li>
                                        <a href="#">ჭკვიანი ქალაქი მობილობა </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="links">
                            <div class="cont">
                                <h6 class="link_title">
                                    ინფორმაცია
                                </h6>
                                <ul>
                                    <li>
                                        <a href="#">ჯანმრთელობა</a>
                                    </li>
                                    <li>
                                        <a href="#">მედიკამენტები </a>
                                    </li>
                                    <li>
                                        <a href="#">მოწყობილობები </a>
                                    </li>
                                    <li>
                                        <a href="#">სამედიცინო დაწესებულებები </a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="foot_subscribe">
                            <h6 class="link_title">
                                გამოწერა
                            </h6>
                            <p>
                                გამოიწერე სიახლეები რათა არ გამოტოვოთ ახალი ამბები
                            </p>
                            <div class="input-group my-4">
                                <input type="text" class="form-control" placeholder="თქვენი ელ-ფოსტა"
                                    aria-label="Enter your email" aria-describedby="button-addon2">
                                <button class="btn butn-gard border-0 text-white px-3" type="button"
                                    id="button-addon2">
                                    <span>გამოწერა</span>
                                </button>
                            </div>
                            {{-- <p class="fst-italic">By subscribing, you accepted the our <a href="#"
                                    class="text-decoration-underline"> Policy</a></p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="foot">
                        <p>
                            © 2023 Copyrights by <a href="#" class="text-white text-decoration-underline">Iteck
                                Co.</a> All Rights Reserved by <a href="#"
                                class="text-white text-decoration-underline"> გაუზიარე შენი მოსაზრება </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <img src="assets/img/footer/foot_l.png" alt="" class="foot_l">
        <img src="assets/img/footer/foot_r.png" alt="" class="foot_r">
    </footer>
    <!-- ====== end footer ====== -->


    <!-- ====== start to top button ====== -->
    <a href="#" class="to_top">
        <i class="bi bi-chevron-up"></i>
        <small>top</small>
    </a>
    <!-- ====== end to top button ====== -->

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5f43c8171e7ade5df4437232/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
    <!-- ====== request ====== -->
    <script src="{{ asset('assets/js/lib/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/lib/lity.js') }}"></script>
    <script src="{{ asset('assets/js/lib/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/lib/jquery.counterup.js') }}"></script>
    <!-- <script src="assets/js/lib/pace.js"></script> -->
    <script src="{{ asset('assets/js/lib/scrollIt.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
