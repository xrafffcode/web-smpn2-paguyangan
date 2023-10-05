<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $attributes->get('title') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset($webConfig->logo) }}">

    <!-- CSS here  -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frotnend/assets/css/font-awesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/elegent-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
    <!-- css end  here-->
</head>

<body>



    <!-- back to top start -->
    <button class="tp-backtotop">
        <span><i class="fal fa-angle-double-up"></i></span>
    </button>
    <!-- back to top end -->


    <!-- header area start -->
    <header>
        <div class="tp-header__area tp-header__transparent">
            <div class="tp-header__main" id="header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-6">
                            <div class="logo has-border">
                                <a href="index.html">
                                    <img src="assets/img/logo/white-logo.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-7 d-none d-lg-block">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="has-dropdown">
                                            <a href="index.html">Home</a>
                                            <ul class="submenu">
                                                <li><a href="index.html">Home Style 1</a></li>
                                                <li><a href="index-2.html">Home Style 2</a></li>
                                                <li><a href="index-3.html">Home Style 3</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="about-us.html">About</a>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="course.html">Courses</a>
                                            <ul class="submenu">
                                                <li><a href="course-list.html">Courses List</a></li>
                                                <li><a href="course.html">Courses Grid</a></li>
                                                <li><a href="course-details.html">Course Details</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="event.html">Events</a></li>
                                                <li><a href="event-details.html">Event Details</a></li>
                                                <li><a href="instructor.html">Instructor V1</a></li>
                                                <li><a href="instructor-2.html">Instructor V2</a></li>
                                                <li><a href="instructor-details.html">Instructor Details</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="sign-in.html">Sign In</a></li>
                                                <li><a href="sign-up.html">Sign Up</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                                <li><a href="404.html">404</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-dropdown">
                                            <a href="blog.html">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-6 col-6">
                            <div class="tp-header__main-right d-flex justify-content-end align-items-center pl-30">
                                <div class="header-acttion-btns d-flex align-items-center d-none d-md-flex">
                                    <a href="tel:+(443)003030266" class="tp-phone-btn d-none d-xl-block"><i
                                            class="fa-thin fa-phone"></i>+(443)00
                                        303 0266 <span></span></a>
                                    <a href="contact.html" class="tp-btn br-0">
                                        <span>Book a Visit <i class="fa-regular fa-arrow-right"></i> </span>
                                        <div class="transition"></div>
                                    </a>
                                </div>
                                <div class="tp-header__hamburger ml-50 d-lg-none">
                                    <button class="hamburger-btn offcanvas-open-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->

    <!-- offcanvas area start -->
    <div class="offcanvas__area">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__close text-end">
                    <button class="offcanvas__close-btn offcanvas-close-btn">
                        <i class="fal fa-times"></i>
                    </button>
                </div>
                <div class="offcanvas__top mb-40">
                    <div class="offcanvas__subtitle">
                        <span class="text-white d-inline-block mb-25 d-none d-lg-block">ELEVATE YOUR BUSINESS
                            WITH</span>
                    </div>
                    <div class="offcanvas__logo mb-40">
                        <a href="index.html">
                            <img src="assets/img/logo/logo.png" alt="logo">
                        </a>
                    </div>
                    <div class="offcanvas-info d-none d-lg-block">
                        <p>Limitless customization options & Elementor compatibility let anyone create a beautiful
                            website
                            with Valiance. </p>
                    </div>
                    <div class="offcanvas__btn d-none d-lg-block">
                        <a href="contact.html" class="tp-btn">Contact us <span></span></a>
                    </div>
                </div>
                <div class="mobile-menu fix mb-40"></div>


                <div class="offcamvas__bottom">
                    <div class="offcanvas__cta mt-30 mb-20">
                        <h3 class="offcanvas__cta-title">Contact info</h3>
                        <span>27 Division St, New York,</span>
                        <span>+154 4808 84082 4830</span>
                        <span>support@noxia.com</span>
                        <span>Office Hours: 8AM - 5PM</span>
                        <span>Sunday - Wekend Day</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="body-overlay"></div>
    <!-- offcanvas area end -->

    <main>

        <!-- hero section  -->
        <div class="tp-hero__section pt-130 theme-bg p-relative fix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="tp-hero__content pt-200">
                            <span class="tp-hero__subtitle text-white mb-10">Education Goal</span>
                            <h3 class="tp-hero__title text-white mb-15">Free online courses
                                from the experts.</h3>
                            <p class="text-white mb-45">Presenting Academy, the tech school of the future.</p>
                            <div class="tp-hero__btn-wrappper d-md-flex align-items-center">
                                <div class="hero-btn-1 mr-20 p-relative z-index-1">
                                    <a href="course.html" class="tp-btn br-0">
                                        <span>Explore Coureses</span>
                                        <div class="transition"></div>
                                    </a>
                                </div>
                                <div class="hero-btn-2">
                                    <a href="https://www.youtube.com/watch?v=vQD4YAgc7PE"
                                        class="tp-play-btn d-flex align-items-center popup-video">

                                        <i class="arrow_triangle-right"></i>
                                        <span>Watch it Now</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="tp-hero__img">
                            <img src="assets/img/hero/hero-img-1.png" alt="hero">
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-hero__shapes">
                <div class="tp-hero__shapes-1">
                    <img src="assets/img/icons/book-shape.png" alt="">
                </div>
                <div class="tp-hero__shapes-2">
                    <img src="assets/img/icons/circle-shape.png" alt="">
                </div>
                <div class="tp-hero__shapes-3">
                    <img src="assets/img/icons/dots-shapes.png" alt="">
                </div>
                <div class="tp-hero__shapes-4">
                    <img src="assets/img/icons/line-shape.png" alt="">
                </div>
                <div class="tp-hero__shapes-5">
                    <img src="assets/img/icons/lines-shape.png" alt="">
                </div>
                <div class="tp-hero__shapes-6">
                    <img src="assets/img/icons/role-shape.png" alt="">
                </div>
            </div>
        </div>
        <!-- hero section end  -->


        <!-- brnad section start  -->
        <div class="tp-brand__section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="tp-brand__box white-bg pt-40">
                            <div class="row">
                                <div class="col-xl-4 col-md-6">
                                    <h3>Tutorgo</h3>
                                    <p>Join over 1490+ partners around the world</p>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <span>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fal fa-star"></i>
                                    </span>
                                    <p>4.5 Star Rating (20+ Review)</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="tp-brand_slider">
                                        <div class="tp-brand__item">
                                            <img src="assets/img/brand/brand-1.png" alt="">
                                        </div>
                                        <div class="tp-brand__item">
                                            <img src="assets/img/brand/brand-2.png" alt="">
                                        </div>
                                        <div class="tp-brand__item">
                                            <img src="assets/img/brand/brand-3.png" alt="">
                                        </div>
                                        <div class="tp-brand__item">
                                            <img src="assets/img/brand/brand-4.png" alt="">
                                        </div>
                                        <div class="tp-brand__item">
                                            <img src="assets/img/brand/brand-5.png" alt="">
                                        </div>
                                        <div class="tp-brand__item">
                                            <img src="assets/img/brand/brand-6.png" alt="">
                                        </div>
                                        <div class="tp-brand__item">
                                            <img src="assets/img/brand/brand-2.png" alt="">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brnad section end  -->

        <!-- service area start  -->
        <div class="tp-feature__section pt-120 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tp-section__title-wrapper text-center mb-40">
                            <h3 class="tp-section__title">Popular Topic, Which are Most <br> Favourite To Students</h3>
                        </div>
                    </div>
                </div>
                <div class="row gx-70">
                    <div class="col-lg-3 col-md-4">
                        <div class="tp-feature__item before-color-1 mb-30">
                            <div class="tp-feature__icon">
                                <img src="assets/img/icons/design-icon.png" alt="">
                            </div>
                            <h3 class="tp-feature__title"><a href="course.html">Design</a></h3>
                            <p>400+ Course</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="tp-feature__item before-color-2 mb-40">
                            <div class="tp-feature__icon">
                                <img src="assets/img/icons/man-cions.png" alt="">
                            </div>
                            <h3 class="tp-feature__title"><a href="course.html">Management</a> </h3>
                            <p>400+ Course</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="tp-feature__item before-color-3 mb-40">
                            <div class="tp-feature__icon">
                                <img src="assets/img/icons/code-cions.png" alt="">
                            </div>
                            <h3 class="tp-feature__title"><a href="course.html">Programming</a></h3>
                            <p>400+ Course</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="tp-feature__item before-color-4 mb-40">
                            <div class="tp-feature__icon">
                                <img src="assets/img/icons/bag-icon.png" alt="">
                            </div>
                            <h3 class="tp-feature__title"><a href="course.html">Business</a></h3>
                            <p>400+ Course</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="tp-feature__item before-color-5 mb-40">
                            <div class="tp-feature__icon">
                                <img src="assets/img/icons/music-icons.png" alt="">
                            </div>
                            <h3 class="tp-feature__title"><a href="course.html"> Audio + Music</a></h3>
                            <p>400+ Course</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="tp-feature__item before-color-6 mb-40">
                            <div class="tp-feature__icon">
                                <img src="assets/img/icons/doller-icon.png" alt="">
                            </div>
                            <h3 class="tp-feature__title"><a href="course.html">Finance</a></h3>
                            <p>400+ Course</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="tp-feature__item before-color-7 mb-40">
                            <div class="tp-feature__icon">
                                <img src="assets/img/icons/cal-icon.png" alt="">
                            </div>
                            <h3 class="tp-feature__title"><a href="course.html">Accounting</a> </h3>
                            <p>400+ Course</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="tp-feature__item before-color-8 mb-40">
                            <div class="tp-feature__icon">
                                <img src="assets/img/icons/pen-icon.png" alt="">
                            </div>
                            <h3 class="tp-feature__title"><a href="course.html">Content Writing</a></h3>
                            <p>400+ Course</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service area end  -->

        <!-- about section  start -->
        <div class="tp-about__section pt-120 pb-90">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="tp-about__img-wrapper d-md-flex p-relative">
                            <div class="tp-about__img-large w-img mb-30">
                                <img src="assets/img/about/about-1.jpg" alt="">
                            </div>
                            <div class="tp-about__img-sm w-img mb-30">
                                <img src="assets/img/about/about-2.jpg" alt="">
                            </div>

                            <div class="tp-about-shapes">
                                <div class="tp-about__shapes-1">
                                    <img src="assets/img/icons/about-shapes.png" alt="">
                                    <div class="tp-about__shapes-2 ">
                                        <img src="assets/img/icons/ring-shape.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="tp-section__title-wrapper">
                            <h3 class="tp-section__title mb-15">Benefit From Our <br>
                                Online Learning Experties
                                Earn professional.</h3>
                            <p class="mb-40">Lorem ipsum dolor sit amet, consectetur aliqua adipiscing
                                elit, sed do eiumod tempor.</p>

                            <div class="tp-about__feature-list mb-40">
                                <ul>
                                    <li><span><i class="icon_check"></i></span>Upskill your organization.</li>
                                    <li><span><i class="icon_check"></i></span>Access more then 100K online courses
                                    </li>
                                    <li><span><i class="icon_check"></i></span>Access more then 1M online Video</li>
                                </ul>
                            </div>
                            <div class="tp-hero__btn-wrappper">
                                <a href="about-us.html" class="tp-border-btn br-0">
                                    <span>Get Started</span>
                                    <div class="transition"></div>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- about section end  -->

        <!-- course start  -->
        <div class="tp-courses__section grey-bg-2 pt-120 pb-90">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="tp-section__title-wrapper mb-40">
                            <h3 class="tp-section__title mb-15">Our Popular Courses.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur aliqua adipiscing
                                elit, sed do eiumod tempor.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tp-courses__buttons d-flex justify-content-lg-end mb-60">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-all-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-all" type="button" role="tab"
                                        aria-controls="pills-all" aria-selected="true">All</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-design-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-design" type="button" role="tab"
                                        aria-controls="pills-design" aria-selected="false">Popularity</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-popularity-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-popularity" type="button" role="tab"
                                        aria-controls="pills-popularity" aria-selected="false">Design</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-featured-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-featured" type="button" role="tab"
                                        aria-controls="pills-featured" aria-selected="false">Featured</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tp-courses__tab-content">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-all" role="tabpanel"
                            aria-labelledby="pills-all-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="tp-courses__item mb-30">
                                        <div class="tp-courses__thumb w-img fix p-relative">
                                            <img src="assets/img/courses/courses-2.jpg" alt="">
                                            <span class="tp-courses__cat cat-color-2"><a
                                                    href="#">Development</a></span>
                                        </div>
                                        <div class="tp-courses__content">
                                            <div class="tp-courses__meta">
                                                <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5
                                                    (100)</span>
                                                <span><i class="icon_heart_alt"></i>1800</span>
                                                <span><i class="fa-light fa-user"></i>325</span>
                                            </div>
                                            <h3 class="tp-courses__title"><a href="course-details.html">Everything You
                                                    Need to Know
                                                    About Business.</a></h3>
                                            <div class="tp-courses__avata">
                                                <img src="assets/img/courses/avata/course-avata-2.jpg" alt="">
                                                <span><a href="#">David Bruse</a></span>
                                            </div>
                                            <div class="tp-courses__price d-flex justify-content-between">
                                                <div class="tp-courses__time">
                                                    <span><i class="fa-light fa-clock"></i>16 Week</span>
                                                </div>
                                                <div class="tp-courses__value">
                                                    <span>$49.65</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="tp-courses__item mb-30">
                                        <div class="tp-courses__thumb w-img fix p-relative">
                                            <img src="assets/img/courses/courses-1.jpg" alt="">
                                            <span class="tp-courses__cat cat-color-1"><a href="#">Web
                                                    Design</a></span>
                                        </div>
                                        <div class="tp-courses__content">
                                            <div class="tp-courses__meta">
                                                <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5
                                                    (110)</span>
                                                <span><i class="icon_heart_alt"></i>1200</span>
                                                <span><i class="fa-light fa-user"></i>155</span>
                                            </div>
                                            <h3 class="tp-courses__title"><a href="course-details.html">The Most
                                                    Complete Design-
                                                    Thinking Course</a></h3>
                                            <div class="tp-courses__avata">
                                                <img src="assets/img/courses/avata/course-avata-1.jpg" alt="">
                                                <span><a href="#">Jennifer Powell</a></span>
                                            </div>
                                            <div class="tp-courses__price d-flex justify-content-between">
                                                <div class="tp-courses__time">
                                                    <span><i class="fa-light fa-clock"></i>7 Week</span>
                                                </div>
                                                <div class="tp-courses__value">
                                                    <span>$39.65</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="tp-courses__item mb-30">
                                        <div class="tp-courses__thumb w-img fix p-relative">
                                            <img src="assets/img/courses/courses-4.jpg" alt="">
                                            <span class="tp-courses__cat cat-color-4"><a href="#">Art &
                                                    Design</a></span>
                                        </div>
                                        <div class="tp-courses__content">
                                            <div class="tp-courses__meta">
                                                <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (60)</span>
                                                <span><i class="icon_heart_alt"></i>400</span>
                                                <span><i class="fa-light fa-user"></i>135</span>
                                            </div>
                                            <h3 class="tp-courses__title"><a href="course-details.html">AWS Certified
                                                    Solutions Architect
                                                    Associate.</a></h3>
                                            <div class="tp-courses__avata">
                                                <img src="assets/img/courses/avata/course-avata-4.jpg" alt="">
                                                <span><a href="#">Peter Sidle</a></span>
                                            </div>
                                            <div class="tp-courses__price d-flex justify-content-between">
                                                <div class="tp-courses__time">
                                                    <span><i class="fa-light fa-clock"></i>14 Week</span>
                                                </div>
                                                <div class="tp-courses__value">
                                                    <span>Free</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="tp-courses__item mb-30">
                                        <div class="tp-courses__thumb w-img fix p-relative">
                                            <img src="assets/img/courses/courses-3.jpg" alt="">
                                            <span class="tp-courses__cat cat-color-3"><a
                                                    href="#">Mechanical</a></span>
                                        </div>
                                        <div class="tp-courses__content">
                                            <div class="tp-courses__meta">
                                                <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (88)</span>
                                                <span><i class="icon_heart_alt"></i>200</span>
                                                <span><i class="fa-light fa-user"></i>165</span>
                                            </div>
                                            <h3 class="tp-courses__title"><a href="course-details.html">Statistics
                                                    Data Scince and
                                                    Business Analysis</a></h3>
                                            <div class="tp-courses__avata">
                                                <img src="assets/img/courses/avata/course-avata-3.jpg" alt="">
                                                <span><a href="#">Natasha Pawel</a></span>
                                            </div>
                                            <div class="tp-courses__price d-flex justify-content-between">
                                                <div class="tp-courses__time">
                                                    <span><i class="fa-light fa-clock"></i>10 Week</span>
                                                </div>
                                                <div class="tp-courses__value">
                                                    <span>$69.65</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="tp-courses__item mb-30">
                                        <div class="tp-courses__thumb w-img fix p-relative">
                                            <img src="assets/img/courses/courses-5.jpg" alt="">
                                            <span class="tp-courses__cat cat-color-5"><a
                                                    href="#">Marketing</a></span>
                                        </div>
                                        <div class="tp-courses__content">
                                            <div class="tp-courses__meta">
                                                <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5
                                                    (100)</span>
                                                <span><i class="icon_heart_alt"></i>800</span>
                                                <span><i class="fa-light fa-user"></i>365</span>
                                            </div>
                                            <h3 class="tp-courses__title"><a href="course-details.html">Learn
                                                    Essentials of User Interface
                                                    Design in Figma.</a></h3>
                                            <div class="tp-courses__avata">
                                                <img src="assets/img/courses/avata/course-avata-5.jpg" alt="">
                                                <span><a href="#">Mary Vaun</a></span>
                                            </div>
                                            <div class="tp-courses__price d-flex justify-content-between">
                                                <div class="tp-courses__time">
                                                    <span><i class="fa-light fa-clock"></i>16 Week</span>
                                                </div>
                                                <div class="tp-courses__value">
                                                    <span>Free</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4 col-md-6">
                                    <div class="tp-courses__item mb-30">
                                        <div class="tp-courses__thumb w-img fix p-relative">
                                            <img src="assets/img/courses/courses-6.jpg" alt="">
                                            <span class="tp-courses__cat cat-color-6"><a href="#">Audio &
                                                    Music</a></span>
                                        </div>
                                        <div class="tp-courses__content">
                                            <div class="tp-courses__meta">
                                                <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5
                                                    (100)</span>
                                                <span><i class="icon_heart_alt"></i>18,400</span>
                                                <span><i class="fa-light fa-user"></i>365</span>
                                            </div>
                                            <h3 class="tp-courses__title"><a href="course-details.html">Become a UI/UX
                                                    Designer
                                                    Everything You need</a></h3>
                                            <div class="tp-courses__avata">
                                                <img src="assets/img/courses/avata/course-avata-6.jpg" alt="">
                                                <span><a href="#">Auston Ager</a></span>
                                            </div>
                                            <div class="tp-courses__price d-flex justify-content-between">
                                                <div class="tp-courses__time">
                                                    <span><i class="fa-light fa-clock"></i>10 Week</span>
                                                </div>
                                                <div class="tp-courses__value">
                                                    <span>$59.65</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-design" role="tabpanel"
                            aria-labelledby="pills-design-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="tp-courses__item mb-30">
                                        <div class="tp-courses__thumb w-img fix p-relative">
                                            <img src="assets/img/courses/courses-4.jpg" alt="">
                                            <span class="tp-courses__cat cat-color-4"><a href="#">Art &
                                                    Design</a></span>
                                        </div>
                                        <div class="tp-courses__content">
                                            <div class="tp-courses__meta">
                                                <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (60)</span>
                                                <span><i class="icon_heart_alt"></i>400</span>
                                                <span><i class="fa-light fa-user"></i>135</span>
                                            </div>
                                            <h3 class="tp-courses__title"><a href="course-details.html">AWS Certified
                                                    Solutions Architect
                                                    Associate.</a></h3>
                                            <div class="tp-courses__avata">
                                                <img src="assets/img/courses/avata/course-avata-4.jpg" alt="">
                                                <span><a href="#">Peter Sidle</a></span>
                                            </div>
                                            <div class="tp-courses__price d-flex justify-content-between">
                                                <div class="tp-courses__time">
                                                    <span><i class="fa-light fa-clock"></i>14 Week</span>
                                                </div>
                                                <div class="tp-courses__value">
                                                    <span>Free</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="tp-courses__item mb-30">
                                        <div class="tp-courses__thumb w-img fix p-relative">
                                            <img src="assets/img/courses/courses-5.jpg" alt="">
                                            <span class="tp-courses__cat cat-color-5"><a
                                                    href="#">Marketing</a></span>
                                        </div>
                                        <div class="tp-courses__content">
                                            <div class="tp-courses__meta">
                                                <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5
                                                    (100)</span>
                                                <span><i class="icon_heart_alt"></i>800</span>
                                                <span><i class="fa-light fa-user"></i>365</span>
                                            </div>
                                            <h3 class="tp-courses__title"><a href="course-details.html">Learn
                                                    Essentials of User Interface
                                                    Design in Figma.</a></h3>
                                            <div class="tp-courses__avata">
                                                <img src="assets/img/courses/avata/course-avata-5.jpg" alt="">
                                                <span><a href="#">Mary Vaun</a></span>
                                            </div>
                                            <div class="tp-courses__price d-flex justify-content-between">
                                                <div class="tp-courses__time">
                                                    <span><i class="fa-light fa-clock"></i>16 Week</span>
                                                </div>
                                                <div class="tp-courses__value">
                                                    <span>Free</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="tp-courses__item mb-30">
                                        <div class="tp-courses__thumb w-img fix p-relative">
                                            <img src="assets/img/courses/courses-3.jpg" alt="">
                                            <span class="tp-courses__cat cat-color-3"><a
                                                    href="#">Mechanical</a></span>
                                        </div>
                                        <div class="tp-courses__content">
                                            <div class="tp-courses__meta">
                                                <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (88)</span>
                                                <span><i class="icon_heart_alt"></i>200</span>
                                                <span><i class="fa-light fa-user"></i>165</span>
                                            </div>
                                            <h3 class="tp-courses__title"><a href="course-details.html">Statistics
                                                    Data Scince and
                                                    Business Analysis</a></h3>
                                            <div class="tp-courses__avata">
                                                <img src="assets/img/courses/avata/course-avata-3.jpg" alt="">
                                                <span><a href="#">Natasha Pawel</a></span>
                                            </div>
                                            <div class="tp-courses__price d-flex justify-content-between">
                                                <div class="tp-courses__time">
                                                    <span><i class="fa-light fa-clock"></i>10 Week</span>
                                                </div>
                                                <div class="tp-courses__value">
                                                    <span>$69.65</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="tp-courses__item mb-30">
                                        <div class="tp-courses__thumb w-img fix p-relative">
                                            <img src="assets/img/courses/courses-2.jpg" alt="">
                                            <span class="tp-courses__cat cat-color-2"><a
                                                    href="#">Development</a></span>
                                        </div>
                                        <div class="tp-courses__content">
                                            <div class="tp-courses__meta">
                                                <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5
                                                    (100)</span>
                                                <span><i class="icon_heart_alt"></i>1800</span>
                                                <span><i class="fa-light fa-user"></i>325</span>
                                            </div>
                                            <h3 class="tp-courses__title"><a href="course-details.html">Everything You
                                                    Need to Know
                                                    About Business.</a></h3>
                                            <div class="tp-courses__avata">
                                                <img src="assets/img/courses/avata/course-avata-2.jpg" alt="">
                                                <span><a href="#">David Bruse</a></span>
                                            </div>
                                            <div class="tp-courses__price d-flex justify-content-between">
                                                <div class="tp-courses__time">
                                                    <span><i class="fa-light fa-clock"></i>16 Week</span>
                                                </div>
                                                <div class="tp-courses__value">
                                                    <span>$49.65</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="tp-courses__item mb-30">
                                        <div class="tp-courses__thumb w-img fix p-relative">
                                            <img src="assets/img/courses/courses-1.jpg" alt="">
                                            <span class="tp-courses__cat cat-color-1"><a href="#">Web
                                                    Design</a></span>
                                        </div>
                                        <div class="tp-courses__content">
                                            <div class="tp-courses__meta">
                                                <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5
                                                    (110)</span>
                                                <span><i class="icon_heart_alt"></i>1200</span>
                                                <span><i class="fa-light fa-user"></i>155</span>
                                            </div>
                                            <h3 class="tp-courses__title"><a href="course-details.html">The Most
                                                    Complete Design-
                                                    Thinking Course</a></h3>
                                            <div class="tp-courses__avata">
                                                <img src="assets/img/courses/avata/course-avata-1.jpg" alt="">
                                                <span><a href="#">Jennifer Powell</a></span>
                                            </div>
                                            <div class="tp-courses__price d-flex justify-content-between">
                                                <div class="tp-courses__time">
                                                    <span><i class="fa-light fa-clock"></i>7 Week</span>
                                                </div>
                                                <div class="tp-courses__value">
                                                    <span>$39.65</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="tp-courses__item mb-30">
                                        <div class="tp-courses__thumb w-img fix p-relative">
                                            <img src="assets/img/courses/courses-6.jpg" alt="">
                                            <span class="tp-courses__cat cat-color-6"><a href="#">Audio &
                                                    Music</a></span>
                                        </div>
                                        <div class="tp-courses__content">
                                            <div class="tp-courses__meta">
                                                <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5
                                                    (100)</span>
                                                <span><i class="icon_heart_alt"></i>18,400</span>
                                                <span><i class="fa-light fa-user"></i>365</span>
                                            </div>
                                            <h3 class="tp-courses__title"><a href="course-details.html">Become a UI/UX
                                                    Designer
                                                    Everything You need</a></h3>
                                            <div class="tp-courses__avata">
                                                <img src="assets/img/courses/avata/course-avata-6.jpg" alt="">
                                                <span><a href="#">Auston Ager</a></span>
                                            </div>
                                            <div class="tp-courses__price d-flex justify-content-between">
                                                <div class="tp-courses__time">
                                                    <span><i class="fa-light fa-clock"></i>10 Week</span>
                                                </div>
                                                <div class="tp-courses__value">
                                                    <span>$59.65</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-popularity" role="tabpanel"
                            aria-labelledby="pills-popularity-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="tp-courses__item mb-30">
                                        <div class="tp-courses__thumb w-img fix p-relative">
                                            <img src="assets/img/courses/courses-1.jpg" alt="">
                                            <span class="tp-courses__cat cat-color-1"><a href="#">Web
                                                    Design</a></span>
                                        </div>
                                        <div class="tp-courses__content">
                                            <div class="tp-courses__meta">
                                                <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5
                                                    (110)</span>
                                                <span><i class="icon_heart_alt"></i>1200</span>
                                                <span><i class="fa-light fa-user"></i>155</span>
                                            </div>
                                            <h3 class="tp-courses__title"><a href="course-details.html">The Most
                                                    Complete Design-
                                                    Thinking Course</a></h3>
                                            <div class="tp-courses__avata">
                                                <img src="assets/img/courses/avata/course-avata-1.jpg" alt="">
                                                <span><a href="#">Jennifer Powell</a></span>
                                            </div>
                                            <div class="tp-courses__price d-flex justify-content-between">
                                                <div class="tp-courses__time">
                                                    <span><i class="fa-light fa-clock"></i>7 Week</span>
                                                </div>
                                                <div class="tp-courses__value">
                                                    <span>$39.65</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="tp-courses__item mb-30">
                                        <div class="tp-courses__thumb w-img fix p-relative">
                                            <img src="assets/img/courses/courses-2.jpg" alt="">
                                            <span class="tp-courses__cat cat-color-2"><a
                                                    href="#">Development</a></span>
                                        </div>
                                        <div class="tp-courses__content">
                                            <div class="tp-courses__meta">
                                                <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5
                                                    (100)</span>
                                                <span><i class="icon_heart_alt"></i>1800</span>
                                                <span><i class="fa-light fa-user"></i>325</span>
                                            </div>
                                            <h3 class="tp-courses__title"><a href="course-details.html">Everything You
                                                    Need to Know
                                                    About Business.</a></h3>
                                            <div class="tp-courses__avata">
                                                <img src="assets/img/courses/avata/course-avata-2.jpg" alt="">
                                                <span><a href="#">David Bruse</a></span>
                                            </div>
                                            <div class="tp-courses__price d-flex justify-content-between">
                                                <div class="tp-courses__time">
                                                    <span><i class="fa-light fa-clock"></i>16 Week</span>
                                                </div>
                                                <div class="tp-courses__value">
                                                    <span>$49.65</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4 col-md-6">
                                    <div class="tp-courses__item mb-30">
                                        <div class="tp-courses__thumb w-img fix p-relative">
                                            <img src="assets/img/courses/courses-4.jpg" alt="">
                                            <span class="tp-courses__cat cat-color-4"><a href="#">Art &
                                                    Design</a></span>
                                        </div>
                                        <div class="tp-courses__content">
                                            <div class="tp-courses__meta">
                                                <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (60)</span>
                                                <span><i class="icon_heart_alt"></i>400</span>
                                                <span><i class="fa-light fa-user"></i>135</span>
                                            </div>
                                            <h3 class="tp-courses__title"><a href="course-details.html">AWS Certified
                                                    Solutions Architect
                                                    Associate.</a></h3>
                                            <div class="tp-courses__avata">
                                                <img src="assets/img/courses/avata/course-avata-4.jpg" alt="">
                                                <span><a href="#">Peter Sidle</a></span>
                                            </div>
                                            <div class="tp-courses__price d-flex justify-content-between">
                                                <div class="tp-courses__time">
                                                    <span><i class="fa-light fa-clock"></i>14 Week</span>
                                                </div>
                                                <div class="tp-courses__value">
                                                    <span>Free</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="tp-courses__item mb-30">
                                        <div class="tp-courses__thumb w-img fix p-relative">
                                            <img src="assets/img/courses/courses-3.jpg" alt="">
                                            <span class="tp-courses__cat cat-color-3"><a
                                                    href="#">Mechanical</a></span>
                                        </div>
                                        <div class="tp-courses__content">
                                            <div class="tp-courses__meta">
                                                <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (88)</span>
                                                <span><i class="icon_heart_alt"></i>200</span>
                                                <span><i class="fa-light fa-user"></i>165</span>
                                            </div>
                                            <h3 class="tp-courses__title"><a href="course-details.html">Statistics
                                                    Data Scince and
                                                    Business Analysis</a></h3>
                                            <div class="tp-courses__avata">
                                                <img src="assets/img/courses/avata/course-avata-3.jpg" alt="">
                                                <span><a href="#">Natasha Pawel</a></span>
                                            </div>
                                            <div class="tp-courses__price d-flex justify-content-between">
                                                <div class="tp-courses__time">
                                                    <span><i class="fa-light fa-clock"></i>10 Week</span>
                                                </div>
                                                <div class="tp-courses__value">
                                                    <span>$69.65</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="tp-courses__item mb-30">
                                        <div class="tp-courses__thumb w-img fix p-relative">
                                            <img src="assets/img/courses/courses-5.jpg" alt="">
                                            <span class="tp-courses__cat cat-color-5"><a
                                                    href="#">Marketing</a></span>
                                        </div>
                                        <div class="tp-courses__content">
                                            <div class="tp-courses__meta">
                                                <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5
                                                    (100)</span>
                                                <span><i class="icon_heart_alt"></i>800</span>
                                                <span><i class="fa-light fa-user"></i>365</span>
                                            </div>
                                            <h3 class="tp-courses__title"><a href="course-details.html">Learn
                                                    Essentials of User Interface
                                                    Design in Figma.</a></h3>
                                            <div class="tp-courses__avata">
                                                <img src="assets/img/courses/avata/course-avata-5.jpg" alt="">
                                                <span><a href="#">Mary Vaun</a></span>
                                            </div>
                                            <div class="tp-courses__price d-flex justify-content-between">
                                                <div class="tp-courses__time">
                                                    <span><i class="fa-light fa-clock"></i>16 Week</span>
                                                </div>
                                                <div class="tp-courses__value">
                                                    <span>Free</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-4 col-md-6">
                                    <div class="tp-courses__item mb-30">
                                        <div class="tp-courses__thumb w-img fix p-relative">
                                            <img src="assets/img/courses/courses-6.jpg" alt="">
                                            <span class="tp-courses__cat cat-color-6"><a href="#">Audio &
                                                    Music</a></span>
                                        </div>
                                        <div class="tp-courses__content">
                                            <div class="tp-courses__meta">
                                                <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5
                                                    (100)</span>
                                                <span><i class="icon_heart_alt"></i>18,400</span>
                                                <span><i class="fa-light fa-user"></i>365</span>
                                            </div>
                                            <h3 class="tp-courses__title"><a href="course-details.html">Become a UI/UX
                                                    Designer
                                                    Everything You need</a></h3>
                                            <div class="tp-courses__avata">
                                                <img src="assets/img/courses/avata/course-avata-6.jpg" alt="">
                                                <span><a href="#">Auston Ager</a></span>
                                            </div>
                                            <div class="tp-courses__price d-flex justify-content-between">
                                                <div class="tp-courses__time">
                                                    <span><i class="fa-light fa-clock"></i>10 Week</span>
                                                </div>
                                                <div class="tp-courses__value">
                                                    <span>$59.65</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-featured" role="tabpanel"
                            aria-labelledby="pills-featured-tab">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="tp-courses__item mb-30">
                                        <div class="tp-courses__thumb w-img fix p-relative">
                                            <img src="assets/img/courses/courses-5.jpg" alt="">
                                            <span class="tp-courses__cat cat-color-5"><a
                                                    href="#">Marketing</a></span>
                                        </div>
                                        <div class="tp-courses__content">
                                            <div class="tp-courses__meta">
                                                <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5
                                                    (100)</span>
                                                <span><i class="icon_heart_alt"></i>800</span>
                                                <span><i class="fa-light fa-user"></i>365</span>
                                            </div>
                                            <h3 class="tp-courses__title"><a href="course-details.html">Learn
                                                    Essentials of User Interface
                                                    Design in Figma.</a></h3>
                                            <div class="tp-courses__avata">
                                                <img src="assets/img/courses/avata/course-avata-5.jpg" alt="">
                                                <span><a href="#">Mary Vaun</a></span>
                                            </div>
                                            <div class="tp-courses__price d-flex justify-content-between">
                                                <div class="tp-courses__time">
                                                    <span><i class="fa-light fa-clock"></i>16 Week</span>
                                                </div>
                                                <div class="tp-courses__value">
                                                    <span>Free</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="tp-courses__item mb-30">
                                        <div class="tp-courses__thumb w-img fix p-relative">
                                            <img src="assets/img/courses/courses-2.jpg" alt="">
                                            <span class="tp-courses__cat cat-color-2"><a
                                                    href="#">Development</a></span>
                                        </div>
                                        <div class="tp-courses__content">
                                            <div class="tp-courses__meta">
                                                <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5
                                                    (100)</span>
                                                <span><i class="icon_heart_alt"></i>1800</span>
                                                <span><i class="fa-light fa-user"></i>325</span>
                                            </div>
                                            <h3 class="tp-courses__title"><a href="course-details.html">Everything You
                                                    Need to Know
                                                    About Business.</a></h3>
                                            <div class="tp-courses__avata">
                                                <img src="assets/img/courses/avata/course-avata-2.jpg" alt="">
                                                <span><a href="#">David Bruse</a></span>
                                            </div>
                                            <div class="tp-courses__price d-flex justify-content-between">
                                                <div class="tp-courses__time">
                                                    <span><i class="fa-light fa-clock"></i>16 Week</span>
                                                </div>
                                                <div class="tp-courses__value">
                                                    <span>$49.65</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="tp-courses__item mb-30">
                                        <div class="tp-courses__thumb w-img fix p-relative">
                                            <img src="assets/img/courses/courses-6.jpg" alt="">
                                            <span class="tp-courses__cat cat-color-6"><a href="#">Audio &
                                                    Music</a></span>
                                        </div>
                                        <div class="tp-courses__content">
                                            <div class="tp-courses__meta">
                                                <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5
                                                    (100)</span>
                                                <span><i class="icon_heart_alt"></i>18,400</span>
                                                <span><i class="fa-light fa-user"></i>365</span>
                                            </div>
                                            <h3 class="tp-courses__title"><a href="course-details.html">Become a UI/UX
                                                    Designer
                                                    Everything You need</a></h3>
                                            <div class="tp-courses__avata">
                                                <img src="assets/img/courses/avata/course-avata-6.jpg" alt="">
                                                <span><a href="#">Auston Ager</a></span>
                                            </div>
                                            <div class="tp-courses__price d-flex justify-content-between">
                                                <div class="tp-courses__time">
                                                    <span><i class="fa-light fa-clock"></i>10 Week</span>
                                                </div>
                                                <div class="tp-courses__value">
                                                    <span>$59.65</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="tp-courses__item mb-30">
                                        <div class="tp-courses__thumb w-img fix p-relative">
                                            <img src="assets/img/courses/courses-4.jpg" alt="">
                                            <span class="tp-courses__cat cat-color-4"><a href="#">Art &
                                                    Design</a></span>
                                        </div>
                                        <div class="tp-courses__content">
                                            <div class="tp-courses__meta">
                                                <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (60)</span>
                                                <span><i class="icon_heart_alt"></i>400</span>
                                                <span><i class="fa-light fa-user"></i>135</span>
                                            </div>
                                            <h3 class="tp-courses__title"><a href="course-details.html">AWS Certified
                                                    Solutions Architect
                                                    Associate.</a></h3>
                                            <div class="tp-courses__avata">
                                                <img src="assets/img/courses/avata/course-avata-4.jpg" alt="">
                                                <span><a href="#">Peter Sidle</a></span>
                                            </div>
                                            <div class="tp-courses__price d-flex justify-content-between">
                                                <div class="tp-courses__time">
                                                    <span><i class="fa-light fa-clock"></i>14 Week</span>
                                                </div>
                                                <div class="tp-courses__value">
                                                    <span>Free</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="tp-courses__item mb-30">
                                        <div class="tp-courses__thumb w-img fix p-relative">
                                            <img src="assets/img/courses/courses-1.jpg" alt="">
                                            <span class="tp-courses__cat cat-color-1"><a href="#">Web
                                                    Design</a></span>
                                        </div>
                                        <div class="tp-courses__content">
                                            <div class="tp-courses__meta">
                                                <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5
                                                    (110)</span>
                                                <span><i class="icon_heart_alt"></i>1200</span>
                                                <span><i class="fa-light fa-user"></i>155</span>
                                            </div>
                                            <h3 class="tp-courses__title"><a href="course-details.html">The Most
                                                    Complete Design-
                                                    Thinking Course</a></h3>
                                            <div class="tp-courses__avata">
                                                <img src="assets/img/courses/avata/course-avata-1.jpg" alt="">
                                                <span><a href="#">Jennifer Powell</a></span>
                                            </div>
                                            <div class="tp-courses__price d-flex justify-content-between">
                                                <div class="tp-courses__time">
                                                    <span><i class="fa-light fa-clock"></i>7 Week</span>
                                                </div>
                                                <div class="tp-courses__value">
                                                    <span>$39.65</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-6">
                                    <div class="tp-courses__item mb-30">
                                        <div class="tp-courses__thumb w-img fix p-relative">
                                            <img src="assets/img/courses/courses-3.jpg" alt="">
                                            <span class="tp-courses__cat cat-color-3"><a
                                                    href="#">Mechanical</a></span>
                                        </div>
                                        <div class="tp-courses__content">
                                            <div class="tp-courses__meta">
                                                <span class="tp-ratting"><i class="icon_star_alt"></i> 4.5 (88)</span>
                                                <span><i class="icon_heart_alt"></i>200</span>
                                                <span><i class="fa-light fa-user"></i>165</span>
                                            </div>
                                            <h3 class="tp-courses__title"><a href="course-details.html">Statistics
                                                    Data Scince and
                                                    Business Analysis</a></h3>
                                            <div class="tp-courses__avata">
                                                <img src="assets/img/courses/avata/course-avata-3.jpg" alt="">
                                                <span><a href="#">Natasha Pawel</a></span>
                                            </div>
                                            <div class="tp-courses__price d-flex justify-content-between">
                                                <div class="tp-courses__time">
                                                    <span><i class="fa-light fa-clock"></i>10 Week</span>
                                                </div>
                                                <div class="tp-courses__value">
                                                    <span>$69.65</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- course end  -->

        <!-- event start-->
        <div class="tp-event__section pt-120 pb-90 p-relative">
            <div class="tp-event__shape">
                <div class="event-1">
                    <img src="assets/img/icons/event-line-1.png" alt="">
                </div>
                <div class="event-2">
                    <img src="assets/img/icons/event-circle.png" alt="">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-section__title-wrapper mb-40 text-center">
                            <h3 class="tp-section__title mb-15">Upcoming Events</h3>
                            <p>You can relay on our amazing features list and also our customer services <br> will be
                                great
                                experience for you without doubt.</p>
                        </div>
                    </div>
                </div>
                <div class="tp-event__wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="tp-event__item mb-30">
                                <div class="tp-event__thumb w-img fix">
                                    <img src="assets/img/event/event-thumb-1.jpg" alt="">
                                </div>
                                <div class="tp-event__content">
                                    <div class="tp-event__meta mb-10">
                                        <span class="event-date"><i class="fa-solid fa-circle-small"></i> February 13,
                                            2022</span>
                                        <span class="event-cat"><i class="fa-solid fa-circle-small"></i>
                                            Marketing</span>
                                    </div>
                                    <h3 class="tp-event__title mb-30"><a href="event-details.html">Learn By Doing A
                                            Real
                                            World Projects.</a></h3>
                                    <a href="event-details.html" class="more-btn">Read More <i
                                            class="fa-regular fa-arrow-right"></i></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="tp-event__item mb-30">
                                <div class="tp-event__thumb w-img fix">
                                    <img src="assets/img/event/event-thumb-2.jpg" alt="">
                                </div>
                                <div class="tp-event__content">
                                    <div class="tp-event__meta mb-10">
                                        <span class="event-date"><i class="fa-solid fa-circle-small"></i> February 13,
                                            2022</span>
                                        <span class="event-cat"><i class="fa-solid fa-circle-small"></i>
                                            Marketing</span>
                                    </div>
                                    <h3 class="tp-event__title mb-30"><a href="event-details.html">Find The Right
                                            Learning
                                            for your Group.</a></h3>
                                    <a href="event-details.html" class="more-btn">Read More <i
                                            class="fa-regular fa-arrow-right"></i></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="tp-event__item mb-30">
                                <div class="tp-event__thumb w-img fix">
                                    <img src="assets/img/event/event-thumb-3.jpg" alt="">
                                </div>
                                <div class="tp-event__content">
                                    <div class="tp-event__meta mb-10">
                                        <span class="event-date"><i class="fa-solid fa-circle-small"></i> February 13,
                                            2022</span>
                                        <span class="event-cat"><i class="fa-solid fa-circle-small"></i>
                                            Marketing</span>
                                    </div>
                                    <h3 class="tp-event__title mb-30"><a href="event-details.html">While the lovely
                                            valley
                                            team work today.</a></h3>
                                    <a href="event-details.html" class="more-btn">Read More <i
                                            class="fa-regular fa-arrow-right"></i></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="tp-event__item mb-30">
                                <div class="tp-event__thumb w-img fix">
                                    <img src="assets/img/event/event-thumb-4.jpg" alt="">
                                </div>
                                <div class="tp-event__content">
                                    <div class="tp-event__meta mb-10">
                                        <span class="event-date"><i class="fa-solid fa-circle-small"></i> February
                                            13, 2022</span>
                                        <span class="event-cat"><i class="fa-solid fa-circle-small"></i>
                                            Marketing</span>
                                    </div>
                                    <h3 class="tp-event__title mb-30"><a href="event-details.html">Strategic Social
                                            Media Marketing Policy.</a>
                                    </h3>
                                    <a href="event-details.html" class="more-btn">Read More <i
                                            class="fa-regular fa-arrow-right"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- evant end -->

        <!-- testimonial start  -->
        <div class="tp-testimonial__section pb-120">
            <div class="container">
                <div class="grey-bg pb-150 pt-60 tp-testimonial__bg">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tp-section__title-wrapper mb-40 text-center">
                                <h3 class="tp-section__title mb-15">What our clients Say <br>
                                    About us</h3>
                                <p>Etiam Porttitor risus massa nec condiment gravida nibh.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tp-testimonial__wrapper p-relative">
                        <div class="row justify-content-center">

                            <div class="col-lg-10">
                                <div class="tp-testimonial__slider">
                                    <div class="tp-testimonial__box d-md-flex white-bg align-items-center">
                                        <img src="assets/img/testimonial/testimonial-thumb.jpg" alt="">
                                        <div class="tp-testimonial__review">
                                            <span class="tp-testimonial__quote"><i
                                                    class="fa-solid fa-quote-left"></i></span>
                                            <p>Engage with our profeessional realestaeyeagants sell buy or <br> rent
                                                your home auweGet
                                                emails directly areain falls box andery <br> ithe. Quis ipsum
                                                suspendisse ultrices
                                                gravida.</p>
                                            <h3>Maria Zokatti</h3>
                                            <span>CEO, Psdboss</span>
                                        </div>
                                    </div>
                                    <div class="tp-testimonial__box d-md-flex white-bg align-items-center">
                                        <img src="assets/img/testimonial/testimonial-thumb-2.jpg" alt="">
                                        <div class="tp-testimonial__review">
                                            <span class="tp-testimonial__quote"><i
                                                    class="fa-solid fa-quote-left"></i></span>
                                            <p>Your company is truly upstanding and is behind its product 100%. <br> I
                                                STRONGLY
                                                recommend education to EVERYONE interested <br> in running a successful
                                                online business
                                            </p>
                                            <h3>Judy N</h3>
                                            <span>CEO, Psdboss</span>
                                        </div>
                                    </div>
                                    <div class="tp-testimonial__box d-md-flex white-bg align-items-center">
                                        <img src="assets/img/testimonial/testimonial-thumb-3.jpg" alt="">
                                        <div class="tp-testimonial__review">
                                            <span class="tp-testimonial__quote"><i
                                                    class="fa-solid fa-quote-left"></i></span>
                                            <p>Just what I was looking for. Best. Product. Ever! Education is great.
                                                Education is
                                                the most valuable business resource <br> we have EVER purchased.</p>
                                            <h3>Gabbey A.</h3>
                                            <span>CEO, Psdboss</span>
                                        </div>
                                    </div>
                                    <div class="tp-testimonial__box d-md-flex white-bg align-items-center">
                                        <img src="assets/img/testimonial/testimonial-thumb-4.jpg" alt="">
                                        <div class="tp-testimonial__review">
                                            <span class="tp-testimonial__quote"><i
                                                    class="fa-solid fa-quote-left"></i></span>
                                            <p>I would also like to say thank you to all your staff. It's the perfect
                                                <br> solution for
                                                our business. Education is the most valuable <br> business resource we
                                                have EVER
                                                purchased.
                                            </p>
                                            <h3>Olive Yew.</h3>
                                            <span>CEO, Psdboss</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="tp-testimonial__dots pt-50"></div>
                            <div class="tp-testimonial__arrows"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tesimoial end  -->

        <!-- team start  -->
        <div class="tp-team__section pb-130">
            <div class="container">
                <div class="row">
                    <div class="tp-section__title-wrapper mb-40 text-center">
                        <h3 class="tp-section__title mb-15">Become A Instruction <br>
                            Instructor.</h3>
                        <p>Etiam porttitor risus massa nec condiment gravida.</p>
                    </div>
                </div>
                <div class="tp-team__wrapper mb-30">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="tp-team__member fix mb-30">
                                <div class="tp-team__img w-img tp-team__overlay p-relative">
                                    <a href="instructor-details.html">
                                        <img src="assets/img/team/team-1.1.jpg" alt="">
                                    </a>
                                    <div class="tp-team__info text-center">
                                        <h3 class="tp-team__name">Andra Flatcher</h3>
                                        <span>Teacher MBA</span>
                                    </div>
                                    <div class="tp-team__social">
                                        <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                                        <span><a href="#"><i class="fab fa-youtube"></i></a></span>
                                        <span><a href="#"><i class="fab fa-linkedin"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="tp-team__member fix mb-30">
                                <div class="tp-team__img w-img tp-team__overlay p-relative">
                                    <a href="instructor-details.html">
                                        <img src="assets/img/team/team-1.2.jpg" alt="">
                                    </a>
                                    <div class="tp-team__info text-center">
                                        <h3 class="tp-team__name">Morgan Key</h3>
                                        <span>Teacher MBA</span>
                                    </div>
                                    <div class="tp-team__social">
                                        <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                                        <span><a href="#"><i class="fab fa-youtube"></i></a></span>
                                        <span><a href="#"><i class="fab fa-linkedin"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="tp-team__member fix mb-30">
                                <div class="tp-team__img w-img tp-team__overlay p-relative">
                                    <a href="instructor-details.html">
                                        <img src="assets/img/team/team-1.3.jpg" alt="">
                                    </a>
                                    <div class="tp-team__info text-center">
                                        <h3 class="tp-team__name">Andra Flatcher</h3>
                                        <span>Course Mentor</span>
                                    </div>
                                    <div class="tp-team__social">
                                        <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                                        <span><a href="#"><i class="fab fa-youtube"></i></a></span>
                                        <span><a href="#"><i class="fab fa-linkedin"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="tp-team__member fix mb-30">
                                <div class="tp-team__img w-img tp-team__overlay p-relative">
                                    <a href="instructor-details.html">
                                        <img src="assets/img/team/team-1.4.jpg" alt="">
                                    </a>
                                    <div class="tp-team__info text-center">
                                        <h3 class="tp-team__name">Andra Flatcher</h3>
                                        <span>Teacher MBA</span>
                                    </div>
                                    <div class="tp-team__social">
                                        <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                                        <span><a href="#"><i class="fab fa-youtube"></i></a></span>
                                        <span><a href="#"><i class="fab fa-linkedin"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-hero__btn-wrappper text-center">
                            <a href="instructor-2.html" class="tp-border-btn br-0">
                                <span>See all Team</span>
                                <div class="transition"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- team end  -->

        <!-- cta start-->
        <div class="tp-cta__section p-relative">
            <div class="tp-cta__bg grey-bg">
            </div>
            <div class="container">
                <div class="tp-cta-wrapper">
                    <div class="tp-box__shadow ">
                        <div class="tp-cta__box z-index-11 p-relative "
                            data-background="assets/img/bg/newsletter-bg-1.jpg">
                            <div class="row align-items-center">
                                <div class="col-lg-9 col-md-8">
                                    <h3 class="tp-cta__title text-white">Want to study at Online <br> program ?</h3>
                                </div>
                                <div class="col-lg-3 col-md-4">
                                    <div class="tp-cta__btn-wrappper d-flex justify-content-md-end">
                                        <a href="contact.html" class="tp-white-btn">
                                            <span>Apply now</span>
                                            <div class="transition"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- newsletter end -->

    </main>

    <!-- footer area start -->
    <footer>
        <div class="footer__area grey-bg">
            <div class="container">
                <div class="footer__top ">
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6">
                            <div class="footer__widget mb-50 footer-col-1">
                                <div class="footer__widget-logo mb-30">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                                <div class="footer__widget-content">
                                    <p>Aut cum mollitia reprehenderit.
                                        Eos cumque dicta adipisci amet
                                        architecto culpa.</p>
                                    <div class="footer__social">
                                        <span><a href="#"><i class="fab fa-facebook-f"></i></a></span>
                                        <span><a href="#" class="yt"><i
                                                    class="fab fa-youtube"></i></a></span>
                                        <span><a href="#" class="tw"><i
                                                    class="fab fa-twitter"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-6">
                            <div class="footer__widget mb-50 footer-col-2">
                                <h3 class="footer__widget-title">Information</h3>
                                <div class="footer__widget-content">
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">Customer</a></li>
                                        <li><a href="#">Privacy</a></li>
                                        <li><a href="#">Service</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-6">
                            <div class="footer__widget mb-50 footer-col-3">
                                <h3 class="footer__widget-title">Courses</h3>
                                <div class="footer__widget-content">
                                    <ul>
                                        <li><a href="#">Masters Degree</a></li>
                                        <li><a href="#">Post GraduateU</a></li>
                                        <li><a href="#">Ndergraduate</a></li>
                                        <li><a href="#">Engineering</a></li>
                                        <li><a href="#">Ph.D Degree</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-lg-3 col-md-6">
                            <div class="footer__widget mb-50 footer-col-4">
                                <h3 class="footer__widget-title">Sign Up for Our Newsletter</h3>
                                <div class="footer__widget-content">
                                    <div class="footer__subscribe">
                                        <p>Receive weekly newsletter with educational,
                                            popular books and much more!</p>
                                        <form action="#">
                                            <div class="footer__subscribe-box">
                                                <div class="footer__subscribe-input">
                                                    <input type="email" placeholder="Email address">
                                                </div>
                                                <button class="footer-sub-btn" type="submit">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__bottom">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer__copyright text-center">
                                <p> © 2022 Tutorgo, All Rights Reserved. Design By <a
                                        href="https://themeforest.net/user/theme_pure/portfolio"
                                        target="_blank">Theme Pure</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->


    <!-- JS here -->
    <script src="{{ asset('frontend/assets/js/vendor/jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/waypoints.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap-bundle.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/meanmenu.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/magnific-popup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/parallax.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/counterup.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope-pkgd.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/countdown.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
