<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Request;

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
        return view('characters.create');
    }

    public function store(Request $request)
    {

        $data = $request->all();

        $newCharachter = Character::create($data);

        return redirect()->route('characters.show', $newCharachter->id);
    }
}
