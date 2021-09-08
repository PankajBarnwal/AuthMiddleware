<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use app\Models\UserData;
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
Route::group(['middleware'=>'web'], function(){
    
Route::get('/', function () {
    return view('welcome');
});
// Route::view('/','welcome');
Route::get('/',[LoginController::class,'show']);    

Route::view('/login','login');
Route::post('/login',[LoginController::class,'login']);
Route::view('/about','about');
Route::get('/logout', function () {
    if(session()->has('UserData')){
        session()->pull('UserData');
        return redirect('/login');
    }
});
});