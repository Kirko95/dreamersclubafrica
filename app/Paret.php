<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paret extends Model
{
    //
    protected $fillable=['first_name','last_name','email','phone'];

    public function children()
    {
        return $this->hasMany('App\Child');
    }
}
