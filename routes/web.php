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
/*use App\Twitter;
app()->singleton('twitter', function($app){
  return new Twitter('secret key');
});
$t = app()->make('twitter');
$t2 = app()->make('twitter');
dd($t,$t2);*/


Route::get('/', function () {
    return view('welcome');
});


Route::get('/shelves/{commodity}', function ($commodity)
{
  return view('shelf', ['commodity' =>$commodity]);
});

Route::get('commodities', 'CommodityController@index')->name('commodities.index');
Route::get('commodities/create', 'CommodityController@create')->name('commodities.create')->middleware('auth');
Route::post('commodities', 'CommodityController@store')->name('commodities.store')->middleware('auth');
Route::get('commodities/{id}', 'CommodityController@show')->name('commodities.show');
Route::delete('commodities/{id}', 'CommodityController@destroy')->name('commodities.destroy');
Route::put('commodities/update/{id}', 'CommodityController@update')->name('commodities.update');
Route::get('commodities/{id}/edit', 'CommodityController@edit')->name('commodities.edit');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function(){
                return view('welcome');
                })->middleware('polite');
//Route::get('exampleroute', 'CommodityController@exampleMethod');
Route::get('/shelves', 'ShelfController@page');
