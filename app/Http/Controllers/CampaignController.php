<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campaign;
class CampaignController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {
        return view("campaign.index");
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
        $campaign->master_id = Auth::user()->id;
        $campaign->campaign_name = request("campaign_name");
        $campaign->campaign_password = request("campaign_password");
        $campaign->chat_file = $campaign->master_id."_".$campaign->campaign_name.".txt";
        

        $campaign->save();
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
