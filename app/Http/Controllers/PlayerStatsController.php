<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerStatsController extends Controller
{
    public function index() 
    {
        $platform = request()->input('platform');
        $username = request()->input('username');
        
        $curl = curl_init();
    
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://public-api.tracker.gg/v2/apex/standard/profile/{$platform}/{$username}",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'TRN-Api-Key: 5ce23af8-c76e-4127-862a-1cfc384b03d2'
            ),
        ));
    
        $response = curl_exec($curl);
    
        curl_close($curl);

        ddd(json_decode($response));
    
        return view('stats.stats');
    }
}
