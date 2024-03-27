<?php

namespace App\Http\Controllers\Back;

use App\Http\{
    Controllers\Controller,
};

use App\Models\Wallet_Sellers;
use App\Http\Requests\StoreWallet_SellersRequest;
use App\Http\Requests\UpdateWallet_SellersRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WalletSellersController extends Controller
{


    public function index()

    {
        // $users = User::latest()->paginate(5);

        $users = User::select('*')
            // ->with('seller_quotes')
            //->join('seller_quotes', 'users.seller_quotes_id','=','seller_quotes.id')

            ->paginate(5);
        return view('back.walletSellers.index', compact('users'));
    }

    public function filter(Request $request)
    {
        $users = User::query();

        $last_name = $request->last_name;
        $email = $request->email;
        $bank_name = $request->bank_name;
        $address = $request->address;




        if ($last_name) {
            $users->where('last_name', 'LIKE', '%' . $last_name . '%');
        }

        if ($email) {
            $users->where('email', 'LIKE', '%' . $email . '%');
        }
        if ($bank_name) {
            $users->where('bank_name', 'LIKE', '%' . $bank_name . '%');
        }
        if ($address) {
            $users->where('address', 'LIKE', '%' . $address . '%');
        }





        $data = [

            'email' => $email,
            'name' => $last_name,
            'status' => $bank_name,
            'address' => $address,

            'users' => $users->latest()->Paginate(5),
        ];

        return view('back.walletSellers.index', $data);
    }



    public function updateinfo(Request $request)
    {

        /* $user = User::find($request->memid);

        $user->last_name = $request->input('last_name');
        $user->first_name = $request->input('first_name');
        $user->email = $request->input('email');
        $user->address = $request->input('address');


 */

        if ($request->ajax()) {
            $user = User::find($request->id);


            $user->last_name = $request->input('last_name');
            $user->first_name = $request->input('first_name');
            $user->email = $request->input('email');
            $user->address = $request->input('address');

            $user->update();
        
        }

       // $user->update();

        return redirect()->back()->with('success', 'Address was updated successfully');
    }


    public function update_address(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'first_name' => 'required|string|max:254',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|:users,email,' . $user->id,
            'address' => 'required|string|max:255',
            // Add other fields as needed
        ]);

        $user->update($request->all());

        return redirect()->back()->with('success', 'Address was updated successfully');
    }

    public function destroy($id)
    {
        Wallet_Sellers::find($id)->delete();
        return redirect()->route('walletSellers.index')
            ->with('success', 'User deleted successfully');
    }
}