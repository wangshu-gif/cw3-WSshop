<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shelf extends Model
{
    //
    public function commodities()
    {
      return $this->hasMany('App\Commodity');
    }
}
