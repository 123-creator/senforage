<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consommation extends Model
{
    protected $guarded = [];
   
    protected $primaryKey = 'idcons';


    public function Compteurs()
    {
        return $this->hasMany('App\Compteur','numC','idcons');
    }
}
