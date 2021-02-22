<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
//Ruta que muestra los post en la vista principal 
Route::get('/', [PostController::class, 'index'])->name('posts.index');
//Ruta que va a mostrar cada post con sus post similares
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');
//Ruta para filtrar los por por categorías
Route::get('category/{category}', [PostController::class, 'category'])->name('posts.category');
//Ruta para filtrar los por etiquetas
Route::get('tag/{tag}', [PostController::class, 'tag'])->name('posts.tag');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
