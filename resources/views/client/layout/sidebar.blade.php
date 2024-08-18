
<aside class="col-lg-3 sidebar sidebar-fixed sidebar-toggle-remain shop-sidebar sticky-sidebar-wrapper ">
    <div class="sidebar-overlay"></div>
    <a class="sidebar-close" href="#"><i class="d-icon-times"></i></a>
    <div class="sidebar-content">
        <div class="sticky-sidebar" data-sticky-options="{'top': 10}">

            <div class="widget widget-collapsible">
                <h3 style="margin: 0; padding: 2.6rem 0.3rem 1.8rem; font-size: 1.8rem; font-weight: 600; letter-spacing: -0.03em;">همه دسته بندی ها</h3>
                <ul class="widget-body filter-items search-ul">
                    @foreach($categories as $category)
                        <li>
                            <a href="#" >{{$category->title}}</a>
                            <ul>
                                    @foreach($category->children as $childCategory)
                                <li>
                                    <a href="#" class="d-inline-block ">{{$childCategory->title}}</a>
                                    <span>(2)</span>
                                </li>
                                    @foreach($childCategory->children as $subCategory)
                                    <li>
                                    <a href="#" class="d-inline-block ">-{{$subCategory->title}}</a>
                                    <span>(5)</span>
                                    </li>
                                    @endforeach
                                @endforeach

                            </ul>
                        </li>
                    @endforeach

                </ul>
            </div>
            <div class="widget widget-collapsible">
                <h3 class="widget-title">برند ها</h3>
                <ul class="widget-body filter-items">
                    @foreach($brands as $brand)
                        <li><a href="#">{{$brand->name}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</aside>
