<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\CollectionsController;
use App\Http\Controllers\FabricsController;
use App\Http\Controllers\FabricTypesController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\SizeTypesController;


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


Route::resource('products', ProductsController::class);
Route::resource('collections', CollectionsController::class);
Route::resource('fabrics', FabricsController::class);
Route::resource('fabrictypes', FabricTypesController::class);
Route::resource('sizetypes', SizeTypesController::class);
Route::resource('messages', MessagesController::class);
Route::get('conversation/{userId}', [MessagesController::class, 'conversation'])
    ->name('messages.conversation');
Route::post('send-message', [MessagesController::class, 'sendMessage'])
    ->name('message.send-message');
