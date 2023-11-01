<?php

namespace App\Http\Controllers;

use App\Models\planet_app;
use Illuminate\Http\Request;

class planet_appController extends Controller
{
    public $timestamps = false;

    public function index()
    {
        $planets = planet_app::all();
        return view('planets.index', ['planets' => $planets]);
    }
    public function create()
    {
        return view('planets.create');
    }
    public function store(Request $request)
    {
        $planet = new planet_app;

        $planet->jap_name = $request->jap_name;
        $planet->eng_name = $request->eng_name;
        $planet->radius = $request->radius;
        $planet->weight = $request->weight;

        $planet->save();

        return redirect(route("planets.index"));
    }
}
