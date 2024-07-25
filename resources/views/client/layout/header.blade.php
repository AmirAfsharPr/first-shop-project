<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>فروشگاه افشار</title>
    <meta name="keywords" content="لباس مردانه, لباس زنانه , پوشاک , پیراهن , شلوار , تیشرت ," />
    <meta name="description" content="مرجع بروز ترین و با کیفیت ترین لباس های زنانه و مردانه">
    <meta name="author" content="امیر افشار">

    <link rel="icon" type="image/png" href="/client/images/icons/favicon.png">

    <link rel="preload" href="/client/fonts/riode.ttf" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/client/vendor/fontawesome-free/webfonts/fa-solid-900.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="/client/vendor/fontawesome-free/webfonts/fa-brands-400.woff2" as="font" type="font/woff2" crossorigin="anonymous">
    <script>
        WebFontConfig = {
            google: { families: [ 'Poppins:300,400,500,600,700,800' ] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[ 0 ];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>
    <link rel="stylesheet" type="text/css" href="/client/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="/client/vendor/animate/animate.min.css">

    <link rel="stylesheet" type="text/css" href="/client/vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="/client/vendor/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/client/vendor/sticky-icon/stickyicon.css">
    <link rel="stylesheet" type="text/css" href="/client/rtl/css/css-rtl.css">
    <link rel="stylesheet" type="text/css" href="/client/css/borderless.css">

    <link rel="stylesheet" type="text/css" href="/client/rtl/css/demo1-rtl.min.css">
</head>
<body class="home">
<div class="page-wrapper">

    <header class="header">
        <div class="header-top">
            <div class="container">
                <div class="header-left">
                    <p class="welcome-msg">به فروشگاه افشار خوش آمدید</p>
                </div>
                <div class="header-right">

                    <span class="divider"></span>
                    <a href="contact-us.html" class="contact d-lg-show"><i class="d-icon-map"></i>تماس با ما</a>
                    <a href="#signin" class="login-toggle link-to-tab d-md-show"><i class="d-icon-user"></i>ثبت نام</a>
                    <span class="delimiter">/</span>
                    <a href="#register" class="register-toggle link-to-tab d-md-show ml-0">ورود</a>

                    <a href="profile.php" class="contact d-lg-show"><i class="d-icon-user"></i> عزیز. خوش آمدید | حساب کاربری</a>


                    <div class="dropdown login-dropdown off-canvas">
                        <div class="canvas-overlay"></div>

                        <div class="dropdown-box scrollable">
                            <div class="login-popup">
                                <div class="form-box">
                                    <div class="tab tab-nav-simple tab-nav-boxed form-tab">
                                        <ul class="nav nav-tabs nav-fill align-items-center border-no justify-content-center mb-5" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active border-no lh-1 ls-normal" href="#signin">ورود</a>
                                            </li>
                                            <li class="delimiter">  &  </li>
                                            <li class="nav-item">
                                                <a class="nav-link border-no lh-1 ls-normal" href="#register">ثبت نام</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="signin">
                                                <form method="post" action="includes/loginprocess.php">
                                                    <div class="form-group mb-3">
                                                        <input type="text" class="form-control" id="singin-email" name="email_user" placeholder="ایمیل ... *" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" id="singin-password" name="password_user" placeholder="رمز عبور ... *" required>
                                                    </div>
                                                    <div class="form-footer">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox" class="custom-checkbox" id="signin-remember" name="signin-remember">
                                                            <label class="form-control-label" for="signin-remember">مرا بخاطر بسپار</label>
                                                        </div>
                                                        <a href="#" class="lost-link">فراموشی رمز عبور</a>
                                                    </div>
                                                    <button class="btn btn-dark btn-block btn-rounded" type="submit">ورود</button>
                                                </form>
                                            </div>
                                            <div class="tab-pane" id="register">
                                                <form id="register-form" method="post" action="includes/registerprocess.php">
                                                    <div class="form-group mb-3">
                                                        <input type="text" class="form-control" id="register-name" name="name_user" placeholder="نام خود را وارد کنید ... *" required>
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <input type="email" class="form-control" id="register-email" name="email_user" placeholder="ایمیل خود را وارد کنید ... *" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" id="register-password1" name="password_user" placeholder="رمز عبور خود را وارد کنید ... *" required minlength="6">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="password" class="form-control" id="register-password2" name="password_user" placeholder="تکرار رمز عبور خود را وارد کنید ... *" required>
                                                    </div>
                                                    <div class="form-footer">
                                                        <div class="form-checkbox">
                                                            <input type="checkbox" class="custom-checkbox" id="register-agree" name="register-agree" required>
                                                            <label class="form-control-label" for="register-agree">شرایط و قوانین را پذیرفته ام</label>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-dark btn-block btn-rounded" type="submit" id="register_btn" name="register">ثبت نام</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button title="Close (Esc)" type="button" class="mfp-close"><span>×</span></button>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="header-middle sticky-header fix-top sticky-content">
            <div class="container">
                <div class="header-left">
                    <a href="#" class="mobile-menu-toggle">
                        <i class="d-icon-bars2"></i>
                    </a>
                    <a href="index.php" class="logo">
                        <img src="/client/images/logo-afshar.png" alt="logo" width="153" height="44" />
                    </a>

                    <div class="header-search hs-simple">
                        <form action="search.php" class="input-wrapper" method="get">
                            <input type="text" class="form-control" name="search" autocomplete="off" placeholder="جست و جو در محصولات ..." required />
                            <button class="btn btn-search" type="submit" title="submit-button">
                                <i class="d-icon-search"></i>
                            </button>
                        </form>
                    </div>

                </div>
                <div class="header-right">
                    <a href="tel:#" class="icon-box icon-box-side">
                        <div class="icon-box-icon mr-0 mr-lg-2">
                            <i class="d-icon-phone"></i>
                        </div>
                        <div class="icon-box-content d-lg-show">
                            <h4 class="icon-box-title">تماس بگیرید:</h4>
                            <p dir="ltr">+989121234567</p>
                        </div>
                    </a>
                    <span class="divider"></span>
                    <div class="dropdown wishlist wishlist-dropdown off-canvas">
                        <a href="wishlist.html" class="wishlist-toggle">
                            <i class="d-icon-heart"></i>

                        </a>
                        <div class="canvas-overlay"></div>

                        <div class="dropdown-box scrollable">
                            <div class="canvas-header">
                                <h4 class="canvas-title">پسندیده شده</h4>
                                <a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">بستن<i class="d-icon-arrow-left"></i><span class="sr-only">پسندیده شده ها</span></a>
                            </div>
                            <div class="col-12 p-4 text-center height-x3 mt-5">برای مشاهده لیست مورد علاقه ها لطفا ابتدا وارد شوید</div>

                            <div class="products scrollable">
                                <div class="product product-wishlist">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/client/images/wishlist/product-1.jpg" width="100" height="100" alt="product" />
                                        </a>
                                        <button class="btn btn-link btn-close">
                                            <i class="fas fa-times"></i><span class="sr-only">بستن</span>
                                        </button>
                                    </figure>
                                    <div class="product-detail">
                                        <a href="product.html" class="product-name">کوله مشکی دخترانه</a>
                                        <div class="price-box">
                                            <span class="product-price">84000 تومان</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product product-wishlist">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/client/images/wishlist/product-2.jpg" width="100" height="100" alt="product" />
                                        </a>
                                        <button class="btn btn-link btn-close">
                                            <i class="fas fa-times"></i><span class="sr-only">بستن</span>
                                        </button>
                                    </figure>
                                    <div class="product-detail">
                                        <a href="product.html" class="product-name">شال آبی ابریشمی
                                        </a>
                                        <div class="price-box">
                                            <span class="product-price">65000 تومان</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product product-wishlist">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/client/images/wishlist/product-3.jpg" width="100" height="100" alt="product" />
                                        </a>
                                        <button class="btn btn-link btn-close">
                                            <i class="fas fa-times"></i><span class="sr-only">بستن</span>
                                        </button>
                                    </figure>
                                    <div class="product-detail">
                                        <a href="product.html" class="product-name">جین مشکی</a>
                                        <div class="price-box">
                                            <span class="product-price">120000 تومان</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <a href="wishlist.html" class="btn btn-dark wishlist-btn mt-4"><span>برو به مورد علاقه ها</span></a>


                        </div>

                    </div>
                    <span class="divider"></span>
                    <div class="dropdown cart-dropdown type2 off-canvas mr-0 mr-lg-2">

                        <a href="#" class="cart-toggle label-block link">
                            <div class="cart-label d-lg-show">
                                <span class="cart-name">سبد خرید:</span>
                                <span class="cart-price">0 تومان</span>
                            </div>
                            <i class="d-icon-bag"><span class="cart-count">0</span></i>
                        </a>

                        <div class="canvas-overlay"></div>


                        <div class="dropdown-box">


                            <div class="col-12 p-4 text-center height-x3 mt-5 mb-5">برای مشاهده سبد خرید لطفا ابتدا وارد شوید</div>

                            <div class="canvas-header">
                                <h4 class="canvas-title">سبد خرید</h4>
                                <a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">بستن<i class="d-icon-arrow-left"></i><span class="sr-only">سبد خرید</span></a>
                            </div>
                            <div class="products scrollable">
                                <div class="product product-cart">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/client/images/cart/product-1.jpg" alt="product" width="80" height="88" />
                                        </a>
                                        <button class="btn btn-link btn-close">
                                            <i class="fas fa-times"></i><span class="sr-only">بستن</span>
                                        </button>
                                    </figure>
                                    <div class="product-detail">
                                        <a href="product.html" class="product-name">کتونی سفید</a>
                                        <div class="price-box">
                                            <span class="product-quantity">1</span>
                                            <span class="product-price">200000 تومان</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="product product-cart">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="/client/images/cart/product-2.jpg" alt="product" width="80" height="88" />
                                        </a>
                                        <button class="btn btn-link btn-close">
                                            <i class="fas fa-times"></i><span class="sr-only">بستن</span>
                                        </button>
                                    </figure>
                                    <div class="product-detail">
                                        <a href="product.html" class="product-name">کلاه آفتابی مشکی زنانه</a>
                                        <div class="price-box">
                                            <span class="product-quantity">1</span>
                                            <span class="product-price">87000 تومان</span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="cart-total">
                                <label>مجموع سبد خرید:</label>
                                <span class="price">287000 تومان</span>
                            </div>

                            <div class="cart-action">
                                <a href="cart.html" class="btn btn-dark btn-link">مشاهده</a>
                                <a href="checkout.html" class="btn btn-dark"><span>نهایی کردن خرید</span></a>
                            </div>

                            <div class="col-12 p-4 text-center height-x3 mt-5 mb-5">محصولی برای نمایش وچود ندارد</div>
                            <div class="cart-action">
                                <a href="shop.php" class="btn btn-dark"><span>برو به فروشگاه</span></a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom d-lg-show">
            <div class="container">
                <div class="header-left">
                    <nav class="main-nav">
                        <ul class="menu">
                            <li class="active">
                                <a href="index.php">خانه</a>
                            </li>
                            <li>
                                <a href="shop.php">محصولات</a>
                                <div class="megamenu">
                                    <div class="row">
                                        <div class="col-6 col-sm-4 col-md-3">

                                            <h4 class="menu-title">-</h4>
                                            <ul>

                                                <ul>
                                                    <li><a href="category.php">-</a></li>

                                                    <li><a href="category.php">-</a></li>

                                                </ul>

                                            </ul>
                                        </div>

                                            <!--<div class="col-6 col-sm-4 col-md-3 menu-banner menu-banner2 banner banner-fixed">
                                        <figure>
                                            <img src="images/menu/banner-2.jpg" alt="Menu banner" width="221" height="330" />
                                        </figure>
                                        <div class="banner-content x-50 text-center">
                                            <h3 class="banner-title text-white text-uppercase">Sunglasses</h3>
                                            <h4 class="banner-subtitle font-weight-bold text-white mb-0">$23.00
                                                -
                                                $120.00</h4>
                                        </div>
                                    </div>-->

                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="about-us.php">درباره ما</a>
                            </li>
                            <li>
                                <a href="contact-us.php">ارتباط با ما</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>



