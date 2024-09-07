@extends('admin.layout.master')

@section('content')

    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>افزودن کد تخفیف
                                <small>پنل مدیریت سایت افشار</small>
                            </h3>
                        </div>
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
                            <h5> افزودن کد تخفیف جدید</h5>
                            @include('admin.layout.errors')

                        </div>
                        <div class="card-body">

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                                    <form  class="needs-validation user-add" novalidate="" method="post" action="{{route('offers.store')}}">
                                        @csrf
                                        <h4>اطلاعات دسته بندی</h4>
                                        <div class="form-group row">
                                            <div class="col-xl-3 col-md-4">
                                                <label for="validationCustom0" > کد <span>*</span></label>
                                            </div>
                                            <div class="col-xl-8 col-md-7">
                                                <input class="form-control " id="validationCustom0" type="text" required=""  name="code">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xl-3 col-md-4">
                                                <label for="validationCustom1" >تاریخ آغاز<span>*</span></label>
                                            </div>
                                            <div class="col-xl-8 col-md-7">
                                                <input class="form-control " id="validationCustom1" type="date" required=""  name="starts_at">
                                            </div>

                                        </div>

                                        <div class="form-group row">
                                            <div class="col-xl-3 col-md-4">
                                                <label for="validationCustom2" >تاریخ پایان <span>*</span></label>
                                            </div>
                                            <div class="col-xl-8 col-md-7">
                                                <input class="form-control " id="validationCustom2" type="date" required=""  name="expires_at">
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
