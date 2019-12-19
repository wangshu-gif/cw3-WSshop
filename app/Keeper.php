<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keeper extends Model
{
    //
    public function commodities()
    {
      return $this->belongsToMany('App\Commodity');
    }
}
