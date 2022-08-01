<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, "index"])->name("home");
Route::get('/clients/{id}', [HomeController::class, "showClients"])->name("showClients");
Route::get('/video/{clientid}/{videoid}', [HomeController::class, "playVideo"])->name("playVideo");
Route::post('/search', [HomeController::class, "search"])->name("search");
Route::post('/showAll', [HomeController::class, "showAll"])->name("showAll");
Route::get('/about', [HomeController::class, "about"])->name("about");


