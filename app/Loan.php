<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
  public function book()
  {
    return $this->belongsTo(\App\Book::class);
  }

  public function user()
  {
    return $this->belongsTo(\App\User::class);
  }
}
