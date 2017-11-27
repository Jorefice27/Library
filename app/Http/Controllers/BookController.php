<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

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
    }

    public function delete()
    {
      return view('delete_books');
    }

    public function remove(Request $r)
    {
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

    public function borrow()
    {
      $id = request('bookID');
      $user = \App\User::where('id', request('userID'))->first();
      $book = \App\Book::where('id', $id)->first();
      $book->availability = 0;
      $shelves = \App\Shelf::get();
      $loan = new \App\Loan();
      $loan->book_id = $book->id;
      $loan->due_date = Carbon::now()->addDays(7)->format('Y-m-d');
      $loan->user_id = $user->id;
      $loan->save();
      $book->loan()->save($loan);
      $book->save();
      $user->loans()->save($loan);

      return view('shelves', compact('shelves'));
    }
}
