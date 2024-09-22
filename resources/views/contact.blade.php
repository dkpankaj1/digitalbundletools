<x-app-layouts>

    <section class="breadcrumb border-bottom p-0 d-block section-bg position-relative z-index-1">

        <div class="breadcrumb-two">
            <img src="assets/images/gradients/breadcrumb-gradient-bg.png" alt="" class="bg--gradient">
            <div class="container container-two">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="breadcrumb-two-content text-center">

                            <ul class="breadcrumb-list flx-align gap-2 mb-2 justify-content-center">
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <a href="index.html"
                                        class="breadcrumb-list__link text-body hover-text-main">Home</a>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <span class="breadcrumb-list__icon font-10"><i
                                            class="fas fa-chevron-right"></i></span>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <span class="breadcrumb-list__text">Contact</span>
                                </li>
                            </ul>

                            <h3 class="breadcrumb-two-content__title mb-0 text-capitalize">Contact Us</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact padding-t-120 padding-b-60 section-bg position-relative z-index-1 overflow-hidden">
        <img src="assets/images/gradients/banner-two-gradient.png" alt="" class="bg--gradient">
        <img src="assets/images/shapes/pattern-five.png" class="position-absolute end-0 top-0 z-index--1"
            alt="">

        <div class="container container-two">
            <div class="row gy-4">
                <div class="col-lg-5">
                    <div class="contact-info">
                        <h3 class="contact-info__title">Get in touch with us today</h3>
                        <p class="contact-info__desc">We're here to help! Whether you have questions, feedback, or need
                            assistance, our team is ready to listen. Don't hesitate to reach out through the form below,
                            and we'll get back to you as soon as possible. Your inquiries are important to us!</p>

                        <div class="contact-info__item-wrapper flx-between gap-4">
                            <div class="contact-info__item">
                                <span class="contact-info__text text-capitalize d-block mb-1">Give Us A Call</span>
                                <a href="tel:01812345678"
                                    class="contact-info__link font-24 fw-500 text-heading hover-text-main">01812345678</a>
                            </div>
                            <div class="contact-info__item">
                                <span class="contact-info__text text-capitalize d-block mb-1">Give Us An
                                    Email</span>
                                <a href="tel:dpmarket@gmail.com"
                                    class="contact-info__link font-24 fw-500 text-heading hover-text-main">dpmarket@gmail.com</a>
                            </div>
                        </div>

                        <div class="mt-24">
                            <ul class="social-list">
                                <li class="social-list__item">
                                    <a href="https://www.facebook.com"
                                        class="social-list__link text-heading flx-center"><i
                                            class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="social-list__item">
                                    <a href="https://www.twitter.com" class="social-list__link text-heading flx-center">
                                        <i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="social-list__item">
                                    <a href="https://www.linkedin.com"
                                        class="social-list__link text-heading flx-center"> <i
                                            class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li class="social-list__item">
                                    <a href="https://www.pinterest.com"
                                        class="social-list__link text-heading flx-center"> <i
                                            class="fab fa-pinterest-p"></i></a>
                                </li>
                                <li class="social-list__item">
                                    <a href="https://www.pinterest.com"
                                        class="social-list__link text-heading flx-center"> <i
                                            class="fab fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-7 ps-lg-5">
                    <div class="card common-card p-sm-4">
                        <div class="card-body">
                            @if (Session::has('statusSuccess'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('statusSuccess') }}
                                </div>
                            @endif

                            @if (Session::has('statusError'))
                                <div class="alert alert-danger" role="alert">
                                    {{ Session::get('statusError') }}
                                </div>
                            @endif
                            <form action="{{ route('contact.store') }}" autocomplete="off" method="post">
                                @csrf
                                @method('post')
                                <div class="row gy-4">
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="name" class="form-label mb-2 font-18 font-heading fw-600">Full
                                            Name</label>
                                        <input type="text" class="common-input common-input--grayBg border"
                                            id="name" placeholder="Your name here" name="name"
                                            value="{{ old('name') }}">
                                        @error('name')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 col-xs-6">
                                        <label for="email" class="form-label mb-2 font-18 font-heading fw-600">Your
                                            Mail</label>
                                        <input type="email" class="common-input common-input--grayBg border"
                                            id="email" placeholder="Your email here " name="email"
                                            value="{{ old('email') }}">
                                        @error('email')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="message" class="form-label mb-2 font-18 font-heading fw-600">Your
                                            Message</label>
                                        <textarea class="common-input common-input--grayBg border" id="message" name="message" value="{{ old('message') }}"
                                            placeholder="Write Your Message Here"></textarea>
                                        @error('message')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-main btn-lg pill w-100"> Submit Now
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-app-layouts>
