@extends('admin.layout.master')

@section('content')

    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>ویژگی های محصولات
                                <small>پنل مدیریت سایت افشار</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">محصولات </li>
                            <li class="breadcrumb-item active">ویژگی محصولات </li>
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
                            <h5>ویژگی های محصول {{$product->name}}</h5>

                        </div>
                        <div class="card-body">
                            <div class="btn-popup ">
                                <a href="{{route('products.properties.create',$product)}}" class="btn btn-secondary">تغییر مقادیر ویژگی ها</a>
                            </div>
                            <div class="table-responsive">
                                <table width="100%" class="jsgrid-table">
                                    <tr class="jsgrid-header-row">
                                        <!--<th class="jsgrid-header-cell jsgrid-align-center" style="width: 30px;">ردیف</th>-->
                                        <th class="jsgrid-header-cell" style="width: 80px;">عنوان</th>
                                        <th class="jsgrid-header-cell" style="width: 80px;">مقدار</th>
                                    </tr>

                                    @foreach($product->properties as $property)
                                        <tr class="jsgrid-filter-row">
                                            <!--<td class="jsgrid-cell jsgrid-align-center" style="width: 60px;"><?php /*echo $x;*/?></td>-->
                                            <td class="jsgrid-cell " style="width: 100px; text-align: center;  font-weight: bold">{{$property->title}}</td>
                                            <td class="jsgrid-cell " style="width: 100px; text-align: center;  font-weight: bold">{{$property->pivot->value}}</td>
                                        </tr>
                                    @endforeach
                                    {{--<tr class="jsgrid-filter-row">
                                        <!--<td class="jsgrid-cell jsgrid-align-center" style="width: 60px;"><?php /*echo $x;*/?></td>-->
                                        <td class="jsgrid-cell " style="width: 100px; text-align: right; padding-right: 3%;">--زیرشاخه</td>
                                        <td class="jsgrid-cell" style="width: 100px;">23</td>
                                        <td class="jsgrid-cell" style="width: 100px;">
                                            <a href="edit-category.php" class="btn btn-warning btn-sm btn-warning mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 1.5rem;!important;" >ویرایش</a>
                                            <a href="includes/delete-cat.php" class="btn btn-danger btn-sm btn-danger mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 1.5rem;!important;" onclick="return confirm('آیا از حذف این دسته بندی مطمین هستید');">حذف</a>
                                        </td>
                                    </tr>

                                    <tr class="jsgrid-filter-row">
                                        <!--<td class="jsgrid-cell jsgrid-align-center" style="width: 60px;"><?php /*echo $x;*/?></td>-->
                                        <td class="jsgrid-cell " style="width: 100px; text-align: right; padding-right: 3%;">//--لایه بعدی زیر شاخه ها</td>
                                        <td class="jsgrid-cell" style="width: 100px;">23</td>
                                        <td class="jsgrid-cell" style="width: 100px;">
                                            <a href="edit-category.php" class="btn btn-warning btn-sm btn-warning mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 1.5rem;!important;" >ویرایش</a>
                                            <a href="includes/delete-cat.php" class="btn btn-danger btn-sm btn-danger mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 1.5rem;!important;" onclick="return confirm('آیا از حذف این دسته بندی مطمین هستید');">حذف</a>
                                        </td>
                                    </tr>--}}
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
