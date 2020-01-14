<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'numA';


    public function Client()
    {
        return $this->hasMany('App\Client');
    }

    public function Compteur()
    {
        return $this->belongsTo('App\Compteur');
    }
}
