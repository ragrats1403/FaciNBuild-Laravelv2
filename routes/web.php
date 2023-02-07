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
//login
Route::get('/', function () {
    return view('login');
});

//admin section start

Route::get('/admin/adminjobrequests', function () {
    return view('admin/adminjobrequests');
});

Route::get('/admin/adminaccounts', function () {
    return view('admin/adminaccounts');
});

Route::get('/admin/adminequipments', function () {
    return view('admin/adminequipments');
});

//admin section end

//test route start
Route::get('/admin/adminreservation', function () {
    return view('admin/adminreservation');
});
//test route end

