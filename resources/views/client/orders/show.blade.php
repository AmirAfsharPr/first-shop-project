@extends('client.layout.master')

@section('content')

    <main class="main order">
        <div class="page-content pt-7 pb-10 mb-10 rtl">
            <div class="step-by pr-4 pl-4 ">
                <h3 class="title title-simple title-steps"><a href="{{route('client.cart.index')}}">1. سبد خرید</a></h3>
                <h3 class="title title-simple title-steps"><a href="{{route('client.orders.create')}}">2. نهایی کردن خرید</a></h3>
                <h3 class="title title-simple title-steps active"><a href="#">3. تکمیل خرید</a></h3>
            </div>
            <div class="container mt-8">

                <div class="order-message mr-auto ml-auto" >
                    <div class="icon-box d-inline-flex align-items-center">
                        <div class="icon-box-icon mb-0">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
<g>
    <path fill="none" stroke-width="3" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="10" d="
											M33.3,3.9c-2.7-1.1-5.6-1.8-8.7-1.8c-12.3,0-22.4,10-22.4,22.4c0,12.3,10,22.4,22.4,22.4c12.3,0,22.4-10,22.4-22.4
											c0-0.7,0-1.4-0.1-2.1"></path>
    <polyline fill="none" stroke-width="4" stroke-linecap="round" stroke-linejoin="bevel" stroke-miterlimit="10" points="
											48,6.9 24.4,29.8 17.2,22.3 	"></polyline>
</g>
</svg>
                        </div>
                        <div class="icon-box-content text-right">
                            <h5 class="icon-box-title font-weight-bold lh-1 mb-1">با تشکر از شما</h5>
                            @if($order->payment_status == 'ok')
                                <p class="lh-1 ls-m">سفارش شما با موفقیت ثبت شد</p>
                            @else
                                <p class="lh-1 ls-m">پرداخت نا موفق بود</p>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="order-results col-10 mx-auto">
                    <div class="overview-item">

                        <span>شماره پیگیری:</span>
                        <strong>{{$order->transaction_id}}</strong>
                    </div>
                    <div class="overview-item">
                        <span>تاریخ:</span>
                        <strong>{{$order->created_at}}</strong>
                    </div>
                    <div class="overview-item">
                        <span>مبلغ سفارش:</span>
                        <strong>{{$order->amount}} تومان </strong>
                    </div>
                </div>
                <a href="{{route('client.products.index')}}" class="btn btn-icon-right btn-dark btn-back btn-rounded btn-md mb-4">ادامه خرید<i class="d-icon-arrow-left"></i></a>
            </div>
        </div>
    </main>

@endsection
