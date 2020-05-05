@extends('admin::layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Quản lý bài viết
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Bài viết</a></li>
            <li class="active">Trang chủ</li>
        </ol>
    </section>
    <section class="content">
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Chỉnh sửa</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            @include('admin::article.form')
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection
