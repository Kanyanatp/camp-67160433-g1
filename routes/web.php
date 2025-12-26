<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('html101');
});

Route::get('/se', function () {
    return view('template.default');
});

Route::get('/mycontroller', [App\Http\Controllers\MyController::class, 'index']);
Route::get('/calculate', [App\Http\Controllers\MyController::class, 'inFo']);

Route::get('/workshop/form', [\App\Http\Controllers\MyController::class, 'index'])->name('form.index');
Route::post('/workshop/store', [\App\Http\Controllers\MyController::class, 'store'])->name('form.store');
