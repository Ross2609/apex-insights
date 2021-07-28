<?php

use Illuminate\Support\Facades\Route;

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

Route::get('insights', function () {
    return view('insights.index');
});

Route::get('player-stats', function () {
    $platform = request()->input('platform');
    $username = request()->input('username');

    $url = "https://public-api.tracker.gg/v2/apex/standard/profile/${platform}/${username}";

    try {
        $curl = curl_init();

        // Check if initialization had gone wrong*    
        if ($curl === false) {
            throw new Exception('failed to initialize');
        }
    
        curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'TRN-Api-Key: 5ce23af8-c76e-4127-862a-1cfc384b03d2',
            'Cookie: X-Mapping-Server=s14; __cflb=02DiuFQAkRrzD1P1mdjW28WYn2UPf2uF9cvzA5W3rcJW8'
        ),
        ));
    
        $response = curl_exec($curl);

        // Check the return value of curl_exec(), too
        if ($response === false) {
            throw new Exception(curl_error($curl), curl_errno($curl));
        }
    
        curl_close($curl);
        echo dd(json_decode($response));
    
        // return view('insights.index');
    } catch(Exception $e) {
        trigger_error(sprintf(
            'Curl failed with error #%d: %s',
            $e->getCode(), $e->getMessage()),
            E_USER_ERROR);
    }    

});
