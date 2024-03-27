<?php

namespace App\Http\Controllers\Back;

use App\DataTables\CategoriesDataTable;
use App\Http\{
    Controllers\Controller,
};

use Illuminate\Http\Request;
use Validator, Redirect, Response;
use App\Models\{Country, State, City, Il, Ilce, Ulke};

class RegionCountryStateCityController extends Controller
{

    public function index()
    {
        $data['yayinbolgeleris'] = Country::get(["bolge", "id"]);
        return view('country-state-city', $data);
    }

    public function getCountries(Request $request)
    {
        $data ['ulkes'] = Ulke::where("'bolge_id", $request->bolge_id)
            ->get(["id", "id"]);
        return response()->json($data);
    }

    public function getState(Request $request)
    {
        $data['ils'] = Il::where("ulkeid", $request->ulkeid)
            ->get(["trisim", "id"]);
        return response()->json($data);
    }
    public function getCity(Request $request)
    {
        $data['ilces'] = Ilce::where("il_id", $request->il_id)
            ->get(["isim", "id"]);
        return response()->json($data);
    }



}