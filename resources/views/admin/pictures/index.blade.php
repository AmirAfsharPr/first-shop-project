@extends('admin.layout.master')


@section('links')

    <!--portfolio css-->
    <link rel="stylesheet" type="text/css" href="/admin/css/magnific-popup.css">

@endsection

@section('content')

    <div class="page-body">

        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>{{$product->name}}
                                <small><img class="mx-1" src="{{str_replace('public', '/storage', $product->image)}}" width="50">      گالری تصاویر محصول</small>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <form action="{{route('products.pictures.store', $product)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form">
                        <div class="btn-popup ">
                            <a href="{{route('products.index')}}" class="btn btn-secondary">مشاهده لیست محصولات</a>
                        </div>
                        <div class="form-group mb-3  row">
                            <div class="col-xl-3 col-sm-4 mb-0">
                                <label for="validationCustom00" class="h5" >افزودن تصویر جدید :</label>
                            </div>
                            <div class="col-xl-8 col-sm-7">
                                <input class="form-control" id="validationCustom00" type="file" required="" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="offset-xl-3 offset-sm-4 mt-5">
                        <button id="sabt" type="submit" class="btn btn-primary">افزودن</button>
                    </div>
                </form>

            </div>
            <div class="card-body">
                <section class="portfolio-section  portfolio-padding grid-portfolio section-big-pt-space  ratio2_3">
                    <div class="container">
                        <div class="row  zoom-gallery portfolio-2">

                            @foreach($product->pictures as $picture)
                                <div class="isotopeSelector filter bags col-lg-3 col-sm-6">
                                    <div class="overlay">
                                        <div class="border-portfolio">
                                            <a href="{{str_replace('public', '/storage', $picture->path)}}" style="aspect-ratio: 1;">
                                                <div class="overlay-background">
                                                    <i class="ti-plus" aria-hidden="true"></i>
                                                </div>
                                                <img src="{{str_replace('public', '/storage', $picture->path)}}" class="img-fluid  bg-img" alt="portfolio">
                                            </a>
                                        </div>
                                    </div>
                                    <div>
                                        <form method="post" action="{{route('products.pictures.destroy', ['product' => $product, 'picture' => $picture])}}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="حذف" class="btn btn-sm btn-danger d-inline-block w-100 mt-3" onclick="return confirm('آیا از حذف این عکس از گالری اطمینان دارید')">
                                        </form>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </section>
            </div>
        </div>

    </div>

@endsection


@section('scripts')

    <!-- portfolio js -->
    <script src="/admin/js/jquery.magnific-popup.js"></script>
    <script src="/admin/js/zoom-gallery.js"></script>

@endsection
