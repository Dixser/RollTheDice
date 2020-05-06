<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'char_id';

    public function stats(){
        return Stats::where("char_id",$this->char_id)->first();
    }
    public function weapons(){
        return Bag::where("bags.char_id",$this->char_id)->
        where("items.item_type","weapon")
        ->join("items","items.item_id","=","bags.item_id")
        ->join("weapons","items.item_id","=","weapons.item_id")
        ->select("items.*","weapons.*")->get();
    }
    public function armors(){
        return Bag::where("bags.char_id",$this->char_id)->
        where("items.item_type","armor")
        ->join("items","items.item_id","=","bags.item_id")
        ->join("armors","items.item_id","=","armors.item_id")
        ->select("items.*","armors.*")->get();
    }
    public function consumables(){
        return Bag::where("bags.char_id",$this->char_id)->
        where("items.item_type","consumable")
        ->join("items","items.item_id","=","bags.item_id")
        ->join("consumables","items.item_id","=","consumables.item_id")
        ->select("items.*","consumables.*")->get();
    }
}
