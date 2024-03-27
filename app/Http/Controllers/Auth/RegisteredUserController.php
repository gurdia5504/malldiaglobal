<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;
use App\Models\CompanyType;
use App\Models\Country;
use App\Models\Currency;
use App\Models\Dovizler;
use App\Models\Region;
use App\Models\SellerQuotes;
use App\Models\State;
use App\Models\User;
use App\Models\Yayinbolgeleri;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create()
    {
        $categories = Category::all();
        // return $currencies =SellerQuotes::all();
        $currencies = Dovizler::all();
        // $currencies = Currency::all();
        $countries= Country::all();
        $company_types= CompanyType::all();
        $states= State::all();
        $cities = City::all();
        $regions = Region::all();
        //  dd($categories);
        return view('auth.register', compact('categories', 'regions','currencies','countries','states','cities','company_types'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    function ticket_number()
    {
        do {
            $code = random_int(1000000, 9999999);
        } while (User::where("code", "=", $code)->first());

        return $code;
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
          // 'code' =>$this->ticket_number(),
            'last_name' => ['required', 'string', 'max:255'],
            'first_name' => ['required', 'string', 'max:255'],
            'birth_day' => 'required',
            'gender' => 'required',
           // 'regions' => 'string',
             'region'=>'string',
            'country' => 'string',
            'state' => 'string',
            'city' => 'string',

            'phone' => 'required',
            'address' => 'required',
            'tc_vkn' => 'required',
            'bank_name'         => 'required',
            'iban'         => 'required',
            'category'         => 'required',
            //  'currency'         => 'required',
          //  'currency_id' => 'exists:currencies,id',
           'seller_quotes_id'=> 'exists:seller_quotes,id',
           'region_id'=> 'exists:regions,id',
       //  'seller_quote' => ['required', 'numeric'],
    //    'seller_quotes'=> 'required',
            //  'fx_rate'         => 'required',

            //  'trade_name'  => 'string',
            //  'company_type' =>     'string',
            'mersis_no' => 'string',
            'registration_number' => 'string',

            'taxe_admin' => 'string',
            'taxe_admin'    => 'string',


            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

     // $seller_quotes = SellerQuotes::findOrFail($request['seller_quote']);

        $personal_info = new User();
        $personal_info->code = $this->ticket_number();
        $personal_info->first_name        = $request->first_name;
        $personal_info->last_name         = $request->last_name;
        $personal_info->birth_day =  $request->birth_day;

        $personal_info->gender = $request->gender;
       // $personal_info->regions  = $request->regions;
        $personal_info->region  = $request->region;
        $personal_info->country  = $request->country;

        $personal_info->state = $request->state;
        $personal_info->city = $request->city;
        $personal_info->phone = $request->phone;
        $personal_info->address = $request->address;
        $personal_info->tc_vkn = $request->tc_vkn;
        $personal_info->bank_name  = $request->bank_name;
        $personal_info->iban    = $request->iban;
        $personal_info->category    = $request->category;
        $personal_info->currency_id    = $request->currency_id;
      $personal_info->seller_quotes_id =$request->seller_quotes_id;
      $personal_info ->regoion_id=$request->region_id;
     // $personal_info->seller_quotes =$request->seller_quotes;

        //  'fx_rate'  => $request->fx_rate,

        // 'trade_name'  => $request->trade_name,
        // 'company_type' => $request->company_type,
        $personal_info->mersis_no = $request->mersis_no;
        $personal_info->registration_number = $request->registration_number;
        $personal_info->taxe_admin  = $request->taxe_admin;
        $personal_info->taxe_number = $request->taxe_number;

        //  'image_path'=>$request->image_path,
        $personal_info->email = $request->email;
        $personal_info->password = Hash::make($request->password);

        if ($request->file('image_path')) {
            $picture       = !empty($request->file('image_path')) ? $request->file('image_path')->getClientOriginalName() : '';
            $request->file('image_path')->move(public_path('assets/images/'), $picture);
        }
        $personal_info->image_path        = isset($picture) && !empty($picture) ? $picture : '';
   $personal_info->save();


// $seller_quotes->users()->save($personal_info);






        event(new Registered($personal_info));


        Auth::login($personal_info);

        return redirect(RouteServiceProvider::HOME);
    }
}