<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController; //Importação da rota de registro
use App\Http\Controllers\ProductController;
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

//Criação da rota register, que irá chamar pelo função do controller registrar
//127.0.0.1:8000/register

Route::controller(AuthController::class)->group(function(){
                                            //nome da rota pra ser chamado.
    Route::get('register', 'register')->name('registro');
    Route::post('register', 'registerSave')->name('registro.salvar');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
  
});

Route::middleware('auth')->group(function(){
    Route::get('dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

    Route::controller(ProductController::class)->prefix('products')->group(function(){
        Route::get('', 'index')->name('products');
        Route::get('create', 'create')->name('products.create');
        Route::post('store', 'store')->name('products.store');
        Route::get('show/{id}', 'show')->name('products.show');
        Route::get('edit/{id}', 'edit')->name('products.edit');
        Route::put('edit/{id}', 'update')->name('products.update');
        Route::delete('destroy/{id}', 'destroy')->name('products.destroy');
    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});