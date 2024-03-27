<?php


namespace App\Http\Controllers\Back;

use App\Http\{
    Controllers\Controller,
};


use App\Models\WalletOrderList;
use App\Http\Requests\StoreWalletOrderListRequest;
use App\Http\Requests\UpdateWalletOrderListRequest;
use Illuminate\Http\Request;

class WalletOrderListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $walletOrderLists= WalletOrderList::latest()->paginate(5);;

        return view('back.walletOrderLists.index',  compact('walletOrderLists'));
    }



    public function individual()
    {


        $walletOrderLists = WalletOrderList::select('*')
            ->join('users', 'wallet_order_lists.user_id', '=', 'users.id')
            ->where('registration_type', 'INDIVIDUAL')
            ->paginate(5);

        // return $this->getResponse($walletOrderLists, "All orders");
        return view('back.walletOrderLists.index',  compact('walletOrderLists'));
    }


    public function corporate()
    {

        $walletOrderLists = WalletOrderList::select('*')
            ->join('users', 'wallet_order_lists.user_id', '=', 'users.id')
            ->where('registration_type', 'CORPORATE')
            ->paginate(5);

        //  return $this->getResponse($walletOrderLists, "All orders");
        return view('back.walletOrderLists.index',  compact('walletOrderLists'));
    }

    public function actifUser()
    {


        $walletOrderLists = WalletOrderList::select('*')
            ->join('users', 'wallet_order_lists.user_id', '=', 'users.id')
            ->where('status', '1')
            ->paginate(5);

        //  return $this->getResponse($walletOrderLists, "All orders");
        return view('back.walletOrderLists.index',  compact('walletOrderLists'));
    }


    public function passifUser()
    {

        $walletOrderLists = WalletOrderList::select('*')
            ->join('users', 'wallet_order_lists.user_id', '=', 'users.id')
            ->where('status', '0')
            ->paginate(5);

        //  return $this->getResponse($walletOrderLists, "All orders");
        return view('back.walletOrderLists.index',  compact('walletOrderLists'));
    }



    public function filter(Request $request)
    {
        $walletOrderLists = WalletOrderList::query();

        $country = $request->country;
        $vendor= $request->vendor;



        if ($country) {
            $walletOrderLists->where('country', 'LIKE', '%' . $country . '%');
        }

        if ($vendor) {
            $walletOrderLists->where('vendor', 'LIKE', '%' . $vendor . '%');
        }




        $data = [

            'country' => $country,
            'vendor' =>$vendor,

            'walletOrderLists' => $walletOrderLists->latest()->Paginate(5),
        ];

        return view('back.walletOrderLists.index', $data );
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
        $walletOrderLists= WalletOrderList::find($id);
        return view('back.walletOrderLists.show', compact('walletOrderLists'));
    }

    public function destroy($id)
    {
        WalletOrderList::find($id)->delete();
        return redirect()->route('walletOrderLists.index')
        ->with('success', 'User deleted successfully');
    }
}