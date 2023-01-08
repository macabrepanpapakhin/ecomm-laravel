@extends('master')
@section('content')
<div class="container custom-login">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <form action="/login" method="POST">
        @csrf
<div class="form-group">
  <label for="exampleFormControlInput1">Email address</label>
  <input type="email" class="form-control" name="email">
</div>
<div class="form-group">
  <label for="exampleFormControlInput1">Pasword</label>
  <input type="password" class="form-control" name="password">
</div>


    <button type="submit" class="btn btn-default">Login</button>

</form>
</div>
  </div>
</div>
@endsection