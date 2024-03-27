<?php

namespace App\Http\Controllers\Back;

use App\Http\{
    Controllers\Controller,
};

use App\Models\WalletSellerMoneyTransferList;
use App\Http\Requests\StoreWalletSellerMoneyTransferListRequest;
use App\Http\Requests\UpdateWalletSellerMoneyTransferListRequest;
use App\Models\WalletCostsheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WalletSellerMoneyTransferListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $walletCosts = WalletCostsheet::latest()

            ->select(
                'wallet_costsheets.*',
                DB::raw('product_cost + (product_cost*19/100) AS product_and_tax'),
                DB::raw('cargo_tax + (cargo_tax*19/100) AS cargo_and_tax'),
                DB::raw(' product_saller_price - product_cost + (product_cost * 19)
                    / 100 - cargo_tax + (cargo_tax * 19) / 100 AS product_benefict_and_tax '),
                DB::raw('(company_odenen * net_satis_kari)/100 AS corporate_action'),
                DB::raw('(product_saller_price - product_cost + (product_cost * 19)
                    / 100 - cargo_tax + (cargo_tax * 19) / 100 +  product_tax*100/108) AS net_sales_profit'),
               // DB::raw('product_benefict_and_tax - net_sales_profit AS product_vat'),
            )


            ->paginate(5);







        return view('back.walletSellerMoneyTransferLists.index', compact('walletCosts'));
    }

    public function individual()
    {

        $walletCosts = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            ->where('registration_type', 'INDIVIDUAL')
            ->paginate(5);

        // return $this->getResponse($walletOrderLists, "All orders");
        return view('back.walletSellerMoneyTransferLists.index', compact('walletCosts'));
    }


    public function corporate()
    {

        $walletCosts = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            ->where('registration_type', 'CORPORATE')
            ->paginate(5);

        //  return $this->getResponse($walletOrderLists, "All orders");
        return view('back.walletSellerMoneyTransferLists.index', compact('walletCosts'));
    }

    public function actifUser()
    {


        $walletCosts = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            ->where('status', '1')
            ->paginate(5);

        //  return $this->getResponse($walletOrderLists, "All orders");
        return view('back.walletSellerMoneyTransferLists.index', compact('walletCosts'));
    }


    public function passifUser()
    {

        $walletCosts = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            ->where('status', '0')
            ->paginate(5);

        //  return $this->getResponse($walletOrderLists, "All orders");
        return view('back.walletSellerMoneyTransferLists.index', compact('walletCosts'));
    }


    public function filter(Request $request)
    {
        $walletCosts = WalletCostsheet::query();

        $country = $request->country;
        $vendor = $request->vendor;

        if ($country) {
            $walletCosts->where('country', 'LIKE', '%' . $country . '%');
        }

        if ($vendor) {
            $walletCosts->where('vendor', 'LIKE', '%' . $vendor . '%');
        }

        $data = [

            'country' => $country,
            'vendor' => $vendor,

            'walletCosts' => $walletCosts->latest()->Paginate(5),
        ];

        return view('back.walletSellerMoneyTransferLists.index', $data);
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
     * @param  \App\Http\Requests\StoreWalletSellerMoneyTransferListRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWalletSellerMoneyTransferListRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WalletSellerMoneyTransferList  $walletSellerMoneyTransferList
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WalletSellerMoneyTransferList  $walletSellerMoneyTransferList
     * @return \Illuminate\Http\Response
     */
    public function edit(WalletSellerMoneyTransferList $walletSellerMoneyTransferList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWalletSellerMoneyTransferListRequest  $request
     * @param  \App\Models\WalletSellerMoneyTransferList  $walletSellerMoneyTransferList
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWalletSellerMoneyTransferListRequest $request, WalletSellerMoneyTransferList $walletSellerMoneyTransferList)
    {
        //
    }

    public function show($id)
    {
        $walletOrderLists = WalletCostsheet::find($id);
        return view('back.walletSellerMoneyTransferLists.show', compact('walletOrderLists'));
    }

    public function destroy($id)
    {
        WalletCostsheet::find($id)->delete();
        return redirect()->route('walletSellerMoneyTransferLists.index')
            ->with('success', 'User deleted successfully');
    }
}
