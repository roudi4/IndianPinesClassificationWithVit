<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Wix\WixController;
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

Route::get('/aff_formulaire',[App\Http\Controllers\Wix\WixController::class , 'aff_formulaire'] );
Route::get('/product_list',[App\Http\Controllers\Wix\WixController::class,'product_list'] );

Route::get('/Mapping_wix',[App\Http\Controllers\Wix\WixController::class,'Mapping_wix'] );
Route::get('/Marge_wix',[App\Http\Controllers\Wix\WixController::class,'Marge_wix'] );
Route::get('/deleteproduct/{id}',[App\Http\Controllers\Wix\WixController::class,'DeleteProductFromOct'] );
//add produit vers wix
Route::get('/create_product',[App\Http\Controllers\Wix\WixController::class,'create_product'] );
Route::post('/connectionapi',[App\Http\Controllers\Wix\WixController::class,'connectionapi'] );
//update product
Route::get('/updateProd',[App\Http\Controllers\Wix\WixController::class,'updateProd'] );




    
