<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Http\Resources\CountyResource;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CityController extends Controller
{

    public function store(CityRequest $cityRequest)
    {
        DB::table('cities')->insert([
            'name' => $cityRequest->input('name'),
            'county_id' => $cityRequest->input('county_id')
        ]);
    }

    public function show(): CountyResource
    {
        $city = City::all();
        return new CountyResource($city);
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
