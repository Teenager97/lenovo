<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
// 使用类
use App\Http\Controllers\COntroller;

// 后台广告控制器首页
class AdsController extends Controller
{
    // 广告页面
    public function index(Request $request){
        

       
        return view('admin/sys/ads/index');
    }

}
