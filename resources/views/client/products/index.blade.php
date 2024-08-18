@extends('client.layout.master')

@section('links')
    <link rel="stylesheet" type="text/css" href="/client/rtl/css/style.min-rtl.css">
    <link rel="stylesheet" type="text/css" href="/client/rtl/css/css-rtl.css">
    <style>
        .like {
            border-color: #26c;
            color: #fff;
            background-color: #26c;
        }
    </style>
@endsection

@section('content')

    <main class="main">
        <div id="rtl" class="page-header" style="background-image: url('/client/images/shop/page-header-back.jpg'); background-color: #3C63A4;">
            <h3 class="page-subtitle">محصولات</h3>
            <h1 class="page-title">فروشگاه افشار</h1>
            <ul class="breadcrumb">
                <li><a href="/"><i class="d-icon-home"></i></a></li>
                <li class="delimiter">/</li>
                <li><a href="/shop">فروشگاه</a></li>
                <li class="delimiter">/</li>
                <li>محصولات</li>
            </ul>
        </div>

        <!--<div class="page-content mb-10 pb-6">-->
        <div class="container">
            <div class="row gutter-lg main-content-wrap">

                @include('client.layout.sidebar')

                <div class="col-lg-9 main-content pt-10">
                    <!--<nav class="toolbox  sticky-toolbox sticky-content fix-top">
                        <div class="toolbox-left">
                            <a href="#" class="toolbox-item left-sidebar-toggle btn btn-outline btn-primary
                                            btn-rounded btn-icon-right d-lg-none">Filter<i class="d-icon-arrow-right"></i></a>
                            <div class="toolbox-item toolbox-sort select-box text-dark">
                                <label>Sort By :</label>
                                <select name="orderby" class="form-control">
                                    <option value="default">Default</option>
                                    <option value="popularity" selected="selected">Most Popular</option>
                                    <option value="rating">Average rating</option>
                                    <option value="date">Latest</option>
                                    <option value="price-low">Sort forward price low</option>
                                    <option value="price-high">Sort forward price high</option>
                                    <option value>Clear custom sort</option>
                                </select>
                            </div>
                        </div>
                        <div class="toolbox-right">
                            <div class="toolbox-item toolbox-show select-box text-dark">
                                <label>Show :</label>
                                <select name="count" class="form-control">
                                    <option value="12">12</option>
                                    <option value="24">24</option>
                                    <option value="36">36</option>
                                </select>
                            </div>
                            <div class="toolbox-item toolbox-layout mr-lg-0">
                                <a href="shop-list-mode.html" class="d-icon-mode-list btn-layout"></a>
                                <a href="shop.html" class="d-icon-mode-grid btn-layout active"></a>
                            </div>
                        </div>
                    </nav>-->
                    <div class="row cols-2 cols-sm-3 product-wrapper">
                        @foreach($products as $product)
                            <div class="product-wrap">
                                <div class="product">
                                    <figure class="product-media">
                                        <a href="{{route('client.products.show', $product)}}">
                                            <img src="{{str_replace('public', '/storage', $product->image)}}" alt="product" width="280" height="315">
                                        </a>
                                        @if($product->has_discount)
                                            <div class="product-label-group">
                                                <span class="product-label label-sale">%{{$product->discount_value}} تخفیف</span>
                                            </div>
                                        @endif
                                        <div class="product-action-vertical">
                                            {{--<a href="#" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="Add to cart"><i class="d-icon-bag"></i></a>--}}
                                            <a id="like-{{$product->id}}" class="btn-product-icon btn-wishlist @if($product->is_liked) like @endif debug" title=" افزودن به مورد علاقه ها" onclick="like({{$product->id}})"><i class="d-icon-heart"></i></a>
                                        </div>

                                        {{--<div class="product-action-vertical">
                                                <?php
                                            if (isset($_SESSION['userid'])) {
                                                $userid = $_SESSION['userid'];
                                                $prid = $pr['id'];
                                                $select_wish = "SELECT * FROM tbl_wishlist WHERE user_id = '$userid' and pr_id = '$prid'";
                                                $result_wish = mysqli_query($conn, $select_wish);
                                                $count_wish = mysqli_num_rows($result_wish);
                                                ?>
                                            <form method="post" action="includes/addwishlist_process.php">
                                                <input type="hidden" name="prid" value="<?php echo $pr['id'];?>">

                                                <button type="submit" class="btn-product-icon" title="Add to wishlist"
                                                        <?php if (isset($count_wish) && $count_wish >0) { echo 'style="border-color: #26c; color: #fff; background-color: #26c;"';
                                                }?>><i class="d-icon-heart"></i></button>
                                            </form>
                                            <?php }else { ?>
                                            <button type="submit" class="btn-product-icon" title="Add to wishlist" onclick="alert('برای اضافه کردن محصول به لیست مورد علاقه ها ابتدا باید وارد شوید')"
                                            ><i class="d-icon-heart"></i></button>
                                            <?php } ?>
                                        </div>--}}
                                        <div class="product-action">
                                            <a href="{{route('client.products.show', $product)}}" class="btn-product" title="Quick View">
                                                مشاهده</a>
                                        </div>
                                    </figure>
                                    <div class="product-details">
                                        <div class="product-cat">

                                            <a href="#">{{$product->category->title}}</a>
                                        </div>
                                        <h3 class="product-name">
                                            <a href="{{route('client.products.show', $product)}}">{{$product->name}}</a>
                                        </h3>
                                        <div class="product-price">
                                            @if($product->has_discount)
                                                <ins class="new-price">{{number_format($product->cost_with_discount)}}
                                                    تومان</ins>
                                                <del class="old-price">
                                                        {{number_format($product->cost)}}
                                                    تومان</del>
                                            @else
                                                <ins class="new-price">{{number_format($product->cost)}} تومان</ins>
                                            @endif

                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings-full">
                                                <span class="ratings" style="width:100%"></span>
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <a href="#" class="rating-reviews">( 6 reviews )</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{--<nav class="toolbox toolbox-pagination">
                        <?php
                        $pr_rows = mysqli_num_rows($products);

                        if ($pr_rows < 12) {
                            ?>
                        <p class="show-info">نمایش <span> <?php echo $pr_rows;?></span> محصول</p>
                        <?php }else{
                            ?>
                        <p class="show-info">نمایش <span>12 از <?php echo $pr_rows;?></span> محصول</p>
                        <?php } ?>
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
                </div>
            </div>
        </div>
        </div>
    </main>

@endsection

