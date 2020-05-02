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
        $campaigns = Campaign::all();
        $characters = Character::all()->where("user_id",Auth::user()->id);
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
        $campaign->chat_file = $campaign->master."_".$campaign->campaign_name.".txt";
        

        $campaign->save();
        return redirect()->action('CampaignController@index');
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

    public function master()
    {
        $campaigns = Campaign::all()->where("master",Auth::user()->username);
        return view("master.index", ["campaigns" => $campaigns]);
    }

}
