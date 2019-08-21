<?php
use App\Province;
use App\Cities;
use App\Barangays;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('posts/store1', 'PostsController@store1');
Route::get('/create', 'PostsController@create');
Route::resource('posts', 'PostsController');
Route::get('/ajax-prov', function(){
	$rid = Input::get('rid');
	$prov = Province::where('region_id', '=', $rid)->get();
	return Response::json($prov);
});
Route::get('/ajax-city', function(){
	$pid = Input::get('pid');
	$city = Cities::where('province_id', '=', $pid)->get();
	return Response::json($city);
});
Route::get('/ajax-bara', function(){
	$cid = Input::get('cid');
	$bara = Barangays::where('cities_id', '=', $cid)->get();
	return Response::json($bara);
});