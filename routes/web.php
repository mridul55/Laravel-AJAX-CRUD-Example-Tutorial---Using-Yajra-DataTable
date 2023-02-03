<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\PactriceController;



// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('product', ProductController::class);
Route::resource('category', CategoryController::class);
//Route::get('/pagination/paginate-data', [CategoryController::class, 'pagination']);
Route::resource('task', TaskController::class);
// Route::get('/task/edit/{id}', [TaskController::class,'editdata'])->name('task.edit');
Route::resource('cat', CatController::class);
Route::resource('student', StudentController::class);
Route::resource('teacher', TeacherController::class);
Route::resource('pactrice', PactriceController::class);



