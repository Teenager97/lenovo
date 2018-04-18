<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
// 使用类
use App\Http\Controllers\COntroller;

// 后台首页
class IndexController extends Controller
{
    public function index(){
        return view('admin/index');
    }
}
