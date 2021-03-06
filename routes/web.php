<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// 前台路由
    // 主页
    Route::get('/','Home\IndexController@index');

    // 分类页面
    Route::get('/types/{id}','Home\TypesController@index');
    // 商品详情页面
    Route::get('/goods/{id}','Home\GoodsController@index');
// 后台路由

// 登录页面
    Route::get('admin/login','Admin\LoginController@index');
    // 验证码
    Route::get('admin/yzm','Admin\LoginController@yzm');
    // 文件上传的路由
    Route::any("/admin/shangchuan",'Admin\CommonController@upload');

    Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware'=>'adminLogin'],function(){
        // 后台首页路由
        Route::get('/','IndexController@index');

        // 后台管理员管理
        Route::resource('admin','AdminController');
        // 后台管理员状态修改路由
        Route::post('admin/ajaxStatu','AdminController@ajaxStatu');
    
        // 后台用户管理
        Route::get('user','UserController@index');

        // 后台商品管理
        Route::resource('goods','GoodsController');


        // 后台分类管理
        Route::resource('types','TypesController');

        // 后台的系统管理
            // 系统管理

            Route::resource("sys/config","ConfigsController");
            // 轮播图管理
            Route::resource("sys/slider","SliderController");
            // 广告管理
            Route::resource("sys/ads","AdsController");
            // 分类广告管理
            Route::resource("sys/types","TypesAdsController");
    });

   
