<?php

use Illuminate\Support\Facades\Route;

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
// Route::get('/welcome', function () {
//     return view('welcome');
// });
Route::get('/unitedtractors', function () {
    return view('main');
});
Route::get('/unitedtractors/contact', function () {
    return view('kontakdetail');
});
Route::get('/unitedtractors/about-ut', function () {
    return view('aboutdetail');
});
Route::get('/unitedtractors/bomag', function () {
    return view('bomagdetail');
});
Route::get('/unitedtractors/komatsu', function () {
    return view('komatsudetail');
});
Route::get('/unitedtractors/scania', function () {
    return view('scaniadetail');
});
Route::get('/unitedtractors/tadano', function () {
    return view('tadanodetail');
});
Route::get('/unitedtractors/ud-truck', function () {
    return view('udtruckdetail');
});
// Route::get('/sitraktor', function () {
//     return view('test');
// });
