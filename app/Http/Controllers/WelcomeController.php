<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\record;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    public function index()
    {
        $records = record::all();
        return view('welcome')->with('bd',$records);
    }
}
