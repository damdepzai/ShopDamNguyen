
<header class="short-stor">
    <div class="container-fluid">
        <div class="row">
            <!-- logo start -->
            <div class="col-md-3 col-sm-12 text-center nopadding-right">
                <div class="top-logo">
                    <a href="{{route('home')}}"><img src="{{asset('/logo.png')}}"  alt="" style="height: 82px; position: relative;top: -35px;right: -69px;" /></a>
                </div>
            </div>
            <!-- logo end -->
            <!-- mainmenu area start -->
            <div class="col-md-6 text-center">
                <div class="mainmenu">
                    <nav>
                        <ul>
                            <li class="expand"><a href="{{route('home')}}">Trang chủ</a></li>
                            <li class="expand"><a href="#">Sản phẩm</a>
                                <ul class="restrain sub-menu">
                                    @if(isset($categories))

                                        @foreach($categories as $category)
                                            <li><a href="{{route('get.list.product',[$category->c_slug,$category->id])}}">{{$category->c_name}}</a></li>
                                        @endforeach
                                    @endif
                                </ul>

                            </li>
                            <li class="expand"><a href="{{route('get.list.article')}}">Tin tức</a></li>
                            <li class="expand"><a href="{{route('get.about.us')}}">Giới thiệu</a></li>
                            <li class="expand"><a href="{{route('get.contact')}}">Liên hệ</a></li>

                        </ul>
                    </nav>
                </div>
                <!-- mobile menu start -->
                <div class="row">
                    <div class="col-sm-12 mobile-menu-area">
                        <div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
                            <span class="mobile-menu-title">Menu</span>
                            <nav>
                                <ul>
                                    <li class="expand"><a href="{{route('home')}}">Trang chủ</a></li>
                                    <li class="expand"><a href="#">Sản phẩm</a>
                                        <ul class="restrain sub-menu">
                                            @if(isset($categories))

                                                @foreach($categories as $category)
                                                    <li><a href="{{route('get.list.product',[$category->c_slug,$category->id])}}">{{$category->c_name}}</a></li>
                                                @endforeach
                                            @endif
                                        </ul>

                                    </li>
                                    <li class="expand"><a href="{{route('get.list.article')}}">Tin tức</a></li>
                                    <li class="expand"><a href="{{route('get.about.us')}}">Giới thiệu</a></li>
                                    <li class="expand"><a href="{{route('get.contact')}}">Liên hệ</a></li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- mobile menu end -->
            </div>
            <!-- mainmenu area end -->
            <!-- top details area start -->
            <div class="col-md-3 col-sm-12 nopadding-left">
                <div class="top-detail">
                    <!-- language division start -->
                    <div class="disflow">
                        <div class="expand lang-all disflow">
                            <a href="#"><img src="{{asset('theme_client/img/country/de_de.gif')}}" alt="">Việt Nam </a>
                            <ul class="restrain language">
                                <li><a href="#"><img src="{{asset('theme_client/img/country/it.gif')}}" alt="">English</a></li>
                                <li><a href="#"><img src="{{asset('theme_client/img/country/nl_nl.gif')}}" alt="">Nhật Bản</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- language division end -->
                    <!-- addcart top start -->
                    <div class="disflow">
                        <div class="circle-shopping expand">
                            <div class="shopping-carts text-right">
                                <div class="cart-toggler">
                                    <a href="{{route('order.product')}}"><i class="icon-bag"></i></a>
                                    <a href="{{route('order.product')}}"><span class="cart-quantity">{{Cart::count()}}</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- addcart top start -->
                    <!-- search divition start -->
                    <div class="disflow">
                        <div class="header-search expand">
                            <div class="search-icon fa fa-search"></div>
                            <div class="product-search restrain">
                                <div class="container nopadding-right">
                                    <form action="index.html" id="searchform" method="get">
                                        <div class="input-group">
                                            <input type="text" class="form-control" maxlength="128" placeholder="Search product...">
                                            <span class="input-group-btn">
														<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
													</span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- search divition end -->
                    <div class="disflow">
                        <div class="expand dropps-menu">
                            <a href="#"><i class="fa fa-cog" style="font-size: 30px"></i></a>
                            <ul class="restrain language" style="width: 200px">
                                @if(Auth::check())
                                <li><a href="{{route('user.profile')}}">Thông tin cá nhân</a></li>
                                <li><a href="{{route('user.change.password')}}">Đổi mật khẩu</a></li>
                                <li><a href="{{route('get.logout')}}">Đăng xuất</a></li>
                                    @else
                                    <li><a href="{{route('get.register')}}">Đang ký</a></li>
                                    <li><a href="{{route('get.login')}}">Đăng nhập</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- top details area end -->
        </div>
    </div>
</header>

