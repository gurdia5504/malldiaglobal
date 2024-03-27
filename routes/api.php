<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\{UserController,
    WalletOrderListController,
    WalletSalesCostStatementController,
WalletSellerMoneyTransferListController

};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
///////////////////////////users///////////////////////////////////////////////////
Route::post('register', [AuthController::class, 'register']);

Route::post('change_password', [AuthController::class, 'change_password']);
Route::post('login', [AuthController::class, 'login']);
Route::post('forgotPassword', [AuthController::class, 'forgotPassword']);
Route::post('changepassword', [AuthController::class, 'changepassword']);
Route::post('resetpassword', [AuthController::class, 'resetpassword']);



Route::post('logout', [AuthController::class, 'logout']);

Route::post('details', [AuthController::class, 'details']);



//////////////////////API ////////////

/////////////////////Users////////////////////////////////

Route::prefix('users')->group(function () {
    Route::get('/AllUsers', [UserController::class, 'AllUsers']);

    Route::get('/detailUser/{id}', [UserController::class, 'detailUser']);
});



/////////////////////WalletOrders////////////////////////////////

Route::prefix('orders')->group(function () {
    Route::get('/AllOrders', [WalletOrderListController::class, 'AllOrders']);

 /*    Route::get('walletOrderLists-individual', [WalletOrderListController::class, 'individual'])->name('walletOrderLists.individual');
    Route::get('walletOrderLists-corporate', [WalletOrderListController::class, 'corporate'])->name('walletOrderLists.corporate');
    Route::get('walletOrderLists-actifUser', [WalletOrderListController::class, 'actifUser'])->name('walletOrderLists.actifUser');
    Route::get('walletOrderLists-passifUser', [WalletOrderListController::class, 'passifUser'])->name('walletOrderLists.passifUser');
 */



});
/////////////////////WalletSalleCosts////////////////////////////////

Route::prefix('walletCosts')->group(function () {
    Route::get('/AllWalletSalleCosts', [WalletSalesCostStatementController::class, 'AllWalletSalleCosts']);

/*

    Route::get('walletCosts-individual', [WalletSalesCostStatementController::class, 'individual'])->name('walletCosts.individual');
    Route::get('walletCosts-corporate', [WalletSalesCostStatementController::class, 'corporate'])->name('walletCosts.corporate');
    Route::get('walletCosts-actifUser', [WalletSalesCostStatementController::class, 'actifUser'])->name('walletCosts.actifUser');
    Route::get('walletCosts-passifUser', [WalletSalesCostStatementController::class, 'passifUser'])->name('walletCosts.passifUser');
 */


    Route::get('/detailWalleteSalleCost/{id}', [UserController::class, 'detailWalletSalleCost']);
});