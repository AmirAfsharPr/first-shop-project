@extends('admin.layout.master')

@section('content')

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>پیشخوان مدیریت
                            <small>به پیشخوان مدیریت سایت افشار خوش آمدید</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">داشبورد</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card o-hidden  widget-cards">
                    <div class="bg-secondary card-body">
                        <div class="media static-top-widget">
                            <div class="media-body"><span class="m-0">محصولات</span>
                                <h3 class="mb-0"> <span class="counter">34</span><small>  عدد</small></h3>
                            </div>
                            <div class="icons-widgets">
                                <i data-feather="box"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card o-hidden widget-cards">
                    <div class="bg-primary card-body">
                        <div class="media static-top-widget">
                            <div class="media-body"><span class="m-0">نظرات کاربران</span>
                                <h3 class="mb-0"> <span class="counter">12</span><small> نظر ثبت شده</small></h3>
                            </div>
                            <div class="icons-widgets">
                                <i data-feather="message-square"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card o-hidden widget-cards">
                    <div class="bg-warning card-body">
                        <div class="media static-top-widget">
                            <div class="media-body"><span class="m-0">سفارشات در انتظار بررسی</span>
                                <h3 class="mb-0"> <span class="counter">54</span><small> عدد</small></h3>
                            </div>
                            <div class="icons-widgets">
                                <i data-feather="navigation"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 xl-50">
                <div class="card o-hidden widget-cards">
                    <div class="bg-success card-body">
                        <div class="media static-top-widget">
                            <div class="media-body"><span class="m-0">درآمد کل سفارشات</span>
                                <h3 class="mb-0"><span class="counter d-block">4321000</span><small>تومان در یک ماه گذشته </small></h3>
                            </div>
                            <div class="icons-widgets">
                                <i data-feather="users"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Container-fluid Ends-->

</div>

@endsection
