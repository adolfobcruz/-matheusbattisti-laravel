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

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProductController;

Route::get('/', 								[EventController::class, 		'index']);
Route::get('/contacts/index',		[ContactController::class, 	'index']);
Route::get('/events/create',		[EventController::class, 		'create']);
Route::get('/products/create',	[ProductController::class,	'create']);