<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Services\PersonService;

class PersonController extends Controller
{
    public function create()
    {
        return Inertia::render('Person/Create');
    }

    public function store(Request $request)
    {
        dd(PersonService::store($request->all()));
    }
}
