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
    <link rel="stylesheet" type="text/css" href="/client/rtl/css/style.min-rtl.css">
    <link rel="stylesheet" type="text/css" href="/client/css/borderless.css">


    <link rel="stylesheet" type="text/css" href="/client/rtl/css/demo1-rtl.min.css">
    <style>
        .likes_count{
            position: absolute;
            left: -6px;
            top: 4px;
            width: 1.5rem;
            height: 1.5rem;
            font-size: 0.9rem;
            line-height: 1.7;
            text-align: center;
            border-radius: 50%;
            background-color: #26c;
            color: #fff;
            z-index: 1;

        }
         .like {
             border-color: #26c;
             color: #fff;
             background-color: #26c;
         }
    </style>
    @yield('links')
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
                    @if(auth()->check())
                        <a href="{{route('client.profile')}}" class="contact d-lg-show"><i class="d-icon-user"></i> {{auth()->user()->name}} عزیز. خوش آمدید | حساب کاربری</a>
                    @else
                        <a href="#signin" class="login-toggle link-to-tab d-md-show"><i class="d-icon-user"></i>ثبت نام</a>
                        <span class="delimiter">/</span>
                        <a href="#register" class="register-toggle link-to-tab d-md-show ml-0">ورود</a>
                    @endif





                    <div class="dropdown login-dropdown off-canvas">
                        <div class="canvas-overlay"></div>

                        <div class="dropdown-box scrollable">
                            @include('client.layout.login')
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

                        <a href="#" class="wishlist-toggle">
                            <i class="d-icon-heart"></i>
                            @auth
                                <span id="likes_count" class="likes_count">{{auth()->user()->likes()->count()}}</span>
                            @endauth


                        </a>
                        <div class="canvas-overlay"></div>

                        <div class="dropdown-box scrollable">
                            <div class="canvas-header">
                                <h4 class="canvas-title">پسندیده شده</h4>
                                <a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">بستن<i class="d-icon-arrow-left"></i><span class="sr-only">پسندیده شده ها</span></a>
                            </div>


                            @auth
                            <div class="products scrollable">
                                @if(auth()->user()->likes()->count() == 0)
                                    <div class="col-12 p-4 text-center height-x3 mt-5">محصولی برای نمایش وجود ندارد</div>
                                @else

                                    @foreach(auth()->user()->likes as $product)
                                        <div class="product product-wishlist">
                                            <figure class="product-media">
                                                <a href="{{route('client.products.show',$product)}}">
                                                    <img src="{{str_replace('public','/storage',$product->image)}}" width="100" height="100" alt="{{$product->name}}" />
                                                </a>
                                                <form action="{{route('client.likes.destroy',$product)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-link btn-close">
                                                        <i class="fas fa-times"></i><span class="sr-only">بستن</span>
                                                    </button>
                                                </form>

                                            </figure>
                                            <div class="product-detail">
                                                <a href="{{route('client.products.show',$product)}}" class="product-name">{{$product->name}}</a>
                                                <div class="price-box">
                                                    <span class="product-price">{{number_format($product->cost)}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                        <a href="{{route('client.likes.index')}}" class="btn btn-dark wishlist-btn mt-4"><span>برو به مورد علاقه ها</span></a>
                                @endif

                            </div>

                            @else
                                <div class="col-12 p-4 text-center height-x3 mt-5">برای مشاهده لیست مورد علاقه ها لطفا ابتدا وارد شوید</div>
                            @endauth


                        </div>

                    </div>
                    <span class="divider"></span>
                    <div class="dropdown cart-dropdown type2 off-canvas mr-0 mr-lg-2">

                        <a href="#" class="cart-toggle label-block link">
                            <div class="cart-label d-lg-show">
                                <span class="cart-name">سبد خرید:</span>
                                <span id="cart-price" class="cart-price">{{\App\Models\Cart::totalAmount()}} تومان</span>
                            </div>
                            <i class="d-icon-bag"><span id="cart-count" class="cart-count">{{\App\Models\Cart::totalItems()}}</span></i>
                        </a>

                        <div class="canvas-overlay"></div>


                        <div class="dropdown-box">




                            <div class="canvas-header">
                                <h4 class="canvas-title">سبد خرید</h4>
                                <a href="#" class="btn btn-dark btn-link btn-icon-right btn-close">بستن<i class="d-icon-arrow-left"></i><span class="sr-only">سبد خرید</span></a>
                            </div>
                            @auth
                            <div id="mini-cart-body" class="products scrollable">
                                @foreach(\App\Models\Cart::getItems() as $item)
                                    @php
                                    $product = $item['product'];
                                    $productQty = $item['quantity'];
                                    @endphp
                                    <div class="product product-cart" id="cart-row-{{$product->id}}">
                                        <figure class="product-media">
                                            <a href="{{route('client.products.show',$product)}}">
                                                <img src="{{$product->image_path}}" alt="product" width="80" height="88" />
                                            </a>
                                            <button class="btn btn-link btn-close" onclick="removeFromCart({{$product->id}})">
                                                <i class="fas fa-times"></i><span class="sr-only">بستن</span>
                                            </button>
                                        </figure>
                                        <div class="product-detail">
                                            <a href="{{route('client.products.show',$product)}}" class="product-name">{{$product->name}}</a>
                                            <div class="price-box">
                                                <span id="product-quantity" class="product-quantity">{{$productQty}}</span>
                                                <span class="product-price">{{number_format($product->cost_with_discount)}} تومان</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>

                            <div class="cart-total">
                                <label>مجموع سبد خرید:</label>
                                <span class="price cart-price">{{number_format(\App\Models\Cart::totalAmount())}} تومان</span>
                            </div>

                            <div class="cart-action">
                                <a href="{{route('client.cart.index')}}" class="btn btn-dark btn-link">مشاهده</a>
                                <a href="{{route('client.orders.create')}}" class="btn btn-dark"><span>نهایی کردن خرید</span></a>
                            </div>


                            @else
                                <div class="col-12 p-4 text-center height-x3 mt-5 mb-5">برای مشاهده سبد خرید لطفا ابتدا وارد شوید</div>
                            @endauth
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @include('client.layout.menu')
    </header>



