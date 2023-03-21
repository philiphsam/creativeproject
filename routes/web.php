<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Eventbooking;
use App\Models\Artistbooking;

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

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/eventsbooked', function () {
    return view('eventsbooked');
});
Route::get('/artistsbooked', function () {
    return view('artistsbooked');
});
Route::get('/members', function () {
    return view('members');
});
Route::get('/registered_members', function () {
    return view('mbrs');
});
Route::get('/singing', function () {
    return view('singing');
});
Route::get('/eventbook', function () {
    return view('eventbook');
});
Route::get('/artistbook', function () {
    return view('artistbook');
});
Route::post('/eventbookings', function () {
    $eventbooking = new Eventbooking();
    $eventbooking->firstname=request('firstname');
    $eventbooking->lastname=request('lastname');
    $eventbooking->contact=request('contact');
    $eventbooking->email=request('email');
    $eventbooking->eventname=request('eventname');
    $eventbooking->slots_needed=request('slots_needed');
    $eventbooking->slot_type=request('slot_type');
    $eventbooking->save();
    return \Redirect::to('/events');
});
Route::post('/artistbookings', function () {
    $artistbooking = new Artistbooking();
    $artistbooking->firstname=request('firstname');
    $artistbooking->lastname=request('lastname');
    $artistbooking->contact=request('contact');
    $artistbooking->email=request('email');
    $artistbooking->artistname=request('artistname');
    $artistbooking->start_date=request('start_date');
    $artistbooking->end_date=request('end_date');
    $artistbooking->save();
    return \Redirect::to('/members');
});
require __DIR__.'/auth.php';


