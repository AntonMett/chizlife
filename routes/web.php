<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/formsent', [ContactController::class, 'submit'])->name('contact-form');

Route::get('/contact/allmessages', [ContactController::class, 'allData'])->name('contact-data');

Route::get('/contact/allmessages/{id}', [ContactController::class, 'showOneMessage'])->name('contact-data-one');

Route::get('/contact/allmessages/{id}/update', [ContactController::class, 'updateMessage'])->name('contact-update');

Route::post('/contact/allmessages/{id}/update', [ContactController::class, 'updateMessageSubmit'])->name('contact-update-submit');

Route::get('/contact/allmessages/{id}/delete', [ContactController::class, 'deleteMessage'])->name('contact-delete');

