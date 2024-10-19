<?php

use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\OrganizationController;
use Illuminate\Support\Facades\Route;
use App\Models\Message;

Route::get('/', function () {
    return view('welcome'); 
})->name('welcome');

// Route to display paginated messages
Route::get('messages', function () {
    $messages = Message::paginate(10); 
    return view('messages.index', compact('messages'));
})->name('messages.index');

// Recruitment Routes
Route::prefix('recruitment')->name('recruitment.')->group(function() {
    Route::get('/', [RecruitmentController::class, 'index'])->name('index');
    Route::post('/store', [RecruitmentController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [RecruitmentController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [RecruitmentController::class, 'update'])->name('update');
    Route::post('/search', [RecruitmentController::class, 'index'])->name('search');
    Route::get('/messages', [RecruitmentController::class, 'showMessages'])->name('messages.index');
});

// Admin-specific routes for Recruitment deletion
Route::prefix('admin')->group(function () {
    Route::delete('/recruitment/{id}', [RecruitmentController::class, 'destroy'])->name('recruitment.delete');
});

// Organization Routes


Route::prefix('organization')->name('organizations.')->group(function () {
    Route::get('/', [OrganizationController::class, 'index'])->name('index');
    Route::get('/create', [OrganizationController::class, 'create'])->name('create');
    Route::post('/store', [OrganizationController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [OrganizationController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [OrganizationController::class, 'update'])->name('update'); // Corrected
    Route::post('/search', [OrganizationController::class, 'index'])->name('search');
    Route::delete('/organizations/{id}', [OrganizationController::class, 'destroy'])->name('organizations.destroy');
});