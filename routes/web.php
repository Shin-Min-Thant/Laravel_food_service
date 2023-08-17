<?php

use App\Http\Controllers\backend\PageController;
use App\Http\Controllers\backend\ReviewController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';

//User Page Controller
Route::middleware(['auth','roles:user'])->group(function(){
    // Pages Controller
    Route::controller(PageController::class)->group(function(){
        Route::get('user/home','UserHome')->name('userHome');
        Route::get('user/burgur','UserBurgur')->name('userBurgur');
        Route::get('user/chicken','UserChicken')->name('userChicken');
        Route::get('user/aboutus','UserAbout')->name('userAbout');
        Route::get('user/logout','UserLogout')->name('userLogout');
        // Route::get('user/all]','UserAll')->name('user.all');
        Route::get('user/profile/edit','UserProfileEdit')->name('userProfile.edit');
        Route::post('user/profile/store','UserProfileStore')->name('userProfile.store');
        Route::get('user/password/change','UserPasswordChange')->name('userPassword.change');
        Route::post('user/password/upadate','UserPasswordUpadate')->name('user.password.update');

    });
    // Review Controller
    Route::controller(ReviewController::class)->group(function(){
        Route::get('all/review','AllReview')->name('all.review');
        Route::get('add/review','AddReview')->name('add.review');
        Route::post('resotre/review','ResotreReview')->name('restore.review');
        Route::get('edit/review/{id}','EditReview')->name('edit.review');
        Route::post('update/review','UpdateReview')->name('update.review');
        Route::get('delete/review/{id}','DeleteReview')->name('delete.review');
    });
});
