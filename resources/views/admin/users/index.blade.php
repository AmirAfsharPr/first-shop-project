@extends('admin.layout.master')

@section('content')

    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>لیست کاربران
                                <small>پنل مدیریت سایت افشار</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item"> کاربران</li>
                            <li class="breadcrumb-item active">لیست کاربران </li>
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
                    <h5>اطلاعات کاربران</h5>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <div id="batchDelete" class="category-table user-list order-table" style="position: relative; height: auto; width: 100%;">
                            <table width="100%" class="jsgrid-table">
                                <tr class="jsgrid-header-row">
                                    <th class="jsgrid-header-cell jsgrid-align-center" style="width: 30px;">ردیف</th>
                                    <th class="jsgrid-header-cell jsgrid-align-center" style="width: 50px;">عکس کاربر</th>
                                    <th class="jsgrid-header-cell" style="width: 80px;">نام کاربر</th>
                                    <th class="jsgrid-header-cell" style="width: 70px;">نقش</th>
                                    <th class="jsgrid-header-cell" style="width: 100px;">ایمیل</th>
                                    <th class="jsgrid-header-cell" style="width: 100px;">تاریخ عضویت</th>
                                    {{--<th class="jsgrid-header-cell" style="width: 100px;">آخرین ورود</th>--}}
                                    <th class="jsgrid-header-cell" style="width: 100px;">عملیات</th>
                                </tr>
                                @php($x = 1)
                                @foreach($users as $user)
                                    <tr class="jsgrid-filter-row">
                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 60px;">{{$x}}</td>
                                        <td class="jsgrid-cell jsgrid-align-center" style="width: 50px;"><img src="/admin/images/anonymous.png" style="width: 50px; height: 50px;"></td>
                                        <td class="jsgrid-cell" style="width: 100px;">{{$user->name}}</td>
                                        <td class="jsgrid-cell" style="width: 100px;">{{$user->role->title}}</td>
                                        <td class="jsgrid-cell" style="width: 100px;">{{$user->email}}</td>
                                        <td class="jsgrid-cell" style="width: 100px;">{{$user->created_at}}</td>
                                        {{--<td class="jsgrid-cell" style="width: 100px;">
                                        </td>--}}
                                        <td class="jsgrid-cell" style="width: 100px;">
                                            <a href="{{route('users.edit',$user)}}" class="btn btn-warning btn-sm btn-warning mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 1.0rem;!important;" >ویرایش</a>
                                            <form class="d-inline-block" action="{{route('users.destroy', $user)}}" method="post">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger btn-sm btn-danger mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 1.0rem;!important;" onclick="return confirm('آیا از حذف این کاربر اطمینان درید');">حذف</button>

                                            </form>
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
