<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
// 使用类
use App\Http\Controllers\COntroller;

// 前台首页控制器
class IndexController extends Controller
{
    public function index(){
        return view('home/index');
    }
}
