<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commodity extends Model
{
    //
    public function tag()
    {
      return $this->hasOne('App\Tag');
    }
    public function shelf()
    {
      return $this->belongsTo('App\Shelf');
    }
    public function keepers()
    {
      return $this->belongsToMany('App\Keeper');
    }
}
