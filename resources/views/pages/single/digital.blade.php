@extends('layout.app')

@section('content')
    <!--Contents-->
    <main class="about-page style-2">

        <!-- ====== start careers-features ====== -->
        <section class="about style-2 section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="img img-cover">
                            <img src="{{ asset('assets/img/about/about2.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info px-lg-5">
                            <div class="section-head style-5 mb-40">
                                <h2 class="mb-20"> <span> {{ $digital->title }}</span> </h2>
                            </div>
                            {{-- <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="abt1-tab" data-bs-toggle="pill"
                                        data-bs-target="#abt1" type="button" role="tab" aria-controls="pills-home"
                                        aria-selected="true">
                                        Our Mission
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="abt2-tab" data-bs-toggle="pill" data-bs-target="#abt2"
                                        type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                        Our vision
                                    </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="abt3-tab" data-bs-toggle="pill" data-bs-target="#abt1"
                                        type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                                        Our Goal
                                    </button>
                                </li>
                            </ul> --}}
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="abt1" role="tabpanel">
                                    <p class="text">{{ $digital->text }}</p>
                                    <div class="d-flex align-items-center mt-40">
                                        <div class="btns">
                                            <a href="{{ route('digital.single.list', ['id' => $digital->id]) }}"
                                                class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold">
                                                <span> დეტალურად </span>
                                            </a>
                                        </div>
                                        {{-- <div class="inf ms-3">
                                            <p class="color-999"> Support Email </p>
                                            <a href="#" class="fw-bold color-000"> info@webmail.com </a>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="abt2" role="tabpanel">
                                    <p class="text"> The uploading and updating processes made by suppliers can be
                                        streamlined through front-end dashboards that create better ease of access. </p>
                                    <div class="d-flex align-items-center mt-40">
                                        <div class="btns">
                                            <a href="#"
                                                class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold">
                                                <span> დეტალურად </span>
                                            </a>
                                        </div>
                                        <div class="inf ms-3">
                                            <p class="color-999"> Support Email </p>
                                            <a href="#" class="fw-bold color-000"> info@webmail.com </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/img/about/about2_pattern_l.png" alt="" class="pattern_l">
            <img src="assets/img/about/about2_pattern_r.png" alt="" class="pattern_r">
        </section>
        <!-- ====== end careers-features ====== -->


    </main>
    <!--End-Contents-->
@endsection
