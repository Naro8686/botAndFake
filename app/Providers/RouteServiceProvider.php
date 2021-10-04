<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{

    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * The controller namespace for the application.
     *
     * When present, controller route declarations will automatically be prefixed with this namespace.
     *
     * @var string|null
     */
    protected $namespace = 'App\\Http\\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        $domain = config('app.domain', 'localhost');

        $this->configureRateLimiting();

        $this->routes(function () use ($domain) {

            $this->mapSubdomainRoutes($domain);

            Route::prefix('api')
                ->domain($domain)
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::prefix('telegram')
                //->domain($domain)
                ->name('telegram.')
                ->middleware('telegram')
                ->namespace("$this->namespace\\Telegram")
                ->group(base_path('routes/telegram.php'));

            Route::middleware('web')
                ->domain($domain)
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
//        RateLimiter::for('api', function (Request $request) {
//            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
//        });
    }

    protected function mapSubdomainRoutes($domain)
    {
        $subdomain = getSubDomain() ?? '{subdomain}';
        Route::group([
            'namespace' => "$this->namespace\\Fake",
            'domain' => "$subdomain.$domain",
            'middleware' => ["web", "removeSubdomainArgs"],
            'as' => "fake.",
        ], function () {
            require base_path('routes/fake.php');
        });
    }
}
