@extends('layout.app')
@section('content')
    <!-- breadcrumbs area start -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container-inner">
                        <ul>
                            <li class="home">
                                <a href="{{route('home')}}">Trang chủ</a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li class="home">
                                <a href="#">Sản phẩm</a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li class="category3"><span>Thanh toán</span></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <div class="container">
        <div class="row cart-body">
            <form class="form-horizontal" method="post" action="" >
                @csrf
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                    <!--REVIEW ORDER-->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Thông tin sản phẩm <div class="pull-right"><small><a class="afix-1" href="{{route('order.product')}}">Chỉnh sủa</a></small></div>
                        </div>
                        <div class="panel-body">
                            @if(isset($orderProducts))
                                @foreach($orderProducts as $product)
                                    <div class="form-group">
                                        <div class="col-sm-3 col-xs-3">
                                            <img src="/images/products/{{$product->options->avatar}}" style="width: 100px;height: 100px" />
                                        </div>
                                        <div class="col-sm-6 col-xs-6">
                                            <div class="col-xs-12">{{$product->name}}</div>
                                            <div class="col-xs-12"><small>Số lượng x<span>{{$product->qty}}</span></small></div>
                                        </div>
                                        <div class="col-sm-3 col-xs-3 text-right">
                                            <h6>{{number_format($product->price,'0','.',',')}} VNĐ</h6>
                                        </div>
                                    </div>
                                    <div class="form-group"><hr /></div>
                                @endforeach
                            @endif

                            <div class="form-group">
                                <div class="col-xs-12">
                                    <strong>Tổng số tiền</strong>
                                    <div class="pull-right"><span>{{\Cart::subtotal()}}</span> VNĐ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--REVIEW ORDER END-->
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                    <!--SHIPPING METHOD-->
                    <div class="panel panel-info">
                        <div class="panel-heading">Thông tin</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <h4>Thông tin khách hàng</h4>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-xs-12">
                                    <strong>Họ và tên</strong>
                                    <input type="text" name="name" class="form-control" value="{{\App\Http\Middleware\get_data_user('web','name')}}" />
                                </div>
                                <div class="span1"></div>
                                <div class="col-md-6 col-xs-12">
                                    <strong>Số điện thoại</strong>
                                    <input type="text" name="phone" class="form-control" value="{{\App\Http\Middleware\get_data_user('web','phone')}}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Địa chỉ</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="address" class="form-control" value="{{\App\Http\Middleware\get_data_user('web','address')}}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Nội dung</strong></div>
                           <textarea name="note" value=""   class="yourmessage" row="5" col="150"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success pull-right">Thanh toán</button>
                            </div>
                        </div>
                    </div>
                    <!--SHIPPING METHOD END-->
                </div>

            </form>
        </div>
    </div>


@endsection
