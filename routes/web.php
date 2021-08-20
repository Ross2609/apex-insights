<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InsightsController;

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

Route::get('insights/player-session-history', function() {
    
    $username = request()->input('username');
    $platform = request()->input('platform');

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://public-api.tracker.gg/v2/apex/standard/profile/{$platform}/${username}/sessions",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'TRN-Api-Key: 5ce23af8-c76e-4127-862a-1cfc384b03d2',
            'Cookie: X-Mapping-Server=s14; __cflb=02DiuFQAkRrzD1P1mdjW28WYn2UPf2uF9oCmnth2tfD5n'
        ),
    ));

    $response = json_decode(curl_exec($curl), true);

    curl_close($curl);

    
    // Get array of matches in a given session
    $matches = $response['data']['items'][0]['matches'];
    
    // ddd($matches);
    return view('stats.session-history', ['matches' => $matches]);
});
 