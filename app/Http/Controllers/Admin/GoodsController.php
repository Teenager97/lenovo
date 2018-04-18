<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
// 使用类
use App\Http\Controllers\COntroller;

// 后台商品控制器首页
class GoodsController extends Controller
{
    // 商品页面
    public function index(Request $request){
        // 加载页面
        return view("admin.goods.index");

    }
    
    // 商品的添加页面
    public function create(){
        // 插叙分类
        $data=\DB::select("select types.*,concat(path,id) p from types order by p");

        // 数据处理
        foreach($data as $key => $value){
            $arr=explode(',',$value->path);
            $size=count($arr);
            $value->size=$size-1;
            $value->html=str_repeat('---',$size-1).$value->name;
        }
        return view("admin.goods.add")->with("data",$data);
    }

}
