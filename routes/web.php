<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo',['as'=>'demo',function(){
    return "url: ".route('demo');
}]);

Route::get('/hello/{name}/{age}',function($name,$age){
    return 'Xin chào '.$name." ".$age." tuổi";
})->where(['age'=>'[0-9]+']);

Route::get('/hi/{name}',function($name){
    return 'Xin chào '.$name;
});

Route::group(['prefix'=>"admin"], function(){
    Route::get('user/',function (){
        return "url: ".route('admin.user');
    })->name('admin.user');
    Route::get('teach/',function (){
        return "Admin => Teach";
    });
    Route::get('student/',function (){
        return "Admin => Student";
    });

});
