<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Character;
class CharacterController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth");
    }
    
    public function index()
    {
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
            "hometown" => "required",
        ]);

        $character = new Character();
        $character->user_id = Auth::user()->id;
        $character->char_name = request("char_name");
        $character->race = request("race");
        $character->sex = request("sex");
        $character->class = request("class");
        $character->religion = request("religion");
        $character->hometown = request("hometown");

        $character->save();
        return view("home");
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
