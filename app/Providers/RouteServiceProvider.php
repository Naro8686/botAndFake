<?php

namespace App\Providers;

use Artisan;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Throwable;

class RouteServiceProvider extends ServiceProvider
{

    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     *
     * @var string
     */
    public const HOME = '/';

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
        $this->configureRateLimiting();
        $this->routes(function () {
            try {
                $domain = config('app.domain', 'localhost');
                $bot_domain = config('app.bot_domain', 'localhost');
                $mentor_subdomain = config('app.mentor_subdomain', 'teacher');
                $subdomain = getSubDomain();
                $this->fakeRoutes("$subdomain.$domain");
                $this->telegramRoutes($bot_domain);
                $this->telegramRoutes($bot_domain);
                $this->authRoutes($domain);
                $this->mentorRoutes("$mentor_subdomain.$domain");
                $this->adminRoutes($bot_domain);
                $this->apiRoutes($domain);
            } catch (Throwable $exception) {

            }
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }

    protected function fakeRoutes($domain)
    {
        Route::group([
            'namespace' => "$this->namespace\\Fake",
            'domain' => $domain,
            'middleware' => ["web", "removeSubdomainArgs"],
            'as' => "fake.",
        ], function () {
            require base_path('routes/fake.php');
        });
    }

    protected function telegramRoutes($domain)
    {
        Route::prefix('telegram')
            ->name('telegram.')
            ->middleware(['telegram', 'lang:ru'])
            ->namespace("$this->namespace\\Telegram")
            ->group(base_path('routes/telegram.php'));
    }

    protected function adminRoutes($domain)
    {
        Route::group([
            'namespace' => $this->namespace,
            'domain' => $domain,
            'middleware' => ["web", "lang:ru"]
        ], function () {
            require base_path('routes/admin.php');
        });
    }

    protected function mentorRoutes($domain)
    {
        Route::group([
            'namespace' => $this->namespace,
            'domain' => $domain,
            'middleware' => ["web", "lang:ru"]
        ], function () {
            require base_path('routes/mentor.php');
        });
    }

    protected function apiRoutes($domain)
    {
        Route::prefix('api')
            ->middleware(['api', 'lang:ru'])
            ->namespace("$this->namespace\\Api")
            ->group(base_path('routes/api.php'));
    }

    protected function authRoutes($domain)
    {
        Route::middleware(['web', 'lang:ru'])
            ->namespace($this->namespace)
            ->group(base_path('routes/auth.php'));
    }
}
