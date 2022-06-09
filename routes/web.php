<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


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



Route::get("/",[Homecontroller::class,"index"]);


//users
Route::get("/users",[Admincontroller::class,"user"]);
Route::get("/deleteuser/{id}",[Admincontroller::class,"deleteuser"]);

//food
Route::get("/foodmenu",[Admincontroller::class,"foodmenu"]);
Route::post("/uploadfood",[Admincontroller::class,"upload"]);




Route::get("/redirects",[Homecontroller::class,"redirects"]);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
