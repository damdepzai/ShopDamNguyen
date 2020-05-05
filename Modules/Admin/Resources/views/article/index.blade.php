@extends('admin::layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Quản lý bài viết
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> bài viết</a></li>
            <li class="active">Trang chủ</li>
        </ol>
    </section>
    <section class="content">
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Danh sách bài viết</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table  class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên bài viết</th>
                                    <th>Hình ảnh</th>
                                    <th>Mô tả</th>
                                    <th>Nội dung</th>
                                    <th>Trạng thái</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($articles as $key =>$article)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$article->a_name}}</td>
                                        <td><img src="/images/products/{{$article->a_avatar}}"  alt="" width="100px"></td>
                                        <td>{{$article->a_description}}</td>
                                        <td>{{$article->a_content}}</td>
                                        <td><a href="{{route('article.action',['active',$article->id])}}" class="{{$article->getStatus($article->a_active)['class']}}">{{$article->getStatus($article->a_active)['name']}}</a></td>
                                        <td>
                                            <a href="{{route('article.update',$article->id)}}"><i class="fa fa-edit" style="font-size: 22px;padding-right: 10px"></i></a>
                                            <a href="{{route('article.action',['delete',$article->id])}}"><i class="fa fa-trash" style="font-size: 22px ;padding-right: 10px "></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
{{--                            <div class="pagination pull-right">--}}
{{--                                {!! $articles->links() !!}--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
