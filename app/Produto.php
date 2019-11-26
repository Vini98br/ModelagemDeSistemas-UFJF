<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $guarded = [];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function fornecedor(){
        return $this->belongsTo('App\Fornecedor');
    }
}
