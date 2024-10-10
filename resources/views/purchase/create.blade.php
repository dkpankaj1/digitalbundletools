<x-app-layouts>
    {{-- https://rzp.io/l/TfUx10Ht --}}
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


    <section class="contact padding-t-60 padding-b-120 section-bg position-relative z-index-1 overflow-hidden">
        <div class="container ">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="card common-card p-sm-4">
                        <div class="card-body">

                            <form action="{{ route('purchase.store') }}" autocomplete="off" method="post">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-12">
                                        <label for="name"
                                            class="form-label mb-2 font-18 font-heading fw-600">Name</label>
                                        <input type="text" class="common-input common-input--grayBg border"
                                            placeholder="Your name here" name="name" value="{{old('name')}}">
                                        @error('name')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="name"
                                            class="form-label mb-2 font-18 font-heading fw-600">Email</label>
                                        <input type="text" class="common-input common-input--grayBg border"
                                            placeholder="Your name here" name="email" value="{{old('email')}}">
                                        @error('email')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <label for="name"
                                            class="form-label mb-2 font-18 font-heading fw-600">Phone</label>
                                        <input type="text" class="common-input common-input--grayBg border"
                                            placeholder="Your name here" name="phone" value="{{old('phone')}}">
                                        @error('phone')
                                            <div class="invalid-feedback d-block">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-12">

                                        <label class="image-radio d-flex align-items-center">
                                            <input type="radio" name="imageRadio" value="r-pay" checked>
                                            <img src="{{ asset('assets/images/rpay.png') }}" class="img-fluid border" alt="Option 3">
                                        </label>

                                    </div>

                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-main btn-lg pill w-100"> Pay Now</button>
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
