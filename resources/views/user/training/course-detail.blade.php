@extends('layouts.traininglayout')
@section('content')

<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2>Course Details</h2>
      <p>Learn from IIT Faculty & Industry Experts with Guaranteed Job Interviews.
        Campus Immersion at IIT Roorkee. </p>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Cource Details Section ======= -->
  <section id="course-details" class="course-details">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-lg-8">
          <div class="">
            <img src="{{asset('public/uploads/Courses/' . $course->image)}}" alt="Hero Image" class="py-2" width="100%" height="auto">

            <div class="hero-text">

            </div>
          </div>
          <h3>{{$course->title}}</h3>
          <p>
            {{$course->description}}
          </p>
          <div class="section-title">
            <h2>Our Students Rate This Course</h2>
          </div>
          
          <div class="bh-stars" data-bh-rating="{{$course->rating}}">
            <svg version="1.1" class="bh-star bh-star--1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
              <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
              <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
              <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" />
            </svg>

            <svg version="1.1" class="bh-star bh-star--2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
              <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
              <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
              <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" />
            </svg>

            <svg version="1.1" class="bh-star bh-star--3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
              <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
              <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
              <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" />
            </svg>

            <svg version="1.1" class="bh-star bh-star--4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
              <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
              <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
              <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" />
            </svg>

            <svg version="1.1" class="bh-star bh-star--5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
              <path class="outline" d="M12,4.2L14.5,9l0.2,0.5l0.5,0.1l5.5,0.8L16.8,14l-0.4,0.4l0.1,0.5l1,5.3l-5-2.5L12,17.5l-0.4,0.2l-5,2.5L7.5,15l0.1-0.5 L7.2,14l-4-3.7l5.5-0.8l0.5-0.1L9.5,9L12,4.2 M11.9,2L8.6,8.6L1,9.7l5.5,5.1L5.2,22l6.8-3.4l6.8,3.4l-1.3-7.2L23,9.6l-7.6-1L11.9,2 L11.9,2z" />
              <polygon class="full" points="18.8,22 12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2 15.4,8.6 23,9.6 17.5,14.7" />
              <polyline class="left-half" points="12,18.6 5.2,22 6.5,14.8 1,9.7 8.6,8.6 11.9,2" />
            </svg>
            <span class="p-2"><b><i>{{$course->rating}}</i></b></span>

          </div>
        </div>
        <div class="col-lg-4">

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Trainer</h5>
            <p><a href="#">{{$course->trainer}}</a></p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Program Fee</h5>
            <p>Rs {{$course->fee}}</p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Available Seats</h5>
            <p>{{$course->seats}}</p>
          </div>

          <div class="course-info d-flex justify-content-between align-items-center">
            <h5>Schedule</h5>
            <p>{{$course->schedule}}</p>
          </div>
          <div class="apply">
            <button class="apply" class="btn btn-primary" id="bariScreenBtn" data-bs-toggle="modal" data-bs-target="#applyModal">Apply Now</button>
            <button class="apply" class="btn btn-primary" id="chotiScreenBtn" onclick="navigateDownForm()">Apply Now</button>
            <h1 class="m-0">Only Few Seats Left</h1>
          </div>

        </div>
      </div>

    </div>
  </section><!-- End Cource Details Section -->
  <!-- Apply Modal -->
  <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-body">
          <div id="pg-form-section p-0" >
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-6 pg-form-left-section">
                  <div class="pg-form-left-content">
                    <p><strong>What is included in this course?</strong></p>
                    <ul>
                      <li>Non-biased career guidance</li>
                      <li>Counselling based on your skills and preference</li>
                      <li>No repetitive calls, only as per convenience</li>
                      <li>Rigorous curriculum designed by industry experts</li>
                      <li>Complete this program while you work</li>
                    </ul>
                  </div>
                </div>
                <div class="col-lg-6 pg-form-right-section">
                  <p><strong>Apply Now To Secure a Seat!</strong></p>
                  <form id="pgleadcaptfm_bottom" class="form-default" action="{{route('training-lead')}}" method="POST" accept-charset="UTF-8">
                    @csrf
                    <input type="hidden" name="id" value="{{$course->id}}">
                    <div class="form-row">
                      <div class="form-group col-md-12 p-0">
                        <input class="form-control" id="pgledcpt_fname1" placeholder="Full Name*" type="text" name="name" fieldtype="1" maxlength="255" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group pr-0 select-country-wrap" style="margin-right: -1px;">
                        <select class="form-control rounded-0 ip-vk-select-cty-pass" placeholder compname="PhoneNumber_countrycodeval" name="PhoneNumber_countrycodeval" phoneformat="1" maxlength="10" id="pgledcpt_country1" required>
                          <option value="+1">+1&nbsp;&nbsp;US&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;UNITED STATES</option>
                          <option value="+44">+44&nbsp;&nbsp;UK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;UNITED KINGDOM</option>
                          <option value="IN">+91 &nbsp;&nbsp; IN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; INDIA</option>
                          <option value="+1">+1&nbsp;&nbsp;CA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CANADA</option>
                          <option value="------">------&nbsp;&nbsp;--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;------------------------</option>
                          <option value="+376">+376&nbsp;&nbsp;AD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ANDORRA</option>
                          <option value="+971">+971&nbsp;&nbsp;AE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;UNITED ARAB EMIRATES</option>
                          <option value="+93">+93&nbsp;&nbsp;AF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;AFGHANISTAN</option>
                          <option value="+1268">+1268&nbsp;&nbsp;AG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ANTIGUA AND BARBUDA</option>
                          <option value="+1264">+1264&nbsp;&nbsp;AI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ANGUILLA</option>
                          <option value="+355">+355&nbsp;&nbsp;AL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ALBANIA</option>
                          <option value="+374">+374&nbsp;&nbsp;AM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ARMENIA</option>
                          <option value="+599">+599&nbsp;&nbsp;AN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NETHERLANDS ANTILLES</option>
                          <option value="+244">+244&nbsp;&nbsp;AO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ANGOLA</option>
                          <option value="+672">+672&nbsp;&nbsp;AQ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ANTARCTICA</option>
                          <option value="+54">+54&nbsp;&nbsp;AR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ARGENTINA</option>
                          <option value="+1684">+1684&nbsp;&nbsp;AS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;AMERICAN SAMOA</option>
                          <option value="+43">+43&nbsp;&nbsp;AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;AUSTRIA</option>
                          <option value="+61">+61&nbsp;&nbsp;AU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;AUSTRALIA</option>
                          <option value="+297">+297&nbsp;&nbsp;AW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ARUBA</option>
                          <option value="+994">+994&nbsp;&nbsp;AZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;AZERBAIJAN</option>
                          <option value="+387">+387&nbsp;&nbsp;BA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BOSNIA AND HERZEGOVINA</option>
                          <option value="+1246">+1246&nbsp;&nbsp;BB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BARBADOS</option>
                          <option value="+880">+880&nbsp;&nbsp;BD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BANGLADESH</option>
                          <option value="+32">+32&nbsp;&nbsp;BE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BELGIUM</option>
                          <option value="+226">+226&nbsp;&nbsp;BF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BURKINA FASO</option>
                          <option value="+359">+359&nbsp;&nbsp;BG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BULGARIA</option>
                          <option value="+973">+973&nbsp;&nbsp;BH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BAHRAIN</option>
                          <option value="+257">+257&nbsp;&nbsp;BI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BURUNDI</option>
                          <option value="+229">+229&nbsp;&nbsp;BJ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BENIN</option>
                          <option value="+590">+590&nbsp;&nbsp;BL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAINT BARTHELEMY</option>
                          <option value="+1441">+1441&nbsp;&nbsp;BM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BERMUDA</option>
                          <option value="+673">+673&nbsp;&nbsp;BN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BRUNEI DARUSSALAM</option>
                          <option value="+591">+591&nbsp;&nbsp;BO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BOLIVIA</option>
                          <option value="+55">+55&nbsp;&nbsp;BR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BRAZIL</option>
                          <option value="+1242">+1242&nbsp;&nbsp;BS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BAHAMAS</option>
                          <option value="+975">+975&nbsp;&nbsp;BT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BHUTAN</option>
                          <option value="+267">+267&nbsp;&nbsp;BW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BOTSWANA</option>
                          <option value="+375">+375&nbsp;&nbsp;BY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BELARUS</option>
                          <option value="+501">+501&nbsp;&nbsp;BZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BELIZE</option>
                          <option value="+61">+61&nbsp;&nbsp;CC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;COCOS (KEELING ISLANDS</option>
                          <option value="+243">+243&nbsp;&nbsp;CD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CONGO, THE DEMOCRATIC REPUBLIC OF THE</option>
                          <option value="+236">+236&nbsp;&nbsp;CF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CENTRAL AFRICAN REPUBLIC</option>
                          <option value="+242">+242&nbsp;&nbsp;CG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CONGO</option>
                          <option value="+41">+41&nbsp;&nbsp;CH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SWITZERLAND</option>
                          <option value="+225">+225&nbsp;&nbsp;CI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;COTE D IVOIRE</option>
                          <option value="+682">+682&nbsp;&nbsp;CK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;COOK ISLANDS</option>
                          <option value="+56">+56&nbsp;&nbsp;CL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CHILE</option>
                          <option value="+237">+237&nbsp;&nbsp;CM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CAMEROON</option>
                          <option value="+86">+86&nbsp;&nbsp;CN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CHINA</option>
                          <option value="+57">+57&nbsp;&nbsp;CO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;COLOMBIA</option>
                          <option value="+506">+506&nbsp;&nbsp;CR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;COSTA RICA</option>
                          <option value="+53">+53&nbsp;&nbsp;CU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CUBA</option>
                          <option value="+238">+238&nbsp;&nbsp;CV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CAPE VERDE</option>
                          <option value="+61">+61&nbsp;&nbsp;CX&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CHRISTMAS ISLAND</option>
                          <option value="+357">+357&nbsp;&nbsp;CY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CYPRUS</option>
                          <option value="+420">+420&nbsp;&nbsp;CZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CZECH REPUBLIC</option>
                          <option value="+49">+49&nbsp;&nbsp;DE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GERMANY</option>
                          <option value="+253">+253&nbsp;&nbsp;DJ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;DJIBOUTI</option>
                          <option value="+45">+45&nbsp;&nbsp;DK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;DENMARK</option>
                          <option value="+1767">+1767&nbsp;&nbsp;DM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;DOMINICA</option>
                          <option value="+1809">+1809&nbsp;&nbsp;DO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;DOMINICAN REPUBLIC</option>
                          <option value="+213">+213&nbsp;&nbsp;DZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ALGERIA</option>
                          <option value="+593">+593&nbsp;&nbsp;EC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ECUADOR</option>
                          <option value="+372">+372&nbsp;&nbsp;EE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ESTONIA</option>
                          <option value="+20">+20&nbsp;&nbsp;EG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;EGYPT</option>
                          <option value="+291">+291&nbsp;&nbsp;ER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ERITREA</option>
                          <option value="+34">+34&nbsp;&nbsp;ES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SPAIN</option>
                          <option value="+251">+251&nbsp;&nbsp;ET&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ETHIOPIA</option>
                          <option value="+358">+358&nbsp;&nbsp;FI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;FINLAND</option>
                          <option value="+679">+679&nbsp;&nbsp;FJ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;FIJI</option>
                          <option value="+500">+500&nbsp;&nbsp;FK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;FALKLAND ISLANDS (MALVINAS</option>
                          <option value="+691">+691&nbsp;&nbsp;FM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MICRONESIA, FEDERATED STATES OF</option>
                          <option value="+298">+298&nbsp;&nbsp;FO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;FAROE ISLANDS</option>
                          <option value="+33">+33&nbsp;&nbsp;FR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;FRANCE</option>
                          <option value="+241">+241&nbsp;&nbsp;GA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GABON</option>
                          <option value="+1473">+1473&nbsp;&nbsp;GD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GRENADA</option>
                          <option value="+995">+995&nbsp;&nbsp;GE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GEORGIA</option>
                          <option value="+233">+233&nbsp;&nbsp;GH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GHANA</option>
                          <option value="+350">+350&nbsp;&nbsp;GI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GIBRALTAR</option>
                          <option value="+299">+299&nbsp;&nbsp;GL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GREENLAND</option>
                          <option value="+220">+220&nbsp;&nbsp;GM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GAMBIA</option>
                          <option value="+224">+224&nbsp;&nbsp;GN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GUINEA</option>
                          <option value="+240">+240&nbsp;&nbsp;GQ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;EQUATORIAL GUINEA</option>
                          <option value="+30">+30&nbsp;&nbsp;GR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GREECE</option>
                          <option value="+502">+502&nbsp;&nbsp;GT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GUATEMALA</option>
                          <option value="+1671">+1671&nbsp;&nbsp;GU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GUAM</option>
                          <option value="+245">+245&nbsp;&nbsp;GW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GUINEA-BISSAU</option>
                          <option value="+592">+592&nbsp;&nbsp;GY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GUYANA</option>
                          <option value="+852">+852&nbsp;&nbsp;HK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;HONG KONG</option>
                          <option value="+504">+504&nbsp;&nbsp;HN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;HONDURAS</option>
                          <option value="+385">+385&nbsp;&nbsp;HR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CROATIA</option>
                          <option value="+509">+509&nbsp;&nbsp;HT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;HAITI</option>
                          <option value="+36">+36&nbsp;&nbsp;HU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;HUNGARY</option>
                          <option value="+62">+62&nbsp;&nbsp;ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;INDONESIA</option>
                          <option value="+353">+353&nbsp;&nbsp;IE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;IRELAND</option>
                          <option value="+972">+972&nbsp;&nbsp;IL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ISRAEL</option>
                          <option value="+44">+44&nbsp;&nbsp;IM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ISLE OF MAN</option>
                          <option value="+964">+964&nbsp;&nbsp;IQ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;IRAQ</option>
                          <option value="+98">+98&nbsp;&nbsp;IR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;IRAN, ISLAMIC REPUBLIC OF</option>
                          <option value="+354">+354&nbsp;&nbsp;IS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ICELAND</option>
                          <option value="+39">+39&nbsp;&nbsp;IT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ITALY</option>
                          <option value="+1876">+1876&nbsp;&nbsp;JM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;JAMAICA</option>
                          <option value="+962">+962&nbsp;&nbsp;JO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;JORDAN</option>
                          <option value="+81">+81&nbsp;&nbsp;JP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;JAPAN</option>
                          <option value="+254">+254&nbsp;&nbsp;KE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;KENYA</option>
                          <option value="+996">+996&nbsp;&nbsp;KG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;KYRGYZSTAN</option>
                          <option value="+855">+855&nbsp;&nbsp;KH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CAMBODIA</option>
                          <option value="+686">+686&nbsp;&nbsp;KI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;KIRIBATI</option>
                          <option value="+269">+269&nbsp;&nbsp;KM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;COMOROS</option>
                          <option value="+1869">+1869&nbsp;&nbsp;KN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAINT KITTS AND NEVIS</option>
                          <option value="+850">+850&nbsp;&nbsp;KP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;KOREA DEMOCRATIC PEOPLES REPUBLIC OF</option>
                          <option value="+82">+82&nbsp;&nbsp;KR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;KOREA REPUBLIC OF</option>
                          <option value="+965">+965&nbsp;&nbsp;KW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;KUWAIT</option>
                          <option value="+1345">+1345&nbsp;&nbsp;KY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CAYMAN ISLANDS</option>
                          <option value="+7">+7&nbsp;&nbsp;KZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;KAZAKSTAN</option>
                          <option value="+856">+856&nbsp;&nbsp;LA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LAO PEOPLES DEMOCRATIC REPUBLIC</option>
                          <option value="+961">+961&nbsp;&nbsp;LB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LEBANON</option>
                          <option value="+1758">+1758&nbsp;&nbsp;LC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAINT LUCIA</option>
                          <option value="+423">+423&nbsp;&nbsp;LI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LIECHTENSTEIN</option>
                          <option value="+94">+94&nbsp;&nbsp;LK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SRI LANKA</option>
                          <option value="+231">+231&nbsp;&nbsp;LR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LIBERIA</option>
                          <option value="+266">+266&nbsp;&nbsp;LS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LESOTHO</option>
                          <option value="+370">+370&nbsp;&nbsp;LT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LITHUANIA</option>
                          <option value="+352">+352&nbsp;&nbsp;LU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LUXEMBOURG</option>
                          <option value="+371">+371&nbsp;&nbsp;LV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LATVIA</option>
                          <option value="+218">+218&nbsp;&nbsp;LY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LIBYAN ARAB JAMAHIRIYA</option>
                          <option value="+212">+212&nbsp;&nbsp;MA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MOROCCO</option>
                          <option value="+377">+377&nbsp;&nbsp;MC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MONACO</option>
                          <option value="+373">+373&nbsp;&nbsp;MD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MOLDOVA, REPUBLIC OF</option>
                          <option value="+382">+382&nbsp;&nbsp;ME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MONTENEGRO</option>
                          <option value="+1599">+1599&nbsp;&nbsp;MF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAINT MARTIN</option>
                          <option value="+261">+261&nbsp;&nbsp;MG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MADAGASCAR</option>
                          <option value="+692">+692&nbsp;&nbsp;MH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MARSHALL ISLANDS</option>
                          <option value="+389">+389&nbsp;&nbsp;MK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF</option>
                          <option value="+223">+223&nbsp;&nbsp;ML&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MALI</option>
                          <option value="+95">+95&nbsp;&nbsp;MM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MYANMAR</option>
                          <option value="+976">+976&nbsp;&nbsp;MN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MONGOLIA</option>
                          <option value="+853">+853&nbsp;&nbsp;MO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MACAU</option>
                          <option value="+1670">+1670&nbsp;&nbsp;MP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NORTHERN MARIANA ISLANDS</option>
                          <option value="+222">+222&nbsp;&nbsp;MR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MAURITANIA</option>
                          <option value="+1664">+1664&nbsp;&nbsp;MS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MONTSERRAT</option>
                          <option value="+356">+356&nbsp;&nbsp;MT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MALTA</option>
                          <option value="+230">+230&nbsp;&nbsp;MU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MAURITIUS</option>
                          <option value="+960">+960&nbsp;&nbsp;MV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MALDIVES</option>
                          <option value="+265">+265&nbsp;&nbsp;MW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MALAWI</option>
                          <option value="+52">+52&nbsp;&nbsp;MX&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MEXICO</option>
                          <option value="+60">+60&nbsp;&nbsp;MY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MALAYSIA</option>
                          <option value="+258">+258&nbsp;&nbsp;MZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MOZAMBIQUE</option>
                          <option value="+264">+264&nbsp;&nbsp;NA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NAMIBIA</option>
                          <option value="+687">+687&nbsp;&nbsp;NC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NEW CALEDONIA</option>
                          <option value="+227">+227&nbsp;&nbsp;NE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NIGER</option>
                          <option value="+234">+234&nbsp;&nbsp;NG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NIGERIA</option>
                          <option value="+505">+505&nbsp;&nbsp;NI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NICARAGUA</option>
                          <option value="+31">+31&nbsp;&nbsp;NL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NETHERLANDS</option>
                          <option value="+47">+47&nbsp;&nbsp;NO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NORWAY</option>
                          <option value="+977">+977&nbsp;&nbsp;NP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NEPAL</option>
                          <option value="+674">+674&nbsp;&nbsp;NR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NAURU</option>
                          <option value="+683">+683&nbsp;&nbsp;NU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NIUE</option>
                          <option value="+64">+64&nbsp;&nbsp;NZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NEW ZEALAND</option>
                          <option value="+968">+968&nbsp;&nbsp;OM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;OMAN</option>
                          <option value="+507">+507&nbsp;&nbsp;PA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PANAMA</option>
                          <option value="+51">+51&nbsp;&nbsp;PE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PERU</option>
                          <option value="+689">+689&nbsp;&nbsp;PF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;FRENCH POLYNESIA</option>
                          <option value="+675">+675&nbsp;&nbsp;PG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PAPUA NEW GUINEA</option>
                          <option value="+63">+63&nbsp;&nbsp;PH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PHILIPPINES</option>
                          <option value="+92">+92&nbsp;&nbsp;PK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PAKISTAN</option>
                          <option value="+48">+48&nbsp;&nbsp;PL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;POLAND</option>
                          <option value="+508">+508&nbsp;&nbsp;PM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAINT PIERRE AND MIQUELON</option>
                          <option value="+870">+870&nbsp;&nbsp;PN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PITCAIRN</option>
                          <option value="+1">+1&nbsp;&nbsp;PR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PUERTO RICO</option>
                          <option value="+351">+351&nbsp;&nbsp;PT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PORTUGAL</option>
                          <option value="+680">+680&nbsp;&nbsp;PW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PALAU</option>
                          <option value="+595">+595&nbsp;&nbsp;PY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PARAGUAY</option>
                          <option value="+974">+974&nbsp;&nbsp;QA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;QATAR</option>
                          <option value="+40">+40&nbsp;&nbsp;RO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ROMANIA</option>
                          <option value="+381">+381&nbsp;&nbsp;RS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SERBIA</option>
                          <option value="+7">+7&nbsp;&nbsp;RU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;RUSSIAN FEDERATION</option>
                          <option value="+250">+250&nbsp;&nbsp;RW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;RWANDA</option>
                          <option value="+966">+966&nbsp;&nbsp;SA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAUDI ARABIA</option>
                          <option value="+677">+677&nbsp;&nbsp;SB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SOLOMON ISLANDS</option>
                          <option value="+248">+248&nbsp;&nbsp;SC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SEYCHELLES</option>
                          <option value="+249">+249&nbsp;&nbsp;SD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SUDAN</option>
                          <option value="+46">+46&nbsp;&nbsp;SE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SWEDEN</option>
                          <option value="+65">+65&nbsp;&nbsp;SG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SINGAPORE</option>
                          <option value="+290">+290&nbsp;&nbsp;SH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAINT HELENA</option>
                          <option value="+386">+386&nbsp;&nbsp;SI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SLOVENIA</option>
                          <option value="+421">+421&nbsp;&nbsp;SK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SLOVAKIA</option>
                          <option value="+232">+232&nbsp;&nbsp;SL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SIERRA LEONE</option>
                          <option value="+378">+378&nbsp;&nbsp;SM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAN MARINO</option>
                          <option value="+221">+221&nbsp;&nbsp;SN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SENEGAL</option>
                          <option value="+252">+252&nbsp;&nbsp;SO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SOMALIA</option>
                          <option value="+597">+597&nbsp;&nbsp;SR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SURINAME</option>
                          <option value="+239">+239&nbsp;&nbsp;ST&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAO TOME AND PRINCIPE</option>
                          <option value="+503">+503&nbsp;&nbsp;SV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;EL SALVADOR</option>
                          <option value="+963">+963&nbsp;&nbsp;SY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SYRIAN ARAB REPUBLIC</option>
                          <option value="+268">+268&nbsp;&nbsp;SZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SWAZILAND</option>
                          <option value="+1649">+1649&nbsp;&nbsp;TC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TURKS AND CAICOS ISLANDS</option>
                          <option value="+235">+235&nbsp;&nbsp;TD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CHAD</option>
                          <option value="+228">+228&nbsp;&nbsp;TG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TOGO</option>
                          <option value="+66">+66&nbsp;&nbsp;TH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;THAILAND</option>
                          <option value="+992">+992&nbsp;&nbsp;TJ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TAJIKISTAN</option>
                          <option value="+690">+690&nbsp;&nbsp;TK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TOKELAU</option>
                          <option value="+670">+670&nbsp;&nbsp;TL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TIMOR-LESTE</option>
                          <option value="+993">+993&nbsp;&nbsp;TM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TURKMENISTAN</option>
                          <option value="+216">+216&nbsp;&nbsp;TN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TUNISIA</option>
                          <option value="+676">+676&nbsp;&nbsp;TO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TONGA</option>
                          <option value="+90">+90&nbsp;&nbsp;TR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TURKEY</option>
                          <option value="+1868">+1868&nbsp;&nbsp;TT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TRINIDAD AND TOBAGO</option>
                          <option value="+688">+688&nbsp;&nbsp;TV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TUVALU</option>
                          <option value="+886">+886&nbsp;&nbsp;TW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TAIWAN, PROVINCE OF CHINA</option>
                          <option value="+255">+255&nbsp;&nbsp;TZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TANZANIA, UNITED REPUBLIC OF</option>
                          <option value="+380">+380&nbsp;&nbsp;UA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;UKRAINE</option>
                          <option value="+256">+256&nbsp;&nbsp;UG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;UGANDA</option>
                          <option value="+598">+598&nbsp;&nbsp;UY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;URUGUAY</option>
                          <option value="+998">+998&nbsp;&nbsp;UZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;UZBEKISTAN</option>
                          <option value="+39">+39&nbsp;&nbsp;VA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;HOLY SEE (VATICAN CITY STATE</option>
                          <option value="+1784">+1784&nbsp;&nbsp;VC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAINT VINCENT AND THE GRENADINES</option>
                          <option value="+58">+58&nbsp;&nbsp;VE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;VENEZUELA</option>
                          <option value="+1284">+1284&nbsp;&nbsp;VG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;VIRGIN ISLANDS, BRITISH</option>
                          <option value="+1340">+1340&nbsp;&nbsp;VI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;VIRGIN ISLANDS, U.S.</option>
                          <option value="+84">+84&nbsp;&nbsp;VN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;VIET NAM</option>
                          <option value="+678">+678&nbsp;&nbsp;VU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;VANUATU</option>
                          <option value="+681">+681&nbsp;&nbsp;WF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;WALLIS AND FUTUNA</option>
                          <option value="+685">+685&nbsp;&nbsp;WS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAMOA</option>
                          <option value="+381">+381&nbsp;&nbsp;XK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;KOSOVO</option>
                          <option value="+967">+967&nbsp;&nbsp;YE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;YEMEN</option>
                          <option value="+262">+262&nbsp;&nbsp;YT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MAYOTTE</option>
                          <option value="+27">+27&nbsp;&nbsp;ZA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SOUTH AFRICA</option>
                          <option value="+260">+260&nbsp;&nbsp;ZM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ZAMBIA</option>
                          <option value="+263">+263&nbsp;&nbsp;ZW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ZIMBABWE</option>
                        </select>
                        <input type="hidden" id="ip-vk-zoho-cty" name="SingleLine5" checktype="c1" value="US" maxlength="255" fieldType="1" />
                      </div>
                      <div class="form-group pl-0 mobile-wrap-with-country">
                        <input class="form-control rounded-0" placeholder="Mobile Number*" type="number" compname="PhoneNumber" name="phone" phoneformat="1" iscountrycodeenabled="true" maxlength="20" value fieldtype="11" id="pgledcpt_mb1" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-12 p-0">
                        <input class="form-control" placeholder="Email*" type="email" maxlength="255" name="Email" id="pgledcpt_email2" value fieldtype="9" required>
                      </div>
                    </div>
                    <div class="form-row">
                      <input id="pg-bot-dwn-btn" type="submit" name="pgledus_btm_submit" value="Apply Now" class="form-submit pgp-submit">
                    </div>
                    <div class="pgledctfm-rsponse-msg" id="pgledfm-bm-rsponse-msg"> </div>
                    <div class="pgledctfm-success-msg" id="pgledfm-bm-success-msg"></div>

                  </form>
                </div>
              </div>
            </div>
</div>
        </div>
      </div>
    </div>
  </div>
  <!-- <section id="" class="">
    <div class="container" data-aos="fade-up">

      
    </div>
  </section> -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Reviews</h2>
        <p>Testimonials</p>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
          @php
          $testimonials = returnCourseTestimonials($course->id);
          @endphp
          @foreach($testimonials as $testimonial)
          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item manage">
                <img src="{{asset('/public/uploads/CourseTestimonials/' . $testimonial->image)}}" style="background-color: darkgray;object-fit: fill;" class="testimonial-img" alt="">
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
                  @php
                  $testimonials = returnCourseTransitions($course->id);
                  @endphp
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
                          <img src="{{asset('/public/uploads/Coursetransition/' . $testimonial->image)}}" style="background-color: darkgray; object-fit: fill;" class="testimonial-img" alt="">
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



















  <section id="master-about-section">
    <div class="container">
      <h2 style="color: #4285F4;">Who Can <b style="color: #EF6603;">Apply for the Course?</b></h2>
      <div class="who-can-apply-wrapper">
        <div class="row align-items-center">
          <div class="col-lg-8 who-can-apply-content">
            <ul>
              @php
              $cwcas = returnCourseCWCA($course->id);
              @endphp

              @foreach($cwcas as $cwca)
              <li style="font-weight: 400;" aria-level="1"><b>{{$cwca->name}}</b></li>
              @endforeach

            </ul>
          </div>
          <div class="col-lg-4 d-none d-lg-block">
            <img src="https://intellipaat.com/course-image/2020/08/who-can-apply.png" alt="Who can aaply" class="ip-cs-lazy-load ip-vk-soft-img" width="387" height="292" />
          </div>
        </div>
      </div>

    </div>
  </section>

  <section id="pg-about-section">
    <div class="container">
      <div class="row pg-about-first-section">
        <div class="col-lg-12">
          <h2><span style="color: #729df5;">About <b style="color: rgb(239, 102, 3);">Program</b></span>
          </h2>
          <p class="pg-about-description">This program by iHub Divya Sampark, IIT Roorkee helps you gain the
            data analytics, machine learning, and artificial intelligence skills sought after by top
            employers.</p>
          <div class="pg-about-key-highlight">
            <h3>Key <b style="color: rgb(239, 102, 3);">Highlights</b></h3>
            <div class="pg-about-key-feature-wrapper">
              <div class="row">
                @php
                $highlights = returnCourseHighlights($course->id);
                @endphp

                @foreach($highlights as $highlight)
                <div class="col-md-6">
                  <div class="pg-about-key-feature-wrap">
                    <picture></picture>
                    <span>{{$highlight->name}}</span>
                  </div>
                </div>
                @endforeach

              </div>
            </div>
          </div>
        </div>

      </div>


    </div>
  </section>



  <section id="master-mentor-section">
    <div class="container">
      <h2 style="color: #4285F4;">Our <b style="color: #EF6603;">Alumni Work At</b></h2>
      <div class="master-alumini-image-wrap">
        <img class="d-none d-sm-block img-fluid" src="https://intellipaat.com/wp-content/themes/intellipaat/images/Hiring-Partners.png" alt="Master Client Desktop" width="100%" height="auto" />
      </div>
    </div>
  </section>



  <section id="pg-form-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 pg-form-left-section">
          <div class="pg-form-left-content">
            <p><strong>What is included in this course?</strong></p>
            <ul>
              <li>Non-biased career guidance</li>
              <li>Counselling based on your skills and preference</li>
              <li>No repetitive calls, only as per convenience</li>
              <li>Rigorous curriculum designed by industry experts</li>
              <li>Complete this program while you work</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 pg-form-right-section">
          <p><strong>I’m Interested in This Program</strong></p>
          <form id="pgleadcaptfm_bottom" class="form-default" action="{{route('training-lead')}}" method="POST" accept-charset="UTF-8">
            @csrf
            <input type="hidden" name="id" value="{{$course->id}}">
            <div class="form-row">
              <div class="form-group col-md-12 p-0">
                <input class="form-control" id="pgledcpt_fname1" placeholder="Full Name*" type="text" name="name" fieldtype="1" maxlength="255" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group pr-0 select-country-wrap" style="margin-right: -1px;">
                <select class="form-control rounded-0 ip-vk-select-cty-pass" placeholder compname="PhoneNumber_countrycodeval" name="PhoneNumber_countrycodeval" phoneformat="1" maxlength="10" id="pgledcpt_country1" required>
                  <option value="+1">+1&nbsp;&nbsp;US&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;UNITED STATES</option>
                  <option value="+44">+44&nbsp;&nbsp;UK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;UNITED KINGDOM</option>
                  <option value="IN">+91 &nbsp;&nbsp; IN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; INDIA</option>
                  <option value="+1">+1&nbsp;&nbsp;CA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CANADA</option>
                  <option value="------">------&nbsp;&nbsp;--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;------------------------</option>
                  <option value="+376">+376&nbsp;&nbsp;AD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ANDORRA</option>
                  <option value="+971">+971&nbsp;&nbsp;AE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;UNITED ARAB EMIRATES</option>
                  <option value="+93">+93&nbsp;&nbsp;AF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;AFGHANISTAN</option>
                  <option value="+1268">+1268&nbsp;&nbsp;AG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ANTIGUA AND BARBUDA</option>
                  <option value="+1264">+1264&nbsp;&nbsp;AI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ANGUILLA</option>
                  <option value="+355">+355&nbsp;&nbsp;AL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ALBANIA</option>
                  <option value="+374">+374&nbsp;&nbsp;AM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ARMENIA</option>
                  <option value="+599">+599&nbsp;&nbsp;AN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NETHERLANDS ANTILLES</option>
                  <option value="+244">+244&nbsp;&nbsp;AO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ANGOLA</option>
                  <option value="+672">+672&nbsp;&nbsp;AQ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ANTARCTICA</option>
                  <option value="+54">+54&nbsp;&nbsp;AR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ARGENTINA</option>
                  <option value="+1684">+1684&nbsp;&nbsp;AS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;AMERICAN SAMOA</option>
                  <option value="+43">+43&nbsp;&nbsp;AT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;AUSTRIA</option>
                  <option value="+61">+61&nbsp;&nbsp;AU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;AUSTRALIA</option>
                  <option value="+297">+297&nbsp;&nbsp;AW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ARUBA</option>
                  <option value="+994">+994&nbsp;&nbsp;AZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;AZERBAIJAN</option>
                  <option value="+387">+387&nbsp;&nbsp;BA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BOSNIA AND HERZEGOVINA</option>
                  <option value="+1246">+1246&nbsp;&nbsp;BB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BARBADOS</option>
                  <option value="+880">+880&nbsp;&nbsp;BD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BANGLADESH</option>
                  <option value="+32">+32&nbsp;&nbsp;BE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BELGIUM</option>
                  <option value="+226">+226&nbsp;&nbsp;BF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BURKINA FASO</option>
                  <option value="+359">+359&nbsp;&nbsp;BG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BULGARIA</option>
                  <option value="+973">+973&nbsp;&nbsp;BH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BAHRAIN</option>
                  <option value="+257">+257&nbsp;&nbsp;BI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BURUNDI</option>
                  <option value="+229">+229&nbsp;&nbsp;BJ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BENIN</option>
                  <option value="+590">+590&nbsp;&nbsp;BL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAINT BARTHELEMY</option>
                  <option value="+1441">+1441&nbsp;&nbsp;BM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BERMUDA</option>
                  <option value="+673">+673&nbsp;&nbsp;BN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BRUNEI DARUSSALAM</option>
                  <option value="+591">+591&nbsp;&nbsp;BO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BOLIVIA</option>
                  <option value="+55">+55&nbsp;&nbsp;BR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BRAZIL</option>
                  <option value="+1242">+1242&nbsp;&nbsp;BS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BAHAMAS</option>
                  <option value="+975">+975&nbsp;&nbsp;BT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BHUTAN</option>
                  <option value="+267">+267&nbsp;&nbsp;BW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BOTSWANA</option>
                  <option value="+375">+375&nbsp;&nbsp;BY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BELARUS</option>
                  <option value="+501">+501&nbsp;&nbsp;BZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;BELIZE</option>
                  <option value="+61">+61&nbsp;&nbsp;CC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;COCOS (KEELING ISLANDS</option>
                  <option value="+243">+243&nbsp;&nbsp;CD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CONGO, THE DEMOCRATIC REPUBLIC OF THE</option>
                  <option value="+236">+236&nbsp;&nbsp;CF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CENTRAL AFRICAN REPUBLIC</option>
                  <option value="+242">+242&nbsp;&nbsp;CG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CONGO</option>
                  <option value="+41">+41&nbsp;&nbsp;CH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SWITZERLAND</option>
                  <option value="+225">+225&nbsp;&nbsp;CI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;COTE D IVOIRE</option>
                  <option value="+682">+682&nbsp;&nbsp;CK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;COOK ISLANDS</option>
                  <option value="+56">+56&nbsp;&nbsp;CL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CHILE</option>
                  <option value="+237">+237&nbsp;&nbsp;CM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CAMEROON</option>
                  <option value="+86">+86&nbsp;&nbsp;CN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CHINA</option>
                  <option value="+57">+57&nbsp;&nbsp;CO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;COLOMBIA</option>
                  <option value="+506">+506&nbsp;&nbsp;CR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;COSTA RICA</option>
                  <option value="+53">+53&nbsp;&nbsp;CU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CUBA</option>
                  <option value="+238">+238&nbsp;&nbsp;CV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CAPE VERDE</option>
                  <option value="+61">+61&nbsp;&nbsp;CX&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CHRISTMAS ISLAND</option>
                  <option value="+357">+357&nbsp;&nbsp;CY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CYPRUS</option>
                  <option value="+420">+420&nbsp;&nbsp;CZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CZECH REPUBLIC</option>
                  <option value="+49">+49&nbsp;&nbsp;DE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GERMANY</option>
                  <option value="+253">+253&nbsp;&nbsp;DJ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;DJIBOUTI</option>
                  <option value="+45">+45&nbsp;&nbsp;DK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;DENMARK</option>
                  <option value="+1767">+1767&nbsp;&nbsp;DM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;DOMINICA</option>
                  <option value="+1809">+1809&nbsp;&nbsp;DO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;DOMINICAN REPUBLIC</option>
                  <option value="+213">+213&nbsp;&nbsp;DZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ALGERIA</option>
                  <option value="+593">+593&nbsp;&nbsp;EC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ECUADOR</option>
                  <option value="+372">+372&nbsp;&nbsp;EE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ESTONIA</option>
                  <option value="+20">+20&nbsp;&nbsp;EG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;EGYPT</option>
                  <option value="+291">+291&nbsp;&nbsp;ER&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ERITREA</option>
                  <option value="+34">+34&nbsp;&nbsp;ES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SPAIN</option>
                  <option value="+251">+251&nbsp;&nbsp;ET&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ETHIOPIA</option>
                  <option value="+358">+358&nbsp;&nbsp;FI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;FINLAND</option>
                  <option value="+679">+679&nbsp;&nbsp;FJ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;FIJI</option>
                  <option value="+500">+500&nbsp;&nbsp;FK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;FALKLAND ISLANDS (MALVINAS</option>
                  <option value="+691">+691&nbsp;&nbsp;FM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MICRONESIA, FEDERATED STATES OF</option>
                  <option value="+298">+298&nbsp;&nbsp;FO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;FAROE ISLANDS</option>
                  <option value="+33">+33&nbsp;&nbsp;FR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;FRANCE</option>
                  <option value="+241">+241&nbsp;&nbsp;GA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GABON</option>
                  <option value="+1473">+1473&nbsp;&nbsp;GD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GRENADA</option>
                  <option value="+995">+995&nbsp;&nbsp;GE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GEORGIA</option>
                  <option value="+233">+233&nbsp;&nbsp;GH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GHANA</option>
                  <option value="+350">+350&nbsp;&nbsp;GI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GIBRALTAR</option>
                  <option value="+299">+299&nbsp;&nbsp;GL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GREENLAND</option>
                  <option value="+220">+220&nbsp;&nbsp;GM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GAMBIA</option>
                  <option value="+224">+224&nbsp;&nbsp;GN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GUINEA</option>
                  <option value="+240">+240&nbsp;&nbsp;GQ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;EQUATORIAL GUINEA</option>
                  <option value="+30">+30&nbsp;&nbsp;GR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GREECE</option>
                  <option value="+502">+502&nbsp;&nbsp;GT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GUATEMALA</option>
                  <option value="+1671">+1671&nbsp;&nbsp;GU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GUAM</option>
                  <option value="+245">+245&nbsp;&nbsp;GW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GUINEA-BISSAU</option>
                  <option value="+592">+592&nbsp;&nbsp;GY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;GUYANA</option>
                  <option value="+852">+852&nbsp;&nbsp;HK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;HONG KONG</option>
                  <option value="+504">+504&nbsp;&nbsp;HN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;HONDURAS</option>
                  <option value="+385">+385&nbsp;&nbsp;HR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CROATIA</option>
                  <option value="+509">+509&nbsp;&nbsp;HT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;HAITI</option>
                  <option value="+36">+36&nbsp;&nbsp;HU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;HUNGARY</option>
                  <option value="+62">+62&nbsp;&nbsp;ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;INDONESIA</option>
                  <option value="+353">+353&nbsp;&nbsp;IE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;IRELAND</option>
                  <option value="+972">+972&nbsp;&nbsp;IL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ISRAEL</option>
                  <option value="+44">+44&nbsp;&nbsp;IM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ISLE OF MAN</option>
                  <option value="+964">+964&nbsp;&nbsp;IQ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;IRAQ</option>
                  <option value="+98">+98&nbsp;&nbsp;IR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;IRAN, ISLAMIC REPUBLIC OF</option>
                  <option value="+354">+354&nbsp;&nbsp;IS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ICELAND</option>
                  <option value="+39">+39&nbsp;&nbsp;IT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ITALY</option>
                  <option value="+1876">+1876&nbsp;&nbsp;JM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;JAMAICA</option>
                  <option value="+962">+962&nbsp;&nbsp;JO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;JORDAN</option>
                  <option value="+81">+81&nbsp;&nbsp;JP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;JAPAN</option>
                  <option value="+254">+254&nbsp;&nbsp;KE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;KENYA</option>
                  <option value="+996">+996&nbsp;&nbsp;KG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;KYRGYZSTAN</option>
                  <option value="+855">+855&nbsp;&nbsp;KH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CAMBODIA</option>
                  <option value="+686">+686&nbsp;&nbsp;KI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;KIRIBATI</option>
                  <option value="+269">+269&nbsp;&nbsp;KM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;COMOROS</option>
                  <option value="+1869">+1869&nbsp;&nbsp;KN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAINT KITTS AND NEVIS</option>
                  <option value="+850">+850&nbsp;&nbsp;KP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;KOREA DEMOCRATIC PEOPLES REPUBLIC OF</option>
                  <option value="+82">+82&nbsp;&nbsp;KR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;KOREA REPUBLIC OF</option>
                  <option value="+965">+965&nbsp;&nbsp;KW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;KUWAIT</option>
                  <option value="+1345">+1345&nbsp;&nbsp;KY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CAYMAN ISLANDS</option>
                  <option value="+7">+7&nbsp;&nbsp;KZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;KAZAKSTAN</option>
                  <option value="+856">+856&nbsp;&nbsp;LA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LAO PEOPLES DEMOCRATIC REPUBLIC</option>
                  <option value="+961">+961&nbsp;&nbsp;LB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LEBANON</option>
                  <option value="+1758">+1758&nbsp;&nbsp;LC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAINT LUCIA</option>
                  <option value="+423">+423&nbsp;&nbsp;LI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LIECHTENSTEIN</option>
                  <option value="+94">+94&nbsp;&nbsp;LK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SRI LANKA</option>
                  <option value="+231">+231&nbsp;&nbsp;LR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LIBERIA</option>
                  <option value="+266">+266&nbsp;&nbsp;LS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LESOTHO</option>
                  <option value="+370">+370&nbsp;&nbsp;LT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LITHUANIA</option>
                  <option value="+352">+352&nbsp;&nbsp;LU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LUXEMBOURG</option>
                  <option value="+371">+371&nbsp;&nbsp;LV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LATVIA</option>
                  <option value="+218">+218&nbsp;&nbsp;LY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;LIBYAN ARAB JAMAHIRIYA</option>
                  <option value="+212">+212&nbsp;&nbsp;MA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MOROCCO</option>
                  <option value="+377">+377&nbsp;&nbsp;MC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MONACO</option>
                  <option value="+373">+373&nbsp;&nbsp;MD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MOLDOVA, REPUBLIC OF</option>
                  <option value="+382">+382&nbsp;&nbsp;ME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MONTENEGRO</option>
                  <option value="+1599">+1599&nbsp;&nbsp;MF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAINT MARTIN</option>
                  <option value="+261">+261&nbsp;&nbsp;MG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MADAGASCAR</option>
                  <option value="+692">+692&nbsp;&nbsp;MH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MARSHALL ISLANDS</option>
                  <option value="+389">+389&nbsp;&nbsp;MK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF</option>
                  <option value="+223">+223&nbsp;&nbsp;ML&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MALI</option>
                  <option value="+95">+95&nbsp;&nbsp;MM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MYANMAR</option>
                  <option value="+976">+976&nbsp;&nbsp;MN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MONGOLIA</option>
                  <option value="+853">+853&nbsp;&nbsp;MO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MACAU</option>
                  <option value="+1670">+1670&nbsp;&nbsp;MP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NORTHERN MARIANA ISLANDS</option>
                  <option value="+222">+222&nbsp;&nbsp;MR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MAURITANIA</option>
                  <option value="+1664">+1664&nbsp;&nbsp;MS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MONTSERRAT</option>
                  <option value="+356">+356&nbsp;&nbsp;MT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MALTA</option>
                  <option value="+230">+230&nbsp;&nbsp;MU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MAURITIUS</option>
                  <option value="+960">+960&nbsp;&nbsp;MV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MALDIVES</option>
                  <option value="+265">+265&nbsp;&nbsp;MW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MALAWI</option>
                  <option value="+52">+52&nbsp;&nbsp;MX&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MEXICO</option>
                  <option value="+60">+60&nbsp;&nbsp;MY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MALAYSIA</option>
                  <option value="+258">+258&nbsp;&nbsp;MZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MOZAMBIQUE</option>
                  <option value="+264">+264&nbsp;&nbsp;NA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NAMIBIA</option>
                  <option value="+687">+687&nbsp;&nbsp;NC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NEW CALEDONIA</option>
                  <option value="+227">+227&nbsp;&nbsp;NE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NIGER</option>
                  <option value="+234">+234&nbsp;&nbsp;NG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NIGERIA</option>
                  <option value="+505">+505&nbsp;&nbsp;NI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NICARAGUA</option>
                  <option value="+31">+31&nbsp;&nbsp;NL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NETHERLANDS</option>
                  <option value="+47">+47&nbsp;&nbsp;NO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NORWAY</option>
                  <option value="+977">+977&nbsp;&nbsp;NP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NEPAL</option>
                  <option value="+674">+674&nbsp;&nbsp;NR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NAURU</option>
                  <option value="+683">+683&nbsp;&nbsp;NU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NIUE</option>
                  <option value="+64">+64&nbsp;&nbsp;NZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;NEW ZEALAND</option>
                  <option value="+968">+968&nbsp;&nbsp;OM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;OMAN</option>
                  <option value="+507">+507&nbsp;&nbsp;PA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PANAMA</option>
                  <option value="+51">+51&nbsp;&nbsp;PE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PERU</option>
                  <option value="+689">+689&nbsp;&nbsp;PF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;FRENCH POLYNESIA</option>
                  <option value="+675">+675&nbsp;&nbsp;PG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PAPUA NEW GUINEA</option>
                  <option value="+63">+63&nbsp;&nbsp;PH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PHILIPPINES</option>
                  <option value="+92">+92&nbsp;&nbsp;PK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PAKISTAN</option>
                  <option value="+48">+48&nbsp;&nbsp;PL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;POLAND</option>
                  <option value="+508">+508&nbsp;&nbsp;PM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAINT PIERRE AND MIQUELON</option>
                  <option value="+870">+870&nbsp;&nbsp;PN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PITCAIRN</option>
                  <option value="+1">+1&nbsp;&nbsp;PR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PUERTO RICO</option>
                  <option value="+351">+351&nbsp;&nbsp;PT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PORTUGAL</option>
                  <option value="+680">+680&nbsp;&nbsp;PW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PALAU</option>
                  <option value="+595">+595&nbsp;&nbsp;PY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;PARAGUAY</option>
                  <option value="+974">+974&nbsp;&nbsp;QA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;QATAR</option>
                  <option value="+40">+40&nbsp;&nbsp;RO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ROMANIA</option>
                  <option value="+381">+381&nbsp;&nbsp;RS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SERBIA</option>
                  <option value="+7">+7&nbsp;&nbsp;RU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;RUSSIAN FEDERATION</option>
                  <option value="+250">+250&nbsp;&nbsp;RW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;RWANDA</option>
                  <option value="+966">+966&nbsp;&nbsp;SA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAUDI ARABIA</option>
                  <option value="+677">+677&nbsp;&nbsp;SB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SOLOMON ISLANDS</option>
                  <option value="+248">+248&nbsp;&nbsp;SC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SEYCHELLES</option>
                  <option value="+249">+249&nbsp;&nbsp;SD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SUDAN</option>
                  <option value="+46">+46&nbsp;&nbsp;SE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SWEDEN</option>
                  <option value="+65">+65&nbsp;&nbsp;SG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SINGAPORE</option>
                  <option value="+290">+290&nbsp;&nbsp;SH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAINT HELENA</option>
                  <option value="+386">+386&nbsp;&nbsp;SI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SLOVENIA</option>
                  <option value="+421">+421&nbsp;&nbsp;SK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SLOVAKIA</option>
                  <option value="+232">+232&nbsp;&nbsp;SL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SIERRA LEONE</option>
                  <option value="+378">+378&nbsp;&nbsp;SM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAN MARINO</option>
                  <option value="+221">+221&nbsp;&nbsp;SN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SENEGAL</option>
                  <option value="+252">+252&nbsp;&nbsp;SO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SOMALIA</option>
                  <option value="+597">+597&nbsp;&nbsp;SR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SURINAME</option>
                  <option value="+239">+239&nbsp;&nbsp;ST&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAO TOME AND PRINCIPE</option>
                  <option value="+503">+503&nbsp;&nbsp;SV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;EL SALVADOR</option>
                  <option value="+963">+963&nbsp;&nbsp;SY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SYRIAN ARAB REPUBLIC</option>
                  <option value="+268">+268&nbsp;&nbsp;SZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SWAZILAND</option>
                  <option value="+1649">+1649&nbsp;&nbsp;TC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TURKS AND CAICOS ISLANDS</option>
                  <option value="+235">+235&nbsp;&nbsp;TD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;CHAD</option>
                  <option value="+228">+228&nbsp;&nbsp;TG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TOGO</option>
                  <option value="+66">+66&nbsp;&nbsp;TH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;THAILAND</option>
                  <option value="+992">+992&nbsp;&nbsp;TJ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TAJIKISTAN</option>
                  <option value="+690">+690&nbsp;&nbsp;TK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TOKELAU</option>
                  <option value="+670">+670&nbsp;&nbsp;TL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TIMOR-LESTE</option>
                  <option value="+993">+993&nbsp;&nbsp;TM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TURKMENISTAN</option>
                  <option value="+216">+216&nbsp;&nbsp;TN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TUNISIA</option>
                  <option value="+676">+676&nbsp;&nbsp;TO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TONGA</option>
                  <option value="+90">+90&nbsp;&nbsp;TR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TURKEY</option>
                  <option value="+1868">+1868&nbsp;&nbsp;TT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TRINIDAD AND TOBAGO</option>
                  <option value="+688">+688&nbsp;&nbsp;TV&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TUVALU</option>
                  <option value="+886">+886&nbsp;&nbsp;TW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TAIWAN, PROVINCE OF CHINA</option>
                  <option value="+255">+255&nbsp;&nbsp;TZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TANZANIA, UNITED REPUBLIC OF</option>
                  <option value="+380">+380&nbsp;&nbsp;UA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;UKRAINE</option>
                  <option value="+256">+256&nbsp;&nbsp;UG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;UGANDA</option>
                  <option value="+598">+598&nbsp;&nbsp;UY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;URUGUAY</option>
                  <option value="+998">+998&nbsp;&nbsp;UZ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;UZBEKISTAN</option>
                  <option value="+39">+39&nbsp;&nbsp;VA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;HOLY SEE (VATICAN CITY STATE</option>
                  <option value="+1784">+1784&nbsp;&nbsp;VC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAINT VINCENT AND THE GRENADINES</option>
                  <option value="+58">+58&nbsp;&nbsp;VE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;VENEZUELA</option>
                  <option value="+1284">+1284&nbsp;&nbsp;VG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;VIRGIN ISLANDS, BRITISH</option>
                  <option value="+1340">+1340&nbsp;&nbsp;VI&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;VIRGIN ISLANDS, U.S.</option>
                  <option value="+84">+84&nbsp;&nbsp;VN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;VIET NAM</option>
                  <option value="+678">+678&nbsp;&nbsp;VU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;VANUATU</option>
                  <option value="+681">+681&nbsp;&nbsp;WF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;WALLIS AND FUTUNA</option>
                  <option value="+685">+685&nbsp;&nbsp;WS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SAMOA</option>
                  <option value="+381">+381&nbsp;&nbsp;XK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;KOSOVO</option>
                  <option value="+967">+967&nbsp;&nbsp;YE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;YEMEN</option>
                  <option value="+262">+262&nbsp;&nbsp;YT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;MAYOTTE</option>
                  <option value="+27">+27&nbsp;&nbsp;ZA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;SOUTH AFRICA</option>
                  <option value="+260">+260&nbsp;&nbsp;ZM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ZAMBIA</option>
                  <option value="+263">+263&nbsp;&nbsp;ZW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;ZIMBABWE</option>
                </select>
                <input type="hidden" id="ip-vk-zoho-cty" name="SingleLine5" checktype="c1" value="US" maxlength="255" fieldType="1" />
              </div>
              <div class="form-group pl-0 mobile-wrap-with-country">
                <input class="form-control rounded-0" placeholder="Mobile Number*" type="number" compname="PhoneNumber" name="phone" phoneformat="1" iscountrycodeenabled="true" maxlength="20" value fieldtype="11" id="pgledcpt_mb1" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12 p-0">
                <input class="form-control" placeholder="Email*" type="email" maxlength="255" name="Email" id="pgledcpt_email2" value fieldtype="9" required>
              </div>

            </div>
            <div class="form-row">
              <input id="pg-bot-dwn-btn" type="submit" name="pgledus_btm_submit" value="Download Curriculum" class="form-submit pgp-submit">
            </div>
            <div class="pgledctfm-rsponse-msg" id="pgledfm-bm-rsponse-msg"> </div>
            <div class="pgledctfm-success-msg" id="pgledfm-bm-success-msg"></div>

          </form>
        </div>
      </div>
    </div>
  </section>


  <section id="popular-courses" class="courses">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Courses</h2>
        <p>Other Courses You Might Be Interested In</p>
      </div>

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        @foreach($featureds as $featured)
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="course-item">
            <img src="{{asset('/public/uploads/Courses/' . $featured->image)}}" class="img-fluid" alt="...">
            <div class="course-content">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="{{$featured->type == 1 ? 'different' : ''}}"> {{$featured->type == 1 ? 'Certificate' : ' Internship'}}</h4>
                <p class="price">Rs. {{$featured->fee}}/-</p>
              </div>

              <h3><a href="{{ route('training.courseDetails', ['id' => $featured->id]) }}">{{$featured->title}}</a></h3>
              <p>{{$featured->subtitle}}</p>
              <div class="trainer d-flex justify-content-between align-items-center">
                <div class="trainer-profile d-flex align-items-center">
                  <img src="{{asset('/public/uploads/Company/' . returnCompanyimage($featured->company_id))}}" class="img-fluid" alt="">
                  <span>{{returnCompanyName($featured->company_id)}}</span>
                </div>
                <div class="trainer-rank d-flex align-items-center">
                  <i class="bx bx-user"></i>&nbsp;{{$featured->enrolled}}
                  &nbsp;&nbsp;
                  <i class="bx bx-heart"></i>&nbsp;{{$featured->favourites}}
                </div>
              </div>
            </div>
          </div>
        </div> <!-- End Course Item-->

        @endforeach
      </div>

    </div>
  </section>










</main><!-- End #main -->

@endsection