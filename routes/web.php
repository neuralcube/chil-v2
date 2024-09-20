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

Route::get('/preview-email', function () {
    $details = [
        'firstName' => 'Jude',
        'lastName' => 'Doe',
        'email' => 'john.doe@example.com',
        'subject' => 'Some Matters Arising',
        'message' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.

The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.',
    ];

    return (new ContactFormMail($details))->render();
});
