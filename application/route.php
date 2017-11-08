<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

//return [
//  '__pattern__' => [
//      'name' => '\w+',
//  ],
//  '[hello]'     => [
//      ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//      ':name' => ['index/hello', ['method' => 'post']],
//  ],
//
//];


use think\Route;
Route::rule('read/:id','Blog/read');
Route::resource('/index','Blog/add');
Route::resource('blogs','index/index');
