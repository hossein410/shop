<?php

use App\Http\Controllers\Api\V1\ProductController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'product', 'as' => 'api.product.'], function () {

});
Route::apiResource('product', ProductController::class);

