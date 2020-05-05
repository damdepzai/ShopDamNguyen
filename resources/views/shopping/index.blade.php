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
                                <a href="index.html">Trang chủ</a>
                                <span><i class="fa fa-angle-right"></i></span>
                            </li>
                            <li class="category3"><span>Giỏ hàng</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <!-- Shopping Table Container -->
    <div class="cart-area-start">
        <div class="container">
            <!-- Shopping Cart Table -->
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="cart-table">
                            <thead>
                            <tr>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Giá bán</th>
                                <th>Số lượng</th>
                                <th>Xóa sản phẩm</th>
                            </tr>
                            </thead>
                            <tbody>
                                @if(isset($orderProducts))
                                    @foreach($orderProducts as $key =>  $product)
                                        <tr>
                                            <td>#{{$product->id}}</td>
                                            <td>
                                                <h6>{{$product->name}}</h6>
                                            </td>
                                            <td><img src="/images/products/{{$product->options->avatar}}" style="width: 100px" alt=""></td>
                                            <td>
                                                <div class="cart-price">{{number_format($product->price,'0','.',',')}} VNĐ</div>
                                            </td>
                                            <td>
                                                <form>
                                                    <input type="text" value="{{$product->qty}}">
                                                </form>
                                            </td>

                                            <td><a href="{{route('delete.product',$key)}}"><i class="fa fa-times"></i></a></td>
                                        </tr>
                                        @endforeach
                                @endif
                            <tr>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="shipping coupon cart-totals pull-right">
                        <ul>
                            <li class="cartSubT">Tổng tiền:  <span>{{\Cart::subtotal()}} VNĐ</span></li>
                        </ul>
                        <a class="proceedbtn" href="{{route('paypal.product')}}">Thanh toán</a>
                    </div>
                </div>
                </div>
            </div>
            <!-- Shopping Cart Table -->

    </div>
@endsection
