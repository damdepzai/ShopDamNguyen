@extends('layout.app')
@section('content')
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
                        <li class="category3"><span>Đang ký</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumbs area end -->
<!-- account-details Area Start -->
<div class="customer-login-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12">
                <div class="customer-login my-account">
                    <form method="post" class="login" method="POST">
                        @csrf
                        <div class="form-fields">
                            <h2>Đăng ký tài khoản</h2>
                            <p class="form-row form-row-wide">
                                <label for="username">Họ và tên<span class="required">*</span></label>
                            <input type="text" class="input-text" name="username" id="username" value="{{old('username')}}">
                            </p>
                            <p class="form-row form-row-wide">
                                <label for="username">Email <span class="required">*</span></label>
                                <input type="text" class="input-text" name="email" id="email" value="" {{old('email')}}>
                            </p>
                            <p class="form-row form-row-wide">
                                <label for="password">Password <span class="required">*</span></label>
                                <input class="input-text" type="password" name="password" id="password">
                            </p>
                            <p class="form-row form-row-wide">
                                <label for="username">Số điện thoại <span class="required">*</span></label>
                            <input type="text" class="input-text" name="phone" id="phone" value="{{old('phone')}}">
                            </p>
                        </div>
                        <div class="form-action">
                            <div class="actions-log">
                                <input type="submit" class="button" name="login" value="Đang ký tài khoản">
                            </div>
                            <label for="rememberme" class="inline">
                            <input name="rememberme" type="checkbox" id="rememberme" value="forever"> Nhớ mật khẩu </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- account-details Area end -->
@endsection
