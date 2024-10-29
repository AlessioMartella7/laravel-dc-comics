<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SwordController extends Controller
{
    public function index(){
        return view('swords.index');
    }
}
