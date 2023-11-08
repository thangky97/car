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

Route::get('/', 'Client\HomeController@index')->name('route_FrontEnd_Home');

Route::get('/cars', 'Client\CarController@index')->name('route_FrontEnd_Car');
Route::get('/cars/detail/{id}', 'Client\CarController@detail')->name('route_FrontEnd_Car_Detail');

Route::post('/contact', 'Client\CarController@create')->name('route_FrontEnd_Contact_Create');

Route::middleware('guest')->prefix('/admin/auth')->group(function () {
    Route::get('/login', 'Auth\LoginController@getLogin')->name('getLogin');
    Route::post('/login', 'Auth\LoginController@postLogin')->name('postLogin');
});

Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@getLogout'])->middleware('auth');

Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::get('/dashboard', 'Admin\DashboardController@index')->name('route_BackEnd_Dashboard');

    Route::prefix('/users')->group(function () {
        Route::get('/', 'Admin\UserController@index')->name('route_BackEnd_Users_List');
        Route::match(['get', 'post'], '/create', 'Admin\UserController@create')->name('route_BackEnd_Users_Create');
        Route::get('/edit/{id}', 'Admin\UserController@edit')->name('route_BackEnd_Users_Edit');
        Route::post('/update/{id}', 'Admin\UserController@update')->name('route_BackEnd_Users_Update');
    });

    Route::prefix('/customer')->group(function () {
        Route::get('/', 'Admin\CustomerController@index')->name('route_BackEnd_Customers_List');
        Route::match(['get', 'post'], '/create', 'Admin\CustomerController@create')->name('route_BackEnd_Customers_Create');
        Route::get('/edit/{id}', 'Admin\CustomerController@edit')->name('route_BackEnd_Customers_Edit');
        Route::post('/update/{id}', 'Admin\CustomerController@update')->name('route_BackEnd_Customers_Update');
    });

    Route::prefix('/car')->group(function () {
        Route::get('/', 'Admin\CarController@index')->name('route_BackEnd_Car_List');
        Route::match(['get', 'post'], '/create', 'Admin\CarController@create')->name('route_BackEnd_Car_Create');
        Route::get('/edit/{id}', 'Admin\CarController@edit')->name('route_BackEnd_Car_Edit');
        Route::post('/update/{id}', 'Admin\CarController@update')->name('route_BackEnd_Car_Update');
    });

    Route::prefix('/category_car')->group(function () {
        Route::get('/', 'Admin\CategoryCarController@index')->name('route_BackEnd_Category_Car_List');
        Route::match(['get', 'post'], '/create', 'Admin\CategoryCarController@create')->name('route_BackEnd_Category_Car_Create');
        Route::get('/edit/{id}', 'Admin\CategoryCarController@edit')->name('route_BackEnd_Category_Car_Edit');
        Route::post('/update/{id}', 'Admin\CategoryCarController@update')->name('route_BackEnd_Category_Car_Update');
    });

    Route::prefix('/banner')->group(function () {
        Route::get('/', 'BannerController@index')->name('route_BackEnd_Banner_index');
        Route::get('/add', 'BannerController@add')->name('route_BackEnd_Banner_add');
        Route::post('/store', function () {
            return view('admin/banner/store');
        });
        Route::get('/edit', function () {
            return view('admin/banner/edit');
        });
        Route::post('/update', function () {
            return view('admin/banner/update');
        });
    });

    Route::prefix('/contact')->group(function () {
        Route::get('/', 'Admin\ContactController@index')->name('route_BackEnd_Contact_List');
        Route::get('/edit/{id}', 'Admin\ContactController@edit')->name('route_BackEnd_Contact_Edit');
        Route::post('/update/{id}', 'Admin\ContactController@update')->name('route_BackEnd_Contact_Update');
        Route::get('/remove/{id}', 'Admin\ContactController@remove')->name('route_BackEnd_Contact_Remove');
    });

    Route::prefix('/news')->group(function () {
        Route::get('/', 'NewController@index')->name('route_BackEnd_New_index');
        Route::get('/add', 'NewController@add')->name('route_BackEnd_New_add');
        Route::post('/store', function () {
            return view('admin/news/store');
        });
        Route::get('/edit', function () {
            return view('admin/news/edit');
        });
        Route::post('/update', function () {
            return view('admin/news/update');
        });
    });

});




