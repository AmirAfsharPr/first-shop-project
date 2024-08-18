@extends('admin.layout.master')

@section('content')

    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>لیست محصولات
                                <small>پنل مدیریت سایت افشار</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item"> محصولات</li>
                            <li class="breadcrumb-item active">لیست محصولات </li>
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
                    <h5>اطلاعات محصولات</h5>

                    @include('admin.layout.errors')

                </div>
                <div class="card-body">
                    <div class="btn-popup ">
                        <a href="{{route('products.create')}}" class="btn btn-secondary">ایجاد محصول جدید</a>
                    </div>

                    <div class="table-responsive">
                        <div id="batchDelete" class="category-table user-list order-table" style="position: relative; height: auto; width: 100%;">
                            <table width="100%" class="jsgrid-table">
                                <tr class="jsgrid-header-row">
                                    <!--                                    <th class="jsgrid-header-cell jsgrid-align-center" style="width: 30px;">ردیف</th>-->
                                    <th class="jsgrid-header-cell" style="width: 80px;">نام محصول</th>
                                    <th class="jsgrid-header-cell" style="width: 70px;">دسته محصول</th>
                                    <th class="jsgrid-header-cell" style="width: 100px;">برند محصول</th>
                                    <th class="jsgrid-header-cell" style="width: 100px;">قیمت محصول</th>
                                    <th class="jsgrid-header-cell" style="width: 100px;">تخفیف</th>
                                    <th class="jsgrid-header-cell" style="width: 100px;">تصویر</th>
                                    <th class="jsgrid-header-cell" style="width: 100px;">گالری</th>
                                    <th class="jsgrid-header-cell" style="width: 100px;">ویژگی ها</th>
                                    <th class="jsgrid-header-cell" style="width: 100px;">نظرات</th>
                                    <th class="jsgrid-header-cell" style="width: 100px;">تاریخ ثبت محصول</th>
                                    <th class="jsgrid-header-cell" style="width: 100px;">عملیات</th>
                                </tr>

                                @foreach($products as $product)
                                <tr class="jsgrid-filter-row">
                                    <!--                                    <td class="jsgrid-cell jsgrid-align-center" style="width: 60px;">--><?php //echo $x; ?><!--</td>-->
                                    <td class="jsgrid-cell" style="width: 100px;">{{$product->name}}</td>
                                    <td class="jsgrid-cell" style="width: 100px;">{{$product->category->title}}
                                    </td>
                                    <td class="jsgrid-cell" style="width: 100px;">{{$product->brand->name}}
                                    </td>
                                    <td class="jsgrid-cell" style="width: 100px;">{{$product->cost}} تومان</td>
                                    <td class="jsgrid-cell" style="width: 100px;">
                                        @if(!$product->has_discount)
                                            <a href="{{route('products.discounts.create', $product)}}" class="btn btn-success btn-sm btn-success mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 0.5rem;!important;" >
                                                ایجاد تخفیف
                                            </a>
                                        @else
                                            <a href="{{route('products.discounts.create',$product)}}" class="btn btn-sm btn-info" title="ویرایش">{{$product->discount->value}}</a>
                                            <form class="d-inline-block" action="{{route('products.discounts.destroy', ['product' => $product, 'discount' => $product->discount])}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm btn-danger mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 0.5rem;!important;" onclick="return confirm('تخفیف این محصول برداشته شود؟');">حذف</button>
                                            </form>

                                        @endif

                                    </td>

                                    <td class="jsgrid-cell" style="width: 100px;"><img src="{{str_replace('public', '/storage' , $product->image)}}" width="100px" alt="{{$product->name}}" title="{{$product->name}}"></td>
                                    <td class="jsgrid-cell" style="width: 100px;"><a href="{{route('products.pictures.index', $product)}}" class="btn btn-success btn-sm btn-success mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 0.5rem;!important;" >
                                            گالری
                                        </a></td>
                                    <td class="jsgrid-cell" style="width: 100px;"><a href="{{route('products.properties.index', $product)}}" class="btn btn-info btn-sm btn-info mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 0.5rem;!important;" >
                                            ویژگی ها
                                        </a></td>
                                    <td class="jsgrid-cell" style="width: 100px;"><a href="{{route('products.comments.index', $product)}}" class="btn btn-info btn-sm btn-info mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 0.5rem;!important;" >
                                            کامنت ها
                                        </a></td>
                                    <td class="jsgrid-cell" style="width: 100px;">-</td>
                                    <td class="jsgrid-cell" style="width: 100px;">
                                        <a href="{{route('products.edit', $product)}}" class="btn btn-info btn-sm btn-warning mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 0.5rem;!important;" >ویرایش</a>
                                        <form class="d-inline-block" action="{{route('products.destroy', $product)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm btn-danger mb-0 b-r-4" style="display: inline-block; padding: 0.5rem 0.5rem;!important;" onclick="return confirm('آیا از حذف این محصول اطمینان دارید');">حذف</button>
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
