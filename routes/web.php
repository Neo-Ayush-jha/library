<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassController;
// use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;


// admin
Route::prefix('admin')->group(function(){
    Route::get("/",[AdminController::class,"index"])->name("admin.dashboard");
    Route::match(['get','post'],'/cat' ,[AdminController::class,"cat"]);
    Route::get("/store",[AdminController::class,"show"])->name("admin.addBook");
    Route::get("/manage_book",[AdminController::class,"viewBooks"])->name("admin.manageBook");
   
    Route::post("/store",[AdminController::class,"store"])->name("admin.addBook");
    Route::delete("/delete/{id}",[AdminController::class,"destroy"])->name("admin.book.delete");
    Route::get("/edit/{id}",[AdminController::class,"edit"])->name("admin.delete");
    
    Route::get("/fee",[AdminController::class,"pay"])->name("admin.fee");

    Route::get('/pass',[PassController::class,'show'])->name('addPass');
    Route::post('/pass',[PassController::class,'store'])->name('addPass');

    //  Route::get("/manage_pass",[AdminController::class,"viewPass"])->name("admin.managePass");

    Route::get('/approve_pass',[PassController::class,'approvePass'])->name('admin.manage.approvePass');
    Route::get('/manage_pass',[PassController::class,'newPass'])->name('admin.manage.newPass');
    Route::get('/expire_pass',[PassController::class,'expirePass'])->name('admin.manage.expirePass');
    Route::get('/approve_pass/{id}',[AdminController::class,'approvePass'])->name('admin.approvePass');
    Route::get('/expire_pass/{id}',[AdminController::class,'expirePass'])->name('admin.expirePass');
});

// pass
Route::get('/',[PublicController::class,'index'])->name('home');



// login
