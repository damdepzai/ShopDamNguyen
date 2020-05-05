<?php

namespace Modules\Admin\Http\Controllers;

use App\Model\Admin;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $user = DB::table('users')->count();
        $transaction = DB::table('transactions')->where('tr_status','=','0')->count();
        $product = DB::table('products')->count();
        $data=[
            'user'=>$user,
            'transaction'=>$transaction,
            'product' =>$product
        ];
        return view('admin::index',$data);
    }

    public function getLogin(){
        return view('admin::auth.login');
    }
    public function postLogin(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admins')->attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('admin');
        }
        return redirect()->back();
    }
    public function getRegister(){
        return view('admin::auth.register');
    }
    public function postRegister(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|unique:users,email,',
             'password' => 'required|string',
        ]);
        if ($validator->fails()) {
            return redirect()->route('admin.register');
        }
        $admin =Admin::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        return redirect('admin-shop/login');

    }
    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }

}
