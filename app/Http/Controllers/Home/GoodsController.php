<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
// 使用类
use App\Http\Controllers\COntroller;

// 商品详情页控制器
class GoodsController extends Controller
{
    public function index(){
        return view('home/goods');
    }
}
