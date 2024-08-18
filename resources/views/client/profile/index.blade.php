@extends('client.layout.master')

@section('content')

    <main class="main account">
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="pl-1"><a href="{{route('client.home')}}" ><i class="d-icon-home"></i></a></li>
                    <li>حساب کاربری</li>
                </ul>
            </div>
        </nav>
        <div class="page-content mt-4 mb-10 pb-6">
            <div class="container">
                <h2 class="title title-center mb-10">حساب کاربری</h2>

                @include('client.layout.errors')

                <div class="tab tab-vertical gutter-lg">
                    <ul class="nav nav-tabs mb-4 col-lg-3 col-md-4" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active text-right" href="#dashboard">داشبورد</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-right" href="#orders">سفارشات</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-right" href="#downloads">دانلود ها</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-right" href="#address">آدرس من</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-right" href="#account">جزِيیات حساب</a>
                        </li>
                        <li class="nav-item">
                            <a class="exit-link text-right" href="{{route('home')}}">ورود به پنل مدیریت</a>
                        </li>
                        <li class="nav-item">
                            <a class="exit-link text-right" href="{{route('client.logout')}}">خروج</a>
                        </li>
                    </ul>
                    <div class="tab-content col-lg-9 col-md-8">
                        <div class="tab-pane pr-3" id="dashboard">
                            <p class="mb-0 font-weight-bold">
                                داشبورد
                            </p>
                            <p class="mb-0 font-weight-semi-bold">
                                از داشبورد حساب شما میتوانید
                            <p class="m-0">سفارشات اخیر خود را به راحتی برسی کرده و مشاهده کنید آدرس های ارسالی و صورتحساب خود را مدیریت کنید
                                <br>و گذرواژه و جزيیات حساب خود را ویرایش کتید.</p>
                            <a href="shop.php" class="btn btn-dark btn-rounded mt-3">برو به فروشگاه<i class="d-icon-arrow-left"></i></a>
                        </div>
                        <div class="tab-pane" id="orders">

                            <table class="order-table">

                                <thead>
                                <tr>
                                    <th class="pl-2 text-center">سفارشات</th>
                                    <th class="text-center">تاریخ ثبت</th>
                                    <th class="text-center">وضعیت</th>
                                    <th class="text-center">مجموع</th>
                                    <th class="pr-2 text-center">عملیات</th>
                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <td class="order-number text-center"><a href="#">-</a></td>
                                    <td class="order-date text-center"><span>-</span></td>
                                    <td class="order-status text-center">
                                        <span>در انتظار بررسی</span>
                                        <span class="bg-dark" style="color: #fff;">درحال بررسی</span>
                                        <span class="bg-primary" style="color: #fff;">ارسال شده</span>

                                    </td>

                                    <td class="order-total text-center"><span>-</span></td>
                                    <td class="order-action text-center"><a href="#" class="btn btn-primary btn-link btn-underline">مشاهده</a></td>
                                </tr>
                                </tbody>
                            </table>

                            <p class="alert-black pt-5 pb-5 text-center text-light">هنوز سفارشی ثبت نکرده اید</p>

                        </div>
                        <div class="tab-pane" id="downloads">
                            <p class="mb-4 text-body">No downloads available yet.</p>
                            <a href="#" class="btn btn-primary btn-link btn-underline">Browser Products<i class="d-icon-arrow-right"></i></a>
                        </div>
                        <div class="tab-pane" id="address">

                            <div class="row">
                                <div class="col-sm-4 mb-4">
                                    <div class="card card-address">
                                        <div class="card-body">
                                            <h5 class="card-title text-uppercase">آدرس محل سکونت</h5>
                                            <p>
                                                استان : -<br>
                                                شهر :
                                                    -<br>
                                                کد پستی :
                                                    -<br>
                                                آدرس :
                                                    -<br>
                                                شماره تماس :
                                                    -
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-8 mb-4">
                                    <form action="includes/update_address.php" class="form" method="post">
                                        <div class="col-lg-10 mb-6 mb-lg-0 pr-lg-4 mx-auto">
                                            <h3 class="title title-simple text-right text-uppercase mt-3">تغییر آدرس فعلی :</h3>
                                            <div class="row">
                                                <label>آدرس : *</label>
                                                <input type="text" class="form-control" name="address" value="" required placeholder="نشانی محل سکونت خود را بصورت کامل و دقیق وارد کنید"/>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <label>شهر : *</label>
                                                        <input type="text" class="form-control" name="city" value="" required />
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label>استان : *</label>
                                                        <input type="text" class="form-control" name="state" value="" required/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <label>کد پستی *</label>
                                                        <input type="text" class="form-control" name="zip" value="" required />
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label>تلفن *</label>
                                                        <input type="text" class="form-control" name="phone" value="" required="" />
                                                    </div>
                                                </div>
                                                <input type="hidden" name="userid" value="">
                                                <button class="btn btn-dark btn-md btn-rounded btn-icon-left ml-auto mb-4 ">ثبت آدرس<i class="d-icon-arrow-left"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-sm-12 mb-4">
                                    <form action="includes/update_address.php" class="form" method="post">
                                        <div class="col-lg-10 mb-6 mb-lg-0 pr-lg-4 mx-auto">
                                            <h3 class="title title-simple text-right text-uppercase mt-3">افزودن آدرس  :</h3>
                                            <div class="row">
                                                <label>آدرس : *</label>
                                                <input type="text" class="form-control" name="address"  required placeholder="نشانی محل سکونت خود را بصورت کامل و دقیق وارد کنید"/>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <label>شهر : *</label>
                                                        <input type="text" class="form-control" name="city"  required />
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label>استان : *</label>
                                                        <input type="text" class="form-control" name="state"  required/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <label>کد پستی *</label>
                                                        <input type="text" class="form-control" name="zip"  required />
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <label>تلفن *</label>
                                                        <input type="text" class="form-control" name="phone" required="" />
                                                    </div>
                                                </div>
                                                <input type="hidden" name="userid" value="">
                                                <button class="btn btn-dark btn-md btn-rounded btn-icon-left ml-auto mb-4 ">ثبت آدرس<i class="d-icon-arrow-left"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                        <div class="tab-pane active" id="account">

                            <form method="post" action="includes/updateprofile_process.php" class="form">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label>نام و نام خانوادگی *</label>
                                        <input type="text" class="form-control" name="name" value="{{$user->name}}" required>
                                    </div>
                                </div>
                                <label>آدرس ایمیل *</label>
                                <input type="email" class="form-control" name="email" value="{{$user->email}}" required>
                                {{--<fieldset>
                                    <legend>تغییر رمز عبور</legend>
                                    <label>رمزعبور فعلی </label>
                                    <input type="password" class="form-control" name="current_password" id="pass">
                                    <label>رمز عبور جدید </label>
                                    <input type="password" class="form-control" name="new_password" id="npass">
                                    <label>تکرار رمز عبور جدید</label>
                                    <input type="password" class="form-control" name="confirm_password" id="cpass">
                                </fieldset>--}}
                                <button type="submit" class="btn btn-primary">ذخیره تغییرات</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
