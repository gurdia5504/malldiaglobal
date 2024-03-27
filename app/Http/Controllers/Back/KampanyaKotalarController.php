<?php


namespace App\Http\Controllers\Back;

use App\Http\{
    Controllers\Controller,
};


use App\Models\WalletOrderList;

use App\Models\WalletCostsheet;
use Illuminate\Http\Request;
use App\Models\HavuzGalirleri;
use App\Http\Requests\StoreHavuzGalirleriRequest;
use App\Http\Requests\UpdateHavuzGalirleriRequest;
use App\Models\SellerQuotes;

class KampanyaKotalarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kampanyaKotalars = SellerQuotes::select('*')->paginate(4);
        //dd($kampanyaKotalars);

        return view('back.kampanyaKotalars.index',  compact('kampanyaKotalars'));
    }
    public function update_kampanya(Request $request)
    {
        if ($request->ajax()) {
            $member = SellerQuotes::find($request->id);
            $member->region = $request->input('region');
            $member->quota_price = $request->input('quota_price');

            $member->update();

      
            return redirect()->back()->with('message', "This is Success Message");

        }
    }


    public function edit($id)
    {
        $kampanya = SellerQuotes::find($id);

        return response()->json([
            'data' => $kampanya
        ]);
    }




    public function tr_havuz()
    {
        $havuzGelirleris = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            //->where('currency', 'TRY')
            ->paginate(5);

        return view('back.kampanyaKotalars.index',  compact('havuzGelirleris'));
    }

    public function ue_havuz()
    {
        $havuzGelirleris = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            //   ->where('currency', 'UE')
            ->paginate(6);

        return view('back.kampanyaKotalars.index',  compact('havuzGelirleris'));
    }

    public function usa_havuz()
    {
        $havuzGelirleris = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            // ->where('currency', 'USD')
            ->paginate(4);

        return view('back.kampanyaKotalars.index',  compact('havuzGelirleris'));
    }

    public function asya_havuz()
    {
        $havuzGelirleris = WalletCostsheet::latest()->paginate(5);

        return view('back.kampanyaKotalars.index',  compact('havuzGelirleris'));
    }




    public function individual()
    {


        $havuzGelirleris = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            ->where('registration_type', 'INDIVIDUAL')
            ->paginate(5);

        // return $this->getResponse($walletOrderLists, "All orders");
        return view('back.kampanyaKotalars.index',  compact('havuzGelirleris'));
    }


    public function corporate()
    {

        $havuzGelirleris = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            ->where('registration_type', 'CORPORATE')
            ->paginate(5);

        //  return $this->getResponse($walletOrderLists, "All orders");
        return view('back.kampanyaKotalars.index',  compact('havuzGelirleris'));
    }

    public function actifUser()
    {


        $havuzGelirleris = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            ->where('status', '1')
            ->paginate(5);

        //  return $this->getResponse($walletOrderLists, "All orders");
        return view('back.kampanyaKotalars.index',  compact('havuzGelirleris'));
    }


    public function passifUser()
    {

        $havuzGelirleris = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            ->where('status', '0')
            ->paginate(5);

        //  return $this->getResponse($walletOrderLists, "All orders");
        return view('back.kampanyaKotalars.index',  compact('havuzGelirleris'));
    }



    public function filter(Request $request)
    {
        $havuzGelirleris = WalletCostsheet::query();

        $country = $request->country;
        $vendor = $request->vendor;



        if ($country) {
            $havuzGelirleris->where('country', 'LIKE', '%' . $country . '%');
        }

        if ($vendor) {
            $havuzGelirleris->where('vendor', 'LIKE', '%' . $vendor . '%');
        }




        $data = [

            'country' => $country,
            'vendor' => $vendor,

            'havuzGelirleris' => $havuzGelirleris->latest()->Paginate(5),
        ];

        return view('back.kampanyaKotalars.index',  $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHavuzGalirleriRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHavuzGalirleriRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HavuzGalirleri  $havuzGalirleri
     * @return \Illuminate\Http\Response
     */
    public function show(HavuzGalirleri $havuzGalirleri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HavuzGalirleri  $havuzGalirleri
     * @return \Illuminate\Http\Response
     */

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHavuzGalirleriRequest  $request
     * @param  \App\Models\HavuzGalirleri  $havuzGalirleri
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHavuzGalirleriRequest $request, HavuzGalirleri $havuzGalirleri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HavuzGalirleri  $havuzGalirleri
     * @return \Illuminate\Http\Response
     */
    public function destroy(HavuzGalirleri $havuzGalirleri)
    {
        //
    }
}