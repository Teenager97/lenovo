<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
// 使用类
use App\Http\Controllers\COntroller;

// 后台系统控制器首页
class ConfigsController extends Controller
{
    // 系统页面
    public function index(Request $request){
        

       
        return view('admin/sys/config/index');
    }

}
