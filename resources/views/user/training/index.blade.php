@extends('layouts.traininglayout')
@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center">

  <div class="container" data-aos="zoom-in" data-aos-delay="100">
    <div class="col-lg-10">
      <h1>Learning Today,<br>Leading Tomorrow</h1>
      <h2>A joint initiative of the Government of India Department of Science & Technology (DST) and Indian Institute of Technology (IIT Roorkee).</h2>
      <a href="courses.html" class="btn-get-started">Get Started</a><br><br><br>

      <a href="index.html"><img src="/training-assets/assets/img/nmicpswhite.png" alt="" style="max-width: 130px;" class="img-fluid"></a>
      <a href="index.html"><img src="/training-assets/assets/img/dst-logo1.jpg" alt="" style="background-color: white;max-width: 250px;" class="img-fluid"></a>

    </div>
  </div>
</section><!-- End Hero -->

<main id="main">


  <section id="popular-courses" class="courses">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Courses</h2>
        <p>Featured Courses</p>
      </div>

      <div class="row" data-aos="zoom-in" data-aos-delay="100">

        @foreach($courses as $course)
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="course-item">
            <img src="./public/uploads/Courses/{{$course->image}}" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="{{$course->type == 1 ? 'different' : ''}}"> {{$course->type == 1 ? 'Certificate' : ' Internship'}}</h4>
                <p class="price">Rs. {{$course->fee}}/-</p>
              </div>

              <h3><a href="/training-courseDetails/{{$course->id}}">{{$course->title}}</a></h3>
              <p>{{$course->subtitle}}</p>
              <div class="trainer d-flex justify-content-between align-items-center">
                <div class="trainer-profile d-flex align-items-center">
                  <img src="./public/uploads/Company/{{returnCompanyimage($course->company_id)}}" class="img-fluid" alt="">
                  <span>{{returnCompanyName($course->company_id)}}</span>
                </div>
                <div class="trainer-rank d-flex align-items-center">
                  <i class="bx bx-user"></i>&nbsp;{{$course->enrolled}}
                  &nbsp;&nbsp;
                  <i class="bx bx-heart"></i>&nbsp;{{$course->favourites}}
                </div>
              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->

        @endforeach

      </div>

    </div>
  </section>

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img src="/training-assets/assets/img/ihub.gif" style="background-color: #2a2a72;
background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3>WHO WE ARE.</h3>
          <p class="fst-italic ">
            The hub will foster research innovation towards product/technology development and commercialization in CPS with relevant and next-generation Devices and Materials in the areas of
          </p>
          <ul class="d-flex justify-content-between health">
            <!-- <li><i class="bi bi-check-circle"></i> Smart Cities</li> -->
            <li><i class="bi bi-check-circle"></i> Healthcare.</li>
            <li><i class="bi bi-check-circle"></i> Industry 4.0.</li>
            <li><i class="bi bi-check-circle"></i> Smart Cities</li>
          </ul>
          <p style="text-align:justify; font-size: 14px;">
            The hub envisions that the smart devices and materials are the key enablers for CPS which includes sensors, actuators, computing, communication and control devices built on the smart engineering of the existing and novel materials intelligently coupled with frontier trends like artificial intelligence, machine learning, augmented/virtual reality etc. The ability to interact with cyber world and expand the capabilities of the physical world through smart devices and materials would be the core for future technology developments. The HUB will continuously identify research trends and need areas in the market place and Indian social sector and will liaison with both government and industries to map the needs with the key technologies developed in the HUB and working towards self-reliant India
          </p>

        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts section-bg">
    <div class="container">

      <div class="row counters">

        <div class="col-lg-3 col-6 text-center">
          <i class="fas fa-graduation-cap enlarge"></i>
          <span data-purecounter-start="0" data-purecounter-end="9556" data-purecounter-duration="1" class="purecounter"></span>
          <p>Students</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <i class="fas fa-book-reader enlarge"></i>
          <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
          <p>Courses</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <i class="fas fa-calendar-alt enlarge"></i>
          <span data-purecounter-start="0" data-purecounter-end="7" data-purecounter-duration="1" class="purecounter"></span>
          <p>Hackathon</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <i class="fas fa-chalkboard-teacher enlarge"></i>
          <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
          <p>Trainers</p>
        </div>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="content">
            <h3>Why Choose iHUB, IIT Roorkee?</h3>
            <p>
              Learn from IIT faculty and industry experts with 1:1 mentorship in this intensive online bootcamp. Top 2 performers from each batch may get a fellowship worth Rs. 80,000, plus the opportunity to showcase their startup ideas and secure incubation support of upto Rs. 50 Lakhs for their startup from iHUB DivyaSampark, IIT Roorkee.
            </p>
            <div class="text-center">
              <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-receipt"></i>
                  <h4>India's Best Mentors from IIT's and Industry</h4>
                  <!--  <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p> -->
                </div>
              </div>
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Easy Access to Industry Projects & Case Studies</h4>
                  <!-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p> -->
                </div>
              </div>
              <div class="col-xl-4 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <i class="bx bx-images"></i>
                  <h4>Designed for Working Professionals and Freshers</h4>
                  <!-- <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p> -->
                </div>
              </div>
            </div>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section><!-- End Why Us Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container" data-aos="fade-up">

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <div class="col-lg-3 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line" style="color: #ffbb2c;"></i>
            <h3><a href="">Online Bootcamp</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
            <h3><a href="">Practice Essential Tools</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
          <div class="icon-box">
            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
            <h3><a href="">Get Real-world Experience</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
            <h3><a href="">Live Course</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-database-2-line" style="color: #47aeff;"></i>
            <h3><a href="">Self Paced</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
            <h3><a href="">24*7 Support</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
            <h3><a href="">Press Release</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
            <h3><a href="">Collaborative Learning</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-anchor-line" style="color: #b2904f;"></i>
            <h3><a href="">Career Services</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-disc-line" style="color: #b20969;"></i>
            <h3><a href="">Hackathons</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-base-station-line" style="color: #ff5828;"></i>
            <h3><a href="">Class Notifications</a></h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 mt-4">
          <div class="icon-box">
            <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
            <h3><a href="">Job referrals & Interview experiences</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Features Section -->

  <!-- ======= Popular Courses Section ======= -->



  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Reviews</h2>
        <p>Testimonials</p>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
          @foreach($testimonials as $testimonial)
          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item manage">
                <img src="./public/uploads/HT/{{$testimonial->image}}" style="background-color: darkgray;object-fit: fill;" class="testimonial-img" alt="">
                <h3>
                  {{$testimonial->name}}
                </h3>
                <h4>
                  {{$testimonial->title}}
                </h4>
                <p>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  {!! $testimonial->description !!} <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div>
          @endforeach



        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

</main><!-- End #main -->
@endsection