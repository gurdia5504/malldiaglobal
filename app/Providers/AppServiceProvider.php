<?php

namespace App\Providers;

use Dedoc\Scramble\Support\Generator\SecurityScheme;
use Dedoc\Scramble\Support\Generator\OpenApi;
use Dedoc\Scramble\Scramble;
use Illuminate\Routing\Route;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\HomeComposer;
use Illuminate\Pagination\Paginator;

use Illuminate\Support\Facades\{Blade, Gate, View};

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Scramble::routes(function (Route $route) {
            return Str::startsWith($route->uri, 'api/');
        });
        Scramble::extendOpenApi(function (OpenApi $openApi) {
            $openApi->secure(
                SecurityScheme::http('bearer', 'JWT')
            );
        });
        Gate::define('viewApiDocs', function (User $user) {
            return in_array($user->email, [
                'admin@malldiaglobal.com',
                'tech@malldiaglobal.com',
                'dev@malldiaglobal.com',
                'admin@gmail.com',
            ]);
        });

        View::composer(['front.layout', 'front.index'], HomeComposer::class);
        Paginator::defaultView('view-name');
        Paginator::defaultSimpleView('view-name');
        Paginator::useBootstrap();
        Blade::if('request', function ($url) {
            return request()->is($url);
        });
    }
}