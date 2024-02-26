<?php

namespace App\Http\Controllers;

use App\Http\Resources\CountyResource;
use App\Models\County;

class CountyController extends Controller
{
    public function show(): CountyResource
    {
        $counties = County::all();
        return new CountyResource($counties);
    }
}
