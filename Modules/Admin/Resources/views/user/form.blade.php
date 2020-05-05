<form method="post" action="" enctype='multipart/form-data'>
    @csrf
    <div class="col-md-6">
        <div class="form-group">
            <label>Họ và tên</label>
            <input type="text" class="form-control" value="{{old('name',isset($user->name)?$user->name:'')}}" name="name" placeholder="Nhập họ và tên ...">
            <div class="has-error">
                @if($errors->has('name'))
                    <span class="help-block">
                {{$errors->first('name')}}
            </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label>Số điện thoại</label>
            <input type="text" class="form-control" value="{{old('description',isset($user->phone)?$user->phone:'')}}" name="phone" placeholder="Số điện thoại ...">
            <div class="has-error">
                @if($errors->has('phone'))
                    <span class="help-block">
                {{$errors->first('phone')}}
            </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input  type="text" value="{{old('content',isset($user->email)?$user->email:'')}}" name="email"  class="form-control"  />
        </div>
        <div class="form-group">
            <label>Địa chỉ</label>
            <input  type="text" value="{{old('content',isset($user->address)?$user->address:'')}}" name="address"  class="form-control"  />
        </div>
        <button type="submit" class="btn btn-success">Đăng ký</button>
    </div>


</form>
