<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;

Route::get('/welcome', function () {
    return view('welcome'); //Meruju ke file welcome.blade
});

Route::get('/index', function () {
    return view('index'); //Meruju ke file welcome.blade.
 });

 Route::get('/login', function () {
    return view('login'); //Meruju ke file welcome.blade.
 });




// Route::get('/about', function () {
//     return view('about'); //Meruju ke file welcome.blade
// });

 


