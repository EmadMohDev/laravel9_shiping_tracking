<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Contracts\View\View;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/admin',[LoginController::class,'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin',[LoginController::class,'adminLogin'])->name('admin.login');

Route::get('/admin/register',[RegisterController::class,'showAdminRegisterForm'])->name('admin.register-view');
Route::post('/admin/register',[RegisterController::class,'createAdmin'])->name('admin.register');

Route::get('/admin/dashboard',function(){
    return view('admin');
})->middleware('auth:admin');





// tracking on map

Route::get('tracking/show', function () {
    return View('maps.show');
})->name('tracking-show');


Route::get('/tracking', function(){
     $data = [
            [30.05072510744215, 31.30558905318965],
            [30.026746790297862, 31.310125341162862],
            [30.026746790297862, 31.340125341162862],
            [30.016746790297862, 31.400125341162862],
            [30.016746790297862, 31.500125341162862],

    ] ;

    return response()->json($data) ;

})->name('tracking') ;


