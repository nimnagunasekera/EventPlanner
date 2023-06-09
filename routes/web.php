<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReservationController as ReservationController;
use App\Http\Controllers\EventController as EventController;
use App\Http\Controllers\Admin\EventController as AdminEventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminReservationController as AdminReservationController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\MyEventsController as MyEventsController;

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
Route::get('/dev', function () {
    $user = auth()->user();

    return true;
});

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

    Route::resource('/category', AdminCategoryController::class)->only([
        'index', 'create', 'edit', 'destroy'
    ]);

    Route::get('/reservation', [AdminReservationController::class, 'index'])->name('reservation.index');

    Route::get('/user', [AdminUserController::class, 'index'])->name('user.index');
});

Route::get('events', [EventController::class, 'index'])
    ->name('event.index');

Route::get('event/{event}', [EventController::class, 'show'])
->name('event.show');

Route::get('reserve/{event}', [EventController::class, 'reservation'])
->middleware(['auth:sanctum', config('jetstream.auth_session')])
->name('event.reservation');

Route::get('/myevents', MyEventsController::class)->name('myevents');

Route::get('/past-events', [HomeController::class, 'pastEvents'])->name('past-events');

//As a rule, keep the home route at the bottom of the file.
Route::get('/', HomeController::class)->name('home');
