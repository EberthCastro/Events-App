<?php

use App\Http\Controllers\EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Event;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//LOgin
Route::get('/login', function() {
    return view('components/login');
});

//All Events
Route::get('/', [EventController::class, 'index']);

//Single Event
Route::get('/events/{event}', [EventController::class, 'show']);



