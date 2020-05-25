<?php
//
///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/
//
//Route::get('/', function () {
//    return 'welcome';
//});
//Route::get('/test1', function () {
//    return 'welcome';
//})->name('a');
////Route parameters
//Route::get('/test2/{id}',function($id){
//    return $id;
//});
//Route::get('/test3/{id?}',function(){
//    return 'asmaa';
//});
////Route::group(['namespace' => 'Admin', 'middleware' => 'auth'], function (){
////    Route::get('/second', 'second@showsecond1');
////});
//Route::group(['namespace' => 'Admin'], function (){
//    Route::get('/second', 'second@showsecond1')->middleware('auth');
//    Route::get('/second2', 'second@showsecond2');
//});
//Route::get('login', function(){
// return 'please inter your data';
//})->name('login');
////namespace
//Route::namespace('Front')->group(function (){
//Route::get('users', 'UserController@show');
//});
//Route::prefix('hello')->group(function(){
//    Route::get('user1', function (){
//       return 'hello user1';
//    });
//});
//Route::group(['namespace'=> 'Front'], function(){
//  Route::get('as', 'UserController@show');
//});
//
//Route::group(['namespace' => 'Admin'], function()
//{
//    Route::get('start', 'StartController@showadmin');
//});
//Route::resource('news', 'NewController');
////passing data using controller
//Route::get('/index', 'NewController@index');
////call landing page
//Route::get('/landing', function(){
//    return view('landing');
//});

Auth::routes(['verify' => 'true']);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function (){
    return 'hello';
});
