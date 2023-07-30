<?php
namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\Admin;
use Illuminate\Support\Facades\Session;

class Login extends Controller{
    public function init()
    {}

    public function lact(LoginRequest $request)
    {
        // 接值
        $post=$request->post();
        dump($post);
        $rt=Admin::checkLogin($post);
        dump($rt);
        if($rt['error']==0){
            // 存储session
            Session::put("admin",$rt['info']);
            return showMessage(['success'=>$rt['msg'],'url'=>'/list','time'=>10]);
        }else{
            return showMessage(['error'=>$rt['msg'],'time'=>5]);
        }
    }

}
