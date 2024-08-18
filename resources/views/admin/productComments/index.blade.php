@extends('admin.layout.master')

@section('content')

    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>نظرات کاربران
                                <small>پنل مدیریت سایت افشار</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">محصولات</li>
                            <li class="breadcrumb-item active">نظرات کاربران </li>
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
                    <h5 class="mb-2">لیست نظرات محصول </h5>
                    <h6 class="mb-4">{{$product->name}}</h6>
                    <a href="{{route('products.index',$product)}}" class="btn btn-outline-primary"> لیست محصولات</a>

                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <div id="batchDelete" class="category-table user-list order-table" style="position: relative; height: auto; width: 100%;">
                            <table width="100%" class="jsgrid-table">
                                <tr class="jsgrid-header-row">
                                    <th class="jsgrid-header-cell" style="width: 50px;">نام کاربر</th>
                                    <th class="jsgrid-header-cell" style="width: 80px;">ایمیل کاربر</th>
                                    <th class="jsgrid-header-cell" style="width: 150px;">نظر کاربر</th>
                                    <th class="jsgrid-header-cell" style="width: 60px;">تاریخ ثبت</th>
                                    <th class="jsgrid-header-cell" style="width: 100px;">عملیات</th>
                                </tr>

                                @foreach($product->comments as $comment)

                                    @php
                                        $date_time = explode(" ",$comment->created_at);
                                        $date = explode("-",$date_time[0]);
                                        $y =$date[0];
                                        $m =$date[1];
                                        $d =$date[2];
                                    @endphp

                                    <tr class="jsgrid-filter-row">
                                        <td class="jsgrid-cell" style="width: 100px;">{{$comment->user->name}}</td>
                                        <td class="jsgrid-cell" style="width: 100px;">{{$comment->user->email}}</td>
                                        <td class="jsgrid-cell" style="width: 100px;">{{substr($comment->content,0,240)}}</td>
                                        <td class="jsgrid-cell" style="width: 100px;">{{gregorian_to_jalali($y, $m, $d, "-")}}
                                            </br><small>{{$date_time[1]}}</small>
                                        </td>
                                        <td class="jsgrid-cell" style="width: 100px;">
                                            <a href="{{route('products.comments.show',['comment'=>$comment,'product'=>$product])}}" class="btn btn-warning btn-sm btn-warning mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 0.5rem;!important; margin-top: 0.5rem" >مشاهده جزییات</a>
                                            <form class="d-inline-block" action="{{route('comments.destroy', $comment)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm btn-danger mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 0.5rem;!important;" onclick="return confirm('آیا از حذف این کامنت اطمینان دارید');">حذف</button>
                                            </form>
                                        </td>
                                    </tr>

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
