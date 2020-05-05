<?php

namespace App\Http\Controllers;

use App\Model\Article;
use App\Model\Product;
use Illuminate\Http\Request;

class ArticleController extends FontendController
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getListArticle(){
        $articles=Article::where(['a_active'=> Article::STATUS_PUBLIC])->paginate(4);
        $products=Product::where(['pro_active'=>Product::STATUS_PUBLIC,'pro_hot'=>Product::HOT_ON])->orderBy('id','DESC')->limit(3)->get();
        $data=[
            'articles'=>$articles,
            'products'=>$products
        ];
        return view('article.index',$data);
    }
    public function articleDetail(Request $request,$id){
        $url =$request->segment(2);
        $url=preg_split('/(-)/i',$url);
        if($id =array_pop($url))
        {
            $article= Article::find($id);
            $articles=Article::where(['a_active'=> Article::STATUS_PUBLIC])->orderBy('id','DESC')->limit(4)->get();
            $products=Product::where(['pro_active'=>Product::STATUS_PUBLIC,'pro_hot'=>Product::HOT_ON])->orderBy('id','DESC')->limit(3)->get();
            $data=[
              'article'=>$article,
              'articles'=>$articles,
                'products'=>$products
            ];
            return view('article.detail',$data);
        }

    }
}
