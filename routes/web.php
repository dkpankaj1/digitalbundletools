<?php


use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\WebsiteController;
use App\Models\Visitor;
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

Route::get('purchase/create', [PurchaseController::class, 'create'])->name('purchase.create');
Route::post('purchase/store', [PurchaseController::class, 'store'])->name('purchase.store');
Route::get('purchase/success', [PurchaseController::class, 'success'])->name('purchase.success');
Route::post('purchase/callback', [PurchaseController::class, 'callback'])->withoutMiddleware(['web'])->name('purchase.callback');

Route::get('messages', [ContactUsController::class, 'index']);
Route::get('get-visitor', function () {
    return json_encode(Visitor::select(['ip_address', 'device', 'visited_at'])->get());
});
