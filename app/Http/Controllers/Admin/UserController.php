<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
// 使用类
use App\Http\Controllers\COntroller;

// 后台用户控制器首页
class UserController extends Controller
{
    // 用户页面
    public function index(Request $request){
        

        $search=$request->input('search');
        
        if($search){
             // 从数据库中读取数据
             $data=\DB::table('user')->where("tel",'=',$search)->paginate(5);
             // 获取总数据
             $tot=\DB::table('user')->where("tel",'=',$search)->count();
        }else{
            // 从数据库中读取数据
            $data=\DB::table('user')->paginate(5);
            // 获取总数据
            $tot=\DB::table('user')->count();
        }

        
       
        return view('admin/user/index')->with('data',$data)->with('tot',$tot);
    }

}
