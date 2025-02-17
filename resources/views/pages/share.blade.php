@extends('layout.app')

@section('content')
    <!--Contents-->
    <main class="blog-page style-5">





        <!-- ====== start Popular Posts ====== -->
        <section class="popular-posts pt-50 pb-100 border-bottom brd-gray">
            <div class="container">
                <div class="section-head text-center mb-100 style-5">
                    <h2 class="mb-20"> გაუზიარე შენი მოსაზრება <span> სახელმწიფოს </span> </h2>
                    <p>We will contact again after receive your request in 24h</p>
                </div>
                <div class="row gx-5">
                    <div class="col-lg-12 border-end brd-gray">
                        <div id="tree"> </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ====== end Popular Posts ====== -->


        <section class="contact section-padding pt-50 style-6 share-form">
            <div class="container">
                {{-- <div class="section-head text-center mb-100 style-5">
                    <h2 class="mb-20"> Get In <span> Touch </span> </h2>
                    <p>We will contact again after receive your request in 24h</p>
                </div>
                <div class="text-center mb-100">
                    <h2 class="ltspc-20 text-uppercase fs-1 lh-1 mb-50 mt-30 color-blue5">(+23) 5535 68 68</h2>
                    <h4 class="fw-normal mb-20 color-000">contact@Itecksolution.com</h4>
                    <h4 class="fw-normal mb-10 color-000">58 Howard St, San Francisco, CA 941</h4>
                </div> --}}
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <form action="contact.php" class="form" method="post">
                                <p class="text-center text-danger fs-12px mb-30">განაცხადის ფორმა </p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" readonly name="name" id="organisation_name"
                                                class="form-control" placeholder="სტრუქტურა">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="email" class="form-control" placeholder="სახელი"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="phone" class="form-control" placeholder="გვარი">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="website" class="form-control"
                                                placeholder="პირადი ნომერი">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="website" class="form-control"
                                                placeholder="ტელეფონის ნომერი">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="website" class="form-control"
                                                placeholder="ელ-ფოსტა">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-20">
                                            <select name="option" class="form-select">
                                                <option value="" selected>მიმართულება</option>
                                                <option value="option 1">option 1</option>
                                                <option value="option 2">option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-20">
                                            <select name="option" class="form-select">
                                                <option value="" selected>თემა</option>
                                                <option value="option 1">option 1</option>
                                                <option value="option 2">option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-20">
                                            <select name="option" class="form-select">
                                                <option value="" selected>მოსაზრების ტიპი</option>
                                                <option value="option 1">option 1</option>
                                                <option value="option 2">option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea rows="10" name="message" class="form-control" placeholder="ტექსტი"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <div class="form-check d-inline-flex mt-30 mb-30">
                                            <input class="form-check-input me-2 mt-0" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label small" for="flexCheckDefault">
                                                By submitting, i’m agreed to the <a href="#"
                                                    class="text-decoration-underline">Terms & Conditons</a>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <input type="submit" value="გაზიარება"
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

    </main>
    <!--End-Contents-->
@endsection
