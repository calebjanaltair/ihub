<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>IHUB, IIT Roorkee</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('/training-assets/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('/training-assets/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('/training-assets/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/training-assets/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('/training-assets/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('/training-assets/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('/training-assets/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">



    <!-- Template Main CSS File -->
    <link href="{{asset('/training-assets/assets/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <div class="outer me-auto">
                <h3>
                    <a href="">
                        <img src="https://i.ibb.co/0ftQ3GB/logo2.png" style="height: 50px; width: 55px;">
                    </a>
                    <a href="{{route('training')}}" class="logo"> i<font color="#ef6603">HUB</font> Divya<font color="#ef6603">Sampark</font></a>
                </h3>
            </div>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a href="{{route('training')}}" {{ request()->route()->getName() === 'training' ? 'class=active' : ''}}>Home</a></li>
                    <li><a href="{{route('training-about')}}" {{ request()->route()->getName() === 'training-about' ? 'class=active' : ''}}>About</a></li>
                    <li><a href="{{route('training-courses')}}" {{request()->route()->getName() === 'training-courses' ? 'class=active' : ''}}>Courses</a></li>
                    <li><a href="{{route('training-contact')}}" {{ request()->route()->getName() === 'training-contact' ? 'class=active' : ''}}>Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <div class="get">
                <a href="{{route('training-courses')}}" class="get-started-btn">Get Started</a>
            </div>
        </div>
    </header><!-- End Header -->


    @yield('content')

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <div class="outer me-auto">
                            <h3>

                                <a href="{{route('training')}}" class="logo"> i<font color="#ef6603">HUB</font> Divya<font color="#ef6603">Sampark</font></a>
                            </h3>
                        </div>
                        <p>
                            Hobbies Club, <br>Indian Institute Of Technology–Roorkee (IIT–Roorkee), <br>iHUB DivyaSampark office, Roorkee, Uttarakhand 247667 <br><br>
                            <strong>Phone:</strong> 01332-285050<br>
                            <strong>Email:</strong> tih@iitr.ac.in<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('training')}}">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('training-about')}}">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('training-courses')}}">Courses</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="{{route('csr')}}">iHub DivyaSampark</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Important Courses</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Data Structures and Algorithms using C++</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Ethical Hacking And Cyber Security</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Python Programming & its Applications in Industry 4.0</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Ar-Vr Application Development Certification Course</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Project Based Summer Internship Program 2023</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Aims to enable innovative ecosystem in cyber- physical systems (CPS) and becoming the source for the next generation of digital technologies, products and services by promoting translational research, enhancing core competencies, capacity building, training to provide solutions for national strategic sectors and becoming a key contributor to Digital India.</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Ihub DivyaSamark</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
                    Designed by <a href="https://www.linkedin.com/in/aj20x/">Arjun Mehta</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('/training-assets/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('/training-assets/assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('/training-assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/training-assets/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('/training-assets/assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('/training-assets/assets/js/main.js')}}"></script>
    <script>
        window.addEventListener('scroll', function() {
            const nav = document.getElementById('header');
            const scrollY = window.scrollY;

            if (scrollY >= 60) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });
    </script>
</body>

</html>