<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SetupController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::get('aku',function(){
    return view('aku');
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('setup',[SetupController::class,'setupTable']);
        Route::get('menu',[SetupController::class,'menuTable']);
        Route::post('menus',[SetupController::class,'menuStore'])->name('menu.store');
        Route::get('user',[SetupController::class,'userTable']);
        Route::get('members',[AdminController::class,'members']);
        Route::resource('member', MemberController::class);
    });
});
Route::group(['middleware' => ['auth']], function () {
   Route::group(['prefix' => 'member'], function () {
       Route::get('lengkapidata',[MemberController::class,'lengkapiData']);
       Route::get('datasaya',[MemberController::class,'datasaya']);
   }); 
});

Route::get('coba', function () {
    // QrCode::size(500)
    //         ->format('png')
    //         ->generate('Medikre.com', public_path('images/qrcode.png'));
    
    return view('qrCode');
});

