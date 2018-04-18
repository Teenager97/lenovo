<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
// 使用类
use App\Http\Controllers\COntroller;

// 后台登录控制器
class LoginController extends Controller
{
    public function index(){
        return view('admin/login');
    }
    public function yzm(){
        require_once("../resources/code/Code.class.php");
        // 实例化

        $code=new \Code();

        // 生成验证码

        $code->make();
    }
}
