<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});



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