@extends('client.layout.master')


@section('links')

    <link rel="stylesheet" type="text/css" href="/client/vendor/photoswipe/photoswipe.min.css">
    <link rel="stylesheet" type="text/css" href="/client/vendor/photoswipe/default-skin/default-skin.min.css">

    <link rel="stylesheet" type="text/css" href="/client/rtl/css/style.min-rtl.css">

@endsection
@section('content')

    <main class="main mt-8 single-product">
        <div class="page-content mb-10 pb-6">
            <div class="container">
                <div class="product product-single row mb-7">
                    <div class="col-md-6 sticky-sidebar-wrapper">
                        <div class="product-gallery pg-vertical sticky-sidebar" data-sticky-options="{'minWidth': 767}">
                            <div class="product-single-carousel owl-carousel owl-theme owl-nav-inner row cols-1 gutter-no" dir="ltr">
                                <figure class="product-image">
                                    <img src="{{str_replace('public', '/storage', $product->image)}}" data-zoom-image="#" alt="{{$product->name}}" width="800" height="900">
                                </figure>
                                @foreach($product->pictures as $picture)
                                    <figure class="product-image">
                                        <img src="{{str_replace('public', '/storage', $picture->path)}}" data-zoom-image="{{str_replace('public', '/storage', $picture->path)}}" alt="{{$product->name}}" width="800" height="900">
                                    </figure>
                                @endforeach


                            </div>
                            <div class="product-thumbs-wrap" dir="ltr">
                                <div class="product-thumbs">
                                    <div class="product-thumb active">
                                        <img src="{{str_replace('public', '/storage', $product->image)}}" alt="{{$product->name}}" width="109" height="122">
                                    </div>
                                    @foreach($product->pictures as $picture)
                                        <div class="product-thumb">
                                            <img src="{{str_replace('public', '/storage', $picture->path)}}" data-zoom-image="uploads/placeholder.png" alt="{{$product->name}}" width="109" height="122">
                                        </div>
                                    @endforeach

                                </div>
                                <button class="thumb-up disabled"><i class="fas fa-chevron-left"></i></button>
                                <button class="thumb-down disabled"><i class="fas fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-details">
                            <h1 class="product-name">{{$product->name}}</h1>
                            <div class="product-meta">
                                برند محصول: <span class="product-sku">{{$product->brand->name}}</span>

                                دسته محصول: <span class="product-brand"><a href="#">{{$product->category->title}}</a></span>
                            </div>

                            <div class="product-price">
                                <ins class="new-price">{{number_format($product->cost_with_discount)}}
                                    تومان</ins>
                                @if($product->has_discount)
                                    <del class="old-price">
                                        {{number_format($product->cost)}}
                                        تومان</del>
                                @endif

                            </div>

                            <p class="product-short-desc">{{$product->description}}</p>
                            {{--<form method="post" action="includes/addtocart.php">
                                <div class="product-form product-variations product-color">

                                    <label>رنگ:</label>
                                    <div class="select-box">
                                        <select id="countrySelect" name="color" class="select-relations">
                                            <?php
                                            $x = 0;
                                            $select_rang = "SELECT DISTINCT color FROM tbl_joziat_pr WHERE pr_id = $pr_id AND status = 1 ";
                                            $rangha = mysqli_query($conn,$select_rang);
                                            $colors = array();
                                            foreach ($rangha as $rang){
                                                $rang_mahsool = $rang['color'];
                                                ?>

                                            <option class="rangha" id="<?php echo $x; ?>" value="<?php echo $rang["color"]; ?>"><?php echo $rang["color"]; ?></option>

                                                <?php
                                                array_push($colors, $rang_mahsool);
                                                $x += 1; }

                                            ?>
                                                <!--                                            <option value="<?php /*echo $product["color"]; */?>"><?php /*echo $product["color"]; */?></option>
-->                                    </select>
                                    </div>
                                </div>
                                <div class="product-form product-variations product-size">
                                    <label>سایز:</label>
                                    <div class="product-form-group">
                                        <div class="select-box">
                                            <select id="selectsize" name="size" class="select-relations" data-sf-parent="countrySelect">
                                                <?php
                                                $y = 0;
                                                $sizes = array();
                                                do {

                                                    $color = $colors[$y];
                                                    $select_size = "SELECT DISTINCT size FROM tbl_joziat_pr WHERE pr_id = $pr_id AND status = 1 AND color = '$color'";
                                                    $sizeha = mysqli_query($conn,$select_size);
                                                    $zzz = mysqli_fetch_assoc($sizeha);

                                                    /**/
                                                foreach ($sizeha as $size){
                                                    $size_mahsol = $size['size'];
                                                    ?>
                                                <option  value="<?php echo $size['size']; ?>" data-pr="countrySelect:<?php echo $color; ?>"><?php echo $size['size']; ?></option>

                                                    <?php
                                                    array_push($sizes, $size_mahsol);
                                                }
                                                    $y++;}while($y < $x);
                                                var_dump($sizes);

                                                ?>

                                            </select>
                                        </div>
                                        <!--<a href="#" class="product-variation-clean" style="display: none;">پاک کردن</a>-->
                                    </div>
                                </div>
                                <!--<div class="product-variation-price">
                                <?php /*if (!empty($product['takhfif'])){*/?>
                                    <div class="product-price"><?php /*echo number_format($product['takhfif']);*/?> تومان</div>
                                <?php /*}else { */?>
                                    <div class="product-price"><?php /*echo number_format($product['price']);*/?> تومان</div>
                                <?php /*} */?>
                                    </div>-->
                                <hr class="product-divider">
                                <div class="product-form product-qty">
                                    <div class="product-form-group">
                                        <div class="input-group mr-2">
                                            <button class="quantity-minus d-icon-minus" type="button"></button>
                                            <input class="quantity form-control" type="number" name="quantity" min="1" max="1000000">
                                            <button class="quantity-plus d-icon-plus" type="button"></button>
                                        </div>
                                        <input type="hidden" name="prid" value="<?php echo $product['id'];?>">
                                        <button class="btn-product text-normal ls-normal font-weight-semi-bold" type="submit">اضافه کردن به سبد خرید<i class="d-icon-bag pr-1"></i></button>
                                    </div>
                                </div>
                            </form>--}}
                            <hr class="product-divider mb-3">
                            <div class="product-footer">
                                <div class="social-links mr-4">
                                    <a href="#" class="social-link social-instagram fab fa-instagram"></a>
                                    <a href="#" class="social-link icofont-social-telegram fab fa-telegram"></a>
                                    <a href="#" class="social-link social-whatsapp fab fa-whatsapp"></a>
                                </div>
                                <span class="divider d-lg-show"></span>
                                <div class="product-action">
                                    <a id="like-{{$product->id}}" class="btn-product btn-wish mr-6" onclick="like({{$product->id}})">@if($product->is_liked)
                                            <i class="d-icon-heart-full"></i><span> به لیست مورد علاقه ها افزوده شد</span>
                                        @else
                                            <i class="d-icon-heart"></i><span> افزودن به مورد علاقه ها</span>
                                        @endif
                                    </a>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab tab-nav-simple product-tabs mb-4">
                <ul class="nav nav-tabs justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#product-tab-description">توضیحات</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="#product-tab-additional">Additional information</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="#product-tab-reviews">نظرات ({{$product->comments->count()}})</a>
                    </li>
                </ul>
                <div class="container">
                    <div class="tab-content">
                        <div class="tab-pane active in" id="product-tab-description">
                            <div class="row mt-6">
                                <div class="col-md-12">
                                    <h5 class="description-title mb-4 font-weight-semi-bold ls-m">اطلاعات محصول :</h5>
                                    <p class="mb-2">
                                        {{$product->description}}
                                    </p>
                                    {{--<ul class="mb-8">
                                        <li>Praesent id enim sit amet.Tdio vulputate</li>
                                        <li>Eleifend in in tortor. ellus massa.Dristique sitii</li>
                                        <li>Massa ristique sit amet condim vel</li>
                                        <li>Dilisis Facilisis quis sapien. Praesent id enim sit amet</li>
                                    </ul>--}}
                                    <h5 class="description-title mb-3 font-weight-semi-bold ls-m">مشخصات :
                                    </h5>

                                    @php
                                    $propertyGroups = $product->category->propertyGroups
                                     @endphp
                                    <div class="row">
                                        @foreach($propertyGroups as $group)
                                            <div class="col-12 col-lg-4 col-md-6">
                                                <table class="table">
                                                    <tbody>
                                                    <tr>
                                                        <th class="text-right font-weight-semi-bold text-dark pl-0" colspan="2">{{$group->title}} :</th>
                                                    </tr>
                                                    @foreach($group->properties as $property)
                                                        <tr>
                                                            <th class="text-center font-weight-semi-bold text-dark pr-0">{{$property->title}}</th>
                                                            <td class="text-center pr-4 w-25">{{$property->getValueForProduct($product)}}</td>
                                                        </tr>
                                                    @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="tab-pane d-flex" id="product-tab-additional">
                            <ul class="list-none justify-content-center">
                                <li><label>Brands:</label>
                                    <p>SkillStar, SLS</p>
                                </li>
                                <li><label>Color:</label>
                                    <p>Blue, Brown</p>
                                </li>
                                <li><label>Size:</label>
                                    <p>Large, Medium, Small</p>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="product-tab-reviews">

                            <div class="row">
                                <div class="col-lg-4 mb-6">
                                    <div class="avg-rating-container">
                                        <mark>{{--/*<?php
                                              echo number_format($product['rating'],1); ?>*/--}}5</mark>
                                        <div class="avg-rating">
                                            <span class="avg-rating-title">میانگین نمرات</span>
                                            <div class="ratings-container mb-0">
                                                <div class="ratings-full">
                                                    <span class="ratings" style="width:80%"></span>
                                                    <span class="tooltiptext tooltip-top"></span>
                                                </div>
                                                <span class="rating-reviews">({{$product->comments->count()}} نظر ثبت شده)</span>
                                            </div>
                                        </div>
                                    </div>
                                    @auth()
                                    <a class="btn btn-dark btn-rounded submit-review-toggle" href="#">ثبت نظر</a>
                                    @else
                                        <a class="btn btn-sm btn-dark btn-rounded" href="{{route('client.register')}}">برای ثبت نظر ابتدا باید وارد شوید</a>
                                    @endauth
                                </div>
                                <div class="col-lg-8 comments pt-2 pb-10 border-no" style="overflow-y: auto; height: 400px;">
                                    <ul class="comments-list">
                                        @if($product->has_comment)

                                            @foreach($product->comments()->latest()->get() as $comment)

                                                @php
                                                    $date_time = explode(" ",$comment->created_at);
                                                    $date = explode("-",$date_time[0]);
                                                    $y =$date[0];
                                                    $m =$date[1];
                                                    $d =$date[2];
                                                    $time = $date_time[1];
                                                @endphp

                                                <li>
                                                    <div class="comment">
                                                        <div class="comment-body">
                                                            <div class="comment-rating ratings-container">
                                                                <div class="ratings-full">
                                                                    <span class="ratings" style="width:60%"></span>
                                                                    <span class="tooltiptext tooltip-top">3</span>
                                                                </div>
                                                            </div>
                                                            <div class="comment-user"><p dir="ltr">{{$comment->created_at->diffForHumans()}}</p>
                                                        <span class="comment-date">نظر ثبت شده توسط <span class="font-weight-semi-bold text-uppercase text-dark">{{$comment->user->name}}</span> در تاریخ
    <span dir="ltr" class="font-weight-semi-bold text-dark">{{gregorian_to_jalali($y, $m, $d, "-")}}</span></span>
                                                            </div>
                                                            <div class="comment-content mb-5">
                                                                <p>
                                                                    {{$comment->content}}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach

                                        @else
                                            <h6 class="text-center">تا کنون نظری برای این محصول ثبت نشده است</h6>
                                        @endif




                                    </ul>

                                </div>
                            </div>

                            @auth()
                                <div class="review-form-section">
                                    <div class="review-overlay"></div>
                                    <div class="review-form-wrapper">
                                        <div class="title-wrapper text-left mb-3">
                                            <h3 class="title title-simple text-right text-normal">نظر خود را ثبت کنید</h3>
                                        </div>

                                        <form method="post" action="{{route('client.products.comments.store',$product)}}">
                                            @csrf

                                            <label for="email" class="text-dark mb-1 d-block">ایمیل شما:</label>
                                            <input id="email" class="form-control-plaintext col-12 d-inline-block" type="email" name="email" disabled readonly value="{{auth()->user()->email}}" required>

                                            <textarea name="content" id="reply-message" cols="30" rows="6" class="form-control mt-3 mb-4" placeholder="نظر خود را در این قسمت بنویسید *" required style="width: 400px"></textarea>
                                            <button type="submit" class="btn btn-primary btn-rounded">ثبت<i class="d-icon-arrow-left"></i></button>
                                        </form>
                                    </div>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
            {{--<section class="pt-3 mt-10">
                <h2 class="title justify-content-center">محصولات مرتبط</h2>
                <div class="owl-carousel owl-theme owl-nav-full row cols-2 cols-md-3 cols-lg-4" data-owl-options="{
							'items': 5,
							'nav': false,
							'loop': false,
							'dots': true,
							'margin': 20,
							'responsive': {
								'0': {
									'items': 2
								},
								'768': {
									'items': 3
								},
								'992': {
									'items': 4,
									'dots': false,
									'nav': true
								}
							}
						}">
                    <?php
                    $select_similar_pr = "SELECT * FROM tbl_products WHERE status = 1 AND cat = $catid ORDER BY RAND() LIMIT 4";
                    $resulte_similar_pr = mysqli_query($conn,$select_similar_pr);
                    $count_similar_pr = mysqli_num_rows($resulte_similar_pr);
                    if ($count_similar_pr > 3){
                    foreach ($resulte_similar_pr as $similar_pr){
                        ?>
                    <div class="product shadow-media">
                        <figure class="product-media">
                            <a href="product.html">
                                <img src="uploads/<?php echo $similar_pr['photo'];?>" alt="<?php echo $similar_pr['name']; ?>" width="280" height="315">
                            </a>
                            <div class="product-label-group">
                                    <?php if ($similar_pr['status'] == 2){ ?>
                                <label class="product-label label-new">جدید</label>
                                <?php } ?>
                                    <?php if ($similar_pr['takhfif'] != ''){ ?>
                                <span class="product-label label-sale"><?php echo $similar_pr['takhfif']; ?>% تخفیف</span>
                                <?php } ?>
                            </div>
                            <div class="product-action-vertical">
                                <a href="product.php?link=<?php echo $similar_pr['link'];?>" class="btn-product-icon btn-cart" data-toggle="modal" data-target="#addCartModal" title="افزودن به سبد خرید"><i class="d-icon-bag"></i></a>
                                <a href="#" class="btn-product-icon btn-wishlist" title="افزودن به مورد علاقه ها"><i class="d-icon-heart"></i></a>
                            </div>
                            <div class="product-action">
                                <a href="#" class="btn-product" title="Quick View">مشاهده محصول</a>
                            </div>
                        </figure>
                        <div class="product-details">
                            <div class="product-cat">
                                    <?php
                                    $catid = $product['cat'];
                                    $select_cat = "SELECT * FROM tbl_cats WHERE id = $catid";
                                    $result_cat = mysqli_query($conn,$select_cat);
                                    $cat = mysqli_fetch_assoc($result_cat);
                                    ?>
                                <a href="category.php?link=<?php echo $cat['link'];?>"><?php echo $cat['name'];?></a>
                            </div>
                            <h3 class="product-name">
                                <a href="product.php?link=<?php echo $similar_pr['link'];?>"><?php echo $similar_pr['name'];?></a>
                            </h3>
                            <div class="product-price">
                                <span class="price"><?php echo number_format($similar_pr['price']);?></span>
                            </div>
                            <!--<div class="ratings-container">
                                <div class="ratings-full">
                                    <span class="ratings" style="width:100%"></span>
                                    <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews">( <span class="review-count">12</span>
                                    reviews
                                    )</a>
                            </div>-->
                        </div>
                    </div>
                    <?php }
                    }else{?>
                </div>
                <p class="alert-danger alert col-6 text-dark  mx-auto text-center">محصول مرتبط برای نمایش وجود ندارد</p>
                <?php } ?>
            </section>--}}
        </div>
        </div>
    </main>

@endsection


@section('scripts')

    <script src="/client/vendor/sticky/sticky.min.js"></script>
    <script src="/client/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="/client/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/client/vendor/owl-carousel/owl.carousel.min.js"></script>
    <script src="/client/vendor/photoswipe/photoswipe.min.js"></script>
    <script src="/client/vendor/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="/client/rtl/select-relations.js"></script>

    <script>
        $(document).ready(function (){

            $("a.submit-review-toggle").click(function (){
                $("div.review-form-section").addClass("opened")
            });

        });
    </script>

@endsection
