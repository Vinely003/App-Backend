<?php

namespace App\Http\Controllers;

use App\Http\Resources\CityResource;
use App\Models\City;
use App\Models\County;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CityController extends Controller
{

    public function store(Request $request): CityResource
    {
        $request->validate([
            'name' => 'required|string',
        ]);
        $newcity = DB::table('cities')->insert([
            'name' => $request->input('name'),
            'id' => 1
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
