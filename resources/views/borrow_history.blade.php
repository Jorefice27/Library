@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Loans</div>

        <div class="panel-body">
          <table class="table table-bordered"> 
            <tr>
              <th>Book Title</th>
              <th>User</th>
              <th>Due Date</th>
              <th>Returned Date</th>
            </tr>
            @foreach($loans as $loan)
              <tr>
                <td>{{ $loan->book()->first()->book_name }}</td>
                <td>{{ $loan->user()->first()->username }}</td>
                <td>{{ $loan->due_date }}</td>
                @if($loan->returned_date != null)
                  <td>{{ $loan->returned_date }}</td>
                @else
                  <td>
                    <form method="POST" action="/borrow_history">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <input type="hidden" value="{{ $loan->id }}" id="bookID" name="loanID">
                        <input type="hidden" value="{{ Auth::user()->id }}" id="userID" name="userID">
                        <button type="submit" class="btn btn-link">Return</button>
                    </form>
                  </td>
                @endif
              </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection
