<form method="post" action="" enctype='multipart/form-data'>
    @csrf
    <div class="form-group  ">
        <label>Tên bài viết</label>
        <input type="text" name="name" class="form-control" value="{{old('name',isset($article->a_name) ?$article->a_name :'' )}}" placeholder="Nhập tên bài viết ..." width="300px">
        <div class="has-error">
            @if($errors->has('name'))
                <span class="help-block">
                {{$errors->first('name')}}
            </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label>Mô tả</label>
        <textarea class="form-control" name="description" rows="3"placeholder="Nhập mô tả ngắn gọn ...">{{isset($article->a_description)?$article->a_description:''}}</textarea>
        <div class="has-error">
            @if($errors->has('description'))
                <span class="help-block">
                {{$errors->first('description')}}
            </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label>Nội dung</label>
        <textarea class="form-control" name="a_content" rows="3" placeholder="Nhập nội dung ...">{{isset($article->a_content)?$article->a_content:''}}</textarea>
    </div>
    <div class="form-group">

        <div class="form-group">
            <label>Chọn ảnh</label>
            <input type="file" name="avatar" value="{{old('avatar',isset($article->a_avatar)?$article->a_avatar:'')}}}" class="form-control">
        </div>
        @if(isset( $article->a_avatar))
            <div class="row form-group">
                <label class="col-md-3"></label>
                <img id="img_output" style="margin-left: 12px" width="200px" height="200px"
                     src="/images/products/{{ $article->a_avatar }}" alt="">
            </div>
        @endif
    </div>
    <div class="form-group">
        <input type="checkbox" value="1" {{ isset($article->a_active) ? $article->a_active == '1' ? 'checked=checked' :'' :'' }}  name="active"><span>Kích hoạt</span>
    </div>
{{--    <div class="form-group">--}}
{{--        <input type="checkbox" value="1" {{ isset($article->a_hot) ? $article->a_hot == '1' ? 'checked=checked' :'' :'' }}  name="active"><span>Bài viết hót</span>--}}
{{--    </div>--}}
    <button class="btn btn-facebook" type="submit">Đang ký</button>

</form>
