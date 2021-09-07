<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        
        // Get sessions
        $sessions = $response['data']['items'];
        $new_sessions = [];
        
        // Get array of matches in a given session
        
        foreach ($sessions as $session) {
            $totalRP = 0;
            $matches = $session['matches'];

            foreach ($matches as $match) {
                $totalRP += $match['stats']['rankScoreChange']['value'];
            }

            $session['stats']['totalRP'] = $totalRP;
            array_push($new_sessions, $session);
        }        

        // ddd($new_sessions);

        return view('stats.session-history', 
            [
                'sessions' => $new_sessions,
                'username' => $username,
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
}
