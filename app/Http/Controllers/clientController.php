<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class clientController extends Controller
{
  private function fetchDataFromApi($url)
    {
        $response = Http::get($url);
        return $response->json();
    }
     public function index(){


        $url = env('URL_SERVER_API');

        $clients = $this->fetchDataFromApi($url .'/clients');

        return view('client.index',compact('clients'));

     }
}

