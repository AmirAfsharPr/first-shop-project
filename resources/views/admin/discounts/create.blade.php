@extends('admin.layout.master')

@section('content')

    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>افزودن تخفیف به {{$product->name}}
                                <small>پنل مدیریت سایت افشار</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">محصولات </li>
                            <li class="breadcrumb-item active">{{$product->name}}</li>
                            <li class="breadcrumb-item active">افزودن تخفیف</li>
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
                            <h5>افزودن تخفیف</h5>
                            @include('admin.layout.errors')
                        </div>
                        <div class="card-body">

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                                    <form  class="needs-validation user-add" novalidate="" method="post" action="{{route('products.discounts.store', $product)}}">
                                        @csrf
                                        <h4>{{$product->name}}</h4>
                                        <div class="form-group row">
                                            <div class="col-xl-3 col-md-4">
                                                <label for="validationCustom0" > مقدار <span>*</span></label>
                                            </div>
                                            <div class="col-xl-8 col-md-7">
                                                <input class="form-control " id="validationCustom0" type="number" required=""  name="value" max="100" min="1" value="{{optional($product->discount)->value}}">
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
