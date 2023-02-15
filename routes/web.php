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
//controller routes
Route::get('/',[UserController::class, 'index']);
Route::post('/auth', [UserController::class, 'authenticated'])->name('login.authenticated');
Route::post('ajaxdata/getdata', [AjaxDataController::class, 'getdata'])->name('adminaccounts.getdata');

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

//building section start

Route::get('/building/bmjobrequestlist', function () {
    return view('building/bmjobrequestlist');
});

Route::get('/building/bmmajorjob', function () {
    return view('building/bmmajorjob');
});

Route::get('/building/bmminorjob', function () {
    return view('building/bmminorjob');
});


//building section end

//user section start
Route::get('/user/userdashboard', function () {
    return view('/user/userdashboard');
});

Route::get('/user/userreservation', function () {
    return view('/user/userreservation');
});

Route::get('/user/usernotifications', function () {
    return view('/user/usernotifications');
});

//user section end