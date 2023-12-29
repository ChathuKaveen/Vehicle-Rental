<section id="home" class="home">
    <nav class="navbar navbar-expand-sm ">
        <a href="" class="navbar-brand"><img src="/Photos/Logo.png"  width="250px" style="margin-left:10%"></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#ccsl"><span class="navbar-toggler-icon"></span></button>
        <div class="navbar navbar-collapse justify-content-center" id="ccsl">
        <ul class="navbar-nav item_navbar">
                    <li class="nav-item">
                        <a href="{{url('/')}}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/service')}}" class="nav-link">Service</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/about')}}" class="nav-link">AboutUs</a>
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