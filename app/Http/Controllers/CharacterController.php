<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Character;
use App\Stats;
use App\Scene;
use App\Bag;
use Dompdf\Dompdf;
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
        $stats->char_id = $character->char_id;
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
        $character = Character::where("user_id",Auth::user()->id)->where("char_id",$id)->first();
        if($character==null){
            return redirect("/");
        }
        return view("character.edit",["character" => $character]);
    }
    public function update(Request $request, $id)
    {
        request()->validate([
            "char_name" => "required",
            "religion" => "required",
            "hometown" => "required",
        ]);
        $character = Character::where("char_id",$id)->first();
        $character->char_name = request("char_name");
        $character->religion = request("religion");
        $character->hometown = request("hometown");
        $character->save();
        return redirect("/character");
    }
    public function destroy($id)
    {
        Character::where("char_id",$id)->delete();
        Stats::where("char_id",$id)->delete();
        Scene::where("char_id",$id)->delete();
        Bag::where("char_id",$id)->delete();
    }
    public function pdf($id){

        $character = Character::where("user_id",Auth::user()->id)->where("char_id",$id)->first();
        if($character==null){
            return redirect("/");
        }
        $character = Character::where("characters.char_id",$id)->first();
        $stats = $character->stats();
        $weapons = $character->weapons();
        $armors = $character->armors();
        $consumables = $character->consumables();
        $pdf = app('dompdf.wrapper');
        $pdf->loadView("pdf.character",["character"=>$character, "stats"=>$stats, "weapons" => $weapons,"armors" => $armors,"consumables" => $consumables, ]);
        return $pdf->stream('archivo.pdf');
    }
}
