<?php


use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('about', [WebsiteController::class, 'about'])->name('about');
Route::post('/subscription', [WebsiteController::class, 'subscribe'])->name('subscription.store');
Route::get('subscriber', [WebsiteController::class, 'subscribeList']);

Route::get('/contact', [ContactUsController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactUsController::class, 'store'])->name('contact.store');

Route::get('terms-and-conditions', [PolicyController::class, 'termsCondition'])->name('term-condition');
Route::get('privacy-policy', [PolicyController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('cancellation-refund-policy', [PolicyController::class, 'refundPolicy'])->name('refund-policy');

Route::get('messages', [ContactUsController::class, 'index']);
