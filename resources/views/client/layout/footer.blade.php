<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <a href="index.php" class="logo-footer">
                        <img src="/client/images/logo-afshar-footer.png" alt="logo-footer" width="154" height="43" />
                    </a>

                </div>
                <div class="col-lg-9">
                    <div class="widget widget-newsletter form-wrapper form-wrapper-inline">
                        <div class="newsletter-info mx-auto mr-lg-2 ml-lg-4">
                            <h4 class="widget-title">باشگاه مشتریان فروشگاه افشار</h4>
                            <p>با وارد کردن شماره تماس خود در فیلد روبرو همیشه در جریان نخفیف ها و محصولات جدید ما باشید</p>
                        </div>
                        <form id="number_customer" method="post" action="includes/addnumber_customer.php" class="input-wrapper input-wrapper-inline">
                            <input type="number" class="form-control" name="number_c" id="number" placeholder="شماره تماس خود را وارد کنید..." required />
                            <button id="sabtnumber" class="btn btn-primary btn-rounded btn-md ml-2" type="submit">ثبت<i class="d-icon-arrow-left"></i></button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-middle">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widget widget-info">
                        <h4 class="widget-title">ارتباط با ما</h4>
                        <ul class="widget-body">
                            <li>
                                <label>شماره تماس:</label>
                                <a href="tel:#">09123456789</a>
                            </li>
                            <li>
                                <label>ایمیل:</label>
                                <a href="contact-us.php"><span>amir@amir.com</span></a>
                            </li>
                            <li>
                                <label>آدرس:</label>
                                <a href="contact-us.php">مشهد خیابان فلان</a>
                            </li>
                            <li>
                                <label>ساعت کاری:</label>
                            </li>
                            <li>
                                <a href="contact-us.php">هر روز هفته / 10 صبح تا 10 شب بصورت یکسره </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="widget ml-lg-4">
                        <h4 class="widget-title">صفحات</h4>
                        <ul class="widget-body">
                            <li>
                                <a href="index.php">خانه</a>
                            </li>
                            <li>
                                <a href="shop.php">محصولات</a>
                            </li>
                            <li>
                                <a href="about-us.php">درباره ما</a>
                            </li>
                            <li>
                                <a href="contact-us.php">تماس با ما</a>
                            </li>
                            <li>
                                <a href="faq.php">سوالات متداول</a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 ">
                    <h4 class="widget-title">دسته بندی محصولات</h4>
                    <div class="widget ml-lg-4 d-flex flex-wrap">
                        @foreach($categories as $category)
                            <div class="col-4 pb-2">
                                <h6 class="widget-title">{{$category->title}}</h6>
                                <ul class="widget-body">
                                    @foreach($category->children as $childCategory)
                                        <li>
                                            <a href="{{route('client.categories.show',$childCategory)}}">{{$childCategory->title}}</a>
                                        </li>
                                        {{--@foreach($childCategory->childern as $subCategory)
                                            <li>
                                                <a href="category.php">-</a>
                                            </li>
                                        @endforeach--}}
                                    @endforeach
                                </ul>
                            </div>

                        @endforeach

                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-left">
                <figure class="payment">
                    <img src="/client/images/payment.png" alt="payment" width="159" height="29" />
                </figure>
            </div>
            <div class="footer-center">
                <p class="copyright">تمامی حقوق این سایت محفوظ میباشد &copy; بهار 1403</p>
            </div>
            <div class="footer-right">
                <div class="social-links">
                    <a href="#" title="social-link" class="social-link icofont-social-telegram fab fa-telegram"></a>
                    <a href="#" title="social-link" class="social-link social-whatsapp fab fa-whatsapp"></a>
                    <a href="#" title="social-link" class="social-link social-instagram fab fa-instagram"></a>
                </div>
            </div>
        </div>

    </div>
</footer>

</div>

@include('client.layout.sticky-footer')
<a id="scroll-top" href="#top" title="Top" role="button" class="scroll-top"><i class="d-icon-arrow-up"></i></a>

@include('client.layout.mobile-menu-wrapper')


<script data-cfasync="false" src="/client/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="/client/vendor/jquery/jquery.min.js"></script>
<script src="/client/vendor/parallax/parallax.min.js"></script>
<script src="/client/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="/client/vendor/elevatezoom/jquery.elevatezoom.min.js"></script>
<script src="/client/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="/client/vendor/isotope/isotope.pkgd.min.js"></script>
<script src="/client/vendor/jquery.plugin/jquery.plugin.min.js"></script>
<script src="/client/vendor/owl-carousel/owl.carousel.min.js"></script>
<!--<script src="js/sweetalert2@11.js"></script>-->
<script src="/client/js/sweetalert2.min.js"></script>

<script src="/client/js/main.min.js"></script>

<script>
    //یرای ارتباط با دیتا بیس جدول لایک ها
    function like(productId){

        $.ajax({
            type: 'post',
            url: '/likes/' + productId ,
            data: {
                _token: "{{csrf_token()}}"
            },
            success: function (data){
                var btn = $('#like-'+ productId);

                //چون ساختار کد ها در صفحه جزییات محصول با صفحه محصولات فرق داشت یه شرط کلی اضافه کردم
                if (btn.hasClass('debug')){

                    if (btn.hasClass('like')){
                        btn.removeClass('like');
                    }else{
                        btn.addClass('like');
                    }

                }else {

                    if (btn.hasClass('liked')){
                        btn.removeClass('liked');
                        btn.html( '<i class="d-icon-heart"></i><span> افزودن به مورد علاقه ها</span>' );
                    }else{
                        btn.addClass('liked');
                        btn.html( '<i class="d-icon-heart-full"></i><span> به لیست مورد علاقه ها افزوده شد</span>' );
                    }

                }

                $('#likes_count').text(data.likes_count)
            }
        })

    }
    function addToCart(productId){

        var quantity = 1;

        if($('#input-quantity').length){
            quantity = $('#input-quantity').val();
        }

        $.ajax({
            type: "post",
            url: "/cart/" + productId,
            data:{
                _token: "{{csrf_token()}}",
                quantity: quantity
            },

            success: function (data){

                $('.cart-count').text(data.cart.total_items)
                $('.cart-price').text(data.cart.total_amount)

                var cartItem = $('#cart-row-' + productId );

                if(cartItem.length === 0){

                    var product = data.cart[productId]['product'];
                    var productQty = data.cart[productId]['quantity'];

                    $('#mini-cart-body').append(
                        '<div class="product product-cart" id="cart-row-' + productId + ' ">'
                        + ' <figure class="product-media"> <a href="/products/ ' + productId + '">'
                        + ' <img src="' + product.image_path + '" alt="product" width="80" height="88" /> </a> '
                        + '<button class="btn btn-link btn-close" onclick="removeFromCart(' + productId + ')"> '
                        + '<i class="fas fa-times"></i><span class="sr-only">بستن</span> </button>'
                        + ' </figure> '
                        + '<div class="product-detail"> '
                        + '<a href="/products/' + productId + '" class="product-name">' + product.name + '</a> '
                        + '<div class="price-box">'
                        + ' <span id="product-quantity" class="product-quantity">' + productQty + '</span> '
                        + '<span class="product-price">' + product.cost_with_discount +' تومان</span> '
                        + '</div>'
                        + '</div>'
                        + '</div>'
                    );

                }else{
                    var productQty = data.cart[productId]['quantity'];
                    $('#cart-row-' + productId + ' #product-quantity').text(productQty);
                }

            }


        })
    }
    function removeFromCart(productId){

        $.ajax({
            type: "delete",
            url: "/cart/" + productId,
            data:{
                _token: "{{csrf_token()}}",
            },

            success: function (data){

                $('.cart-count').text(data.cart.total_items)
                $('.cart-price').text(data.cart.total_amount)
                $('div#cart-row-' + productId).remove()
                $('tr#cart-tr-' + productId).remove()
            }


        })
    }
</script>

@yield('scripts')

</body>
</html>
