@extends('layouts.userLayout')
@section('content')
<link rel="stylesheet" href="assets/css/innovation.css">
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


<div class="container pt-4">
    <div class="headingss py-4">
        <h2>INNOVATION SUPPORT PROGRAMS</h2>
    </div>
    <div class="explanation">
        <h5>Let's Innovate !</h5>
        <p>We at iHUB DivyaSampark are here to support the new ideas that create new Cyber Physical system (CPS) technologies to solve the real-world problem from everywhere.</p>
        <p>And if you have such innovative ideas, please feel free to join the tribe and contact us and we would be happy to support you.</p>
    </div>
</div>
@foreach($isps as $isp)
<div class="container">
    <div class="headingss py-4">
        <h2 style="text-transform: uppercase;">{{$isp->name}}</h2>
        <!-- <p>HUB GOVERNING BOARD (HGB)</p>   -->
    </div>
    <div class="row">
        <div class="col-lg-4">
        <img src="/public/uploads/isp/{{$isp->image}}" width="100%" alt="">

</div>

        <div class="col-lg-8">
            <div class="explanation pt-2">
                <p>{!! $isp->description !!}</p>
            </div>
            <div class="col-lg-5 bothbtn">
                <div class="download py-2">
                    <button data-bs-toggle="modal" id="download_button" data-id="{{$isp->id}}" data-bs-target="#downloadModal">I am interested!</button>
                </div>
            </div>
        </div>

    </div>
</div>
@endforeach
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
                <form class="modalform" id="downloadForm" method="post" action="/download-isp">
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


    ss
</script>


<script>
    $(window).on("load", function() {
        $("#preloader").fadeOut("slow");
    });
</script>
<!-- Modal End -->
<script>
    $('#downloadModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var id = button.data('id');
        $('#download_id').val(id);
    });
</script>

@endsection