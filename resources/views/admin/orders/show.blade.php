@extends('admin.layout.master')

@section('content')

    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>جزییات سفارش {{$order->transaction_id}}
                                <small>پنل مدیریت سایت افشار</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item"> سفارشات</li>
                            <li class="breadcrumb-item active">جزییات سفارش </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h5>جزییات سفارشات</h5>
                    <a href="{{route('orders.index')}}" class="btn btn-outline-primary " style="margin-right: 79%;">برو به لیست سفارشات</a>

                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <div id="batchDelete" class="category-table user-list order-table" style="position: relative; height: auto; width: 100%;">
                            <table width="100%" class="jsgrid-table">
                                {{--<tr class="jsgrid-header-row">
                                    <th class="jsgrid-header-cell jsgrid-align-center" style="width: 150px;">نام کاربر:</th>
                                    <td class="jsgrid-cell" >-</td>
                                </tr>--}}
                                <tr class="jsgrid-header-row">
                                    <th class="jsgrid-header-cell jsgrid-align-center">تاریخ ثبت سفارش:</th>
                                    <td class="jsgrid-cell" >{{$order->created_at}}</td>
                                </tr>
                                <tr class="jsgrid-header-row">
                                    <th class="jsgrid-header-cell jsgrid-align-center">مبلغ سفارش:</th>
                                    <td class="jsgrid-cell" >{{number_format($order->amount) . 'تومان'}}</td>
                                </tr>
                                <tr class="jsgrid-header-row">
                                    <th class="jsgrid-header-cell jsgrid-align-center">وضعیت سفارش:</th>
                                    <td class="jsgrid-cell" >

                                        <span class="bg-danger p-2 b-r-4">{{$order->payment_status}}</span>

                                        {{--<form method="post" action="includes/update_status_orders.php" class="mt-3 me-4 position-relative d-inline-block">
                                            <select class="form-control d-inline-block" name="status" required>
                                                <option value="0" <?php if ($order['o_status'] == 0) { echo "selected"; } ?>>درانتظار بررسی</option>
                                                <option value="1" <?php if ($order['o_status'] == 1) { echo "selected"; } ?>>درحال بررسی</option>
                                                <option value="2" <?php if ($order['o_status'] == 2) { echo "selected"; } ?>>ارسال شده</option>
                                            </select>
                                            <input type="hidden" name="order_id" value="<?php echo $orderid ?>">
                                            <button type="submit" class="btn btn-dark position-absolute me-3">ثبت</button>
                                        </form>--}}
                                    </td>
                                </tr>
                                <tr class="jsgrid-header-row">
                                    <th class="jsgrid-header-cell jsgrid-align-center">جزییات:</th>
                                    <td class="jsgrid-cell" >
                                        @foreach($order->details as $item)
                                            <p>
                                                {{$item->product->name}} -
                                                تعداد :
                                                {{ $item->count }}
                                            </p>
                                        @endforeach

                                    </td>
                                </tr>
                                <tr class="jsgrid-header-row">
                                    <th class="jsgrid-header-cell jsgrid-align-center">آدرس:</th>
                                    <td class="jsgrid-cell" >
                                        @php
                                        $address = json_decode($order['address']);
                                        @endphp
                                        <p>
                                            استان : {{$address->state}}<br>
                                            شهر :
                                            {{$address->city}}<br>
                                            کد پستی :
                                            {{$address->zip_code}}<br>
                                            آدرس :
                                            {{$address->address}}<br>
                                            شماره تماس :
                                            {{$address->phone}}
                                        </p>
                                    </td>
                                </tr>
                                <tr class="jsgrid-header-row">
                                    <th class="jsgrid-header-cell jsgrid-align-center">توضیحات:</th>
                                    <td class="jsgrid-cell" >
                                        {{$address->description}}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

    </div>

@endsection
