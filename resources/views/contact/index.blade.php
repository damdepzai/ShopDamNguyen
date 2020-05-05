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
                            <li class="category3"><span>Liên hệ</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumbs area end -->
    <!-- contact-details start -->
    <div class="main-contact-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="page-sidebar-area">
                        <!-- popular tag start -->
                        <aside class="widge-topbar">
                            <div class="bar-title">
                                <div class="bar-ping"><img src="{{asset('theme_client/img/bar-ping.png')}}" alt=""></div>
                                <h2>Tag</h2>
                            </div>
                            <div class="exp-tags">
                                <div class="tags">
                                    <a href="#">iphone</a>
                                    <a href="#">mobile</a>
                                    <a href="#">samsung</a>
                                    <a href="#">destop</a>

                                    <a href="#">laptop</a>
                                </div>
                            </div>
                        </aside>
                        <aside class="sidebar-content">
                            <div class="bar-title">
                                <div class="bar-ping"><img src="{{asset('theme_client/img/bar-ping.png')}}" alt=""></div>
                                <h2>Danh mục</h2>
                            </div>
                            <ul class="sidebar-tags">
                                <li><a href="#">Acsessories</a></li>
                                <li><a href="#">Afternoon</a></li>
                                <li><a href="#">Attachment</a></li>
                                <li><a href="#">Beauty</a></li>
                            </ul>
                        </aside>
                        <!-- popular tag end -->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                    <div class="contact-us-area">
                        <!-- google-map-area start -->
                        <div class="google-map-area">
                            <!--  Map Section -->
                            <div id="contacts" class="map-area">
                                <div id="map" class="map" >
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.4720895648975!2d105.7322713154026!3d21.053798892297767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313455af9072ccf9%3A0xadb5f7555c46683d!2zxJDhuqFpIEjhu41jIEPDtG5nIE5naGnhu4dwIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1582445005495!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                                </div>
                            </div>

                        </div>
                        <!-- google-map-area end -->
                        <!-- contact us form start -->
                        <div class="contact-us-form">
                            <div class="sec-heading-area">
                                <h2>Contact US</h2>
                            </div>
                            <div class="contact-form">
                                <span class="legend">Contact Information</span>
                                <form action="" method="post">
                                    @csrf
                                    <div class="form-top">
                                        <div class="form-group col-sm-6 col-md-6 col-lg-5">
                                            <label>Họ và tên<sup>*</sup></label>
                                            <input type="text" name="name" class="form-control">
                                            <div class="has-error">
                                                @if($errors->has('name'))
                                                    <span class="help-block">
                                                     {{$errors->first('name')}}
                                                  </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-6 col-md-6 col-lg-5">
                                            <label>Email <sup>*</sup></label>
                                            <input type="email" name="email" class="form-control">
                                            <div class="has-error">
                                                @if($errors->has('email'))
                                                    <span class="help-block">
                                                     {{$errors->first('email')}}
                                                  </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-6 col-md-6 col-lg-5">
                                            <label>Số điện thoại<sup>*</sup></label>
                                            <input type="text" name="phone"  class="form-control">
                                            <div class="has-error">
                                                @if($errors->has('phone'))
                                                    <span class="help-block">
                                                     {{$errors->first('phone')}}
                                                  </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-6 col-md-6 col-lg-5">
                                            <label>Địa chỉ<sup>*</sup></label>
                                            <input type="text" name="address"  class="form-control">
                                            <div class="has-error">
                                                @if($errors->has('address'))
                                                    <span class="help-block">
                                                     {{$errors->first('address')}}
                                                  </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-6 col-md-6 col-lg-5">
                                            <label>Tiêu đề <sup>*</sup></label>
                                            <input type="text" name="title" class="form-control">
                                            <div class="has-error">
                                                @if($errors->has('title'))
                                                    <span class="help-block">
                                                     {{$errors->first('title')}}
                                                  </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12 col-md-12 col-lg-10">
                                            <label>Nội dung <sup>*</sup></label>
                                            <textarea name="content_text" class="yourmessage" row="5" col="200"></textarea>
                                            <div class="has-error">
                                                @if($errors->has('content'))
                                                    <span class="help-block">
                                                     {{$errors->first('content')}}
                                                  </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="submit-form form-group col-sm-12 submit-review">
                                        <button type="submit" class="btn btn-success" >Gửi thông tin</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- contact us form end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact-details end -->
@endsection
