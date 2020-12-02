<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Test2;
use App\Models\Test;

class Test2Controller extends Controller
{
    //
    public function index(){
        $values2 = Test2::all();
        $values = Test::all();


        return view('tests.test',compact(['values','values2']));
    }
}