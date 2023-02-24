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

Route::get('/', 'HomeController@home')->name('route_FrontEnd_home');

Route::get('/products', function () {
    return view('client/pages/products/shop');
});

Route::get('/detail', function () {
    return view('client/pages/index');
});

Route::get('/contact', function () {
    return view('client/pages/contact/index');
});

Route::get('/news', function () {
    return view('client/pages/new/new');
});

Route::get('/new/detail', function () {
    return view('client/pages/new/detail');
});


//Chỉ dùng cho đăng nhập
// Route::get('/login', ['as'=>'login', 'uses'=>'Auth\LoginController@getLogin']);
// Route::post('/login', ['as'=>'login', 'uses'=>'Auth\LoginController@postLogin']);

// //Đăng xuất
// Route::get('/logout', ['as'=>'logout', 'uses'=>'Auth\LoginController@getLogout'])->middleware('auth');

// Route::middleware(['auth'])->get('/admin', function () {
//     return view('templates.layout');
// });

// Route::prefix('/admin/bds')->middleware(['auth'])->group(function() {
//     Route::get('/', 'Bds\BdsController@index')->name('route_BackEnd_Bds_index');
//     Route::match(['get', 'post'], '/add', 'Bds\BdsController@add')->name('route_BackEnd_Bds_add');
//     Route::get('/changeStatus', 'Bds\BdsController@changeStatus')->name('changeStatus'); //Bds.changeStatus
//     Route::get('/edit/{id}', 'Bds\BdsController@edit')->name('route_BackEnd_Bds_edit');
//     Route::post('/update/{id}', 'Bds\BdsController@update')->name('route_BackEnd_Bds_update');
//     Route::get('/delete/{id}', 'Bds\BdsController@delete')->name('route_BackEnd_Bds_delete');

// });



