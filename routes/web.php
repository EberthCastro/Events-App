<?php


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

//All Listings
Route::get('/', function () {
    return view('events', [
        'heading' => 'Latest Masterclass',
        'events' => Event::all()
    ]);
});

//Single Event
route::get('/events/{id}', function($id) {
    return view('event', [
        'event' => Event::find($id)
    ]);
});
