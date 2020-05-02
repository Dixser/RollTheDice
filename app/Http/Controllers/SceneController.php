<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaign;
use App\Character;
use App\Scene;
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
    }
    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $campaign = Campaign::where("campaign_id",request("campaign_id"))->first();
        
        if(request("campaign_password")==$campaign->campaign_password){
            //$search = Scene::where("user_id",Auth::user()->id)->first();
            if(Scene::where("user_id",Auth::user()->id)->first() == null){
                $scene = new Scene();
                $scene->campaign_id = request("campaign_id");
                $scene->char_id = request("char_id");
                $scene->user_id = Auth::user()->id;
                $scene->save();
                return "OK";
            }
            return "Mal";
            
                //return redirect("/campaign");
        }
        
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
