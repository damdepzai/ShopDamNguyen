<?php

namespace Modules\Admin\Http\Controllers;

use App\Model\Order;
use App\Model\Product;
use App\Model\Transaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $transactions =Transaction::with('user:id,name')->paginate(10);
        return view('admin::transaction.index',compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show(Request $request,$id)
    {
        if($request->ajax()){
            $orders =Order::with('product:id,pro_name,pro_avatar')->where('or_transaction_id',$id)->get();
            $html= view('admin::order.order',compact('orders'))->render();
            return \response()->json($html);
        }

    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function action($id)
    {
       $transaction =Transaction::find($id);
       $orders =Order::where('or_transaction_id',$id)->get();
       if($orders){
           //cập nhập lại trạng thái đơn hàng
           foreach ($orders as $order){
               $product=Product::find($order->or_product_id);
               $product->pro_number=$product->pro_number - $order->or_qty;
               $product->pro_pay= $product->pro_pay +1;
               $product->save();
           }
       }
       //update user
        \DB::table('users')->where('id',$transaction->tr_user_id)->increment('total_pay');
       $transaction->tr_status =Transaction::TRANSACTION_ON;
       $transaction->save();
       return redirect()->back();

    }
}
