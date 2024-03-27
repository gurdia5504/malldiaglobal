<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\AuthController;
use App\Http\Controllers\API\V1\Panel\WalletController;

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

// DDOS Protection
Route::middleware(['throttle:60,1', 'api_mode:true'])->group(function () {
    // Redirect to panel
    Route::get('v1/admin', function () {
        return redirect()->route('api.v1.panel.dashboard');
    });
    // All API Routes
    Route::prefix('v1')->as('api.v1.')->group(function () {
        // Auth
        Route::get('auth/logout/{id}', [AuthController::class, 'logout'])->name('auth.logout');
        Route::group([
            'prefix' => 'auth', 'as' => 'auth.',
            'middleware' => 'auth_check',
            'controller' => AuthController::class,
        ], function () {
            Route::group(['prefix' => 'login', 'as' => 'login.'], function () {
                Route::post('store', 'loginStore')->name('store');
            });
            Route::group(['prefix' => 'register', 'as' => 'register.'], function () {
                Route::post('store', 'registerStore')->name('store');
            });
        });
        // All Panel Routes
        Route::group(['prefix' => 'panel', 'as' => 'panel.', 'middleware' => 'auth:api'], function () {
            // Wallets
            Route::apiResource('wallets', WalletController::class)->except(['destroy', 'show'])
                ->middleware('role:tech|admin');
            Route::group([
                'prefix' => 'wallets', 'as' => 'wallets.',
                'controller' => WalletController::class,
            ], function () {
                Route::get('{id}', 'show')->name('show');
                Route::delete('destroy/{id}', 'destroy')->name('destroy');
            })->middleware('role:tech|admin');
        });
    });
});