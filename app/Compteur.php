<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compteur extends Model
{
    protected $guarded = [];
    
    protected $primaryKey = 'numC';


    
    public function Consommation()
    {
        return $this->belongsTo('App\Consommation');
    }

    public function Abonnement()
    {
        return $this->hasMany('App\Abonnement');
    }
}
