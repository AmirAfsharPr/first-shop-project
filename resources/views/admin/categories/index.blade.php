@extends('admin.layout.master')

@section('content')

    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>دسته بندی
                                <small>پنل مدیریت سایت افشار</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">محصولات</li>
                            <li class="breadcrumb-item active">دسته بندی</li>
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
                            <h5>دسته بندی محصولات</h5>
                            @include('admin.layout.errors')


                        </div>
                        <div class="card-body">
                            <div class="btn-popup ">
                                <a href="{{route('categories.create')}}" class="btn btn-secondary">افزوردن دسته بندی جدید</a>
                            </div>
                            <div class="table-responsive">
                                <table width="100%" class="jsgrid-table">
                                    <tr class="jsgrid-header-row">
                                        <!--<th class="jsgrid-header-cell jsgrid-align-center" style="width: 30px;">ردیف</th>-->
                                        <th class="jsgrid-header-cell" style="width: 80px;">عنوان دسته</th>
                                        <th class="jsgrid-header-cell" style="width: 80px;">والد دسته</th>
                                        <th class="jsgrid-header-cell" style="width: 70px;">تعداد محصول</th>
                                        <th class="jsgrid-header-cell" style="width: 100px;">عملیات</th>
                                    </tr>

                                    @foreach($categories as $category)
                                    <tr class="jsgrid-filter-row">
                                        <!--<td class="jsgrid-cell jsgrid-align-center" style="width: 60px;"><?php /*echo $x;*/?></td>-->
                                        <td class="jsgrid-cell " style="width: 100px; text-align: right; padding-right: 3%; font-weight: bold">{{$category->title}}</td>
                                        <td class="jsgrid-cell " style="width: 100px; text-align: center; padding-right: 3%; font-weight: bold">{{optional($category->parent)->title}}
                                        </td>
                                        <td class="jsgrid-cell" style="width: 100px;">23</td>
                                        <td class="jsgrid-cell" style="width: 100px;">
                                            <a href="{{route('categories.edit', $category)}}" class="btn btn-warning btn-sm btn-warning mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 1.5rem;!important;" >ویرایش</a>
                                            <form class="d-inline-block" action="{{route('categories.destroy', $category)}}" method="post">
                                                @csrf
                                                @method('DELETE')

                                            <button type="submit" class="btn btn-danger btn-sm btn-danger mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 1.5rem;!important;" onclick="return confirm('آیا از حذف این دسته بندی مطمین هستید');">حذف</button>

                                            </form>
                                        </td>
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
