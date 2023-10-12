<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clusterController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index',[clusterController::class,'index'])->name('index');
Route::post('/index/store',[clusterController::class,'store'])->name('index.store');
Route::get('/recuperer-communes', [clusterController::class, 'recupererCommunes']);
