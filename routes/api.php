<?php

use Illuminate\Http\Request;

use App\Application;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});