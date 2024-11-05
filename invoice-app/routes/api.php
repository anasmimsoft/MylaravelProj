<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/get_all_invoice',[InvoiceController::class,'get_all_invoice']);
Route::get('/search_inovice',[InvoiceController::class,'search_invoice']);
Route::get('/create_invoice',[InvoiceController::class,'create_invoice']);
Route::get('/customers',[CustomerController::class,'all_customer']);
Route::get('/products',[ProductController::class,'all_product']);
Route::post('/add_invoice',[InvoiceController::class,'add_invoice']);



