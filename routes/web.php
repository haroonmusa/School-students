<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/main',[SchoolController::class,'index']);
Route::get('/main/create', [ SchoolController::class, 'create' ]);
Route::post('/main', [ SchoolController::class, 'store' ])->name('store');
Route::get('/delete/{id}', [ SchoolController::class, 'delete' ]);
Route::get('/edit/{id}', [ SchoolController::class, 'edit' ]);
Route::put('/update/{id}', [ SchoolController::class, 'update' ]);
