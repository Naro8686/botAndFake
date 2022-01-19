<?php

namespace App\Http\Controllers;

use App\Mail\SendEmailFake;
use App\Models\Category;
use App\Models\Fake;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $fake = Fake::whereHas('category',function ($query){
            $query->where('name',Category::VINTED);
        })->first();
        \Mail::to('dasdad@dasd.ru')->send(new SendEmailFake($fake));
        dd($fake);
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
