@extends('brand_new.base')
@section('content')
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

@endsection