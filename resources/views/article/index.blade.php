@extends('layout.app')
@section('content')
  <div class="container">
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
                              <li class="category3"><span>Tin tức</span></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
         <div class="col-md-9">
             <div class="list-view">
             @if(isset($articles))
                 @foreach($articles as $article)
                     <!-- single-article start -->
                         <div class="article-list-wrapper">
                             <div class="single-article">
                                 <div class="col-md-4 col-sm-4 col-xs-12">
                                     <div class="article-img">
                                         <a href="{{route('get.detail.article',[$article->a_slug,$article->id])}}">
                                             <img class="primary-image" src="/images/products/{{$article->a_avatar}}" alt="" />
                                         </a>
                                     </div>
                                 </div>
                                 <div class="col-md-8 col-sm-8 col-xs-12">
                                     <div class="article-content" style="margin-bottom: 30px">
                                         <h4 class="article-name"><a style="font-weight: bold" href="{{route('get.detail.article',[$article->a_slug,$article->id])}}">{{$article->a_name}}</a></h4>
                                         <div class="article-desc">
                                             <p>{{$article->a_description}}</p>
                                         </div>
                                         <a href="{{route('get.detail.article',[$article->a_slug,$article->id])}}" class="read-more">Xem thêm</a>
                                         <p>Ngày đăng:{{$article->updated_at->format('m/d/Y')}}</p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <!-- single-article end -->
                     @endforeach
                 @endif
             </div>
             <div class="pagination">
                 {!! $articles->links() !!}
             </div>
         </div>
         <div class="col-md-3">
             <h4>Sản phẩm ưu thích</h4>
         @foreach($products as $product)
             <!-- single latestpost start -->
                 <div class="col-md-12 col-sm-12 col-xs-12">
                     <div class="single-post">
                         <div class="thumbnail">
                             <a href="{{route('get.detail.product',[$product->pro_slug,$product->id])}} ">
                                 <img src="/images/products/{{$product->pro_avatar}}" height="200px" width="140px" alt=""/>
                             </a>
                         </div>
                         <div class="post-thumb-info">
                             <div class="post-time">
                                 <a href="{{route('get.detail.product',[$product->pro_slug,$product->id])}}">{{$product->pro_name}}</a>
                             </div>
                             <div class="postexcerpt">
                                 @if($product->pro_total_rating >0)
                                     Đánh giá :
                                     @for($i=0;$i<5;$i++)
                                         <a href="#"><i class="fa fa-star {{$i <= round($product->pro_total_number/$product->pro_total_rating)-1 ? 'rating_active' :''}}" style="font-size: 20px" ></i></a>
                                     @endfor
                                 @else
                                     Chưa có đánh giá
                                 @endif
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- single latestpost end -->
             @endforeach
         </div>
  </div>
@endsection
