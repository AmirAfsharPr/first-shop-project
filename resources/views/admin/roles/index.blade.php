@extends('admin.layout.master')

@section('content')

    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>نقش ها
                                <small>پنل مدیریت سایت افشار</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">نقش ها</li>
                            <li class="breadcrumb-item active">لیست نقش ها</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>نقش ها</h5>
                            @include('admin.layout.errors')

                        </div>
                        <div class="card-body">
                            <div class="btn-popup ">
                                <a href="{{route('roles.create')}}" class="btn btn-secondary">افزوردن نقش جدید</a>
                            </div>
                            <div class="table-responsive">
                                <table width="100%" class="jsgrid-table">
                                    <tr class="jsgrid-header-row">
                                        <!--<th class="jsgrid-header-cell jsgrid-align-center" style="width: 30px;">ردیف</th>-->
                                        <th class="jsgrid-header-cell" style="width: 80px;">عنوان نقش</th>
                                        <th class="jsgrid-header-cell" style="width: 100px;">عملیات</th>
                                    </tr>

                                    @foreach($roles as $role)
                                        <tr class="jsgrid-filter-row">
                                            <!--<td class="jsgrid-cell jsgrid-align-center" style="width: 60px;"><?php /*echo $x;*/?></td>-->
                                            <td class="jsgrid-cell " style="width: 100px; text-align: center; padding-right: 3%; font-weight: bold">{{$role->title}}</td>
                                            <td class="jsgrid-cell" style="width: 100px;">
                                                <a href="{{route('roles.edit', $role)}}" class="btn btn-warning btn-sm btn-warning mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 1.5rem;!important;" >ویرایش</a>
                                                <form class="d-inline-block" action="{{route('roles.destroy', $role)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger btn-sm btn-danger mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 1.5rem;!important;" onclick="return confirm('آیا از حذف این نقش مطمین هستید');">حذف</button>

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
        </div>
        <!-- Container-fluid Ends-->

    </div>

@endsection
