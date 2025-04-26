<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>TWC - Trigger Writers' Club </title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;600;700&display=swap" rel="stylesheet">

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>

    <body>

        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('images/logo-transparent-s.png') }}" width="200px" alt="" style="filter: invert(0);">
                    </a>

                    <div class="d-lg-none ms-auto me-3">
                        <a href="#" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                            <i class="btn-icon bi-cloud-download"></i>
                            <span>Join us today</span><!-- duplicated another one below for mobile -->
                        </a>
                    </div>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto me-lg-4">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_1">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_2">About us</a>
                            </li>

                            <!-- <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_3">Our Team</a>
                            </li> -->

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_4">Reviews</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="#section_5">Contact</a>
                            </li>
                        </ul>

                        <div class="d-none d-lg-block">
                            <a href="#" class="btn custom-btn custom-border-btn btn-naira btn-inverted">
                                <i class="btn-icon bi-cloud-download"></i>
                                <span>Join us today</span><!-- duplicated above one for mobile -->
                            </a>
                        </div>
                    </div>
                </div>
            </nav>


            <section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12 mb-5 pb-5 pb-lg-0 mb-lg-0">

                            <h6>From fiction, to non-fiction
                                you're welcome to</h6>

                            <h2 class="text-white mb-4">Trigger Writers’ Club – an online writers’ community aimed at reigniting the passion for writing in our society.</h2>

                            <a href="#section_2" class="btn custom-btn smoothscroll me-3">Discover More</a>

                            <a href="#section_3" class="link link--kale smoothscroll">Connect online</a>
                        </div>

                        <div class="hero-image-wrap col-lg-6 col-12 mt-3 mt-lg-0">
                            <img src="{{ asset('images/tab_influence.png') }}" class="hero-image img-fluid" alt="We write to influence, inspire and entertain.">
                        </div>

                    </div>
                </div>
            </section>


            <section class="featured-section">
                <div class="container">
                    <div class="row">

                        <div cl
                        ass="col-lg-8 col-12">
                            <div class="avatar-group d-flex flex-wrap align-items-center">
                                <img src="{{ asset('images/avatar/portrait-beautiful-young-woman-standing-grey-wall.jpg') }}" class="img-fluid avatar-image" alt="">

                                <img src="{{ asset('images/avatar/portrait-young-redhead-bearded-male.jpg') }}" class="img-fluid avatar-image avatar-image-left" alt="">

                                <img src="{{ asset('images/avatar/pretty-blonde-woman.jpg') }}" class="img-fluid avatar-image avatar-image-left" alt="">

                                <img src="{{ asset('images/avatar/studio-portrait-emotional-happy-funny-smiling-boyfriend.jpg') }}" class="img-fluid avatar-image avatar-image-left" alt="">

                                <div class="reviews-group mt-3 mt-lg-0">
                                    <strong>4.5</strong>

                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star-fill"></i>
                                    <i class="bi-star"></i>

                                    <small class="ms-3">24 reviews</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="py-lg-5"></section>


            <section class="book-section section-padding" id="section_2">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <img src="{{ asset('images/twc-tab-white.jpg') }}" class="img-fluid" alt="">
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="book-section-info">
                                <h6>Modern &amp; Creative Community</h6>


                                <h2 class="mb-4">About The Club</h2>

                                <p>We are the  <a rel="nofollow" href="https://triggerwritersclub.com" target="_blank">Trigger Writers’ Club</a>  – an online writers’ community aimed at reigniting the passion for writing in our society. We write to address societal issues, inspire others and we write for FUN.

                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="contact-section section-padding" id="section_5">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-5 col-12 mx-auto">
                            @if(session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if(session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <form class="custom-form contact-form bg-white shadow" action="{{ route('contact.form.submit') }}" method="post" role="form">
                                @csrf
                                <div class="text-center mb-5">
                                    <h2 class="mb-1">Join us today</h2>
                                </div>

                                <div class="contact-form">
                                    <div class="input-group mb-4">
                                        <input type="text" name="ebook-form-name" id="ebook-form-name" class="form-control" aria-label="ebook-form-name" aria-describedby="basic-addon1" placeholder="Your Name" required>

                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="custom-form-icon bi-person"></i>
                                        </span>
                                    </div>

                                    <div class="input-group mb-4">
                                        <input type="email" name="ebook-email" id="ebook-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="your@company.com" aria-label="ebook-form-email" aria-describedby="basic-addon2" required="">

                                        <span class="input-group-text" id="basic-addon2">
                                            <i class="custom-form-icon bi-envelope"></i>
                                        </span>
                                    </div>

                                    <div class="col-lg-8 col-md-10 col-8 mx-auto">
                                        <button type="submit" class="form-control">Sign up</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-lg-6 col-12">
                            <h6 class="mt-5">Reach out</h6>

                            <h2 class="mb-4">Contact</h2>

                            <p class="mb-3">
                                <i class="bi-geo-alt me-2"></i>
                                Lagos | England
                            </p>

                            <p class="mb-2">
                                <a href="tel: 010-020-0340" class="contact-link">
                                    +(44) 7934 511347 | UK  <br>
                                    +(234) 903 680 1011 | NG<br>
                                    +(234) 813 424 9115 | NG<br>
                                    +(234) 810 894 0057 | NG<br>
                                </a>
                            </p>

                            <p>
                                <a href="mailto:info@company.com" class="contact-link">
                                    info@triggerwritersclub.com
                                </a>
                            </p>

                            <h6 class="site-footer-title mt-5 mb-3">Social</h6>

                            <ul class="social-icon mb-4">
                                <li class="social-icon-item">
                                    <a href="https://www.instagram.com/triggerwritersclub/" class="social-icon-link bi-instagram"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="https://www.x.com/triggerwritersclub/" class="social-icon-link bi-twitter"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="https://www.facebook.com/triggerwritersclub/" class="social-icon-link bi-facebook"></a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link bi-whatsapp"></a>
                                </li>
                            </ul>

                            <p class="copyright-text">Copyright © 2025 Trigger Writers' Club. All rights reserved.
                            <br><br> <a rel="nofollow" href="https://tech.olaarowolo.com" target="_blank">Developed by OA MediaKraft</a> | <a rel="nofollow" href="https://templatemo.com" target="_blank"> inspired by templatemo</a> |</p>
                        </div>

                    </div>
                </div>
            </section>
        </main>

        <!-- JAVASCRIPT FILES -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('js/click-scroll.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>

    @if(session('success'))
    <script>
        window.onload = function() {
            alert("{{ session('success') }}");
            var contactSection = document.getElementById('section_5');
            if (contactSection) {
                contactSection.scrollIntoView({ behavior: 'smooth' });
            }
        };
    </script>
    @endif
    </body>
</html>
