<div class="block-category">
    <div class="container">
        <div class="row">
            <!-- featured block start -->
            <div class="col-md-4">
                <!-- block title start -->
                <div class="block-title">
                    <h2>Sản phầm hót</h2>
                </div>
                <!-- block title end -->
                <!-- block carousel start -->
                <div class="block-carousel">
                    <div class="block-content">
                        @foreach($productsHotOrRating as $product)
                        <!-- single block start -->
                        <div class="single-block">
                            <div class="block-image pull-left">
                                <a href="{{route('get.detail.product',[$product->pro_slug,$product->id])}}"><img  src="/images/products/{{$product->pro_avatar}}" width="170px" height="208px" alt="" /></a>
                            </div>
                            <div class="category-info">
                                <h3><a href="{{route('get.detail.product',[$product->pro_slug,$product->id])}}">{{$product->pro_name}}</a></h3>
                                <div class="price_new price-box" style="color: red !important;font-weight: bold">{{number_format($product->pro_price - ($product->pro_price * $product->pro_sale/100),'0','.',',')}} VNĐ</div>
                                <p class=" price_old">{{number_format($product->pro_price,'0','.',',')}}VNĐ</p>
                                <div class="cat-rating">
                                    @if($product->pro_total_rating >0)
                                        @for($i=0;$i<5;$i++)
                                            <a href="#"><i class="fa fa-star {{$i <= round($product->pro_total_number/$product->pro_total_rating)-1 ? 'rating_active' :''}}" style="font-size: 20px" ></i></a>
                                        @endfor
                                    @else
                                        Chưa có đánh giá
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- single block end -->
                            @endforeach
                    </div>
                </div>
                <!-- block carousel end -->
            </div>
            <!-- featured block end -->
            <!-- featured block start -->
            <div class="col-md-4">
                <!-- block title start -->
                <div class="block-title">
                    <h2>Giảm giá </h2>
                </div>
                <!-- block title end -->
                <!-- block carousel start -->
                <div class="block-carousel">
                    <div class="block-content">
                    @foreach($productsSaleOrRating as $product)
                        <!-- single block start -->
                            <div class="single-block">
                                <div class="block-image pull-left">
                                    <a href="{{route('get.detail.product',[$product->pro_slug,$product->id])}}"><img  src="/images/products/{{$product->pro_avatar}}" width="170px" height="208px" alt="" /></a>
                                </div>
                                <div class="category-info">
                                    <h3><a href="{{route('get.detail.product',[$product->pro_slug,$product->id])}}">{{$product->pro_name}}</a></h3>
                                    <div class="price_new price-box" style="color: red !important;font-weight: bold">{{number_format($product->pro_price - ($product->pro_price * $product->pro_sale/100),'0','.',',')}} VNĐ</div>
                                    <p class=" price_old">{{number_format($product->pro_price,'0','.',',')}}VNĐ</p>
                                    <div class="cat-rating">
                                        @if($product->pro_total_rating >0)
                                            @for($i=0;$i<5;$i++)
                                                <a href="#"><i class="fa fa-star {{$i <= round($product->pro_total_number/$product->pro_total_rating)-1 ? 'rating_active' :''}}" style="font-size: 20px" ></i></a>
                                            @endfor
                                        @else
                                            Chưa có đánh giá
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- single block end -->
                        @endforeach
                    </div>
                </div>
                <!-- block carousel end -->
            </div>
            <!-- featured block end -->
            <!-- featured block start -->
            <div class="col-md-4">
                <!-- block title start -->
                <div class="block-title">
                    <h2>Sản phẩm bán chạy</h2>
                </div>
                <!-- block title end -->
                <!-- block carousel start -->
                <div class="block-carousel">
                    <div class="block-content">
                    @foreach($productsTransactionOrRating as $product)
                        <!-- single block start -->
                            <div class="single-block">
                                <div class="block-image pull-left">
                                    <a href="{{route('get.detail.product',[$product->pro_slug,$product->id])}}"><img  src="/images/products/{{$product->pro_avatar}}" width="170px" height="208px" alt="" /></a>
                                </div>
                                <div class="category-info">
                                    <h3><a href="{{route('get.detail.product',[$product->pro_slug,$product->id])}}">{{$product->pro_name}}</a></h3>
                                    <div class="price_new price-box" style="color: red !important;font-weight: bold">{{number_format($product->pro_price - ($product->pro_price * $product->pro_sale/100),'0','.',',')}} VNĐ</div>
                                    <p class=" price_old">{{number_format($product->pro_price,'0','.',',')}}VNĐ</p>
                                    <div class="cat-rating">
                                        @if($product->pro_total_rating >0)
                                            @for($i=0;$i<5;$i++)
                                                <a href="#"><i class="fa fa-star {{$i <= round($product->pro_total_number/$product->pro_total_rating)-1 ? 'rating_active' :''}}" style="font-size: 20px" ></i></a>
                                            @endfor
                                        @else
                                            Chưa có đánh giá
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- single block end -->
                        @endforeach
                    </div>
                </div>
                <!-- block carousel end -->
            </div>
            <!-- featured block end -->
        </div>
    </div>
</div>
