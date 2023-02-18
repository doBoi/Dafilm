<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class DafilmController extends Controller
{
    public function index()
    {
        $client = new Client();
        $url = env('API_URL') . 'movie/now_playing?api_key=' . env("API_KEY");

        $response = $client->request('GET', $url);

        $results = json_decode($response->getBody())->results;

        return view('index', compact('results'));
    }

    public function test()
    {
        $client = new Client();
        $url = env('API_URL') . 'movie/now_playing?api_key=' . env("API_KEY");

        $response = $client->request('GET', $url);

        $results = json_decode($response->getBody())->results;

        return compact('results');
    }
}
