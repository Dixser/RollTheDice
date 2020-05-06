<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scene extends Model
{
    public $timestamps = false;
    protected $fillable = ['campaign_id'];
    protected $primaryKey = 'campaign_id';
}
