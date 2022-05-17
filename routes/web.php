<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Studentdata;
use App\Http\Controllers\Studentdatalist;
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

Route::get("Student", [Studentdata::class, 'Userdata']);

// Route::view("userview", "view");

Route::get('/userview', function () {
    return view('view');
});

Route::view("addUser", "welcome");

Route::post("addUser", [Studentdata::class, 'Userdata']);
Route::get("listUser", [Studentdatalist::class, 'List']);
Route::get("datadel/{id}", [Studentdatalist::class, 'delete']);
Route::get("edit/{id}", [Studentdatalist::class, 'edit']);