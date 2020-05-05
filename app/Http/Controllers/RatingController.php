<?php

namespace App\Http\Controllers;

use App\Model\Product;
use App\Model\Rating;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use function App\Http\Middleware\get_data_user;

class RatingController extends Controller
{
   public function saveComment(Request $request,$id){

        if($request->ajax()){
            Rating::insert([
                'product_id'=>$id,
                'number'=>$request->number,
                'content'=>$request->r_content,
                'user_id'=>get_data_user('web'),
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ]);
            $product=Product::find($id);
            $product->pro_total_number +=$request->number;
            $product->pro_total_rating+=1;
            $product->save();
        return response()->json('success',200);
        }
   }
}
