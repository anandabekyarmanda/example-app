<?php
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home0045', [HomeController::class, 'index']);
Route::get('/home0045/artikel0045', [HomeController::class,'artikel0045']);
Route::get('/home0045/contacus0045', [HomeController::class,'contacus0045']);