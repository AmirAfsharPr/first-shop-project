@extends('client.layout.master')

@section('content')

    <main class="main">
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="demo1.html"><i class="d-icon-home"></i></a></li>
                    <li class="pl-1">/</li>
                    <li>لیست محصولات مورد علاقه</li>
                </ul>
            </div>
        </nav>
        <div class="page-content pt-10 pb-10 mb-2">
            <div class="container">
                @if(auth()->user()->likes()->count() == 0)
                    <div class="col-12 p-4 text-center height-x3 mt-5">محصولی برای نمایش وجود ندارد</div>
                @else
                    <table class="shop-table wishlist-table mt-2 mb-4">
                        <thead>
                        <tr>
                            <th class="product-name text-center" colspan="2"><span>محصول</span></th>
                            <th class="product-price text-center"><span>قیمت</span></th>
                            <th class="product-stock-status text-center"><span>وضعیت موجودی</span></th>
                            <th class="product-add-to-cart"></th>
                            <th class="product-remove"></th>
                        </tr>
                        </thead>
                        <tbody class="wishlist-items-wrapper">

                        @foreach($products as $product)
                            <tr>
                                <td class="product-thumbnail">
                                    <a href="{{route('client.products.show',$product)}}">
                                        <figure>
                                            <img src="{{str_replace('public','/storage',$product->image)}}" width="100" height="100" alt="{{$product->name}}">
                                        </figure>
                                    </a>
                                </td>
                                <td class="product-name text-right">
                                    <a href="{{route('client.products.show',$product)}}">{{$product->name}}</a>
                                </td>
                                <td class=" text-center">
                                    <span class="">{{number_format($product->cost)}} تومان</span>
                                </td>
                                <td class="product-stock-status text-center">
                                    -
                                </td>
                                <td class="product-add-to-cart">
                                    <a href="{{route('client.products.show',$product)}}" class="btn btn-outline">مشاهده جزییات محصول</a>
                                </td>
                                <td class="product-remove">
                                    <div>
                                        <form action="{{route('client.likes.destroy',$product)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-outline" title="Remove this product"><i class="fas fa-times"></i></button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </main>

@endsection
