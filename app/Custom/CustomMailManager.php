<?php

namespace App\Custom;

use App\Models\Sendgrid;
use DB;
use Illuminate\Mail\MailManager;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

class CustomMailManager extends MailManager
{
    public function __construct($app)
    {
        parent::__construct($app);
        $default = $this->getDefaultDriver();
        if ($default === 'sendgrid' && $sendgrid = DB::table('sendgrids')->first()) {
            Config::set("mail.mailers.$default.password", $sendgrid->token);
        }
    }
}