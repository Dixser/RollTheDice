<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaign;
use App\Character;
use App\Scene;
use App\Item;
use Auth;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\CampaignController;

class SceneController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function index()
    {
        $scenes = Scene::where("scenes.user_id",Auth::user()->id)
        ->join("campaigns","scenes.campaign_id","=","campaigns.campaign_id")
        ->join("characters","characters.char_id","=","scenes.char_id")
        ->select("campaigns.*","scenes.*","characters.char_name")->get();
        return view("scene.index", ["scenes"=>$scenes ]);
    }
    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $campaign = Campaign::where("campaign_id",request("campaign_id"))->first();
        
        if(request("campaign_password")==$campaign->campaign_password){
            if(Scene::where("user_id",Auth::user()->id)->first() == null){
                $scene = new Scene();
                $scene->campaign_id = request("campaign_id");
                $scene->char_id = request("char_id");
                $scene->user_id = Auth::user()->id;
                $scene->save();
                return redirect("/scene");
            }
            return redirect("/");
            
        }
        return redirect("/");
        
    }
    public function show($id)
    {
        $validation = Scene::where(
            'user_id', '=', Auth::user()->id
            )->where(
            'campaign_id', '=', $id
        )->first();
        if($validation == null){
            return redirect("/");
        }

        $character = Character::where("char_id",$validation->char_id)->first();
        $stats = $character->stats();
        $weapons = $character->weapons();
        $armors = $character->armors();
        $consumables = $character->consumables();
        return view("scene.game",["character"=>$character, "stats"=>$stats, "weapons" => $weapons,"armors" => $armors,"consumables" => $consumables,"campaign_id" => $id ]);

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
    public function master($id)
    {
        $validation = Campaign::where(
            'campaign_id', '=', $id
        )->first();
        if($validation->master != Auth::user()->username){
            return "No deberías estar aquí";
        }
        $characters = Scene::where("campaign_id",$id)
        ->join("characters","characters.char_id","=","scenes.char_id")
        ->get();
        $items = Item::all();
        $data = array();
        foreach ($characters as $c) {
            $char_data = array();
            $character = Character::where("char_id",$c->char_id)->first();
            array_push($char_data,$character);
            $stats = $character->stats();
            array_push($char_data,$stats);
            $weapons = $character->weapons();
            array_push($char_data,$weapons);
            $armors = $character->armors();
            array_push($char_data,$armors);
            $consumables = $character->consumables();
            array_push($char_data,$consumables);
            array_push($data,$char_data);
        }
        return view("master.game",[ "data" => $data, "items" => $items, "characters" => $characters, "id" => $id]);
    }
}
