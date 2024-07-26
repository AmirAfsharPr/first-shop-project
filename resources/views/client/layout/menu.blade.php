<div class="header-bottom d-lg-show">
    <div class="container">
        <div class="header-left">
            <nav class="main-nav">
                <ul class="menu">
                    <li class="active">
                        <a href="/">خانه</a>
                    </li>
                    <li>
                        <a href="shop.php">محصولات</a>
                        <div class="megamenu">
                            <div class="row">


                                    @foreach($categories as $category)
                                        <div class="col-6 col-sm-4 col-md-3">

                                        <h4 class="menu-title">{{$category->title}}</h4>

                                    <ul>
                                        @foreach($category->children as $childCategory)
                                        <ul>
                                            <li><a class="font-weight-semi-bold" href="category.php">{{$childCategory->title}}</a></li>
                                            @foreach($childCategory->children as $subCategory)
                                            <li><a href="category.php">- {{$subCategory->title}}</a></li>
                                            @endforeach
                                        </ul>
                                            @endforeach
                                    </ul>
                                </div>
                                @endforeach

                                <!--<div class="col-6 col-sm-4 col-md-3 menu-banner menu-banner2 banner banner-fixed">
                            <figure>
                                <img src="images/menu/banner-2.jpg" alt="Menu banner" width="221" height="330" />
                            </figure>
                            <div class="banner-content x-50 text-center">
                                <h3 class="banner-title text-white text-uppercase">Sunglasses</h3>
                                <h4 class="banner-subtitle font-weight-bold text-white mb-0">$23.00
                                    -
                                    $120.00</h4>
                            </div>
                        </div>-->

                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="about-us.php">درباره ما</a>
                    </li>
                    <li>
                        <a href="contact-us.php">ارتباط با ما</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
