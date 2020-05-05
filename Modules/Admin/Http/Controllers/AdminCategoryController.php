<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestCategory;
use App\Model\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $categories =Category::all();
        return view('admin::category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {

        return view('admin::category.create')->with('success','Thêm danh mục thành công');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(RequestCategory $request)
    {
         $this->createOrUpdate($request);
       return redirect('/admin/category');
    }
    public function createOrUpdate($request,$id=''){
        $category =  new Category();
        if($id){
            $category =Category::find($id);
        }
        $category->c_name=$request->name;
        $category->c_slug=str_slug($request->name);
        $category->c_active=$request->active ? $request->active :'0';
        $category->save();
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
        $category=Category::find($id);
        return view('admin::category.update',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->createOrUpdate($request,$id);
        return redirect('/admin/category')->with('success','Chỉnh sửa danh mục thành công');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function action(Request $request,$action,$id)
    {
      if($action){
          $category =Category::find($id);
          switch ($action){
              case 'delete':
                  $category->delete();
                  break;
              case 'active':
                  $category->c_active = $category->c_active ? 0 : 1 ;
                  $category->save();
                  break;
          }
      }
        return redirect('/admin/category');
    }
}
