<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function produto(){
        return $this->belongsToMany('App\Produto');
    }
}
