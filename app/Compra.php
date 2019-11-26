<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $guarded = [];    

    public function fornecedor(){
        return $this->belongsTo('App\Fornecedor');
    }
}
