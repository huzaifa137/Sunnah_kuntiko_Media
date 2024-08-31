<!DOCTYPE html>
<html lang="zxx">
    

<head>        

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

        <!-- Title -->
        <title>..:: Sunnah kuntiko Media ::..</title>

        <!-- Favicon -->
        <link href="/assets/images/libraria-logo-v3.png" rel="icon" type="image/x-icon" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

        <!-- Mobile Menu -->
        <link href="/assets/css/mmenu.css" rel="stylesheet" type="text/css" />
        <link href="/assets/css/mmenu.positioning.css" rel="stylesheet" type="text/css" />

        <!-- Responsive Table -->
        <link rel="stylesheet" type="text/css" href="/assets/css/responsivetable.css" />

        <!-- Stylesheet -->
        <link href="/assets/style.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

         <!-- Start: Header Section -->
         <header id="header-v1" class="navbar-wrapper inner-navbar-wrapper">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="navbar-header">
                                    <div class="navbar-brand">
                                        <h1>
                                            <a href="{{route('home')}}">
                                                <img src="/assets/images/libraria-logo-v3.png" alt="LIBRARIA" />
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <!-- Header Topbar -->
                                <div class="header-topbar hidden-sm hidden-xs">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="topbar-info">
                                                <a href="tel:+ 256704261823"><i class="fa fa-phone"></i>+ 256704261823</a>
                                                <span>/</span>
                                                <a href="mailto:info@sunnahislammedia.com"><i class="fa fa-envelope"></i>info@sunnahislammedia.com</a>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                                <div class="navbar-collapse hidden-sm hidden-xs">
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown active">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{route('home')}}">Home</a>
                                        </li>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{route('all')}}">Books</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{route('all')}}">All Books</a></li>
                                                <li><a href="{{route('All_Arabic_Books')}}">Arabic Books</a></li>
                                                <li><a href="{{route('All_English_Books')}}">English Books</a></li>
                                                <li><a href="{{route('All_Luganda_Books')}}">Luganda Books</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('Quran-Audio')}}">Quran</a></li>
                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{route('Ugandan-Sheikhs')}}">Audios</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{route('Ugandan-Sheikhs')}}">Ugandan Sheikhs</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{route('All-videos')}}">Videos</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{route('All-videos')}}">Ugandan Sheikhs</a></li>
                                                <li><a href="javascript:void(0);">Arabic Sheikhs</a></li>
                                                <li><a href="javascript:void(0);">English Sheikhs</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown">
                                            <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{route('morning-adhkar')}}">dua &  Adhkar</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{route('morning-adhkar')}}">Morning Adhkar</a></li>
                                                <li><a href="{{route('evening-adhkar')}}">Evening Adhkar</a></li>
                                                <li><a href="{{route('Adhkar-After-Swalah')}}">Adhkar after swalah</a></li>
                                                <li><a href="{{route('Famous-Duas-from-the-Quran')}}">Famous Duas from the Quran</a></li>
                                                <li><a href="{{route('Other-Duas')}}">Other Dua's</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{route('about-us')}}">About us</a></li>
                                        <li style="margin-left: -2rem"><a href="{{route('contact')}}">Contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu hidden-lg hidden-md">
                            <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                            <div id="mobile-menu">
                                <ul>
                                    <li class="mobile-title">
                                        <h4>Navigation</h4>
                                        <a href="#" class="close"></a>
                                    </li>
                                    <li>
                                        <a href="{{route('home')}}">Home</a>
        
                                    </li>
                                    <li>
                                        <a href="javascript:void()">Books</a>
                                        <ul>
                                            <li><a id="links-highlight" href="{{route('all')}}">All Books</a></li>
                                            <li><a id="links-highlight" href="{{route('All_Arabic_Books')}}">Arabic Books</a></li>
                                            <li><a id="links-highlight" href="{{route('All_English_Books')}}">English Books</a></li>
                                            <li><a id="links-highlight" href="{{route('All_Luganda_Books')}}">Luganda Books</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('Quran-Audio')}}">Quran</a></li>
                                    <li>
                                        <a href="javascript:void()">Audios</a>
                                        <ul>
                                            <li><a id="links-highlight" href="{{route('Ugandan-Sheikhs')}}">Ugandan Sheikhs</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="javascript:void()">Videos</a>
                                        <ul>
                                            <li><a id="links-highlight" href="{{route('All-videos')}}">Ugandan Sheikhs</a></li>
                                        </ul>
                                    </li>

                                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                                        <i class="la la-book"></i>
                                        <span class="nav-text">dua and adhkar</span>
                                    </a>
                                    <ul aria-expanded="false">
                                        
                                        <li><a id="links-highlight" href="{{route('morning-adhkar')}}">Morning Adkar</a></li>
                                        <li><a id="links-highlight" href="{{route('evening-adhkar')}}">Evening Adkar</a></li>
                                        <li><a id="links-highlight" href="{{route('Adhkar-After-Swalah')}}">Adhkar after swalah</a></li>
                                        <li><a id="links-highlight" href="{{route('Famous-Duas-from-the-Quran')}}">Famous Duas from the Quran</a></li>
                                        <li><a id="links-highlight" href="{{route('Other-Duas')}}">Other Dua's</a></li>
                                        
                                    </ul>
                                </li>
                                    <li><a href="{{route('about-us')}}">About us</a></li>
                                    <li><a href="{{route('contact')}}">Contact us</a></li> 
                                    
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- End: Header Section -->

        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2 style="color: green;">Quran Audio Recitations</h2>
                    <span class="underline center"></span>
                    <p class="lead" style="color: white">Free Islamic Books, Quran, Dua & Adhkar, Arabic study, Islamic Audio and Islamic Videos</p>
                    <?php 

                     use Carbon\Carbon;
                     $dt = Carbon::now();
                     $dt->addDays(1);
                    echo "<p style='color:red;'>" . $dt->toHijri()->isoFormat('LL') . " A.H.". "</p>" ;
                    ?>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li>Quran Audio Recitations</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->


       <!-- Start: Blog Section -->
       <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="blog-detail-main">
                    <div class="container">
                        <div class="row">
                            <div class="blog-page">
                                <div class="blog-section">
                                    
                                    
                                    <div class="comments-area" id="comments">
                                        <div class="comment-bg">
                                            <h4 class="comments-title" style="text-align: center;color:green;">{{$name}}</h4>
                                            <span class="underline center" ></span>
                                            <ol class="comment-list">

                                                @foreach ($IndividualQuranReciters as $key => $IndividualReciter)

                                                <li class="comment even thread-even depth-1 parent">
                                                    <div class="comment-body">
                                                        <div class="comment-author vcard">
                                                            <img class="avatar avatar-32 photo avatar-default" src="/assets/images/QuranLogo.png" alt="Comment Author">
                                                            <b class="fn">
                                                                <a class="url" rel="external nofollow" href="#">{{$key+1}}.</a>
                                                            </b>					
                                                        </div>
                                                        <footer class="comment-meta">
                                                            <div class="left-arrow"></div>
                                                            <div class="reply">
                                                                <a href="{{url('/download-Quran',$IndividualReciter->QuranAudio)}}" class="comment-reply-link" >
                                                                    <i class="fa fa-download me-4"></i> Download 
                                                                </a>
                                                            </div>
                                                            <div class="comment-metadata">
                                                                <a >
                                                                    <time datetime="2016-01-17">
                                                                      <strong style="color: black">{{$IndividualReciter->SurahName}}</strong>   | {{$IndividualReciter->ScholarName}}
                                                                    </time>
                                                                </a>
                                                            </div>
                                                            <div class="comment-content">
                                                               
                                                                <audio controls style="width: 100%">
                                                                    <source src="{{url('/quran_audios/'.$IndividualReciter->QuranAudio)}}"  type="audio/ogg">
                                                                    <source src="{{url('/quran_audios/'.$IndividualReciter->QuranAudio)}}"  type="audio/mpeg">
                                                                  Your browser does not support the audio element.
                                                                </audio>
                                                            </div>
                                                        </footer>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ol>


                                            
                                        </div>
                                        
                                    </div>
                                    


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!-- End: Blog Section -->               

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>


 <!-- Start: Footer -->
 <footer class="site-footer">
    <div class="container">
        <div id="footer-widgets">
            <div class="row">
                <div class="col-md-4 col-sm-6 widget-container">
                    <div id="text-2" class="widget widget_text">
                        <h3 class="footer-widget-title">About &nbsp; Sunnah kuntiko Media</h3>
                        <span class="underline left"></span>
                        <div class="textwidget" style="text-align: justify">
                            We ask your Du’a for the Ulama, Scholars, Students of Knowledge, Authors and Speakers whose works have been posted on this website, and for us. May Allah سُبْحَانَهُۥ وَتَعَالَىٰ make this website beneficial for all.                         </div>
                        <address>
                            <div class="info">
                                <i class="fa fa-location-arrow"></i>
                                <span> Kisenyi two, Mengo</span>
                            </div>
                            <div class="info">
                                <i class="fa fa-envelope"></i>
                                <span><a href="mailto:info@sunnahislammedia.com">info@sunnahislammedia.com</a></span>
                            </div>
                            <div class="info">
                                <i class="fa fa-phone"></i>
                                <span><a href="tel:+256704261823">+ 256704261823</a></span>
                            </div>
                        </address>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 widget-container">
                    <div id="nav_menu-2" class="widget widget_nav_menu">
                        <h3 class="footer-widget-title">Quick Links</h3>
                        <span class="underline left"></span>
                        <div class="menu-quick-links-container">
                            <ul id="menu-quick-links" class="menu">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li><a href="{{('all')}}">Books</a></li>
                                <li><a href="{{route('Quran-Audio')}}">Quran</a></li>
                                <li><a href="{{('All-videos')}}">Videos</a></li>
                                <li><a href="{{('Ugandan-Sheikhs')}}">Audio</a></li>
                                <li><a href="{{('morning-adhkar')}}">Dua & Adhkar</a></li>
                                <li><a href="{{route('about-us')}}">About us</a></li>
                                <li><a href="{{route('contact')}}">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix hidden-lg hidden-md hidden-xs tablet-margin-bottom"></div>
                <div class="col-md-2 col-sm-6 widget-container">
                    <div id="text-4" class="widget widget_text">
                        <h3 class="footer-widget-title">Timing</h3>
                        <span class="underline left"></span>
                        <div class="timming-text-widget">
                            <time datetime="2017-02-13">Mon - Fri</time>
                            <time datetime="2017-02-13">24/7 hr</time>
                        </div>
                    </div>			
                </div>
                <div class="col-md-4 col-sm-6 widget-container">
                    <div class="widget twitter-widget">
                        <h3 class="footer-widget-title">Lastly</h3>
                        <span class="underline left"></span>
                        <div id="twitter-feed">
                            <ul>
                                
                                    <p style="text-align: justify">“The life of this world is made up of three days: yesterday has gone with all that was done; tomorrow, you may never reach; but today is for you so do what you should do today.” <br> <b> Imaam Hasan Al Basri</b></p>
                                    <br>
                                    <p style="font-size: 1.5em">اَلسَّلاَ مُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَا تُهُ</p>
                            </ul>
                        </div>
                    </div>			
                </div>
            </div>
        </div>                
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="footer-text col-md-3">
                    <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                </div>
                <div class="col-md-9 pull-right">
                    <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{('all')}}">Books</a></li>
                        <li><a href="{{route('Quran-Audio')}}">Quran</a></li>
                        <li><a href="{{('All-videos')}}">Videos</a></li>
                        <li><a href="{{('Ugandan-Sheikhs')}}">Audio</a></li>
                        <li><a href="{{('morning-adhkar')}}">Dua & Adhkar</a></li>
                        <li><a href="{{route('about-us')}}">About us</a></li>
                        <li><a href="{{route('contact')}}">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery Latest Version 1.x -->
<script type="text/javascript" src="/assets/js/jquery-1.12.4.min.js"></script>

<!-- jQuery UI -->
<script type="text/javascript" src="/assets/js/jquery-ui.min.js"></script>

<!-- jQuery Easing -->
<script type="text/javascript" src="/assets/js/jquery.easing.1.3.js"></script>

<!-- Bootstrap -->
<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>

<!-- Mobile Menu -->
<script type="text/javascript" src="/assets/js/mmenu.min.js"></script>

<!-- Harvey - State manager for media queries -->
<script type="text/javascript" src="/assets/js/harvey.min.js"></script>

<!-- Waypoints - Load Elements on View -->
<script type="text/javascript" src="/assets/js/waypoints.min.js"></script>

<!-- Facts Counter -->
<script type="text/javascript" src="/assets/js/facts.counter.min.js"></script>

<!-- MixItUp - Category Filter -->
<script type="text/javascript" src="/assets/js/mixitup.min.js"></script>

<!-- Owl Carousel -->
<script type="text/javascript" src="/assets/js/owl.carousel.min.js"></script>

<!-- Accordion -->
<script type="text/javascript" src="/assets/js/accordion.min.js"></script>

<!-- Responsive Tabs -->
<script type="text/javascript" src="/assets/js/responsive.tabs.min.js"></script>

<!-- Responsive Table -->
<script type="text/javascript" src="/assets/js/responsive.table.min.js"></script>

<!-- Masonry -->
<script type="text/javascript" src="/assets/js/masonry.min.js"></script>

<!-- Carousel Swipe -->
<script type="text/javascript" src="/assets/js/carousel.swipe.min.js"></script>

<!-- bxSlider -->
<script type="text/javascript" src="/assets/js/bxslider.min.js"></script>

<!-- Custom Scripts -->
<script type="text/javascript" src="/assets/js/main.js"></script>

</body>


</html>