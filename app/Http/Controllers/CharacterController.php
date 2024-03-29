<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Character;
use App\Models\Type;
use Illuminate\Http\Request;
use App\Models\Item;

class CharacterController extends Controller
{


    public function index()
    {
        $characters = Character::all();

        return view('characters.index', compact('characters'));
    }

    public function show(Character $character)
    {
        return view('characters.show', compact('character'));
    }

    public function create()
    {
        $types = Type::orderBy('name', 'ASC')->get();
        $items = Item::orderBy('name', 'ASC')->get();
        return view('characters.create', compact('types', 'items'));
    }

    public function store(Request $request)
    {

        $data = $request->all();

        $newCharacter = Character::create($data);

        if($request->has('items')) {
            $newCharacter->items()->attach($data[
                'items'
            ]);
        } 

        return redirect()->route('characters.show', $newCharacter->id);
    }

    public function edit(Character $character)
    {
        $types = Type::orderBy('name', 'ASC')->get();
        $items = Item::orderBy('name', 'ASC')->get();

        return view('characters.edit', compact('character', 'types', 'items'));
    }

    public function update(Request $request, Character $character)

    {
        $data = $request->all();
        $character->update($data);
        if($request->has('items')) {
            $character->items()->sync($data[
                'items'
            ]);
        } else {
            $character->items()->detach();
        }
        return redirect()->route('characters.show', $character);
    }

    public function destroy(Character $character) {
        $character->delete();
        return redirect()->route('characters.index');
    }
}
