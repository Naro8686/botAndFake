<?php

namespace App\Http\Controllers\Fake;

use App\Http\Controllers\Controller;

class DeliveryInfoController extends Controller
{
    public function __invoke($service, $locale)
    {
//        if ($locale === 'cz') $locale = 'cs';
//        $view = "fakes.$locale.delivery.$service";
//        if (view()->exists($view)) {
//            return view($view);
//        }
        abort(404);
    }
}
