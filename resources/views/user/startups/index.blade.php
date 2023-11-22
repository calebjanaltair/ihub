<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Startups</title>
    <!-- BootStrap 5 cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- BootStrap 5 cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/startups.css" />
    <!-- <link rel="stylesheet" href="./hero.css" /> -->
    <link href="/assets/css/loader.css" rel="stylesheet">
    <div id="preloader"></div>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/css/intlTelInput.css" rel="stylesheet" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"></script>

</head>

<body>

    <!-- Navbar Start -->

    <nav class="navbar navbar-light bg-light navbar-expand-md fixed-top elementbg">
        <div class="container-fluid">
            <span class="navbar-brand " href="/">

                <h1><a href="/" class="logo"><img src="./assets/img/logo.png" style="height: 45px; width: 55px;"></a>
                    <a href="/" class="logo mt-3"> i<font color="#ff914d">HUB</font> Divya<font color="#ff914d">Sampark
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
                                        <li><a href="/isp">Innovation Support Programs</a></li>
                                        <li><a href="/csr">Donate Under CSR</a></li>
                                        <li><a href="/hackathon">Hackathon</a></li>
                                        <!-- <li><a href="/startups"></a></li> -->
                                    </ul>
                                </div>
                                <div class="col-lg-2">
                                    <ul class="expandednavlinks">
                                        <li class="dropdown-header">Glimpses</li>
                                        <li><a href="/gallery">Gallery</a></li>
                                        <li><a href="/collaborations">Collaborations</a></li>
                                        <li><a href="/collaborations">Activities</a></li>

                                    </ul>
                                </div>
                                <div class="col-lg-2">
                                    <ul class="expandednavlinks">
                                        <li class="dropdown-header">Meet The Tribe</li>
                                        <li><a href="/administration">Advisors</a></li>
                                        <li><a href="/administration">Management</a></li>
                                        <li><a href="/ihub-blogs">Blogs</a></li>

                                    </ul>
                                </div>
                                <div class="col-lg-5">
                                    <a href="{{$navNews->link}}" style="text-decoration: none;">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <img src="./public/uploads/navNews/{{$navNews->image}}" width="100%" height="auto" alt="">
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
                                        <li><a href="/training">
                                                Training Module
                                            </a></li>
                                        <li><a href="/training-about">About iHub</a></li>
                                        <li><a href="training-courses">Latest Courses</a></li>
                                        <li><a href="training-contact">Contact Our Team</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-5">
                                    <div class="row">
                                        <div class="col-lg-5">
                                            <img src="./assets/img/certificate.png" width="100%" height="auto" alt="">
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
                                            <img src="./assets/img/certificate.png" width="100%" height="auto" alt="">
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
                            Consultancy
                        </a>
                        <ul class="dropdown-menu megamenu elementbggradient">
                            <div class="row">
                                <div class="col-lg-3">
                                    <ul class="expandednavlinks">
                                        <li class="dropdown-header">Glyphicons</li>
                                        <li><a href="#">Available glyphs</a></li>
                                        <li class="disabled"><a href="#">How to use</a></li>
                                        <li><a href="#">Examples</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Dropdowns</li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Alignment options</a></li>
                                        <li><a href="#">Headers</a></li>
                                        <li><a href="#">Disabled menu items</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <ul class="expandednavlinks">
                                        <li class="dropdown-header">Glyphicons</li>
                                        <li><a href="#">Available glyphs</a></li>
                                        <li class="disabled"><a href="#">How to use</a></li>
                                        <li><a href="#">Examples</a></li>
                                        <li class="divider"></li>
                                        <li class="dropdown-header">Dropdowns</li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Alignment options</a></li>
                                        <li><a href="#">Headers</a></li>
                                        <li><a href="#">Disabled menu items</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <a href="#" class="thumbnail">
                                            <img src="http://placehold.it/150x120" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="card">
                                        <a href="#" class="thumbnail">
                                            <img src="http://placehold.it/150x120" />
                                        </a>
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
                                        <li><a href="/startups">{{$startup->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-lg-2">
                                    <ul class="expandednavlinks">
                                        <li class="dropdown-header">Fellowships</li>
                                        <li><a href="/fellowships">Chanakkya UG Fellowship 1</a></li>
                                        <li><a href="/fellowships">Chanakkya UG Fellowship 2</a></li>
                                        <li><a href="/fellowships">Chanakkya UG Fellowship 3</a></li>
                                    </ul>
                                </div>

                                <div class="col-lg-2">
                                    <ul class="expandednavlinks">
                                        <li class="dropdown-header">Verticals</li>
                                        @foreach($verticals as $vertical)
                                        <li><a href="/verticals">{{$vertical->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-lg-5">
                                    <a href="{{$navNews->link}}" style="text-decoration: none;">
                                        <div class="row">
                                            <div class="col-lg-5">
                                                <img src="./assets/img/techxr.png" width="100%" height="auto" alt="">
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
                        <a href="/contact" class="nav-link make">Contact Us</a>
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
                    <li><a href="/isp" class="submenu-link">Innovation Support Programs</a></li>
                    <li><a href="/csr" class="submenu-link">Donate Under CSR</a></li>
                    <li><a href="/hackathon" class="submenu-link">Hackathon</a></li>
                    <li><a href="/gallery" class="submenu-link">Gallery</a></li>
                    <li><a href="/collaborations" class="submenu-link">Collaborations</a></li>
                    <li><a href="/collaborations" class="submenu-link">Activities</a></li>
                    <li><a href="/administration" class="submenu-link">Advisors</a></li>
                    <li><a href="/administration" class="submenu-link">Management</a></li>
                    <li><a href="/ihub-blogs" class="submenu-link">Blogs</a></li>
                </ul>
            </li>
            <li class="sidebar-item has-submenu">
                <a href="#" class="sidebar-link">Training <i class="fas fa-caret-down iconlast"></i>
                </a>
                <ul class="submenu">
                    <li><a href="/training" class="submenu-link">Training Module</a></li>
                    <li><a href="/training-about" class="submenu-link">About iHub</a></li>
                    <li><a href="training-courses" class="submenu-link">Latest Courses</a></li>
                    <li><a href="training-contact" class="submenu-link">Contact Our Team</a></li>

                </ul>
            </li>
            <li class="sidebar-item has-submenu">
                <a href="#" class="sidebar-link">Consultancy <i class="fas fa-caret-down iconlast"></i>
                </a>
                <ul class="submenu">
                    <li><a href="#" class="submenu-link">Sub menu 1</a></li>
                    <li><a href="#" class="submenu-link">Sub menu 2</a></li>

                </ul>
            </li>
            <li class="sidebar-item has-submenu">
                <a href="#" class="sidebar-link">Startups & Technology<i class="fas fa-caret-down iconlast"></i>
                </a>
                <ul class="submenu">
                    <li><a href="/verticals" class="submenu-link">Verticals</a></li>
                    <li><a href="/startups" class="submenu-link">Startups Programs</a></li>
                    <li><a href="/#" class="submenu-link">Fellowship Programs</a></li>

                </ul>
            </li>
            <li class="sidebar-item">
                <a href="/contact" class="sidebar-link">Contact Us
                </a>

            </li>

        </ul>
    </div>

    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $(this).find(".dropdown-toggle").attr("aria-expanded", "true");
                    $(this).find(".dropdown-menu").addClass("show");
                    $(this).find(".dropdown-menu").attr("data-bs-popper", "static");
                },
                function() {
                    const $dropdownMenu = $(this).find(".dropdown-menu");

                    // Hide the menu after a brief delay (500ms in this example)
                    setTimeout(function() {
                        $dropdownMenu.removeClass("show");
                        $dropdownMenu.attr("data-bs-popper", "");
                    }, 200);
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
        const sidebar = document.getElementById("sidebar");
        const toggleButton = document.getElementById("toggleButton");
        const overlay = document.getElementById("overlay");

        function toggleSidebar() {
            sidebar.classList.toggle("active");
            overlay.classList.toggle("active");
        }

        toggleButton.addEventListener("click", toggleSidebar);
        overlay.addEventListener("click", toggleSidebar);

        document.addEventListener("click", function(event) {
            if (
                !sidebar.contains(event.target) &&
                !toggleButton.contains(event.target) &&
                sidebar.classList.contains("active")
            ) {
                toggleSidebar();
            }
        });
        sidebar.addEventListener("click", function(event) {
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

    <!-- Navbar End -->

    <!-- Hero Start -->
    <div class="bgheroo mt-5 h-100">
        <div class="container h-100">

            <div class="row h-100 justify-content-between">

                <div class="col-lg-6">
                    <div class="clip py-5">
                        <div class="herogif">
                            <img src="./assets/img/animatedLogo.gif" style="width: 100%;" alt="" />
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-10 mx-auto text-end">
                    <div class="row">
                        <div class="col-6">
                            <img src="./assets/img/nmicps.png" width="100%" height="auto" alt="">
                        </div>
                        <div class="col-6">
                            <img src="./assets/img/dst.png" width="100%" height="auto" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Hero End -->

    <!-- Programs Start -->
    <div class="container">
        <div class="headingss pt-4">
            <!-- <h2>INNOVATION SUPPORT PROGRAM</h2> -->
            <p>STARTUPS PROGRAMS</p>
        </div>
        <div class="startup">
            <p>iHUB DivyaSampark will be performing activities in conjunction with industry and start-ups that would lead to new jobs creation and economic growth. If you want to grow in deep technology,we are here to support and encourage energetic, aspiring, dynamic, and young innovative minds to become entrepreneurs or to boost the startups and consider entrepreneurship as a career.</p>
            <p>For any query, please feel free to contact us, even if there is no open call for now.</p>
            <p class="waiting">So, what are you waiting for?</p>
            <p class="waiting">If you dare to take a plunge, we are here to support you.</p>
        </div>
    </div>


    <!-- Program End -->

    <!-- Carousel Start -->

    <div class="container">
        <div class="headingss pt-4">
            <h2>Our Startup Programs</h2>
        </div>
        <div class="row">
            @foreach($startups as $startup)
            <div class="col-lg-6 my-2">

                <div class="card border-0 event-click-card p-2" data-bs-toggle="modal" data-bs-target="#exampleModal{{$startup->id}}">
                    <div class="row">
                        <div class="col-3">
                            <img src="./public/uploads/startup/poster/{{$startup->image}}" width="100%" height="auto" alt="">
                        </div>
                        <div class="col-8 p-0">
                            <div class="event-click">
                                <h3>{{$startup->name}}</h3>
                                <p><strong>{{ substr(strip_tags(htmlspecialchars_decode($startup->description)), 0, 20) }}</strong>{{ substr(strip_tags(htmlspecialchars_decode($startup->description)), 20, 200) }} ... <i>Read More</i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="exampleModal{{$startup->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">{{$startup->name}}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-lg-4 my-2">
                                    <div class="modal-left-img">
                                        <img src="./public/uploads/startup/poster/{{$startup->image}}" width="100%" height="auto" alt="">
                                    </div>
                                </div>
                                <div class="col-lg-8 bggreen my-2">
                                    <div class="sidecontenttext">
                                        {!! $startup->description !!}
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="modal-footer">
                            <button data-bs-toggle="modal" class="btn btn-primary btn-sm" id="download_button" data-id="{{$startup->id}}" onclick="addID('{{$startup->id}}')" data-bs-target="#downloadModal">Download Brochure</button>
                            <button class="btn btn-primary btn-sm" onclick="openLink('{{$startup->link}}')">Apply Now</button>
                            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>









    <!-- Add Owl Carousel CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <div class="container">

        <div id="owl-demo" class="owl-carousel owl-theme">

            @foreach($startups as $startup)
            <div class="item">

                <div class="container">


                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <img src="./public/uploads/startup/poster/{{$startup->image}}" width="100%" alt="">
                        </div>
                        <div class="col-lg-6 bggreen">
                            <div class="headingss pt-4">
                                <p>{{$startup->name}}</p>
                            </div>
                            <div class="slidertext">
                                <p></p>
                            </div>

                            <div class="row justify-content-between">
                                <div class="col-lg-4 bothbtn">
                                    <div class="apply py-2">
                                        <button onclick="openLink('{{$startup->link}}')">Apply Now</button>
                                    </div>
                                </div>
                                <div class="col-lg-5 bothbtn">
                                    <div class="download py-2">
                                        <button data-bs-toggle="modal" id="download_button" data-id="{{$startup->id}}" data-bs-target="#downloadModal">Download Brochure</button>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between bothbtn">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div> -->

    <script>
        function addID(id) {
            $('#download_id').val(id);
            console.log(id);
        }

        function openLink($link) {
            window.open($link);
        }
        $(document).ready(function() {

            $("#owl-demo").owlCarousel({
                navigation: true,
                items: 1,
                loop: true,
                nav: true,
                navText: ["PREV", "NEXT"],
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
            });

            // $('#downloadModal').on('show.bs.modal', function(event) {
            //     var button = $(event.relatedTarget); // Button that triggered the modal
            //     var id = button.data('id');
            //     $('#download_id').val(id);
            //     console.log(id);
            // });

        });
    </script> 
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
                                <li><a href="/csr">Donate Under CSR</a></li>
                                <li><a href="/contact">Careers</a></li>
                                <li><a href="/administration">Administration</a></li>
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
                                <li><a href="/verticals">Healthcare 4.0</a></li>
                                <li><a href="/verticals">Smart Cities</a></li>
                                <li><a href="/verticals">Industry 4.0</a></li>
                                <li><a href="/verticals">Defence</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="under">
                            <h5 class="headingonlg">Flagship Programs</h5>
                            <a class="btn  d-block d-md-none" data-bs-toggle="collapse" data-bs-target="#links4"><span>Flagship Programs </span>
                                <span><i class="fas fa-caret-down iconlast"></i></span></a>
                            <ul class="foot-cont list-unstyled collapse d-md-block" id="links4">
                                <li><a href="#">CHANAKYA Fellowship (UG/PG/Doctoral)</a></li>
                                <li><a href="#">Sponsored & Consultancy Programs</a></li>
                                <li><a href="/startups">Startup Programs</a></li>
                                <li><a href="/isp">Innovation Support Programs</a></li>
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
                    <div class="navbar-brand " href="/">

                        <h1>
                            <a href="/" class="logo mt-3"> i<font color="#ff914d">HUB</font> Divya<font color="#ff914d">
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

    <!-- Modal Start -->
    <!-- Modal -->
    <div class="modal fade" id="downloadModal" tabindex="-1" aria-labelledby="downloadModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="downloadModalLabel">Download Brochure</h5>
                    <svg type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" width="60" height="60" fill="none" stroke="#1c1c1c" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.25 17.25 6.75 6.75"></path>
                        <path d="m17.25 6.75-10.5 10.5"></path>
                    </svg>
                </div>
                <div class="modal-body">
                    <form class="modalform" id="downloadForm" method="post" action="/download-brochure">
                        @csrf
                        <input type="text" name="id" id="download_id" hidden>
                        <div class="col-12">
                            <input class="full" type="text" name="name" id="name" required placeholder="Your Name">
                        </div>
                        <div class="col-12">
                            <input class="full" type="email" name="email" id="email" placeholder="Your Email Address">
                        </div>

                        <div class="py-2"></div>
                        <div class="col-12">
                            <input class="full" id="phone" type="tel" name="phone" id="phone" placeholder="Your Phone Number">
                        </div>
                        <div class="py-3"></div>
                        <button type="submit">Download Now</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <script>
        var telInput = $("#phone"),
            errorMsg = $("#error-msg"),
            validMsg = $("#valid-msg");

        // initialise plugin
        telInput.intlTelInput({

            allowExtensions: true,
            formatOnDisplay: true,
            autoFormat: true,
            autoHideDialCode: true,
            autoPlaceholder: true,
            defaultCountry: "auto",
            ipinfoToken: "yolo",

            initialCountry: "in",
            nationalMode: false,
            numberType: "MOBILE",
            //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            preferredCountries: ['sa', 'ae', 'qa', 'om', 'bh', 'kw', 'ma'],
            preventInvalidNumbers: true,
            separateDialCode: true,
            initialCountry: "auto",
            geoIpLookup: function(callback) {
                $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"
        });
        // Set the initial country to India (in) after initialization
        telInput.intlTelInput("setCountry", "in");
        var reset = function() {
            telInput.removeClass("error");
            errorMsg.addClass("hide");
            validMsg.addClass("hide");
        };

        // on blur: validate
        telInput.blur(function() {
            reset();
            if ($.trim(telInput.val())) {
                if (telInput.intlTelInput("isValidNumber")) {
                    validMsg.removeClass("hide");
                } else {
                    telInput.addClass("error");
                    errorMsg.removeClass("hide");
                }
            }
        });

        // on keyup / change flag: reset
        telInput.on("keyup change", reset);


        ss
    </script>

    <script>
        $(window).on("load", function() {
            $("#preloader").fadeOut("slow");
        });
    </script>
    <!-- Modal End -->
</body>

</html>