<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentsbooksController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

Route::middleware('isUser')->group(function(){

// route halaman utama
Route::get('/', function () {
    return view('landing');
});

// route layout
Route::get('/main', function () {
    return view('layout.main');
});

// route register
Route::get('/index-register', [AuthController::class, 'indexRegister'])->name('register');
Route::post('/register/input', [AuthController::class, 'registerAccount'])->name('register-input'); 

//route login
Route::get('/index-login', [AuthController::class, 'indexLogin'])->name('login');
Route::post('/login/auth', [AuthController::class, 'auth'])->name('login-auth');
});

// logout
Route::get('/logout', [AuthController::class, 'logout']);

//route kirim pesan pada landing page
Route::post('/store', [RentsbooksController::class, 'storePesan'])->name('store');
Route::get('/pesan', [RentsbooksController::class, 'pesan'])->name('pesan');

Route::middleware('isAdmin:1')->group(function(){
//admin dashboard
Route::get('/users', [AdminController::class, 'indexUsers']);
Route::get('/dashboard', [AdminController::class, 'index'])->name('index');
Route::get('/rentlog', [AdminController::class, 'rentlog'])->name('rentlog');
Route::get('/book', [RentsbooksController::class, 'book'])->name('book');
Route::post('/add', [RentsbooksController::class, 'add'])->name('add');
Route::get('/category', [AdminController::class, 'category'])->name('category');
Route::post('/category/store', [AdminController::class, 'storeCategory'])->name('storeCategory');

// delete
Route::get('/delete/{id}',[AdminController::class, 'destroy'])->name('delete');
Route::get('/deleteUser/{id}',[AdminController::class, 'destroyUser'])->name('deleteUser');
Route::get('/deletePesan/{id}',[AdminController::class, 'destroyPesan'])->name('deletePesan');
Route::get('/deleteCategory/{categoryID}',[AdminController::class, 'destroyCategory'])->name('deleteCategory');

// edit
Route::get('/editUsers{id}',[AdminController::class, 'editUsers'])->name('editUsers');
Route::patch('/edit/update/{id}',[AdminController::class, 'update'])->name('update');
Route::get('/editBook{id}',[RentsbooksController::class, 'editBook'])->name('editBook');
Route::patch('/edit/updateBook/{id}',[RentsbooksController::class, 'updateBook'])->name('updateBook');
});

Route::middleware('isAdmin:0')->group(function(){
Route::get('/dashboard-user', [UserController::class, 'index']);
});