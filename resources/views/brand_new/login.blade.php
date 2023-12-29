@extends('brand_new.base')
@section('content')
<div class="login_container">
    <form action="{{url('/login')}}" method="post">
        @csrf
      <div class="form-group">
        <label for="email">E-Mail:</label>
        <input type="text" id="username" name="email" required>
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>

      <div class="form-group">
        <input type="submit" value="Log In">
      </div>
    </form>
     <div class="click_here"><h5>If you haven't account yet .... click <a href="{{url('/signup')}}">Here</a></h5></div>
  </div>
@endsection