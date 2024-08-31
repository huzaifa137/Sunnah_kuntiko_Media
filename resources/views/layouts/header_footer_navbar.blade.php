<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>..:: Sunnah kuntiko Media Admin Dashboard ::..</title>
    <!-- Favicon icon -->
    <link href="/assets/images/libraria-logo-v3.png" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" href="/assets-3/vendor/jqvmap/css/jqvmap.min.css">
    <link rel="stylesheet" href="/assets-3/vendor/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="/assets-3/vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="/assets-3/css/style.css">
    <link rel="stylesheet" href="/assets-3/css/skin-2.css">
    <link href="/assets-3/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets-3/css/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/7hb7P2Yj4rlB1P5mRsmGF6HVfT/hG4faCBtP+8" crossorigin="anonymous">
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{ route('dashboard') }}" class="brand-logo">
                <img class="logo-abbr" src="/assets-3/images/logo-white.png" alt="">
                <img class="logo-compact" src="/assets-3/images/logo-text-white.png" alt="">
                <img class="brand-title" src="/assets-3/images/logo-text-white.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">

                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="/assets-3/images/pic1.png" width="20" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">

                                    <a href="{{ route('auth.logout') }}" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" width="18"
                                            height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-log-out">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ml-2">Logout </span>
                                    </a>

                                </div>

                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-home"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('dashboard') }}">Dashboard </a></li>
                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-book"></i>
                            <span class="nav-text">Books</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('AllBooks') }}">All Books</a></li>
                            <li><a href="{{ route('AddBook') }}">Add Book</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-diamond"></i>
                            <span class="nav-text">Quran</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('All-Quran') }}">All Quran</a></li>
                            <li><a href="{{ route('Add-Quran') }}">Add Quran</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-camera"></i>
                            <span class="nav-text">Videos</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('All-Admin-videos') }}">All Videos</a></li>
                            <li><a href="{{ route('Add-video') }}">Add Video</a></li>
                        </ul>
                    </li>


                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-music"></i>
                            <span class="nav-text">Audios</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('All-Audio') }}">All Audios</a></li>
                            <li><a href="{{ route('All-Sheikhs') }}">All Sheikhs</a></li>
                            <li><a href="{{ route('All-Series') }}">All Series</a></li>


                            <li><a href="{{ route('Add-Sheikh') }}">Add Sheikh</a></li>
                            <li><a href="{{ route('Upload-Audio') }}">Add Audio</a></li>
                            <li><a href="{{ route('Add-Serie') }}">Add Serie</a></li>
                            
                        </ul>
                    </li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-heart"></i>
                            <span class="nav-text">Dua & Adhkar</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('AllAdhkar') }}">All Adhkar</a></li>
                            <li><a href="{{ route('AddAdhkar') }}">Add Adhkar</a></li>
                        </ul>
                    </li>


                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="la la-user"></i>
                            <span class="nav-text">Users</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('user-information') }}">User Information</a></li>
                        </ul>
                    </li>


                    <li><a class="has-arrow" href="{{ route('contact-info') }}" aria-expanded="false">
                            <i class="la la-phone"></i>
                            <span class="nav-text">Contact_us Info</span>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        @yield('content')

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="javascript:void()">TechSateUganda</a> 2023</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->

    <script src="/assets-3/vendor/global/global.min.js"></script>
    <script src="/assets-3/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="/assets-3/js/custom.min.js"></script>
    <script src="/assets-3/js/dlabnav-init.js"></script>

    <!-- Datatable -->
    <script src="/assets-3/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/assets-3/js/plugins-init/datatables.init.js"></script>

    <!-- Chart ChartJS plugin files -->
    <script src="/assets-3/vendor/chart.js/Chart.bundle.min.js"></script>

    <!-- Chart piety plugin files -->
    <script src="/assets-3/vendor/peity/jquery.peity.min.js"></script>

    <!-- Chart sparkline plugin files -->
    <script src="/assets-3/vendor/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- Demo scripts -->
    <script src="/assets-3/js/dashboard/dashboard-3.js"></script>

    <!-- Svganimation scripts -->
    <script src="/assets-3/vendor/svganimation/vivus.min.js"></script>
    <script src="/assets-3/vendor/svganimation/svg.animation.js"></script>
    {{-- <script src="/assets-3/js/styleSwitcher.js"></script> --}}

</body>

</html>
