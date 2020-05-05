<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\RequestArticle;
use App\Model\Article;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Helper\Image;

class AdminArticleController extends Controller
{
    use Image;
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
       $articles =Article::all();
        return view('admin::article.index',compact('articles'));
    }

    /*
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {

        return view('admin::article.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function createOrUpdate($request,$id=''){
        $article = new Article();
        if($id){
            $article =Article::find($id);
        }
        $article->a_name=$request->name;
        $article->a_slug=str_slug($request->name);
        $article->a_description =$request->description;
        $article->a_content=$request->a_content;
        $article->a_active=$request->active ? 1 :0;
        if ($request->hasFile('avatar')) {
           // $this->deleteImage($article->a_avatar);
            $imgName = $this->uploadImage($request->file('avatar'));
            $article->a_avatar=$imgName;

        }
        $article->save();

    }
    public function store(RequestArticle $request)
    {

        $this->createOrUpdate($request);
        return redirect('/admin/article');
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
        $article =Article::find($id);
        return view('admin::article.update',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(RequestArticle $request, $id)
    {

       $this->createOrUpdate($request,$id);
       return redirect('/admin/article');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function action(Request $request,$action,$id)
    {
        if($action){
            $article =Article::find($id);
            switch ($action){
                case 'delete':
                    $article->delete();
                    break;
                case 'active':
                    $article->a_active = $article->a_active ? 0 : 1 ;
                    $article->save();
                    break;
            }
        }
        return redirect('/admin/article');
    }
}
