<?php

namespace App\Http\Controllers;

use App\Http\Resources\CityResource;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CityController extends Controller
{

    public function store(Request $request): CityResource
    {
        $request->validate([
            'cityName' => 'required|string',
        ]);
        $newcity = DB::table('cities')->insert([
            'name' => $request->input('cityName'),
        ]);

        return new CityResource($newcity);
    }

    public function show(City $city)
    {
        //
    }

    public function update(Request $request, City $city)
    {
        //
    }

    public function destroy(City $city)
    {
        //
    }
}
