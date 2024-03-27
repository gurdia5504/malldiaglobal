<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;

use Validator, Redirect, Response;

use App\Models\City as ModelsCity;
use App\Models\Country as ModelsCountry;
use App\Models\State as ModelsState;
use Illuminate\Support\Facades\DB as FacadesDB;

class APIController extends Controller
{
    public function index()
    {
        $countries = FacadesDB::table("countries")->lists("name", "id");
        return view('index', compact('countries'));
    }
    public function getStateList(Request $request)
    {
        $states = FacadesDB::table("states")
            ->where("country_id", $request->country_id)
            ->lists("name", "id");
        return response()->json($states);
    }
    public function getCityList(Request $request)
    {
        $cities = FacadesDB::table("cities")
            ->where("state_id", $request->state_id)
            ->lists("name", "id");
        return response()->json($cities);
    }
}