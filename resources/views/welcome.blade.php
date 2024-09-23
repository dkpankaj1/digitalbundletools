<x-app-layouts>

    <section class="breadcrumb border-bottom p-0 d-block section-bg position-relative z-index-1">

        <div class="breadcrumb-two">
            <img src="{{ asset('assets/images/gradients/breadcrumb-gradient-bg.png') }}" alt=""
                class="bg--gradient">
            <div class="container container-two">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="breadcrumb-two-content">

                            <ul class="breadcrumb-list flx-align gap-2">
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <a href="{{ route('home') }}"
                                        class="breadcrumb-list__link text-body hover-text-main">Home</a>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <span class="breadcrumb-list__icon font-10"><i
                                            class="fas fa-chevron-right"></i></span>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <a href="#"
                                        class="breadcrumb-list__link text-body hover-text-main">Products</a>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <span class="breadcrumb-list__icon font-10"><i
                                            class="fas fa-chevron-right"></i></span>
                                </li>
                                <li class="breadcrumb-list__item font-14 text-body">
                                    <span class="breadcrumb-list__text">PHP Scripts and Applications</span>
                                </li>
                            </ul>

                            <h3 class="breadcrumb-two-content__title mb-3 text-capitalize">
                                Ultimate Business Solutions Mega Bundle: 450+ Manually Tested & Well-Documented Premium
                                PHP Scripts for Every Industry!</h3>

                            <div class="breadcrumb-content flx-align gap-3">
                                <div class="breadcrumb-content__item text-heading fw-500 flx-align gap-2">
                                    <span class="text">By <a href="#"
                                            class="link text-main fw-600">DigitalBundleTools</a> </span>
                                </div>
                                <div class="breadcrumb-content__item text-heading fw-500 flx-align gap-2">
                                    <span class="icon"><img src="assets/images/icons/cart-icon.svg"
                                            alt=""></span>
                                    <span class="text">158 sales</span>
                                </div>
                                <div class="breadcrumb-content__item text-heading fw-500 flx-align gap-2">
                                    <span class="icon"><img src="assets/images/icons/check-icon.svg"
                                            alt=""></span>
                                    <span class="text">Recently Updated</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ======================== Breadcrumb Two Section End ===================== -->

    <!-- ======================= Product Details Section Start ==================== -->
    <div class="product-details mt-32 padding-b-120">
        <div class="container container-two">
            <div class="row gy-4">
                <div class="col-12">

                    <div class="row mb-4 gap-4 gap-lg-0">
                        <div class="col-lg-8">
                            <div class="product-details__thumb">
                                <img src="{{ asset('assets/images/product/product.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!-- ======================= Product Sidebar Start ========================= -->
                            <div class="product-sidebar section-bg">

                                <span class="d-flex align-items-center gap-1 mb-2">
                                    <span class="star-rating">
                                        <span class="star-rating__item font-11"><i class="fas fa-star"></i></span>
                                        <span class="star-rating__item font-11"><i class="fas fa-star"></i></span>
                                        <span class="star-rating__item font-11"><i class="fas fa-star"></i></span>
                                        <span class="star-rating__item font-11"><i class="fas fa-star"></i></span>
                                        <span class="star-rating__item font-11"><i class="fas fa-star"></i></span>
                                    </span>
                                    <span class="star-rating__text text-body"> 5.0</span>
                                </span>


                                <ul class="sidebar-list">
                                    <li class="sidebar-list__item flx-align gap-2 font-14 fw-300 mb-2">
                                        <span class="icon"><img src="assets/images/icons/check-cirlce.svg"
                                                alt=""></span>
                                        <span class="text">Over 450+ Premium PHP Scripts</span>
                                    </li>
                                    <li class="sidebar-list__item flx-align gap-2 font-14 fw-300">
                                        <span class="icon"><img src="assets/images/icons/check-cirlce.svg"
                                                alt=""></span>
                                        <span class="text">Thoroughly Manually Tested for Quality</span>
                                    </li>
                                    <li class="sidebar-list__item flx-align gap-2 font-14 fw-300 mb-2">
                                        <span class="icon"><img src="assets/images/icons/check-cirlce.svg"
                                                alt=""></span>
                                        <span class="text">Access to All Future Tools and Updates</span>
                                    </li>
                                    <li class="sidebar-list__item flx-align gap-2 font-14 fw-300">
                                        <span class="icon"><img src="assets/images/icons/check-cirlce.svg"
                                                alt=""></span>
                                        <span class="text">Resale Rights Included</span>
                                    </li>
                                    <li class="sidebar-list__item flx-align gap-2 font-14 fw-300">
                                        <span class="icon"><img src="assets/images/icons/check-cirlce.svg"
                                                alt=""></span>
                                        <span class="text">Lifetime Access Guaranteed</span>
                                    </li>
                                    <li class="sidebar-list__item flx-align gap-2 font-14 fw-300">
                                        <span class="icon"><img src="assets/images/icons/check-cirlce.svg"
                                                alt=""></span>
                                        <span class="text">Instant Delivery via Email</span>
                                    </li>
                                </ul>

                                <div class="flx-between mt-3">
                                    <span class="product-card__author">
                                        <a href="#" class="link hover-text-decoration-underline">Price :
                                        </a>
                                    </span>
                                    <div class="flx-align gap-2">
                                        <h6 class="product-card__price mb-0">₹399.00</h6>
                                        <span
                                            class="product-card__prevPrice text-decoration-line-through">₹7,999.00</span>
                                    </div>
                                </div>
                                <hr>

                                <div class="d-flex w-100 justify-content-center mt-3">
                                    <div class="timer" id="timer"></div>
                                </div>
                                <a href="https://rzp.io/l/lwbSRI2pr7"
                                    class="btn btn-main d-flex w-100 justify-content-center align-items-center gap-2 pill px-sm-5 mt-24">
                                    <img src="assets/images/icons/add-to-cart.svg" alt="">
                                    Buy now!
                                </a>



                                <!-- Meta Attribute List Start -->
                                <ul class="meta-attribute">
                                    <li class="meta-attribute__item">
                                        <span class="name">Last Update</span>
                                        <span class="details">Sep 01, 2024</span>
                                    </li>
                                    <li class="meta-attribute__item">
                                        <span class="name">Category</span>
                                        <span class="details">Script</span>
                                    </li>
                                </ul>
                                <!-- Meta Attribute List End -->
                            </div>
                            <!-- ======================= Product Sidebar End ========================= -->
                        </div>

                    </div>

                    <br>

                    <section class="p-o border-bottom ">
                        <div class="container container-two">
                            <div class="breadcrumb-tab flx-wrap align-items-start gap-lg-4 gap-2">
                                <ul class="nav tab-bordered nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-product-details-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-product-details"
                                            type="button" role="tab" aria-controls="pills-product-details"
                                            aria-selected="true">Product Details</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-rating-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-rating" type="button" role="tab"
                                            aria-controls="pills-rating" aria-selected="false">
                                            <span class="d-flex align-items-center gap-1">
                                                <span class="star-rating">
                                                    <span class="star-rating__item font-11"><i
                                                            class="fas fa-star"></i></span>
                                                    <span class="star-rating__item font-11"><i
                                                            class="fas fa-star"></i></span>
                                                    <span class="star-rating__item font-11"><i
                                                            class="fas fa-star"></i></span>
                                                    <span class="star-rating__item font-11"><i
                                                            class="fas fa-star"></i></span>
                                                    <span class="star-rating__item font-11"><i
                                                            class="fas fa-star"></i></span>
                                                </span>
                                                <span class="star-rating__text text-body"> 5.0</span>
                                                <span class="star-rating__text text-body"> (180)</span>
                                            </span>
                                        </button>
                                    </li>
                                </ul>
                                <div class="social-share">
                                    <button type="button" class="social-share__button">
                                        <img src="assets/images/icons/share-icon.svg" alt="">
                                    </button>
                                    <div class="social-share__icons">
                                        <ul class="social-list colorful-style">
                                            <li class="social-list__item">
                                                <a href="https://www.facebook.com"
                                                    class="social-list__link text-body flex-center"><i
                                                        class="fab fa-facebook-f"></i></a>
                                            </li>
                                            <li class="social-list__item">
                                                <a href="https://www.twitter.com"
                                                    class="social-list__link text-body flex-center"> <i
                                                        class="fab fa-linkedin-in"></i></a>
                                            </li>
                                            <li class="social-list__item">
                                                <a href="https://www.google.com"
                                                    class="social-list__link text-body flex-center"> <i
                                                        class="fab fa-twitter"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <div class="tab-content mt-4" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-product-details" role="tabpanel"
                            aria-labelledby="pills-product-details-tab" tabindex="0">
                            <!-- Product Details Content Start -->
                            <div class="product-details">
                                <div class="product-details__item">
                                    <h5 class="product-details__title mb-1">Description:</h5>
                                    <p style="text-align: justify;" class="mb-3">
                                        This mega bundle includes 450+ high-quality, professionally developed PHP
                                        scripts and applications designed for various industries. Every script is
                                        manually tested for functionality, ensuring compatibility and performance across
                                        different platforms. Moreover, the entire collection is well-documented,
                                        providing clear and comprehensive instructions to assist with installation,
                                        customization, and usage. Whether you're looking to manage eCommerce, CRM, or
                                        other industry-specific solutions, this bundle offers the best tools for scaling
                                        your business.
                                    </p>

                                </div>

                                <div class="product-details__item">
                                    <h5 class="product-details__title mb-3">Projects Included:</h5>
                                    <ul>
                                        @foreach ($projects as $key => $project)
                                            <li>&#9989; &nbsp;{{ $project }}</li>
                                        @endforeach
                                    </ul>

                                    <p style="text-align: justify;" class="my-3">
                                        this bundle covers all your operational needs with easy-to-use,
                                        customizable,
                                        and scalable software. Perfect for startups, SMEs, and enterprises
                                        looking to
                                        automate tasks, streamline processes, and increase efficiency.
                                    </p>
                                </div>

                                <hr>

                                <div class="product-details__item  d-flex justify-content-center">

                                    <a href="https://rzp.io/l/lwbSRI2pr7"
                                        class="btn btn-main d-flex justify-content-center align-items-center gap-2 pill px-5 mt-32">
                                        <img src="assets/images/icons/add-to-cart.svg" alt="">
                                        Buy now
                                    </a>
                                </div>

                            </div>
                            <!-- Product Details Content End -->
                        </div>
                        <div class="tab-pane fade" id="pills-rating" role="tabpanel"
                            aria-labelledby="pills-rating-tab" tabindex="0">
                            <div class="product-review-wrapper">

                                @foreach ($testimonials as $testimonial)
                                    <div class="product-review">
                                        <div class="product-review__top flx-between">
                                            <div class="product-review__rating flx-align">
                                                <div class="d-flex align-items-center gap-1">
                                                    <ul class="star-rating">

                                                        @for ($i = 0; $i < $testimonial['rating']; $i++)
                                                            <li class="star-rating__item font-11"><i
                                                                    class="fas fa-star"></i></li>
                                                        @endfor

                                                    </ul>
                                                    <span class="star-rating__text text-body">
                                                        ({{ $testimonial['rating'] }})</span>
                                                </div>
                                                <span class="product-review__reason">For <span
                                                        class="product-review__subject">Customer Support</span> </span>
                                            </div>
                                            <div class="product-review__date">
                                                by <a href="#"
                                                    class="product-review__user text--base">{{ $testimonial['name'] }}</a>
                                                {{ $testimonial['date'] }}
                                            </div>
                                        </div>
                                        <div class="product-review__body">
                                            <p class="product-review__desc">{{ $testimonial['review'] }}</p>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Set the end time to 25 September 2024 at 00:00:00
            let endTime = new Date("2024-09-25T00:00:00").getTime();

            // Update the timer every 1 second
            let timerInterval = setInterval(function() {
                // Get the current time
                let now = new Date().getTime();

                // Find the remaining time
                let timeLeft = endTime - now;

                // Calculate hours, minutes, and seconds
                let hours = Math.floor((timeLeft / (1000 * 60 * 60)) % 24);
                let minutes = Math.floor((timeLeft / (1000 * 60)) % 60);
                let seconds = Math.floor((timeLeft / 1000) % 60);

                // Display the result in the timer div
                document.getElementById("timer").innerHTML = "Hurry up! " + hours + "h :" + minutes + "m :" + seconds +
                    "s ";

                // If the countdown is finished, display "Offer Ended"
                if (timeLeft < 0) {
                    clearInterval(timerInterval);
                    document.getElementById("timer").innerHTML = "Offer Ended";
                }
            }, 1000);
        </script>
    @endpush
</x-app-layouts>
