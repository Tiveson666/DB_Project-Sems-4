<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;

Route::get('/profil', function () {
    return view('profil', ['name' => 'Muhammad Fikri Rahmadan']);
});
Route::get('/katalog', function () {
    return view('katalog');
});
Route::get('/bantuan', function () {
    return view('bantuan');
});
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/event-detail', function () {
    return view('event-detail');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/ticket', function () {
    return view('ticket');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});

// Admin Routes
Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin-events', function () {
    return view('admin.events');
});
Route::get('/admin-transactions', function () {
    return view('admin.transactions');
});

Route::resource('/admin/categories', CategoryController::class, [
    'names' => [
        'index' => 'admin.categories.index',
        'create' => 'admin.categories.create',
        'store' => 'admin.categories.store',
        'show' => 'admin.categories.show',
        'edit' => 'admin.categories.edit',
        'update' => 'admin.categories.update',
        'destroy' => 'admin.categories.destroy',
    ]
]);
