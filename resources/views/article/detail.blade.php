@extends('layout.app')
@section('content')
   <div class="container">
      <div class="row">
          <div class="col-md-8">
                <h3>{{$article->a_name}}</h3>
              <img src="/images/products/{{$article->a_avatar}}" style="padding-left:40px" alt="">
              <h5 style="padding: 20px 10px">{{$article->a_description}}</h5>
              <div>{{$article->a_content}}</div>

              <div>
                  <h3 style="padding-top: 15px">Sản phẩm liên quan</h3>
              @foreach($products as $product)
                  <!-- single-product start -->
                      <div class="col-lg-4 col-md-4">
                          <div class="single-product first-sale">
                              @if($product->pro_sale >0)
                                  <span class="sale-text">-{{$product->pro_sale}} %</span>
                              @endif
                              <div class="product-img">
                                  <a href="{{route('get.detail.product',[$product->pro_slug,$product->id])}}">
                                      <img class="primary-image" src="/images/products/{{$product->pro_avatar}}"  width="100% " height="100%" alt="" />
                                  </a>
                              </div>
                              <div class="product-content">
                                  <h2 class="product-name"><a style="font-size: 12px" href="#">{{$product->pro_name}}</a></h2>
                                  <div class="price-box" style="font-size: 13px">
                                      @if($product->pro_sale >0)
                                          <span class="price_new price-box">{{number_format($product->pro_price - ($product->pro_sale * $product->pro_price )/100,'0','.',',')}} VNĐ</span>
                                      @endif
                                      <span class="price_old price-box"> {{number_format($product->pro_price,'0','.',',')}} VNĐ</span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- single-product end -->
                  @endforeach
              </div>
          </div>
          <div class="col-md-4">
           <h3>Bài viết mới nhất</h3>
          @foreach($articles as $article)
              <!-- single latestpost start -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="single-post">
                      <div class="post-thumb">
                          <a href="{{route('get.detail.article',[$article->a_slug,$article->id])}}">
                              <img src="/images/products/{{$article->a_avatar}}" alt=""/>
                          </a>
                      </div>
                      <div class="post-thumb-info">
                          <div class="post-time">
                              <a href="{{route('get.detail.article',[$article->a_slug,$article->id])}}">{{$article->a_name}}</a>
                          </div>
                          <div class="postexcerpt">
                              <p>Ngày  đăng :{{date('d-m-Y', strtotime($article->updated_at))}}</p>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- single latestpost end -->
              @endforeach
          </div>
      </div>
   </div>
@endsection
