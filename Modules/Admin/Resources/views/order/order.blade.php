@if($orders)
    <table  class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Số lượng</th>
            <th>Giá bán</th>
            <th>Giảm giá</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $key =>$order)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$order->product->pro_name}}</td>
                <td><img src="/images/products/{{$order->product->pro_avatar}} " width="70px" height="70px" alt=""></td>
                <td>{{$order->or_qty}}</td>
                <td>{{number_format($order->or_price,'0','.',',')}} VNĐ</td>
                <td>{{$order->or_sale}} %</td>
                <td>
                    <a href=""><i class="fa fa-trash" style="font-size: 22px ;padding-right: 10px "></i></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="pagination pull-right">
    </div>
@endif
