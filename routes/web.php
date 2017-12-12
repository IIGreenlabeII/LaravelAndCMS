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
use Illuminate\Http\Request;

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', function () {
    $page = App\Page::where('slug', '=', 'home')->firstOrFail();
    return view('page', compact('page'));
});

Route::get('/formulier', function(){
	$form = App\Page::where('slug', '=', 'formulier')->firstOrFail();
	return view('form', compact('form'));
});

Route::get('/diensten', function(){
	$diensten = App\Page::where('slug', '=', 'diensten')->firstOrFail();
	return view('diensten', compact('diensten'));
});

Route::get('/tarieven', function(){
	$tarieven = App\Page::where('slug', '=', 'tarieven')->firstOrFail();
	return view('tarieven', compact('tarieven'));
});

Route::get('{slug}', function($slug){
	$page = App\Page::where('slug', '=', $slug)->firstOrFail();
	return view('page', compact('page'));
});

Route::post('/newClients', 'mailController@newClients');
Route::post('/clients', 'mailController@clients');
