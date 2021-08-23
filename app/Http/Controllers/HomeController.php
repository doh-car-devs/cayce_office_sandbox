<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function test()
    {
        $response = Http::timeout(10)->retry(3, 100)->get('http://192.168.224.64:2021/api/twg/requests');
        if($response->successful())
            return $response->json();
        else
            return 'An error has Occured. Please Contact System Administrator for more information ';
    }
}
