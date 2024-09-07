@extends('client.layout.master')

@section('content')


    <main class="main checkout">
        <div class="page-content pt-7 pb-10 mb-10 rtl">
            <div class="step-by pr-4 pl-4 ">
                <h3 class="title title-simple title-steps"><a href="{{route('client.cart.index')}}">1. سبد خرید</a></h3>
                <h3 class="title title-simple title-steps active"><a href="{{route('client.orders.create')}}">2. نهایی کردن خرید</a></h3>
                <h3 class="title title-simple title-steps"><a href="#">3. تکمیل خرید</a></h3>
            </div>
            <div class="container mt-7">
                <form action="{{route('client.orders.store')}}" class="form" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-7 mb-6 mb-lg-0 pr-lg-4">
                            <h3 class="title title-simple text-right text-uppercase">جزییات صورتحساب</h3>

                            <div class="row">
                                <div class="col-xs-6">
                                    <label>استان : *</label>
                                    <input type="text" class="form-control" name="state" required value=""/>
                                </div>
                                <div class="col-xs-6">
                                    <label>شهر : *</label>
                                    <input type="text" class="form-control" name="city" required value="" />
                                </div>
                            </div>
                            <div class="row">
                                <label>آدرس : *</label>
                                <input type="text" class="form-control" name="address" required placeholder="نشانی محل سکونت خود را بصورت کامل و دقیق وارد کنید" value="" />
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <label>کد پستی *</label>
                                    <input type="text" class="form-control" name="zip_code" required value=""/>
                                </div>
                                <div class="col-xs-6">
                                    <label>تلفن *</label>
                                    <input type="text" class="form-control" name="phone" required value=""/>
                                </div>
                            </div>
                            <h2 class="title title-simple text-uppercase text-right">توضیحات اضافی</h2>
                            <label>اگر توضیحات خاصی در مورد سفارش خود دارید در این قسمت برای ما بنویسید (اختیاری)</label>
                            <textarea class="form-control pb-2 pt-2 mb-0" cols="30" rows="5" placeholder="مثلا ساعت تحویل و ..." name="description"></textarea>
                        </div>
                        <aside class="col-lg-5 sticky-sidebar-wrapper">
                            <div class="sticky-sidebar mt-1" data-sticky-options="{'bottom': 50}">
                                <div class="summary pt-5">
                                    <h3 class="title title-simple text-right text-uppercase">سبد خرید</h3>
                                    <table class="order-table">
                                        <thead>
                                        <tr>
                                            <th>محصولات</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach(\App\Models\Cart::getItems() as $item)
                                            @php
                                            $product = $item['product'];
                                            $productQty = $item['quantity']
                                            @endphp
                                        <tr>
                                            <td class="product-name"><span class="product-quantity">{{$productQty}} ×&nbsp;</span>{{$product->name}} </td>
                                            <td class="product-total text-body">{{$productQty * $product->cost_with_discount}} تومان</td>
                                        </tr>
                                        @endforeach
                                        <span class="product-quantity"></span>

                                        <tr class="summary-subtotal">
                                            <td>
                                                <h4 class="summary-subtitle">مجموع</h4>
                                            </td>
                                            <td class="summary-subtotal-price pb-0 pt-0">{{\App\Models\Cart::totalAmount()}} تومان
                                            </td>
                                        </tr>
                                        <tr class="summary-subtotal">
                                            <td>
                                                <h4 class="summary-subtitle">هزینه ارسال</h4>
                                            </td>
                                            <td class="summary-subtotal-price pb-0 pt-0">50 تومان
                                            </td>
                                        </tr>
                                        <tr class="summary-total">
                                            <td class="pb-0">
                                                <h4 class="summary-subtitle">جمع نهایی</h4>
                                            </td>
                                            <td class=" pt-0 pb-0">
                                                <p class="summary-total-price ls-s text-primary">{{\App\Models\Cart::totalAmount() + 50000}} تومان</p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class=" accordion radio-type">
                                        <h4 class="summary-subtitle ls-m pb-3">کد تخفیف</h4>
                                        <div class="card">
                                            <input class="form-control" type="text" name="offer_code" placeholder="کد تخفیف خود را در اینجا وارد کنید">
                                        </div>

                                    </div>
                                    <div class="form-checkbox mt-4 mb-5">
                                        <input type="checkbox" class="custom-checkbox" id="terms-condition" name="terms-condition" />
                                        <label class="form-control-label" for="terms-condition">
                                            اینجانب تمامی شرایط و قوانین را مطالعه نموده و پذیرفته ام <a href="#">مطالعه قوانین و مقررات
                                            </a>*
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-dark btn-rounded btn-order">ثبت سفارش</button>
                                </div>
                            </div>
                        </aside>
                    </div>
                </form>
            </div>
        </div>
    </main>

@endsection
