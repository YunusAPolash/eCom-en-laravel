@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4 login-box m-auto mt-5 mb-5">
        <form>
    <h4>Login</h4>
    <div class="form-group mb-3">
        <label for="useremail" class="mb-2">Email Address</label>
        <input class="form-control" name="username" type="email" id="useremail" placeholder="Enter Your Email Here">
    </div>
    <div class="form-group mb-3">
        <label for="userpassword" class="mb-2">Password</label>
        <input class="form-control" type="password" name="userpassword" id="userpassword" placeholder="Enter Your Password">
    </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
        </div>
    </div>
</div>
@endsection