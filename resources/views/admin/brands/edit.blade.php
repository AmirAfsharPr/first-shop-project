@extends('admin.layout.master')

@section('content')

    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>ویرایش برند
                                <small>پنل مدیریت سایت افشار</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">برند ها </li>
                            <li class="breadcrumb-item active">ویرایش برند </li>
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
                            <h5>ویرایش برند {{$brand->name}}</h5>
                            @include('admin.layout.errors')

                        </div>
                        <div class="card-body">

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                                    <form  class="needs-validation user-add" novalidate="" method="post" action="{{route('brands.update', $brand)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <h4>اطلاعات برند</h4>
                                        <div class="form-group row">
                                            <div class="col-xl-3 col-md-4">
                                                <label for="validationCustom0" ><span>*</span> نام برند </label>
                                            </div>
                                            <div class="col-xl-8 col-md-7">
                                                <input class="form-control " id="validationCustom0" type="text" required=""  name="name" value="{{$brand->name}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xl-3 col-md-4">
                                                <label for="validationCustom1" ><span>*</span>تصویر برند</label>
                                            </div>
                                            <div class="col-xl-8 col-md-7">
                                                <input class="form-control " id="validationCustom1" type="file" required=""  name="image">
                                                <img src="{{str_replace('public', '/storage', $brand->image)}}" width="50px">
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
