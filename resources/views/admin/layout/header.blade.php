<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bigdeal admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Bigdeal admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon/favicon.png" type="image/x-icon">
    <title>صفحه ادمین</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="/admin/css/font-awesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="/admin/css/flag-icon.css">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="/admin/css/icofont.css">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="/admin/css/prism.css">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="/admin/css/chartist.css">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="/admin/css/vector-map.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="/admin/css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="/admin/css/admin.css">
</head>

<body class="rtl">

<!-- page-wrapper Start-->
<div class="page-wrapper">

    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-left">
            <div class="logo-wrapper"><a href="index.html"><img class="blur-up lazyloaded" src="/admin/images/layout-2/logo/logo-afshar.png" alt=""></a></div>
        </div>
        <div class="main-header-right ">
            <div class="mobile-sidebar">
                <div class="media-body text-end switch-sm">
                    <label class="switch">
                        <input id="sidebar-toggle" type="checkbox" checked="checked"><span class="switch-state"></span>
                    </label>
                </div>
            </div>
            <div class="nav-right col">
                <ul class="nav-menus">
                    <li>
                        <!--<form class="form-inline search-form">
                            <div class="form-group">
                                <input class="form-control-plaintext" type="search" placeholder="جست و جو..."><span class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                            </div>
                        </form>-->
                    </li>
                    <li><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                    <li class="onhover-dropdown"><i data-feather="bell"></i><span id="number_alert" class="badge badge-pill badge-primary pull-right notification-badge">2</span><span class="dot"></span>
                        <ul class="notification-dropdown custom-scrollbar onhover-show-div p-0" style="height: auto!important;">
                            <li>
                                <div class="media">
                                    <div class="notification-icons bg-primary me-3"><i data-feather="airplay"></i></div>
                                    <div class="media-body">
                                        <a href="order-list.php"><h6 class="font-primary"><strong></strong>سفارشات در انتظار بررسی</h6>
                                            <p class="mb-0"> 2 سفارش در انتظار بررسی</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="notification-icons bg-info me-3"><i data-feather="message-circle"></i></div>
                                    <div class="media-body">
                                        <a href="questions.php">
                                            <h6 class="font-info">سوالات جدید</h6>
                                            <p class="mb-0"> 1 سوال خوانده نشده جدید دارید</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <div class="notification-icons bg-warning me-3"><i data-feather="message-circle"></i></div>
                                    <div class="media-body">
                                        <a href="comments.php">
                                            <h6 class="font-warning">نظرات جدید</h6>
                                            <p class="mb-0"> 1 نظر تایید نشده جدید دارید</p>
                                        </a>
                                    </div>
                                </div>
                            </li>
                                <li>
                            <div class="media">
                                <div class="notification-icons bg-secondary me-3"><i data-feather="download"></i></div>
                                <div class="media-body">
                                    <h6 class="font-secondary">دانلود کامل شد</h6>
                                    <p class="mb-0"> </p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <div class="notification-icons bg-success bg-warning me-3">
                                    <i data-feather="gift"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="font-secondary">محصول جدید رسید</h6>
                                    <p class="mb-0"> 4 ساعت پیش</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <div class="notification-icons bg-success me-3">
                                    <i data-feather="airplay"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="font-secondary">اپلیکیشن اماده آپدیت است</h6>
                                    <p class="mb-0"> 3 ساعت پیش</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <div class="notification-icons bg-info me-3">
                                    <i data-feather="alert-circle"></i>
                                </div>
                                <div class="media-body">
                                    <h6 class="font-secondary"> مشکلی در سرور وجود دارد</h6>
                                    <p class="mb-0"> همین الان</p>
                                </div>
                            </div>
                        </li>

                            {{--<?php $_SESSION['number_alert'] = $x;?>
                            <input id="alert" type="hidden" value="<?php echo $x; ?>">--}}

                        </ul>
                    </li>

                    <li class="onhover-dropdown">
                        <div class="media align-items-center"><img class="align-self-center pull-right img-50 rounded-circle blur-up lazyloaded" src="/admin/images/dashboard/man.png" alt="header-user">
                            <div class="dotted-animation"><span class="animate-circle"></span><span class="main-circle"></span></div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
                            <li><a href="javascript:void(0)">پروفایل<span class="pull-right"><i data-feather="user"></i></span></a></li>
                            <li><a href="javascript:void(0)">صندوق ورودی<span class="pull-right"><i data-feather="mail"></i></span></a></li>
                            <li><a href="javascript:void(0)">تسکبار<span class="pull-right"><i data-feather="file-text"></i></span></a></li>
                            <li><a href="javascript:void(0)">تنظیمات<span class="pull-right"><i data-feather="settings"></i></span></a></li>
                        </ul>
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
            </div>
        </div>
    </div>

    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->

        <div class="page-sidebar">
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div><img class="img-60 rounded-circle lazyloaded blur-up" src="/admin/images/dashboard/man.png" alt="#">
                    </div>
                    <h6 class="mt-3 f-14">admin</h6>
                    <p>ادمین سایت</p>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="index.php"><i data-feather="home"></i><span>داشبورد</span></a></li>
                    <li><a class="sidebar-header" href="javascript:void(0)"><i data-feather="box"></i> <span>فروشگاه</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{route('categories.index')}}"><i class="fa fa-circle"></i>دسته بندی محصولات</a></li>
                            <li><a href="{{route('categories.create')}}"><i class="fa fa-circle"></i>اضافه کردن دسته بندی جدید</a></li>
                            <li><a href="product-list.php"><i class="fa fa-circle"></i>لیست محصولات</a></li>
                            <li><a href="add-product.php"><i class="fa fa-circle"></i>اضافه کردن محصول جدید</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="dollar-sign"></i><span>لیست سفارشات</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="order-list.php"><i class="fa fa-circle"></i>لیست کلیه سفارشات</a></li>
                            <li><a href="order-list-waiting.php" style="font-size: 13px;"><i class="fa fa-circle"></i> سفارشات در انتظار بررسی <small>(7)</small></a></li>
                            <li><a href="order-list-wdeliver.php"><i class="fa fa-circle"></i> سفارشات درحال بررسی<small>(3)</small></a></li>
                            <li><a href="order-list-delivered.php"><i class="fa fa-circle"></i> سفارشات ارسال شده</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="user-plus"></i><span>کاربران</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="user-list.php"><i class="fa fa-circle"></i>لیست کاربران</a></li>
                            <li><a href="create-user.php"><i class="fa fa-circle"></i>ایجاد کاربر</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="bar-chart"></i><span>نظرات</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="comments-readed.php"><i class="fa fa-circle"></i> نظرات تایید شده</a></li>
                            <li><a href="comments.php"><i class="fa fa-circle"></i>نظرات در انتظار تایید <small>(4)</small></a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="bar-chart"></i><span>سوالات متداول</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="#"><i class="fa fa-circle"></i>سوالات متداول</a></li>
                            <li><a href="questions.php"><i class="fa fa-circle"></i>سوالات خوانده نشده <small>(5)</small></a></li>
                            <li><a href="questions-readed.php"><i class="fa fa-circle"></i>سوالات خوانده شده</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href=""><i data-feather="settings" ></i><span>تنظیمات</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="sidebar-submenu">
                            <li><a href="profile.html"><i class="fa fa-circle"></i>پروفایل</a></li>
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="../../index.php"><i data-feather="log-in"></i><span>سایت فروشگاه</span></a>
                    <li><a class="sidebar-header" href="includes/logout.php"><i data-feather="log-in"></i><span>خروج</span></a>
                    </li>
                </ul>
            </div>
        </div>
            <!-- Page Sidebar Ends-->

        <!-- Right sidebar Start-->
        <!-- اگر نیاز بود بعدا اضافه میکنیم -->
        <!-- Right sidebar Ends-->

