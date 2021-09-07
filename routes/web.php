<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InsightsController;
use App\Http\Controllers\SessionHistoryController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('insights', [InsightsController::class, 'index']);
Route::get('insights/player-stats', function() {
    return view('stats.stats');
});

Route::get('insights/player-segmented-stats', function() {
    return view('stats.segmented-stats');
});

/*
|--------------------------------------------------------------------------
| Session History Routes
|--------------------------------------------------------------------------
*/

Route::get('insights/player-session-history', [SessionHistoryController::class, 'index']);
 