<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Back\{

    MalldiaGelirleriController,
    WalletSalesCostStatementController,
    WalletSellerMoneyTransferListController,
    WalletSellersController,
    WalletOrderListController,
    SaticiGelirleriController,
    HavuzGelirleriController,

    SaticiDagitimOranlariController,

    ParaTransferleriIslemleriController,
    KampanyaKotalarController,
    CuzdanYoneticileriController,
    CountryStateCityController,
    RegionCountryStateCityController,
    APIController,

    HakedislerController,

    HomeDashboard,
};

use App\Http\Controllers\Front\{
    HomeController
};


use App\Http\Controllers\UserController;



////////////// Home Page////////////////
Route::get('/', function () {
    return view('front.home');
})->middleware('auth');
Route::name('home')->get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');




//////Users///////////////////////////////
Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index']);
    Route::get('/', [UserController::class, 'show']);
});

Route::resource('users', UserController::class);

/////////////////////Users////////////////////////////////

Route::prefix('users')->group(function () {
    Route::get('/AllUsers', [UserController::class, 'AllUsers']);

    Route::get('/detailUser/{id}', [UserController::class, 'detailUser']);
});

Route::get('advance', 'UserController@advance')->name('advance_search');

Route::get('user/{id}', [UserController::class, 'changeStatus']);
Route::get('/users/simple', 'UserController@simple')->name('simple_search');
Route::get('update_avatar', [UserController::class, 'update_avatar']);
Route::put('update_user', [UserController::class, 'update_user']);
//Route::get('change_password', [UserController::class, 'change_password']);
Route::post('change_password/{id}', [UserController::class , 'change_password']);
Route::put('update_address/{id}', [UserController::class, 'update_address']);
Route::put('avatar/{id}', [UserController::class, 'avatar']);

Route::get('users-filter', [\App\Http\Controllers\UserController::class, 'filter'])->name('users.filter');






Route::get('country-state-city', [CountryStateCityController::class, 'index']);
Route::post('get-countries-by-region', [CountryStateCityController::class, 'getCountry']);

Route::post('get-states-by-country', [CountryStateCityController::class, 'getState']);
Route::post('get-cities-by-state', [CountryStateCityController::class, 'getCity']);


/*
Route::get('country-state-city', [RegionCountryStateCityController::class, 'index']);
Route::post('get-countries-by-region', [RegionCountryStateCityController::class, 'getCountries']);
Route::post('get-states-by-country', [RegionCountryStateCityController::class, 'getState']);
Route::post('get-cities-by-state', [RegionCountryStateCityController::class, 'getCity']);
 */

////////////////Home Dashboard///////////////////
Route::resource('home', HomeDashboard::class);


////////////////Cüzdan Satıcıları///////////////////
Route::resource('WalletSellers', WalletSellersController::class);
Route::get('walletSellers-filter', [WalletSellersController::class, 'filter'])->name('walletSellers.filter');

Route::put('updateinfo', [WalletSellersController::class, 'updateinfo']);




////////////////Cüzdan Satıcıları Para Transfer İşlemleri/////////////////////////
Route::resource('walletSellerMoneyTransferLists', WalletSellerMoneyTransferListController::class);
Route::get('walletSellerMoneyTransferLists-filter', [WalletSellerMoneyTransferListController::class, 'filter'])->name('walletSellerMoneyTransferLists.filter');

Route::get('walletSellerMoneyTransferLists-individual', [WalletSellerMoneyTransferListController::class, 'individual'])->name('walletSellerMoneyTransferLists.individual');
Route::get('walletSellerMoneyTransferLists-corporate', [WalletSellerMoneyTransferListController::class, 'corporate'])->name('walletSellerMoneyTransferLists.corporate');
Route::get('walletSellerMoneyTransferLists-actifUser', [WalletSellerMoneyTransferListController::class, 'actifUser'])->name('walletSellerMoneyTransferLists.actifUser');
Route::get('walletSellerMoneyTransferLists-passifUser', [WalletSellerMoneyTransferListController::class, 'passifUser'])->name('walletSellerMoneyTransferLists.passifUser');




//////////////////Cüzdan Satış Maliyet Tablosu////////////
Route::resource('walletSalesCostStatements', WalletSalesCostStatementController::class);
Route::resource('walletOrderLists', WalletOrderListController::class);
Route::get('walletOrderLists-filter', [WalletOrderListController::class, 'filter'])->name('walletOrderLists.filter');

Route::get('walletOrderLists-individual', [WalletOrderListController::class, 'individual'])->name('walletOrderLists.individual');
Route::get('walletOrderLists-corporate', [WalletOrderListController::class, 'corporate'])->name('walletOrderLists.corporate');
Route::get('walletOrderLists-actifUser', [WalletOrderListController::class, 'actifUser'])->name('walletOrderLists.actifUser');
Route::get('walletOrderLists-passifUser', [WalletOrderListController::class, 'passifUser'])->name('walletOrderLists.passifUser');


//////////////////////// Malldia Gelirleris///////////////////////////
Route::get('malldiaGelirleris', [MalldiaGelirleriController::class, 'index'])->name('malldiaGelirleris.index');
Route::get('malldiaGelirleris-all_malldia', [MalldiaGelirleriController::class, 'all_malldia'])->name('malldiaGelirleris.all_malldia');
Route::get('malldiaGelirleris-tr_malldia', [MalldiaGelirleriController::class, 'tr_malldia'])->name('malldiaGelirleris.tr_malldia');
Route::get('malldiaGelirleris-ue_malldia', [MalldiaGelirleriController::class, 'ue_malldia'])->name('malldiaGelirleris.ue_malldia');
Route::get('malldiaGelirleris-usa_malldia', [MalldiaGelirleriController::class, 'usa_malldia'])->name('malldiaGelirleris.usa_malldia');
Route::get('malldiaGelirleris-asya_malldia', [MalldiaGelirleriController::class, 'asya_malldia'])->name('malldiaGelirleris.asya_malldia');

Route::get('malldiaGelirleris-filter', [MalldiaGelirleriController::class, 'filter'])->name('malldiaGelirleris.filter');
Route::get('malldiaGelirleris-individual', [MalldiaGelirleriController::class, 'individual'])->name('malldiaGelirleris.individual');
Route::get('malldiaGelirleris-corporate', [MalldiaGelirleriController::class, 'corporate'])->name('malldiaGelirleris.corporate');
Route::get('malldiaGelirleris-actifUser', [MalldiaGelirleriController::class, 'actifUser'])->name('malldiaGelirleris.actifUser');
Route::get('malldiaGelirleris-passifUser', [MalldiaGelirleriController::class, 'passifUser'])->name('malldiaGelirleris.passifUser');


//////////////////////// Satici Gelirleris/////////////////////////////////////////////////////////////////////////////////
Route::get('saticiGelirleris', [SaticiGelirleriController::class, 'index'])->name('saticiGelirleris.index');

Route::get('saticiGelirleris-all_satici', [SaticiGelirleriController::class, 'all_satici'])->name('saticiGelirleris.all_satici');
Route::get('saticiGelirleris-tr_satici', [SaticiGelirleriController::class, 'tr_satici'])->name('saticiGelirleris.tr_satici');
Route::get('saticiGelirleris-ue_satici', [SaticiGelirleriController::class, 'ue_satici'])->name('saticiGelirleris.ue_satici');
Route::get('saticiGelirleris-usa_satici', [SaticiGelirleriController::class, 'usa_satici'])->name('saticiGelirleris.usa_satici');
Route::get('saticiGelirleris-asya_satici', [SaticiGelirleriController::class, 'asya_satici'])->name('saticiGelirleris.asya_satici');

Route::get('saticiGelirleris-filter', [SaticiGelirleriController::class, 'filter'])->name('saticiGelirleris.filter');
Route::get('saticiGelirleris-individual', [SaticiGelirleriController::class, 'individual'])->name('saticiGelirleris.individual');
Route::get('saticiGelirleris-corporate', [SaticiGelirleriController::class, 'corporate'])->name('saticiGelirleris.corporate');
Route::get('saticiGelirleris-actifUser', [SaticiGelirleriController::class, 'actifUser'])->name('saticiGelirleris.actifUser');
Route::get('saticiGelirleris-passifUser', [SaticiGelirleriController::class, 'passifUser'])->name('saticiGelirleris.passifUser');




////////////////////////// Havuz Galirleris //////////////////////////////////////////////////////////////////////////////
Route::get('havuzGelirleris', [HavuzGelirleriController::class, 'index'])->name('havuzGelirleris.index');


Route::get('havuzGelirleris-tr_havuz', [HavuzGelirleriController::class, 'tr_havuz'])->name('havuzGelirleris.tr_havuz');
Route::get('havuzGelirleris-ue_havuz', [HavuzGelirleriController::class, 'ue_havuz'])->name('havuzGelirleris.ue_havuz');
Route::get('havuzGelirleris-usa_havuz', [HavuzGelirleriController::class, 'usa_havuz'])->name('havuzGelirleris.usa_havuz');
Route::get('havuzGelirleris-asya_havuz', [HavuzGelirleriController::class, 'asya_havuz'])->name('havuzGelirleris.asya_havuz');

Route::get('havuzGelirleris-filter', [HavuzGelirleriController::class, 'filter'])->name('havuzGelirleris.filter');
Route::get('havuzGelirleris-individual', [HavuzGelirleriController::class, 'individual'])->name('havuzGelirleris.individual');
Route::get('havuzGelirleris-corporate', [HavuzGelirleriController::class, 'corporate'])->name('havuzGelirleris.corporate');
Route::get('havuzGelirleris-actifUser', [HavuzGelirleriController::class, 'actifUser'])->name('havuzGelirleris.actifUser');
Route::get('havuzGelirleris-passifUser', [HavuzGelirleriController::class, 'passifUser'])->name('havuzGelirleris.passifUser');


////////////////////////// Sattici Dagitim Oranlari //////////////////////////////////////////////////////////////////////////////
Route::get('saticiDagitimOranlaris', [SaticiDagitimOranlariController::class, 'index'])->name('saticiDagitimOranlaris.index');


Route::get('saticiDagitimOranlaris-tr_havuz', [SaticiDagitimOranlariController::class, 'tr_havuz'])->name('saticiDagitimOranlaris.tr_havuz');
Route::get('saticiDagitimOranlaris-ue_havuz', [SaticiDagitimOranlariController::class, 'ue_havuz'])->name('saticiDagitimOranlaris.ue_havuz');
Route::get('saticiDagitimOranlaris-usa_havuz', [SaticiDagitimOranlariController::class, 'usa_havuz'])->name('saticiDagitimOranlaris.usa_havuz');
Route::get('saticiDagitimOranlaris-asya_havuz', [SaticiDagitimOranlariController::class, 'asya_havuz'])->name('saticiDagitimOranlaris.asya_havuz');

Route::get('saticiDagitimOranlaris-filter', [SaticiDagitimOranlariController::class, 'filter'])->name('saticiDagitimOranlaris.filter');
Route::get('saticiDagitimOranlaris-individual', [SaticiDagitimOranlariController::class, 'individual'])->name('saticiDagitimOranlaris.individual');
Route::get('saticiDagitimOranlaris-corporate', [SaticiDagitimOranlariController::class, 'corporate'])->name('saticiDagitimOranlaris.corporate');
Route::get('saticiDagitimOranlaris-actifUser', [SaticiDagitimOranlariController::class, 'actifUser'])->name('saticiDagitimOranlaris.actifUser');
Route::get('saticiDagitimOranlaris-passifUser', [SaticiDagitimOranlariController::class, 'passifUser'])->name('saticiDagitimOranlaris.passifUser');


////////////////////////// Hakedislers //////////////////////////////////////////////////////////////////////////////
Route::get('hakedislers', [HakedislerController::class, 'index'])->name('hakedislers.index');

Route::get('hakedislers-tr_havuz', [HakedislerController::class, 'tr_havuz'])->name('hakedislers.tr_havuz');
Route::get('hakedislers-ue_havuz', [HakedislerController::class, 'ue_havuz'])->name('hakedislers.ue_havuz');
Route::get('hakedislers-usa_havuz', [HakedislerController::class, 'usa_havuz'])->name('hakedislers.usa_havuz');
Route::get('hakedislers-asya_havuz', [HakedislerController::class, 'asya_havuz'])->name('hakedislers.asya_havuz');

Route::get('hakedislers-filter', [HakedislerController::class, 'filter'])->name('hakedislers.filter');
Route::get('hakedislers-individual', [HakedislerController::class, 'individual'])->name('hakedislers.individual');
Route::get('hakedislers-corporate', [HakedislerController::class, 'corporate'])->name('hakedislers.corporate');
Route::get('hakedislers-actifUser', [HakedislerController::class, 'actifUser'])->name('hakedislers.actifUser');
Route::get('hakedislers-passifUser', [HakedislerController::class, 'passifUser'])->name('hakedislers.passifUser');


////////////////////////// Para Transfer Islemleri //////////////////////////////////////////////////////////////////////////////
Route::get('paraTransferIslemleris', [ParaTransferleriIslemleriController::class, 'index'])->name('paraTransferIslemleris.index');

Route::get('paraTransferIslemleris-filter', [ParaTransferleriIslemleriController::class, 'filter'])->name('paraTransferIslemleris.filter');
Route::get('paraTransferIslemleris-individual', [ParaTransferleriIslemleriController::class, 'individual'])->name('paraTransferIslemleris.individual');
Route::get('paraTransferIslemleris-corporate', [ParaTransferleriIslemleriController::class, 'corporate'])->name('paraTransferIslemleris.corporate');
Route::get('paraTransferIslemleris-actifUser', [ParaTransferleriIslemleriController::class, 'actifUser'])->name('paraTransferIslemleris.actifUser');
Route::get('paraTransferIslemleris-passifUser', [ParaTransferleriIslemleriController::class, 'passifUser'])->name('paraTransferIslemleris.passifUser');





////////////////////////// Kampanya kotalar //////////////////////////////////////////////////////////////////////////////
Route::get('kampanyaKotalars', [KampanyaKotalarController::class, 'index'])->name('kampanyaKotalars.index');
//Route::put('kampanyaKotalars', [KampanyaKotalarController::class, 'index'])->name('kampanyaKotalars.index');
Route::put('update_kampanya', [KampanyaKotalarController::class, 'update_kampanya']);
Route::resource('kampanya', KampanyaKotalarController::class);



Route::get('kampanyaKotalars-tr_malldia', [KampanyaKotalarController::class, 'tr_malldia'])->name('kampanyaKotalars.tr_havuz');
Route::get('kampanyaKotalars-ue_malldia', [KampanyaKotalarController::class, 'ue_malldia'])->name('kampanyaKotalars.ue_havuz');




///////////////// ////////Cuzdan Yoneticileris//////////////////////////////////////////////////////////////////////
Route::get('cuzdanYoneticileris', [CuzdanYoneticileriController::class, 'index'])->name('cuzdanYoneticileris.index');

Route::get('cuzdanYoneticileris-filter', [CuzdanYoneticileriController::class, 'filter'])->name('cuzdanYoneticileris.filter');
Route::get('cuzdanYoneticilerisindividual', [CuzdanYoneticileriController::class, 'individual'])->name('cuzdanYoneticileris.individual');
Route::get('cuzdanYoneticileris-corporate', [CuzdanYoneticileriController::class, 'corporate'])->name('cuzdanYoneticileris.corporate');
Route::get('cuzdanYoneticileris-actifUser', [CuzdanYoneticileriController::class, 'actifUser'])->name('cuzdanYoneticileris.actifUser');
Route::get('cuzdanYoneticileris-passifUser', [CuzdanYoneticileriController::class, 'passifUser'])->name('cuzdanYoneticileris.passifUser');












Route::middleware('auth')->group(function () {
    Route::view('/admin', 'admin.dashboard.index');
});

////////BackEnd////////////////

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {

        Route::view('/admin', 'admin.dashboard.index');
    });
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';