<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Character;
use App\Stats;
use Auth;
class CharacterController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth");
    }
    
    public function index()
    {
        $characters = Character::where("user_id",Auth::user()->id)
        ->join("stats","characters.char_id","=","stats.char_id")
        ->select("characters.*","stats.*")->get();
        return view("character.index", ["characters" => $characters]);
    }
    public function create()
    {
        return view("character.create");
    }

    public function store(Request $request)
    {
        request()->validate([
            "char_name" => "required",
            "race" => "required",
            "sex" => "required",
            "class" => "required",
            "religion" => "required",
            "alignment" => "required",
            "hometown" => "required",
        ]);

        $character = new Character();
        $character->user_id = Auth::user()->id;
        $character->char_name = request("char_name");
        $character->race = request("race");
        $character->sex = request("sex");
        $character->class = request("class");
        $character->alignment = request("alignment");
        $character->religion = request("religion");
        $character->hometown = request("hometown");
        $character->save();

        $stats = new Stats();
        $stats->char_id = $character->id;
        $stats->level = 1;
        $stats->strength = 8;
        $stats->dexerity = 8;
        $stats->stamina = 8;
        $stats->intelligence = 8;
        $stats->wisdom = 8;
        $stats->charisma = 8;
        $stats->current_health = $stats->getHP($character->class);
        $stats->max_health = $stats->getHP($character->class);
        $stats->armor = 0;
        $stats->gold = 150;
        $stats->raceStats($character->race);
        $stats->save();


        return redirect()->action('CharacterController@index');
    }
    public function show($id)
    {

    }

    public function edit($id)
    {
        
    }
    public function update(Request $request, $id)
    {
        
    }
    public function destroy($id)
    {
        
    }

}
