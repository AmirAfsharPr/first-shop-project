@extends('admin.layout.master')

@section('content')

    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>اضافه کردن محصول جدید
                                <small>پنل مدیریت سایت افشار</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">محصولات</li>
                            <li class="breadcrumb-item active">اضافه کردن محصول</li>
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
                            <h5>اضافه کردن محصول</h5>
                            @include('admin.layout.errors')
                        </div>
                        <div class="card-body">

                            <form id="sabtpr" class="needs-validation add-product-form" novalidate="" method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form">
                                    <div class="row product-adding">
                                        <div class="col-xl-12">

                                            <div class="form">
                                                <div class="form-group mb-3  row">
                                                    <div class="col-xl-3 col-sm-4 mb-0">
                                                        <label for="validationCustom00" >عنوان :</label>
                                                    </div>
                                                    <div class="col-xl-8 col-sm-7">
                                                        <input class="form-control " id="validationCustom00" type="text" required="" name="name">
                                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">مثلا گوشی موبایل سامسونگ</div>
                                                        <small>مثلا : گوشی موبایل سامسونگ</small>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3  row">
                                                    <div class="col-xl-3 col-sm-4 mb-0">
                                                        <label for="validationCustom01" >لینک محصول :</label>
                                                    </div>
                                                    <div class="col-xl-8 col-sm-7">
                                                        <input class="form-control " id="validationCustom01" type="text" required="" name="slug">
                                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">مثلا-گوشی-موبایل</div>
                                                        <small>مثلا: گوشی-موبایل</small>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3  row">
                                                    <div class="col-xl-3 col-sm-4 mb-0">
                                                        <label for="cat">دسته بندی محصول :</label>
                                                    </div>
                                                    <div class="col-xl-8 col-sm-7">
                                                        <select id="cat" class="form-control" name="category_id" required="">
                                                            <option value="">انتخاب کنید...</option>
                                                            @foreach($categories as $category)
                                                            <option value="{{$category->id}}">{{$category->title}}</option>

                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <div class="col-xl-3 col-sm-4 mb-0">
                                                        <label for="validationCustomUsername" >برند محصول :</label>
                                                    </div>

                                                    <div class="col-xl-8 col-sm-7">
                                                        <select id="cat" class="form-control" name="brand_id" required="">
                                                            <option value="">انتخاب کنید...</option>
                                                            @foreach($brands as $brand)
                                                                <option value="{{$brand->id}}">{{$brand->name}}</option>

                                                            @endforeach
                                                        </select>
                                                        <?php if (isset($_GET['cat']) && $_GET['cat'] == "notisset"){?>

                                                        <small class=" alert-danger">لطفا یک دسته بندی برای محصول انتخاب کنید</small>

                                                        <?php }?>
                                                    </div>
                                                </div>
                                                <div class="form-group mb-3 row">
                                                    <div class="col-xl-3 col-sm-4 mb-0">
                                                        <label for="validationCustom02" >قیمت :</label>
                                                    </div>
                                                    <div class="col-xl-8 col-sm-7">
                                                        <input class="form-control " id="validationCustom02" type="number" required="" name="cost">
                                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">مثلا 20000 تومان</div>
                                                        <small>مثلا 20000 تومان</small>
                                                    </div>
                                                </div>
                                                {{--<div class="form-group mb-3 row">
                                                    <div class="col-xl-3 col-sm-4 mb-0">
                                                        <label for="validationCustom03" >درصد تخفیف :</label>
                                                    </div>
                                                    <div class="col-xl-8 col-sm-7">
                                                        <input class="form-control " id="validationCustom02" type="number" min="1" max="99" name="takhfif">
                                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">دقت داشته باشید درصد تخفیف فقط میتواند بین 1 تا 99 باشد</div>
                                                        <small>درصد تخفیف را وارد کنید</small>
                                                    </div>
                                                </div>--}}
                                                {{--<div class="form-group mb-3 row">
                                                    <div class="col-xl-3 col-sm-4 mb-0">
                                                        <label for="validationCustom04" >توضیحات کوتاه :</label>
                                                    </div>
                                                    <div class="col-xl-8 col-sm-7">
                                                        <input class="form-control " id="validationCustom04" type="text" required="" name="short_desc">
                                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">یک توضیحات کوتاه در مورد محصول</div>
                                                        <small>یک توضیحات کوتاه در مورد محصول</small>
                                                    </div>
                                                </div>--}}
                                                <div class="form-group mb-3 row">
                                                    <div class="col-xl-3 col-sm-4 mb-0">
                                                        <label for="validationCustom05" >توضیحات :</label>
                                                    </div>
                                                    <div class="col-xl-8 col-sm-7">
                                                        <input class="form-control " id="validationCustom05" type="text" required="" name="description">
                                                        <div class="invalid-feedback offset-sm-4 offset-xl-3">توضیحات کامل تر در مورد محصول</div>
                                                        <small>توضیحات کامل تر در مورد محصول</small>
                                                    </div>
                                                </div>

                                            </div>
                                            {{--<div class="form">
                                                <div class="form-group row">
                                                    <div class="col-xl-3 col-sm-4 mb-0">
                                                        <label for="validationCustom06" >جزییات محصول :</label>
                                                    </div>
                                                    <div class="col-xl-8 col-sm-7">
                                                        <table data-dynamicrows class="table table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th style="width: 30%;" class="text-center">رنگ</th>
                                                                <th style="width: 30%;" class="text-center">سایز</th>
                                                                <th style="width: 30%;" class="text-center">تعداد</th>
                                                                <th style="width: 10%;" class="text-center">عملیات</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td><input type="text" name="contacts[0][color]" class="form-control"></td>
                                                                <td><input type="text" name="contacts[0][size]" class="form-control"></td>
                                                                <td><input type="number" name="contacts[0][tedad]" class="form-control"></td>
                                                                <td class="text-center">
                                                                    <i class="fa fa-minus" data-remove></i>
                                                                    <i class="fa fa-plus" data-add></i>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <small class="d-block mb-1">در صورتی که محصول شما نیاز به سایز یا رنگ ندارد فیلد مربوطه را خالی بگذارید</small>
                                                        <small class="text-danger ">توجه داشته باشید خالی گذاشتن فیلد تعداد به منزله ناموجود بودن محصول میباشد</small>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-xl-3 col-sm-4 mb-0">
                                                        <label>وضعیت موجودی :</label>
                                                    </div>
                                                    <div class="col-xl-8 col-sm-7 ps-0">
                                                        <div class="form-check col-md-1 d-inline-block mx-3 mt-4 px-3">

                                                            <label class="form-check-label" for="status2">
                                                                جدید
                                                            </label>
                                                            <input class="form-check-input " type="radio" name="status" id="status2" value="2" checked>
                                                        </div>
                                                        <div class="form-check col-md-1 d-inline-block mx-3 mt-4">

                                                            <label class="form-check-label" for="status1">
                                                                موجود
                                                            </label>
                                                            <input class="form-check-input " type="radio" name="status" id="status1" value="1" checked>
                                                        </div>
                                                        <div class="form-check col-md-1 d-inline-block mx-3 mt-4">

                                                            <label class="form-check-label" for="status0">
                                                                ناموجود
                                                            </label>
                                                            <input class="form-check-input" type="radio" name="status" id="status0" value="0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--<div class="form-group row">
                                                    <div class="col-xl-3 col-sm-4 mb-0">
                                                        <label>تعداد موجودی :</label>
                                                    </div>
                                                    <div class="col-xl-9 col-xl-8 col-sm-7 ps-0">
                                                        <fieldset class="qty-box ">
                                                            <div class="input-group">
                                                                <input class="touchspin" type="text" value="1">
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>-->
                                            </div>--}}

                                            <div class="col-xl-12">
                                                <div class="add-product">
                                                    <div class="row">

                                                        <div class="col-xl-3 col-sm-4 mb-0">
                                                            <label class="py-3 h6">عکس اصلی محصول :</label>
                                                        </div>

                                                        <div class="col-xl-8 col-sm-7">
                                                            <ul class="file-upload-product">
                                                                <li class="col-12">
                                                                    <div class="box-input-file"><input class="upload" type="file" name="image"><i class="fa fa-plus"></i></div></li>
                                                            </ul>
                                                        </div>

                                                        <div class="col-xl-12 xl-50 col-sm-12 col-12 mt-5">

                                                            {{--<ul class="file-upload-product d-flex flex-row">

                                                                <li class="mx-2"><label class="p-3 h6"> عکس های محصول :</label><div class="box-input-file"><input class="upload" type="file" name="galery[]"><i class="fa fa-plus"></i></div></li>
                                                                <li class="mx-2"><div class="box-input-file"><input class="upload" type="file" name="galery[]"><i class="fa fa-plus"></i></div></li>
                                                                <li class="mx-2"><div class="box-input-file"><input class="upload" type="file" name="galery[]"><i class="fa fa-plus"></i></div></li>
                                                                <li class="mx-2"><div class="box-input-file"><input class="upload" type="file" name="galery[]"><i class="fa fa-plus"></i></div></li>
                                                                <li class="mx-2"><div class="box-input-file"><input class="upload" type="file" name="galery[]"><i class="fa fa-plus"></i></div></li>
                                                            </ul>--}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="offset-xl-3 offset-sm-4 mt-5">
                                                <button id="sabt" type="submit" class="btn btn-primary">اضافه کردن</button>
                                                <button type="reset" class="btn btn-light">بیخیال</button>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

@endsection
