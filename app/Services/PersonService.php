<?php

namespace App\Services;

use App\Person;

class PersonService
{
    public static function store($request)
    {
        dd(Person::create($request));

        try {
            return Person::create($request);
        } catch (\Throwable $th) {
            return false;
        }
    }
}