<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact-form-submit', [ContactFormController::class, 'store'])->name('contact.form.submit');
