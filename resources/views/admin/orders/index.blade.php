@extends('admin.layout.master')

@section('content')

        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>لیست سفارشات
                                    <small>پنل مدیریت سایت افشار</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item"> سفارشات</li>
                                <li class="breadcrumb-item active">لیست سفارشات </li>
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
                        <h5>اطلاعات سفارشات</h5>

                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <div id="batchDelete" class="category-table user-list order-table" style="position: relative; height: auto; width: 100%;">
                                <table width="100%" class="jsgrid-table">
                                    <tr class="jsgrid-header-row">
                                        <th class="jsgrid-header-cell jsgrid-align-center" style="width: 40px;">ردیف</th>
                                        <th class="jsgrid-header-cell" style="width: 80px;">شماره سفارش</th>
{{--                                        <th class="jsgrid-header-cell" style="width: 70px;">نام کاربر</th>--}}
                                        <th class="jsgrid-header-cell" style="width: 100px;">قیمت سفارش</th>
                                        <th class="jsgrid-header-cell" style="width: 100px;">وضعیت سفارش</th>
                                        <th class="jsgrid-header-cell" style="width: 70px;">تاریخ ثبت سفارش</th>
                                        <th class="jsgrid-header-cell" style="width: 100px;">عملیات</th>
                                    </tr>
                                    @php($x=1)
                                    @foreach($orders as $order)

                                        <tr class="jsgrid-filter-row">
                                            <td class="jsgrid-cell jsgrid-align-center" style="width: 60px;">{{$x}}</td>
                                            <td class="jsgrid-cell" style="width: 100px;">{{$order->transaction_id}} </td>
                                            <td class="jsgrid-cell" style="width: 100px;">{{number_format($order->amount)}}</td>
                                            <td class="jsgrid-cell" style="width: 150px;">
                                                <span class="bg-danger p-2 b-r-4">{{$order->payment_status}}</span>
                                            </td>
                                            <td class="jsgrid-cell" style="width: 100px;">
                                                    {{$order->created_at}}
                                            </td>
                                            <td class="jsgrid-cell" style="width: 100px;">
                                                <a href="{{route('orders.show',$order)}}" class="btn btn-warning btn-sm btn-success mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 1.5rem;!important; margin-top: 0.5rem" >مشاهده</a>
                                            </td>
                                        </tr>
                                        @php($x++)
                                    @endforeach


                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

        </div>

@endsection
