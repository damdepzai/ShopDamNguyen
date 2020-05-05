<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Product;
use App\Model\Rating;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductDetailController extends FontendController
{
    public function __construct()
    {
        parent::__construct();
    }

   public function productDetail(Request $request){
       $url =$request->segment(2);
       $url=preg_split('/(-)/i',$url);
       if($id =array_pop($url))
       {
           $product=Product::find($id);

           $ratings=Rating::with('user:id,name')->where('product_id',$id)->orderBy('created_at','DESC')->paginate(5);
           //gom nhóm lại để tính tổng
           $ratingsDashboard=Rating::groupBy('number')->where('product_id',$id)
               ->select(DB::raw('count(number) as total'),DB::raw('sum(number) as sum'))
               ->addSelect('number')->get()->toArray();
           if(!empty($ratingsDashboard)){
               for ($i=1;$i<=5;$i++){
                   $arrayRatings[$i]=[
                       "total"=>0,
                       "sum"=>0,
                       "number"=>0
                   ];{
                       foreach ($ratingsDashboard as $item){
                           if($item['number']==$i){
                               $arrayRatings[$i]=$item;
                               continue;
                           }
                       }
                   }
               }
           }
           $data=[
               'product' =>$product,
               'ratings'=>$ratings,
               "arrayRatings"=>$ratingsDashboard
           ];
           return view('products.detail',$data);
       }

       return redirect('/');
   }
}
