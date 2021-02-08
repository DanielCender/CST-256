<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class RestClientController extends Controller
{
    //
    public function index() {
        $serviceURL = 'http://activity5.test/';
        $api = 'usersrest';
        $param = '2';
        $uri = $api . '/' . $param;

        try
        {
            // Make REST Call
            $client = new Client(['base_uri' => $serviceURL]);
            $response = $client->request('GET', $uri);

            // REturn JSON or Error
            if($response->getStatusCode() == 200)
                return $response->getBody();
            else
                return "There was an error: " . $response->getStatusCode();
        }
        catch(ClientException $e)
        {
            // Return an error
            return "There was an exception: " . $e->getMessage();
        }
    }
}
