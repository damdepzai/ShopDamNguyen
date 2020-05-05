<div class="our-product-area">
    <div class="container">
        <!-- area title start -->
        <div class="area-title">
            <h2>Sản phẩm mới</h2>
        </div>
        <!-- area title end -->
        <!-- our-product area start -->
        <div class="row">
            <div class="col-md-12">
                <div class="features-tab">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li role="presentation" class="active"><a href="#home" data-toggle="tab">Mặc định</a></li>
                        <li role="presentation"><a href="#profile" data-toggle="tab">Đổi sản phẩm</a></li>
                    </ul>
                    <!-- Tab pans -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                            <div class="row">
                                    @foreach($productsNew as $product)
                                    <div class="col-lg-3 col-md-3">
                                        <!-- single-product start -->
                                        <div class="single-product first-sale">
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
                                                                <a href="{{route('add.product',$product->id)}}" title="Add to Cart"><i class="icon-bag"></i></a>
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
                                                <div class="price-box">
                                                    <div>Giá gốc:<span class="price-box {{!$product->pro_sale ?0 :'price_old' }}"> {{number_format($product->pro_price,'0','.',',')}} VNĐ</span></div>
                                                    @if($product->pro_sale >0)
                                                        <div>Giờ chỉ còn: <span class="price_new price-box">{{number_format($product->pro_price - ($product->pro_sale * $product->pro_price )/100,'0','.',',')}} VNĐ</span></div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product end -->
                                    </div>
                                        @endforeach
                            </div>
                            <div class="row">
                                @foreach($productsHot as $product)
                                    <div class="col-lg-3 col-md-3">
                                        <!-- single-product start -->
                                        <div class="single-product first-sale">
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
                                                                <a href="{{route('add.product',$product->id)}}" title="Add to Cart"><i class="icon-bag"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="quickviewbtn">
                                                            <a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-content">
                                                <h2 class="product-name"><a href="#">{{$product->pro_name}}</a></h2>
                                                <div class="price-box">
                                                    <div>Giá gốc:<span class="price-box {{!$product->pro_sale ?0 :'price_old' }}"> {{number_format($product->pro_price,'0','.',',')}} VNĐ</span></div>
                                                    @if($product->pro_sale >0)
                                                        <div>Giờ chỉ còn: <span class="price_new price-box">{{number_format($product->pro_price - ($product->pro_sale * $product->pro_price )/100,'0','.',',')}} VNĐ</span></div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product end -->
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile">
                            <div class="row">
                                @foreach($productsHotSwap as $product)
                                    <div class="col-lg-3 col-md-3">
                                        <!-- single-product start -->
                                        <div class="single-product first-sale">
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
                                                                <a href="{{route('add.product',$product->id)}}" title="Add to Cart"><i class="icon-bag"></i></a>
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
                                                <div class="price-box">
                                                    <div>Giá gốc:<span class="price-box {{!$product->pro_sale ?0 :'price_old' }}"> {{number_format($product->pro_price,'0','.',',')}} VNĐ</span></div>
                                                    @if($product->pro_sale >0)
                                                        <div>Giờ chỉ còn: <span class="price_new price-box">{{number_format($product->pro_price - ($product->pro_sale * $product->pro_price )/100,'0','.',',')}} VNĐ</span></div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product end -->
                                    </div>
                                @endforeach
                            </div>
                            <div class="row">
                                @foreach($productsNewSwap as $product)
                                    <div class="col-lg-3 col-md-3">
                                        <!-- single-product start -->
                                        <div class="single-product first-sale">
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
                                                                <a href="{{route('add.product',$product->id)}}" title="Add to Cart"><i class="icon-bag"></i></a>
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
                                                <div class="price-box">
                                                    <div>Giá gốc:<span class="price-box {{!$product->pro_sale ?0 :'price_old' }}"> {{number_format($product->pro_price,'0','.',',')}} VNĐ</span></div>
                                                    @if($product->pro_sale >0)
                                                        <div>Giờ chỉ còn: <span class="price_new price-box">{{number_format($product->pro_price - ($product->pro_sale * $product->pro_price )/100,'0','.',',')}} VNĐ</span></div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product end -->
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- our-product area end -->
    </div>
</div>
