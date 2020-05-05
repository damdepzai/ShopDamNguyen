<?php


namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;

class CheckLoginUser
{
    public function handle($request ,Closure $next){
        /*kiểm tra xem đã đăng nhập chưa thì mới cho thanh toán*/
        if(!function_exists('get_data_user')){
            function get_data_user($type,$field='id'){
                return Auth::guard($type)->user() ? Auth::guard($type)->user()->$field :'';
            }
        }
        if(!get_data_user('web')){
            return redirect()->route('get.login');
        }
        return $next($request);
    }

}
