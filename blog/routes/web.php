<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dataQueries;
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
     return  redirect('index');
});


Route::view('addData','addData');
// Route::get('addData',function(){
//      return redirect('index');
// // });

// code for adding the data into the database //
Route::post('addData',[dataQueries::class,'addData']);
// code for showinf the list to the table //
Route::get('index',[dataQueries::class,'listData']);
//Route for deleting the data with its id //
Route::get('delete/{id}',[dataQueries::class,'deleteData']);
// Route showing the data in form of particular data //
Route::get('showData/{id}',[dataQueries::class,'showData']);
// code for updating the Data into the database //
Route::post('updateData',[dataQueries::class,'updateData']);
