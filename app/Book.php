<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function shelf()
    {
      return $this->belongsTo(Shelf::class);
    }
}
