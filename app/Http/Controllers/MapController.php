<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MapController extends Controller
{

  public function map()
  {
    return view('avon.index');
  }


    public function search(Request $request)
    {
        $client = new Client();
        $response = $client->request('GET', 'https://maps.googleapis.com/maps/api/geocode/json', [
            'query' => [
                'address' => $request->query('address'),
                'key' => 'AIzaSyBDfceZIApSfwiCWOKeoZWR8_zBWDt6bjU',
            ],
        ]);

        $data = json_decode($response->getBody(), true);
        $location = $data['results'][0]['geometry']['location'];

        return response()->json([
            'latitude' => $location['lat'],
            'longitude' => $location['lng'],
        ]);
    }
}
