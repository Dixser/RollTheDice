<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    protected $primaryKey = 'char_id';
    public $timestamps = false;
    public function getHP($class){
        switch($class){
            case "Mago":
                return 4;
            case "Arcano":
            case "Asesino":
            case "Juglar":
            case "Ladrón":
            case "Trovador":
                return 6;
            case "Clérigo":
            case "Druida":
                return 8;
            case "Caballero":
            case "Guerrero":
            case "Monje":
            case "Montaraz":
            case "Paladín":
                return 10;
            case "Bárbaro":
                return 12;
        }
    }
    public function raceStats($race){
        switch($race){
            case "Elfo":
                $this->charisma+=1;
                $this->dexerity+=1;
                $this->stamina-=1;
            break;
            case "Enano":
                $this->stamina+=1;
                $this->charisma-=1;
            break;
            case "Gnomo":
                $this->dexerity+=1;
                $this->intelligence+=1;
                $this->strength-=1;
            break;
            case "Mediano":
                $this->dexerity+=1;
                $this->strength-=1;
            break;
            case "Orco":
                $this->strength+=1;
                $this->stamina+=1;
                $this->intelligence-=1;
            break;
            case "Trasgo":
                $this->dexerity+=1;
                $this->stamina-=1;
            break;
        }
    }
}
