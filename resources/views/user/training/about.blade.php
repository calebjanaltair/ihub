@extends('layouts.traininglayout')
@section('content')




  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>About Us</h2>
        <p>Aims to enable innovative ecosystem in cyber- physical systems (CPS) and becoming the source for the next generation of digital technologies, products and services by promoting translational research, enhancing core competencies, capacity building, training to provide solutions for national strategic sectors and becoming a key contributor to Digital India.</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{asset('/training-assets/assets/img/ihub.gif')}}" style="background: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%);" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" style="text-align:justify;">
            <h3>A joint initiative of the Government of India Department of Science & Technology (DST) and Indian Institute of Technology (IIT Roorkee).</h3>
            <p class="fst-italic">
              To become a key contributor to ‘Digital India’ and ‘Atma Nirbhar Bharat’ by promoting translational research, enhancing core competencies, capacity building, and training in CPS technologies to provide commercially viable solutions.
            </p>
            <ul class="listing">
              <li><i class="bi bi-check-circle"></i> <p class="m-0 pt-1">To foster research & innovation towards product or technology development and commercialization in CPS with relevant and next-generation smart Devices and smart Materials in the areas of Healthcare 4.0, Industry 4.0 and Smart Cities.</p></li>
              <li><i class="bi bi-check-circle"></i><p class="m-0 pt-1"> Continuously identify needed areas and provide solutionsby CPS technologies.</p></li>
              <li><i class="bi bi-check-circle"></i> <p class="m-0 pt-1">Support and encourage energetic, aspiring, talented, and young minds to become entrepreneurs.</p></li>
              <li><i class="bi bi-check-circle"></i> <p class="m-0 pt-1">Provide a world class interactive networked platform for all stakeholders in CPS innovation ecosystem.</p></li>
            </ul>
          
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
            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
            
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <i class="fas fa-book-reader enlarge"></i>
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <i class="fas fa-calendar-alt enlarge"></i>
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <i class="fas fa-chalkboard-teacher enlarge"></i> 
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Trainers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>NEWS & UPDATES</h2>
          <p>What are they saying</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            @foreach($aboutNewses as $aboutNews)
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{asset('/public/uploads/AN/' . $aboutNews->image)}}" style="background-color: darkgray;object-fit: fill;" class="testimonial-img" alt="">
                  <h3>{{$aboutNews->name}}</h3>
                  <h4>{{$aboutNews->title}}</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    {!! $aboutNews->description !!}<i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
            @endforeach

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->
  @endsection