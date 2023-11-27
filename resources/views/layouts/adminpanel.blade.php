<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!-- set favicon -->
    <link rel="shortcut icon" href="{{route('AN')}}assets/img/favicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>iHub | Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" integrity="sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-OvBgP9A2JBgiRad/mM36mkzXSXaJE9BEIENnVEmeZdITvwT09xnxLtT4twkCa8m/loMbPHsvPl0T8lRGVBwjlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" integrity="sha512-ngQ4IGzHQ3s/Hh8kMyG4FC74wzitukRMIcTOoKT3EyzFZCILOPF0twiXOQn75eDINUfKBYmzYn2AA8DkAk8veQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js" integrity="sha512-6F1RVfnxCprKJmfulcxxym1Dar5FsT/V2jiEUvABiaEiFWoQ8yHvqRM/Slf0qJKiwin6IDQucjXuolCfCKnaJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>

    <link href="{{asset('adminpanel/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{asset('adminpanel/css/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
    <!-- Sweet ALert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Gritter -->
    <link href="{{asset('adminpanel/js/plugins/gritter/jquery.gritter.css')}}" rel="stylesheet">

    <link href="{{asset('adminpanel/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('adminpanel/css/style.css')}}" rel="stylesheet">
    <style>
        a {
            text-decoration: none;
        }

        .dataTables_filter input {
            margin-bottom: 10px;
        }

        #cropContainer {
            align-self: center;
            width: 500px;
            height: 285px;
            overflow: hidden;
        }

        #cropImage {
            max-width: 100%;
            /* Ensure the image scales proportionally within the container */
        }
    </style>
</head>

<body>

    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <img alt="image" class="rounded-circle" style="width: 48px; height: 48px;" src="{{asset('/public/uploads/profile/' . (Auth::user()->profile_img ?? 'avatar.jpg'))}}" />
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold">{{Auth::user()->name}}</span>
                                <span class="text-muted text-xs block">{{Auth::user()->role == 1 ? 'Administrator' : 'Moderator'}} <b class="caret"></b></span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a class="dropdown-item" href="profile">Profile</a></li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            iHub
                        </div>
                    </li>
                    <li {{ request()->route()->getName() === 'home' ? "class=active" : '' }}>
                        <a href="{{route('home')}}"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
                    </li>
                    @if(Auth::user()->role == 1)
                    <li {{ request()->route()->getName() === 'users' ? "class=active" : '' }}>
                        <a href="{{route('users')}}"><i class="fa fa-user-o"></i> <span class="nav-label">Users Management</span></a>
                    </li>
                    @endif
                    <li {{ request()->is('user-details*') ? 'class=active' : 'style=display:none' }}>
                        <a href="#" onClick="window.location.reload();return false;"><i class="fa fa-user-circle"></i><span class="nav-label">User Profile</span></a>
                    </li>
                    <li {{ request()->is('files*') ? 'class=active' : '' }}>
                        <a href="{{ route('files.index') }}"><i class="fa fa-user-circle"></i><span class="nav-label">Files Management</span></a>
                    </li>
                    <li class="">
                        <a href="#"><i class="fa fa-star"></i> <span class="nav-label">iHub Main Module</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class=""><a href="#"><span class="nav-label">Home Page</span> <span class="fa arrow"></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="{{route('navNews')}}">Navbar News Card</a></li>
                                    <li><a href="{{route('ihub-news-all')}}">News & Events</a></li>
                                    <li><a href="{{route('hgb')}}">Team (HGB)</a></li>
                                    <li><a href="{{route('bod')}}">Board of Directors</a></li>
                                </ul>
                            </li>
                            <li class=""><a href="#"><span class="nav-label">Administration</span> <span class="fa arrow"></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="{{route('advisor')}}">Advisors</a></li>
                                    <li><a href="{{route('management')}}">Management</a></li>
                                </ul>
                            </li>
                            <li class=""><a href="#"><span class="nav-label">Contact Page</span> <span class="fa arrow"></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="{{route('recruitment')}}">Recruitments</a></li>
                                    <li><a href="{{route('what_new')}}">What's New</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('hackathonView')}}">Hackathon</a></li>
                            <li><a href="{{route('colab')}}">Collaborations</a></li>
                            <li><a href="{{route('isprogram')}}">Innovation</a></li>
                            <li><a href="{{route('vert')}}">Verticals</a></li>
                            <li><a href="{{route('galleria')}}">Gallery</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#"><i class="fa fa-laptop"></i> <span class="nav-label">Training & Courses</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class=""><a href="#"><span class="nav-label">Home Page</span> <span class="fa arrow"></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="{{route('HT')}}">Testimonials</a></li>
                                    <li><a href="{{route('featured')}}">Featured Courses</a></li>
                                </ul>
                            </li>
                            <li class=""><a href="#"><span class="nav-label">About</span> <span class="fa arrow"></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="{{route('AN')}}">News & Updates</a></li>
                                </ul>
                            </li>
                            <li class=""><a href="index-2.html"><span class="nav-label">Courses</span> <span class="fa arrow"></a>
                                <ul class="nav nav-third-level">
                                    <!-- <li><a href="{{route('AN')}}companies">Offering Companies</a></li>
                                    <li><a href="{{route('AN')}}categories">Categories</a></li> -->
                                    <li><a href="{{route('course-management')}}">Course Management</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="index-2.html"><i class="fa fa-th-large"></i> <span class="nav-label">Startups Module</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{route('startup-programs')}}">Programs</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="index-2.html"><i class="fa fa-file-text-o"></i> <span class="nav-label">Blog</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{route('blogs')}}">Blog</a></li>
                            <li><a href="{{route('categories-management')}}">Categories</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="index-2.html"><i class="fa fa-users"></i> <span class="nav-label">Fellowships Module</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{route('fellowship-programs')}}">Programs</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="index-2.html"><i class="fa fa-stack-exchange"></i> <span class="nav-label">Consultancy Module</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{route('consultancy-service')}}">Consultancy</a></li>
                            <li><a href="{{route('consultancy-whyus')}}">Why Us?</a></li>
                        </ul>
                    </li>
                    <!-- <li {{ request()->route()->getName() === 'admin.approvals' ? "class=active" : '' }}>
                        <a href="{{route('AN')}}admin/approvals"><i class="fa fa-id-card-o"></i> <span class="nav-label">Profile Approvals</span></a>
                    </li>
                    <li {{ request()->is('admin/approval_details*') ? 'class=active' : 'style=display:none' }}>
                        <a href="#" onClick="window.location.reload();return false;"><i class="fa fa-table"></i><span class="nav-label">Approval Log</span></a>
                    </li> -->
                </ul>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <div class="mx-2" style="cursor: pointer;" onclick="document.getElementById('logout-form').submit();">
                                Logout from<strong> Admin?</strong>
                            </div>
                        </li>

                    </ul>

                </nav>
            </div>

            <div class="wrapper wrapper-content">
                @yield('content')
            </div>
            <div class="footer">
                <div>
                    <strong>Copyright</strong> iHub DivyaSampark &copy; 2023
                </div>
            </div>
        </div>

    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> -->
    <!-- Mainly scripts -->
    <!-- jQuery -->
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- DataTables Buttons -->
    <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>


    <script src="{{asset('adminpanel/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('adminpanel/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <!-- Mainly scripts -->
    <script src="{{asset('adminpanel/js/popper.min.js')}}"></script>
    <script src="{{asset('adminpanel/js/bootstrap.js')}}"></script>
    <script src="{{asset('adminpanel/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('adminpanel/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

    <!-- Flot -->
    <script src="{{asset('adminpanel/js/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('adminpanel/js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
    <script src="{{asset('adminpanel/js/plugins/flot/jquery.flot.spline.js')}}"></script>
    <script src="{{asset('adminpanel/js/plugins/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('adminpanel/js/plugins/flot/jquery.flot.pie.js')}}"></script>

    <!-- Peity -->
    <script src="{{asset('adminpanel/js/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('adminpanel/js/demo/peity-demo.js')}}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{asset('adminpanel/js/inspinia.js')}}"></script>
    <script src="{{asset('adminpanel/js/plugins/pace/pace.min.js')}}"></script>

    <!-- jQuery UI -->
    <script src="{{asset('adminpanel/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

    <!-- GITTER -->
    <script src="{{asset('adminpanel/js/plugins/gritter/jquery.gritter.min.js')}}"></script>

    <!-- Sparkline -->
    <script src="{{asset('adminpanel/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Sparkline demo data  -->
    <script src="{{asset('adminpanel/js/demo/sparkline-demo.js')}}"></script>

    <!-- ChartJS-->
    <script src="{{asset('adminpanel/js/plugins/chartJs/Chart.min.js')}}"></script>

    <!-- Toastr -->
    <script src="{{asset('adminpanel/js/plugins/toastr/toastr.min.js')}}"></script>

    <script>
        // document ready jquery
        $(document).ready(function() {
            $(':input[readonly]').css({
                'background-color': '#ffffff'
            });
            $(':select[disabled]').css({
                'background-color': '#ffffff'
            });
        });
    </script>

</body>

</html>