@extends('client.layout.master')

@section('content')

    <main class="main cart">
        <div class="page-content pt-7 pb-10 rtl">
            <div class="step-by pr-4 pl-4">
                <h3 class="title title-simple title-steps active"><a href="{{route('client.cart.index')}}">1. سبد خرید</a></h3>
                <h3 class="title title-simple title-steps"><a href="{{route('client.orders.create')}}">2. نهایی کردن خرید</a></h3>
                <h3 class="title title-simple title-steps"><a href="#">3. تکمیل خرید</a></h3>
            </div>
            <div class="container mt-7 mb-2">
                <div class="row">
                    <div class="col-lg-12 col-md-12 pr-lg-4">
                        @if($total_items > 0)
                            <table class="shop-table cart-table">
                                <thead>
                                <tr>
                                    <th class="text-center"><span>محصول</span></th>
                                    <th></th>
                                    <th class="text-center">رنگ</th>
                                    <th class="text-center">سایز</th>
                                    <th class="text-center"><span>قیمت</span></th>
                                    <th class="text-center"><span>تعداد</span></th>
                                    <th class="text-center">جمع نهایی</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                    @php
                                    $product = $item['product'];
                                    $productQty = $item['quantity'];
                                    @endphp
                                    <tr id="cart-tr-{{$product->id}}">

                                        <td class="product-thumbnail  pl-2 pr-0">
                                            <figure>
                                                <a href="{{route('client.products.show',$product)}}">
                                                    <img src="{{str_replace('public','/storage',$product->image)}}" width="100" height="100" alt="product">
                                                </a>
                                            </figure>
                                        </td>
                                        <td class="product-name  pl-2 pr-0">
                                            <div class="product-name-section text-right pr-lg-7">

                                                <a href="{{route('client.products.show',$product)}}">{{$product->name}}</a>

                                            </div>
                                        </td>
                                        <td class="text-center pl-2 pr-0">
                                            <span>-</span>
                                        </td>
                                        <td class="text-center  pl-2 pr-0">
                                            <span>-</span>
                                        </td>
                                        <td class="product-subtotal text-center  pl-0 pr-0">

                                        <span class="amount">
                                            {{number_format($product->cost_with_discount)}}
                                            تومان</span>
                                        </td>
                                        <td class="product-quantity  pl-2 pr-0">
                                            <div class=" text-center">
                                                    {{$productQty}}
                                            </div>
                                        </td>
                                        <td class="product-subtotal text-center  pl-2 pr-0">
                                            <span class="amount font-weight-bold">{{number_format($product->cost_with_discount * $productQty)}} تومان</span>
                                        </td>
                                        <td class="product-close">
                                            <button class="product-remove ml-2" title="Remove this product" onclick="removeFromCart({{$product->id}})">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="cart-actions mb-6 pt-4">
                                <a href="{{route('client.products.index')}}" class="btn btn-dark btn-md btn-rounded btn-icon-left ml-auto mb-4 ">ادامه خرید<i class="d-icon-arrow-left"></i></a>

                            </div>

                        @else
                            <p class="alert-black pt-5 pb-5 text-center text-light">محصولی برای نمایش وجود ندارد ابتدا محصولی را اضافه کنید</p>
                            <div class="cart-actions mb-6 pt-4">
                                <a href="{{route('client.products.index')}}" class="btn btn-dark btn-md btn-rounded btn-icon-left ml-auto mb-4 ">ادامه خرید<i class="d-icon-arrow-left"></i></a>

                            </div>
                        @endif
                            <!--<div class="cart-coupon-box mb-8">
                            <h4 class="title coupon-title text-uppercase ls-m">Coupon Discount</h4>
                            <input type="text" name="coupon_code" class="input-text form-control text-grey ls-m mb-4" id="coupon_code" value placeholder="Enter coupon code here...">
                            <button type="submit" class="btn btn-md btn-dark btn-rounded btn-outline">Apply
                                Coupon</button>
                        </div>-->
                    </div>
                    @if($total_items > 0)
                    <aside class="col-lg-12 sticky-sidebar-wrapper">
                        <div class="sticky-sidebar" data-sticky-options="{'bottom': 20}">
                            <div class="summary mb-4">
                                <h3 class="summary-title text-right">سبد خرید نهایی</h3>
                                <table class="shipping">
                                    <tr class="summary-subtotal">
                                        <td>
                                            <h4 class="summary-subtitle">مجموع قیمت</h4>
                                        </td>
                                        <td>
                                            <p class="summary-subtotal-price">
                                                {{number_format($total_amount)}}تومان
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4 class="summary-subtitle">هزینه ارسال</h4>
                                        </td>
                                        <td>
                                            <p class="summary-subtotal-price">50.000 تومان</p>
                                        </td>
                                    </tr>

                                </table>

                                <table class="total">
                                    <tr class="summary-subtotal">
                                        <td>
                                            <h4 class="summary-subtitle">قیمت نهایی</h4>
                                        </td>
                                        <td>
                                            <p class="summary-total-price ls-s">
                                                {{number_format($total_amount +=50000)}}
                                            </p>
                                        </td>
                                    </tr>
                                </table>
                                <a href="{{route('client.orders.create')}}" class="btn btn-dark btn-rounded btn-checkout">نهایی کردن خرید</a>
                            </div>
                        </div>
                    </aside>
                    @endif
                </div>
            </div>
        </div>
    </main>

@endsection
