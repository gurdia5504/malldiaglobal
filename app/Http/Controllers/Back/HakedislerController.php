<?php


namespace App\Http\Controllers\Back;

use App\Http\{
    Controllers\Controller,
};


use App\Models\WalletOrderList;
use App\Http\Requests\StoreWalletOrderListRequest;
use App\Http\Requests\UpdateWalletOrderListRequest;
use App\Models\WalletCostsheet;
use Illuminate\Http\Request;

class HakedislerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $havuzGelirleris = WalletCostsheet::latest()->paginate(10);

        return view('back.hakedislers.index',  compact('havuzGelirleris'));
    }





    public function tr_havuz()
    {
        $havuzGelirleris = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            //->where('currency', 'TRY')
            ->paginate(5);

        return view('back.hakedislers.index',  compact('havuzGelirleris'));
    }

    public function ue_havuz()
    {
        $havuzGelirleris = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            //   ->where('currency', 'UE')
            ->paginate(6);
        return view('back.hakedislers.index',  compact('havuzGelirleris'));
    }

    public function usa_havuz()
    {
        $havuzGelirleris = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            // ->where('currency', 'USD')
            ->paginate(4);

        return view('back.hakedislers.index',  compact('havuzGelirleris'));
    }

    public function asya_havuz()
    {
        $havuzGelirleris = WalletCostsheet::latest()->paginate(5);

        return view('back.hakedislers.index',  compact('havuzGelirleris'));
    }




    public function individual()
    {


        $havuzGelirleris = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            ->where('registration_type', 'INDIVIDUAL')
            ->paginate(5);

        // return $this->getResponse($walletOrderLists, "All orders");
        return view('back.hakedislers.index',  compact('havuzGelirleris'));
    }


    public function corporate()
    {

        $havuzGelirleris = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            ->where('registration_type', 'CORPORATE')
            ->paginate(5);

        //  return $this->getResponse($walletOrderLists, "All orders");
        return view('back.hakedislers.index',  compact('havuzGelirleris'));
    }

    public function actifUser()
    {


        $havuzGelirleris = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            ->where('status', '1')
            ->paginate(5);

        //  return $this->getResponse($walletOrderLists, "All orders");
        return view('back.hakedislers.index',  compact('havuzGelirleris'));
    }


    public function passifUser()
    {

        $havuzGelirleris = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            ->where('status', '0')
            ->paginate(5);

        //  return $this->getResponse($walletOrderLists, "All orders");
        return view('back.hakedislers.index',  compact('havuzGelirleris'));
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

        return view('back.hakedislers.index',  $data);
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
     * @param  \App\Http\Requests\StoreWalletOrderListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWalletOrderListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WalletOrderList  $walletOrderList
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WalletOrderList  $walletOrderList
     * @return \Illuminate\Http\Response
     */
    public function edit(WalletOrderList $walletOrderList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWalletOrderListRequest  $request
     * @param  \App\Models\WalletOrderList  $walletOrderList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWalletOrderListRequest $request, WalletOrderList $walletOrderList)
    {
        //
    }

    public function show($id)
    {
        $walletOrderLists = WalletOrderList::find($id);
        return view('back.walletOrderLists.show', compact('walletOrderLists'));
    }

    public function destroy($id)
    {
        WalletOrderList::find($id)->delete();
        return redirect()->route('walletOrderLists.index')
            ->with('success', 'User deleted successfully');
    }
}