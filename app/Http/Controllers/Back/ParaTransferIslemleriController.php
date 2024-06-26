<?php

namespace App\Http\Controllers\Back;


use App\Http\{
    Controllers\Controller,
};


use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Back\UserRequest;
use App\Http\Requests\MessagePost;
use App\Notifications\PostMessage;

use Carbon\Carbon;

use Cache;

use App\Repositories\{PostRepository, MessageRepository};

class ParaTransferIslemleriController extends ResourceController
{


    public function index()
    {
        $users = User::latest()->paginate(5);
       


        return view('back.users.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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

        return view('back.users.index', $data);
    }



    public function changeStatus($user_id)
    {
        $user = User::find($user_id);

        if ($user) {
            if ($user->status) {
                $user->status = 0;
            } else {
                $user->status = 1;
            }
            $user->save();
        }

        return redirect()->back()
            ->with('success', 'Status updated successfully');
    }



    public function show($id)
    {
        $users = User::find($id);
        return view('back.users.show', compact('users'));
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }

}