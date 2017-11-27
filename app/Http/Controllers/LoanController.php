<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class LoanController extends Controller
{

    public function index()
    {
    	$loans = \App\Loan::get();
    	return view('borrow_history', compact('loans'));
    }

    public function return()
    {
    	$id = request('loanID');
    	$user = \App\User::where('id', request('userID'))->first();
    	$loan = \App\Loan::where('id', $id)->first();
    	$bookId = $loan->book()->first()->id;
    	$book = \App\Book::where('id', $bookId)->first();
    	$book->availability = 1;
    	$book->save();
    	$loan->returned_date = Carbon::now()->format('m-d-Y');
    	$loan->save();

    	$loans = \App\Loan::get();
    	return view('borrow_history', compact('loans'));
    }
}
