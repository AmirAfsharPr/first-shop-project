@extends('admin.layout.master')

@section('content')

    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>جزییات کامنت مربوط به محصول {{$product->name}}
                                <small>پنل مدیریت سایت افشار</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">نظرات</li>
                            <li class="breadcrumb-item active">جزییات</li>
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
                    <h5>جزییات کامنت</h5>
                    <a href="{{route('products.comments.index',$product)}}" class="btn btn-outline-primary " style="margin-right: 76%;">برگرد لیست نظرات</a>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <div id="batchDelete" class="category-table user-list order-table" style="position: relative; height: auto; width: 100%;">
                            <table width="100%" class="jsgrid-table">
                                <tr class="jsgrid-header-row">
                                    @php
                                        $date_time = explode(" ",$comment->created_at);
                                        $time = $date_time[1];
                                        $date = explode("-",$date_time[0]);
                                        $y =$date[0];
                                        $m =$date[1];
                                        $d =$date[2];
                                    @endphp
                                    <th class="jsgrid-header-cell jsgrid-align-center" style="width: 150px;">تاریخ ثبت سوال:</th>
                                    <td class="jsgrid-cell pe-2" >
                                        {{gregorian_to_jalali($y, $m, $d, "-")}}
                                        </br><small>{{$time}}</small></td>
                                </tr>
                                <tr class="jsgrid-header-row">
                                    <th class="jsgrid-header-cell jsgrid-align-center" >نام کاربر:</th>
                                    <td class="jsgrid-cell pe-2" >{{$comment->user->name}}</td>
                                </tr>
                                <tr class="jsgrid-header-row">
                                    <th class="jsgrid-header-cell jsgrid-align-center">ایمیل کاربر:</th>
                                    <td class="jsgrid-cell pe-2" >{{$comment->user->email}}</td>
                                </tr>
                                <tr class="jsgrid-header-row">
                                    <th class="jsgrid-header-cell jsgrid-align-center">متن سوال:</th>
                                    <td class="jsgrid-cell pe-2" >
                                        <p>
                                            {{$comment->content}}
                                        </p>
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
