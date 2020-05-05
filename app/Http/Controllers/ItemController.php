<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Weapon;
use App\Armor;
use App\Consumable;
use Auth;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function index()
    {
        $weapons = Item::where("item_type","weapon")
        ->join("weapons","items.item_id","=","weapons.item_id")
        ->select("items.*","weapons.*")->get();
        $armors = Item::where("item_type","armor")
        ->join("armors","items.item_id","=","armors.item_id")
        ->select("items.*","armors.*")->get();
        $consumables = Item::where("item_type","consumable")
        ->join("consumables","items.item_id","=","consumables.item_id")
        ->select("items.*","consumables.*")->get();




        return view("item.index", ["weapons" => $weapons,"armors" => $armors,"consumables" => $consumables]);
    }
    public function create()
    {
        return view("item.create");
    }

    public function store(Request $request)
    {
        request()->validate([
            "item_name" => "required",
            "item_price" => "required",
            "item_type" => "required",
        ]);
        $item = new Item();
        $item->item_name = request("item_name");
        $item->item_price = request("item_price");
        $item->item_type = request("item_type");



        switch(request("item_type")){
            case "weapon":
                request()->validate([
                    "weapon_range" => "required",
                    "weapon_damage" => "required",
                    "weapon_type" => "required",
                    "hands" => "required",
                ]);
                $item->save();
                $weapon = new Weapon();
                $weapon->item_id = $item->id;
                $weapon->weapon_range = request("weapon_range");
                $weapon->weapon_damage = request("weapon_damage");
                $weapon->weapon_type = request("weapon_type");
                $weapon->weapon_hands = request("hands");
                $weapon->save();
            break;
            case "armor":
                request()->validate([
                    "armour" => "required",
                    "penality" => "required",
                    "body_part" => "required",
                ]);
                $item->save();
                $armor = new Armor();
                $armor->item_id = $item->id;
                $armor->armour = request("armour");
                $armor->penality = request("penality");
                $armor->body_part = request("body_part");
                $armor->save();
            break;
            case "consumable":
                request()->validate([
                    "description" => "required",
                ]);
                $item->save();
                $consumable = new Consumable();
                $consumable->item_id = $item->id;
                $consumable->description = request("description");
                $consumable->save();
            break;
        }

        return redirect()->action('ItemController@index');
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
