<?php

namespace App\Providers;

use App\Models\Sendgrid;
use App\Custom\CustomMailManager;
use Illuminate\Mail\MailManager;
use Illuminate\Mail\MailServiceProvider;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class CustomMailServiceProvider extends MailServiceProvider
{

    protected function registerIlluminateMailer()
    {

        $this->app->singleton('mail.manager', function ($app) {
            return new CustomMailManager($app);
        });

        $this->app->bind('mailer', function ($app) {
            return $app->make('mail.manager')->mailer();
        });
    }
}
