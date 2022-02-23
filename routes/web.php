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

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\PagesController;
// use App\Http\Controllers\PostsController;

Route::get('/', [PagesController::class, 'index']);




Route::get('/about', [PagesController::class, 'about']);




Route::get('/services', [PagesController::class, 'services']);


Route::get('/create', [PostsController::class, 'create']);
// Route::get('/about', function(){
//     return view('pages.about');
// });
// Route::get('/users/{id}/{name}', function($id,$name){
//     return 'This is the user ' .$name. ' with an id of ' .$id;
// });

Route::resource('post', PostsController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
