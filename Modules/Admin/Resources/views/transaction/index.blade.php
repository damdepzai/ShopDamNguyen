@extends('admin::layouts.master')

@section('content')
    <section class="content-header">
        <h1>
            Quản lý đơn hàng
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Đơn hàng</a></li>
            <li class="active">Trang chủ</li>
        </ol>
    </section>
    <section class="content">
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Danh sách đơn hàng</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table  class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên khách hàng</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Tổng tiền</th>
                                    <th>Trạng thái</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @if(isset($transactions))
                                        @foreach($transactions as $key=> $transaction)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$transaction->user->name}}</td>
                                                <td>{{$transaction->tr_phone}}</td>
                                                <td>{{$transaction->tr_address}}</td>
                                                <td>{{number_format($transaction->tr_total,'0','.',',')}} VNĐ</td>
                                                <td>
                                                    @if($transaction->tr_status == 1)
                                                        <a href="#" class="lable label-success">Đã xử lý</a>

                                                    @else
                                                        <a href="{{route('action.active',$transaction->id)}}" class="label label-info">Chờ xử lý</a>
                                                    @endif

                                                </td>
                                                <td>
                                                    <a href="{{route('transaction.show',$transaction->id)}}}" data-id="{{$transaction->id}}" class="modal-detail"><i class="fa fa-eye" style="font-size: 22px ;padding-right: 10px "></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                            <div class="pagination pull-right">
                                {!! $transactions->links() !!}
                            </div>
                            <div class="modal-dialog modal fade modal-lg" id="Modalshow" role="dialog">
                                <div class="modal-content ">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span></button>
                                        <h4 class="modal-title">Chi tiết mã hàng # <b class="transaction_id"></b></h4>
                                    </div>
                                    <div class="modal-body" id="modal_content">

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@stop
