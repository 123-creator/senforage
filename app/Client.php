<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];
    //
    protected $primaryKey = 'idC';

    public function Abonnement()
    {
        return $this->belongsTo('App\Abonnement');
    }
}
