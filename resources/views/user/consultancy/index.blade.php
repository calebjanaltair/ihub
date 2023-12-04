<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultancy Services | iHub DivyaSampark</title>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
  <link rel="stylesheet" href="{{asset('/consultancy/style.css')}}">
  <!-- Telephone cdn end -->
</head>

<body>
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg py-2 sticky-top">
    <div class="container">
      <span class="navbar-brand mt-2" href="{{route('welcome')}}">

        <h1><a href="{{route('welcome')}}" class="logo"><img src="{{asset('/consultancy/assets/logo.png')}}" style="height: 45px; width: 55px;"></a>
          <a href="{{route('welcome')}}" class="logo mt-3" style="color: #003E74;"><font color="#003e74">i</font><font color="#ef6603">HUB</font> <font color="#003e74">Divya</font><font color="#ef6603">Sampark</font></a>
        </h1>


      </span>
      <button class="navbar-toggler" type="button" onclick="openNav()" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0" style="margin-left: auto;">
          <li class="nav-item px-3">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link " aria-current="page" href="#about">About</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link " aria-current="page" href="#services">Services</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link " aria-current="page" href="#whyus">Why us</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link " aria-current="page" href="#contact">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="#home" onclick="closeNav()" class="py-3">Home</a>
    <a href="#about " onclick="closeNav()" class="py-3">About</a>
    <a href="#services" onclick="closeNav()" class="py-3">Services</a>
    <a href="#whyus" onclick="closeNav()" class="py-3">Why us</a>
    <a href="#contact" onclick="closeNav()" class="py-3">Contact us</a>
  </div>

  <!-- Navbar End -->

  <!-- Hero section start -->
  <section id="home">

    <div class="herobg">
      <div class="container">
        <div class="col-lg-9">
          <div class="herotext">
            <h5>CREATING PEOPLE ADVANTAGE 2023</h5>
            <h1>A team of dedicated experts focused on fostering innovation.</h1>
            <button class="mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Get in Touch</button>
          </div>
        </div>
      </div>
    </div>

    <div class="underlinksbg py-4">

      <div class="container">
        <div class="row">
          <!-- <div class="col-lg-3">
            <div class="homeunderlinks">
              IHUB SPOTLIGHT
            </div>
          </div> -->
          <div class="col-lg-4">
            <div class="homeunderlinks ">
              <a href="#services">
                <svg width="20" height="20" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="m12.563 5.25 6.75 6.75-6.75 6.75"></path>
                  <path d="M18.375 12H4.687"></path>
                </svg> Technical Expertise
              </a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="homeunderlinks ">
              <a href="#services">
                <svg width="20" height="20" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="m12.563 5.25 6.75 6.75-6.75 6.75"></path>
                  <path d="M18.375 12H4.687"></path>
                </svg> Market Research and Analysis
              </a>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="homeunderlinks ">
              <a href="#services">
                <svg width="20" height="20" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="m12.563 5.25 6.75 6.75-6.75 6.75"></path>
                  <path d="M18.375 12H4.687"></path>
                </svg> Project Management
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>

  </section>

  <!-- Hero section end -->

  <!-- About us section start -->

  <section id="about" class="pt-5 pb-2">

    <div class="container py-4">

      <div class="aboutbg">
        <div class="row">

          <div class="col-lg-6 pl-3">
            <div class="abouttext px-lg-4 p-3">
              <div class="heading py-3">

                <h2>About Us </h2>
                <h5 style="font-weight: 500;">Know more about <span style="color: #197A56;">Technical Innovation Hub</span> </h5>
              </div>
              <p style="font-weight: 400;">iHub Divyasampark, IIT Roorkee, is an innovative consultancy hub situated at the esteemed Indian Institute of Technology Roorkee. We are a team of dedicated experts focused on fostering innovation, facilitating research, and promoting an entrepreneurial spirit. Our mission is to bridge the gap between academia and industry, offering a platform where cutting-edge ideas meet practical solutions.</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="ihubgif text-end">
              <img src="{{asset('/consultancy/assets/ihubgig.gif')}}" height="auto" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About us section end -->





  <!-- Services Card overlay start-->
  <section id="services">
    <div class="container py-4">
      <div class="heading py-3">

        <h2> Our Services </h2>
        <p style="font-weight: 400;">At iHub DivyaSampark we provide a comprehensive range of consultancy services to meet the diverse needs of our clients. Our team of experts brings a wealth of knowledge and experience in various domains to offer tailored solutions. Here's an overview of our services:</p>
      </div>
      <div class="row justify-content" id="cardContainer">
        @foreach($consultantservices as $consultantservice)
        <div class="col-lg-4 my-3 {{ $loop->iteration > 3 ? 'hidden' : ''}}">
          <div class="card">
            <img src="https://images.unsplash.com/photo-1517021897933-0e0319cfbc28?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&fit=max&ixid=eyJhcHBfaWQiOjE0NTg5fQ" class="card__image">
            <div class="card__overlay">
              <div class="overlay__text">
                <h3>{{$consultantservice->title}}</h3>
                <p>{{$consultantservice->subtitle}}</p>
              </div>
            </div>
          </div>
        </div>
        @endforeach




      </div>
      <div class="togglebtn text-center">

        <button id="toggleBtn">Show More</button>
      </div>
    </div>
  </section>
  <!-- Services Card overlay end-->


  <!-- Why us Start -->

  <section id="whyus" class="py-5">

    <div class="container py-5">

      <div class="aboutbg">
        <div class="row">

          <div class="col-lg-7 pl-3">
            <div class="abouttext px-lg-4 p-3">
              <div class="heading py-3">

                <h2 style="font-weight: 600;">Why Choose iHub Divyasampark, </h2>
                <h5 style="font-weight: 500;">IIT <span style="color: #197A56;">Roorkee?</span> </h5>
              </div>
              <div class="listed-points">

                <ul>
                  @foreach($whyuses as $whyus)
                  <li class="points">{{$whyus->title}}</li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-5 pt-3">
            <div class=" text-end">
              <img src="{{asset('/consultancy/assets/who.png')}}" width="100%" height="auto" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Why us End -->


  <!-- Contact us Section End-->

  <section id="contact" class="contactbg">
    <div class="container">

      <div class=" py-5">


        <div class="row">
          <div class="col-lg-7">
            <div class="feature">
              <h2 style="font-weight: 400;">Are you seeking consultancy services that can transform your ideas into reality? </h2>
            </div>

          </div>
          <div class="col-lg-5">
            <div class="apply pt-lg-4 text-center">
              <button data-bs-toggle="modal" data-bs-target="#exampleModal">Become a difference!</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Contact us Section End -->


  <!-- Footer Start -->

  <footer>
    <div class="container pb-3 pt-lg-5 pt-5">
      <div class="row justify-content-between">

        <div class="col-lg-4 ">
          <div class="d-md-flex lastlinks">
            <div class="pt-2 pr-3">
              <h6><b>FOLLOW US</b> </h6>
            </div>
            <div class="socials">



              <svg width="30" height="30" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.82 1.5H3.294c-.957 0-1.794.69-1.794 1.635v17.566c0 .951.837 1.799 1.794 1.799h17.521c.963 0 1.685-.854 1.685-1.8V3.136c.006-.946-.722-1.635-1.68-1.635ZM8.01 19.005H5V9.65h3.01v9.354ZM6.61 8.228h-.022c-.963 0-1.586-.716-1.586-1.613C5.002 5.7 5.642 5 6.626 5c.984 0 1.587.695 1.608 1.614 0 .897-.624 1.613-1.625 1.613Zm12.395 10.777h-3.009V13.89c0-1.225-.438-2.063-1.526-2.063-.832 0-1.324.563-1.543 1.111-.082.197-.104.465-.104.739v5.328H9.815V9.65h3.008v1.301c.438-.623 1.122-1.52 2.713-1.52 1.975 0 3.469 1.301 3.469 4.108v5.465Z">
                </path>
              </svg>
              <svg width="30" height="30" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M22.5 12.063c0-5.799-4.702-10.5-10.5-10.5s-10.5 4.7-10.5 10.5c0 5.24 3.84 9.584 8.86 10.373v-7.337H7.692v-3.037h2.666V9.75c0-2.63 1.568-4.085 3.966-4.085 1.15 0 2.351.205 2.351.205v2.584h-1.324c-1.304 0-1.712.81-1.712 1.64v1.97h2.912l-.465 3.036H13.64v7.337c5.02-.788 8.859-5.131 8.859-10.373Z" clip-rule="evenodd"></path>
              </svg>



              <svg width="30" height="30" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.375 3.25a4.388 4.388 0 0 1 4.375 4.375v8.75a4.388 4.388 0 0 1-4.375 4.375h-8.75a4.389 4.389 0 0 1-4.375-4.375v-8.75A4.388 4.388 0 0 1 7.625 3.25h8.75Zm0-1.75h-8.75C4.256 1.5 1.5 4.256 1.5 7.625v8.75c0 3.369 2.756 6.125 6.125 6.125h8.75c3.369 0 6.125-2.756 6.125-6.125v-8.75c0-3.369-2.756-6.125-6.125-6.125Z">
                </path>
                <path d="M17.688 7.625a1.313 1.313 0 1 1 0-2.625 1.313 1.313 0 0 1 0 2.625Z"></path>
                <path d="M12 8.5a3.5 3.5 0 1 1 0 7 3.5 3.5 0 0 1 0-7Zm0-1.75a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Z">
                </path>
              </svg>



              <svg width="30" height="30" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M23.25 5.133a9.46 9.46 0 0 1-2.65.717 4.57 4.57 0 0 0 2.03-2.512c-.908.53-1.9.903-2.932 1.101A4.647 4.647 0 0 0 16.327 3c-2.55 0-4.615 2.034-4.615 4.542a4.37 4.37 0 0 0 .119 1.036A13.158 13.158 0 0 1 2.315 3.83a4.485 4.485 0 0 0-.627 2.283c0 1.574.821 2.967 2.062 3.782a4.57 4.57 0 0 1-2.1-.567v.056c0 2.204 1.595 4.036 3.704 4.454a4.752 4.752 0 0 1-1.216.159c-.291 0-.582-.028-.868-.085.587 1.805 2.294 3.118 4.315 3.155a9.356 9.356 0 0 1-6.835 1.88A13.063 13.063 0 0 0 7.816 21c8.501 0 13.146-6.923 13.146-12.928 0-.197-.006-.394-.015-.586a9.304 9.304 0 0 0 2.303-2.353Z">
                </path>
              </svg>

            </div>
          </div>

        </div>
        <div class="col-lg-8">
          <div class="address  pt-2">
            <p style="font-weight: 400; font-size: 12px;">
              Hobbies Club, Indian Institute Of Technology–Roorkee (IIT–Roorkee), iHUB DivyaSampark office, Roorkee, Uttarakhand 247667
            </p>
          </div>
        </div>
      </div>
      <div class=" pt-lg-3 pt-1">
        <hr />
        <div class="row">
          <div class="col-lg-2 text-center">
            &copy; <span id="currentYear"></span> Consultancy <span class="line">|</span>
          </div>

          <div class="col-lg-10 p-0">
            <div class="footerlinks">

              <a href="#home">Home</a> <a href="#about">About</a> <a href="#services">Services</a> <a href="#whyus">Why us</a> <a href="#contact">Contact</a>
            </div>

          </div>
        </div>



      </div>
    </div>
  </footer>
  <!-- Footer End -->

  <!-- Modal start-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">

      <div class="modal-body p-0">

<div class="container">
  <div class="row">
    <div class="col-lg-6 interestedouter p-4">
      <div class="interested ">
        <!-- <h3>What is included in this course?</h3> -->
        <ul class="mx-auto my-auto">
          <li>Whether you are an entrepreneur, a researcher, or a business looking to innovate, iHub Divyasampark, IIT Roorkee, is your ideal partner.
          </li>
          <li>We are excited to work with you and help you achieve your goals.</li>
          <li> Contact us today to discuss how we can assist you on your journey towards success. Let's collaborate and bring your visions to life.</li>
        </ul>
      </div>
    </div>
    <div class="col-lg-6 programformouter">
      <div class="programform py-3">
        <!-- <h3 class="pb-2">What is included in this course?</h3> -->
        <form method="POST" action="{{route('consultancyRecord')}}">
          @csrf
          <div class="py-2">
            <input type="name" name="name" required class="form-control" id="exampleInputName" aria-describedby="name" placeholder="Full Name*">
          </div>
          <div class="py-2">
            <input id="phone" name="phone" required class="form-control" style="width: 100%;" type="tel" name="phone" />
          </div>
          <div class="py-2">
            <input type="email" name="email" required class="form-control" id="exampleInputName" aria-describedby="name" placeholder="Email*">
          </div>
          <div>
            <div class="submitbtn pt-3 text-center">
              <button type="submit">Become A Part Of The Tribe!</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
      </div>
    </div>
  </div>

  <!-- Modal End -->


  <!-- Footer start -->


  <!-- Footer end -->



  <!-- Small screen navbar open and close -->
  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  </script>
  <script>
    // JavaScript to display the current date
    document.getElementById("currentDate").innerHTML = new Date().toLocaleDateString();
  </script>



  <!-- Small screen navbar open and close -->

  <!-- Telephone Start -->
  <script>
    const phoneInputField = document.querySelector("#phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
  </script>
  <!-- Telephone End -->

  <!-- Navbar link chnaging on section start -->

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const sections = document.querySelectorAll("section");
      const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

      window.addEventListener("scroll", function() {
        let current = "";
        sections.forEach((section) => {
          const sectionTop = section.offsetTop;
          const sectionHeight = section.clientHeight;
          if (pageYOffset >= sectionTop - sectionHeight / 3) {
            current = section.getAttribute("id");
          }
        });

        navLinks.forEach((link) => {
          link.classList.remove("active");
          if (link.getAttribute("href").includes(current)) {
            link.classList.add("active");
          }
        });
      });
    });
  </script>

  <!-- Navbar link chnaging on section start -->

  <!-- Date getting dynamically start -->
  <script>
    var currentYear = new Date().getFullYear();

    document.getElementById("currentYear").innerHTML = currentYear;
  </script>

  <!-- Date getting dynamically end -->

  <!-- Cards show and hide start-->



  <script>
    var toggleBtn = document.getElementById('toggleBtn');
    var cardContainer = document.getElementById('cardContainer');
    var hiddenCards = document.querySelectorAll('.hidden');

    toggleBtn.addEventListener('click', function() {
      for (var i = 0; i < hiddenCards.length; i++) {
        hiddenCards[i].classList.toggle('hidden');
      }

      var areCardsHidden = cardContainer.querySelector('.hidden');
      var buttonText = areCardsHidden ? 'Show More' : 'Show Less';
      toggleBtn.textContent = buttonText;
    });
  </script>

  <!-- Cards show and hide end -->
</body>

</html>