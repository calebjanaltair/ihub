@extends('layouts.userLayout')
@section('content')
<link rel="stylesheet" href="assets/css/coperate.css">
<!-- 
<div class="bgheroo mt-5 h-100">
    <div class="container h-100">
        <img src="./assets/img/nmicps.png" class="float-end d-flex align-self-end" alt="" style="width: 20%; height: auto;">
        <img src="./assets/img/dst.png" class="float-end d-flex align-self-end" alt="" style="width: 20%; height: auto;">
        <div class="row h-100">
            <div class="clip py-5">
                <div class="col-lg-6 row h-100">
                    <div class="herogif">
                        <img src="./assets/img/animatedLogo.gif" style="width: 100%;" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="inovation py-2">
        <div class="container ">
            <h2>Corporate Social Responsibility</h2>
        </div>
    </div>
</div>
 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/css/intlTelInput.css" rel="stylesheet" media="screen">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"></script>

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

    <!-- hero -->
<div class="marquee">
    <div class="marquee__item">
        <!-- <a></a>
        <span class="marquee__seperator"></span> -->
        <a>A joint initiative of the Government of India Department of Science & Technology (DST) and Indian Institute of Technology (IIT Roorkee)s</a>
        <span class="marquee__seperator"></span>
        <a>A joint initiative of the Government of India Department of Science & Technology (DST) and Indian Institute of Technology (IIT Roorkee)s</a>
        <span class="marquee__seperator"></span>
        <a>A joint initiative of the Government of India Department of Science & Technology (DST) and Indian Institute of Technology (IIT Roorkee)s</a>
        <span class="marquee__seperator"></span>
    </div>
</div>
<div class="container pt-4">
    <div class="row">
        <div class="headingss py-4">
            <h2>CORPORATE SOCIAL RESPONSIBILITY</h2>
        </div>
        <div class="col-lg-6">
            <div class="csrimg">
                <img src="https://tih.iitr.ac.in/assets/img/csr-m.png" width="100%" alt="">
            </div>
        </div>
        <div class="col-lg-6">
            <div class="csr-text">

                <p>Corporate social responsibility (CSR) refers to a business practice that involves participation in initiatives which are beneficial to society. India companies are committed to undertaking CSR activities in accordance with the provisions of Section 135 of the Indian Companies Act, 2013 and related Rules. As per the notified rules, all private firms have to spend 2% of their average profit of the previous three years on CSR activities specified by the government.</p>
                <p>iHUB DivyaSampark provides a unique opportunity for corporates in creating a societal impact via CSR activities. Being a new organisation, it brings in an environment of great energy and enthusiasm through the young and qualified individuals or start-ups. Through the collaboration between industry and iHub Divyasampark, funds received will be utilised for our various flagship programs such as Chanakya UG, PG, Phd Fellowships, sponsored & consultancy projects, Entrepreneur in Residence Program, Grassroot Investors Support Program (GISP), PANKH start-up funding, Start-up Gurukul online training and many more.</p><span id="dots">...</span><span id="more">
                    <p>The entrepreneurial culture in India is still in its initial stages, and young entrepreneurs face several challenges, including lack of access to resources and an ecosystem to sustain them through the high-risk initial stages. Since technology and knowledge based start-ups are ideally poised to emerge from universities, the role of iHUB DivyaSampark in providing a support system for the entrepreneurial culture to take root and flourish. The partnership between iHub Divyasampark and industy is crucial for each other’s benefit and for creating a strong societal impact as these start-ups supported by the CSR activites will also be generating the fundings more similar training programs in future and will also be providing employment opportunities for numerous people. Seed funding received by iHub Divyasampark will also be utilised in providing training and fellowship opportunities for many 10+2, UG, PG, Phd students.</p>
                    <p>In iHub Divyasampark we aim to maintain the transparency so that investors gets to see how the funds are being utilized for seed and early stage investments. Credibility of iHub Divyasampark is much higher when compared to other NGOs as it is a part of IIT Roorkee. Moreover, investors can be assured of best utilisation their money as we are going to create timely Impact Assessment Report for them.</p>
                </span></p>
                <button class="read-more" onclick="myFunction()" id="myBtn">Read more</button>
                <div class="col-lg-5 bothbtn">
                    <div class="download py-2">
                        <button data-bs-toggle="modal" id="download_button" data-bs-target="#downloadModal">I am interested!</button>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<!-- Read More and less js -->


<script>
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }
</script>
<!-- Modal -->
<div class="modal fade" id="downloadModal" tabindex="-1" aria-labelledby="downloadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="downloadModalLabel">I am interested!</h5>
                <svg type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" width="60" height="60" fill="none" stroke="#1c1c1c" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.25 17.25 6.75 6.75"></path>
                    <path d="m17.25 6.75-10.5 10.5"></path>
                </svg>
            </div>
            <div class="modal-body">
                <form class="modalform" id="downloadForm" method="post" action="/download-csr">
                    @csrf
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
                    <button type="submit">Submit</button>
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
</script>




<!-- Coperate Section end -->






@endsection