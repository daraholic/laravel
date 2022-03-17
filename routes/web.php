<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\Studentcontroller;


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

// get
// Route::get('/cars_get_form',[CarController::class,'myForm'])->name('cars.myform');
// post


Route::post('/cars_get_form',[CarController::class,'myForm'])->name('cars.myform');


// 創一個路徑叫做test  使用car這個控制器裡面的test function 把路徑重新再命名name->
Route::get('/test',[CarController::class,'test'])->name('cars.test');

Route::get('/', function () {
    return view('greeting', ['name' => 'James']);
});

Route::resource('cars', CarController::class);
Route::resource('students', StudentController::class);

// Route::get('/', function () {
//     return view('welcome');
// });
