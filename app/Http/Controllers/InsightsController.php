<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsightsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('insights.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $platform = request()->input('platform');
        $username = request()->input('username');

        $url = "https://public-api.tracker.gg/v2/apex/standard/profile/${platform}/${username}";

        try {
            $curl = curl_init();

            // Check if initialization had gone wrong  
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
            $player_data = json_decode($response)->data;
            dd($player_data->segments);
        
            // return view('insights.index');
        } catch(Exception $e) {
            trigger_error(sprintf(
                'Curl failed with error #%d: %s',
                $e->getCode(), $e->getMessage()),
                E_USER_ERROR);
        }    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
