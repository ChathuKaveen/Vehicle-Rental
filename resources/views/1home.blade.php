<!DOCTYPE html>
<html>
    <head>
        <title>Car Rental</title>
        <link rel="stylesheet" href="style.css" >
        <link rel="stylesheet" href="http://127.0.0.1:8000/bootstrap-5.3.0-dist/css/bootstrap.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body>
        
    <section id="home" class="home">
        <nav class="navbar navbar-expand-sm ">
            <a href="" class="navbar-brand"><img src="/Photos/Logo.png"  width="250px" style="margin-left:10%"></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#ccsl"><span class="navbar-toggler-icon"></span></button>
            <div class="navbar navbar-collapse justify-content-center" id="ccsl">
            <ul class="navbar-nav item_navbar">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/service')}}" class="nav-link">Service</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">AboutUs</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/vehicle')}}" class="nav-link">Vehicles</a>
                        </li>
                        @if(Session::has('user'))
                        <li class="dropdown">
                            <a class="dropdown-toggle name" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}<span class="caret"></span></a>
                            <ul class="dropdown-menu login_out">
                                <li><a href={{url('/logout')}}>Logout</a></li>
                                
                            </ul>
                        </li>
                        @else
                        <li class="nav-item">
                            <a href="{{url('/login')}}" class="nav-link Sign_in">LogIn</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/signup')}}" class="nav-link Sign_up">SignUp</a>
                        </li>

                        @endif
                        
                    </ul>
            </div>
        </nav>
    <!--Background main section-->

        <div class="container-lg main_sec">
            <div class="row">
                <div class="col-8">
                    <img src="/Photos/HomePageImg.png" class="back_img">
                </div>
                <div class="col-4">
                    <h1>LOOKING FOR A <b><span>RIDE</span></b></h1><br>
                    <a href="{{url('/vehicle')}}">Explore</a>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col">
                    <a href=" ">Explore</a>
                </div> -->
                </div>
        </div>
        
            

            
        </section>
<!--End of  background section-->
<!--Start of card/product section-->
        
         <section class="product">

         <img src="/Photos/not complted.png" class="Bck_opa">
        <div class="container d-flex flex-row card_con">
            <div class="card">
                <img class="card-img-top" src="/Photos/img1.png">
                <div class="card-body">
                    <h2 class="card-title">Drive Now</h2>
                    <div class="card-text">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Aperiam amet, ab sed ipsam laboriosam 
                    </div>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="/Photos/img2.png">
                <div class="card-body">
                    <h2 class="card-title">Find A Vehicle</h2>
                    <div class="card-text">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Aperiam amet, ab sed ipsam laboriosam 
                    </div>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="/Photos/img3.png">
                <div class="card-body">
                    <h2 class="card-title">Tell Us Where You Are</h2>
                    <div class="card-text">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Aperiam amet, ab sed ipsam laboriosam 
                        
                    </div>
                </div>
            </div>
        </div>
     </section> 
    <!--End of product section-->
<!-- Start of contact section -->
<section class="contact">
    <div class="Topic">
    <h1>Contacts</h1>
</div>
<div class="img_con">
    <img src="/Photos/Contact.png">
</div>
<div class="container">
    <div class="row row_name">
        <div class="col">
            <h1>We are here to <br><span class="help">HELP</span> you</br></h1>
        </div>
        
        <div class="col-8 column_btn">
            <a href="">Contact Us</a>
        </div>
    </div>

</div>
</section>
<!-- End of contact section -->

<!-- Start of about Section -->
<section class="about">
    <div class="container topic"><h1>About Us</h1></div>
    <div class="d-flex justify-content-center align-items-center">
        <div class="para"><p>Lorem, ipsum dolor sit amet consectetur 
            adipisicing elit. 
            Similique deleniti temporibus incidunt qui ipsa animi, 
            ullam magnam mollitia!</p></div>
        <div class="img_abt"><img src="/Photos/social1.png"></div>
    </div>
    
</section>
    </body>
</html>