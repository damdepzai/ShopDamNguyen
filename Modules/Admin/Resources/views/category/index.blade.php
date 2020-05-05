@extends('admin::layouts.master')

@section('content')
    <section class="content-header">
        <h1>
           Quản lý thể loại
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Thể loại</a></li>
            <li class="active">Trang chủ</li>
        </ol>
    </section>
    <section class="content">
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Danh sách thể loại</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table  class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên thể loại</th>
                                    <th>Active</th>
                                    <th>Home</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($categories as $key => $category)
                                    <tr>
                                        <td>{{$key +1}}</td>
                                        <td>{{$category->c_name}}</td>
                                        <td><a href="{{route('category.action',['active',$category->id])}}" class="{{$category->getStatus($category->c_active)['class']}}">{{$category->getStatus($category->c_active)['name']}}</a></td>
                                        <td>{{$category->c_home}}</td>
                                        <td>
                                            <a href="{{route('category.update',$category->id)}}"><i class="fa fa-edit" style="font-size: 22px;padding-right: 10px"></i></a>
                                            <a href="{{route('category.action',['delete',$category->id])}}"><i class="fa fa-trash" style="font-size: 22px ;padding-right: 10px "></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>

@endsection
