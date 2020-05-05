<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestProduct;
use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use App\Helper\Image;


class AdminProductController extends Controller
{
    use Image;
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index( Request $request)
    {
//        ->where('pro_name','like','%'.$request->search.'%')->where('pro_category_id',$request->category)->orderByDesc('id')
        $products =Product::with('category:id,c_name')->paginate(7);
//        if($request->search) {$products->where('pro_name','like','%'.$request->search.'%');}
//        if($request->category){$products->where('pro_category_id',$request->category); }
//        $products->orderByDesc('id')->paginate(10);
        $categories=$this->getCategory();
        $data=[
            'products' =>$products,
            'categories'=>$categories
        ];
        return view('admin::product.index',$data);
    }
    public function getCategory(){
        $categories =Category::all();
        return $categories;
    }
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $categories  =$this->getCategory();
        return view('admin::product.create',compact('categories'));
    }

    public function createOrUpdate($request,$id=''){

        $product = new Product();
        if($id){
            $product =Product::find($id);
            $imgOld=Product::select('pro_avatar')->first();
            $imgName=$imgOld->pro_avatar;
        }
        $product->pro_name=$request->name;
        $product->pro_slug=str_slug($request->name);
        $product->pro_avatar=$request->avatar;
        $product->pro_description =$request->description;
        $product->pro_content=$request->pro_content;
        $product->pro_price=str_replace(',','',$request->price);
        $product->pro_sale=$request->sale;
        $product->pro_active=$request->active ? 1 :0;
        $product->pro_hot=$request->hot ? 1 :0;
        $product->pro_category_id=$request->pro_category_id;
        $product->pro_number=$request->number;
        if ($request->hasFile('avatar')) {
            $this->deleteImage($product->pro_avatar);
            $imgName = $this->uploadImage($request->file('avatar'));
        }
        $product->pro_avatar=$imgName;
        $product->save();

    }
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(RequestProduct $request)
    {
        $this->createOrUpdate($request);
        return redirect('admin/product');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $categories  =$this->getCategory();
            $product=Product::find($id);
            $data=[
                'categories'=>$categories,
                'product'=>$product
            ];
        return view('admin::product.update',$data);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(RequestProduct $request, $id)
    {
        $this->createOrUpdate($request,$id);
            return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function action(Request $request,$action,$id)
    {
        if($action){
            $product =Product::find($id);
            switch ($action){
                case 'delete':
                    $product->delete();
                    break;
                case 'active':
                    $product->pro_active = $product->pro_active ? 0 : 1 ;
                    $product->save();
                    break;
                case 'hot':
                    $product->pro_hot = $product->pro_hot ? 0 : 1 ;
                    $product->save();
                    break;
            }
        }
        return redirect('/admin/product');
    }
}
