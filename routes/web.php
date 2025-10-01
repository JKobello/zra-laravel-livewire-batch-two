<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

use App\Http\Controllers\BoatController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');

        // Route::resource('boats', BoatController::class);
        Route::get('/boats/index', [BoatController::class, 'index'])->name('boats.index');
        Route::post('/boats/create', [BoatController::class, 'create'])->name('boats.create');
        Route::post('/boats/store', [BoatController::class, 'store'])->name('boats.store');
        Route::post('/boats/edit', [BoatController::class, 'edit'])->name('boats.edit');
        Route::post('/boats/update', [BoatController::class, 'update'])->name('boats.update');
        Route::delete('/boats/destroy', [BoatController::class, 'delete'])->name('boats.delete');
});

require __DIR__.'/auth.php';
