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

Route::resource('posts', 'PostsController');
Route::get('/create', 'PostsController@create');
Route::get('/ajax-prov', function(){
	$rid = Input::get('id');
	$prov = Province::where('region', '=', $rid)->get();
	return Response::json($prov);
});
Route::get('/ajax-city', function(){
	$pid = Input::get('pid');
	$city = Cities::where('province', '=', $pid)->get();
	return Response::json($city);
});
Route::get('/ajax-bara', function(){
	$cid = Input::get('cid');
	$bara = Barangays::where('barangay', '=', $cid)->get();
	return Response::json($bara);
});