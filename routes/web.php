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

Route::get('/',['as' =>'site.home', function(){
    return view('site.home');
}]);
Route::get('/sobre',['as' =>'site.sobre', function(){
    return view('site.sobre');
}]);
Route::get('/contato',['as' =>'site.contato', function(){
    return view('site.contato');
}]);
//o ? deixa o titulo como opcional
Route::get('/veiculo/{id}/{titulo?}',['as' =>'site.veiculo', function(){
    return view('site.veiculo');
}]);

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

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
