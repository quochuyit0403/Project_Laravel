<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="/template/assets/css/hoteldetail.css">
    <!-- JS -->
    <script src="/template/assets/js/main.js"></script>

     <!-- Link Swiper's CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>

    <!-- ======= Header ======= -->
    @include('header')


    <!--Slider-->
    <section class="Back_gr" data-aos="zoom-in-up">
        <img src=" {{ $hotel->thumb_1 }}">
    </section>
    <hr>

    @include('admin.alert')

    
    <section id="detail"> 
      <div class="main_left">
        <div class="left_title" data-aos="zoom-in-up">
          <h3>{{ $hotel->name }}</h3>
          <div class="title_star">
            <?php
              $rating = $hotel->star;
              for ($i = 1; $i <= $rating; $i ++) {
                echo '<i class="fa-solid fa-star"></i> ';
              }
            ?>
          </div>
        </div>
        <hr>

        <div class="left_title_next" data-aos="zoom-in-up">
          <h3>A few words of introduction</h3>
          <p>{{ $hotel->descriptions }}</p>
        </div>
        <hr>

        <div class="left_photo">
          <div class="photo_title" data-aos="fade-right">
            <i class="fa-solid fa-image"></i>
            <h3>Photos</h3>
          </div>
          <div class="left_images" data-aos="fade-right">
            <input type="radio" name="left_slide" id="img1" checked>
            <input type="radio" name="left_slide" id="img2">
            <input type="radio" name="left_slide" id="img3">
            <input type="radio" name="left_slide" id="img4">
            <img src="{{ $hotel->thumb_1 }}" class="m1" alt="img1">
            <img src="{{ $hotel->thumb_2 }}" class="m2" alt="img2">
            <img src="{{ $hotel->thumb_3 }}" class="m3" alt="img3">
            <img src="{{ $hotel->thumb_4 }}" class="m4" alt="img4">
          </div>
          <div class="dots">
            <label for="img1"></label>
            <label for="img2"></label>
            <label for="img3"></label>
            <label for="img4"></label>
          </div>
        </div>
        <hr>

        <div class="left_faq" data-aos="fade-right">
          <div class="faq_title">
            <i class="fa-solid fa-circle-question"></i>
            <h3 class="title_faq">FAQ</h3>
          </div>
          <div class="faq_tab">
            <input type="radio" name="faq_acc" id="faq_acc1">
            <label for="faq_acc1">
              <h5>What is the weather like in Da Nang?</h5>
            </label>
            <div class="faq_content">
              <p>The weather in Da Nang varies throughout the year. Summers (May to August) are hot with occasional rain. Winters (November to February) are mild. Spring and autumn offer pleasant temperatures.</p>
            </div>
          </div>

          <div class="faq_tab">
            <input type="radio" name="faq_acc" id="faq_acc2">
            <label for="faq_acc2">
              <h5>Are there any regulations regarding curfew times?</h5>
            </label>
            <div class="faq_content">
              <p>"All customers must comply with our curfew regulations. The curfew starts at 22:00 and ends at 06:00 the next day. During this time, all activities Noisy activities such as parties, loud music and other activities that may disturb others are not permitted. We ask that you understand and comply with this regulation to ensure a quiet environment. and comfort for all our customers."</p>
            </div>
          </div>

          <div class="faq_tab">
            <input type="radio" name="faq_acc" id="faq_acc3">
            <label for="faq_acc3">
              <h5>Can I bring pets?</h5>
            </label>
            <div class="faq_content">
              <p>We're sorry, but we currently do not accept pets at the hotel. This policy is established to ensure the comfort and security of all of our customers. However, if you have any other special requests or needs, please contact us so we can best assist you.</p>
            </div>
          </div>

          <div class="faq_tab">
            <input type="radio" name="faq_acc" id="faq_acc4">
            <label for="faq_acc4">
              <h5>Is there a swimming pool or fitness center?</h5>
            </label>
            <div class="faq_content">
              <p>Sure! Our hotel has a large and modern swimming pool, as well as a complete fitness center. The swimming pool is open from 6:00 a.m. to 10:00 p.m. daily, and the fitness center is available 24/7 to serve your workout needs. We hope that you will enjoy these wonderful amenities during your stay.</p>
            </div>
          </div>
        </div>
        <hr>
      </div>

      <div class="main_right">
        <div class="right_ques">
          <h4 data-aos="fade-left">Get a Question?</h4>
          <p data-aos="fade-left">If you encounter any problems, please contact us so that we can solve it as quickly as possible for you</p>
          <div class="right_ques_poem" data-aos="fade-left">
            <i class="fa-solid fa-phone"></i>
            <p>+84 766688287</p>
          </div>
          <div class="right_ques_poem" data-aos="fade-left">
            <i class="fa-solid fa-envelope"></i> 
            <p>kuhuylevan@gmail.com</p>
          </div>
        </div>

        <div class="form_book">
          <h3 data-aos="fade-left">Let's Book Hotel</h3>
          <form action="{{ route('bookroom') }}" method="post">
            <div class="input_box" data-aos="fade-left">
              <label>Full Name</label>
              <input type="text" name="name" placeholder="Enter full name" required>
            </div>
            <div class="input_box" data-aos="fade-left">
              <label>Email</label>
              <input type="email" name="email" placeholder="Enter email" required>
            </div>
            <div class="input_box" data-aos="fade-left">
              <label>Phone</label>
              <input type="text" name="phone" placeholder="Enter phone number" required>
            </div>
            <div class="input_box" data-aos="fade-left">
              <label>Check-in date </label>
              <input type="date" name="checkin" required>
            </div>
            <div class="input_box" data-aos="fade-left">
                <label>Check-out date </label>
                <input type="date" name="checkout" required>
              </div>
            <div class="input_box" data-aos="fade-left">
              <label>Number of rooms</label>
              <input type="number" name="room_qty" min="1" max="4" required>
            </div>
            <div class="input_box checkbox" data-aos="fade-left">
              <input type="checkbox">
              <label>I agree to the Terms and Services</label>
            </div>
            <div class="form_info" data-aos="fade-left">
              <p>Price from <span> ${{ $hotel->price }}</span></p>
            </div>
            <div class="btn_hotel" data-aos="fade-left">
              <button>Booking Room Hotel</button>
            </div>
            <input type="hidden" name="hotel_id" value="{{ $hotel->id }}">
            @csrf
          </form>
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