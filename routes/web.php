<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;


Route::get('/home', function () {
    return view('welcome'); //Meruju ke file welcome.blade
});

Route::get('/index', function () {
    return view('index'); //Meruju ke file welcome.blade.
 });

 Route::get('/login', function () {
    return view('login'); //Meruju ke file welcome.blade.
 });



 // Route untuk news
Route::get('tambah', [ProdukController::class, "sayur"]);


// Route::get('/about', function () {
//     return view('about'); //Meruju ke file welcome.blade
// });

 


