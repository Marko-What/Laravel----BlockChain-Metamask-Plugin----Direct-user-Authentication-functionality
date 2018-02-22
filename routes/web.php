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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::post('/ethm', [
	'uses' => 'loginControllerEth@login',
	'as' => 'loginEth',
	/*'middleware' => 'auth'*/
]);



Route::get('/ethm', [
	'uses' => 'loginControllerEth@showLoginForm',
	'as' => 'loginEth',
	
]);



Route::group(['middleware' => ['jwt.auth']], function() {
	
	Route::get('/test',function(){
	return "web token verification passed through ";

})->name('test');  



}); /* end of jwt.auth middleware */

