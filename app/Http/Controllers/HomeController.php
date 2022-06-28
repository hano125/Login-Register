<?php

namespace App\Http\Controllers;
use App\Models\Offer;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
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

    public function getOffers()
    {   
        //select all element from database but we alywes use name space line2
      return (offer::get());

    }
}
