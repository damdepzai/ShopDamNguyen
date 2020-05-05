<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\Product;
use Illuminate\Http\Request;

class HomeController extends FontendController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productsSale=Product::where(['pro_active'=> Product::STATUS_PUBLIC,'pro_hot'=>Product::HOT_ON])->where('pro_sale','>','0')->limit(7)->get();
        $productsNew=Product::where(['pro_active'=>Product::STATUS_PUBLIC])->orderBy('id','DESC')->limit(4)->get();
        $productsHotSwap=Product::where(['pro_active'=>Product::STATUS_PUBLIC,'pro_hot'=>Product::HOT_ON])->orderBy('pro_price','ASC')->limit(4)->get();
        $productsNewSwap=Product::where(['pro_active'=>Product::STATUS_PUBLIC])->orderBy('id','ASC')->limit(4)->get();
        $productsHot=Product::where(['pro_active'=>Product::STATUS_PUBLIC,'pro_hot'=>Product::HOT_ON])->orderBy('pro_price','DESC')->limit(4)->get();
        $articles=Article::where(['a_active'=>Article::STATUS_PUBLIC])->limit(3)->get();

        $productsHotOrRating =Product::where(['pro_active'=> Product::STATUS_PUBLIC,'pro_hot'=>Product::HOT_ON])->orderBy('pro_price','DESC')->limit(3)->get();
        $productsSaleOrRating =Product::where(['pro_active'=> Product::STATUS_PUBLIC,'pro_hot'=>Product::HOT_ON])->orderBy('pro_sale','DESC')->limit(3)->get();
        $productsTransactionOrRating =Product::where(['pro_active'=> Product::STATUS_PUBLIC,'pro_hot'=>Product::HOT_ON])->orderBy('pro_pay','DESC')->limit(3)->get();
        $data=[
            'productsSale'=>$productsSale,
            'articles'=>$articles,
            'productsNew'=>$productsNew,
            'productsHot'=>$productsHot,
            'productsNewSwap'=>$productsNewSwap,
            'productsHotSwap'=>$productsHotSwap,
            'productsHotOrRating'=>$productsHotOrRating,
            'productsSaleOrRating'=>$productsSaleOrRating,
            'productsTransactionOrRating'=>$productsTransactionOrRating

        ];
        return view('index',$data);
    }
}
