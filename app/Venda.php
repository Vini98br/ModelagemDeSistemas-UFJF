<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $guarded = [];
    
    public function cliente(){
        return $this->belongsTo('App\Cliente');
    }
}
