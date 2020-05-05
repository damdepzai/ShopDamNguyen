<div class="col-md-6">
        <!-- /.box-header -->
        <div class="box-body pull-right" style="width: 250px ;margin: 0px;padding: 0px ;position: relative;right: -100px;top: -420px;z-index: 999;">

               @if(\Session::has('danger'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Thất bại!</h4>
                {{\Session::get('danger')}}
            </div>
                @endif
                @if(\Session::has('warning'))

            <div class="alert alert-warning alert-dismissible" >
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-warning"></i> Cảnh báo!</h4>
                {{\Session::get('warning')}}
            </div>
                @endif
                @if(\Session::has('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Thành công!</h4>
                {{\Session::get('success')}}
            </div>
                @endif
        </div>
        <!-- /.box-body -->
    <!-- /.box -->
</div>
