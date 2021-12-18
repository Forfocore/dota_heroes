<?php

namespace App\Http\Controllers;
use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{

    public function __construct() {}

    public function showAll() {
        $heroes = Hero::all();

        return response()->json($heroes, 200);
    }

    public function add(Request $request) {
        $name = $request->input("name");
        $type = $request->input("type");
        $start_ms = $request->input("start_ms");

        $hero = new Hero();
        $hero->name = $name;
        $hero->type = $type;
        $hero->start_ms = $start_ms;
        $hero->save();

        return response()->json($hero, 200);
    }

    public function edit(Request $request, $hero_id) {
        $name = $request->input("name");
        $type = $request->input("type");
        $start_ms = $request->input("start_ms");

        $hero = Hero::find($hero_id);
        $hero->name = $name;
        $hero->type = $type;
        $hero->start_ms = $start_ms;
        $hero->save();

        return response()->json($hero, 200);
    }

    public function show($hero_id) {
        $hero = Hero::find($hero_id);

        return response()->json($hero, 200);
    }

    public function delete($hero_id) {
        $hero = Hero::find($hero_id);
        $hero->delete();

        return response()->json(["Successfull deleted post"], 200);
    }
}
