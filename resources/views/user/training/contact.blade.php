@extends('layouts.traininglayout')
@section('content')
<script src="https://www.google.com/recaptcha/api.js"></script>
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container my-4">
      <h2>Contact Us</h2>
      <p>Our mission is to support and encourage energetic, aspiring, talented, and young minds to become entrepreneurs. </p>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact my-4">
    <div class="mapouter" data-aos="fade-up">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3460.038198458862!2d77.8945715!3d29.8631722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390eb3eec938b53f%3A0x21da36eb1a232fb2!2siHUB%20DivyaSampark!5e0!3m2!1sen!2s!4v1691013252493!5m2!1sen!2s" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="container" data-aos="fade-up">
      @if(session('success'))
      <div class="alert alert-success alert-dismissible fade show mt-3 mb-3" role="alert">
        <strong>Success!</strong> {{session('success')}}.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @elseif(session('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> {{session('error')}}.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p> Hobbies Club, <br>Indian Institute Of Technology–Roorkee (IIT–Roorkee), iHUB DivyaSampark office, Roorkee, Uttarakhand 247667 <br><br></p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+91 1332 285 311</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="{{route('training-contactus')}}" id="contactUs" method="post" role="form" class="php-email-form">
            @csrf
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" required id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" required id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" id="message" required rows="5" placeholder="Message" required></textarea>
            </div>

            <div class="text-center"><button type="submit" class="g-recaptcha my-2" data-sitekey="6LfdbJYoAAAAAP2L96USkp-bG-FJoHeCDzPvGwUu
" data-callback='onSubmit' data-action='submit'>Send Message</button></div>
          </form>

        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

  <script>
    function onSubmit(token) {
      // if any of the fields empty then show alert
      if (document.getElementById("name").value == "" || document.getElementById("email").value == "" || document.getElementById("subject").value == "" || document.getElementById("message").value == "") {
        alert("Please fill all the fields");
        return false;
      }
      document.getElementById("contactUs").submit();
    }
  </script>






</main><!-- End #main -->

@endsection