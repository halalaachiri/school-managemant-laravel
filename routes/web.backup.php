<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', function () {
    return view('layout');
});

Route::get('/myroute', function () {
    return view('myview');
});

Route::get('/bibliotheque', function () {
    return 'Page bibliothèque';
});

Route::get('/students', function () {
    return 'Page students';
});

Route::get('/teachers', function () {
    return 'Page teachers';
});

Route::get('/test', function () {
    return response('un test', 206)->header('Content-Type', 'text/plain');
});

Route::get('/users/action', function () {
    return 'Page action';
})->name('action');

Route::get('/ancienne', function () {
    return redirect()->route('action');
});

Route::get('/facture', function () {
    return 'Page facture';
});

Route::get('/aller-facture', function () {
    return redirect('facture');
});

Route::get('/vue1', function(){
    return view('vue1');
});

Route::get('/article/{n}', function ($n) {
    return view('article')->with('numero', $n);
})->where('n', '[0-9]+');

Route::get('/facture/{n}', function ($n) {
    return view('facture')->with('numero', $n);
})->where('n', '[0-9]+');

Route::get('/myurl', [MyController::class, 'index']);

Route::get('/page/{n}', function ($n) {
    return 'Je suis la page ' . $n . ' !';
});

Route::resource('students', StudentController::class);