<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="https://i.pinimg.com/474x/b2/57/81/b2578191becd55a7ebbc3aa9cfda9a7a.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Đàm Nguyễn</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Bảng điều khiển</li>
            <li class="active treeview">
                <a href="{{route('home')}}">
                    <i class="fa fa-dashboard"></i><span>Trang chủ</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Thể loại</span>
                    <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-right"></i>
              <span class="label label-primary pull-right">4</span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('category.create')}}"><i class="fa fa-circle-o text-yellow"></i> Thêm thể loại</a></li>
                    <li><a href="{{route('category.home')}}"><i class="fa fa-circle-o text-aqua"></i> Dánh sách thể loại</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Sản phẩm</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('product.create')}}"><i class="fa fa-circle-o text-red"></i> Thêm mới sản phẩm</a></li>
                    <li><a href="{{route('product.home')}}"><i class="fa fa-circle-o text-yellow"></i> Danh sách sản phẩm</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Bài viết</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('article.create')}}"><i class="fa fa-circle-o"></i> Thêm bài viết</a></li>
                    <li><a href="{{route('article.home')}}"><i class="fa fa-circle-o"></i> Quản lý bài viết</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Đơn hàng</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('transaction.home')}}"><i class="fa fa-circle-o"></i> Quản lý đơn hàng</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Khách hàng</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('user.create')}}"><i class="fa fa-circle-o  text-yellow"></i> Thêm mới khách hàng</a></li>
                    <li><a href="{{route('user.home')}}"><i class="fa fa-circle-o  text-yellow"></i> Danh sách khách hàng</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
