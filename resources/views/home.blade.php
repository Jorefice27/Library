@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Welcome {{ Auth::user()->username }}</h1>
                    @if(Auth::user()->librarian)
                      <h3>Librarian View</h3>
                      <a type="button" class="btn btn-default" href="add_books">Add Books</a>
                      <a type="button" class="btn btn-default" href="delete_books">Delete Books</a>
                      <a type="button" class="btn btn-default" href="borrow_history">View Borrow History</a>
                    @else

                    @endif
                    <a type="button" class="btn btn-default" href="shelves">View All Shleves</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
