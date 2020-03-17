<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $response = file_get_contents('https://swapi.co/api/people');
        
        $data = [
            'response' =>  json_decode($response)
        ];

        return Inertia::render('Dashboard/Index', $data);
    }
}
