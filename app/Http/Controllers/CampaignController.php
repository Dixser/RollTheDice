<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaign;
use App\Character;
use App\Scene;
use App\Http\Controllers\CharacterController;
use Auth;
class CampaignController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        $campaigns = Campaign::select("*")->where("master","!=",Auth::user()->username)->get();
        $characters = Character::where("user_id",Auth::user()->id)->get();
        return view("campaign.index", ["campaigns" => $campaigns, "characters" => $characters]);
    }
    public function create()
    {
        return view("campaign.create");
    }

    public function store(Request $request)
    {
        request()->validate([
            "campaign_name" => "required",
            "campaign_password" => "required",
        ]);

        $campaign = new Campaign();
        $campaign->master = Auth::user()->username;
        $campaign->campaign_name = request("campaign_name");
        $campaign->campaign_password = request("campaign_password");        

        $campaign->save();
        return redirect()->action('CampaignController@master');
    }
    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $campaign = Campaign::where("master",Auth::user()->username)->where("campaign_id",$id)->first();
        if($campaign==null){
            return redirect("/");
        }
        return view("campaign.edit",["campaign" => $campaign]);
    }
    public function update(Request $request, $id)
    {
        request()->validate([
            "campaign_name" => "required",
            "campaign_password" => "required",
        ]);
        $campaign = Campaign::where("campaign_id",$id)->first();
        $campaign->campaign_name = request("campaign_name");
        $campaign->campaign_password = request("campaign_password");
        $campaign->save();
        return redirect("/master");
    }
    public function destroy($id)
    {
        $campaign = Campaign::where("campaign_id",$id)->first();
        $campaign->delete();
        $scene = Scene::where("campaign_id",$id)->get();
        foreach($scene as $char){
            $char->delete();
        }
        return redirect("/master");
    }

    public function master()
    {
        $campaigns = Campaign::all()->where("master",Auth::user()->username);
        return view("master.index", ["campaigns" => $campaigns]);
    }

}
