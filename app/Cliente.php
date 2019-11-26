<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $guarded = [];
    
    public function venda(){
        return $this->belongsTo('App\Venda');
    }
}
