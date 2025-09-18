<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Course\CourseController;
use App\Http\Controllers\Blog\BlogCommentController;
use App\Http\Controllers\AbouteUs\AbouteUsController;
use App\Http\Controllers\Blog\BlogCategoryController;

Route::get('/', function () {
    return redirect('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('home',[HomeController::class,'home'])->name('home');

Route::get('aboutUs',[AbouteUsController::class,'abouteUs'])->name('abouteUs');

Route::get('courses',[CourseController::class,'index'])->name('courses');
Route::get('courses/{course}',[CourseController::class,'show'])->name('courses.show');


Route::controller(BlogController::class)->group(function(){
    Route::get('blogs','index')->name('blogs.index');
    Route::get('blogs/create','create')->name('blogs.create');
    Route::post('blogs','store')->name('blogs.store');
    Route::get('blogs/{blog}','show')->name('blogs.show');
    Route::get('blogs/{blog}/edit','edit')->name('blogs.edit');
    Route::put('blogs/{blog}','update')->name('blogs.update');
    Route::delete('blogs/{blog}','destroy')->name('blogs.destroy');
});
// Route::resource('categories', BlogCategoryController::class)->except(['show']);
Route::controller(BlogCategoryController::class)->group(function(){
    Route::get('categories','index')->name('categories.index');
    Route::get('categories/create','create')->name('categories.create');
    Route::post('categories','store')->name('categories.store');
    Route::get('categories/{category}/edit','edit')->name('categories.edit');
    Route::put('categories/{category}','update')->name('categories.update');
    Route::delete('categories/{category}','destroy')->name('categories.destroy');
});

Route::post('blogs/{blog}/comments', [BlogCommentController::class,'store'])->name('blogs.comments.store');
Route::delete('blogs/{blog}/comments/{comment}', [BlogCommentController::class,'destroy'])->name('blogs.comments.destroy');

require __DIR__.'/auth.php';
