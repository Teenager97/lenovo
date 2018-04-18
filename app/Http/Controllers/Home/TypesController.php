<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
// 使用类
use App\Http\Controllers\COntroller;

// 分类页控制器
class TypesController extends Controller
{
    public function index(){
        return view('home/types');
    }
}
