<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/ping2', function () {
    return 'WEB OK';
});

Route::get('/api/ping', function () {
    return response()->json(['ok' => true, 'message' => 'API simulada en web.php']);
});