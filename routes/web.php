<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/',[FilmController::class,'anaSayfa'])->name('films.index');

Route::get('/categories/{category}',[FilmController::class,'category'])->name('films.indexByCategory');

Route::get('/type/{type}',[FilmController::class,'type'])->name('films.indexByType');

Route::get('/izle/{id}',[FilmController::class,'show'])->name('films.show');

Route::get('/rate',[SiteController::class,'showRate'])->name('showRate');

Route::get('/createFilm',[FilmController::class,'create'])->name('createFilm');

Route::post('storeFilm',[FilmController::class,'store'])->name('storeFilm');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
        //Kullanıcı giriş yapınca burası açılıyor
    Route::get('/dashboard', [FilmController::class,'anaSayfa'])->name('dashboard');
});
