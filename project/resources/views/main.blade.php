<!DOCTYPE html>
<html lang="en">
<head>
    @include('head')
</head>
<body>

    @include('header')

    <section class="next_head">
        <!-- Chèn Video vào -->
        <video autoplay loop muted plays-inline>
            <source src="/template/assets/video/video_web.mp4" type="video/mp4">
        </video>

        <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
        <h1><span class="auto-type"></span></h1>
        <p class="topic_cmt" data-aos="fade-down">Da Nang is one of the most livable cities in Vietnam. If you have the opportunity to come here, you will admire the most beautiful scenery of Danang nature!</p>
        <script>
            var typed = new Typed (".auto-type", {
                strings: ["Da Nang Travel"],
                typeSpeed: 150,
                backSpeed: 150,
                loop: true
            })
        </script>
        <div class="foot">
            <div class="foot1">
                <i class="fa-regular fa-square-check" data-aos="fade-in"></i>
                <p data-aos="fade-in">EXPLORE</p>
            </div>
            <div class="foot1">
                <i class="fa-regular fa-square-check" data-aos="fade-in"></i>
                <p data-aos="fade-in">EXPERIENCES</p>
            </div>
            <div class="foot1">
                <i class="fa-regular fa-square-check" data-aos="fade-in"></i>
                <p data-aos="fade-in">FREEDOM</p>
            </div>
            <div class="foot1">
                <i class="fa-regular fa-square-check" data-aos="fade-in"></i>
                <p data-aos="fade-in">MEMORY</p>
            </div>
        </div>
    </section>    

    <!-- Blank -->
    <div class="section-title">
        <h2 data-aos="fade-up">Introductions</h2>
        <p data-aos="fade-up">To Da Nang Tourism</p>
    </div>


    <!-- Introduction -->
    <div id="introductions" data-aos="fade-up">
        <div class="intro_container">
            <div id="intro_slide">
                <div class="intro_item" style="background-image: url(/template/assets/img/home/intro_backgr1.jpg);">
                    <div class="intro_content">
                        <div class="intro_name" >EXPLORE</div>
                        <div class="intro_des">
                            Da Nang is not only a tourist destination, but also a journey through time. Here, history and modernity meet, creating a rich picture of culture, architecture and people.
                        </div>
                    </div>
                </div>
                <div class="intro_item" style="background-image: url(/template/assets/img/home/intro_backgr2.jpg);">
                    <div class="intro_content">
                        <div class="intro_name">ENJOY</div>
                        <div class="intro_des">
                            The contrast between the delicate turnpike and the modernity of Da Nang creates a uniquely coordinated harmonic. Along the Han River, art bridges and modern architecture mark the city's progress
                        </div>
                    </div>
                </div>
                <div class="intro_item" style="background-image: url(/template/assets/img/home/intro_backgr3.jpg);">
                    <div class="intro_content">
                        <div class="intro_name">EXPERIENCES</div>
                        <div class="intro_des">
                            With its mysterious Ba Na Hills and picturesque Marble Mountains, Danang is a natural wonder of Vietnam-China. Here, mountains and waterfalls blend to create a wonderful picture of heaven and earth.
                        </div>
                    </div>
                </div>
                <div class="intro_item" style="background-image: url(/template/assets/img/home/intro_backgr4.jpg);">
                    <div class="intro_content">
                        <div class="intro_name">RELAX</div>
                        <div class="intro_des">
                            Danang, which is located between the majestic beauty of mountains and forests and gentle beaches. Immerse yourself in the harmonious scenery of nature and enjoy a peaceful moment in the midst of the hustle and bustle of life
                        </div>
                    </div>
                </div>
                <div class="intro_item" style="background-image: url(/template/assets/img/home/intro_backgr5.jpg);">
                    <div class="intro_content">
                        <div class="intro_name">UNDERSTANDING</div>
                        <div class="intro_des">
                            From traditional festivals to contemporary art events, Danang is a melting pot of many different cultures. Here, you will be immersed in a diverse and rich cultural world
                        </div>
                    </div>
                </div>
                <div class="intro_item" style="background-image: url(/template/assets/img/home/intro_backgr6.jpg);">
                    <div class="intro_content">
                        <div class="intro_name">SIGHTSEEING</div>
                        <div class="intro_des">With its prosperous economic situation and rapid development, Da Nang is a symbol of happiness and prosperity. Every corner of the city contains a story of success and a bright future</div>
                    </div>
                </div>
            </div>
            <div class="intro_but">
                <button id="intro_prev"><i class="fa-solid fa-arrow-left"></i></button>
                <button id="intro_next"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
    </div>



        <!--Services Start-->
        <section id="services" class="services">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Services</h2>
            <p>Check our Services</p>
          </div>
  
          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="fa-solid fa-hotel"></i></div>
                <h4><a href="">Affordable Hotel</a></h4>
                <p>Bring you the best experience with each hotel. Price doesn't matter!</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="fa-solid fa-utensils"></i></div>
                <h4><a href="">Food & Drinks</a></h4>
                <p>Savor exceptional flavors with our Food and Drink delights. Where taste meets perfection, price is not a barrier!</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box">
                <div class="icon"><i class="fa-brands fa-glide"></i></div>
                <h4><a href="">Saffy Guide</a></h4>
                <p>Your safety is our priority. Navigate worry-free with our Safety Guide – your trusted companion for a secure journey.</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                <h4><a href="">Around Da Nang</a></h4>
                <p>Explore Da Nang's charm with our curated guides. Uncover local gems and must-see spots Around Da Nang effortlessly</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="fa-solid fa-plane"></i></div>
                <h4><a href="">Fastest Travel</a></h4>
                <p>Optimize your time with our Fastest Travel solutions. Swift, efficient, and tailored for a seamless journey.</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box">
                <div class="icon"><i class="fa-brands fa-space-awesome"></i></div>
                <h4><a href="">Adventures</a></h4>
                <p>Embark on thrilling Adventures with us. Every moment promises excitement and discovery – your journey, your adventure!</p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Services Section -->
    

    <!-- Blank -->
        <div class="section-title">
            <h2 data-aos="fade-up">Choose your experiences</h2>
            <p data-aos="fade-up">TOP ATTRACTIONS DESTINATIONS</p>
            <button type="button" data-aos="fade-up"><span></span><a href="{{ route('destination_page') }}">View all Destinations</a></button>
        </div>


    <!-- Destination -->
    <div id="destinations">
        <div class="des_cover">
          @foreach($destinations as $destination)
            <div class="des_card" data-aos="flip-left">
                <img src="{{ $destination->thumb }}" class="des_card_img">
                <div class="des_card_body">
                    <h1 class="des_card_title">{{ $destination->name }}</h1>
                    <p class="des_card_info">{{ $destination->description }}</p>
                </div>
            </div>
          @endforeach   
            <!-- <div class="des_card" data-aos="flip-left">
                <img src="/template/assets/img/destination/des_p2.png" class="des_card_img">
                <div class="des_card_body">
                    <h1 class="des_card_title">SON TRA DISTRICT</h1>
                    <p class="des_card_info">Son Tra - The paradise of the sea and mountains in Da Nang. With its incredible peninsula, you will be fascinated by the unspoiled beauty of the sea and mountain landscape. This is a place for you to enjoy relaxation and peace in nature.</p>
    
                    <button class="des_card_btn">View All Tours</button>
                </div>
            </div>

            <div class="des_card" data-aos="flip-right">
                <img src="/template/assets/img/destination/des_p3.png" class="des_card_img">
                <div class="des_card_body">
                    <h1 class="des_card_title">HOA VANG DISTRICT</h1>
                    <p class="des_card_info">Hoa Vang - The land of majestic natural landscapes and rich culture. Here, you will have the opportunity to explore lush green forests, fresh rivers and traditional villages. Hoa Vang represents the harmony between people and nature in Da Nang</p>
    
                    <button class="des_card_btn">View All Tours</button>
                </div>
            </div>
    
            <div class="des_card" data-aos="flip-right">
                <img src="/template/assets/img/destination/des_p4.png" class="des_card_img">
                <div class="des_card_body">
                    <h1 class="des_card_title">THANH KHE DISTRICT</h1>
                    <p class="des_card_info">Thanh Khe – When you enter this district, you will see urban development and dynamism at every angle. But Thanh Khe is not only a place where modernity exists, but also a place where you can find the warmth and harmony of the local community</p>
    
                    <button class="des_card_btn">View All Tours</button>
                </div>
            </div> -->
        </div>
    </div>


        <!--Tours-->
    <div id="tours" data-aos="fade-in">
        <div class="blank_hotel">
            <h1 data-aos="fade-up-left">MOST POPULAR TOURS</h1>
            <button data-aos="fade-up-right" type="button"><span></span><a href="{{ route('tour_page') }}">View all Tours and Book Tours</a></button>
        </div>
        <div class="tour_row">
            <div class="tour_card01" data-aos="zoom-in-up">
                <div class="tour_face tour_front">
                    <img src="/template/assets/img/tour/tour_p2.jpg" alt="">
                </div>
                <div class="tour_face tour_back">
                    <h3>CU LAO CHAM</h3>
                    <p>Cù Lao Chàm, a gem near Da Nang, captivates with its pristine beaches - an ideal getaway for nature lovers.</p>
                    <div class="tour_link">
                      <a href="{{ route('tour_page') }}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="tour_card01" data-aos="zoom-in-up">
                <div class="tour_face tour_front">
                    <img src="/template/assets/img/tour/tour_p1.jpg" alt="">
                </div>
                <div class="tour_face tour_back">
                    <h3>BA NA HILLS</h3>
                    <p>Bà Nà Hills, nestled in Da Nang, captivates with cool climates and iconic attractions like the Golden Bridge.</p>
                    <div class="tour_link">
                      <a href="{{ route('tour_page') }}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="tour_card01" data-aos="zoom-in-up">
                <div class="tour_face tour_front">
                    <img src="/template/assets/img/tour/tour_p3.jpg" alt="">
                </div>
                <div class="tour_face tour_back">
                    <h3>NGU HANH SON</h3>
                    <p>Ngũ Hành Sơn, close to Da Nang, charms with marble mountains and sacred pagodas - a serene retreat</p>
                    <div class="tour_link">
                      <a href="{{ route('tour_page') }}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="tour_row">
            <div class="tour_card02" data-aos="zoom-in-up">
                <div class="tour_face2 tour_front2">
                    <img src="/template/assets/img/tour/tour_p4.jpg" alt="">
                </div>
                <div class="tour_face2 tour_back2">
                    <h3>CITY TOUR DA NANG</h3>
                    <p>Da Nang, a land, has long been known as one of the clean, beautiful and friendly cities. Not only that, Da Nang is also blessed with a lot of scenery as well as favorable climatic conditions.</p>
                    <div class="tour_link">
                      <a href="{{ route('tour_page') }}">Read More</a>
                    </div>
                </div>
            </div>
            <div class="tour_card02" data-aos="zoom-in-up">
                <div class="tour_face2 tour_front2">
                    <img src="/template/assets/img/tour/tour_p5.jpg" alt="">
                </div>
                <div class="tour_face2 tour_back2">
                    <h3>THAN TAI MOUNTAIN</h3>
                    <p>Than Tai Mountain Hot Spring Danang, located in the middle of green space, with wave lake, lazy river, water slide and hot spring, this is a destination not to be missed when traveling to Danang.</p>
                    <div class="tour_link">
                        <a href="{{ route('tour_page') }}">Read More</a>
                    </div>
                </div>
            </div> 
        </div>
    </div>


    <!--Hotels-->
    <div id="hotels">
        <div class="blank_hotel">
            <h1 data-aos="fade-up-right">MOST STANDARD HOTELS</h1>
            <button data-aos="fade-up-right" type="button"><span></span><a href="{{route('hotel_page')}}">View all Hotels and Book Rooms</a></button>
        </div>
    
        <div class="hotel_card" data-aos="zoom-in-up"  style="--clr:#ECD845">
            <div class="hotel_imgBx">
                <img src="/template/assets/img/hotel/hotels_p1.jpg" alt="">
            </div>
            <div class="hotel_content">
                <h2>Muong Thanh Luxury Hotel</h2>
                <p>
                    Muong Thanh Hotel in Da Nang is a stylish and contemporary accommodation, the city's attractions.
                </p>
                <!-- <div class="clock">
                    <i class="fa-regular fa-clock"></i>
                    <p>2 Days</p>
                </div> -->
                <div>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <a href="{{route('hotel_page')}}">Read More</a>
            </div>
        </div>

        <div class="hotel_card" data-aos="zoom-in-up" style="--clr:#03a9f4">
            <div class="hotel_imgBx">
                <img src="/template/assets/img/hotel/hotels_p2.jpg" alt="">
            </div>
            <div class="hotel_content">
                <h2>Da Nang Golden Bay</h2>
                <p><p>Located right at the intersection of Earth, Sky and Ocean, combining feng shui philosophy, golden ideas and the goal of bringing true tourists.</p>
                <div>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                </div>
                <a href="{{route('hotel_page')}}">Read More</a>
            </div>
        </div>

        <div class="hotel_card" data-aos="zoom-in-up" style="--clr: #00BED1">
            <div class="hotel_imgBx">
                <img src="/template/assets/img/hotel/hotels_p3.jpg" alt="">
            </div>
            <div class="hotel_content">
                <h2>Plaza Da Nang Viet Nam</h2>
                <p>As a leading coastal hotel complex in Da Nang, an extremely luxurious hotel built according to 5-star international standards.</p>
                <div>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-stroke"></i>
                </div>
                <a href="{{route('hotel_page')}}">Read More</a>
            </div>
        </div>
    </div>

    
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Team</h2>
            <p>Check our Team</p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="/template/assets/img/huy.jpg" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Le Van Quoc Huy</h4>
                  <span>Team Leader</span>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="200">
                <div class="member-img">
                  <img src="/template/assets/img/dung.jpg" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Tran Nguyen Tri Dung</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="300">
                <div class="member-img">
                  <img src="/template/assets/img/thanh.jpg" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Uong Ngoc Thanh</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="400">
                <div class="member-img">
                  <img src="/template/assets/img/binh.jpg" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Huynh Tran Nam Binh1</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Team Section -->



    <!-- ======= Contact us ======= -->
    <div id="contactus">
        <div class="cont_title">
            <h2 data-aos="fade-up">Contact</h2>
            <p data-aos="fade-up">Contact Us</p>
        </div>
        <div class="cont_box">
            <div class="cont_contact cont_form">
                <h3 data-aos="fade-up">Send a Message</h3>
                <form>
                    <div class="cont_formbox">
                        <div class="cont_row50" data-aos="fade-up">
                            <div class="cont_inputBox">
                                <span>First Name</span>
                                <input type="text" placeholder="Le Van Quoc">
                            </div>
                            <div class="cont_inputBox">
                                <span>Last Name</span>
                                <input type="text" placeholder="Huy">
                            </div>
                        </div>

                        <div class="cont_row50" data-aos="fade-up">
                            <div class="cont_inputBox">
                                <span>Email</span>
                                <input type="email" placeholder="huy@gmail.com">
                            </div>
                            <div class="cont_inputBox">
                                <span>Mobile</span>
                                <input type="text" placeholder="0766688287">
                            </div>
                        </div>

                        <div class="cont_row100" data-aos="fade-up">
                            <div class="cont_inputBox">
                                <span>Message</span>
                                <textarea placeholder="Write your message here..."></textarea>
                            </div>
                        </div>

                        <div class="cont_row100" data-aos="fade-up">
                            <div class="cont_inputBox">
                                <input type="submit" value="SEND">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="cont_contact cont_info" data-aos="flip-left">
                <h3>Contact Info</h3>
                <div class="cont_infobox">
                    <div>
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <p>159 Nguyen Co Thach, Ngu Hanh Son <br>DA NANG</p>
                    </div>
                    <div>
                        <span><i class="fa-solid fa-envelope"></i></span>
                        <a href="mailto:kuhuylevan@gmail.com">kuhuylevan@gmail.com</a>
                    </div>
                    <div>
                        <span><i class="fa-solid fa-phone"></i></span>
                        <a href="tel:0766688287">+84 766688287</a>
                    </div>
                </div>

                <!--Social Media Links-->
                <ul class="cont_sci">
                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                </ul>
            </div>
            <div class="cont_contact cont_map" data-aos="flip-left">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2231.4786071013464!2d108.25898775539662!3d16.01028152884388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314210b5dd79a20f%3A0xb4487a6473393809!2zMTU5IMSQLiBOZ3V54buFbiBDxqEgVGjhuqFjaCwgSG_DoCBI4bqjaSwgTmfFqSBIw6BuaCBTxqFuLCDEkMOgIE7hurVuZyA1NTAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1700022078967!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
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
  @include('footer')
</body>
</html>