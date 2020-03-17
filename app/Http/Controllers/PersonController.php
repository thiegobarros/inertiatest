<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Services\PersonService;
use Illuminate\Support\Facades\Request as Request2;

class PersonController extends Controller
{
    public function index()
    {
        $persons = PersonService::getAll();

        return Inertia::render('Person/Index', [
            'persons' => $persons,
            'starwars' => function () {
                if(isset(Request2::all()['state'])){
                    return json_decode(file_get_contents('https://swapi.co/api/people/1'));
                }
            }
        ]);
    }

    public function create()
    {
        return Inertia::render('Person/Create');
    }

    public function store(Request $request)
    {
        PersonService::store($request->all());
        return redirect()->route('person');
    }

    public function erro(Request $request)
    {
        dd($erro);
    }
}
