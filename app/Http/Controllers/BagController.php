<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bag;
class BagController extends Controller
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
        
    }

    public function store(Request $request)
    {
        request()->validate([
            "char_id" => "required",
            "item_id" => "required",
        ]);
        $bag = new Bag();
        $bag->char_id = request("char_id");
        $bag->item_id = request("item_id");
        $bag->save();
        $id = request("campaign_id");
        return redirect("/master/$id");
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
    public function destroy(Request $request, $id)
    {
        $campaign_id = request("campaign_id");
        $char_id = request("char_id");
        Bag::where("char_id",$char_id)->where("item_id",$id)->delete();
        return redirect("/master/$campaign_id");
    }
}
