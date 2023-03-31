<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Cheklogin;
use App\Http\Controllers\Controller;

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
Route::get('/shaurma/{tibi}/{sany?}',[\App\Http\Controllers\NewsController::class,'povar_asan']);

Route::get('desert/{aty}/{sany?}',[\App\Http\Controllers\NewsController::class,'abu']);



Route::get('dizayn',[\App\Http\Controllers\Controller::class,'dizayn']);

//Route::post('vhod',[\App\Http\Controllers\Controller::class,'vhod'])->middleware(\App\Http\Middleware\Cheklogin::class);
//Route::post('vhod',[Controller::class,'vhod'])->middleware(Cheklogin::class);
Route::post('vhod',[Controller::class,'vhod'])->middleware('teksher');

//eferger5re5 ewger5yhr6t eryhret5uhyr erthurt5ujhr

Route::get('forma',[\App\Http\Controllers\Controller::class,'forma']);
Route::post('validate',[\App\Http\Controllers\Controller::class,'validate']);
