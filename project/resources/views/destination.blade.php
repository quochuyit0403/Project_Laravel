<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')

    <!-- Template Main CSS File -->
    <link href="/template/assets/css/tour.css" rel="stylesheet">
    
    <!-- JS -->
    <script src="/template/assets/js/main.js"></script>

     <!-- Link Swiper's CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>

    <!-- ======= Header ======= -->
    @include('header')


    <!--Slider-->
    <section class="Back_gr">
        <img data-aos="zoom-in-up" src="{{$destination -> thumb}}">
        <div class="Back_gr_data">
            <h2 data-aos="zoom-in-up">{{$destination -> name}}</h2>
            <span data-aos="zoom-in-up" class="Back_gr_text">Choose your experience. Wish you happiness with your trip.</span>
            <div class="box_cover" data-aos="zoom-in-up">
                <div class="box">
                    <input type="text" placeholder="Search tour...">
                    <a href="#">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    
    <!-- <div>
        @yield('content')
    </div> -->


    <section class="tour_list">
        <div class="tour_cover">
        @foreach($places as $key => $place)
            <div class="tour_card" data-aos="zoom-in-up">
                <a href="{{ route('detail_tour', ['id' => $place->id]) }}">
                    <img src="{{ $place->thumb }}" class="tour_card_img">
                </a>
                <div class="tour_card_body">
                    <h1 class="tour_card_title"><a href="">{{ $place->name }}</a></h1>
                    <div class="tour_card_info">
                        <i class="fa-solid fa-clock"></i>
                        <p>{{ $place->day_number }} days</p>
                    </div>
                    <div class="tour_star">
                        <?php
                            $rating = $place->star;
                            for ($i = 1; $i <= $rating; $i ++) {
                                echo '<i class="fa-solid fa-star"></i> ';
                            }
                        ?>
                    </div>
                    <div class="tour_foot">
                        <p>From</p>
                        <p class="tour_price">${{ $place->price }}</p>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </section>

    <section class="client">
        <div class="section__container client__container">
          <h2 class="section__header" data-aos="zoom-in-down">What our client say?</h2>
          <div class="client__grid">
            <div class="client__card" data-aos="zoom-in-up">
              <img data-aos="zoom-in-down" src="/template/assets/img/client/client-1_hotel.jpg" alt="client" />
              <p data-aos="zoom-in-down">
                The booking process was seamless, and the confirmation was
                instant. I highly recommend WDM&Co for hassle-free hotel bookings.
              </p>
            </div>
            <div class="client__card" data-aos="zoom-in-up">
              <img data-aos="zoom-in-down" src="/template/assets/img/client/client-2_hotel.jpg" alt="client" />
              <p data-aos="zoom-in-down">
                The website provided detailed information about hotel, including
                amenities, photos, which helped me make an informed decision.
              </p>
            </div>
            <div class="client__card" data-aos="zoom-in-up">
              <img data-aos="zoom-in-down" src="/template/assets/img/client/client-3_hotel.jpg" alt="client" />
              <p data-aos="zoom-in-down">
                I was able to book a room within minutes, and the hotel exceeded
                my expectations. I appreciate WDM&Co's efficiency and reliability.
              </p>
            </div>
          </div>
        </div>
      </section>
    


    <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info" data-aos="flip-right">
              <h3>HV</h3>
              <p>
                159 Nguyen Co Thach <br>
                Ngu Hanh Son, Da Nang<br><br>
                <strong>Phone:</strong> +84 766688287<br>
                <strong>Email:</strong> huy@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links" data-aos="flip-right">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Introduction</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Destinations</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tours</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Hotels</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links" data-aos="flip-right">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter" data-aos="flip-right">
            <h4>Our Newsletter</h4>
            <p>Subscribe to the site to receive the latest alerts</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>HV</span></strong> All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
        Designed by <a href="https://www.facebook.com/profile.php?id=100031398211869">Le Van Quoc Huy</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <!--Link JS để xử lí scroll-->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
        duration: 1400,
        once: true
    });
  </script>
</body>
</html>