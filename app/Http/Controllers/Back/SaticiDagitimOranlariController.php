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
use Illuminate\Support\Facades\DB;

class SaticiDagitimOranlariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  $walletCostsheets = WalletCostsheet::latest()->paginate(10);

        $walletCostsheets = WalletCostsheet::latest()

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



        return view('back.saticiDagitimOranlaris.index',  compact('walletCostsheets'));
    }





    public function tr_havuz()
    {
        $walletCostsheets = WalletCostsheet::select(
            'wallet_costsheets.*',

            //->where('currency', 'TRY')
            DB::raw('product_cost + (product_cost*19/100) AS product_and_tax'),
            DB::raw('cargo_tax + (cargo_tax*19/100) AS cargo_and_tax'),
            DB::raw(' product_saller_price - product_cost + (product_cost * 19)
                    / 100 - cargo_tax + (cargo_tax * 19) / 100 AS product_benefict_and_tax '),
            DB::raw('(company_odenen * net_satis_kari)/100 AS corporate_action'),
            DB::raw('(product_saller_price - product_cost + (product_cost * 19)
                    / 100 - cargo_tax + (cargo_tax * 19) / 100 +  product_tax*100/108) AS net_sales_profit'),
            // DB::raw('product_benefict_and_tax - net_sales_profit AS product_vat'),
        )
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            ->where('currency', 'TR')


            ->paginate(5);
        return view('back.saticiDagitimOranlaris.index',  compact('walletCostsheets'));
    }

    public function ue_havuz()
    {
        /*  $walletCostsheets = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
          //   ->where('currency', 'UE')
            ->paginate(6); */
        $walletCostsheets = WalletCostsheet::select(
            'wallet_costsheets.*',

            //->where('currency', 'TRY')
            DB::raw('product_cost + (product_cost*19/100) AS product_and_tax'),
            DB::raw('cargo_tax + (cargo_tax*19/100) AS cargo_and_tax'),
            DB::raw(' product_saller_price - product_cost + (product_cost * 19)
                    / 100 - cargo_tax + (cargo_tax * 19) / 100 AS product_benefict_and_tax '),
            DB::raw('(company_odenen * net_satis_kari)/100 AS corporate_action'),
            DB::raw('(product_saller_price - product_cost + (product_cost * 19)
                    / 100 - cargo_tax + (cargo_tax * 19) / 100 +  product_tax*100/108) AS net_sales_profit'),
            // DB::raw('product_benefict_and_tax - net_sales_profit AS product_vat'),
        )
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            ->where('currency', 'EU')


            ->paginate(5);

        return view('back.saticiDagitimOranlaris.index',  compact('walletCostsheets'));
    }

    public function usa_havuz()
    {
        /*  $walletCostsheets = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
           // ->where('currency', 'USD')
            ->paginate(4); */
        $walletCostsheets = WalletCostsheet::select(
            'wallet_costsheets.*',

            //->where('currency', 'TRY')
            DB::raw('product_cost + (product_cost*19/100) AS product_and_tax'),
            DB::raw('cargo_tax + (cargo_tax*19/100) AS cargo_and_tax'),
            DB::raw(' product_saller_price - product_cost + (product_cost * 19)
                    / 100 - cargo_tax + (cargo_tax * 19) / 100 AS product_benefict_and_tax '),
            DB::raw('(company_odenen * net_satis_kari)/100 AS corporate_action'),
            DB::raw('(product_saller_price - product_cost + (product_cost * 19)
                    / 100 - cargo_tax + (cargo_tax * 19) / 100 +  product_tax*100/108) AS net_sales_profit'),
            // DB::raw('product_benefict_and_tax - net_sales_profit AS product_vat'),
        )
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            ->where('currency', 'US')


            ->paginate(5);

        return view('back.saticiDagitimOranlaris.index',  compact('walletCostsheets'));
    }

    public function asya_havuz()
    {
        // $walletCostsheets = WalletCostsheet::latest()->paginate(5);
        $walletCostsheets = WalletCostsheet::select(
            'wallet_costsheets.*',

            //->where('currency', 'TRY')
            DB::raw('product_cost + (product_cost*19/100) AS product_and_tax'),
            DB::raw('cargo_tax + (cargo_tax*19/100) AS cargo_and_tax'),
            DB::raw(' product_saller_price - product_cost + (product_cost * 19)
                    / 100 - cargo_tax + (cargo_tax * 19) / 100 AS product_benefict_and_tax '),
            DB::raw('(company_odenen * net_satis_kari)/100 AS corporate_action'),
            DB::raw('(product_saller_price - product_cost + (product_cost * 19)
                    / 100 - cargo_tax + (cargo_tax * 19) / 100 +  product_tax*100/108) AS net_sales_profit'),
            // DB::raw('product_benefict_and_tax - net_sales_profit AS product_vat'),
        )
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
             ->where('currency', 'AS')


            ->paginate(5);

        return view('back.saticiDagitimOranlaris.index',  compact('walletCostsheets'));
    }




    public function individual()
    {


        $walletCostsheets = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            ->where('registration_type', 'INDIVIDUAL')
            ->paginate(5);

        // return $this->getResponse($walletOrderLists, "All orders");
        return view('back.saticiDagitimOranlaris.index',  compact('walletCostsheets'));
    }


    public function corporate()
    {

        $walletCostsheets = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            ->where('registration_type', 'CORPORATE')
            ->paginate(5);

        //  return $this->getResponse($walletOrderLists, "All orders");
        return view('back.saticiDagitimOranlaris.index',  compact('walletCostsheets'));
    }

    public function actifUser()
    {


        $walletCostsheets = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            ->where('status', '1')
            ->paginate(5);

        //  return $this->getResponse($walletOrderLists, "All orders");
        return view('back.saticiDagitimOranlaris.index',  compact('walletCostsheets'));
    }


    public function passifUser()
    {

        $walletCostsheets = WalletCostsheet::select('*')
            ->join('users', 'wallet_costsheets.user_id', '=', 'users.id')
            ->where('status', '0')
            ->paginate(5);

        //  return $this->getResponse($walletOrderLists, "All orders");
        return view('back.saticiDagitimOranlaris.index',  compact('walletCostsheets'));
    }



    public function filter(Request $request)
    {
        $walletCostsheets = WalletCostsheet::query();

        $country = $request->country;
        $vendor = $request->vendor;



        if ($country) {
            $walletCostsheets->where('country', 'LIKE', '%' . $country . '%');
        }

        if ($vendor) {
            $walletCostsheets->where('vendor', 'LIKE', '%' . $vendor . '%');
        }




        $data = [

            'country' => $country,
            'vendor' => $vendor,

            'walletCostsheets' => $walletCostsheets->latest()->Paginate(5),
        ];

       // return view('back.saticiGelirleris.index',  $data);
        return view('back.saticiDagitimOranlaris.index',  $data);
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