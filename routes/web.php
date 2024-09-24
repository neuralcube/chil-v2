<?php

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/career', [PageController::class, 'career'])->name('career');

Route::get('/services/complex-care', [PageController::class, 'complexCare'])->name('complex-care');
Route::get('/services/live-in-care', [PageController::class, 'liveInCare'])->name('live-in-care');
Route::get('/services/home-care', [PageController::class, 'homeCare'])->name('home-care');
Route::get('/services/private-care', [PageController::class, 'privateCare'])->name('private-care');
Route::get('/services/one-to-one-care', [PageController::class, 'oneToOneCare'])->name('one-to-one-care');
Route::get('/services/supported-living-service', [PageController::class, 'supportedLivingService'])->name('supported-living-service');

Route::get('/policies/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');

Route::post('/contact', [PageController::class, 'contactStore']);
Route::post('/career', [PageController::class, 'careerStore']);
