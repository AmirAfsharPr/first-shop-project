@extends('admin.layout.master')

@section('content')

    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>انتخاب دسته ویژه
                                <small>پنل مدیریت سایت افشار</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">دسته بندی ها </li>
                            <li class="breadcrumb-item active">دسته بندی ویژه</li>
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
                            <h5>دسته بندی ویژه</h5>
                            @include('admin.layout.errors')

                        </div>
                        <div class="card-body">

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                                    <form  class="needs-validation user-add" novalidate="" method="post" action="{{route('featuredCategory.store')}}">
                                        @csrf
                                        <h4>انتخاب دسته ویژه</h4>

                                        <div class="form-group row">
                                            <div class="col-xl-3 col-md-4">
                                                <label for="validationCustom2" >دسته ویژه <span>*</span></label>
                                            </div>
                                            <div class="col-xl-8 col-md-7">
                                                <select class="form-control" id="validationcustom2" name="category_id">
                                                    <option value="" disabled selected>دسته ویژه را نتخاب کنید...</option>
                                                    @foreach($categories as $category)
                                                        <option
                                                            @if($featuredCategory->category_id == $category->id)
                                                                selected
                                                            @endif
                                                            value="{{$category->id}}">{{$category->title}}</option>
                                                    @endforeach

                                                </select>
                                            </div>

                                        </div>


                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-primary" >انتخاب</button>
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
