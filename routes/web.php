<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\TeacherController;

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
    return view('home', [
        'name' => 'John Doe',
        'role' => 'admin',
        'buah' => ['pisang', 'apel', 'jeruk', 'kiwi', 'salak']
    ]);
});

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/{id}', [StudentController::class, 'show']);
Route::get('/student-add', [StudentController::class, 'create']);
Route::post('/students', [StudentController::class, 'store']);
Route::get('/student-edit/{id}', [StudentController::class, 'edit']);
Route::put('/student/{id}', [StudentController::class, 'update']);
Route::get('/student-delete/{id}', [StudentController::class, 'delete']);
Route::delete('/student-destroy/{id}', [StudentController::class, 'destroy']);
Route::get('/student-deleted', [StudentController::class, 'deletedStudent']);
Route::get('/student/{id}/restore', [StudentController::class, 'restore']);

Route::get('/class', [ClassController::class, 'index']);
Route::get('/class-detail/{id}', [ClassController::class, 'show']);
Route::get('/class-add', [ClassController::class, 'create']);
Route::post('/class', [ClassController::class, 'store']);

Route::get('/extracurricular', [ExtracurricularController::class, 'index']);
Route::get('/extracurricular-detail/{id}', [ExtracurricularController::class, 'show']);
Route::get('/extracurricular-add', [ExtracurricularController::class, 'create']);
Route::post('/extracurricular', [ExtracurricularController::class, 'store']);

Route::get('/teacher', [TeacherController::class, 'index']);
Route::get('/teacher-detail/{id}', [TeacherController::class, 'show']);
Route::get('/teacher-add', [TeacherController::class, 'create']);
Route::post('/teacher', [TeacherController::class, 'store']);



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
