<!DOCTYPE>
<html>
    <head>
        <link rel="stylesheet" href="stylelogin.css" >
        <link rel="stylesheet" href="http://127.0.0.1:8000/bootstrap-5.3.0-dist/css/bootstrap.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
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
    </body>
</html>
