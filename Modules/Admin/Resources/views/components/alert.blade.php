<div class="box box-default pull-right " >
    <style>
        .alert-fixed{
            position: fixed;
            z-index: 99;
            right: 0px
        }
    </style>
        <!-- /.box-header -->
        <div class="box-body">

            @if(\Session::has('danger'))
                <div class="alert alert-danger alert-dismissible alert-fixed">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Thất bại!</h4>
                    {{\Session::get('danger')}}
                </div>
            @endif
            @if(\Session::has('warning'))

                <div class="alert alert-warning alert-dismissible alert-fixed">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Cảnh báo!</h4>
                    {{\Session::get('warning')}}
                </div>
            @endif
            @if(\Session::has('success'))
                <div class="alert alert-success alert-dismissible alert-fixed">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Thành công!</h4>
                    {{\Session::get('success')}}
                </div>
            @endif
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
