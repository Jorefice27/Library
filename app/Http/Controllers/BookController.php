<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function add()
    {
      return view('add_books');
    }

    public function create(Request $r)//$name, $author, $shelf)
    {
      $book = new \App\Book();
      $book->book_name = $r->name;
      $book->author = $r->author;
      $book->availability = 1;
      $shelf = \App\Shelf::where('shelf_name', $r->shelf)->first();
      $book->shelf_id = $shelf->id;
      $book->save();
      $shelf->books()->save($book);
      $shelf->save();

      return view('home');
      // return $this->shelf()->save($book);
    }

    public function delete()
    {
      return view('delete_books');
    }

    public function remove(Request $r)
    {
      // \App\Book()::where('id', $r->id)->delete();
      $b = \App\Book::where('id', $r->id)->first();
      if($b != null)
      {
        $b->delete();
        return view('home');
      }
      else
      {
        echo "<script type='text/javascript'>alert('There is no book with that ID on record.');</script>";
        return view('delete_books');
      }
    }
}
