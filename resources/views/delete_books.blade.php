@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Delete Book</div>

        <div class="panel-body">
          <form method="POST" action="/delete_books">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="name">Book ID</label>
              <input type="text" id="id" name="id" class="form-control" required/>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-default pull-right">Delete Book</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection
