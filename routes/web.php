<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ExtracurricularController;

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

Route::get('/', function () {

    return view('home');
    // return view('home', [
    //     'name' => 'John Doe',
    //     'role' => 'admin',
    //     'buah' => ['pisang', 'apel', 'jeruk', 'kiwi', 'salak']
    // ]);
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticating']);

Route::get('/students', [StudentController::class, 'index'])->middleware('auth');
Route::get('/students/{id}', [StudentController::class, 'show'])->middleware('auth');
Route::get('/student-add', [StudentController::class, 'create'])->middleware('auth');
Route::post('/students', [StudentController::class, 'store'])->middleware('auth');
Route::get('/student-edit/{id}', [StudentController::class, 'edit'])->middleware('auth');
Route::put('/student/{id}', [StudentController::class, 'update'])->middleware('auth');
Route::get('/student-delete/{id}', [StudentController::class, 'delete'])->middleware('auth');
Route::delete('/student-destroy/{id}', [StudentController::class, 'destroy'])->middleware('auth');
Route::get('/student-deleted', [StudentController::class, 'deletedStudent'])->middleware('auth');
Route::get('/student/{id}/restore', [StudentController::class, 'restore'])->middleware('auth');

Route::get('/class', [ClassController::class, 'index'])->middleware('auth');
Route::get('/class-detail/{id}', [ClassController::class, 'show'])->middleware('auth');
Route::get('/class-add', [ClassController::class, 'create'])->middleware('auth');
Route::post('/class', [ClassController::class, 'store'])->middleware('auth');

Route::get('/extracurricular', [ExtracurricularController::class, 'index'])->middleware('auth');
Route::get('/extracurricular-detail/{id}', [ExtracurricularController::class, 'show'])->middleware('auth');
Route::get('/extracurricular-add', [ExtracurricularController::class, 'create'])->middleware('auth');
Route::post('/extracurricular', [ExtracurricularController::class, 'store'])->middleware('auth');

Route::get('/teacher', [TeacherController::class, 'index'])->middleware('auth');
Route::get('/teacher-detail/{id}', [TeacherController::class, 'show'])->middleware('auth');
Route::get('/teacher-add', [TeacherController::class, 'create'])->middleware('auth');
Route::post('/teacher', [TeacherController::class, 'store'])->middleware('auth');



// Route::get('/about', function(){
//     return 9*9;
// });

// // cara menulis view dan pass parameter value ke halaman
// Route::get('/contact', function () {
//     return view('contact', ['name' => 'ABNCS', 'phone' => '0812...' ]);
// });

// // Route::view('/contact', 'contact', ['name' => 'ABNCS', 'phone' => '0812...' ]);

// // redirect untuk memakasa user pindah ke halaman
// Route::redirect('/aboutus', '/about');

// Route::get('/product', function(){
//     return 'product';
// });

// Route::get('/product/{id}', function($id){
//     // return 'ini adalah produk id' .$id;
//     return view('product.detail', ['id' => $id]);
// });

// // untuk grouping prefix
// Route::prefix('admininstrator')->group(function () {

//     // Matches The "/admin/users" URL
//     Route::get('/profil-admin', function(){
//     return 'profil admin';
//     });

//     Route::get('/about-admin', function(){
//         return 'about admin';
//     });

//     Route::get('/contact-admin', function(){
//         return 'contact admin';
//     });

// });
