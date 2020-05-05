@extends('admin::layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Quản lý sản phẩm
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Sản phẩm</a></li>
            <li class="active">Trang chủ</li>
        </ol>
    </section>
    <section class="content">
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Danh sách sản phẩm</h3>
{{--                            <form action="" method="get">--}}
{{--                                <input type="text" name="search" value="{{\Request::get('search')}}">--}}

{{--                                    <select name="category">--}}
{{--                                        @if(isset($categories))--}}
{{--                                            <option >--- thể loại ---</option>--}}
{{--                                            @foreach($categories as $category)--}}
{{--                                                <option value="{{$category->id}}" {{\Request::get('category') == $category->id ? "selected":""}}>{{$category->c_name}}</option>--}}
{{--                                            @endforeach--}}
{{--                                        @endif--}}
{{--                                    </select>--}}

{{--                                <button type="submit">Search</button>--}}
{{--                            </form>--}}
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table  class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Tên thể loại</th>
                                    <th>Hình ảnh</th>
                                    <th>Giá bán</th>
                                    <th>Số lượng</th>
                                    <th>Trạng thái</th>
                                    <th>Nổi bật</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $key =>$product)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$product->pro_name}}</td>
                                        <td>{{isset($product->category->c_name)? $product->category->c_name:'Đã xóa'}}</td>
                                        <td>
                                            <img src="/images/products/{{$product->pro_avatar}}" alt="" width="100px" height="100px"></td>
                                        <td>{{number_format($product->pro_price,'0','.',',')}} VNĐ</td>
                                        <td>{{$product->pro_number}}</td>
                                        <td><a href="{{route('product.action',['active',$product->id])}}" class="{{$product->getStatus($product->pro_active)['class']}}">{{$product->getStatus($product->pro_active)['name']}}</a></td>
                                        <td><a href="{{route('product.action',['hot',$product->id])}}" class="{{$product->getHots($product->pro_hot)['class']}}">{{$product->getHots($product->pro_hot)['name']}}</a></td>
                                        <td>
                                            <a href="{{route('product.update',$product->id)}}"><i class="fa fa-edit" style="font-size: 22px;padding-right: 10px"></i></a>
                                            <a href="{{route('product.action',['delete',$product->id])}}"><i class="fa fa-trash-o" style="font-size: 22px;padding-right: 10px"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination pull-right">
                                {!! $products->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
