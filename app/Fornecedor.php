<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $guarded = [];

    public function compra(){
        return $this->belongsToMany('App\Compra');
    }

    public function produto(){
        return $this->belongsToMany('App\Produto');
    }
}
