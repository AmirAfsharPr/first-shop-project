@extends('client.layout.master')

@section('content')

    <main class="main">
        <div id="rtl" class="page-header" style="background-image: url('/client/images/shop/page-header-back.jpg'); background-color: #3C63A4;">
            <h3 class="page-subtitle">دسته بندی</h3>
            <h1 class="page-title">{{$category->title}}</h1>
            <ul class="breadcrumb">
                <li><a href="index.php"><i class="d-icon-home"></i></a></li>
                <li class="delimiter">/</li>
                <li><a href="shop.php">دسته بندی</a></li>
                <li class="delimiter">/</li>
                <li>{{$category->title}}</li>
            </ul>
        </div>

        <!--<div class="page-content mb-10 pb-6">-->
        <div class="container">
            <div class="row gutter-lg main-content-wrap">

                @include('client.layout.sidebar')

                <div class="col-lg-9 main-content">

                    @if($category->hasProduct())
                        <div class="row cols-2 cols-sm-3 product-wrapper mt-5">
                            @foreach($category->products as $product)
                                <div class="product-wrap">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="{{route('client.products.show',$product)}}">
                                                <img src="{{$product->image_path}}" alt="{{$product->name}}" width="280" height="315">
                                            </a>
                                            <div class="product-label-group">
                                                @if($product->has_discount)
                                                    <span class="product-label label-sale">{{$product->discount_value}}% تخفیف</span>
                                                @endif
                                            </div>
                                            <div class="product-action-vertical">
                                                <button type="submit" class="btn-product-icon" title="افزودن به سبد خرید"
                                                        onclick="like({{$product->id}})"><i class="d-icon-heart"></i></button>
                                            </div>
                                            <div class="product-action">
                                                <a href="{{route('client.products.show',$product)}}" class="btn-product" title="Quick View">
                                                    مشاهده</a>
                                            </div>
                                        </figure>
                                        <div class="product-details">
                                            <div class="product-cat">
                                                <a href="{{route('client.categories.show',$product->category)}}">
                                                    {{$product->category->title}}
                                                </a>
                                            </div>
                                            <h3 class="product-name">
                                                <a href="{{route('client.products.show',$product)}}">{{$product->name}}</a>
                                            </h3>
                                            <div class="product-price">
                                                @if($product->has_discount)
                                                    <ins class="new-price">{{number_format($product->cost_with_discount)}}
                                                        تومان
                                                    </ins>
                                                    <del class="old-price">{{number_format($product->cost)}}
                                                        تومان
                                                    </del>
                                                @else
                                                    <ins class="new-price">{{number_format($product->cost)}} تومان</ins>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{--<nav class="toolbox toolbox-pagination">

                            <p class="show-info">نمایش <span> -</span> محصول</p>
                            <p class="show-info">نمایش <span>12 از -</span> محصول</p>
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                        <i class="d-icon-arrow-right"></i>قبل
                                    </a>
                                </li>
                                <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item page-item-dots"><a class="page-link" href="#">6</a></li>
                                <li class="page-item">
                                    <a class="page-link page-link-next" href="#" aria-label="Next">بعدی<i class="d-icon-arrow-left"></i>
                                    </a>
                                </li>
                            </ul>

                        </nav>--}}
                    @else
                        <p class="alert col-12 text-center text-dark mt-5">محصولی برای نمایش وجود ندارد</p>
                    @endif



                </div>
            </div>
        </div>
        </div>
    </main>

@endsection
