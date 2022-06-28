<?php

namespace App\Http\Controllers;
use App\Models\Offer;
use Illuminate\Http\Request;

class CrudController extends Controller
{

    //insert static function
    // public function store(){

    //     Offer::create([

    //     'name'=>"Mohannad",
    //     'price'=>'250',
    //     'qty'=>'15',
    //     'details'=>'free'

    //     ]);
    // }


    //advanced insertiong \

    public function create()
    {
        return view('CRUD.create');
    }
        public function store(Request $request): Request
        {
        return $request;
        }

    // Offer:: create(
    //     [
    //         'name'=>'name',
    //         'price'=>'price',
    //         'qty'=>'qty',
    //         'details'=>'details'
    //     ]
    //     );



}
