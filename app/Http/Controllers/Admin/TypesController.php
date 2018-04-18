<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
// 使用类
use App\Http\Controllers\COntroller;

// 后台分类控制器首页
class TypesController extends Controller
{
    // 数据格式化

    public function data1($data,$pid=0){
        $newArr=array();
        // 获取顶级分类
       foreach($data as $key=>$value){
           if($value->pid==$pid){
               $newArr[$value->id]=$value;

               $newArr[$value->id]->zi=$this->data1($data,$value->id);
           }
       }
       return $newArr;
    }

    // 分类页面
    public function index(){

        // 递归实现数据格式化

        $data=\DB::table("types")->get();
        $arr=$this->data1($data,$pid=0);

        // 实现树形结构
        $data=\DB::select("select types.*,concat(path,id) p from types order by p");

        //  查询数据
        // $data=\DB::table("types")->orderBy("sort",'desc')->get();
        $show=\DB::table('admin')->paginate(5);
        // 加载数据    
       return view('admin.types.index')->with("data",$data)->with("show",$show);
    }

    // 添加页面 admin/types/create get
    public function create(){
        return view('admin.types.add');
    }

    // 插入操作 admin/types post
    public function store(Request $request){
        // 处理数据
       $data=$request->except("_token");
        // 插入数据
        if(\DB::table('types')->insert($data)){
            // 插入成功 跳转到展示页面
            return redirect('admin/types');
        }else{
            // 插入失败 回到上一个页面
            return back();
        }
    }

    // 更新页面 admin/admin/{admin} put
    public function update(){
        
    }
    // 删除操作 admin/admin/{admin} delete
    public function destroy($id){

       

        // 删除操作
        if(\DB::delete("delete from types where id=$id or path like '%,$id,%'")){
            echo "1";
        }else{
            echo "0";
        }
    }
     // 修改状态方法
     public function ajaxStatu(Request $request){
       
    }
}
