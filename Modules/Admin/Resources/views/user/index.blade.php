@extends('admin::layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Thông tin khách hàng
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Khách hàng</a></li>
            <li class="active">Trang chủ</li>
        </ol>
    </section>
    <section class="content">
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Danh sách khách hàng</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table  class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên khách hàng</th>
                                    <th>Số điện thoại</th>
                                    <th>Email</th>
                                    <th>Địa chỉ</th>
                                    <th>Ngày tạo</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($users))
                                    @foreach($users as $key=>$user)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->phone}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->address}}</td>
                                            <td>{{Carbon\Carbon::parse($user->created_at)->format('d-m-Y')}}</td>
                                            <td>
                                                <a href="{{route('user.update',$user->id)}}"><i class="fa fa-edit" style="font-size: 22px;padding-right: 10px"></i></a>
                                                <a href="{{route('user.delete',$user->id)}}"><i class="fa fa-trash-o" style="font-size: 22px;padding-right: 10px"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                            <div class="pagination pull-right">
                                {!! $users->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
