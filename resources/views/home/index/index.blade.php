@extends('home.layouts.home')

@section('title')
    صفحه اصلی
@endsection

@section('content')
    <div class="wrapper">

        <header class="header-area sticky-bar">
            <div class="main-header-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo pt-40">
                                <a href="index.html">
                                    <h3 class="font-weight-bold">Mufateh.ir</h3>
                                </a>
                            </div>
                        </div>

                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu text-center">
                                <nav>
                                    <ul>
                                        <li class="angle-shape">
                                            <a href="about_us.html"> ارتباط با ما </a>
                                        </li>

                                        <li><a href="contact-us.html"> تماس با ما </a></li>

                                        <li class="angle-shape">
                                            <a href="shop.html"> فروشگاه </a>

                                            <ul class="mega-menu">
                                                <li>
                                                    <a class="menu-title" href="#">مردانه</a>

                                                    <ul>
                                                        <li><a href="shop.html">پیراهن</a></li>

                                                        <li>
                                                            <a href="#">تی شرت</a>
                                                        </li>

                                                        <li>
                                                            <a href="#">پالتو</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">لباس راحتی</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">لباس زیر </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <a class="menu-title" href="#">زنانه</a>
                                                    <ul>
                                                        <li>
                                                            <a href="shop.html">مانتو</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">شومیز</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">دامن</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">پالتو</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"> لباس راحتی </a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li>
                                                    <a class="menu-title" href="#">بچه گانه</a>
                                                    <ul>
                                                        <li>
                                                            <a href="product-details.html">ست لباس</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-details-tab-2.html">شلوارک</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-details-tab-3.html">ژاکت</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-details-gallery.html">ست نوزاد</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-details-gallery-right.html">پیراهن</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="angle-shape">
                                            <a href="index.html"> صفحه اصلی </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3">
                            <div class="header-right-wrap pt-40">
                                <div class="header-search">
                                    <a class="search-active" href="#"><i class="sli sli-magnifier"></i></a>
                                </div>
                                <div class="cart-wrap">
                                    <button class="icon-cart-active">
                                        <span class="icon-cart">
                                            <i class="sli sli-bag"></i>
                                            <span class="count-style">02</span>
                                        </span>


                                        <span class="cart-price">
                                            500,000
                                        </span>
                                        <span>تومان</span>
                                    </button>
                                    <div class="shopping-cart-content">
                                        <div class="shopping-cart-top">
                                            <a class="cart-close" href="#"><i class="sli sli-close"></i></a>
                                            <h4>سبد خرید</h4>
                                        </div>
                                        <ul>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#"> لورم ایپسوم </a></h4>
                                                    <span>1 x 90.00</span>
                                                </div>

                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt=""
                                                            src="assets/img/cart/cart-1.svg" /></a>
                                                    <div class="item-close">
                                                        <a href="#"><i class="sli sli-close"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#"> لورم ایپسوم </a></h4>
                                                    <span>1 x 9,000</span>
                                                </div>
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt=""
                                                            src="assets/img/cart/cart-2.svg" /></a>
                                                    <div class="item-close">
                                                        <a href="#"><i class="sli sli-close"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-bottom">
                                            <div class="shopping-cart-total d-flex justify-content-between align-items-center"
                                                style="direction: rtl;">
                                                <h4>
                                                    جمع کل :
                                                </h4>
                                                <span class="shop-total">
                                                    25,000 تومان
                                                </span>
                                            </div>
                                            <div class="shopping-cart-btn btn-hover text-center">
                                                <a class="default-btn" href="checkout.html">
                                                    ثبت سفارش
                                                </a>
                                                <a class="default-btn" href="cart-page.html">
                                                    سبد خرید
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="setting-wrap">
                                    <button class="setting-active">
                                        <i class="sli sli-settings"></i>
                                    </button>
                                    <div class="setting-content">
                                        <ul class="text-right">
                                            <li><a href="login.html">ورود</a></li>
                                            <li>
                                                <a href="register.html">ایجاد حساب</a>
                                            </li>
                                            <li><a href="my-account.html">پروفایل</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main-search start -->
                <div class="main-search-active">
                    <div class="sidebar-search-icon">
                        <button class="search-close">
                            <span class="sli sli-close"></span>
                        </button>
                    </div>
                    <div class="sidebar-search-input">
                        <form>
                            <div class="form-search">
                                <input id="search" class="input-text" value="" placeholder=" ...جستجو "
                                    type="search" />
                                <button>
                                    <i class="sli sli-magnifier"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="header-small-mobile">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <div class="mobile-logo">
                                <a href="index.html">
                                    <h4 class="font-weight-bold">WebProg.ir</h4>
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="header-right-wrap">
                                <div class="cart-wrap">
                                    <button class="icon-cart-active">
                                        <span class="icon-cart">
                                            <i class="sli sli-bag"></i>
                                            <span class="count-style">02</span>
                                        </span>

                                        <span class="cart-price">
                                            500,000
                                        </span>
                                        <span>تومان</span>
                                    </button>
                                    <div class="shopping-cart-content">
                                        <div class="shopping-cart-top">
                                            <a class="cart-close" href="#"><i class="sli sli-close"></i></a>
                                            <h4>سبد خرید</h4>
                                        </div>
                                        <ul style="height: 400px;">
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#"> لورم ایپسوم </a></h4>
                                                    <span>1 x 90.00</span>
                                                </div>

                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt=""
                                                            src="assets/img/cart/cart-1.svg" /></a>
                                                    <div class="item-close">
                                                        <a href="#"><i class="sli sli-close"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="single-shopping-cart">
                                                <div class="shopping-cart-title">
                                                    <h4><a href="#"> لورم ایپسوم </a></h4>
                                                    <span>1 x 9,000</span>
                                                </div>
                                                <div class="shopping-cart-img">
                                                    <a href="#"><img alt=""
                                                            src="assets/img/cart/cart-2.svg" /></a>
                                                    <div class="item-close">
                                                        <a href="#"><i class="sli sli-close"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="shopping-cart-bottom">
                                            <div class="shopping-cart-total d-flex justify-content-between align-items-center"
                                                style="direction: rtl;">
                                                <h4>
                                                    جمع کل :
                                                </h4>
                                                <span class="shop-total">
                                                    25,000 تومان
                                                </span>
                                            </div>
                                            <div class="shopping-cart-btn btn-hover text-center">
                                                <a class="default-btn" href="checkout.html">
                                                    ثبت سفارش
                                                </a>
                                                <a class="default-btn" href="cart-page.html">
                                                    سبد خرید
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mobile-off-canvas">
                                    <a class="mobile-aside-button" href="#"><i class="sli sli-menu"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="mobile-off-canvas-active">
            <a class="mobile-aside-close">
                <i class="sli sli-close"></i>
            </a>

            <div class="header-mobile-aside-wrap">
                <div class="mobile-search">
                    <form class="search-form" action="#">
                        <input type="text" placeholder=" ... جستجو " />
                        <button class="button-search">
                            <i class="sli sli-magnifier"></i>
                        </button>
                    </form>
                </div>

                <div class="mobile-menu-wrap">
                    <!-- mobile menu start -->
                    <div class="mobile-navigation">
                        <!-- mobile menu navigation start -->
                        <nav>
                            <ul class="mobile-menu text-right">
                                <li class="menu-item-has-children">
                                    <a href="index.html"> صفحه ای اصلی </a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="shop.html">فروشگاه</a>
                                    <ul class="dropdown">
                                        <li class="menu-item-has-children">
                                            <a href="#">مردانه</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html"> پیراهن </a></li>
                                                <li>
                                                    <a href="#"> تی شرت </a>
                                                </li>
                                                <li>
                                                    <a href="#"> پالتو </a>
                                                </li>
                                                <li>
                                                    <a href="#"> لباس راحتی </a>
                                                </li>
                                                <li>
                                                    <a href="#">لباس زیر</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">زنانه</a>
                                            <ul class="dropdown">
                                                <li>
                                                    <a href="product-details.html"> مانتو </a>
                                                </li>
                                                <li>
                                                    <a href="#"> شومیز </a>
                                                </li>
                                                <li>
                                                    <a href="#"> دامن </a>
                                                </li>
                                                <li>
                                                    <a href="#">پالتو </a>
                                                </li>
                                                <li>
                                                    <a href="#">لباس راحتی</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#"> بچه گانه </a>
                                            <ul class="dropdown">
                                                <li>
                                                    <a href="#"> ست لباس </a>
                                                </li>
                                                <li>
                                                    <a href="#"> شلوارک </a>
                                                </li>
                                                <li>
                                                    <a href="#"> ژاکت </a>
                                                </li>
                                                <li>
                                                    <a href="#"> ست نوزاد </a>
                                                </li>
                                                <li>
                                                    <a href="#"> پیراهن </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li><a href="contact-us.html">تماس با ما</a></li>

                                <li><a href="about_us.html"> در باره ما</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->
                </div>

                <div class="mobile-curr-lang-wrap">
                    <div class="single-mobile-curr-lang">
                        <ul class="text-right">
                            <li class="my-3"><a href="login.html"> ورود </a></li>
                            <li class="my-3">
                                <a href="register.html"> ایجاد حساب </a>
                            </li>
                            <li class="my-3"><a href="my-account.html"> پروفایل </a></li>
                        </ul>
                    </div>
                </div>

                <div class="mobile-social-wrap text-center">
                    <a class="facebook" href="#"><i class="sli sli-social-facebook"></i></a>
                    <a class="twitter" href="#"><i class="sli sli-social-twitter"></i></a>
                    <a class="pinterest" href="#"><i class="sli sli-social-pinterest"></i></a>
                    <a class="instagram" href="#"><i class="sli sli-social-instagram"></i></a>
                    <a class="google" href="#"><i class="sli sli-social-google"></i></a>
                </div>
            </div>
        </div>

        <div class="slider-area section-padding-1">
            <div class="slider-active owl-carousel nav-style-1">
                <div class="single-slider slider-height-1 bg-paleturquoise">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6 text-right">
                                <div class="slider-content slider-animated-1">
                                    <h1 class="animated">لورم ایپسوم</h1>
                                    <p class="animated">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                        و با استفاده از طراحان گرافیک است
                                    </p>
                                    <div class="slider-btn btn-hover">
                                        <a class="animated" href="shop.html">
                                            <i class="sli sli-basket-loaded"></i>
                                            فروشگاه
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                                <div class="slider-single-img slider-animated-1">

                                    <img class="animated" src="assets/img/slider/1.jfif" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider slider-height-1 bg-paleturquoise">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6  text-right">
                                <div class="slider-content slider-animated-1">
                                    <h1 class="animated">لورم ایپسوم</h1>
                                    <p class="animated">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ
                                        و با استفاده از طراحان گرافیک است
                                    </p>
                                    <div class="slider-btn btn-hover">
                                        <a class="animated" href="shop.html">
                                            <i class="sli sli-basket-loaded"></i>
                                            فروشگاه
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12 col-sm-6">
                                <div class="slider-single-img slider-animated-1">

                                    <img class="animated" src="assets/img/slider/2.jfif" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-area pt-100 pb-65">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="single-banner mb-30 scroll-zoom">
                            <a href="product-details.html"><img class="animated" src="assets/img/banner/banner-6.png"
                                    alt="" /></a>
                            <div class="banner-content-2 banner-position-5">
                                <h4>زنانه</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-banner mb-30 scroll-zoom">
                            <a href="product-details.html"><img class="animated" src="assets/img/banner/banner-7.png"
                                    alt="" /></a>
                            <div class="banner-content-2 banner-position-5">
                                <h4>جین</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="single-banner mb-30 scroll-zoom">
                            <a href="product-details.html"><img class="animated" src="assets/img/banner/banner-8.png"
                                    alt="" /></a>
                            <div class="banner-content-2 banner-position-5">
                                <h4>مردانه</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-banner mb-30 scroll-zoom">
                            <a href="product-details.html"><img class="animated" src="assets/img/banner/banner-9.png"
                                    alt="" /></a>
                            <div class="banner-content banner-position-6 text-right">
                                <h3>لورم ایپسوم</h3>
                                <h2>لورم ایپسوم <br />متن</h2>
                                <a href="product-details.html">فروشگاه</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-banner mb-30 text-center scroll-zoom">
                            <a href="product-details.html"><img class="animated" src="assets/img/banner/banner-10.png"
                                    alt="" /></a>
                            <div class="banner-content-3 banner-position-7">
                                <h2>لورم ایپسوم متن ساختگی</h2>
                                <a href="product-details.html">فروشگاه</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-area pb-70">
            <div class="container">
                <div class="section-title text-center pb-40">
                    <h2> لورم ایپسوم </h2>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون
                        بلکه روزنامه و مجله
                    </p>
                </div>
                <div class="product-tab-list nav pb-60 text-center flex-row-reverse">
                    <a class="active" href="#product-1" data-toggle="tab">
                        <h4>مردانه</h4>
                    </a>
                    <a href="#product-2" data-toggle="tab">
                        <h4>زنانه</h4>
                    </a>
                    <a href="#product-3" data-toggle="tab">
                        <h4>بچه گانه</h4>
                    </a>
                </div>
                <div class="tab-content jump-2">
                    <div id="product-1" class="tab-pane active">
                        <div class="ht-products product-slider-active owl-carousel">
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-1.svg" alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم</a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html"> لورم ایپسوم </a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    55,000
                                                    تومان
                                                </span>
                                                <span class="old">
                                                    75,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Product End-->
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-2.svg" alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم </a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html">لورم ایپسوم</a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    25,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Product End-->
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-3.svg" alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم</a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html">لورم ایپسوم</a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    60,000
                                                    تومان
                                                </span>
                                                <span class="old">
                                                    90,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Product End-->
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-4.svg" alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم</a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html">لورم ایپسوم</a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    60,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Product End-->
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-2.svg" alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم </a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html">لورم ایپسوم</a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    60,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Product End-->
                        </div>
                    </div>

                    <div id="product-2" class="tab-pane">
                        <div class="ht-products product-slider-active owl-carousel">
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-5.svg" alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم</a>
                                            </div>
                                            <h4 class="ht-product-title">
                                                <a href="product-details.html">لورم ایپسوم</a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    25,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Product End-->

                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-1.svg" alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم</a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html"> لورم ایپسوم </a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    55,000
                                                    تومان
                                                </span>
                                                <span class="old">
                                                    75,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Product End-->
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-2.svg" alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم </a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html">لورم ایپسوم</a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    25,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Product End-->
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-3.svg" alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم</a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html">لورم ایپسوم</a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    60,000
                                                    تومان
                                                </span>
                                                <span class="old">
                                                    90,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Product End-->
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-4.svg" alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم</a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html">لورم ایپسوم</a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    60,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Product End-->

                        </div>
                    </div>

                    <div id="product-3" class="tab-pane">
                        <div class="ht-products product-slider-active owl-carousel">
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-4.svg" alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم</a>
                                            </div>
                                            <h4 class="ht-product-title">
                                                <a href="#">لورم ایپسوم</a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    55,000
                                                    تومان
                                                </span>
                                                <span class="old">
                                                    75,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Product End-->
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-1.svg" alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم</a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html"> لورم ایپسوم </a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    55,000
                                                    تومان
                                                </span>
                                                <span class="old">
                                                    75,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Product End-->
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-2.svg" alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم </a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html">لورم ایپسوم</a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    25,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Product End-->
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-3.svg" alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم</a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html">لورم ایپسوم</a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    60,000
                                                    تومان
                                                </span>
                                                <span class="old">
                                                    90,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--Product End-->
                            <!--Product Start-->
                            <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                                <div class="ht-product-inner">
                                    <div class="ht-product-image-wrap">
                                        <a href="product-details.html" class="ht-product-image">
                                            <img src="assets/img/product/product-4.svg" alt="Universal Product Style" />
                                        </a>
                                        <div class="ht-product-action">
                                            <ul>
                                                <li>
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal"><i
                                                            class="sli sli-magnifier"></i><span
                                                            class="ht-product-action-tooltip"> مشاهده سریع
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-heart"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به
                                                            علاقه مندی ها </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-refresh"></i><span
                                                            class="ht-product-action-tooltip"> مقایسه
                                                        </span></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="sli sli-bag"></i><span
                                                            class="ht-product-action-tooltip"> افزودن به سبد
                                                            خرید </span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ht-product-content">
                                        <div class="ht-product-content-inner">
                                            <div class="ht-product-categories">
                                                <a href="#">لورم</a>
                                            </div>
                                            <h4 class="ht-product-title text-right">
                                                <a href="product-details.html">لورم ایپسوم</a>
                                            </h4>
                                            <div class="ht-product-price">
                                                <span class="new">
                                                    60,000
                                                    تومان
                                                </span>
                                            </div>
                                            <div class="ht-product-ratting-wrap">
                                                <span class="ht-product-ratting">
                                                    <span class="ht-product-user-ratting" style="width: 100%;">
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                        <i class="sli sli-star"></i>
                                                    </span>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
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

        <div class="testimonial-area pt-80 pb-95 section-margin-1" style="background-image: url(assets/img/bg/bg-1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 ml-auto mr-auto">
                        <div class="testimonial-active owl-carousel nav-style-1">
                            <div class="single-testimonial text-center">
                                <img src="assets/img/testimonial/testi-1.png" alt="" />
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و
                                    متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                                    مورد نیاز و
                                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه
                                    درصد گذشته، حال و
                                    آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت
                                </p>
                                <div class="client-info">
                                    <img src="assets/img/icon-img/testi.png" alt="" />
                                    <h5>لورم ایپسوم</h5>
                                </div>
                            </div>
                            <div class="single-testimonial text-center">
                                <img src="assets/img/testimonial/testi-2.png" alt="" />
                                <p>
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                    گرافیک است. چاپگرها و
                                    متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی
                                    مورد نیاز و
                                    کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه
                                    درصد گذشته، حال و
                                    آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت
                                </p>
                                <div class="client-info">
                                    <img src="assets/img/icon-img/testi.png" alt="" />
                                    <h5>لورم ایپسوم</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-area pt-95 pb-70">
            <div class="container">
                <div class="section-title text-center pb-60">
                    <h2>لورم ایپسوم</h2>
                    <p>
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                        چاپگرها و متون
                        بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                    </p>
                </div>
                <div class="arrivals-wrap scroll-zoom">
                    <div class="ht-products product-slider-active owl-carousel">
                        <!--Product Start-->
                        <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                            <div class="ht-product-inner">
                                <div class="ht-product-image-wrap">
                                    <a href="product-details.html" class="ht-product-image">
                                        <img src="assets/img/product/product-1.svg" alt="Universal Product Style" />
                                    </a>
                                    <div class="ht-product-action">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#exampleModal"><i
                                                        class="sli sli-magnifier"></i><span
                                                        class="ht-product-action-tooltip"> مشاهده سریع
                                                    </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-heart"></i><span
                                                        class="ht-product-action-tooltip"> افزودن به
                                                        علاقه مندی ها </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-refresh"></i><span
                                                        class="ht-product-action-tooltip"> مقایسه
                                                    </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-bag"></i><span
                                                        class="ht-product-action-tooltip"> افزودن به سبد
                                                        خرید </span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ht-product-content">
                                    <div class="ht-product-content-inner">
                                        <div class="ht-product-categories">
                                            <a href="#">لورم</a>
                                        </div>
                                        <h4 class="ht-product-title text-right">
                                            <a href="product-details.html"> لورم ایپسوم </a>
                                        </h4>
                                        <div class="ht-product-price">
                                            <span class="new">
                                                55,000
                                                تومان
                                            </span>
                                            <span class="old">
                                                75,000
                                                تومان
                                            </span>
                                        </div>
                                        <div class="ht-product-ratting-wrap">
                                            <span class="ht-product-ratting">
                                                <span class="ht-product-user-ratting" style="width: 100%;">
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--Product End-->
                        <!--Product Start-->
                        <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                            <div class="ht-product-inner">
                                <div class="ht-product-image-wrap">
                                    <a href="product-details.html" class="ht-product-image">
                                        <img src="assets/img/product/product-2.svg" alt="Universal Product Style" />
                                    </a>
                                    <div class="ht-product-action">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#exampleModal"><i
                                                        class="sli sli-magnifier"></i><span
                                                        class="ht-product-action-tooltip"> مشاهده سریع
                                                    </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-heart"></i><span
                                                        class="ht-product-action-tooltip"> افزودن به
                                                        علاقه مندی ها </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-refresh"></i><span
                                                        class="ht-product-action-tooltip"> مقایسه
                                                    </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-bag"></i><span
                                                        class="ht-product-action-tooltip"> افزودن به سبد
                                                        خرید </span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ht-product-content">
                                    <div class="ht-product-content-inner">
                                        <div class="ht-product-categories">
                                            <a href="#">لورم </a>
                                        </div>
                                        <h4 class="ht-product-title text-right">
                                            <a href="product-details.html">لورم ایپسوم</a>
                                        </h4>
                                        <div class="ht-product-price">
                                            <span class="new">
                                                25,000
                                                تومان
                                            </span>
                                        </div>
                                        <div class="ht-product-ratting-wrap">
                                            <span class="ht-product-ratting">
                                                <span class="ht-product-user-ratting" style="width: 100%;">
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--Product End-->
                        <!--Product Start-->
                        <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                            <div class="ht-product-inner">
                                <div class="ht-product-image-wrap">
                                    <a href="product-details.html" class="ht-product-image">
                                        <img src="assets/img/product/product-3.svg" alt="Universal Product Style" />
                                    </a>
                                    <div class="ht-product-action">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#exampleModal"><i
                                                        class="sli sli-magnifier"></i><span
                                                        class="ht-product-action-tooltip"> مشاهده سریع
                                                    </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-heart"></i><span
                                                        class="ht-product-action-tooltip"> افزودن به
                                                        علاقه مندی ها </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-refresh"></i><span
                                                        class="ht-product-action-tooltip"> مقایسه
                                                    </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-bag"></i><span
                                                        class="ht-product-action-tooltip"> افزودن به سبد
                                                        خرید </span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ht-product-content">
                                    <div class="ht-product-content-inner">
                                        <div class="ht-product-categories">
                                            <a href="#">لورم</a>
                                        </div>
                                        <h4 class="ht-product-title text-right">
                                            <a href="product-details.html">لورم ایپسوم</a>
                                        </h4>
                                        <div class="ht-product-price">
                                            <span class="new">
                                                60,000
                                                تومان
                                            </span>
                                            <span class="old">
                                                90,000
                                                تومان
                                            </span>
                                        </div>
                                        <div class="ht-product-ratting-wrap">
                                            <span class="ht-product-ratting">
                                                <span class="ht-product-user-ratting" style="width: 100%;">
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!--Product End-->
                        <!--Product Start-->
                        <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                            <div class="ht-product-inner">
                                <div class="ht-product-image-wrap">
                                    <a href="product-details.html" class="ht-product-image">
                                        <img src="assets/img/product/product-4.svg" alt="Universal Product Style" />
                                    </a>
                                    <div class="ht-product-action">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#exampleModal"><i
                                                        class="sli sli-magnifier"></i><span
                                                        class="ht-product-action-tooltip"> مشاهده سریع
                                                    </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-heart"></i><span
                                                        class="ht-product-action-tooltip"> افزودن به
                                                        علاقه مندی ها </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-refresh"></i><span
                                                        class="ht-product-action-tooltip"> مقایسه
                                                    </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-bag"></i><span
                                                        class="ht-product-action-tooltip"> افزودن به سبد
                                                        خرید </span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ht-product-content">
                                    <div class="ht-product-content-inner">
                                        <div class="ht-product-categories">
                                            <a href="#">لورم</a>
                                        </div>
                                        <h4 class="ht-product-title text-right">
                                            <a href="product-details.html">لورم ایپسوم</a>
                                        </h4>
                                        <div class="ht-product-price">
                                            <span class="new">
                                                60,000
                                                تومان
                                            </span>
                                        </div>
                                        <div class="ht-product-ratting-wrap">
                                            <span class="ht-product-ratting">
                                                <span class="ht-product-user-ratting" style="width: 100%;">
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Product End-->
                        <!--Product Start-->
                        <div class="ht-product ht-product-action-on-hover ht-product-category-right-bottom mb-30">
                            <div class="ht-product-inner">
                                <div class="ht-product-image-wrap">
                                    <a href="product-details.html" class="ht-product-image">
                                        <img src="assets/img/product/product-2.svg" alt="Universal Product Style" />
                                    </a>
                                    <div class="ht-product-action">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="modal" data-target="#exampleModal"><i
                                                        class="sli sli-magnifier"></i><span
                                                        class="ht-product-action-tooltip"> مشاهده سریع
                                                    </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-heart"></i><span
                                                        class="ht-product-action-tooltip"> افزودن به
                                                        علاقه مندی ها </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-refresh"></i><span
                                                        class="ht-product-action-tooltip"> مقایسه
                                                    </span></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="sli sli-bag"></i><span
                                                        class="ht-product-action-tooltip"> افزودن به سبد
                                                        خرید </span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ht-product-content">
                                    <div class="ht-product-content-inner">
                                        <div class="ht-product-categories">
                                            <a href="#">لورم </a>
                                        </div>
                                        <h4 class="ht-product-title text-right">
                                            <a href="product-details.html">لورم ایپسوم</a>
                                        </h4>
                                        <div class="ht-product-price">
                                            <span class="new">
                                                60,000
                                                تومان
                                            </span>
                                        </div>
                                        <div class="ht-product-ratting-wrap">
                                            <span class="ht-product-ratting">
                                                <span class="ht-product-user-ratting" style="width: 100%;">
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                    <i class="sli sli-star"></i>
                                                </span>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                                <i class="sli sli-star"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Product End-->
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-area pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 text-right">
                        <div class="single-banner mb-30 scroll-zoom">
                            <a href="product-details.html"><img src="assets/img/banner/banner-4.png"
                                    alt="" /></a>
                            <div class="banner-content banner-position-3">
                                <h3>لورم ایپسوم</h3>
                                <h2>لورم ایپسوم <br />متن </h2>
                                <a href="product-details.html">فروشگاه</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 text-right">
                        <div class="single-banner mb-30 scroll-zoom">
                            <a href="product-details.html"><img src="assets/img/banner/banner-5.png"
                                    alt="" /></a>
                            <div class="banner-content banner-position-4">
                                <h3>لورم ایپسوم</h3>
                                <h2>لورم ایپسوم </h2>
                                <a href="product-details.html">فروشگاه</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="feature-area" style="direction: rtl;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-feature text-right mb-40">
                            <div class="feature-icon">
                                <img src="assets/img/icon-img/free-shipping.png" alt="" />
                            </div>
                            <div class="feature-content">
                                <h4>لورم ایپسوم</h4>
                                <p>لورم ایپسوم متن ساختگی</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-feature text-right mb-40 pl-50">
                            <div class="feature-icon">
                                <img src="assets/img/icon-img/support.png" alt="" />
                            </div>
                            <div class="feature-content">
                                <h4>لورم ایپسوم</h4>
                                <p>24x7 لورم ایپسوم</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4">
                        <div class="single-feature text-right mb-40">
                            <div class="feature-icon">
                                <img src="assets/img/icon-img/security.png" alt="" />
                            </div>
                            <div class="feature-content">
                                <h4>لورم ایپسوم</h4>
                                <p>لورم ایپسوم متن ساختگی</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer-area bg-paleturquoise" style="direction: rtl;">
            <div class="container">
                <div class="footer-top text-center pt-45 pb-45">
                    <nav>
                        <ul>
                            <li><a href="index.html">صفحه ای اصلی </a></li>
                            <li><a href="shop.html">فروشگاه </a></li>
                            <li><a href="contact-us.html">تماس با ما </a></li>
                            <li><a href="about-us.html">ارتباط با ما </a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="footer-bottom border-top-1 pt-20">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-5 col-12">
                            <div class="footer-social pb-20">
                                <a href="#">اینستاگرام</a>
                                <a href="#">تویتر</a>
                                <a href="#">فیسبوک</a>
                                <a href="#">لینکدین</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="copyright text-center pb-20">
                                <p>Copyright © Mufateh.ir</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3 col-12">
                            <div class="payment-mathod pb-20">
                                <a href="#"><img src="assets/img/icon-img/payment.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-7 col-sm-12 col-xs-12" style="direction: rtl;">
                                <div class="product-details-content quickview-content">
                                    <h2 class="text-right mb-4">لورم ایپسوم</h2>
                                    <div class="product-details-price">
                                        <span>
                                            50,000
                                            تومان
                                        </span>
                                        <span class="old">
                                            75,000
                                            تومان
                                        </span>
                                    </div>
                                    <div class="pro-details-rating-wrap">
                                        <div class="pro-details-rating">
                                            <i class="sli sli-star yellow"></i>
                                            <i class="sli sli-star yellow"></i>
                                            <i class="sli sli-star yellow"></i>
                                            <i class="sli sli-star"></i>
                                            <i class="sli sli-star"></i>
                                        </div>
                                        <span>3 دیدگاه</span>
                                    </div>
                                    <p class="text-right">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. چاپگرها
                                        و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                    </p>
                                    <div class="pro-details-list text-right">
                                        <ul class="text-right">
                                            <li>- لورم ایپسوم</li>
                                            <li>- لورم ایپسوم متن ساختگی</li>
                                            <li>- لورم ایپسوم متن</li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-size-color text-right">
                                        <div class="pro-details-size">
                                            <span>سایز</span>
                                            <div class="pro-details-size-content">
                                                <ul>
                                                    <li><a href="#">s</a></li>
                                                    <li><a href="#">m</a></li>
                                                    <li><a href="#">l</a></li>
                                                    <li><a href="#">xl</a></li>
                                                    <li><a href="#">xxl</a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="pro-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton"
                                                value="2" />
                                        </div>
                                        <div class="pro-details-cart">
                                            <a href="#">افزودن به سبد خرید</a>
                                        </div>
                                        <div class="pro-details-wishlist">
                                            <a title="Add To Wishlist" href="#"><i
                                                    class="sli sli-heart"></i></a>
                                        </div>
                                        <div class="pro-details-compare">
                                            <a title="Add To Compare" href="#"><i
                                                    class="sli sli-refresh"></i></a>
                                        </div>
                                    </div>
                                    <div class="pro-details-meta">
                                        <span>دسته بندی :</span>
                                        <ul>
                                            <li><a href="#">مردانه,</a></li>
                                            <li><a href="#">پالتو</a></li>
                                        </ul>
                                    </div>
                                    <div class="pro-details-meta">
                                        <span>تگ ها :</span>
                                        <ul>
                                            <li><a href="#">لباس, </a></li>
                                            <li><a href="#">Furniture,</a></li>
                                            <li><a href="#">Electronic</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5 col-sm-12 col-xs-12">
                                <div class="tab-content quickview-big-img">
                                    <div id="pro-1" class="tab-pane fade show active">
                                        <img src="assets/img/product/quickview-l1.svg" alt="" />
                                    </div>
                                    <div id="pro-2" class="tab-pane fade">
                                        <img src="assets/img/product/quickview-l2.svg" alt="" />
                                    </div>
                                    <div id="pro-3" class="tab-pane fade">
                                        <img src="assets/img/product/quickview-l3.svg" alt="" />
                                    </div>
                                    <div id="pro-4" class="tab-pane fade">
                                        <img src="assets/img/product/quickview-l2.svg" alt="" />
                                    </div>
                                </div>
                                <!-- Thumbnail Large Image End -->
                                <!-- Thumbnail Image End -->
                                <div class="quickview-wrap mt-15">
                                    <div class="quickview-slide-active owl-carousel nav nav-style-2" role="tablist">
                                        <a class="active" data-toggle="tab" href="#pro-1"><img
                                                src="assets/img/product/quickview-s1.svg" alt="" /></a>
                                        <a data-toggle="tab" href="#pro-2"><img
                                                src="assets/img/product/quickview-s2.svg" alt="" /></a>
                                        <a data-toggle="tab" href="#pro-3"><img
                                                src="assets/img/product/quickview-s3.svg" alt="" /></a>
                                        <a data-toggle="tab" href="#pro-4"><img
                                                src="assets/img/product/quickview-s2.svg" alt="" /></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->
    </div>
@endsection
