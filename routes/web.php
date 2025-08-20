<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\QuoteController;
use App\Models\Event;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return view('jmpi-website.index');
}) ->name('home');

// Route::get('/events', function () {
//     return view('jmpi-website.events');
// })->name('events') ;


Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/events/{id}', [EventController::class, 'show'])->name('jmpi-website.show');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

Route::post('/send', [EventController::class, 'submit'])->name('formulaire.submit');
Route::get('/formulaire', function () {
    return view('jmpi-website.formulaire');
})->name('contact');
Route::get('/', [QuoteController::class, 'getDailyQuote'])->name('home');