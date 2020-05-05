<?php

namespace App\Http\Controllers;

use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;

class CategoryController extends FontendController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getListProduct(Request $request){
        $url =$request->segment(2);
        $url=preg_split('/(-)/i',$url);
        if($id =array_pop($url))
        {
            $products=Product::where([
                'pro_category_id'=>$id,
                'pro_active'=>Product::STATUS_PUBLIC
            ]);
            if($request->price){
                $price=$request->price;
                switch ($price){
                    case '1':
                        $products->where('pro_price','<',1000000);
                        break;
                    case '2':
                        $products->whereBetween('pro_price',[1000000,5000000]);
                        break;
                    case '3':
                        $products->whereBetween('pro_price',[50000000,10000000]);
                        break;
                    case '4':
                        $products->where('pro_price','>',10000000);
                        break;
                }
            }
            if($request->orderby){
                $orderby=$request->orderby;
                switch ($orderby){
                    case 'desc':
                        $products->orderBy('id','DESC');
                        break;
                    case 'asc':
                        $products->orderBy('id','ASC');
                        break;
                    case 'price_max':
                        $products->orderBy('pro_price','ASC');
                        break;
                    case 'price_min':
                        $products->orderBy('pro_price','DESC');
                        break;
                }
            }

           $products= $products->paginate(10);
            $categoryProduct =Category::find($id);
            $data=[
              'products' =>$products,
                'category'=>$categoryProduct,
            ];
            return view('products.index',$data);
        }
       return redirect('/');
    }
}
