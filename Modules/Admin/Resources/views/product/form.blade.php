<form method="post" action="" enctype='multipart/form-data'>
    @csrf
    <div class="col-md-6">
        <div class="form-group">
            <label>Tên sản phẩm</label>
            <input type="text" class="form-control" value="{{old('name',isset($product->pro_name)?$product->pro_name:'')}}" name="name" placeholder="Nhâp tên sản phẩm ...">
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
            <textarea class="form-control" name="description" rows="3" placeholder="Mô tả ngắn gọn  ...">{{isset($product->pro_description)?$product->pro_description:''}}</textarea>
            <div class="has-error">
                @if($errors->has('description'))
                    <span class="help-block">
                {{$errors->first('description')}}
            </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <input type="checkbox" {{ isset($product->pro_active) ? $product->pro_active == '1' ? 'checked=checked' :'' :'' }} value="1" name="active" > <span> Kích hoạt</span>
        </div>
        <div class="form-group">
            <label>Nội dung</label>
            <textarea class="form-control" name="pro_content" rows="3" placeholder="Nội dung chính ....">{{isset($product->pro_content)?$product->pro_content:''}}</textarea>
        </div>
        <div class="form-group">
            <label>Chọn ảnh</label>
            <input type="file" name="avatar" >
        </div>
        @if(isset( $product->pro_avatar))
        <div class="row form-group">
            <label class="col-md-3 hidden">{{ $product->pro_avatar}}</label>
            <img id="img_output" style="margin-left: 12px" width="200px" height="200px"
                 src="/images/products/{{ $product->pro_avatar }}" alt="">
        </div>
            @endif
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Thể loại</label>
            <select class="form-control"  name="pro_category_id"  >
                @foreach($categories as $category)
                <option value="{{$category->id}}" {{old('pro_category_id',isset($product->pro_category_id) ? $product->pro_category_id :"") == $category->id ?  "selected" :""}} >{{$category->c_name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Giá bán</label>
            <input type="text" name="price"  value="{{old('price',isset($product->pro_price)?$product->pro_price:'')}}" class="form-control" placeholder="Nhập giá sản phẩm ...">
            <div class="has-error">
                @if($errors->has('price'))
                    <span class="help-block">
                {{$errors->first('price')}}
            </span>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label>Giảm giá</label>
            <input type="text" name="sale" value="{{old('sale',isset($product->pro_sale)?$product->pro_sale:'')}}" class="form-control" placeholder="Nhập % giảm giá ...">
        </div>
        <div class="form-group">
            <input type="checkbox" {{ isset($product->pro_hot) ? $product->pro_hot == '1' ? 'checked=checked' :'' :'' }} value="1" name="hot" > <span> Độ hót của sản phẩm</span>
        </div><div class="form-group">
        <div class="form-group">
            <label>Số lượng</label>
            <input type="text" name="number" value="{{old('number',isset($product->pro_number)?$product->pro_number:'')}}" class="form-control" placeholder="Nhập số lượng ...">
            <div class="has-error">
                @if($errors->has('number'))
                    <span class="help-block">
                {{$errors->first('number')}}
            </span>
                @endif
            </div>
        </div>
       </div>
    </div>
    <button type="submit" class="btn btn-success">Đăng ký</button>
</form>
