<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/",[RegisterController::class,"index"]);
Route::post("/",[RegisterController::class,"register"]);
Route::get("/home",[RegisterController::class,"show"])->name("home");

// Route::get('/test', function () {
//     return config('app.env');
// });

// // Route::get('/student/{id}/{name}', function ($id,$name) {
// //     return "Student name is {$name} and his id is {$id}";
// // })->where(["id"=>'[0-9]+',"name"=>'[a-z]+']);
// Route::get('/student/{id}/{name}', function ($id,$name) {
//     return "Student name is {$name} and his id is {$id}";
// })->whereNumber("id")->whereAlpha("name");

// Route::get('/category/{category}', function ($category) {
//     return "Student category is {$category}";
// })->whereIn("category",["cricket","football","basketball"]);


// Route::get("/about-us",[HomeController::class,"aboutus"]);

// //naming route
// Route::get("/data/share/king", function () {
//     return "Hello world";
// })->name("run");

// //grouping routes
// Route::group(['prefix'=> 'admin'], function () {
//     Route ::get('/user/{id}', function ($id) {
//         return "user id is {$id}";
//     });
//     Route::get("/settings", function () {
//         return "I am one of the group routes";
//     });
// });

// // Route::prefix("admin")->group(function () {
// // });

// //checking blade file
// Route::get("/check",function(){
//     return view("check");
// });