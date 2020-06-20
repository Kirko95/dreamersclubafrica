<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    //
    protected $fillable=['first_name','last_name','email','phone','package'];

    public function paret()
    {
        return $this->belongsTo('App/Paret');
    }
}
