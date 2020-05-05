<?php

namespace App\Http\Controllers;

use App\Model\Order;
use App\Model\Product;
use App\model\transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Cart;
use function App\Http\Middleware\get_data_user;

class ShoppingCartController extends Controller
{
    public function  addProduct(Request $request,$id){
        $product = Product::select('id','pro_name','pro_avatar','pro_price','pro_sale','pro_number')->find($id);
        if(!$product){
            return redirect('/');
        }
        $price =$product->pro_price;
        if($product->pro_sale){
            $price =$price *(100 - $product->pro_sale)/100;
        }
        if($product->pro_number == 0){
            return redirect()->back()->with('warning','Sản phẩm đã hết hàng');
        }

        \Cart::add([
            'id' => $product->id,
            'name' => $product->pro_name,
            'qty' => 1,
                'price' => $price,
            'options' => [
                'avatar' => $product->pro_avatar,
              'price_old'=>$product->pro_price,
                'sale'=>$product->pro_sale,
            ]

            ]
        );

            return redirect()->back()->with('success','Mua sản phẩm thành công');
    }
    public function listOrderProduct(){
        $orderProducts =\Cart::content();
        return view('shopping.index',compact('orderProducts'));
    }
    public function removeOrderProduct($id){
        \Cart::remove($id);
        return redirect()->back();
    }
    public function payPal(){
        $orderProducts =\Cart::content();
        return view('shopping.paypal',compact('orderProducts'));
    }
    /*Lưu thông tin khi người dùng mua hàng*/
    public function  saveInfoShoppingCart(Request $request){
        $totalMoney =str_replace(',','',\Cart::subtotal());
        $transactionId =Transaction::insertGetId([
            'tr_user_id'=>get_data_user('web'),
            'tr_total'=>(int)$totalMoney,
            'tr_note'=>$request->note,
            'tr_address'=>$request->address,
            'tr_phone'=>$request->phone,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        if($transactionId){
            $orderProducts =\Cart::content();
            foreach ($orderProducts as $product){
                Order::insert([
                    'or_transaction_id'=>$transactionId,
                    'or_product_id'=>$product->id,
                    'or_qty'=>$product->qty,
                    'or_price'=>$product->options->price_old,
                    'or_sale'=>$product->options->sale,
                    'created_at'=>Carbon::now(),
                    'updated_at'=>Carbon::now(),
                ]);
            }
        }
        \Cart::destroy();
        return redirect('/');
    }
}
