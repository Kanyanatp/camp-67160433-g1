<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    private $myvalue;
    protected $myvalue2;
    public $myval = "";
    //Constructor
    //MyController()
    function __construct(){

    }

   function index(){
        return view('html101');
    }
    function info(){
       return view('myview.info');
    }
    function store(Request $request){
        $data = $request->all();
        return view('myview.result', compact('data'));
    }
}
