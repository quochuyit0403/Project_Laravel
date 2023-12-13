<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
    

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="/template/assets/css/tourdetail.css">
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
        <img src="{{ $place->thumb_1 }}" alt="">
    </section>
    <hr>
    @include('admin.alert')

    
    <section id="detail"> 
      <div class="main_left">
        <div class="left_title" data-aos="zoom-in-up">
          <h3>{{ $place->name }}</h3>
          <div class="title_star">
            <?php
              $rating = $place->star;
              for ($i = 1; $i <= $rating; $i ++) {
                echo '<i class="fa-solid fa-star"></i> ';
                  }
            ?>
          </div>
          <div class="title_info">
            <div class="title_info_f1">
              <i class="fa-regular fa-clock"></i>
              <p>{{ $place->day_number * 24}} Hours</p>
            </div>
            <div class="title_info_f1">
              <i class="fa-solid fa-people-group"></i>
              <p>Max Pepple: 30</p>
            </div>
            <div class="title_info_f1">
              <i class="fa-solid fa-wifi"></i>
              <p>Wifi Available</p>
            </div>
            <div class="title_info_f1">
              <i class="fa-regular fa-calendar"></i>
              <p>Dec - Jan</p>
            </div>
            <div class="title_info_f1">
              <i class="fa-solid fa-person"></i>
              <p>Min Age: 10+</p>
            </div>
            <div class="title_info_f1">
              <i class="fa-solid fa-plane"></i>
              <p>Pick up: Airpot</p>
            </div>
          </div>
        </div>
        <hr>

        <div class="left_title_next" data-aos="zoom-in-up">
          <h3>A few words of introduction</h3>
          <p>{{ $place->descriptions }}</p>
          <p>{{ $place->content }}</p>
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
            <img src="{{ $place->thumb_1 }}" class="m1" alt="img1">
            <img src="{{ $place->thumb_2 }}" class="m2" alt="img2">
            <img src="{{ $place->thumb_3 }}" class="m3" alt="img3">
            <img src="{{ $place->thumb_4 }}" class="m4" alt="img4">
          </div>
          <div class="dots">
            <label for="img1"></label>
            <label for="img2"></label>
            <label for="img3"></label>
            <label for="img4"></label>
          </div>
        </div>
        <hr>

        <div class="left_map">
          <div class="map_title" data-aos="fade-right">
            <i class="fa-solid fa-location-pin"></i>
            <h3>Map</h3>
          </div>
          <div class="cont_map" data-aos="fade-right">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245368.28264286026!2d107.91331347028394!3d16.071745991006676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219c792252a13%3A0x1df0cb4b86727e06!2zxJDDoCBO4bq1bmcsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1701775020033!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
              <h5>Which popular tourist spots in Danang are must-visit?</h5>
            </label>
            <div class="faq_content">
              <p>Da Nang boasts famous attractions like Marble Mountains, My Khe Beach, Dragon Bridge, and the ancient town of Hoi An nearby. Don't miss the scenic Hai Van Pass.</p>
            </div>
          </div>

          <div class="faq_tab">
            <input type="radio" name="faq_acc" id="faq_acc3">
            <label for="faq_acc3">
              <h5>How to move around the city and stay safe?</h5>
            </label>
            <div class="faq_content">
              <p>Da Nang has various transportation options, including taxis, Grab, and traditional cyclos. Renting a motorbike is common, but prioritize safety by wearing a helmet and following traffic rules.</p>
            </div>
          </div>

          <div class="faq_tab">
            <input type="radio" name="faq_acc" id="faq_acc4">
            <label for="faq_acc4">
              <h5>What are the delicious dishes to try when coming to Da Nang?</h5>
            </label>
            <div class="faq_content">
              <p>Indulge in local delicacies like Mi Quang (turmeric noodles), Banh Xeo (Vietnamese pancake), and Bun Cha Ca (fishcake noodle soup). Seafood options along My Khe Beach are also a must-try.</p>
            </div>
          </div>
        </div>
        <hr>
        <!-- <div class="left_relatedtour">
          <div class="relatedtour_title" data-aos="fade-right">
            <h3 class="title_related">Related Tours</h3>
          </div>
          <div class="left_tour_cover">
            <div class="left_tour_card" data-aos="zoom-in-up">
              <a href="tour_detail.html">
                  <img src="/template/assets/img/tour/tour_book1.jpg" class="left_tour_card_img">
              </a>
              <div class="left_tour_card_body">
                  <h1 class="left_tour_card_title"><a href="">City Tour Da Nang</a></h1>
                  <div class="left_tour_card_info">
                      <i class="fa-solid fa-clock"></i>
                      <p>2 days 1 night</p>
                  </div>
                  <div class="left_tour_star">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                  </div>
                  <div class="left_tour_foot">
                      <p>From</p>
                      <p class="left_tour_price">$100</p>
                  </div>
              </div>
            </div>

            <div class="left_tour_card" data-aos="zoom-in-up">
              <a href="tour_detail.html">
                  <img src="/template/assets/img/tour/tour_book1.jpg" class="left_tour_card_img">
              </a>
              <div class="left_tour_card_body">
                  <h1 class="left_tour_card_title"><a href="">City Tour Da Nang</a></h1>
                  <div class="left_tour_card_info">
                      <i class="fa-solid fa-clock"></i>
                      <p>2 days 1 night</p>
                  </div>
                  <div class="left_tour_star">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                  </div>
                  <div class="left_tour_foot">
                      <p>From</p>
                      <p class="left_tour_price">$100</p>
                  </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>

      <div class="main_right">
        <div class="right_reason">
          <h4 data-aos="fade-left">Why book with us?</h4>
          <div class="right_reason_poem" data-aos="fade-left">
            <i class="fa-solid fa-headphones"></i>
            Customer care available 24/7
          </div>
          <hr>
          <div class="right_reason_poem" data-aos="fade-left">
            <i class="fa-solid fa-heart"></i>
            Hand-picked Tours & Activities
          </div>
          <hr>
          <div class="right_reason_poem" data-aos="fade-left">
            <i class="fa-solid fa-code-commit"></i>
            Free Travel Insureance
          </div>
          <hr>
          <div class="right_reason_poem" data-aos="fade-left">
            <i class="fa-solid fa-money-bill"></i>
            No-hassle best price guarantee
          </div>
        </div>

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
          <h3 data-aos="fade-left">Let's Book Tour</h3>
          <form action="{{ route('booktour') }}" method="post">
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
              <label>Departure date</label>
              <input type="date" name="date" required>
            </div>
            <div class="input_box" data-aos="fade-left">
              <label>Number of participants</label>
              <input type="number" min="1" max="50" name="people_number" required>
            </div>
            <div class="input_box checkbox" data-aos="fade-left">
              <input type="checkbox">
              <label>I agree to the Terms and Services</label>
            </div>
            <div class="form_info" data-aos="fade-left">
              <p>Price from <span> ${{ $place->price }}</span></p>
            </div>
            <!--Neu nhu dia diem free thi an nut book tour di-->
            @if ($place->price != null) 
            <div class="btn_tour" data-aos="fade-left">
              <button type="submit">Booking Tour</button>
            </div>
            <input type="hidden" name="place_id" value="{{ $place->id }}">
            @endif
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
            <form action="">
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