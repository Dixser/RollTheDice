<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'campaign_id';
}
