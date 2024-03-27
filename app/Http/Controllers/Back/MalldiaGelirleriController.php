<?php


namespace App\Http\Controllers\Back;

use App\Http\{
    Controllers\Controller,
};


use App\Models\WalletOrderList;
use App\Http\Requests\StoreWalletOrderListRequest;
use App\Http\Requests\UpdateWalletOrderListRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MalldiaGelirleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $walletOrderLists = WalletOrderList::latest()->paginate(10);

        return view('back.malldiaGelirleris.index',  compact('walletOrderLists'));
    }





    public function tr_malldia()
    {
        $walletOrderLists = WalletOrderList::select('*' ,

        )
            ->join('users', 'wallet_order_lists.user_id', '=', 'users.id')
            ->where('currency','TR')
            ->paginate(5);

        return view('back.malldiaGelirleris.index',  compact('walletOrderLists'));
    }

    public function ue_malldia()
    {
        $walletOrderLists = WalletOrderList::select('*')
            ->join('users', 'wallet_order_lists.user_id', '=', 'users.id')
            ->where('currency', 'EU')
            ->paginate(5);

        return view('back.malldiaGelirleris.index',  compact('walletOrderLists'));
    }
    public function usa_malldia()
    {
        $walletOrderLists = WalletOrderList::select('*')
            ->join('users', 'wallet_order_lists.user_id', '=', 'users.id')
            ->where('currency', 'US')
            ->paginate(5);

        return view('back.malldiaGelirleris.index',  compact('walletOrderLists'));
    }
    public function asya_malldia()
    {
        $walletOrderLists = WalletOrderList::select('*')
            ->join('users', 'wallet_order_lists.user_id', '=', 'users.id')
            ->where('currency', 'AS')

            ->paginate(5);

        return view('back.malldiaGelirleris.index',  compact('walletOrderLists'));
    }



    public function individual()
    {


        $walletOrderLists = WalletOrderList::select('*')
            ->join('users', 'wallet_order_lists.user_id', '=', 'users.id')
            ->where('registration_type', 'INDIVIDUAL')
            ->paginate(5);

        // return $this->getResponse($walletOrderLists, "All orders");
        return view('back.malldiaGelirleris.index',  compact('walletOrderLists'));
    }


    public function corporate()
    {

        $walletOrderLists = WalletOrderList::select('*')
            ->join('users', 'wallet_order_lists.user_id', '=', 'users.id')
            ->where('registration_type', 'CORPORATE')
            ->paginate(5);

        //  return $this->getResponse($walletOrderLists, "All orders");
        return view('back.malldiaGelirleris.index',  compact('walletOrderLists'));
    }

    public function actifUser()
    {


        $walletOrderLists = WalletOrderList::select('*')
            ->join('users', 'wallet_order_lists.user_id', '=', 'users.id')
            ->where('status', '1')
            ->paginate(5);

        //  return $this->getResponse($walletOrderLists, "All orders");
        return view('back.malldiaGelirleris.index',  compact('walletOrderLists'));
    }


    public function passifUser()
    {

        $walletOrderLists = WalletOrderList::select('*')
            ->join('users', 'wallet_order_lists.user_id', '=', 'users.id')
            ->where('status', '0')
            ->paginate(5);

        //  return $this->getResponse($walletOrderLists, "All orders");
        return view('back.malldiaGelirleris.index',  compact('walletOrderLists'));
    }



    public function filter(Request $request)
    {
        $walletOrderLists = WalletOrderList::query();

        $country = $request->country;
        $vendor = $request->vendor;



        if ($country) {
            $walletOrderLists->where('country', 'LIKE', '%' . $country . '%');
        }

        if ($vendor) {
            $walletOrderLists->where('vendor', 'LIKE', '%' . $vendor . '%');
        }




        $data = [

            'country' => $country,
            'vendor' => $vendor,

            'walletOrderLists' => $walletOrderLists->latest()->Paginate(10),
        ];

        return view('back.malldiaGelirleris.index',  $data);
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