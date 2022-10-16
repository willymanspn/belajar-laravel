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

// ROUTE VIEW
Route::get('/', function () {
    return view('home', [
        'name' => 'willy', 
        'role' => 'admin',
        'buah' => ['pisang', 'apel', 'jeruk', 'semangka', 'kiwi']
    ]);
});

Route::get('/about', function () {
    return view('about');
});

// // BASIC ROUTE VIEW
// Route::get('/about', function () {
//     return 'whatever';
// });

// // ROUTE VIEW
// // Route::get('/contact', function () {
// //     return view('contact');
// // });

// // ROUTE VIEW + ARGUMEN
// Route::get('/contact', function () {
//     return view('contact', [
//         'name' => 'iman', 
//         'phone' => '0812'
//     ]);
// });

// // SHORT ROUTE VIEW
// // Route::view('/contact', 'contact');

// // SHORT ROUTE VIEW + ARGUMEN
// // Route::view('/contact', 'contact', [
// //         'name' => 'iman', 
// //         'phone' => '0812'
// //     ]);

// // REDIRECT ROUTE
// Route::redirect('/contact', '/contact-us');

// // ROUTE PARAMETER
// Route::get('/product', function () {
//     return 'produk';
// });

// // Route::get('/product/{id}', function ($id) {
// //     return 'ini adalah product dengan id '.$id;
// // });

// // ROUTE PARAMETER + VIEW ROUTE
// Route::get('/product/{id}', function ($id) {
//     return view('product.detail', [
//             'id' => $id
//     ]);
// });

// // ROUTE PREFIXES
// Route::prefix('administrator')->group(function () {
//     Route::get('/profile-admin', function() {
//         return 'profile-admin';
//     });
    
//     Route::get('/about-admin', function() {
//         return 'about-admin';
//     });
    
//     Route::get('/contact-admin', function() {
//         return 'contact-admin';
//     });
// });

// MENGECEK LIST ROUTE
// php artisan route:list