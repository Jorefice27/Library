<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShelfController extends Controller
{
    public function index()
    {
      $shelves = \App\Shelf::get();
      return view('shelves', compact('shelves'));
    }
}
