@extends('layouts.traininglayout')
@section('content')

<style>
  .search-box {
    text-align: right;
    margin-top: 20px;
  }

  #searchInput {
    width: 60%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  .card-img-top {
    width: 100%;
    height: 250px;
    overflow: hidden;
  }
</style>
<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container my-4">
      <h2>Courses</h2>
      <p>We at iHUB DivyaSampark are here to develop highly knowledgeable human resources with top-order skills and we
        strongly believe that young innovative minds have huge potential to transform the world. </p>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Courses Section ======= -->
  <section id="courses" class="courses my-4">
    <div class="container" data-aos="fade-up">

      <div class="row section-title">
        <div class="col-md-6">
          <h2>Courses</h2>
          <p>All Courses</p>
        </div>
        <!-- <div class="col-md-6 float-end">
          <div class="search-box ">
            <input type="text" id="searchInput" placeholder="Search by title or company...">
          </div>
        </div> -->
      </div>
      <!-- <div id="filteredCourses" class="row" data-aos="zoom-in" data-aos-delay="100"></div> -->
      <div class="row" data-aos="zoom-in" data-aos-delay="100">

        @foreach($courses as $course)
        <div class="col-lg-4 col-md-6 mt-4 d-flex align-items-stretch">
          <div class="course-item">
            <img src="{{asset('/public/uploads/Courses/' . $course->image)}}" class="card-img-top" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="{{$course->type == 1 ? 'different' : ''}}"> {{$course->type == 1 ? 'Certificate' : ' Internship'}}</h4>
                <p class="price">Rs. {{$course->fee}}/-</p>
              </div>

              <h3><a href="{{ route('training.courseDetails', ['id' => $course->id]) }}">{{$course->title}}</a></h3>
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
  </section><!-- End Courses Section -->





  <section class="outerrr my-4">
    <div class="container my-4">
      <div class="row my-4">
        <div class="section-title p-0 my-4">
          <h2>NEWS & UPDATES</h2>
          <p>Career Transitions</p>
        </div>
        <div class="col-lg-7">

          <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">
              <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  @foreach($testimonials as $testimonial)
                  <div class="carousel-item 
                    @if($loop->first)
                    active
                    @endif
                  ">
                    <!-- Testimonial 1 -->
                    <div class="swiper-slide">
                      <div class="testimonial-wrap">
                        <div class="testimonial-item manage">
                          <img src="{{asset('/public/uploads/Coursetransition/' . $testimonial->image)}}"  style="background-color: darkgray; object-fit: fill;" class="testimonial-img" alt="">
                          <h3>{{$testimonial->name}}</h3>
                          <h4>{{$testimonial->title}}</h4>
                          <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            {!! $testimonial->description !!} <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                          </p>
                        </div>
                      </div>
                    </div>

                  </div>
                  @endforeach

                </div>
                <ol class="carousel-indicators">
                  <li data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0" class="active"></li>
                  <li data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1"></li>
                  <li data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2"></li>
                </ol>
              </div>




            </div>
          </section>
        </div>
        <div class="col-lg-5">
          <div class="master-career-transition-right-section">
            <div class="master-career-transition-right-section-item">
              <div class="master-career-transition-right-icon"><svg width="40" height="40" fill="none" stroke="#03a9f4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M16.5 6.75h5.25V12"></path>
                  <path d="m2.25 17.25 5.69-5.69a1.5 1.5 0 0 1 2.12 0l2.38 2.38a1.5 1.5 0 0 0 2.12 0L21 7.5"></path>
                </svg></div>
              <p><b>55%</b> Average Salary Hike</p>
            </div>
            <div class="master-career-transition-right-section-item">
              <div class="master-career-transition-right-icon"><svg width="40" height="40" fill="#b8e785" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="m17.25 3-1.083 3.845L14 7.976l2.167 1.131L17.25 12.5l1.083-3.393 2.167-1.13-2.167-1.132L17.25 3Z">
                  </path>
                  <path d="m10 6-.5 2-1.5.5 1.5.5.5 2 .5-2 1.5-.5-1.5-.5-.5-2Z"></path>
                  <path d="M3 15a.5.5 0 0 1 .5-.5H5a.5.5 0 0 1 .5.5v5.498a.5.5 0 0 1-.5.5H3.5a.5.5 0 0 1-.5-.5V15Z">
                  </path>
                  <path d="M8.853 14.594c.466-.212 1.604 0 1.604 0l3.313.744s.829.265 1.605.265c.777 0 .313 1.063-.207 1.434-.52.37-.897.35-.897.35l-2.675-.032s2.33.425 3.21.478c.446.027 1.21-.286 2.065-.637.832-.342 1.75-.718 2.542-.85 1.605-.265 1.864 1.169 1.346 1.7-.518.53-4.659 2.548-5.384 2.814-.567.208-1.254.139-2.028.061a27.05 27.05 0 0 0-.664-.061c-.904-.069-1.595-.288-2.28-.506-.733-.233-1.459-.464-2.43-.503-.326-.013-1.09.027-1.473.05v-4.43c.663-.236 2.006-.719 2.353-.877Z">
                  </path>
                </svg></div>
              <p><b>$1,27,000</b> Highest Salary</p>
              <p></p>
            </div>
            <div class="master-career-transition-right-section-item">
              <div class="master-career-transition-right-icon">
                <svg width="40" height="40" fill="#f5c71f" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6 19.2s-1.2 0-1.2-1.2S6 13.2 12 13.2s7.2 3.6 7.2 4.8c0 1.2-1.2 1.2-1.2 1.2H6Zm6-7.2a3.6 3.6 0 1 0 0-7.2 3.6 3.6 0 0 0 0 7.2Z">
                  </path>
                </svg>
              </div>
              <p><b>800+</b> Career Transitions</p>
            </div>
            <div class="master-career-transition-right-section-item">
              <div class="master-career-transition-right-icon"><svg width="40" height="40" fill="#57a4ff" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M20.137 9.8c-.706-.31-1.518.062-1.805.827l-1.645 3.998h-.528V3.75c0-.825-.623-1.5-1.385-1.5s-1.385.675-1.385 1.5v7.113l-.693.012V1.5c0-.825-.623-1.5-1.385-1.5S9.926.675 9.926 1.5v9.363l-.692.012V3c0-.825-.623-1.5-1.385-1.5S6.464 2.175 6.464 3v8.613l-.694.012V6c0-.825-.623-1.5-1.385-1.5S3 5.175 3 6v10.125C3 19.678 4.74 24 10.922 24c1.912 0 3.723-.328 4.718-.984a5.688 5.688 0 0 0 1.58-1.562c.314-.462.566-.963.75-1.49l2.928-8.21c.29-.764-.055-1.643-.761-1.953Z">
                  </path>
                </svg></div>
              <p> <b>300+</b> Hiring Partners</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <script>
    $(document).ready(function() {

      $('#searchInput').on('input', function() {
        console.log("hello");
      });

      //   // Define the courses data, you can retrieve this from your server using AJAX.
      //   var courses = {
      //     !!json_encode($courses) !!
      //   };

      //   // Function to filter and display courses.
      //   function filterCourses(query) {
      //     var filteredCourses = courses.filter(function(course) {
      //       var title = course.title.toLowerCase();
      //       var company = returnCompanyName(course.company_id).toLowerCase();
      //       return title.includes(query) || company.includes(query);
      //     });

      //     // Render filtered courses.
      //     displayCourses(filteredCourses);
      //   }

      //   // Function to display courses in the filteredCourses container.
      //   function displayCourses(filteredCourses) {
      //     var container = $('#filteredCourses');
      //     container.empty(); // Clear previous results

      //     if (filteredCourses.length === 0) {
      //       container.html('<p>No matching courses found.</p>');
      //       return;
      //     }

      //     filteredCourses.forEach(function(course) {
      //       var card = `
      //     <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
      //       <div class="course-item">
      //         <!-- Your course card content here -->
      //       </div>
      //     </div>
      //   `;

      //       container.append(card);
      //     });
      //   }

      //   // Listen for input in the search box.
      //   $('#searchInput').on('input', function() {
      //     var query = $(this).val().toLowerCase();
      //     filterCourses(query);
      //   });

      //   // Initially display all courses.
      //   displayCourses(courses);
    });
  </script>








</main><!-- End #main -->
@endsection