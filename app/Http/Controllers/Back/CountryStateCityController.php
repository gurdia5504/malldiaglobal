<?php

namespace App\Http\Controllers\Back;

use App\DataTables\CategoriesDataTable;
use App\Http\{
    Controllers\Controller,
};

use Illuminate\Http\Request;
use Validator, Redirect, Response;
use App\Models\{Country, State, City};

class CountryStateCityController extends Controller
{

    public function index()
    {
        $data['countries'] = Country::get(["name", "id"]);
        return view('country-state-city', $data);
    }

    public function getCountry(Request $request)
    {
        $data['countries'] = Country::select("*")->where("region_id", $request->region_id)
            ->get(["id", "id"]);
        return response()->json($data);
    }
    public function getState(Request $request)
    {

        $data['states'] = State::select('*')->where("country_id", $request->country_id)
            ->get(["isim", "id"]);
        return response()->json($data);
    }
    public function getCity(Request $request)
    {
        // return $request;
        $data['cities'] = City::select('*')->where("state_id", $request->state_id)
            ->get(["isim", "id"]);
        return response()->json($data);
    }
}