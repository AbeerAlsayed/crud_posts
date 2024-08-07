<?php
//namespace App\Models;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CvsController;
use Illuminate\Support\Facades\DB;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('cv',[CvsController::class,'index'])->name('cv.index');
Route::get('cv/create',[CvsController::class,'create'])->name('cv.create');
Route::post('cv/store',[CvsController::class,'store'])->name('cv.store');
Route::get('profile',[CvsController::class,'show']);
