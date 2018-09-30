<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $records = \Records::all();
        return view('welcome')->with('bd',$records);
    }
}