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

Route::get('/',['as' =>'site.home', 'uses' => 'Site\PagesController@index']);
Route::group(['prefix' => 'site', 'as' => 'site.'], function(){

    Route::get('about',['as' =>'about', 'uses' => 'Site\PagesController@about']);
    Route::get('contact',['as' =>'contact', 'uses' => 'Site\PagesController@contact']);
    //o ? deixa o titulo como opcional
    Route::get('vehicle/{id}/{titulo?}', ['as' => 'vehicle', 'uses' => 'Site\PagesController@vehicle']);
});


Route::group(['prefix' => 'customer', 'as' =>'customer.'], function(){

    Route::get('rent/create', ['as' => 'rent.create', 'uses' => 'Site\CheckoutController@create']);
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth.checkrole', 'as' => 'admin.'], function (){

    Route::get('home',['as' => 'home','uses' => 'AdminHomeController@index']);

    Route::get('categories',['as' => 'categories.index', 'uses' => 'CategoriesController@index']);
    Route::get('categories/create',['as' => 'categories.create', 'uses' => 'CategoriesController@create']);
    Route::get('categories/edit/{id}',['as' => 'categories.edit', 'uses' => 'CategoriesController@edit']);
    Route::post('categories/update/{id}',['as' => 'categories.update', 'uses' => 'CategoriesController@update']);
    Route::post('categories/store',['as' => 'categories.store', 'uses' => 'CategoriesController@store']);

    Route::get('vehicles',['as' => 'vehicles.index', 'uses' => 'VehiclesController@index']);
    Route::get('vehicles/create',['as' => 'vehicles.create', 'uses' => 'VehiclesController@create']);
    Route::get('vehicles/edit/{id}',['as' => 'vehicles.edit', 'uses' => 'VehiclesController@edit']);
    Route::post('vehicles/update/{id}',['as' => 'vehicles.update', 'uses' => 'VehiclesController@update']);
    Route::post('vehicles/store',['as' => 'vehicles.store', 'uses' => 'VehiclesController@store']);

    Route::get('clients',['as' => 'clients.index', 'uses' => 'ClientsController@index']);
    Route::get('clients/create',['as' => 'clients.create', 'uses' => 'ClientsController@create']);
    Route::get('clients/edit/{id}',['as' => 'clients.edit', 'uses' => 'ClientsController@edit']);
    Route::post('clients/update/{id}',['as' => 'clients.update', 'uses' => 'ClientsController@update']);
    Route::post('clients/store',['as' => 'clients.store', 'uses' => 'ClientsController@store']);

    Route::get('rents',['as' => 'rents.index', 'uses' => 'RentsController@index']);
    Route::get('rents/create',['as' => 'rents.create', 'uses' => 'RentsController@create']);
    Route::get('rents/edit/{id}',['as' => 'rents.edit', 'uses' => 'RentsController@edit']);
    Route::post('rents/update/{id}',['as' => 'rents.update', 'uses' => 'RentsController@update']);
    Route::post('rents/store',['as' => 'rents.store', 'uses' => 'RentsController@store']);

    Route::get('pages', ['as' => 'pages.index', 'uses' => 'PagesController@index']);
    Route::get('pages/edit/{id}', ['as' => 'pages.edit', 'uses' => 'PagesController@edit']);
    Route::put('pages/update/{id}', ['as' => 'pages.update', 'uses' => 'PagesController@update']);
});

Auth::routes();
