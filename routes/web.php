<?php
use App\Http\Controllers\PageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|Route::get Consultar
|Route::post Guardar 
|Route::delete Eliminar 
|Route::put Actualizar 
|
*/

// Route::get('/', [PageController::class, 'home'])->name('home');
// Route::get('blog', [PageController::class, 'blog'])->name('blog');
// Route::get('blog/{slug}', [PageController::class, 'post'])->name('post');

Route::controller(PageController::class)->group( function () {
    Route::get('/',           'home')->name('home');
    Route::get('blog',        'blog')->name('home');
    Route::get('blog/{slug}', 'post')->name('home');
});