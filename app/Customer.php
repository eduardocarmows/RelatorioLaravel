<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'city'];

    public function historicos(){
        return $this->hasMany('App/Customer');
    }
}
