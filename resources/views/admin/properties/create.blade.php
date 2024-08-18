@extends('admin.layout.master')

@section('content')

    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>افزودن ویژگی
                                <small>پنل مدیریت سایت افشار</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">ویژگی ها </li>
                            <li class="breadcrumb-item active">افزودن ویژگی جدید </li>
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
                            <h5>افزودن ویژگی جدید </h5>
                            @include('admin.layout.errors')

                        </div>
                        <div class="card-body">

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                                    <form  class="needs-validation user-add" novalidate="" method="post" action="{{route('properties.store')}}">
                                        @csrf
                                        <h4>ویژگی جدید </h4>
                                        <div class="form-group row">
                                            <div class="col-xl-3 col-md-4">
                                                <label for="validationCustom0" > عنوان  <span>*</span></label>
                                            </div>
                                            <div class="col-xl-8 col-md-7">
                                                <input class="form-control " id="validationCustom0" type="text" required=""  name="title">
                                            </div>
                                        </div>
                                        {{--<div class="form-group row">
                                            <div class="col-xl-3 col-md-4">
                                                <label for="validationCustom1" ><span>*</span>لینک دسته</label>
                                            </div>
                                            <div class="col-xl-8 col-md-7">
                                                <input class="form-control " id="validationCustom1" type="text" required=""  name="slug">
                                            </div>

                                        </div>--}}

                                        <div class="form-group row">
                                            <div class="col-xl-3 col-md-4">
                                                <label for="validationCustom2" >گروه ویژگی <span>*</span></label>
                                            </div>
                                            <div class="col-xl-8 col-md-7">
                                                <select class="form-control" id="validationcustom2" name="property_group_id">
                                                    <option value="" disabled selected>گروه مشخصات را نتخاب کنید...</option>
                                                    @foreach($groups as $group)
                                                        <option value="{{$group->id}}">{{$group->title}}</option>
                                                    @endforeach

                                                </select>
                                            </div>

                                        </div>


                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-primary" >افزودن</button>
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
