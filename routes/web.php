<?php
use Illuminate\Database\Schema\Blueprint;

use Illuminate\Database\Migrations\Migration;

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
Route::group(['prefix'=>'admin'],function(){
	//Admin/theloai/them
	Route::group(['prefix'=>'theloai'],function(){
		route::get('danhsach','TheLoaiController@getDanhSach');
		route::get('sua','TheLoaiController@getSua');
		route::get('them','TheLoaiController@getThem');
		route::post('them','TheLoaiController@postThem');

	});
	//Admin/loaitin/them
	Route::group(['prefix'=>'loaitin'],function(){
		route::get('danhsach','loaitinController@getDanhSach');
		route::get('sua','loaitinController@getSua');
		route::get('them','loaitinController@getThem');

	});
		//Admin/tintuc/them
	Route::group(['prefix'=>'tintuc'],function(){
		route::get('danhsach','tintucController@getDanhSach');
		route::get('sua','tintucController@getSua');
		route::get('them','tintucController@getThem');

	});
	//Admin/user/them
			//Admin/tintuc/them
	Route::group(['prefix'=>'user'],function(){
		route::get('danhsach','userController@getDanhSach');
		route::get('sua','userController@getSua');
		route::get('them','userController@getThem');

	});

});