@extends('layout.app')
@section('content')
    <div class="container">
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
                                    <a href="#">Thông tin cá nhân</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumbs area end -->
                <h1>Thông tin cá nhân</h1>
        <div>
            <div>
                <p>Họ và tên:{{$user->name}}</p>
                <p>Số điện thoại:{{$user->phone}}</p>
                <p>Địa chỉ:{{$user->address}}</p>
                <p>Email:{{$user->email}}</p>
                <p>Giới thiệu bản thân:{{$user->about}}</p>
            </div>
            <a href="">Chỉnh sửa thông tin</a>
        </div>
    </div>
@endsection
