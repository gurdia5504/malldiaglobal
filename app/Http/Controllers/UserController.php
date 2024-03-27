<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;




use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use DOMDocument;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use DataTables;
use Illuminate\View\View;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $users = User::latest()->paginate(5);
        // $users = User::paginate($request->get('elements', 25));


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
        return redirect()->back()->with('success', 'Deleted successfully');
    }


    public function update_avatar()
    {
        $user = Auth::user();

        $users =  User::all();
        return view('back.users.account', compact('user', 'users'));
    }


    public function change_password(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find(auth()->user()->id)->update(['password' => Hash::make($request->new_password)]);



        return redirect()->back()
            ->with('success', 'Password updated successfully');
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


    public function update_user(Request $request )
    {
        $user = Auth::user();
      //  $user = User::find($id);

        $request->validate([
            'first_name' => 'required|string|max:254',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'address' => 'required|string|max:255',
            // Add other fields as needed
        ]);

        $user->update($request->all());

        return redirect()->back()->with('success', ' updated successfully');
    }



    public function avatar(Request $request)
    {
        $request->validate([

            'image_path' => 'required|image',

        ]);
        $avatarName = time() . '.' . $request->image_path->getClientOriginalExtension();

        $request->image_path->move(public_path('assets/images/'), $avatarName);

        Auth()->user()->update(['image_path' => $avatarName]);

        return back()->with('success', 'Avatar updated successfully.');
    }
}