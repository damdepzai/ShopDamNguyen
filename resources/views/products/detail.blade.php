@extends('layout.app')
@section('content')
    <style>
            .content-rating{
                display: flex;
                width: 100%;
            }
        .rating-one{
            width: 20%;
            color:#fd9727;
            font-size: 40px;
            margin-right: 15px;
        }
            .rating-two{
                width: 60%;

            }
            .line-danger{
                width: 200px;
                height: 6px;
                margin: 6px 13px;
                border-radius: 3px;
                background: #dd4b39;
            }
            .item-rating{
                display: flex;
            }
            .rating-one{
              width: 20%;
            }
            .rating-is-me{
                font-size: 18px;
            }
            .lStar{
                cursor: pointer;
            }
        .rsStar{
            display: inline-block;
            margin-left: 10px;
            position: relative;
            background: #52b858;
            color: #fff;
            padding: 2px 8px;
            box-sizing: border-box;
            font-size: 12px;
            border-radius: 2px
            transition: all 0.5s;
        }
           .rsStar:after {
               display: none;
                right: 100%;
                top: 50%;
                border: solid transparent;
                content: " ";
                height: 0;
                width: 0;
                position: absolute;
                pointer-events: none;
                border-color: rgba(82,184,88,0);
                border-right-color: #52b858;
                border-width: 6px;
                margin-top: -6px;
               transition: all 0.5s;
           }
        .rating_active{
            color:#fd9727 ;
        }
        .usename{
            font-size: 18px;
            color: #333333eb;
            font-family: -webkit-body;
            font-weight: bold;
        }
        .icon-shop{
            cursor: pointer;
            color: #2ba832;
            font-size: 13px
        }
        .kc{
            margin: 0px 10px;
        }
        .kc1{
            margin: 0px 3px;
        }
        .time{
            color:#999;
        }
    </style>
    <!-- breadcrumbs area start -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-inner">
                        <ul>
                            <li class="home">
                                <a href="{{route('home')}}">Home</a>
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
    <!-- product-details Area Start -->
    <div class="product-details-area" id="content_product" data-id="{{$product->id}}">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="zoomWrapper">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="/images/products/{{$product->pro_avatar}}" data-zoom-image="/images/products/{{$product->pro_avatar}}" alt="big-1">
                            </a>
                        </div>
                        <div class="single-zoom-thumb">
                            <ul class="bxslider" id="gallery_01">
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('theme_client/img/product-details/big-1-1.jpg')}}" data-zoom-image="{{asset('theme_client/img/product-details/ex-big-1-1.jpg')}}"><img src="{{asset('theme_client/img/product-details/th-1-1.jpg')}}" alt="zo-th-1" /></a>
                                </li>
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('theme_client/img/product-details/big-1-1.jpg')}}" data-zoom-image="{{asset('theme_client/img/product-details/ex-big-1-1.jpg')}}"><img src="{{asset('theme_client/img/product-details/th-1-1.jpg')}}" alt="zo-th-1" /></a>
                                </li>
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('theme_client/img/product-details/big-1-1.jpg')}}" data-zoom-image="{{asset('theme_client/img/product-details/ex-big-1-1.jpg')}}"><img src="{{asset('theme_client/img/product-details/th-1-1.jpg')}}" alt="zo-th-1" /></a>
                                </li>
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('theme_client/img/product-details/big-1-1.jpg')}}" data-zoom-image="{{asset('theme_client/img/product-details/ex-big-1-1.jpg')}}"><img src="{{asset('theme_client/img/product-details/th-1-1.jpg')}}" alt="zo-th-1" /></a>
                                </li>
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('theme_client/img/product-details/big-1-1.jpg')}}" data-zoom-image="{{asset('theme_client/img/product-details/ex-big-1-1.jpg')}}"><img src="{{asset('theme_client/img/product-details/th-1-1.jpg')}}" alt="zo-th-1" /></a>
                                </li>
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="{{asset('theme_client/img/product-details/big-1-1.jpg')}}" data-zoom-image="{{asset('theme_client/img/product-details/ex-big-1-1.jpg')}}"><img src="{{asset('theme_client/img/product-details/th-1-1.jpg')}}" alt="zo-th-1" /></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12">
                    <div class="product-list-wrapper">
                        <div class="single-product">
                            <div class="product-content">
                                <h2 class="product-name"><a href="#" style="color: #3f3f3f">{{$product->pro_name}}</a></h2>
                                <div class="rating-price">
                                    <div class="pro-rating">
                                        <div>
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
                                    <div class="price-boxes">
                                        <div class="title-price">Giá bán: <span class="new-price  price-box">{{number_format($product->pro_price,'0','.',',')}} VNĐ</span> </div>
                                    </div>
                                </div>
                                <div class="product-desc">
                                    <p>{{$product->pro_description}}</p>
                                </div>
                                <div class="actions-e">
                                    <div class="action-buttons-single">
                                        <div class="inputx-content">
                                            <label for="qty">Số lượng:</label>
                                            <input type="text" name="qty" id="qty" maxlength="12" value="1" title="Qty" class="input-text qty">
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="{{route('add.product',$product->id)}}">Mua sản phẩm</a>
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
                                <div class="singl-share">
                                    <a href="#"><img src="{{asset('theme_client/img/single-share.png')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="single-product-tab">
                    <!-- Nav tabs -->
                    <ul class="details-tab">
                        <li class="active"><a href="#home" data-toggle="tab">Mô tả chi tiết</a></li>
                        <li class=""><a href="#messages" data-toggle="tab">Đánh giá  </a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">
                            <div class="product-tab-content">
                               {{$product->pro_content}}
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messages">
                            <div class="single-post-comments col-md-8 ">
                                <div class="comments-area">
                                   <!--Commment và đánh giá bài viết -->
                                    <h3>Đánh giá sản phẩm</h3>
                                    <div class="content-rating">
                                        <div class="rating-one">
                                            <span>
                                                @if($product->pro_total_rating)
                                                    {{round($product->pro_total_number/$product->pro_total_rating,2)}}
                                                @else
                                                0
                                                @endif
                                            </span><i class="fa fa-star"></i>
                                        </div>
                                        <div class="rating-two">
                                            @foreach($arrayRatings as $key =>$arrayRating)
                                                <div class="item-rating">
                                                    <div>{{$key}} <span class="fa fa-star"></span></div>
                                                    <div style="margin: 0px 20px">
                                                      <span style="width: 200px;height: 8px;display: block;border: 1px solid #dedede;border-radius: 5px;background-color:#dedede; "></span>
                                                        <b style="width:{{($arrayRating['total'] / $product->pro_total_rating)*100 }}%;background-color: #f25800;display: block;border-radius: 5px;height: 8px;position:relative;top:-8px"></b>
                                                    </div>
                                                    <div>{{$arrayRating['total']}} đánh giá</div>
                                                </div>
                                            @endforeach

                                        </div>
                                        <div class="rating-three">
                                            <button class="btn btn-primary js_rating_action">Gửi đánh giá của bạn</button>
                                        </div>
                                    </div>
                                    <div class=""></div>
                                    <div class="form_rating  hide">
                                        <div class="rating-is-me">
                                            <div class="ips">
                                                <span>Chọn đánh giá của bạn</span>
                                                <span class="lStar">
                                                @for($i=1;$i<=5;$i++)
                                                        <i class="fa fa-star" data-key="{{$i}}"></i>
                                                    @endfor
                                                    <input type="hidden" value="" class="number_rating">
                                            </span>
                                                <span class="rsStar"></span>
                                            </div>
                                        </div>

                               <div class="comment-is-me">
                                   <textarea name="commment"  cols="100" rows="5" id="ra_content"></textarea>
                                   <a href="{{route('save.comment.product',$product->id)}}" class="btn btn-primary js_rating_product">Bình luận</a>
                               </div>

                                    </div>
                                    <div class="rating-comment">
                                        @if(isset($ratings))
                                            @foreach($ratings as $rating)
                                           <div>
                                               <span class="usename">{{$rating->user->name}}</span>
                                               <span class="icon-shop"><i class="fa fa-check-circle-o"><span class="kc1">Đã mua hàng tại Shop Đàm Nguyễn</span></i></span>
                                           </div>
                                                <div>
                                                    <span>
                                                        @for($i=0;$i<5;$i++)
                                                            <i class="fa fa-star {{$i< $rating->number ? 'rating_active':''}}" ></i>
                                                        @endfor
                                                    </span>
                                                    <span class="kc">{{$rating->content}}</span>
                                                </div>
                                                <p class="time">Thời gian:{{$rating->getTimeDistance($rating->created_at)}}</p>
                                            @endforeach
                                        @endif
                                        <div class="pager">
                                            {!! $ratings->links() !!}
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- product-details Area end -->
@endsection
@section('script')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(function () {
                let listStart =$(".lStar .fa");

            listRatingText={
                '1': 'Không thích',
               '2':'Tạm được',
               '3':'Bình thường',
               '4':'Rất tốt',
               '5':'Tuyệt vời quá',
            }
            listStart.mouseover(function () {
                let $this =$(this);
                let number =$this.attr('data-key');
                listStart.removeClass('rating_active');
                $(".number_rating").val(number);
                $.each(listStart,function (key,value) {
                    if(key+1 <= number){
                        $(this).addClass('rating_active')
                    }

                })
                $(".rsStar").text('').text(listRatingText[$this.attr('data-key')]).show();
            })

            $(".js_rating_action").click(function (event) {
                event.preventDefault();
                if($(".form_rating").hasClass('hide')){
                    $(".form_rating").addClass('active').removeClass('hide')
                }
                else{
                    $(".form_rating").addClass('hide').removeClass('active')
                }

            })
            $(".js_rating_product").click(function (event) {
                event.preventDefault();
                let content =$("#ra_content").val();
                let number =$(".number_rating").val();
                let url=$(this).attr('href');
                console.log(url);
                if(content && number){
                    $.ajax({
                        url:url,
                        type:'POST',
                        data:{
                            number:number,
                            r_content:content,

                        }
                    }).done(function (result) {
                            location.reload();
                    })
                }

            })
            //lưu id sản phảm vào storage
            let idProduct =$("#content_product").attr('data-id');
            // lấy giá trị mảng id đã lưu
            let products =localStorage.getItem('products');


            if(products =null){
                arrayProduct = new Array();
                arrayProduct.push(idProduct);

                localStorage.setItem('products',JSON.stringify(arrayProduct))
            }
            else{

                // chuyển về mảng
                console.log( idProduct);
                products =$.parseJSON(products)
                if(products.indexOf(idProduct)== -1){
                    products.push(idProduct);
                    localStorage.setItem('products'.JSON.stringify(products))
                }
            console.log(products);
            }
        })
    </script>
@endsection
