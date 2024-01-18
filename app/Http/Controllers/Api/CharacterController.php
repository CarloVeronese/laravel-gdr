<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{


    public function index()
    {

        $characters = Character::with('items', 'type')->get();

        return response()->json([
            'success' => true,
            'results' => $characters
        ]);
    }

    public function show(Character $character)
    {

        $character->load('items', 'type');

        return response()->json([
            'success' => true,
            'results' => $character
        ]);
    }
}
