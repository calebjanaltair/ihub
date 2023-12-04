<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>iHub DivyaSampark</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <!-- Font Awesome 5 icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/hero.css')}}">
    <link href="{{asset('assets/css/loader.css')}}" rel="stylesheet">
    <div id="preloader"></div>
</head>

<body>
    <!-- Navbar Start -->

    <nav class="navbar navbar-light bg-light navbar-expand-md fixed-top elementbg">
        <div class="container-fluid">
            <span class="navbar-brand " href="{{route('welcome')}}">

                <h1><a href="{{route('welcome')}}" class="logo"><img src="{{asset('assets/img/logo.png')}}" style="height: 45px; width: 55px;"></a>
                    <a href="{{route('welcome')}}" class="logo mt-3"> i<font color="#ff914d">HUB</font> Divya<font color="#ff914d">Sampark
                        </font></a>
                </h1>


            </span>
            <button class="navbar-toggler btn" type="button" data-bs-toggle="" data-bs-target=".navbar-collapse" id="navbarToggler">
                <span class="icon">☰</span>
            </button>
            <script>
                const navbarToggler = document.getElementById('navbarToggler');
                const icon = navbarToggler.querySelector('.icon');
                let isOpen = false;

                navbarToggler.addEventListener('click', () => {
                    isOpen = !isOpen;
                    if (isOpen) {
                        icon.innerHTML = ''; // Clear the content
                    } else {
                        icon.innerHTML = '☰'; // Set content back to bars icon
                    }
                    navbarToggler.classList.toggle('open', isOpen);
                });
            </script>
            <div class="collapse navbar-collapse ">
                <ul class="navbar-nav ">


                    <li class="nav-item dropdown menu-large">
                        <a href="#" class="dropdown-toggle make nav-link " data-bs-toggle="dropdown">
                            Explore
                        </a>
                        <ul class="dropdown-menu megamenu elementbggradient">
                            <div class="row">
                                <div class="col-lg-3">
                                    <ul class="expandednavlinks">
                                        <li class="dropdown-header">Initiatives</li>
                                        <li><a href="{{route('isp')}}">Innovation Support Programs</a></li>
                                        <li><a href="{{route('csr')}}">Donate Under CSR</a></li>
                                        <li><a href="{{route('hackathon')}}">Hackathon</a></li>
                                        <!-- <li><a href="{{route('startups')}}startups"></a></li> -->
                                    </ul>
                                </div>
                                <div class="col-lg-2">
                                    <ul class="expandednavlinks">
                                        <li class="dropdown-header">Glimpses</li>
                                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                                        <li><a href="{{route('collaborations')}}">Collaborations</a></li>
                                        <li><a href="{{route('collaborations')}}">Activities</a></li>

                                    </ul>
                                </div>
                                <div class="col-lg-2">
                                    <ul class="expandednavlinks">
                                        <li class="dropdown-header">Meet The Tribe</li>
                                        <li><a href="{{route('administration')}}">Advisors</a></li>
                                        <li><a href="{{route('administration')}}">Management</a></li>
                                        <li><a href="{{route('ihub-blogs')}}">Blogs</a></li>

                                    </ul>
                                </div>
                                <div class="col-lg-5">
                                    <a href="{{$navNews->link}}" style="text-decoration: none;">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <img src="{{asset('/public/uploads/navNews/' .$navNews->image)}}" width="100%" height="auto" alt="">
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="sidecontentnav">
                                                    <h3>{{$navNews->title}}</h3>
                                                    <p>{{$navNews->subtitle}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown menu-large">
                        <a href="#" class="dropdown-toggle make nav-link" data-bs-toggle="dropdown">
                            Training
                        </a>
                        <ul class="dropdown-menu megamenu elementbggradient">
                            <div class="row">

                                <div class="col-lg-2">
                                    <ul class="expandednavlinks">
                                        <li class="dropdown-header">Training Services</li>
                                        <li><a href="{{route('training')}}">
                                                Training Module
                                            </a></li>
                                        <li><a href="{{route('training-about')}}">About iHub</a></li>
                                        <li><a href="{{route('training-courses')}}">Latest Courses</a></li>
                                        <li><a href="{{route('training-contact')}}">Contact Our Team</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-5">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <img src="{{asset('/assets/img/certificate.png')}}" width="100%" height="auto" alt="">
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="sidecontentnav">
                                                <h3>Certification in Applied Data Science</h3>
                                                <p>Gain expertise in Machine Learning <br> and Artificial Intelligence through <br> an advanced certification</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <img src="{{asset('/assets/img/certificate.png')}}" width="100%" height="auto" alt="">
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="sidecontentnav">
                                                <h3>Certification in Applied Data Science</h3>
                                                <p>Gain expertise in Machine Learning <br> and Artificial Intelligence through <br> an advanced certification</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown menu-large">
                        <a href="#" class="dropdown-toggle make nav-link" data-bs-toggle="dropdown">
                            Startups & Technology
                        </a>
                        <ul class="dropdown-menu megamenu elementbggradient">
                            <div class="row">
                                <div class="col-lg-3">
                                    <ul class="expandednavlinks">
                                        <li class="dropdown-header">Startup Programs</li>
                                        @foreach($startups as $startup)
                                        <li><a href="{{route('startups')}}">{{$startup->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-lg-2">
                                    <ul class="expandednavlinks">
                                        <li class="dropdown-header">Fellowships</li>
                                        @foreach($fellowships as $fellowship)
                                        <li><a href="{{route('fellowships')}}">{{$fellowship->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="col-lg-2">
                                    <ul class="expandednavlinks">
                                        <li class="dropdown-header">Verticals</li>
                                        @foreach($verticals as $vertical)
                                        <li><a href="{{route('verticals')}}">{{$vertical->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-lg-5">
                                    <a href="{{$navNews->link}}" style="text-decoration: none;">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <img src="{{'assets/img/techxr.png'}}" width="100%" height="auto" alt="">
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="sidecontentnav">
                                                    <h3>Techxr Innovations PVT. LTD</h3>
                                                    <p>Won 2 national awards out of 10 categories in the Indian Mobile Congress (IMC) 2023.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('consultants')}}" class="nav-link make">Consutancy</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('contact')}}" class="nav-link make">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="sidebar elementbg" id="sidebar">
        <ul class="sidebar-menu">

            <li class="sidebar-item has-submenu">
                <a href="#" class="sidebar-link">Explore<i class="fas fa-caret-down iconlast"></i>
                </a>
                <ul class="submenu">
                    <li><a href="{{route('isp')}}" class="submenu-link">Innovation Support Programs</a></li>
                    <li><a href="{{route('csr')}}" class="submenu-link">Donate Under CSR</a></li>
                    <li><a href="{{route('hackathon')}}" class="submenu-link">Hackathon</a></li>
                    <li><a href="{{route('gallery')}}" class="submenu-link">Gallery</a></li>
                    <li><a href="{{route('collaborations')}}" class="submenu-link">Collaborations</a></li>
                    <li><a href="{{route('collaborations')}}" class="submenu-link">Activities</a></li>
                    <li><a href="{{route('administration')}}" class="submenu-link">Advisors</a></li>
                    <li><a href="{{route('administration')}}" class="submenu-link">Management</a></li>
                    <li><a href="{{route('ihub-blogs')}}" class="submenu-link">Blogs</a></li>
                </ul>
            </li>
            <li class="sidebar-item has-submenu">
                <a href="#" class="sidebar-link">Training <i class="fas fa-caret-down iconlast"></i>
                </a>
                <ul class="submenu">
                    <li><a href="{{route('training')}}" class="submenu-link">Training Module</a></li>
                    <li><a href="{{route('training-about')}}" class="submenu-link">About iHub</a></li>
                    <li><a href="{{route('training-courses')}}" class="submenu-link">Latest Courses</a></li>
                    <li><a href="{{route('training-contact')}}" class="submenu-link">Contact Our Team</a></li>

                </ul>
            </li>
            <li class="sidebar-item has-submenu">
                <a href="#" class="sidebar-link">Startups & Technology<i class="fas fa-caret-down iconlast"></i>
                </a>
                <ul class="submenu">
                    <li><a href="{{route('verticals')}}" class="submenu-link">Verticals</a></li>
                    <li><a href="{{route('startups')}}" class="submenu-link">Startups Programs</a></li>
                    <li><a href="{{route('fellowships')}}" class="submenu-link">Fellowship Programs</a></li>

                </ul>
            </li>
            <li class="sidebar-item has-submenu">
                <a href="{{route('consultants')}}" class="sidebar-link">Consultancy</a>
            </li>
            <li class="sidebar-item">
                <a href="{{route('contact')}}" class="sidebar-link">Contact Us
                </a>

            </li>

        </ul>
    </div>

    <script>
        $(document).ready(function() {
            $('.dropdown').hover(
                function() {
                    $(this).find('.dropdown-toggle').attr('aria-expanded', 'true');
                    $(this).find('.dropdown-menu').addClass('show');
                    $(this).find('.dropdown-menu').attr('data-bs-popper', 'static');
                },
                function() {
                    const $dropdownMenu = $(this).find('.dropdown-menu');

                    // Hide the menu after a brief delay (500ms in this example)
                    setTimeout(function() {
                        $dropdownMenu.removeClass('show');
                        $dropdownMenu.attr('data-bs-popper', '');
                    }, 400);
                }
            );
        });
    </script>
    <div class="overlay" id="overlay"></div>
    <script>
        const sidebarLinks = document.querySelectorAll(".sidebar-link");

        sidebarLinks.forEach((link) => {
            link.addEventListener("click", function() {
                const submenu = this.nextElementSibling;
                if (submenu && submenu.classList.contains("submenu")) {
                    submenu.classList.toggle("active");
                }
            });
        });
    </script>

    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleButton = document.getElementById('toggleButton');
        const overlay = document.getElementById('overlay');

        function toggleSidebar() {
            sidebar.classList.toggle('active');
            overlay.classList.toggle('active');
        }

        toggleButton.addEventListener('click', toggleSidebar);
        overlay.addEventListener('click', toggleSidebar);

        document.addEventListener('click', function(event) {
            if (!sidebar.contains(event.target) && !toggleButton.contains(event.target) && sidebar.classList.contains(
                    'active')) {
                toggleSidebar();
            }
        });
        sidebar.addEventListener('click', function(event) {
            event.stopPropagation();
        });
    </script>

    <script>
        document
            .querySelector(".navbar-toggler")
            .addEventListener("click", function() {
                document.getElementById("sidebar").classList.toggle("active");
            });
    </script>



    <div class="bgheroo mt-5 h-100">
        <div class="container h-100">

            <div class="row h-100 justify-content-between">

                <div class="col-lg-6">
                    <div class="clip py-5">
                        <div class="herogif">
                            <img src="{{asset('assets/img/animatedLogo.gif')}}" style="width: 100%;" alt="" />
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-10 mx-auto text-end">
                    <div class="row">
                        <div class="col-6">
                            <img src="{{asset('assets/img/nmicps.png')}}" width="100%" height="auto" alt="">
                        </div>
                        <div class="col-6">
                            <img src="{{asset('assets/img/dst.png')}}" width="100%" height="auto" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section ends here -->
    <!-- Ticker Start -->
    <div class="marquee">
        <div class="marquee__item">
            <a></a>
            <span class="marquee__seperator"></span>
            <a>A joint initiative of the Government of India Department of Science & Technology (DST) and Indian Institute of Technology (IIT Roorkee)s</a>
            <span class="marquee__seperator"></span>
            <a>A joint initiative of the Government of India Department of Science & Technology (DST) and Indian Institute of Technology (IIT Roorkee)s</a>
            <span class="marquee__seperator"></span>
            <a>A joint initiative of the Government of India Department of Science & Technology (DST) and Indian Institute of Technology (IIT Roorkee)s</a>
            <span class="marquee__seperator"></span>
        </div>
    </div>
    <!--  Ticker End-->

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


    <div class="container my-5">
        <div class="headingss">
            <h2>NEWS & EVENTS</h2>
            <p>STAY TUNED FOR LATEST NEWS & EVENTS</p>
        </div>
        <!-- Slider main container -->
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                @foreach($newses as $news)
                <div class="swiper-slide">
                    <div class="card ">
                        <img src="{{asset('/public/uploads/news/' . $news->image)}}" class="card-img-top" alt="...">
                        <div class="card-body news-card-height" style="background-color: #003e74;">
                            <a href="  @if($news->link == '' || $news->link == null) '#'  @else {{$news->link}}  @endif " target="_blank" style="text-decoration: none; color: black;">
                                <h5 class="card-title slidecard" style="color:#ff914d;">{{$news->title}}</h5>
                                <p class="card-text text-white">{{$news->subtitle}}</p>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    </div>















    <!-- Slider main container -->

    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            loop: true,
            centeredSlides: true,
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                // when window width is >= 320px
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                // when window width is >= 480px
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 40
                },
                // when window width is >= 640px
                1280: {
                    slidesPerView: 3,
                    spaceBetween: 50
                }
            },
            // Auto slide settings
            autoplay: {
                delay: 2000,
                disableOnInteraction: false
            }
        });
    </script>
    <!-- About us Start -->
    <div class="container">
        <div class="headingss">
            <h2>ABOUT US</h2>
            <p>WHO WE ARE</p>
        </div>
        <div class="row">
            <div class="col-lg-6 my-1">
                <div class="about">
                    <p>The hub will foster research innovation towards product/technology development and commercialization in CPS
                        with relevant and next-generation Devices and Materials in the areas of</p>
                    <div class="health">
                        <ul class="d-flex justify-content-between">
                            <li><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">

                                    <path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>Healthcare.</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">

                                    <path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>Industry 4.0.</li>
                            <li><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">

                                    <path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z" />
                                </svg>Smart Cities</li>
                        </ul>
                    </div>
                    <p class="mt-1">The hub envisions that the smart devices and materials are the key enablers for CPS which
                        includes sensors,
                        actuators, computing, communication and control devices built on the smart engineering of the existing and
                        novel materials intelligently coupled with frontier trends like artificial intelligence, machine learning,
                        augmented/virtual reality etc. The ability to interact with cyber world and expand the capabilities of the
                        physical world through smart devices and materials would be the core for future technology developments. The
                        HUB will continuously identify research trends and need areas in the market place and Indian social sector
                        and will liaison with both government and industries to map the needs with the key technologies developed in
                        the HUB and working towards self-reliant India</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="gif">
                    <img src="{{asset('assets/img/logotext.gif')}}" width="100%" height="auto" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- About Us End -->

    <!-- Accordian Start -->
    <section class="toshow">
        <div class="container mt-5 mb-2">

            <div class="accordion" id="accordionExample">
                <!-- Accordion Item 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            OUR VALUES
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="hero">
                                <img class="hero-image" src="{{asset('/assets/img/values.jpeg')}}" alt="Background Image" />
                                <div class="col-12 mx-auto">
                                    <div class="overlay-card card rounded-0 m-0">
                                        <h1>OUR VALUES</h1>
                                        <p>
                                            Catalyzing innovation via diversity and flexibility" encapsulates the powerful idea that promoting
                                            diversity and embracing flexibility can profoundly serve as catalysts for driving innovation and
                                            transformation.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            OUR VISION
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="hero">
                                <img class="hero-image" src="{{asset('/assets/img/vision.jpeg')}}" alt="Background Image" />
                                <div class="col-12 mx-auto">
                                    <div class="overlay-card card rounded-0 m-0">
                                        <h1>OUR VISION</h1>
                                        <p>
                                            To become a key contributor to ‘Digital India’ and ‘Atma Nirbhar Bharat’ by promoting translational
                                            research, enhancing core competencies, capacity building, and training in CPS technologies to provide
                                            commercially viable solutions.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Accordion Item 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            OUR MISSION
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="hero">
                                <img class="hero-image" src="{{asset('/assets/img/mission.jpeg')}}" alt="Background Image" />
                                <div class="col-12 mx-auto">
                                    <div class="overlay-card card rounded-0 m-0">
                                        <h1>OUR MISSION</h1>
                                        <p>
                                            To foster research & innovation towards product or technology development and commercialization in CPS
                                            with relevant and next-generation smart Devices and smart Materials in the areas of Healthcare 4.0,
                                            Industry 4.0 and Smart Cities.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- Accordian End -->


    <!-- Tabs Start From Here -->
    <div class="container tabsss mt-5 mb-2">

        <ul class="nav nav-tabs " id="myTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active tabb" id="tab1-tab" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">OUR VALUES</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link tabb" id="tab2-tab" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">OUR VISION</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link tabb" id="tab3-tab" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">OUR MISSION</a>
            </li>

        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                <div class="hero">
                    <img class="hero-image" src="{{asset('/assets/img/values.jpeg')}}" alt="Background Image" />
                    <div class="col-8 mx-auto">
                        <div class="overlay-card card rounded-0">
                            <h1>OUR VALUES</h1>
                            <p>
                                Catalyzing innovation via diversity and flexibility" encapsulates the powerful idea that promoting
                                diversity and embracing flexibility can profoundly serve as catalysts for driving innovation and
                                transformation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                <div class="hero">
                    <img class="hero-image" src="{{asset('/assets/img/vision.jpeg')}}" alt="Background Image" />
                    <div class="col-8 mx-auto">
                        <div class="overlay-card card rounded-0">
                            <h1>OUR VISION</h1>
                            <p>
                                To become a key contributor to ‘Digital India’ and ‘Atma Nirbhar Bharat’ by promoting translational
                                research, enhancing core competencies, capacity building, and training in CPS technologies to provide
                                commercially viable solutions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                <div class="hero">
                    <img class="hero-image" src="{{asset('/assets/img/mission.jpeg')}}" alt="Background Image" />
                    <div class="col-8 mx-auto">
                        <div class="overlay-card card rounded-0">
                            <h1>OUR MISSION</h1>
                            <p>
                                To foster research & innovation towards product or technology development and commercialization in CPS
                                with relevant and next-generation smart Devices and smart Materials in the areas of Healthcare 4.0,
                                Industry 4.0 and Smart Cities.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">

            </div>
        </div>
    </div>



    <!-- Tabs End here-->


    <!-- HGB start -->
    <div class="container my-5">
        <div class="row my-2 ">
            <div class="headingss">
                <h2>TEAM</h2>
                <p>HUB GOVERNING BOARD (HGB)</p>
            </div>
            @foreach($hgbs as $hgb)

            <div class="col-lg-3 my-2">
                <div class="card board text-center ">
                    <img src="{{asset('public/uploads/hgb/' . $hgb->image)}}" class="card-img-top" alt="Image Alt Text">

                    <div class="card-body proff-under">
                        <a @if($hgb->link == '' || $hgb->link == null) href="#" @else href="{{$hgb->link}}" target="_blank" @endif style="text-decoration: none; color: black;">
                            <h5 class="card-title">{{$hgb->name}}</h5>
                            <p class="card-text">{{$hgb->title}}</p>
                        </a>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>

    <!-- HGB ends -->

    <!-- BOD start -->

    <div class="container my-5">
        <div class="row my-2 ">
            <div class="headingss">

                <p>BOARD OF DIRECTORS(BOD)</p>
            </div>
            @foreach($bods as $bod)
            <div class="col-lg-3 my-2">
                <div class="card board text-center ">
                    <img src="{{asset('/public/uploads/bod/' . $bod->image)}}" class="card-img-top" alt="Image Alt Text">
                    <div class="card-body proff-under">
                        <a @if($bod->link == '' || $bod->link == null) href="#" @else href="{{$bod->link}}" target="_blank" @endif style="text-decoration: none; color: black;">
                            <h5 class="card-title">{{$bod->name}}</h5>
                            <p class="card-text">{{$bod->title}}</p>
                        </a>

                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>


    <!-- Footer Start -->
    <div class="elementbggradient ">
        <footer class=" text-light mt-5 py-2">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="under">
                            <h5 class="headingonlg">Information for</h5>
                            <a class="btn  d-block d-md-none" data-bs-toggle="collapse" data-bs-target="#links1">
                                <span>Information for </span>
                                <span><i class="fas fa-caret-down iconlast"></i></span></a>
                            <ul class="foot-cont list-unstyled collapse d-md-block" id="links1">
                                <li><a href="#">Your Certifications</a></li>
                                <li><a href="#">Call for Proposals</a></li>
                                <li><a href="{{route('csr')}}">Donate Under CSR</a></li>
                                <li><a href="{{route('contact')}}">Careers</a></li>
                                <li><a href="{{route('administration')}}">Administration</a></li>
                                <li><a href="#">Alumini</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="under">
                            <h5 class="headingonlg">Top links</h5>
                            <a class="btn  d-block d-md-none" data-bs-toggle="collapse" data-bs-target="#links2"><span>Top Links
                                </span>
                                <span><i class="fas fa-caret-down iconlast"></i></span></a>
                            <ul class="foot-cont list-unstyled collapse d-md-block" id="links2">
                                <li><a href="https://rtionline.gov.in/">RTI</a></li>
                                <li><a href="https://dst.gov.in/">DST</a></li>
                                <li><a href="https://www.nmicps.in/THI-hub-contact">Other HUBS</a></li>
                                <li><a href="https://www.iitr.ac.in/">IIT Roorkee</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="under">
                            <h5 class="headingonlg">Verticals</h5>
                            <a class="btn  d-block d-md-none" data-bs-toggle="collapse" data-bs-target="#links3"><span>Verticals
                                </span>
                                <span><i class="fas fa-caret-down iconlast"></i></span></a>
                            <ul class="foot-cont list-unstyled collapse d-md-block" id="links3">
                                <li><a href="{{route('verticals')}}">Healthcare 4.0</a></li>
                                <li><a href="{{route('verticals')}}">Smart Cities</a></li>
                                <li><a href="{{route('verticals')}}">Industry 4.0</a></li>
                                <li><a href="{{route('verticals')}}">Defence</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="under">
                            <h5 class="headingonlg">Flagship Programs</h5>
                            <a class="btn  d-block d-md-none" data-bs-toggle="collapse" data-bs-target="#links4"><span>Flagship Programs </span>
                                <span><i class="fas fa-caret-down iconlast"></i></span></a>
                            <ul class="foot-cont list-unstyled collapse d-md-block" id="links4">
                                <li><a href="{{route('fellowships')}}">CHANAKYA Fellowship (UG/PG/Doctoral)</a></li>
                                <li><a href="{{route('consultants')}}">Sponsored & Consultancy Programs</a></li>
                                <li><a href="{{route('startups')}}">Startup Programs</a></li>
                                <li><a href="{{route('isp')}}">Innovation Support Programs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>







        </footer>
        <hr class="line">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 linain py-3">
                    <div class="navbar-brand " href="{{route('welcome')}}">

                        <h1>
                            <a href="{{route('welcome')}}" class="logo mt-3"> i<font color="#ff914d">HUB</font> Divya<font color="#ff914d">
                                    Sampark
                                </font></a>
                        </h1>


                    </div>
                    <div class="address">
                        <p>Hobbies Club,
                            Indian Institute Of Technology–Roorkee (IIT–Roorkee), iHUB DivyaSampark office, Roorkee, Uttarakhand
                            247667</p>
                        <!-- <a href="">Campuses & Maps</a> -->
                    </div>

                </div>

                <div class="col-lg-9 pt-3">
                    <div class="follow">
                        <p class="m-0">Follow </p>
                    </div>
                    <div class="social-links">
                        <svg width="40" height="40" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M22.5 12.063c0-5.799-4.702-10.5-10.5-10.5s-10.5 4.7-10.5 10.5c0 5.24 3.84 9.584 8.86 10.373v-7.337H7.692v-3.037h2.666V9.75c0-2.63 1.568-4.085 3.966-4.085 1.15 0 2.351.205 2.351.205v2.584h-1.324c-1.304 0-1.712.81-1.712 1.64v1.97h2.912l-.465 3.036H13.64v7.337c5.02-.788 8.859-5.131 8.859-10.373Z" clip-rule="evenodd"></path>
                        </svg>
                        <svg width="40" height="40" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.25 5.133a9.46 9.46 0 0 1-2.65.717 4.57 4.57 0 0 0 2.03-2.512c-.908.53-1.9.903-2.932 1.101A4.647 4.647 0 0 0 16.327 3c-2.55 0-4.615 2.034-4.615 4.542a4.37 4.37 0 0 0 .119 1.036A13.158 13.158 0 0 1 2.315 3.83a4.485 4.485 0 0 0-.627 2.283c0 1.574.821 2.967 2.062 3.782a4.57 4.57 0 0 1-2.1-.567v.056c0 2.204 1.595 4.036 3.704 4.454a4.752 4.752 0 0 1-1.216.159c-.291 0-.582-.028-.868-.085.587 1.805 2.294 3.118 4.315 3.155a9.356 9.356 0 0 1-6.835 1.88A13.063 13.063 0 0 0 7.816 21c8.501 0 13.146-6.923 13.146-12.928 0-.197-.006-.394-.015-.586a9.304 9.304 0 0 0 2.303-2.353Z">
                            </path>
                        </svg>
                        <svg width="40" height="40" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.843 6.975c0-2.11-1.552-3.807-3.469-3.807A170.465 170.465 0 0 0 12.422 3h-.844c-2.7 0-5.353.047-7.95.169-1.912 0-3.464 1.706-3.464 3.815A69.732 69.732 0 0 0 0 11.99a72.582 72.582 0 0 0 .16 5.011c0 2.11 1.551 3.82 3.464 3.82 2.728.127 5.526.183 8.372.178 2.85.01 5.64-.05 8.371-.178 1.918 0 3.47-1.71 3.47-3.82a72.41 72.41 0 0 0 .159-5.016 68.19 68.19 0 0 0-.153-5.01Zm-14.14 9.614V7.378L16.5 11.98l-6.797 4.608Z">
                            </path>
                        </svg>
                        <svg width="40" height="40" fill="#000000" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.82 1.5H3.294c-.957 0-1.794.69-1.794 1.635v17.566c0 .951.837 1.799 1.794 1.799h17.521c.963 0 1.685-.854 1.685-1.8V3.136c.006-.946-.722-1.635-1.68-1.635ZM8.01 19.005H5V9.65h3.01v9.354ZM6.61 8.228h-.022c-.963 0-1.586-.716-1.586-1.613C5.002 5.7 5.642 5 6.626 5c.984 0 1.587.695 1.608 1.614 0 .897-.624 1.613-1.625 1.613Zm12.395 10.777h-3.009V13.89c0-1.225-.438-2.063-1.526-2.063-.832 0-1.324.563-1.543 1.111-.082.197-.104.465-.104.739v5.328H9.815V9.65h3.008v1.301c.438-.623 1.122-1.52 2.713-1.52 1.975 0 3.469 1.301 3.469 4.108v5.465Z">
                            </path>
                        </svg>
                    </div>
                    <div class="text-white">
                        <p> iHUB DivyaSampark- A joint initiative of the Government of India Department of Science & Technology (DST) and Indian Institute of Technology (IIT Roorkee).
                        </p>
                        <ul>
                            <li>© 2020 Copyright:<a> IHUB DivyaSampark</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- Footer End -->

    <script>
        $(".carousel .carousel-item").each(function() {
            var minPerSlide = 4;
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(":first");
            }
            next.children(":first-child").clone().appendTo($(this));

            for (var i = 0; i < minPerSlide; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(":first");
                }

                next.children(":first-child").clone().appendTo($(this));
            }
        });
    </script>
    <script>
        // Add custom JavaScript to add 'show' class on hover
        const dropdowns = document.querySelectorAll(".navbar .dropdown");

        dropdowns.forEach((dropdown) => {
            dropdown.addEventListener("mouseenter", () => {
                dropdown.classList.add("show");
            });

            dropdown.addEventListener("mouseleave", () => {
                dropdown.classList.remove("show");
            });
        });
    </script>

    <script>
        $(window).on("load", function() {
            $("#preloader").fadeOut("slow");
        });
    </script>
</body>

</html>