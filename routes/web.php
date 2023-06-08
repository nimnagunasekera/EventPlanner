<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController as EventController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\HomeController as HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//As a convention, always keep all the authentication routes at the top of the file.

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'role:admin'
])
->prefix('admin')
->name('admin.')
->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/event', AdminEventController::class)->only([
        'index', 'create', 'edit', 'destroy'
    ]);

    Route::get('/category', function () {
        return view('admin.category.index');
    })->name('category.index');

    Route::get('/reservation', function () {
        return view('admin.reservation.index');
    })->name('reservation.index');

    Route::get('/user', function () {
        return view('admin.user.index');
    })->name('user.index');
});

Route::get('events', [EventController::class, 'index'])
    ->name('event.index');

Route::get('event/{event}', [EventController::class, 'show'])
->name('event.show');

Route::get('reserve/{event}', [EventController::class, 'reservation'])
->middleware(['auth:sanctum', config('jetstream.auth_session')])
->name('event.reservation');

//As a rule, keep the home route at the bottom of the file.
Route::get('/', HomeController::class)->name('home');
