<?php

namespace App\Http\Controllers\API;

use App\Http\{
    Controllers\Controller,
};
use App\Http\Controllers\API\BaseController;
use App\Models\WalletOrderList;
use App\Http\Requests\StoreWalletOrderListRequest;
use App\Http\Requests\UpdateWalletOrderListRequest;
use App\Models\User;
use Illuminate\Http\Request;

class WalletOrderListController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $successStatus = 200;

    public function AllOrders()
    {
        $walletOrderLists = WalletOrderList::all();

        return $this->getResponse($walletOrderLists, "All orders");
    }


    public function individual()
    {


        $walletOrderLists = WalletOrderList::select('*')
            ->join('users', 'wallet_order_lists.user_id', '=', 'users.id')
            ->where('registration_type', 'INDIVIDUAL')
            ->get();

        return $this->getResponse($walletOrderLists, "All orders");
    }


    public function corporate()
    {

        $walletOrderLists = WalletOrderList::select('*')
            ->join('users', 'wallet_order_lists.user_id', '=', 'users.id')
            ->where('registration_type', 'CORPORATE')
            ->get();

        return $this->getResponse($walletOrderLists, "All orders");
    }

    public function actifUser()
    {


        $walletOrderLists = WalletOrderList::select('*')
            ->join('users', 'wallet_order_lists.user_id', '=', 'users.id')
            ->where('status', '1')
            ->get();

        return $this->getResponse($walletOrderLists, "All orders");
    }


    public function passifUser()
    {

        $walletOrderLists = WalletOrderList::select('*')
            ->join('users', 'wallet_order_lists.user_id', '=', 'users.id')
            ->where('status', '0')
            ->get();

        return $this->getResponse($walletOrderLists, "All orders");
    }


    public function filter(Request $request)
    {
        $walletOrderLists = WalletOrderList::query();

        $country = $request->country;



        if ($country) {
            $walletOrderLists->where('country', 'LIKE', '%' . $country . '%');
        }




        $data = [

            'country' => $country,

            'walletOrderLists' => $walletOrderLists->latest()->simplePaginate(5),
        ];

        return $this->getResponse($data, "All orders");
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
        return $this->getResponse($walletOrderLists, "Details of order");
    }

    public function destroy($id)
    {
        WalletOrderList::find($id)->delete();
        return redirect()->route('walletOrderLists.index')
            ->with('success', 'User deleted successfully');
    }
}