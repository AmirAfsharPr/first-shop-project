<!-- footer start-->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 footer-copyright">
                <p class="mb-0"> تابستان 1403 © تمامی حقوق این سایت محفوض است.</p>
            </div>
            <div class="col-md-6">
                <p class="pull-right mb-0">اجرا شده توسط امیر افشار<i class="fa fa-heart"></i></p>
            </div>
        </div>
    </div>
</footer>
<!-- footer end-->
</div>

</div>

<!-- latest jquery-->
<script src="/admin/js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap js-->
<script src="/admin/js/popper.min.js"></script>
<script src="/admin/js/bootstrap.js"></script>

<!-- feather icon js-->
<script src="/admin/js/icons/feather-icon/feather.min.js"></script>
<script src="/admin/js/icons/feather-icon/feather-icon.js"></script>

<!-- Sidebar jquery-->
<script src="/admin/js/sidebar-menu.js"></script>

<!--chartist js-->
<script src="/admin/js/chart/chartist/chartist.js"></script>


<!-- lazyload js-->
<script src="/admin/js/lazysizes.min.js"></script>

<!--copycode js-->
<script src="/admin/js/prism/prism.min.js"></script>
<script src="/admin/js/clipboard/clipboard.min.js"></script>
<script src="/admin/js/custom-card/custom-card.js"></script>

<!--counter js-->
<script src="/admin/js/counter/jquery.waypoints.min.js"></script>
<script src="/admin/js/counter/jquery.counterup.min.js"></script>
<script src="/admin/js/counter/counter-custom.js"></script>

<!--Customizer admin-->
<!--<script src="/admin/js/admin-customizer.js"></script>-->

<!--map js-->
<script src="/admin/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
<script src="/admin/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>

<!--apex chart js-->
<script src="/admin/js/chart/apex-chart/apex-chart.js"></script>
<script src="/admin/js/chart/apex-chart/stock-prices.js"></script>

<!--chartjs js-->
<script src="/admin/js/chart/flot-chart/excanvas.js"></script>
<script src="/admin/js/chart/flot-chart/jquery.flot.js"></script>
<script src="/admin/js/chart/flot-chart/jquery.flot.time.js"></script>
<script src="/admin/js/chart/flot-chart/jquery.flot.categories.js"></script>
<script src="/admin/js/chart/flot-chart/jquery.flot.stack.js"></script>
<script src="/admin/js/chart/flot-chart/jquery.flot.pie.js"></script>
<!--dashboard custom js-->
<script src="/admin/js/dashboard/default.js"></script>

<!--right sidebar js-->
<script src="/admin/js/chat-menu.js"></script>

<!--height equal js-->
<script src="/admin/js/equal-height.js"></script>

<!-- lazyload js-->
<script src="/admin/js/lazysizes.min.js"></script>

<!--script admin-->
<script src="/admin/js/admin-script.js"></script>


<script>
    $(document).ready(function (){

        var number_alert = $('#alert').val();
        $('ul .nav-menus span #number_alert').html(number_alert);

    });

</script>

@yield('scripts')
</body>
</html>
