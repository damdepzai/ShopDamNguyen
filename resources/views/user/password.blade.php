@extends('layout.app')

@section('content')
    <div class="container">
        <h3>Thay đổi mật khẩu </h3>
        <div style="width: 200px">
            <form method="post">
                @csrf
                <div class="form-group  " style="position: relative">
                    <label>Mật khẩu cũ</label>
                    <input type="password" name="password_old"  value="{{old('password_old')}}" class="form-control"  >
                    <a href="" style="position: absolute;right: 0px;top: 31px;"><i class="fa fa-eye"></i></a>
                    <div class="has-error">
                        @if($errors->has('password_old'))
                            <span class="help-block">
                {{$errors->first('password_old')}}
            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group " style="position: relative">
                    <label>Mật khẩu mới</label>
                    <input type="password" name="password_new" value="{{old('password_new')}}" class="form-control" >
                    <a href="" style="position: absolute;right: 0px;top: 31px;"><i class="fa fa-eye"></i></a>
                    <div class="has-error">
                        @if($errors->has('password_new'))
                            <span class="help-block">
                {{$errors->first('password_new')}}
            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group  " style="position: relative">
                    <label>Mật khẩu cũ</label>
                    <input type="password" name="password_comfirm" value="{{old('password_comfirm')}}" class="form-control"  >
                    <a href="" style="position: absolute;right: 0px;top: 31px;"><i class="fa fa-eye"></i></a>
                    <div class="has-error">
                        @if($errors->has('password_comfirm'))
                            <span class="help-block">
                {{$errors->first('password_comfirm')}}
            </span>
                        @endif
                    </div>
                </div>
                <button class="btn btn-success">Thay đổi mật khẩu</button>
            </form>
        </div>
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
@endsection
@section('script')
    <script>
        $(function () {
            $(".form-group a").click(function (event) {
                event.preventDefault();
                    let $this =$(this);
                    if($this.hasClass('active')){
                        $this.parent('.form-group').find('input').attr('type','password');
                      $this.removeClass('active')
                    }
                    else{
                        $this.parent('.form-group').find('input').attr('type','text');
                        $this.addClass('active')
                    }
            });
        })
    </script>
@endsection
