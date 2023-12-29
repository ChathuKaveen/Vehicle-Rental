<!DOCTYPE>
<html>
    <head>
        <link rel="stylesheet" href="style.css" >
        <link rel="stylesheet" href="http://127.0.0.1:8000/bootstrap-5.3.0-dist/css/bootstrap.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body class="sign_in">
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
    </body>
</html>