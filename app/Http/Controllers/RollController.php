<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Roll;
class RollController extends Controller
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
        
        $roll = new Roll();
        $roll->campaign_id = request("campaign_id");
        $roll->roll = request("roll");
        $roll->save();
        return response()->json(["sucess"=>"Data added."]);
    }
    public function show($id)
    {
        $rolls = Roll::where("campaign_id",$id)->get();
        return $rolls;
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
