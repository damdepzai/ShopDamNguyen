@extends('layout.app')
@section('content')
    <style>
        .active{
            color: red;
        }
    </style>
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-inner">
                        <ul>
                            <li class="home">
                                <a href="index.html">Trang chủ</a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li class="category3"><span>Danh mục</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <!-- shop-with-sidebar Start -->
    <div class="shop-with-sidebar">
        <div class="container">
            <div class="row">
                <!-- left sidebar start -->
                <div class="col-md-3 col-sm-12 col-xs-12 text-left">
                    <div class="topbar-left">
                        <aside class="widge-topbar">
                            <div class="bar-title">
                                <div class="bar-ping"><img src="{{asset('theme_client/img/bar-ping.png')}}" alt=""></div>
                                <h2>{{$category->c_name}}</h2>
                            </div>
                        </aside>
                        <aside class="sidebar-content">
                            <div class="sidebar-title">
                                <h6>Danh mục</h6>
                            </div>
                            <ul class="sidebar-tags">
                                @if(isset($categories))
                                    @foreach($categories as $category)
                                        <li><a href="{{route('get.list.product',[$category->slug,$category->id])}}">{{$category->c_name}}</a><span> (14)</span></li>
                                    @endforeach
                                @endif
                            </ul>
                        </aside>
                        <aside class="sidebar-content">
                            <div class="sidebar-title">
                                <h6>Khoảng giá</h6>
                            </div>
                            <ul>
                                <li><a  class="{{Request::get('price')==1 ?'active':''}}" href="{{request()->fullUrlWithQuery(['price'=>1])}}">Dưới 1 triệu</a></li>
                                <li><a class="{{Request::get('price')==2 ?'active':''}}" href="{{request()->fullUrlWithQuery(['price'=>2])}}">1.000.000 - 5.000.0000</a></li>
                                <li><a class="{{Request::get('price')==3 ?'active':''}}"href="{{request()->fullUrlWithQuery(['price'=>3])}}">5.000.000 - 10.000.0000</a></li>
                                <li><a class="{{Request::get('price')==4 ?'active':''}}"href="{{request()->fullUrlWithQuery(['price'=>4])}}">Trên 10 triệu</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
                <!-- left sidebar end -->
                <!-- right sidebar start -->
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <!-- shop toolbar start -->
                    <div class="shop-content-area">
                        <div class="shop-toolbar">
                            <div class="col-md-4 col-sm-4 col-xs-12 nopadding-left text-left ">
                                <form class="tree-most" id="form_order" method="get">
                                    <div class="orderby-wrapper pull-right">
                                        <label>Sắp xếp</label>
                                        <select name="orderby"  class="orderby">
                                            <option {{Request::get('orderby')=="md"||!Request::get('orderby')  ?"selected='selected'":''}} value="md" selected="selected">Mặc định</option>
                                            <option {{Request::get('orderby')=="desc" ?"selected='selected'":''}} value="desc">Sản phẩm mới nhất</option>
                                            <option {{Request::get('orderby')=="asc" ?"selected='selected'":''}} value="asc">Sản phẩm cũ</option>
                                            <option {{Request::get('orderby')=="price_max" ?"selected='selected'":''}} value="price_max">Giá tăng dần</option>
                                            <option {{Request::get('orderby')=="price_min" ?"selected='selected'":''}} value="price_min">Giá giảm dần</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 nopadding-right text-right">
                                <div class="view-mode">
                                    <label>Đổi dạng xem</label>
                                    <ul>
                                        <li class="active"><a href="#shop-grid-tab" data-toggle="tab"><i class="fa fa-th"></i></a></li>
                                        <li class=""><a href="#shop-list-tab" data-toggle="tab" ><i class="fa fa-th-list"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shop toolbar end -->
                    <!-- product-row start -->
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="shop-grid-tab">
                            <div class="row">
                                <div class="shop-product-tab first-sale">
                                    @if(isset($products))
                                        @foreach($products as $product)
                                            <div class="col-lg-4 col-md-4 col-sm-4">
                                                <div class="two-product">
                                                    <!-- single-product start -->
                                                    <div class="single-product">
                                                        @if($product->pro_sale >0)
                                                            <span class="sale-text">-{{$product->pro_sale}} %</span>
                                                        @endif
                                                        <div class="product-img">
                                                            <a href="{{route('get.detail.product',[$product->pro_slug,$product->id])}}">
                                                                <img class="primary-image" src="/images/products/{{$product->pro_avatar}}" alt="" />
                                                            </a>
                                                            <div class="action-zoom">
                                                                <div class="add-to-cart">
                                                                    <a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="actions">
                                                                <div class="action-buttons">
                                                                    <div class="add-to-links">
                                                                        <div class="add-to-wishlist">
                                                                            <a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                        </div>
                                                                        <div class="compare-button">
                                                                            <a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="quickviewbtn">
                                                                        <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <h2 class="product-name"><a href="{{route('get.detail.product',[$product->pro_slug,$product->id])}}">{{$product->pro_name}}</a></h2>
                                                        </div>
                                                            <div class="price-box">
                                                                <div>Giá gốc:<span class="price-box {{!$product->pro_sale ?0 :'price_old' }}"> {{number_format($product->pro_price,'0','.',',')}} VNĐ</span></div>
                                                                @if($product->pro_sale >0)
                                                                    <div>Giờ chỉ còn: <span class="price_new price-box">{{number_format($product->pro_price - ($product->pro_sale * $product->pro_price )/100,'0','.',',')}} VNĐ</span></div>
                                                                @endif
                                                            </div>
                                                    </div>
                                                    <!-- single-product end -->
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- list view -->
                        <div class="tab-pane fade" id="shop-list-tab">
                            <div class="list-view">
                            @if(isset($products))
                                @foreach($products as $product)
                                    <!-- single-product start -->
                                        <div class="product-list-wrapper">
                                            <div class="single-product">
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <div class="product-img">
                                                        <a href="{{route('get.detail.product',[$product->pro_slug,$product->id])}}">
                                                            <img class="primary-image" src="/images/products/{{$product->pro_avatar}}" alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-sm-8 col-xs-12">
                                                    <div class="product-content" style="margin-bottom: 30px">
                                                        <h2 class="product-name"><a style="font-weight: bold" href="{{route('get.detail.product',[$product->pro_slug,$product->id])}}">{{$product->pro_name}}</a></h2>
                                                        <div class="rating-price">
                                                            <div style="color: black !important;" >
                                                                @if($product->pro_total_rating >0)
                                                                    Đánh giá :
                                                                    @for($i=0;$i<5;$i++)
                                                                        <a href="#"><i class="fa fa-star {{$i <= round($product->pro_total_number/$product->pro_total_rating)-1 ? 'rating_active' :''}}" style="font-size: 20px" ></i></a>
                                                                    @endfor
                                                                @else
                                                                    Chưa có đánh giá
                                                                @endif
                                                            </div>
                                                            <div class="price-box">
                                                                <div style="color: gray !important;" >Giá gốc:<span class="price-box {{!$product->pro_sale ?0 :'price_old' }}"> {{number_format($product->pro_price,'0','.',',')}} VNĐ</span></div>
                                                                @if($product->pro_sale >0)
                                                                    <div style="color: gray !important;" >Giờ chỉ còn: <span class="price_new price-box">{{number_format($product->pro_price - ($product->pro_sale * $product->pro_price )/100,'0','.',',')}} VNĐ</span></div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="product-desc">
                                                            <p>{{$product->pro_description}}</p>
                                                        </div>
                                                        <div class="actions-e">
                                                            <div class="action-buttons">
                                                                <div class="add-to-cart">
                                                                    <a href="#">Mua sản phẩm</a>
                                                                </div>
                                                                <div class="add-to-links">
                                                                    <div class="add-to-wishlist">
                                                                        <a href="#" data-toggle="tooltip" title="" data-original-title="Add to Wishlist"><i class="fa fa-heart"></i></a>
                                                                    </div>
                                                                    <div class="compare-button">
                                                                        <a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-refresh"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product end -->
                                @endforeach
                            @endif
                            </div>
                        </div>
                        <div class="page-product">
                            {!!$products->links()!!}
                        </div>
                    </div>
                </div>
                <!-- right sidebar end -->
            </div>
        </div>
    </div>
    <!-- shop-with-sidebar end -->
@endsection
@section('script')
    <script>
        $(function () {
            $('.orderby').change(function () {
                $('#form_order').submit();
            })
        })
    </script>
@endsection
