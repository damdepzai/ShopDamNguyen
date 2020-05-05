<?php


namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
use function App\Http\Middleware\get_data_user;


class CheckLoginAdmin
{ public function handle($request ,Closure $next){
        function get_data_user($type,$field='id'){
            return Auth::guard($type)->user() ? Auth::guard($type)->user()->$field :'';
        }
    if(!get_data_user('admins')){

        return redirect()->route('admin.login');
    }
    return $next($request);
}

}
