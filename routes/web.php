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

Route::get('/',[HomeController::class,'HomeIndex']);
Route::get('dataInsert',[HomeController::class,'searchEployee']);
Route::Post('dataInsert',[HomeController::class,'DataInsert']);
Route::get('/employee/search', [HomeController::class,'search'])->name('employee.search');

Route::post(
    "/employee/addVocation",
    [HomeController::class,'addVocation']
)->name("addVocation");

