<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $myvar = "Hello World!";
    function _construct(){

    }
    public function index(){
        //echo $this -> myvar; // -> ใช้แทน .

        return view ('newfolder.home');
    }
    public function store(Request $req){
        $data['myinput'] = $req->input('myinput');
        return view ('newroute',$data);

    }
}
