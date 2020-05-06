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

Route::get('/', function () {
    return view('home');
});
Route::get("/login", function() {
    return view("user.login");
});
Route::post("/login",["as"=> "login", "uses"=>"LoginController@login"]);
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});
Route::get("/master","CampaignController@master");
Route::get("/master/{scene}","SceneController@master");

Route::resource('/armor', 'ArmorController');
Route::resource('/bag', 'BagController');
Route::resource('/campaign', 'CampaignController');
Route::resource('/character', 'CharacterController');
Route::resource('/consumable', 'ConsumableController');
Route::resource('/item', 'ItemController');
Route::resource('/scene', 'SceneController');
Route::resource('/stats', 'StatsController');
Route::resource('/user', 'UserController');
Route::resource('/weapon', 'WeaponController');

