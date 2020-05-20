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

Route::get('/', function (){
    return view('index');
});
Route::get('/index', function (){
    return view('index');
});
Route::get('/cource', function (){
    return view('cource');
});
Route::get('/single-blog','UserController@singleBlog');

Route::get('/elements', function (){
    return view('elements');
});
Route::get('/contact', function (){
    return view('contact');
});
Route::get('/trangdangky', function (){
    return view('trangdangky');
});
Route::post('single-blog/login','UserController@dangky');
Route::post('login','UserController@login');
Route::get('logout','UserController@logout');
Route::get('addWord','CrudController@addWord');
Route::post('createWord','CrudController@createWord');
Route::get('searchWord','CrudController@searchWord');
Route::get('editWord/{id}','CrudController@editWord');
Route::post('updateWord/{id}','CrudController@updateWord');
Route::get('deleteWord/{id}','CrudController@deleteWord');









