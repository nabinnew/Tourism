<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\PackageController;
use App\http\Controllers\UserController;
use App\Http\Middleware\Validuser;
 
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/success',[UserController::class,'register']);
Route::get('/registration',function(){
    return view('pages.regn');

});

Route::get('/login', function () {
    return view('pages.login');
});
Route::post('/login',[UserController::class,'login']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/package',[PackageController::class,'package'])->middleware(Validuser::class);
Route::get('/packages',[PackageController::class,'pack'])->middleware(Validuser::class);


Route::post('/addpackage',[PackageController::class,'addpackage']);

Route::get('/customer',[PackageController::class,'customer'])->middleware(Validuser::class);
Route::get('/package/delete/{id}',[PackageController::class,'delete']);
Route::post('/package/update/{id}',[PackageController::class,'update']);
Route::get('/packages/update/{id}',[PackageController::class,'updates']);


Route::post('/updatetotal/{id}',[PackageController::class,'updatetotal']);


Route::post('add_customer/',[PackageController::class,'add_customer']);
 require __DIR__.'/auth.php';

Route::view('/about','sites.about')->middleware(Validuser::class);
Route::view('/index','sites.index');
  Route::view('/services','sites.services');
Route::view('/gallary','sites.gallary')->middleware(Validuser::class);
Route::view('/update', 'pages.update');
Route::view('/login', 'pages.login');

 
Route::get('/booking',[PackageController::class,'booking'])->middleware(Validuser::class);



 Route::post('login/', [UserController::class, 'login']);
 Route::post('sucess/', [UserController::class, 'login']);

 
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/', function(){
    return view('pages.login');

});
