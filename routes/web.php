<?php

use Illuminate\Support\Facades\Route;

// Pages publiques
Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::get('/services', function () {
    return view('services.index');
})->name('services');

Route::get('/tarifs', function () {
    return view('tarifs.index');
})->name('tarifs');

Route::get('/prestataires', function () {
    return view('prestataires.index');
})->name('prestataires');

Route::get('/prestataires/{id}', function () {
    return view('prestataires.profil');
})->name('prestataires.profil');

Route::get('/about', function () {
    return view('about.index');
})->name('about');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

// Pages dashboard (protégées normalement)
Route::get('/dashboard/client', function () {
    return view('dashboard.client');
})->name('dashboard.client');

Route::get('/dashboard/prestataire', function () {
    return view('dashboard.prestataire');
})->name('dashboard.prestataire');

Route::get('/dashboard/admin', function () {
    return view('admin.dashboard');
})->name('dashboard.admin');

// Réservations
Route::get('/reservations/formulaire', function () {
    return view('reservations.formulaire');
})->name('reservations.formulaire');

Route::get('/reservations/confirmation', function () {
    return view('reservations.confirmation');
})->name('reservations.confirmation');
Route::get('/legal', function () {
    return view('legal.index');
})->name('legal');
// Politique de confidentialité
Route::get('/privacy', function () {
    return view('privacy.index');
})->name('privacy');

// Conditions générales
Route::get('/terms', function () {
    return view('terms.index');
})->name('terms');
// Page des notifications
Route::get('/notifications', function () {
    return view('notifications.index');
})->name('notifications');
Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');
// Page Admin (protégée)
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', function () {
        // Vérifier que l'utilisateur est admin
        if (Auth::user()->role !== 'admin') {
            abort(403, 'Accès non autorisé');
        }
        return view('admin.dashboard');
    })->name('admin.dashboard');
});