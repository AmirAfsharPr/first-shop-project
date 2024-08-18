@extends('admin.layout.master')


@section('content')

    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>ویرایش دسته بندی
                                <small>پنل مدیریت سایت افشار</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">محصولات </li>
                            <li class="breadcrumb-item active">ویرایش دسته بندی </li>
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
                    <div class="card tab2-card">
                        <div class="card-header">
                            <h5> ویرایش دسته بندی </h5>
                            @include('admin.layout.errors')

                        </div>
                        <div class="card-body">

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                                    <form  class="needs-validation user-add" novalidate="" method="post" action="{{route('categories.update', $category)}}">
                                        @csrf
                                        @method('PATCH')

                                        <h4>ویرایش دسته بندی {{$category->title}}</h4>
                                        <div class="form-group row">
                                            <div class="col-xl-3 col-md-4">
                                                <label for="validationCustom0" ><span>*</span> عنوان دسته </label>
                                            </div>
                                            <div class="col-xl-8 col-md-7">
                                                <input class="form-control " id="validationCustom0" type="text" required="" value="{{$category->title}}" name="title">
                                            </div>
                                        </div>
                                        {{--<div class="form-group row">
                                            <div class="col-xl-3 col-md-4">
                                                <label for="validationCustom1" ><span>*</span>لینک دسته</label>
                                            </div>
                                            <div class="col-xl-8 col-md-7">
                                                <input class="form-control " id="validationCustom1" type="text"  value="" name="catlink">
                                            </div>

                                        </div>--}}

                                        <div class="form-group row">
                                            <div class="col-xl-3 col-md-4">
                                                <label for="validationCustom2" ><span>*</span>والد دسته</label>
                                            </div>
                                            <div class="col-xl-8 col-md-7">
                                                <select class="form-control" id="validationcustom2" name="category_id">
                                                    <option value="">دسته والد را انتخاب کنید</option>
                                                    @foreach($categories as $parent)
                                                        <option
                                                            @if($parent->id == $category->category_id)
                                                                selected
                                                            @endif
                                                            value="{{$parent->id}}">{{$parent->title}}</option>
                                                    @endforeach

                                                </select>
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <div class="col-xl-3 col-md-4">
                                                <label for="validationCustom2" ><span>*</span>انتخاب گروه مشخصات : </label>
                                            </div>
                                            <div class="col-xl-9 col-md-8">

                                                @foreach($properties as $property)
                                                    <label class="col-xl-5 col-md-4">
                                                        <input
                                                            @if($category->hasPropertyGroup($property))
                                                                checked
                                                            @endif
                                                            type="checkbox" name="properties[]" value="{{$property->id}}">
                                                        {{$property->title}}
                                                    </label>

                                                @endforeach
                                            </div>

                                        </div>

                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-primary" >ویرایش</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

    </div>


@endsection
