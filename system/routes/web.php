<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\postcontroller;
use App\Http\Controllers\usercontroller;

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
    return view('Admin/beranda');
});

Route::prefix('Admin')->group(function(){
	//beranda
	Route::resource('beranda', postcontroller::class);
	/*Route::get('beranda',[postcontroller:: class,'index']);
	Route::get('beranda/create',[postcontroller:: class,'create']);
	Route::post('beranda/create',[postcontroller:: class,'store']);
	Route::get('beranda/edit/{post}',[postcontroller:: class,'edit']);
	Route::put('beranda/update/{post}',[postcontroller:: class,'update']);
	Route::get('beranda/show/{post}',[postcontroller:: class,'show']);
	Route::delete('beranda/{post}',[postcontroller:: class,'destroy']);*/
	//user 
	Route::resource('user', usercontroller::class);
});

Route::get('Auth/login', [authcontroller::class, 'Login'])->name('login');

Route::post('Auth/login', [authcontroller::class, 'LoginProcess']);

// Register Admin Master
Route::get('Auth/register', [authcontroller::class, 'create']);
Route::post('Auth/register', [authcontroller::class, 'Register']);
// end
Route::get('/logout', [authcontroller::class, 'destory']);

