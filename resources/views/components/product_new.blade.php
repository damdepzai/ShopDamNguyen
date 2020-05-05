<div class="our-product-area new-product">
    <div class="container">
        <div class="area-title">
            <h2>Sản phẩm giảm giá</h2>
        </div>
        <!-- our-product area start -->
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="features-curosel">
                        @if(isset($productsSale))
                            @foreach($productsSale as $product)
                                <!-- single-product start -->
                                    <div class="col-lg-12 col-md-12">
                                        <div class="single-product first-sale">
                                            @if($product->pro_sale >0)
                                                <span class="sale-text">-{{$product->pro_sale}} %</span>
                                            @endif
                                            <div class="product-img">
                                                <a href="{{route('get.detail.product',[$product->pro_slug,$product->id])}}">
                                                    <img class="primary-image" src="/images/products/{{$product->pro_avatar}}"  width="100% " height="100%" alt="" />
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
                                                    <div>Giá gốc:<span class="price_old price-box"> {{number_format($product->pro_price,'0','.',',')}} VNĐ</span></div>
                                                    @if($product->pro_sale >0)
                                                    <div>Giờ chỉ còn: <span class="price_new price-box">{{number_format($product->pro_price - ($product->pro_sale * $product->pro_price )/100,'0','.',',')}} VNĐ</span></div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product end -->
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <!-- our-product area end -->
    </div>
</div>
