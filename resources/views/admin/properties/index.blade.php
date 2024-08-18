@extends('admin.layout.master')

@section('content')

    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>ویژگی ها
                                <small>پنل مدیریت سایت افشار</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">ویژگی ها</li>
                            <li class="breadcrumb-item active">لیست ویژگی ها</li>
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
                            <h5>ویژگی ها</h5>
                            @include('admin.layout.errors')

                        </div>
                        <div class="card-body">
                            <div class="btn-popup ">
                                <a href="{{route('properties.create')}}" class="btn btn-secondary">افزوردن ویژگی جدید</a>
                            </div>
                            <div class="table-responsive">
                                <table width="100%" class="jsgrid-table">
                                    <tr class="jsgrid-header-row">
                                        <!--<th class="jsgrid-header-cell jsgrid-align-center" style="width: 30px;">ردیف</th>-->
                                        <th class="jsgrid-header-cell" style="width: 80px;">عنوان </th>
                                        <th class="jsgrid-header-cell" style="width: 80px;">گروه ویژگی</th>
                                        <th class="jsgrid-header-cell" style="width: 100px;">عملیات</th>
                                    </tr>

                                    @foreach($properties as $property)
                                        <tr class="jsgrid-filter-row">
                                            <!--<td class="jsgrid-cell jsgrid-align-center" style="width: 60px;"><?php /*echo $x;*/?></td>-->
                                            <td class="jsgrid-cell " style="width: 100px; text-align: center;  font-weight: bold">{{$property->title}}</td>
                                            <td class="jsgrid-cell " style="width: 100px; text-align: center;  font-weight: bold">{{optional($property->propertyGroup)->title}}
                                            </td>
                                            <td class="jsgrid-cell" style="width: 100px;">
                                                <a href="{{route('properties.edit', $property)}}" class="btn btn-warning btn-sm btn-warning mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 1.5rem;!important;" >ویرایش</a>
                                                <form class="d-inline-block" action="{{route('properties.destroy', $property)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger btn-sm btn-danger mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 1.5rem;!important;" onclick="return confirm('آیا از حذف این دسته بندی مطمین هستید');">حذف</button>

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
