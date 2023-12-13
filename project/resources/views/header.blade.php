    <!-- ======= Header ======= -->
    
    <header id="header" class="fixed-top show">
        <div class="container d-flex align-items-center justify-content-lg-between">

        <h1 class="logo me-auto me-lg-0"><a href="{{ route('main_page') }}">HV</a></h1>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
            <li><a class="nav-link scrollto active" href="{{ route('main_page') }}">Home</a></li>
            <li><a class="nav-link scrollto" href="#introductions">Introduction</a></li>
            <li class="dropdown"><a href="#"><span>Destinations</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                {!! \App\Helpers\Helpers::destinations($destinations) !!}
                <!-- <li><a href="#">Destinations 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                    <ul class = "dropdown_f1">
                        <li><a href="#">Deep Drop Down 1</a></li>
                        <li><a href="#">Deep Drop Down 2</a></li>
                        <li><a href="#">Deep Drop Down 3</a></li>
                        <li><a href="#">Deep Drop Down 4</a></li>
                        <li><a href="#">Deep Drop Down 5</a></li>
                    </ul>
                </li>
                <li><a href="#">Destinations 2</a></li>
                <li><a href="#">Destinations 3</a></li> -->
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="{{route('tour_page')}}">Tours</a></li>
            <li><a class="nav-link scrollto" href="{{route('hotel_page')}}">Hotels</a></li>
            <li><a class="nav-link scrollto" href="#contactus">Contact Us</a></li>
            </ul>
            
        </nav>
        <!-- .navbar -->

        <a href="#blank_intro" class="get-started-btn scrollto">Get Started</a>
        <div class="hamburger">
            <i class="bi bi-list mobile-nav-toggle"></i>
        </div>

        </div>
    </header><!-- End Header -->