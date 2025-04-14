<?php
use App\Http\Controllers\Pagescontroller;

use Illuminate\Support\Facades\Route;

Route::get('/',[Pagescontroller::class,'home']);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contactcontact', function () {
    return view('');
});
