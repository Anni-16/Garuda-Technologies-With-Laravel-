<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CookiesPolicyController;
use App\Http\Controllers\DisclaimerController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TermConditionController;
use App\Http\Controllers\TravelController;
use Illuminate\Support\Facades\Route;

/* ========= Home Routes ======== */
Route::get('/', [IndexController::class, 'IndexPage']);

/* ========= About Us Routes ======== */
Route::get('/about-us', [AboutController::class, 'AboutPage'])->name('about-us');

/* ========== Services Routes ========= */
// Route::get('/services', [ServiceController::class, 'index'])->name('services');

// Route::get('/services-category/{slug}', [ServiceController::class, 'category'])
//     ->name('services.category');

// Route::get('/services-details/{slug}', [ServiceController::class, 'details'])
//     ->name('services.details');


Route::prefix('services')->group(function () {

    // All Services Page
    Route::get('/', [ServiceController::class, 'index'])
        ->name('services');

    // Category Page
    Route::get('/{category_slug}', [ServiceController::class, 'category'])
        ->name('services.category');

    // Service Details Page
    Route::get('/{category_slug}/{service_slug}', [ServiceController::class, 'details'])
        ->name('services.details');
});

/* ========== Traveol Services  Routes ========== */ 

Route::get('/travel-services', [TravelController::class, 'TravelPage'])->name('travel-services');

/* ======= Blog Routes ======= */
Route::get('/blogs', [BlogController::class, 'BlogView'])->name('blogs');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blogs-details');

/* ========= Contact Us Routes ======== */
Route::get('/contact-us', [ContactController::class, 'ContactView'])->name('contact-us');

/* ========= Team Routes ======== */
Route::get('/team', [TeamController::class, 'TeamView'])->name('team');

/* ======== FAq's Routes ======== */
Route::get('/faqs', [FaqController::class, 'FaqView'])->name('faqs');

/* ======== Discalimers Routes ======== */
Route::get('/disclaimer', [DisclaimerController::class, 'DisclaimerPage'])->name('disclaimer');

/* ======== Discalimers Routes ======== */
Route::get('/cookies-policy', [CookiesPolicyController::class, 'CookiesPage'])->name('cookies-policy');

/* ======== Terms & Conditions Routes ======== */
Route::get('/term-and-conditions', [TermConditionController::class, 'TermsPage'])->name('term-and-conditions');

/* ======== Privacy Policy Routes ======== */
Route::get('/privacy-policy', [PrivacyController::class, 'PrivacyPage'])->name('privacy-policy');


