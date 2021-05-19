<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaculateController extends Controller
{
    function index (){
        return view('index');
    }

    function caculate(Request $request){
        $input = $request->screen;
        $result = eval('return' . $input . ';');
        return view('index', compact('result'));
    }
}
