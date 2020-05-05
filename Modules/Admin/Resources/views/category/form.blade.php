<form method="post" action="">
    @csrf
    <div class="form-group  ">
        <label>Tên thể loại</label>
        <input type="text" name="name" class="form-control" value="{{old('name',isset($category->c_name) ?$category->c_name :'' )}}" placeholder="Nhập tên thể loại ..." width="300px">
        <div class="has-error">
            @if($errors->has('name'))
                <span class="help-block">
                {{$errors->first('name')}}
            </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <input type="checkbox" value="1" {{ isset($category->c_active) ? $category->c_active == '1' ? 'checked=checked' :'' :'' }}  name="active"><span>Kích hoạt</span>
    </div>
    <button class="btn btn-facebook" type="submit">Đang ký</button>
</form>
