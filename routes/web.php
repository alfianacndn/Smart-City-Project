<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Untuk halaman HOME

Route::get('/', function () {
    return view('home.home');
});
Route::get('/about', function () {
    return view('home.about');
});
Route::get('/smartenergy', function () {
    return view('home.smartenergy');
});
Route::get('/smartlight', function () {
    return view('home.smartlight');
});
Route::get('/', function () {
    return view('home.home');
});

Auth::routes();

//hak aksesn untuk admin
Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin/home', [App\Http\Controllers\AdminHomeController::class, 'index'])->name('admin.home');
    Route::get('/admin/newpost', [App\Http\Controllers\AdminHomeController::class, 'newpost_index'])->name('admin.newpost');
    Route::post('/admin/newpost/insert', [App\Http\Controllers\AdminHomeController::class, 'insert'])->name('admin.newpost.insert');
    Route::get('/admin/message', [App\Http\Controllers\ChatController::class, 'indexadmin'])->name('message.admin');
    Route::post('/admin/message/insert', [App\Http\Controllers\ChatController::class, 'insertadmin'])->name('send_message');
    Route::get('/admin/smartenergy', [App\Http\Controllers\SmartAdminController::class, 'index'])->name('admin.smartenergy');
    Route::get('/admin/smartlight', [App\Http\Controllers\SmartAdminController::class, 'indexl'])->name('admin.smartlight');
    Route::get('/admin/addsmartenergy', [App\Http\Controllers\SmartCityController::class, 'indexSE'])->name('admin.smartcity');
    Route::get('/admin/addsmartlight', [App\Http\Controllers\SmartCityController::class, 'indexSL'])->name('admin.smartcity');
    Route::post('/admin/smartenergy/insert', [App\Http\Controllers\SmartCityController::class, 'insertSE'])->name('admin.smartcity.insert');
    Route::post('/admin/smartlight/insert', [App\Http\Controllers\SmartCityController::class, 'insertSL'])->name('admin.smartcity.insert');
    Route::get('/admin/profileuser', [App\Http\Controllers\SmartCityController::class, 'profileuser'])->name('admin.profileuser');
    Route::post('/admin/profileuser/insert', [App\Http\Controllers\SmartCityController::class, 'insert'])->name('admin.profileuser.insert');
});

//hak akses untuk user
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('homek');
Route::group(['middleware' => 'user'], function () {

    Route::get('/Whatsup', [App\Http\Controllers\HomeController::class, 'keadaan'])->name('keadaan');
    Route::get('/history', [App\Http\Controllers\HomeController::class, 'history'])->name('history');
    Route::get('/realtime/smartlight', [App\Http\Controllers\HomeController::class, 'smartlight'])->name('smartlight');
    Route::get('/realtime/smartenergy', [App\Http\Controllers\HomeController::class, 'smartenergy'])->name('smartenergy');
    Route::get('/user/smartlight', [App\Http\Controllers\SmartLightController::class, 'index'])->name('user.smartl');
    Route::get('/user/integration', [App\Http\Controllers\DashboardController::class, 'index'])->name('user.integration');
    Route::post('/user/integration/insert', [App\Http\Controllers\DashboardController::class, 'insert']);
    Route::get('/user/smartlight', [App\Http\Controllers\SmartLightController::class, 'index'])->name('user.smartl');
    Route::post('/user/smartlight/insert', [App\Http\Controllers\SmartLightController::class, 'insert'])->name('user_smartlight');
    Route::get('/user/smartenergy', [App\Http\Controllers\SmartEnergyController::class, 'index'])->name('user.smarte');
    Route::post('/user/smartenergy/insert', [App\Http\Controllers\SmartEnergyController::class, 'insert'])->name('user_smartenergy');
    Route::get('/message', [App\Http\Controllers\ChatController::class, 'index'])->name('message.user');
    Route::post('/message/insert', [App\Http\Controllers\ChatController::class, 'insert'])->name('send_message');
    Route::get('/user/account', [App\Http\Controllers\AccountController::class, 'index'])->name('account');
    Route::get('/user/setting', [App\Http\Controllers\SettingController::class, 'index'])->name('setting');
    Route::post('/user/setting/insert', [App\Http\Controllers\SettingController::class, 'insert'])->name('setting.insert');
});
