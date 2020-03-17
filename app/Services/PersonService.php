<?php

namespace App\Services;

use App\Person;

class PersonService
{
    public static function store($request)
    {
        try {
            return Person::create($request);
        } catch (\Throwable $th) {
            return false;
        }
    }

    public static function getAll()
    {
        try {
            return Person::all();
        } catch (\Throwable $th) {
            return false;
        }
    }
}