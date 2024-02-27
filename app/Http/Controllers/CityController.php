<?php

namespace App\Http\Controllers;

use App\Http\Requests\CityRequest;
use App\Http\Resources\CityResource;
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

    public function show(): CityResource
    {
        $city = City::all();
        return new CityResource($city);
    }

    public function update(Request $request, City $city)
    {
    }

    public function destroy(Request $request)
    {
        $id = $request->input('id');
        dd($id);
        $city = City::findOrFail($id);
        $city->delete();
    }
}
