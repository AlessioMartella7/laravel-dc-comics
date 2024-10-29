<?php

namespace App\Http\Controllers;

use App\Models\Sword;
use Illuminate\Http\Request;

class SwordController extends Controller
{
    public function index(){
        $swords = Sword::all();
        return view('swords.index', compact('swords'));
    }
}
