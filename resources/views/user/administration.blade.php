@extends('layouts.userLayout')
@section('content')

<link rel="stylesheet" href="assets/css/administration.css">
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


<!-- <div class="bgheroo mt-5">
      <div class="container ">
        <div class="row">
          <div class="clip py-5">
            <div class="col-lg-6">
              <div class="herogif">
                <img src="./assets/img/animatedLogo.gif" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

<!-- Home Section End -->


<!-- Cards Start from Here -->

<div class="container my-5" id="advisors">
  <div class="row my-2">
    <div class="headingss">
      <p>Advisors</p>
    </div>
    @foreach($advisors as $advisor)

    <div class="col-lg-3 my-2">
      <div class="card board text-center ">
        <img src="./public/uploads/advisor/{{$advisor->image}}" class="card-img-top" alt="Image Alt Text">

        <div class="card-body proff-under">
          <a @if($advisor->link == '' || $advisor->link == null) href="#" @else href="{{$advisor->link}}" target="_blank" @endif style="text-decoration: none; color: black;">
            <h5 class="card-title">{{$advisor->name}}</h5>
            <p class="card-text">{{$advisor->title}}</p>
          </a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>

<!-- Cards Start from Here  -->

<!-- Hierarchy card Start -->
<div class="container">
  <div class="headingss">
    <h2>MANAGEMENT</h2>
    <!-- <p>HUB GOVERNING BOARD $advisor)</p> -->
  </div>
  <div class="row">
    <div class="col-lg-3 my-2 mx-auto">
      <div class="card board text-center ">
        <img src="./public/uploads/manager/{{$ceo->image}}" class="card-img-top" alt="Image Alt Text">

        <div class="card-body proff-under">
          <a @if($ceo->link == '' || $ceo->link == null) href="#" @else href="{{$ceo->link}}" target="_blank" @endif style="text-decoration: none; color: black;">
            <h5 class="card-title">{{$ceo->name}}</h5>
            <p class="card-text">{{$ceo->title}}</p>
          </a>
        </div>
      </div>
    </div>
  </div>


  <div class="row my-2 justify-content-around">


    <div class="col-lg-3 my-2">
      <div class="card board text-center ">
        <img src="./public/uploads/manager/{{$spm->image}}" class="card-img-top" alt="Image Alt Text">

        <div class="card-body proff-under">
          <a @if($spm->link == '' || $spm->link == null) href="#" @else href="{{$spm->link}}" target="_blank" @endif style="text-decoration: none; color: black;">
            <h5 class="card-title">{{$spm->name}}</h5>
            <p class="card-text">{{$spm->title}}</p>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 my-2">
      <div class="card board text-center ">
        <img src="./public/uploads/manager/{{$pm->image}}" class="card-img-top" alt="Image Alt Text">

        <div class="card-body proff-under">
          <a @if($pm->link == '' || $pm->link == null) href="#" @else href="{{$pm->link}}" target="_blank" @endif style="text-decoration: none; color: black;">
            <h5 class="card-title">{{$pm->name}}</h5>
            <p class="card-text">{{$pm->title}}</p>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-3 my-2">
      <div class="card board text-center ">
        <img src="./public/uploads/manager/{{$dm->image}}" class="card-img-top" alt="Image Alt Text">

        <div class="card-body proff-under">
          <a @if($dm->link == '' || $dm->link == null) href="#" @else href="{{$dm->link}}" target="_blank" @endif style="text-decoration: none; color: black;">
            <h5 class="card-title">{{$dm->name}}</h5>
            <p class="card-text">{{$dm->title}}</p>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="row my-2">
    @foreach($ams as $am)
    <div class="col-lg-3 my-2">
      <div class="card board text-center ">
        <img src="./public/uploads/manager/{{$am->image}}" class="card-img-top" alt="Image Alt Text">

        <div class="card-body proff-under">
          <a @if($am->link == '' || $am->link == null) href="#" @else href="{{$am->link}}" target="_blank" @endif style="text-decoration: none; color: black;">
            <h5 class="card-title">{{$am->name}}</h5>
            <p class="card-text">{{$am->title}}</p>
          </a>
        </div>
      </div>
    </div>
    @endforeach
    @foreach($asocms as $asocm)
    <div class="col-lg-3 my-2">
      <div class="card board text-center ">
        <img src="./public/uploads/manager/{{$asocm->image}}" class="card-img-top" alt="Image Alt Text">

        <div class="card-body proff-under">
          <a @if($asocm->link == '' || $asocm->link == null) href="#" @else href="{{$asocm->link}}" target="_blank" @endif style="text-decoration: none; color: black;">
            <h5 class="card-title">{{$asocm->name}}</h5>
            <p class="card-text">{{$asocm->title}}</p>
          </a>
        </div>
      </div>
    </div>
    @endforeach
    @foreach($assocs as $assoc)
    <div class="col-lg-3 my-2">
      <div class="card board text-center ">
        <img src="./public/uploads/manager/{{$assoc->image}}" class="card-img-top" alt="Image Alt Text">

        <div class="card-body proff-under">
          <a @if($assoc->link == '' || $assoc->link == null) href="#" @else href="{{$assoc->link}}" target="_blank" @endif style="text-decoration: none; color: black;">
            <h5 class="card-title">{{$assoc->name}}</h5>
            <p class="card-text">{{$assoc->title}}</p>
          </a>
        </div>
      </div>
    </div>
    @endforeach

  </div>

</div>

<!-- Hierarchy card Start -->


@endsection