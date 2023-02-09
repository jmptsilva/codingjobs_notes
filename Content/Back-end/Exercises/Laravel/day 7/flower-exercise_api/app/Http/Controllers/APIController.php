<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flower;
use Symfony\Component\Console\Input\Input;

class APIController extends Controller
{
    public function all_flowers()
    {
        $flowers = Flower::all();

        return $flowers->toJson();
    }

    public function flowers_min_price($minprice)
    {
        $flowers = Flower::where('price', '>=', $minprice);

        return $flowers->toJson();
    }

    public function flowers_between_price($minprice, $maxprice)
    {
        $flowers = Flower::whereBetween('price', [$minprice, $maxprice]);

        return $flowers->toJson();
    }

    public function flowers_by_name($name)
    {

        /* dd($name); */
        $flowers = Flower::where('name', $name)->get();

        /* dd($flowers); */
        return $flowers->toJson();
    }
}
