<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>..:: Sunnah kuntiko Media Audios ::..</title>

    <!-- CSS FILES -->

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="/audio_assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="/audio_assets/css/bootstrap-icons.css">

    <link rel="stylesheet" href="/audio_assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="/audio_assets/css/owl.theme.default.min.css">

    <link href="/audio_assets/css/templatemo-pod-talk.css" rel="stylesheet">

    <!-- Favicon -->
    <link href="/assets/images/libraria-logo-v3.png" rel="icon" type="image/x-icon" />

</head>

<body>

    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand me-lg-5 me-0" class="logo_design" href="{{ route('home') }}">
                    <img src="/audio_assets/images/pod-talk-logo.png" class="logo-image img-fluid"
                        alt="templatemo pod talk">
                </a>

                <!-- Search Bar for Sheikh Series -->
                <form class="custom-form search-form flex-fill me-3" role="search">
                    <div class="input-group input-group-lg">
                        <input name="search" type="search" class="form-control" id="search" placeholder="Search Lectures " aria-label="Search" onkeyup="filterLectures()" style="display:none;">
                    </div>
                </form>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('home') }}">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">BOOKS</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('all') }}">All Books</a></li>
                                <li><a class="dropdown-item" href="{{ route('All_Arabic_Books') }}">Arabic Books</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('All_English_Books') }}">English Books</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('All_Luganda_Books') }}">Luganda Books</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">Audios</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('Ugandan-Sheikhs') }}">Ugandan Sheikhs</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">DUA & ADHKAR</a>

                            <ul class="dropdown-menu dropdown-menu-light"
                                aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('morning-adhkar') }}">Morning Adhkar</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('evening-adhkar') }}">Evening Adhkar</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('Adhkar-After-Swalah') }}">Adhkar after
                                        swalah</a></li>
                                <li><a class="dropdown-item"
                                        href="{{ route('Famous-Duas-from-the-Quran') }}">Famous-Duas-from-the-Quran</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('Other-Duas') }}">Other Duas</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about-us') }}">About us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>


                </div>
            </div>
        </nav>

        <section class="hero-section">
            <div class="container">
                <div class="row">

                    @foreach ($Serienames as $SheikhSerie)
                    @endforeach
                    <div class="col-lg-12 col-12">
                        <div class="text-center mb-5 pb-2">
                            <h1 class="text-white">Listen to {{ $sheikhFullname }} Islamic Lectures</h1>
                        </div>
                        <div class="owl-carousel owl-theme">
                        </div>
                    </div>

                </div>
            </div>
        </section>


<section class="trending-podcast-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="section-title-wrap mb-5">
                    <h4 class="section-title" style="color:green;"> {{ $sheikhFullname }} Lectures</h4>
                </div>
            </div>

            <div class="col-lg-12 col-12" style="text-align: center;">
                <h4 class="section-title text-danger">Series</h4>
            </div>

            <!-- Series List Container -->
            <div id="seriesList" class="row">  <!-- Added id="seriesList" -->
                @foreach ($Serienames as $SheikhSerie)
                    <div class="col-lg-4 col-12 mb-4 mb-lg-0 mt-3 series-item">  <!-- Added class="series-item" -->
                        <div class="custom-block custom-block-full">
                            <div class="custom-block-image-wrap">
                                <a href="{{ url('SheikhLecturesSeries/' . $sheikhId . '/' . $SheikhSerie->serieId) }}">
                                    <img src="/audio_assets/images/podcast/serie_bg.jpg"
                                        class="custom-block-image img-fluid" alt="">
                                </a>
                            </div>

                            <div class="custom-block-info">
                                <h5 class="mb-0">
                                    <a href="{{ url('SheikhLecturesSeries/' . $sheikhId . '/' . $SheikhSerie->serieId) }}">
                                        Sheikh: {{ $name }}
                                    </a>
                                </h5>
                                <div style="text-align: center!important;" class="mt-2">
                                    <a href="{{ url('SheikhLecturesSeries/' . $sheikhId . '/' . $SheikhSerie->serieId) }}">
                                        <strong><span style="color:green;">Serie Name</span></strong>
                                    </a>
                                </div>

                                <p class="mt-2" style="color:#000; text-align:center;">
                                    <a href="#">
                                        <strong><span style="color: black;">{{ $SheikhSerie->serieName }}</span></strong>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> <!-- End of Series List Container -->
        </div>
    </div>
</section>


    </main>



    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                    <div class="subscribe-form-wrap">
                        <h6>Subscribe. Every weekly.</h6>

                        <form class="custom-form subscribe-form" action="#" method="get" role="form">
                            <input type="email" name="subscribe-email" id="subscribe-email"
                                pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email Address"
                                required="">

                            <div class="col-lg-12 col-12">
                                <button type="submit" class="form-control" id="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-md-0 mb-lg-0">
                    <h6 class="site-footer-title mb-3">Contact</h6>

                    <p class="mb-2"><strong class="d-inline me-2">Phone:</strong> + 256704261823</p>

                    <p>
                        <strong class="d-inline me-2">Email:</strong>
                        <a href="javascprit:void();">info@sunnahislammedia.com</a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <h6 class="site-footer-title mb-3">Download Mobile</h6>

                    <div class="site-footer-thumb mb-4 pb-2">
                        <div class="d-flex flex-wrap">
                            <a href="javascript:void();">
                                <img src="/audio_assets/images/app-store.png" class="me-3 mb-2 mb-lg-0 img-fluid"
                                    alt="">
                            </a>

                            <a href="javascript:void();">
                                <img src="/audio_assets/images/play-store.png" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>

                    <h6 class="site-footer-title mb-3">Social</h6>

                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a target="_blank" href="https://www.instagram.com/taqwa_library_official/"
                                class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a target="_blank" href="https://www.tiktok.com/@taqwa_library"
                                class="social-icon-link bi-tiktok"></a>
                        </li>

                        <li class="social-icon-item">
                            <a target="_blank" href="https://www.youtube.com/channel/UCbBl171lNYsem6LpWtWjHbw"
                                class="social-icon-link bi-youtube"></a>
                        </li>

                        <li class="social-icon-item">
                            <a target="_blank" href="https://www.facebook.com/TaqwaLibrary123"
                                class="social-icon-link bi-facebook"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="container pt-5">
            <div class="row align-items-center">

                <div class="col-lg-2 col-md-3 col-12">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="/audio_assets/images/pod-talk-logo.png" class="logo-image img-fluid"
                            alt="templatemo pod talk">
                    </a>
                </div>

                <div class="col-lg-7 col-md-9 col-12">
                    <ul class="site-footer-links">
                        <li class="site-footer-link-item">
                            <a href="{{ route('home') }}" class="site-footer-link">Home</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="{{ route('all') }}" class="site-footer-link">Books</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="{{ route('morning-adhkar') }}" class="site-footer-link">Dua & Adhkar</a>
                        </li>

                        <li class="site-footer-link-item">
                            <a href="{{ route('contact') }}" class="site-footer-link">Contact Us</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-12">
                    <p class="copyright-text mb-0">Copyright © 2023 Sunnah kuntiko Media</p>
                </div>
            </div>
        </div>
    </footer>


    <script>
        function filterLectures() {
            const searchInput = document.getElementById('search').value.toLowerCase();
            const seriesItems = document.querySelectorAll('.series-item');
            
            seriesItems.forEach(function(series) {
                const topic = series.querySelector('strong > span').innerText.toLowerCase();
                if (topic.includes(searchInput)) {
                    series.style.display = "block";
                } else {
                    series.style.display = "none";
                }
            });
        }
    </script>




    <!-- JAVASCRIPT FILES -->
    <script src="/audio_assets/js/jquery.min.js"></script>
    <script src="/audio_assets/js/bootstrap.bundle.min.js"></script>
    <script src="/audio_assets/js/owl.carousel.min.js"></script>
    <script src="/audio_assets/js/custom.js"></script>

</body>

</html>
