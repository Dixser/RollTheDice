<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumable extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'item_id';
}
