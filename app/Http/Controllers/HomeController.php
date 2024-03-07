<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('index');
    }
    public function lead(){
        return view('lead');
    }
    public function customer(){
        return view('customer');
    }
    public function Staff(){
        return view('staff');
    }

    


}
