<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $fillable = [
        'money',
    ];
    public function transfers(){
        return $this->hasMany('App\Transfer');
    }
}
