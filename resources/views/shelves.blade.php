@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Shelves</div>

        <div class="panel-body">
          @foreach($shelves as $shelf)
          <h2><a style="color: #000"role="button" data-toggle="collapse" href="#{{ $shelf->shelf_name}}Collapse" aria-expanded="false" aria-controls="collapseExample">{{ $shelf->shelf_name }}</a></h2>
          <div class="collapse" id="{{ $shelf->shelf_name }}Collapse">
            <table class="table table-bordered">
              <tr>
                <th>Book Id</th>
                <th>Book Name</th>
                <th>Author</th>
                <th>Availability</th>
                <th>Borrow?</th>
              </tr>
              @foreach($shelf->books()->get() as $book)
                <tr>
                  <td>{{ $book->id }}</td>
                  <td>{{ $book->book_name }}</td>
                  <td>{{ $book->author }}</td>
                  <td>{{ $book->availability }}</td>
                  @if($book->availability)
                    <td>
                      <form method="POST" action="/shelves">
                          {{ method_field('PATCH') }}
                          {{ csrf_field() }}
                          <input type="hidden" value="{{ $book->id }}" id="bookID" name="bookID">
                          <input type="hidden" value="{{ Auth::user()->id }}" id="userID" name="userID">
                          <button type="submit" class="btn btn-link">Borrow</button>
                      </form>
                    </td>
                  @else
                    <td></td>
                  @endif
                </tr>
              @endforeach
            </table>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>

</div>

@endsection
