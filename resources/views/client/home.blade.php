
@extends('client.layout.master')


@section('content')

    <main class="main">
        <div class="page-content">
            <section class="intro-section">
                <div dir="ltr" class="owl-carousel owl-theme row owl-dot-inner owl-dot-white intro-slider animation-slider cols-1 gutter-no" data-owl-options="{
                        'nav': false,
                        'dots': true,
                        'loop': false,
                        'items': 1,
                        'autoplay': false,
                        'autoplayTimeout': 8000
                    }">
                    @foreach($sliders as $slider)
                        <div class="banner banner-fixed video-banner intro-slide3" style="background-color: #dddee0;">
                            <figure>
                                <img src="{{str_replace('public','/storage',$slider->image)}}" alt="intro-banner" width="1903" height="630" style="background-color: #d8d9d9;" />
                            </figure>
                            <div class="container">
                                <div class="banner-content x-50 y-50 text-center">
                                    <h4 class="banner-subtitle text-white text-uppercase mb-3 ls-normal slide-animate" data-animation-options="{'name': 'fadeIn', 'duration': '.7s'}">
                                        {{$slider->subtitle}}</h4>
                                    <h2 class="banner-title mb-3 text-white font-weight-bold text-uppercase ls-m slide-animate" data-animation-options="{'name': 'fadeInUp', 'duration': '.7s', 'delay': '.5s'}">
                                        {{$slider->title}}</h2>
                                    <p class="slide-animate mb-7 text-white ls-s font-primary " data-animation-options="{'name': 'fadeInUp', 'duration': '1s', 'delay': '.8s'}">
                                        {{$slider->text}}</p>
                                    <a href="{{$slider->link}}" class="btn btn-dark btn-rounded slide-animate mb-1" data-animation-options="{'name': 'fadeInLeft', 'duration': '1s', 'delay': '1.5s'}">
                                        <i class="d-icon-arrow-left"></i>همین الان خرید کنید</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="banner banner-fixed intro-slide1" style="background-color: #46b2e8;">
                        <figure>
                            <img src="/client/images/demos/demo1/slides/slide1.jpg" alt="intro-banner" width="1903" height="630" style="background-color: #34ace5;" />
                        </figure>
                        <div class="container">
                            <div class="banner-content y-50">
                                <h4 class="banner-subtitle font-weight-bold ls-l">

                                    <span class="d-inline-block label-star bg-white text-primary slide-animate" data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.4s'}">یک کالای رایگان</span>
                                    <span class="d-inline-block slide-animate" data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.2s'}">با هر دو خرید</span>
                                </h4>
                                <h2 class="banner-title font-weight-bold text-white lh-1 ls-md slide-animate" data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                    ترند ترین</h2>
                                <h3 class="font-weight-normal lh-1 ls-l text-white slide-animate" data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                    کالکشن ها</h3>
                                <p class="slide-animate text-white ls-s mb-7" data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                                    ارسال رایگان برای خرید های بالای 300 هزار تومن</p>
                                <a href="shop.html" class="btn btn-dark btn-rounded slide-animate" data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1s', 'delay': '1.8s'}"><i class="d-icon-arrow-left"></i>همین الان خرید کنید</a>
                            </div>
                        </div>
                    </div>
                    <div class="banner banner-fixed intro-slide2" style="background-color: #dddee0;">
                        <figure>
                            <img src="/client/images/demos/demo1/slides/slide2.jpg" alt="intro-banner" width="1903" height="630" style="background-color: #d8d9d9;" />
                        </figure>
                        <div class="container">
                            <div class="banner-content y-50 ml-auto text-right">
                                <h4 class="banner-subtitle ls-s mb-1 slide-animate" data-animation-options="{'name': 'fadeInUp', 'duration': '.7s'}"><span class="d-block text-uppercase mb-2">به زودی</span><strong class="font-weight-semi-bold ls-m">سالگرد افتتاح فروشگاه</strong></h4>
                                <h2 class="banner-title mb-2 d-inline-block font-weight-bold text-primary slide-animate" data-animation-options="{'name': 'fadeInRight', 'duration': '1.2s', 'delay': '.5s'}">
                                    تخفیف</h2>
                                <p class="slide-animate font-primary ls-s text-dark mb-4" data-animation-options="{'name': 'fadeInUp', 'duration': '1s', 'delay': '1.2s'}">
                                    تخفیف بیش از 40% روی تمامی اجناس <br/>خرید آنلاین &amp; ارسال رایگان برای خرید های بالای 500هزار تومان</p>
                                <a href="shop.html" class="btn btn-dark btn-rounded slide-animate" data-animation-options="{'name': 'fadeInUp', 'duration': '1s', 'delay': '1.4s'}"><i class="d-icon-arrow-left"></i>همین الان
                                    خرید کنید</a>
                            </div>
                        </div>
                    </div>


                </div>
                <div dir="ltr" class="container mt-6 appear-animate">
                    <div class="service-list">
                        <div class="owl-carousel owl-theme row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{
                                    'items': 3,
                                    'nav': false,
                                    'dots': false,
                                    'loop': true,
                                    'autoplay': true,
                                    'autoplayTimeout': 5000,
                                    'responsive': {
                                        '0': {
                                            'items': 1
                                        },
                                        '576': {
                                            'items': 2
                                        },
                                        '768': {
                                            'items': 3,
                                            'loop': false
                                        }
                                    }
                                }">
                            <div dir="rtl" class="icon-box icon-box-side icon-box1 appear-animate" data-animation-options="{
                                        'name': 'fadeInRightShorter',
                                        'delay': '.3s'
                                    }">
                                <i class="icon-box-icon d-icon-truck"></i>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title text-capitalize ls-normal lh-1">خرید آسان &amp;
                                        امن
                                    </h4>
                                    <p class="ls-s lh-1">ارسال رایگان برای خرید های بالای 300 هزار تومان</p>
                                </div>
                            </div>
                            <div dir="rtl" class="icon-box icon-box-side icon-box2 appear-animate" data-animation-options="{
                                        'name': 'fadeInRightShorter',
                                        'delay': '.4s'
                                    }">
                                <i class="icon-box-icon d-icon-service"></i>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title text-capitalize ls-normal lh-1">پستیبانی 24 ساعته
                                    </h4>
                                    <p class="ls-s lh-1">دسترسی فوری به پشتیبانی</p>
                                </div>
                            </div>
                            <div dir="rtl" class="icon-box icon-box-side icon-box3 appear-animate" data-animation-options="{
                                        'name': 'fadeInRightShorter',
                                        'delay': '.5s'
                                    }">
                                <i class="icon-box-icon d-icon-secure"></i>
                                <div class="icon-box-content">
                                    <h4 class="icon-box-title text-capitalize ls-normal lh-1">خرید کاملا ایمن و راحت
                                    </h4>
                                    <p class="ls-s lh-1"> خرید با درگاه پرداخت امن شاپرک</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pt-10 mt-7 appear-animate" data-animation-options="{
                    'delay': '.3s'
                }">
                <div class="container">
                    <h2 class="title title-center mb-5"> دسته بندی ها</h2>
                    <div class="row">
                        <div class="col-xs-6 col-lg-3 mb-4">
                            <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                                <a href="shop.html">
                                    <figure class="category-media">
                                        <img src="/client/images/categories/category1.jpg" alt="category" width="280" height="280" style="background-color: #8c8c8d;" />
                                    </figure>
                                </a>
                                <div class="category-content">
                                    <h4 class="category-name font-weight-bold ls-l"><a href="shop.html">مردانه</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-lg-3 mb-4">
                            <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                                <a href="shop.html">
                                    <figure class="category-media">
                                        <img src="/client/images/categories/category2.jpg" alt="category" width="280" height="280" style="background-color: #bcbdb7;" />
                                    </figure>
                                </a>
                                <div class="category-content">
                                    <h4 class="category-name font-weight-bold ls-l"><a href="shop.html">اکسسوری</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-lg-3 mb-4">
                            <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                                <a href="shop.html">
                                    <figure class="category-media">
                                        <img src="/client/images/categories/category3.jpg" alt="category" width="280" height="280" style="background-color: #ececef;" />
                                    </figure>
                                </a>
                                <div class="category-content">
                                    <h4 class="category-name font-weight-bold ls-l"><a href="shop.html">زنانه</a></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-lg-3 mb-4">
                            <div class="category category-default1 category-absolute banner-radius overlay-zoom">
                                <a href="shop.html">
                                    <figure class="category-media">
                                        <img src="/client/images/categories/category4.jpg" alt="category" width="280" height="280" style="background-color: #e8eded;" />
                                    </figure>
                                </a>
                                <div class="category-content font-weight-bold">
                                    <h4 class="category-name font-weight-bold ls-l"><a href="shop.html">لوازم آرایشی بهداشتی</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="product-wrapper container appear-animate mt-6 mt-md-10 pt-4 pb-8" data-animation-options="{
                    'delay': '.3s'
                }">
                <h2 class="title title-center mb-5">پر فروش ترین ها</h2>
                <div dir="ltr" class="owl-carousel owl-theme row owl-nav-full cols-2 cols-md-3 cols-lg-4" data-owl-options="{
                        'items': 5,
                        'nav': false,
                        'loop': false,
                        'dots': true,
                        'margin': 20,
                        'responsive': {
                            '0': {
                                'items': 2
                            },
                            '768': {
                                'items': 3
                            },
                            '992': {
                                'items': 4,
                                'dots': false,
                                'nav': true
                            }
                        }
                    }">
                    {{--<div class="product text-center">
                        <figure class="product-media">
                            <a href="product.php">
                                <img src="/client/uploads/-" alt="Blue Pinafore Denim Dress" width="280" height="315" style="background-color: #f2f3f5;" />
                            </a>
                            <div class="product-label-group">

                                <label class="product-label label-new">جدید</label>
                                <span class="product-label label-sale">-% تخفیف</span>

                            </div>
                            <div class="product-action-vertical">

                                <form method="post" action="includes/addwishlist_process.php">
                                    <input type="hidden" name="prid" value="-">

                                    <button type="submit" class="btn-product-icon" title="Add to wishlist"
                                            ><i class="d-icon-heart"></i>
                                    </button>

                                </form>
                                <button type="submit" class="btn-product-icon" title="Add to wishlist" onclick="alert('برای اضافه کردن محصول به لیست مورد علاقه ها ابتدا باید وارد شوید')"
                                ><i class="d-icon-heart"></i></button>
                            </div>
                            <div class="product-action">
                                <a href="product.php" class="btn-product ">مشاهده</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="category.php">-</a>
                            </div>
                            <h3 class="product-name">
                                <a href="product.php">-</a>
                            </h3>

                            <div dir="rtl" class="product-price">- تومان</div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:80%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>

                                <a dir="rtl" href="product.php" class="rating-reviews">( 0 نظر ثبت شده )</a>
                                <a href="product.php" class="rating-reviews">( نظری ثبت نشده )</a>
                            </div>
                        </div>
                    </div>--}}
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="/client/images/demos/demo1/products/product1.jpg" alt="Blue Pinafore Denim Dress" width="280" height="315" style="background-color: #f2f3f5;" />
                            </a>
                            <div class="product-label-group">
                                <label class="product-label label-new">جدید</label>
                            </div>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">مشاهده</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="shop-grid-3cols.html">پوشاک</a>
                            </div>
                            <h3 class="product-name">
                                <a href="product.html">شومیز آبی تابستانه</a>
                            </h3>
                            <div class="product-price">
                                <span class="price">140000 تومان</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:100%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product.html" class="rating-reviews">( 12 یازدید )</a>
                            </div>
                        </div>
                    </div>
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="/client/images/demos/demo1/products/product2.jpg" alt="Blue Pinafore Denim Dress" width="280" height="315" style="background-color: #f2f3f5;" />
                            </a>
                            <div class="product-label-group">
                                <span class="product-label label-sale">25% تخفیف</span>
                            </div>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">مشاهده</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="shop-grid-3cols.html">کیف و کوله پشتی</a>
                            </div>
                            <h3 class="product-name">
                                <a href="product.html">کوله تک بند</a>
                            </h3>
                            <div class="product-price">
                                <ins class="new-price">120000 تومان</ins><del class="old-price">160000 تومان</del>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:60%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product.html" class="rating-reviews">( 8 بازدید )</a>
                            </div>
                        </div>
                    </div>
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="/client/images/demos/demo1/products/product3.jpg" alt="Blue Pinafore Denim Dress" width="280" height="315" style="background-color: #f2f3f5;" />
                            </a>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">مشاهده</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="shop-grid-3cols.html">پوشاک</a>
                            </div>
                            <h3 class="product-name">
                                <a href="product.html">تیشرت نخ پنبه سرمه ای</a>
                            </h3>
                            <div class="product-price">
                                <span class="price">78000 تومان</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:40%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product.html" class="rating-reviews">( 2 مشاهده )</a>
                            </div>
                        </div>
                    </div>
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="/client/images/demos/demo1/products/product4.jpg" alt="Blue Pinafore Denim Dress" width="280" height="315" style="background-color: #f2f3f5;" />
                            </a>
                            <div class="product-label-group">
                                <label class="product-label label-new">جدید</label>
                            </div>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">مشاهده</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="shop-grid-3cols.html">پوشاک</a>
                            </div>
                            <h3 class="product-name">
                                <a href="product.html">اورکت قرمز زنانه</a>
                            </h3>
                            <div class="product-price">
                                <span class="price">184000 تومان</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:80%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product.html" class="rating-reviews">( 6 مشاهده )</a>
                            </div>
                        </div>
                    </div>
                    <div class="product text-center">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="/client/images/demos/demo1/products/product2.jpg" alt="Blue Pinafore Denim Dress" width="280" height="315" style="background-color: #f2f3f5;" />
                            </a>
                            <div class="product-label-group">
                                <span class="product-label label-sale">25% تخفیف</span>
                            </div>
                            <div class="product-action-vertical">
                                <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><i class="d-icon-heart"></i></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product btn-quickview" title="Quick View">مشاهده</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                <a href="shop-grid-3cols.html">کیف و کوله پشتی</a>
                            </div>
                            <h3 class="product-name">
                                <a href="product.html">کوله تک بند</a>
                            </h3>
                            <div class="product-price">
                                <ins class="new-price">120000 تومان</ins><del class="old-price">160000 تومان</del>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:60%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="product.html" class="rating-reviews">( 8 بازدید )</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="banner-group mt-4">
                <div class="container">
                    <h2 class="title d-none">Banner Group</h2>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="banner banner-3 overlay-zoom banner-fixed banner-radius content-middle appear-animate" data-animation-options="{'name': 'fadeInLeftShorter', 'duration': '1s', 'delay': '.2s'}">
                                <figure>
                                    <img src="/client/images/demos/demo1/banners/banner1.jpg" alt="banner" width="380" height="207" style="background-color: #836648;" />
                                </figure>
                                <div class="banner-content">
                                    <h3 class="banner-title text-white mb-1">برای آقایان</h3>
                                    <h4 class="banner-subtitle text-uppercase font-weight-normal text-white">
                                        شروع قیمت از 30 هزار تومان
                                    </h4>
                                    <hr class="banner-divider">
                                    <a href="shop.html" class="btn btn-white btn-link btn-underline">همین الان خرید کنید<i class="d-icon-arrow-left"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-4 order-lg-auto order-sm-last">
                            <div class="banner banner-4 banner-fixed banner-radius overlay-effect2 content-middle content-center appear-animate" data-animation-options="{'name': 'fadeIn', 'duration': '1s', 'delay': '.2s'}">
                                <figure>
                                    <img src="/client/images/demos/demo1/banners/banner2.jpg" alt="banner" width="350" height="177" style="background-color: #1e1e1e;" />
                                </figure>
                                <div class="banner-content d-flex align-items-center w-100 text-left">
                                    <div class="mr-auto mb-4 mb-md-0">
                                        <h4 class="banner-subtitle text-white">
                                            تا 20% تخفیف<br><span class="ls-l">تخفیف</span>
                                        </h4>
                                        <h3 class="banner-title text-primary font-weight-bold lh-1 mb-0">جمعه سیاه</h3>
                                    </div>
                                    <a href="shop.html" class="btn btn-primary btn-outline btn-rounded font-weight-bold text-white">مشاهده فروشگاه<i class="d-icon-arrow-left"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="banner overlay-zoom banner-5 banner-fixed banner-radius content-middle appear-animate" data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.2s'}">
                                <figure>
                                    <img src="/client/images/demos/demo1/banners/banner3.jpg" alt="banner" width="380" height="207" style="background-color: #97928b;" />
                                </figure>
                                <div class="banner-content">
                                    <h3 class="banner-title text-white mb-1">پوشاک زنانه</h3>
                                    <h4 class="banner-subtitle text-uppercase font-weight-normal text-white">30% تخفیف
                                    </h4>
                                    <hr class="banner-divider">
                                    <a href="shop.html" class="btn btn-white btn-link btn-underline">همین الان خرید کنید<i class="d-icon-arrow-left"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="product-wrapper mt-6 mt-md-10 pt-4 mb-10 pb-2 container appear-animate" data-animation-options="{
                    'delay': '.6s'
                }" style="animation-duration: 1.2s;">
                <div class="container mt-7 mb-4">
                    <h2 class="title title-center mb-2">دسته بندی ویژه</h2>
                    <div class="title-wrapper d-flex justify-content-between flex-wrap pt-6 appear-animate" data-animation-options="{'name': 'fadeIn'}">
                        <h2 class="title d-block text-left mr-4">{{$featuredCategory->title}}</h2>
                        <div class="tab tab-nav-boxed">
                            <ul class="nav nav-tabs border-no">
                                @foreach($featuredCategory->children as $subCategory)
                                    <li class="nav-item">
                                        <a href="#tab-{{$subCategory->id}}" class="nav-link active">{{$subCategory->title}}</a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                    <div class="tab-content appear-animate" data-animation-options="{'name': 'fadeIn'}">
                        @foreach($featuredCategory->children as $subCategory)
                            <div class="tab-pane active" id="tab-{{$subCategory->id}}">
                                <div class="owl-carousel owl-theme row cols-xl-5 cols-lg-4 cols-md-3 cols-2" data-owl-options="{
                    'nav': false,
                    'dots': true,
                    'margin': 20,
                    'responsive': {
'0': {
    'items': 2
},
'576': {
    'items': 2
},
'768': {
    'items': 3
},
'992': {
    'items': 4
},
'1200': {
    'items': 5
}
                    }
                }">
                                    @foreach($subCategory->products as $product)
                                        <div class="product-wrap">
                                            <div class="product product-border text-center">
                                                <figure class="product-media">
                                                    <a href="{{route('client.products.show',$product)}}">
                                                        <img src="{{str_replace('public','/storage',$product->image)}}" alt="{{$product->name}}" width="260" height="293">
                                                        <img src="{{str_replace('public','/storage',$product->image)}}" alt="{{$product->name}}" width="260" height="293">
                                                    </a>
                                                    <div class="product-action-vertical">
                                                        <a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>
                                                        <a id="like-{{$product->id}}" class="btn-product-icon btn-wishlist @if($product->is_liked) like @endif debug" title=" افزودن به مورد علاقه ها" onclick="like({{$product->id}})"><i class="d-icon-heart"></i></a>
                                                    </div>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-name">
                                                        <a href="{{route('client.products.show',$product)}}">{{$product->name}}</a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <span class="price">{{number_format($product->cost_with_discount)}}</span>
                                                    </div>
                                                    <div class="ratings-container">
                                                        <div class="ratings-full">
                                                            <span class="ratings" style="width:40%"></span>
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <a href="product.html" class="rating-reviews">( {{$product->comments->count()}} reviews
                                                            )</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <section class="banner banner-background parallax text-center" data-option="{'offset': -60}" data-image-src="/client/images/demos/demo1/parallax.jpg" style="background-color: #2d2f33;">
                <div class="container">
                    <div class="banner-content appear-animate" data-animation-options="{'name': 'blurIn', 'duration': '1s', 'delay': '.2s'}">
                        <h4 class="banner-subtitle text-white font-weight-bold ls-l">
                            <span class="d-inline-block label-star bg-dark text-primary ml-4 mr-2">30%
Off</span>
                        </h4>
                        <h3 class="banner-title font-weight-bold text-white">حراج تابستانه</h3>
                        <p class="text-white ls-s">ارسال رایگان برای خرید های بالای 500 هزار تومان</p>
                        <a href="shop.php" class="btn btn-primary btn-rounded btn-icon-right">همین الان خرید کنید<i class="d-icon-arrow-left"></i></a>
                    </div>
                </div>
            </section>
            <section class="blog-post-wrapper mt-6 mt-md-10 pt-7 appear-animate" data-animation-options="{'name': 'fadeIn', 'duration': '1s'}">
                <div class="container">
                    <h2 class="title title-center">Featured Articles</h2>
                    <div class="owl-carousel owl-theme post-slider row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{
                            'nav': false,
                            'dots': true,
                            'margin': 20,
                            'responsive': {
                                '0': {
                                    'items': 1
                                },
                                '576': {
                                    'items': 2
                                },
                                '992': {
                                    'items': 3,
                                    'dots': false
                                }
                            }
                        }">
                        <div class="blog-post mb-4">
                            <article class="post post-frame overlay-zoom">
                                <figure class="post-media">
                                    <a href="post-single.html">
                                        <img src="/client/images/blog/frame/1.jpg" alt="Blog post" width="340" height="206" style="background-color: #919fbc;" />
                                    </a>
                                    <div class="post-calendar">
                                        <span class="post-day">19</span>
                                        <span class="post-month">JAN</span>
                                    </div>
                                </figure>
                                <div class="post-details">
                                    <h4 class="post-title"><a href="post-single.html">20% Off Coupon for Cyber
                                        Week</a></h4>
                                    <p class="post-content">Lorem ipsum dolor sit amet,onadipiscing elit, sedsd
                                        doeiu smod tempo...</p>
                                    <a href="post-single.html" class="btn btn-primary btn-link btn-underline">Read
                                        More<i class="d-icon-arrow-left"></i></a>
                                </div>
                            </article>
                        </div>
                        <div class="blog-post mb-4">
                            <article class="post post-frame overlay-zoom">
                                <figure class="post-media">
                                    <a href="post-single.html">
                                        <img src="/client/images/blog/frame/2.jpg" alt="Blog post" width="340" height="206" style="background-color: #e5e6e6;" />
                                    </a>
                                    <div class="post-calendar">
                                        <span class="post-day">19</span>
                                        <span class="post-month">JAN</span>
                                    </div>
                                </figure>
                                <div class="post-details">
                                    <h4 class="post-title"><a href="post-single.html">20% Off Coupon for Cyber
                                        Week</a></h4>
                                    <p class="post-content">Lorem ipsum dolor sit amet,onadipiscing elit, sedsd
                                        doeiu smod tempo...</p>
                                    <a href="post-single.html" class="btn btn-primary btn-link btn-underline">Read
                                        More<i class="d-icon-arrow-left"></i></a>
                                </div>
                            </article>
                        </div>
                        <div class="blog-post mb-4">
                            <article class="post post-frame overlay-zoom">
                                <figure class="post-media">
                                    <a href="post-single.html">
                                        <img src="/client/images/blog/frame/3.jpg" alt="Blog post" width="340" height="206" style="background-color: #eaeef1;" />
                                    </a>
                                    <div class="post-calendar">
                                        <span class="post-day">19</span>
                                        <span class="post-month">JAN</span>
                                    </div>
                                </figure>
                                <div class="post-details">
                                    <h4 class="post-title"><a href="post-single.html">20% Off Coupon for Cyber
                                        Week</a></h4>
                                    <p class="post-content">Lorem ipsum dolor sit amet,onadipiscing elit, sedsd
                                        doeiu smod tempo...</p>
                                    <a href="post-single.html" class="btn btn-primary btn-link btn-underline">Read
                                        More<i class="d-icon-arrow-left"></i></a>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
            <section class="mt-2 pb-6 pt-10 pb-md-10 appear-animate" data-animation-options="{
                    'delay': '.3s'
                }">
                <h2 class="title d-none">برند های ما</h2>
                <div class="container">
                    <div dir="ltr" class="owl-carousel owl-theme row brand-carousel cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2" data-owl-options="{
                            'nav': false,
                            'dots': false,
                            'autoplay': true,
                            'margin': 20,
                            'loop': true,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '576': {
                                    'items': 3
                                },
                                '768': {
                                    'items': 4
                                },
                                '992': {
                                    'items': 5
                                },
                                '1200': {
                                    'items': 6
                                }
                            }
                        }">
                        @foreach($brands as $brand)
                            <figure><img src="{{str_replace('public', '/storage', $brand->image)}}" alt="{{$brand->name}}" width="180" height="100" />
                            </figure>
                        @endforeach

                    </div>
                </div>
            </section>
            <section class="product-widget-wrapper pb-2 pb-md-10 appear-animate">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 mb-4">
                            <div class="widget widget-products appear-animate" data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'delay': '.5s'
                                }">
                                <h4 class="widget-title border-no lh-1 font-weight-bold">Sale Products</h4>
                                <div class="products-col">
                                    <div class="product product-list-sm">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="/client/images/demos/demo1/products/product10.jpg" alt="product" width="100" height="114" style="background-color: #f2f3f5;" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product.html">Women’s Beautiful
                                                    Headgear</a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price">$78.24</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:40%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product product-list-sm">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="/client/images/demos/demo1/products/product11.jpg" alt="product" width="100" height="114" style="background-color: #f2f3f5;" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product.html">Hand Electric Cell</a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price">$26.00</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product product-list-sm">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="/client/images/demos/demo1/products/product12.jpg" alt="product" width="100" height="114" style="background-color: #f2f3f5;" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product.html">Women Hempen Hood
                                                    a Mourner</a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price">$30.00</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:20%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--<div class="col-lg-3 col-sm-6 mb-4">
                            <div class="widget widget-products appear-animate" data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'delay': '.3s'
                                }">
                                <h4 class="widget-title border-no lh-1 font-weight-bold">جدید ترین محصولات</h4>
                                <div class="products-col">
                                    <div class="product product-list-sm">
                                        <figure class="product-media pl-2">
                                            <a href="product.php">
                                                <img src="/client/uploads/" alt="-" width="100" height="114" style="background-color: #f2f3f5;" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product.php">-</a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price">- تومان</span>

                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:80%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>--}}
                        <div class="col-lg-3 col-sm-6 mb-4">
                            <div class="widget widget-products appear-animate" data-animation-options="{
                                    'name': 'fadeInLeftShorter',
                                    'delay': '.3s'
                                }">
                                <h4 class="widget-title border-no lh-1 font-weight-bold">Latest Products</h4>
                                <div class="products-col">
                                    <div class="product product-list-sm">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="/client/images/demos/demo1/products/product13.jpg" alt="product" width="100" height="114" style="background-color: #f2f3f5;" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product.html">Fashionable Orginal
                                                    Trucker</a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price">$78.64</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:40%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product product-list-sm">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="/client/images/demos/demo1/products/product14.jpg" alt="product" width="100" height="114" style="background-color: #f2f3f5;" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product.html">Men Summer Sneaker</a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price">$79.45</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:60%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product product-list-sm">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="/client/images/demos/demo1/products/product15.jpg" alt="product" width="100" height="114" style="background-color: #f2f3f5;" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product.html">Season Sports Cap</a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price">$64.27</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:10%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-4">
                            <div class="widget widget-products appear-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.3s'
                                }">
                                <h4 class="widget-title border-no lh-1 font-weight-bold">Best of the Week</h4>
                                <div class="products-col">
                                    <div class="product product-list-sm">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="/client/images/demos/demo1/products/product16.jpg" alt="product" width="100" height="114" style="background-color: #f2f3f5;" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product.html">Blue Sports Shoes</a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price">$36.00</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:10%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product product-list-sm">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="/client/images/demos/demo1/products/product17.jpg" alt="product" width="100" height="114" style="background-color: #f2f3f5;" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product.html">Fashion Handbag</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">$53.99</ins><del class="old-price">$67.99</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:100%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product product-list-sm">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="/client/images/demos/demo1/products/product18.jpg" alt="product" width="100" height="114" style="background-color: #f2f3f5;" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product.html">Women’s Beautiful
                                                    Headgear</a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price">$82.23</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:60%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-4">
                            <div class="widget widget-products appear-animate" data-animation-options="{
                                    'name': 'fadeInRightShorter',
                                    'delay': '.5s'
                                }">
                                <h4 class="widget-title border-no lh-1 font-weight-bold">Popular</h4>
                                <div class="products-col">
                                    <div class="product product-list-sm">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="/client/images/demos/demo1/products/product19.jpg" alt="product" width="100" height="114" style="background-color: #f2f3f5;" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product.html">Fashion Electric Wrist
                                                    Watch</a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price">$270.99</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:40%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product product-list-sm">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="/client/images/demos/demo1/products/product20.jpg" alt="product" width="100" height="114" style="background-color: #f2f3f5;" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product.html">Mackintosh Poket
                                                    Backpack</a>
                                            </h3>
                                            <div class="product-price">
                                                <ins class="new-price">$125.99</ins><del class="old-price">$160.99</del>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:60%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product product-list-sm">
                                        <figure class="product-media">
                                            <a href="product.html">
                                                <img src="/client/images/demos/demo1/products/product21.jpg" alt="product" width="100" height="114" style="background-color: #f2f3f5;" />
                                            </a>
                                        </figure>
                                        <div class="product-details">
                                            <h3 class="product-name">
                                                <a href="product.html">Hempen Hood a
                                                    Mourner
                                                </a>
                                            </h3>
                                            <div class="product-price">
                                                <span class="price">$12.83</span>
                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:10%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

@endsection


@section('scripts')

    <script>

        $(document).ready(function (){

            $('#register_btn').click(function (e){

                e.preventDefault();

                var name = $('#register-name').val();
                var email = $('#register-email').val();
                var pass1 = $('#register-password1').val();
                var pass2 = $('#register-password2').val();

                if ( name != '' && email != '' && pass1 != ''){

                    if ($('#register-agree').is(':checked')) {

                        if (pass1 == pass2){
                            $('#register-form').submit();

                        }else{
                            alert('رمز ها یکسان نیستند');
                        }

                    }else{
                        alert('لطفا شرایط و قوانین را مطالعه کرده و تیک بزنید');
                    }


                }else{
                    alert('فیلد های ستاره دار حتما باید پر شوند')
                }


            });

            @if(isset($login))

            $(".login-dropdown").addClass("opened");

            @endif

        });

    </script>

@endsection


