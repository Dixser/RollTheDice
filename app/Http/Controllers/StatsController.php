<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Stats;
class StatsController extends Controller
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

    }
    public function show($id)
    {
        
    }

    public function edit($id)
    {

    }
    public function update(Request $request, $id)
    {
        $stats = Stats::where("char_id",request("char_id"))->first();
        $campaign_id = request("campaign_id");
        $stats->level = request("level");
        $stats->gold = request("gold");
        $stats->armor = request("armor");
        $stats->current_health = request("current_health");
        $stats->max_health = request("max_health");
        $stats->strength = request("strength");
        $stats->dexerity = request("dexerity");
        $stats->stamina = request("stamina");
        $stats->wisdom = request("wisdom");
        $stats->intelligence = request("intelligence");
        $stats->charisma = request("charisma");
        $stats->save();
        return redirect("/master/$campaign_id");
    }
    public function destroy($id)
    {
        
    }

}
