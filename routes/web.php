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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/page', 'TestController@index');

Route::get('/about/{id}', 'FirstController@show');

Route::get('/articles', 'Admin\Core@getArticles')
    ->name('articles');

Route::get('/article/{page}', 'Admin\Core@getArticle')
    ->middleware('mymiddle:admin')
    ->name('article');

Route::resource('/pages', 'Admin\CoreResourceController',['except' =>[
    'create','update'
]]);
