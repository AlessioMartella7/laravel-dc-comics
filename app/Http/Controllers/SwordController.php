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

    public function show($id){
        $sword = Sword::findOrFail($id);
        return view('swords.show', compact('sword'));
    }

    public function create(){
        return view('swords.create');
    }

    public function store(Request $request){
        $swordData = $request->all();

        $newSword = new Sword();
        $newSword->name = $swordData['name'];
        $newSword->weight = $swordData['weight'];
        $newSword->image = $swordData['image'];
        $newSword->length = $swordData['length'];
        $newSword->material = $swordData['material'];
        $newSword->type = $swordData['type'];

        $newSword->save();

        return redirect()->route('swords.index', ['id'=> $newSword->id]);
    }
}
