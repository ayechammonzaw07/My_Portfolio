<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Defines all portfolio page routes and the contact form handler.
| Uses a single PageController for static pages and ContactController
| for form submission to keep routing clean and organized.
*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Static Page Routes
|--------------------------------------------------------------------------
| Each route maps to a method in PageController that returns
| the corresponding Blade view for that portfolio section.
*/
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/skills', [PageController::class, 'skills'])->name('skills');
Route::get('/experience', [PageController::class, 'experience'])->name('experience');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

/*
|--------------------------------------------------------------------------
| Contact Form Route
|--------------------------------------------------------------------------
| POST route to handle contact form submissions. Validates input
| on the server side and stores messages in the database.
*/
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
