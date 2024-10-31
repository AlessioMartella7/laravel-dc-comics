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

    public function show(string $id){
        $sword = Sword::findOrFail($id);
        return view('swords.show', compact('sword'));
    }

    public function create(){
        return view('swords.create');
    }

    public function store(Request $request){

        $swordData = $request->validate([
            'name' => 'required|string|min:2',
            'weight' => 'required|numeric|integer',
            'image' => 'required|url',
            'length' => 'required|numeric|integer',
            'material' => 'required|string|min:3',
            'type' => 'required|string|min:4',

        ]);

        $newSword = new Sword();
        $newSword->name = $swordData['name'];
        $newSword->weight = $swordData['weight'];
        $newSword->image = $swordData['image'];
        $newSword->length = $swordData['length'];
        $newSword->material = $swordData['material'];
        $newSword->type = $swordData['type'];

        $newSword->save();

        return redirect()->route('sword.index', ['id'=> $newSword->id]);
    }

    public function edit(string $id){
        $sword = Sword::findOrFail($id);
        return view('swords.edit', compact('sword'));
    }

    public function update(Request $request, string $id){
        $swordData = $request->all();
        $sword = Sword::findOrFail($id);
        $sword->update($swordData);

        return redirect()->route('sword.index');
    }

    public function destroy(string $id){
        $sword = Sword::findOrFail($id);
        $sword->delete();

        return redirect()->route('sword.index');
    }
}
