<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puede registrar rutas web para su aplicación. Estos
| Las rutas son cargadas por RouteServiceProvider dentro de un grupo que
| contiene el grupo de middleware "web". ¡Ahora crea algo genial!
|
*/


//Ruta para redirigir al dashboard(index) admin/HomeController
Route::get('', [HomeController::class, 'index'])->middleware('can:admin.home')->name('admin.home');

//Ruta para 
Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('admin.users');

//Ruta para admin Categorias
Route::resource('categories', CategoryController::class)->except('show')->names('admin.categories');

//Ruta para admin tags
Route::resource('tags', TagController::class)->except('show')->names('admin.tags');

//Ruta para admin posts
Route::resource('posts', PostController::class)->except('show')->names('admin.posts');
