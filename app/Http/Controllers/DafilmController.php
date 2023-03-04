<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class DafilmController extends Controller
{
    public function trending()
    {
        $client = new Client();
        $url = env('API_URL') . '/trending/movie/week?api_key=' . env("API_KEY");

        $response = $client->request('GET', $url);

        $results['data'] = json_decode($response->getBody())->results;
        $results['title'] = 'Home';


        return view('index', compact('results'));
        // return $results;
    }
    public function now_playing()
    {
        $client = new Client();
        $url = env('API_URL') . 'movie/now_playing?api_key=' . env("API_KEY");

        $response = $client->request('GET', $url);

        $results['data'] = json_decode($response->getBody())->results;
        $results['title'] = 'Now Playing';


        return view('index', compact('results'));
        // return $results;
    }

    public function detail($id)
    {
        $client = new Client();
        $url = env('API_URL') . 'movie/' . $id . '?api_key=' . env("API_KEY");

        $response = $client->request('GET', $url);

        $results['data'] = json_decode($response->getBody());
        $results['title'] = json_decode($response->getBody())->title;

        return view('details', compact('results'));
        // return $results;
    }

    public function top_rated()
    {
        $client = new Client();
        $url = env('API_URL') . 'movie/top_rated?api_key=' . env("API_KEY");

        $response = $client->request('GET', $url);

        $results['data'] = json_decode($response->getBody())->results;
        $results['title'] = 'Top Rated';


        return view('index', compact('results'));
        return $results;
    }

    public function upcoming()
    {
        $client = new Client();
        $url = env('API_URL') . 'movie/upcoming?api_key=' . env("API_KEY");

        $response = $client->request('GET', $url);

        $results['data'] = json_decode($response->getBody())->results;
        $results['title'] = 'Up Coming';


        return view('index', compact('results'));
        // return $results;
    }
}
