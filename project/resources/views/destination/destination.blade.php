<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')

    <!-- Template Main CSS File -->
    <link href="/template/assets/css/des.css" rel="stylesheet">
    
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
          <img src="/template/assets/img/destination/destination_back.jpg" data-aos="zoom-in-up">
          <div class="Back_gr_data">
            <h2 data-aos="zoom-in-up">DESTINATIONS</h2>
            <span class="Back_gr_text" data-aos="zoom-in-up">Explore tour by Destinations</span>
          </div>
    </section>


    <div id="destinations">
      <div class="des_cover">
        @foreach($destinations as $destination)
          <div class="des_card" data-aos="flip-left">
              <img src="{{ $destination->thumb }}" class="des_card_img">
              <div class="des_card_body">
                  <h1 class="des_card_title">{{ $destination->name }}</h1>
                  <p class="des_card_info"> {{ $destination->description }}</p>

                  <button class="des_card_btn"><a href="{{ route('tour_page') }}">View All Tours</a></button>
              </div>
          </div>
        @endforeach
  
          <!-- <div class="des_card" data-aos="flip-left">
              <img src="/template/assets/img/destination/des_p2.png" class="des_card_img">
              <div class="des_card_body">
                  <h1 class="des_card_title">SON TRA DISTRICT</h1>
                  <p class="des_card_info">Son Tra - The paradise of the sea and mountains in Da Nang. With its incredible peninsula, you will be fascinated by the unspoiled beauty of the sea and mountain landscape. This is a place for you to enjoy relaxation and peace in nature.</p>
  
                  <button class="des_card_btn"><a href="destination.html">View All Tours</a></button>
              </div>
          </div>

          <div class="des_card" data-aos="flip-left">
            <img src="/template/assets/img/destination/des_p5.jpg" class="des_card_img">
            <div class="des_card_body">
                <h1 class="des_card_title">HAI CHAU DISTRICT</h1>
                <p class="des_card_info">Hai Chau District in Da Nang City located in the South Central Coast region has many attractive and famous tourist destinations waiting for you to discover with extremely beautiful natural scenery, delicious dishes and places to hang out and typical culture here.</p>

                <button class="des_card_btn"><a href="destination.html">View All Tours</a></button>
            </div>
        </div>

          <div class="des_card" data-aos="flip-right">
            <img src="/template/assets/img/destination/des_p3.png" class="des_card_img">
            <div class="des_card_body">
                <h1 class="des_card_title">HOA VANG DISTRICT</h1>
                <p class="des_card_info">Hoa Vang - The land of majestic natural landscapes and rich culture. Here, you will have the opportunity to explore lush green forests, fresh rivers and traditional villages. Hoa Vang represents the harmony between people and nature in Da Nang</p>

                <button class="des_card_btn"><a href="destination.html">View All Tours</a></button>
            </div>
          </div>

          <div class="des_card" data-aos="flip-right">
            <img src="/template/assets/img/destination/des_p4.png" class="des_card_img">
            <div class="des_card_body">
                <h1 class="des_card_title">THANH KHE DISTRICT</h1>
                <p class="des_card_info">Thanh Khe – When you enter this district, you will see urban development and dynamism at every angle. But Thanh Khe is not only a place where modernity exists, but also a place where you can find the warmth and harmony of the local community</p>

                <button class="des_card_btn"><a href="destination.html">View All Tours</a></button>
            </div>
          </div> -->
      </div>
  </div>
    


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