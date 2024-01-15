<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\LocacaoController;
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

//home
Auth::routes();
Route::get('/h', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/', function(){
        return view('home');
    });
    Route::get('home', function(){
        return view('home');
    });
});

//user
Route::get('/user', [UserController::class, 'index'])->middleware('auth')->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/user/{user}/update', [UserController::class, 'update'])->name('user.update');
Route::delete('/user/{user}/delete', [UserController::class, 'delete'])->name('user.delete');

//cliente
Route::get('/cliente', [ClienteController::class, 'index'])->middleware('auth')->name('cliente.index');
Route::get('/cliente/create', [ClienteController::class, 'create'])->middleware('auth')->name('cliente.create');
Route::post('/cliente', [ClienteController::class, 'store'])->middleware('auth')->name('cliente.store');
Route::get('/cliente/{cliente}/edit', [ClienteController::class, 'edit'])->middleware('auth')->name('cliente.edit');
Route::put('/cliente/{cliente}/update', [ClienteController::class, 'update'])->middleware('auth')->name('cliente.update');
Route::delete('/cliente/{cliente}/delete', [ClienteController::class, 'delete'])->middleware('auth')->name('cliente.delete');

//livro
Route::get('/livro', [LivroController::class, 'index'])->middleware('auth')->name('livro.index');
Route::get('/livro/create', [LivroController::class, 'create'])->middleware('auth')->name('livro.create');
Route::post('/livro', [LivroController::class, 'store'])->middleware('auth')->name('livro.store');
Route::get('/livro/{livro}/edit', [LivroController::class, 'edit'])->middleware('auth')->name('livro.edit');
Route::put('/livro/{livro}/update', [LivroController::class, 'update'])->middleware('auth')->name('livro.update');

//locacao
Route::get('/locacao', [LocacaoController::class, 'locacao'])->middleware('auth')->name('locacao.index');
Route::get('/locacao/{livro}', [LocacaoController::class, 'locar'])->middleware('auth')->name('locacao.locar');
Route::post('/locar/{livro}', [LocacaoController::class, 'store'])->middleware('auth')->name('locacao.store');
Route::put('/locacao/{livro}/update', [LocacaoController::class, 'update'])->middleware('auth')->name('locacao.update');
