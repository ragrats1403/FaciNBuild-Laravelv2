<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
/*
Route::get('/', function () {
    return view('login');
});
*/
Route::get('/',[UserController::class, 'index']);
Route::post('/auth', [UserController::class, 'authenticated'])->name('login.authenticated');
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

Route::get('/admin/adminmajorjobrequests', function () {
    return view('admin/adminmajorjobrequests');
});

Route::get('/admin/adminminorjobrequests', function () {
    return view('admin/adminminorjobrequests');
});

//admin section end

//test route start
Route::get('/admin/adminreservationlist', function () {
    return view('admin/adminreservationlist');
});
//test route end

