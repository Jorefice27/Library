@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Add Book</div>

        <div class="panel-body">
          <form method="POST" action="/add_books">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" id="name" name="name" class="form-control" required/>
            </div>

            <div class="form-group">
              <label for="name">Author</label>
              <input type="text" id="author" name="author" class="form-control" required/>
            </div>

            <div class="form-group">
              <label for="sel1">Shelf</label>
              <select class="form-control" id="shelf" name="shelf">
                <option>Art</option>
                <option>Science</option>
                <option>Sports</option>
                <option>Literature</option>
              </select>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-default pull-right">Submit</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>

</div>

@endsection
