@extends('brand_new.base')
@section('content')
<div class="container">
    <form method="post" action="{{url('/signup')}}">
      @csrf
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="first-name" name="name" required>
      </div>


      <div class="form-group">
        <label for="city">City:</label>
        <input type="text" id="city" name="city" required>
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="mobile">Mobile:</label>
        <input type="tel" id="mobile" name="mobile" required>
        
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="text" id="password" name="password" required>
        
      </div>

      <div class="form-group">
        <input type="submit" value="Sign Up">
      </div>
    </form>
  </div>
@endsection