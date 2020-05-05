<?php

namespace App\Http\Controllers;

use App\Http\Requests\Requestpassword;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function getdata(){
        if(!function_exists('get_data_user')){
            function get_data_user($type,$field='id'){
                return Auth::guard($type)->user() ? Auth::guard($type)->user()->$field :'';
            }
        }
    }
    public function  getProfile(){
        $this->getdata();
        $id=get_data_user('web');
        $user =User::find($id);
        return view('user.profile',compact('user'));
    }
    public function saveProfile(){
        return redirect()->back();
    }
    public function password(){
        return view('user.password');
    }
    public function changepassword(Requestpassword $requestpassword){
        $this->getdata();
        if(Hash::check($requestpassword->password_old,get_data_user('web','password'))){
            $user=User::find(get_data_user('web'));
            $user->password=bcrypt($requestpassword->password_new);
            $user->save();
            return redirect()->back()->with('success','Cập nhập thành công');
        }
        return redirect()->back()->with('danger','Mật khẩu cũ không đúng');
    }
}
