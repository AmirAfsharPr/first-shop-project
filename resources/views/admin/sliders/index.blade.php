@extends('admin.layout.master')

@section('content')

    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>اسلایدر ها
                                <small>پنل مدیریت سایت افشار</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">اسلایدر</li>
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
                            <h5>اسلایدر ها</h5>

                        </div>
                        <div class="card-body">
                            <div class="btn-popup ">
                                <a href="{{route('sliders.create')}}" class="btn btn-secondary">افزوردن اسلایدر جدید</a>
                            </div>
                            <div class="table-responsive">
                                <table width="100%" class="jsgrid-table">
                                    <tr class="jsgrid-header-row">
                                        <!--<th class="jsgrid-header-cell jsgrid-align-center" style="width: 30px;">ردیف</th>-->
                                        <th class="jsgrid-header-cell" style="width: 80px;">عنوان فرعی</th>
                                        <th class="jsgrid-header-cell" style="width: 80px;">عنوان</th>
                                        <th class="jsgrid-header-cell" style="width: 80px;">متن</th>
                                        <th class="jsgrid-header-cell" style="width: 80px;">لینک</th>
                                        <th class="jsgrid-header-cell" style="width: 80px;">تصویر</th>
                                        <th class="jsgrid-header-cell" style="width: 100px;">عملیات</th>
                                    </tr>

                                    @foreach($sliders as $slider)
                                        <tr class="jsgrid-filter-row">
                                            <!--<td class="jsgrid-cell jsgrid-align-center" style="width: 60px;"><?php /*echo $x;*/?></td>-->
                                            <td class="jsgrid-cell " style="width: 100px; text-align: center; padding-right: 3%; font-weight: bold">{{$slider->subtitle}}</td>
                                            <td class="jsgrid-cell " style="width: 100px; text-align: center; padding-right: 3%; font-weight: bold">{{$slider->title}}</td>
                                            <td class="jsgrid-cell " style="width: 100px; text-align: center; padding-right: 3%; font-weight: bold">{{$slider->text}}</td>
                                            <td class="jsgrid-cell " style="width: 100px; text-align: center; padding-right: 3%; font-weight: bold">{{$slider->link}}</td>
                                            <td class="jsgrid-cell" style="width: 100px;"><img src="{{str_replace('public', '/storage' , $slider->image)}}" width="100px" alt="{{$slider->name}}" title="{{$slider->name}}"></td>
                                            <td class="jsgrid-cell" style="width: 100px;">
                                                <a href="{{route('sliders.edit', $slider)}}" class="btn btn-warning btn-sm btn-warning mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 1.5rem;!important;" >ویرایش</a>
                                                <form class="d-inline-block" action="{{route('sliders.destroy', $slider)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-danger btn-sm btn-danger mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 1.5rem;!important;" onclick="return confirm('آیا از حذف این اسلایدر مطمین هستید');">حذف</button>

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
