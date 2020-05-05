<?php

namespace Modules\Admin\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $users=DB::table('users')->paginate(10);
        return view('admin::user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('admin::user.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function createOrupdate($request,$id=''){

        $user = new User();
        if($id){
            $user=User::find($id);
        }
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->address=$request->address;
        $user->password=bcrypt($request->password) ;
            $user->save();


    }

    public function store(Request $request)
    {
        $request->password='123456789';
        $this->createOrupdate($request);
        return redirect()->route('user.home');
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
        $user=User::find($id);
        return view('admin::user.update',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $this->createOrupdate($request,$id);
        return redirect()->route('user.home');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
        return redirect()->route('user.home');
    }
}
