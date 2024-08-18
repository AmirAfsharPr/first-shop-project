@extends('admin.layout.master')

@section('content')

    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>ویرایش نقش {{$role->title}}
                                <small>پنل مدیریت سایت افشار</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">نقش ها </li>
                            <li class="breadcrumb-item active">ویرایش نقش ها</li>
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
                            <h5> ویرایش نقش</h5>
                            @include('admin.layout.errors')

                        </div>
                        <div class="card-body">

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                                    <form  class="needs-validation user-add" novalidate="" method="post" action="{{route('roles.update',$role)}}">
                                        @csrf
                                        @method('PATCH')
                                        <h4>{{$role->title}}</h4>
                                        <div class="form-group row">
                                            <div class="col-xl-3 col-md-4">
                                                <label for="validationCustom0" > عنوان نقش : <span>*</span></label>
                                            </div>
                                            <div class="col-xl-8 col-md-7">
                                                <input class="form-control " id="validationCustom0" type="text" required=""  name="title" value="{{$role->title}}">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-xl-3 col-md-4">
                                                <label for="validationCustom2" >انتخاب دستزسی ها : <span>*</span></label>
                                            </div>
                                            <div class="col-xl-9 col-md-8">

                                                @foreach($permissions as $permission)
                                                    <label class="col-xl-5 col-md-4">
                                                        <input
                                                            @if($role->hasPermission($permission))
                                                                checked
                                                            @endif
                                                            type="checkbox" name="permissions[]" value="{{$permission->id}}">
                                                        {{$permission->label}}
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
