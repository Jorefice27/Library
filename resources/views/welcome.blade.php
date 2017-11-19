 @extends('layouts.app')

 @section('content')
 
 <div class="container">
    <div class="row">
      <div class="col-md-12" align="center">
        <h1>Com S 319 Library</h1>
      </div>  
    </div>
    <br>
    <div class="row">
        <div class="col-md-4 col-md-offset-2">
            {{-- <a href="login"><h3>Login</h3></a> --}}
            <a class="btn btn-default btn-block" href="login" role="button">Login</a>
        </div>
        <div class="col-md-4">
            <a class="btn btn-default btn-block" href="register" role="button">Register</a>
        </div>
        <hr>
    </div>
    <hr>
</div>

 @endsection