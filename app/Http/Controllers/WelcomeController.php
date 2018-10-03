<?php

namespace App\Http\Controllers;

use App\User;
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
        $record1 = User::orderBy('record1')->get();
        $record2 = User::orderBy('record2')->get();
        $record3 = User::orderBy('record3')->get();
        return view('welcome')->with('record1',$record1)->with('record2',$record2)->with('record3',$record3);
    }
}
