<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> Digital Bundle Tools | Over 450+ Premium PHP Scripts</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- line awesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <style>
        .timer {
            font-size: 1.5rem;
            font-weight: bold;
            color: #FF0000;
        }

        <style>.image-radio {
            cursor: pointer;
            margin: 10px;
        }

        .image-radio input[type="radio"] {
            margin-right: 10px;
            /* Space between radio button and image */
        }

        .image-radio img {
            border: 2px solid transparent;
            height: 100px;
            object-fit: cover;
            transition: border-color 0.3s;
        }

        .image-radio input[type="radio"]:checked+img {
            border-color: #007bff;
            /* Highlight color when selected */
        }
    </style>
    </style>

</head>

<body>

    <!--==================== Preloader Start ====================-->
    {{-- <div class="loader-mask">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--==================== Preloader End ====================--> --}}

    <!--==================== Overlay Start ====================-->
    {{-- <div class="overlay"></div> --}}
    <!--==================== Overlay End ====================-->

    <!--==================== Sidebar Overlay End ====================-->
    <div class="side-overlay"></div>
    <!--==================== Sidebar Overlay End ====================-->

    <!-- ==================== Scroll to Top End Here ==================== -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- ==================== Scroll to Top End Here ==================== -->

    <!-- ==================== Mobile Menu Start Here ==================== -->
    <div class="mobile-menu d-lg-none d-block">
        <button type="button" class="close-button"> <i class="las la-times"></i> </button>
        <div class="mobile-menu__inner">
            <a href="{{ route('home') }}" class="mobile-menu__logo">
                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo">
            </a>
            <div class="mobile-menu__menu">

                <ul class="nav-menu flx-align nav-menu--mobile">
                    <li class="nav-menu__item">
                        <a href="{{ route('home') }}" class="nav-menu__link">Home</a>
                    </li>

                    <li class="nav-menu__item">
                        <a href="{{ route('about') }}" class="nav-menu__link">About</a>
                    </li>

                    <li class="nav-menu__item">
                        <a href="{{ route('contact.create') }}" class="nav-menu__link">Contact</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <!-- ==================== Mobile Menu End Here ==================== -->

    <!-- ==================== Header Start Here ==================== -->
    <header class="header">
        <div class="container container-full">
            <nav class="header-inner flx-between">
                <!-- Logo Start -->
                <div class="logo">
                    <a href="{{ route('home') }}" class="link">
                        <img src="{{ asset('assets/images/logo/logo.png') }}" alt="Logo">
                    </a>
                </div>
                <!-- Logo End  -->

                <!-- Menu Start  -->
                <div class="header-menu d-lg-block d-none">

                    <ul class="nav-menu flx-align ">
                        <li class="nav-menu__item">
                            <a href="{{ route('home') }}" class="nav-menu__link">Home</a>
                        </li>

                        <li class="nav-menu__item">
                            <a href="{{ route('about') }}" class="nav-menu__link">About</a>
                        </li>

                        <li class="nav-menu__item">
                            <a href="{{ route('contact.create') }}" class="nav-menu__link">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- Menu End  -->

                <!-- Header Right start -->
                <div class="header-right flx-align">
                    <button type="button" class="toggle-mobileMenu d-lg-none"> <i class="las la-bars"></i> </button>
                </div>
                <!-- Header Right End  -->
            </nav>
        </div>
    </header>
    <!-- ==================== Header End Here ==================== -->

    {{ $slot }}

    <!-- ==================== Footer Start Here ==================== -->
    <footer class="footer ">
        <img src="{{asset('assets/images/shapes/pattern.png')}}" alt="" class="bg-pattern">
        <img src="{{asset('assets/images/shapes/element1.png')}}" alt="" class="element one">
        <img src="{{asset('assets/images/shapes/element2.png')}}" alt="" class="element two">
        <img src="{{asset('assets/images/gradients/footer-gradient.png')}}" alt="" class="bg--gradient">

        <div class="container container-two">
            <div class="row gy-5 gap-1">
                <div class="col-lg-5 col-sm-12">
                    <div class="footer-item">
                        <div class="footer-item__logo">
                            <a href="{{ route('home') }}"> <img src="{{asset('assets/images/logo/white-logo.png')}}"
                                    alt=""></a>
                        </div>
                        <p class="footer-item__desc" style="text-align: justify">Welcome to DigitalBundleTools, where
                            innovation meets efficiency!
                            We are dedicated to providing comprehensive software solutions designed to empower
                            businesses of all sizes. Our mission is to simplify the complexities of digital management
                            and offer tools that foster growth and streamline operations.</p>
                        <div class="footer-item__social">
                            <ul class="social-list">
                                <li class="social-list__item">
                                    <a href="https://www.facebook.com/profile.php?id=61565824366564"
                                        class="social-list__link flx-center" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="social-list__item">
                                    <a href="https://www.instagram.com/digitalbundletools/"
                                        class="social-list__link flx-center" target="_blank"> <i
                                            class="fab fa-instagram"></i></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="footer-item">
                        <h5 class="footer-item__title">Useful Link</h5>
                        <ul class="footer-menu">
                            <li class="footer-menu__item"><a href="{{ route('home') }}"
                                    class="footer-menu__link">Home
                                </a></li>
                            <li class="footer-menu__item"><a href="{{ route('about') }}"
                                    class="footer-menu__link">About</a></li>
                            <li class="footer-menu__item"><a href="{{ route('contact.create') }}"
                                    class="footer-menu__link">Contact Us
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="footer-item">
                        <h5 class="footer-item__title">Subscribe</h5>
                        <p class="footer-item__desc">Subscribe our newsletter to get updated the latest news</p>
                        @if (Session::has('sub_email_statusSuccess'))
                            <div class="alert alert-success my-1" role="alert">
                                {{ Session::get('sub_email_statusSuccess') }}
                            </div>
                        @endif

                        @if (Session::has('sub_email_statusError'))
                            <div class="alert alert-danger my-1" role="alert">
                                {{ Session::get('sub_email_statusError') }}
                            </div>
                        @endif
                        <form action="{{ route('subscription.store') }}" method="post"
                            class="mt-4 subscribe-box d-flex align-items-center flex-column gap-2">
                            @csrf
                            <input type="email" class="form-control common-input pill text-white"
                                placeholder="Enter Mail" name="sub_email" value="{{ old('sub_email') }}">
                            @error('sub_email')
                                <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="btn btn-main btn-lg w-100 pill">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- bottom Footer -->
    <div class="bottom-footer">
        <div class="container container-two">
            <div class="bottom-footer__inner flx-between gap-3">
                <p class="bottom-footer__text font-14">Manage BY : Dipankar Kumar Pankaj.</p>
                <p class="bottom-footer__text font-14"> Copyright &copy; 2024 DigitalBundleTools, All rights reserved.</p>
                <div class="footer-links">
                    <a href="{{ route('term-condition') }}" class="footer-link font-14">Terms of service</a>
                    <a href="{{ route('privacy-policy') }}" class="footer-link font-14">Privacy Policy</a>
                    <a href="{{ route('refund-policy') }}" class="footer-link font-14">Cancellation/Refund Policy</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ==================== Footer End Here ==================== -->


    <!-- Jquery js -->
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="{{ asset('assets/js/boostrap.bundle.min.js') }}"></script>
    <!-- CountDown -->
    <script src="{{ asset('assets/js/countdown.js') }}"></script>
    <!-- counter up -->
    <script src="{{ asset('assets/js/counterup.min.js') }}"></script>
    <!-- Slick js -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    {{-- custome script::begin --}}
    @stack('scripts')
    {{-- custome script::end --}}

</body>

</html>
