<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    public function Coms()
    {
      return $this->belongsToMany('App\Com');
    }
    
    public $timestamp = false;
}
