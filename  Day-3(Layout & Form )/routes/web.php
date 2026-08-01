<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about',function (){
    return view('about');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/home',function(){
    return redirect('/');
});
Route::post('/save-record', function(Request $request){
return $request;
});

