<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function shelf()
    {
      return $this->belongsTo(Shelf::class);
    }

    public function loan()
    {
      return $this->hasOne(Loan::class);
    }
}
