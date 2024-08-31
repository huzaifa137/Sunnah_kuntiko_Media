
<!DOCTYPE html>
<html lang="en">
    

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

        <!-- Stylesheet -->
        <link href="/assets/style.css" rel="stylesheet" type="text/css" />

        <script src="https://kit.fontawesome.com/2da7c40e91.js" crossorigin="anonymous"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script /assets/="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="layout-v3">
        
        <!-- Start: Header Section -->
        <header id="header" class="navbar-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="menu-wrap">
                            <div class="navbar-header">
                                <div class="navbar-brand">
                                    <h1>
                                        <a href="{{route('home')}}">
                                            <img src="/assets/images/libraria-logo-v3.png" width="180px" alt="LIBRARIA" />
                                        </a>
                                    </h1>
                                </div>
                            </div>
                            <!-- Navigation -->
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
                                            <!--<li><a href="{{route('Adhkar-After-Swalah')}}">Adhkar after swalah</a></li>-->
                                            <!--<li><a href="{{route('Famous-Duas-from-the-Quran')}}">Famous Duas from the Quran</a></li>-->
                                            <!--<li><a href="{{route('Other-Duas')}}">Other Dua's</a></li>-->
                                        </ul>
                                    </li>

                                    <li><a href="{{route('about-us')}}">About us</a></li>
                                    <li><a href="{{route('contact')}}">Contact us</a></li>
                                </ul>
                                
                            </div>
                            <div class="header-socialbar hidden-sm hidden-xs">
                                
                                <ul class="share-links">
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void()">
                                            <i class="fa fa-share"></i>
                                        </a>
                                        <div class="dropdown-menu social-dropdown">
                                            <ul>
                                                <li><a href="https://www.facebook.com/TaqwaLibrary123" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="https://www.tiktok.com/@taqwa_library" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-tiktok"></i></a></li>
                                                <li><a href="https://www.youtube.com/channel/UCbBl171lNYsem6LpWtWjHbw" target="_blank" rel="noopener noreferrer"><i class="fa fa-youtube"></i></a></li>
                                                <li><a href="https://www.instagram.com/taqwa_library_official/" target="_blank" rel="noopener noreferrer"><i class="fa fa-instagram"></i></a></li>
                                                
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="mobile-menu hidden-md hidden-lg">
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
                                    {{-- <li>
                                        <a href="news-events-list-view.html">News &amp; Events</a>
                                        <ul>
                                            <li><a href="news-events-list-view.html">News &amp; Events List View</a></li>
                                            <li><a href="news-events-detail.html">News &amp; Events Detail</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void()">Pages</a>
                                        <ul>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="signin.html">Signin/Register</a></li>
                                            <li><a href="404.html">404/Error</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="blog.html">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog Grid View</a></li>
                                            <li><a href="blog-detail.html">Blog Detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="services.html">Services</a></li>
                                    <li><a href="contact.html">Contact</a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- End: Header Section -->

        <!-- Start: Slider Section -->
        <div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel">
            <!-- Carousel slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <figure>
                        <img alt="Home Slide" src="/assets/images/header-slide.jpg" />
                    </figure>
                    <div class="container">
                        <div class="carousel-caption">
                            <h2 style="color: green" class="Basmallah">بسم الله الرحمن الرحيم</h2>
                            <h2>You're Welcome to Sunnah kuntiko Media </h2>
                            <p>Sunnah kuntiko Media gives you access to free <strong>Islamic Books,</strong> <strong>Quran,</strong> <strong>Dua & Adhkar,</strong> <strong>Arabic study,</strong><strong>Islamic Audio and Islamic Videos</strong></p>

                            <div class="filter-box">
                                <form action="{{route('search-bar')}}" class="banner-filter-box" method="get">
                                    <div class="form-group">
                                        <label class="sr-only" for="keywords">Search by Keyword</label>
                                        <input class="form-control" placeholder="Search by Keyword" name="keyword" >
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="Catagory1" value="{{old('Catagory')}}">
                                            <option value="">CATAGORY</option>
                                            <option value="AQEEDAH">AQEEDAH</option>
                                            <option value="SHIRK">SHIRK</option>
                                            <option value="QURAN">QURAN</option>
                                            <option value="HADITH">HADITH</option>
                                            <option value="PROPHETS">PROPHETS</option>
                                            <option value="TAFSIR">TAFSIR</option>
                                            <option value="TAWHEED">TAWHEED</option>
                                            <option value="ALLAH">ALLAH</option>
                                            <option value="ANGELS">ANGELS</option>
                                            <option value="DUA-ZIKR">DUA-ZIKR</option>
                                            <option value="JINN">JINN</option>
                                            <option value="SUNNAH">SUNNAH</option>
                                            <option value="BIDAH">BIDAH</option>
                                            <option value="BIOGRAPHIES">BIOGRAPHIES</option>
                                            <option value="DEATH-GRAVE">DEATH-GRAVE</option>
                                            <option value="FIQH">FIQH</option>
                                            <option value="NEW-MUSLIMS">NEW MUSLIMS</option>
                                            <option value="Non-Muslims">Non-Muslims</option>
                                            <option value="HEALING">HEALING</option>                           
                                            <option value="HEART">HEART</option>                               
                                            <option value="KUFAR-Celebrations">KUFAR-Celebrations</option>     
                                            <option value="Qayamat-HEREAFTER">Qayamat-HEREAFTER</option>       
                                            <option value="RAMADHAN">RAMADHAN</option>                    
                                            <option value="RUQYA">RUQYA</option>                            
                                            <option value="SALAF">SALAF</option>                            
                                            <option value="SINS">SINS</option>
                                            <option value="ISLAM-4-KIDs">ISLAM-4-KIDs</option>
                                            <option value="ISLAMI-SHARIA-WILL">ISLAMI-SHARIA-WILL</option>
                                            <option value="PROPHET-SAWS">PROPHETSAWS</option>
                                            <option value="SACRED-MONTHS">SACRED MONTHS</option>
                                            <option value="ADVICE">ADVICE</option>  
                                            <option value="AWLIYAH-ALLAH">AWLIYAH-ALLAH</option>
                                            <option value="BENEFITS">BENEFITS</option>
                                            <option value="CALAMITIES">CALAMITIES</option>
                                            <option value="CHILDREN-YOUTH">CHILDREN-YOUTH</option>
                                            <option value="CURRENT-AFFAIRS">CURRENT AFFAIRS</option>
                                            <option value="DAJJAL">DAJJAL</option>
                                            <option value="DAWAH">DAWAH</option>
                                            <option value="DESIRES">DESIRES</option>
                                            <option value="ENVY">ENVY</option>
                                            <option value="ETHICS-MANNERS">ETHICS-MANNERS</option>
                                            <option value="EVIL">EVIL</option>
                                            <option value="FATAWA">FATAWA</option> 
                                            <option value="FITNAH">FITNAH</option>
                                            <option value="HAJJ-UMRAH">HAJJ-UMRAH</option>
                                            <option value="HALAL-o-HARAM">HALAL-o-HARAM</option>
                                            <option value="HARRAM-KHUTABHs">HARRAM KHUTABHs</option>
                                            <option value="HIJAB">HIJAB</option>
                                            <option value="HISTORY">HISTORY</option>
                                            <option value="ILM-ULAMA">ILM-ULAMA</option>
                                            <option value="ISLAM">ISLAM</option>
                                            <option value="ISLAMIC HISTORY">ISLAMIC HISTORY</option>
                                            <option value="JANAZAH">JANAZAH</option>
                                            <option value="KUFR">KUFR</option>
                                            <option value="MODESTY">MODESTY</option>
                                            <option value="MARRIAGE-DIVORCE">MARRIAGE-DIVORCE</option>
                                            <option value="MORALS">MORALS</option>                                           
                                            <option value="PARENTS">PARENTS</option>
                                            <option value="PRAYERS">PRAYERS</option>
                                            <option value="PROPHET'S-FAMILY">PROPHET'S FAMILY</option>                                            
                                            <option value="RACISM-INJUSTICE">RACISM - INJUSTICE</option>
                                            <option value="RELATIONS">RELATIONS</option>
                                            <option value="RELIGIONS">RELIGIONS</option>
                                            <option value="REPENTANCE">REPENTANCE</option>
                                            <option value="RIGHTS">RIGHTS</option>
                                            <option value="SAHABAH">SAHABAH</option>
                                            <option value="SECTS">SECTS</option>
                                            <option value="SEERAH">SEERAH</option>
                                            <option value="SHARIA">SHARIA</option>
                                            <option value="SHAYTAAN">SHAYTAAN</option>
                                            <option value="SISTERS">SISTERS</option>
                                            <option value="SOUL">SOUL</option>
                                            <option value="SUFISM">SUFISM</option>
                                            <option value="TERRORISM">TERRORISM</option>
                                            <option value="WARNINGS">WARNINGS</option>
                                            <option value="WASEELA">WASEELA</option>
                                            <option value="ZAKAT-SADAQAH">ZAKAT-SADAQAH</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="Catagory2" value="{{old('Catagory')}}">
                                            <option value="">CATAGORY</option>
                                            <option value="AQEEDAH">AQEEDAH</option>
                                            <option value="SHIRK">SHIRK</option>
                                            <option value="QURAN">QURAN</option>
                                            <option value="HADITH">HADITH</option>
                                            <option value="PROPHETS">PROPHETS</option>
                                            <option value="TAFSIR">TAFSIR</option>
                                            <option value="TAWHEED">TAWHEED</option>
                                            <option value="ALLAH">ALLAH</option>
                                            <option value="ANGELS">ANGELS</option>
                                            <option value="DUA-ZIKR">DUA-ZIKR</option>
                                            <option value="JINN">JINN</option>
                                            <option value="SUNNAH">SUNNAH</option>
                                            <option value="BIDAH">BIDAH</option>
                                            <option value="BIOGRAPHIES">BIOGRAPHIES</option>
                                            <option value="DEATH-GRAVE">DEATH-GRAVE</option>
                                            <option value="FIQH">FIQH</option>
                                            <option value="NEW-MUSLIMS">NEW MUSLIMS</option>
                                            <option value="Non-Muslims">Non-Muslims</option>
                                            <option value="HEALING">HEALING</option>                           
                                            <option value="HEART">HEART</option>                               
                                            <option value="KUFAR-Celebrations">KUFAR-Celebrations</option>     
                                            <option value="Qayamat-HEREAFTER">Qayamat-HEREAFTER</option>       
                                            <option value="RAMADHAN">RAMADHAN</option>                    
                                            <option value="RUQYA">RUQYA</option>                            
                                            <option value="SALAF">SALAF</option>                            
                                            <option value="SINS">SINS</option>
                                            <option value="ISLAM-4-KIDs">ISLAM-4-KIDs</option>
                                            <option value="ISLAMI-SHARIA-WILL">ISLAMI-SHARIA-WILL</option>
                                            <option value="PROPHET-SAWS">PROPHETSAWS</option>
                                            <option value="SACRED-MONTHS">SACRED MONTHS</option>
                                            <option value="ADVICE">ADVICE</option>  
                                            <option value="AWLIYAH-ALLAH">AWLIYAH-ALLAH</option>
                                            <option value="BENEFITS">BENEFITS</option>
                                            <option value="CALAMITIES">CALAMITIES</option>
                                            <option value="CHILDREN-YOUTH">CHILDREN-YOUTH</option>
                                            <option value="CURRENT-AFFAIRS">CURRENT AFFAIRS</option>
                                            <option value="DAJJAL">DAJJAL</option>
                                            <option value="DAWAH">DAWAH</option>
                                            <option value="DESIRES">DESIRES</option>
                                            <option value="ENVY">ENVY</option>
                                            <option value="ETHICS-MANNERS">ETHICS-MANNERS</option>
                                            <option value="EVIL">EVIL</option>
                                            <option value="FATAWA">FATAWA</option> 
                                            <option value="FITNAH">FITNAH</option>
                                            <option value="HAJJ-UMRAH">HAJJ-UMRAH</option>
                                            <option value="HALAL-o-HARAM">HALAL-o-HARAM</option>
                                            <option value="HARRAM-KHUTABHs">HARRAM KHUTABHs</option>
                                            <option value="HIJAB">HIJAB</option>
                                            <option value="HISTORY">HISTORY</option>
                                            <option value="ILM-ULAMA">ILM-ULAMA</option>
                                            <option value="ISLAM">ISLAM</option>
                                            <option value="ISLAMIC HISTORY">ISLAMIC HISTORY</option>
                                            <option value="JANAZAH">JANAZAH</option>
                                            <option value="KUFR">KUFR</option>
                                            <option value="MODESTY">MODESTY</option>
                                            <option value="MARRIAGE-DIVORCE">MARRIAGE-DIVORCE</option>
                                            <option value="MORALS">MORALS</option>                                           
                                            <option value="PARENTS">PARENTS</option>
                                            <option value="PRAYERS">PRAYERS</option>
                                            <option value="PROPHET'S-FAMILY">PROPHET'S FAMILY</option>                                            
                                            <option value="RACISM-INJUSTICE">RACISM - INJUSTICE</option>
                                            <option value="RELATIONS">RELATIONS</option>
                                            <option value="RELIGIONS">RELIGIONS</option>
                                            <option value="REPENTANCE">REPENTANCE</option>
                                            <option value="RIGHTS">RIGHTS</option>
                                            <option value="SAHABAH">SAHABAH</option>
                                            <option value="SECTS">SECTS</option>
                                            <option value="SEERAH">SEERAH</option>
                                            <option value="SHARIA">SHARIA</option>
                                            <option value="SHAYTAAN">SHAYTAAN</option>
                                            <option value="SISTERS">SISTERS</option>
                                            <option value="SOUL">SOUL</option>
                                            <option value="SUFISM">SUFISM</option>
                                            <option value="TERRORISM">TERRORISM</option>
                                            <option value="WARNINGS">WARNINGS</option>
                                            <option value="WASEELA">WASEELA</option>
                                            <option value="ZAKAT-SADAQAH">ZAKAT-SADAQAH</option>
                                        </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <input class="form-control" type="submit" value="Search">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Slider Section -->

        <!-- Start: Features -->
        <section class="features">
            <div class="container-fluid">
                <div class="row">
                    <ul>
                        <li class="bg-yellow">
                            <div class="feature-box">
                                <i class="yellow"></i>
                                <h3>Islamic Books</h3>
                                <p style="text-align: justify">We have a collection of free islamic books from authentic scholars in pdf, doc and other formats to be downloaded freely.</p>
            
                            </div>
                        </li>
                        <li class="bg-light-green">
                            <div class="feature-box">
                                <i class="light-green"></i>
                                <h3>Quran</h3>
                                <p style="text-align: justify">We have Quran in different formats of audio, pdf, doc and others to be read , listened online and even download freely.</p>
                               
                            </div>
                        </li>
                        <li class="bg-blue">
                            <div class="feature-box">
                                <i class="blue"></i>
                                <h3>Dua & Adhkar</h3>
                                <p style="text-align: justify">We have a collection of different authentic dua and Adhkar in pdf, doc and other formats to be downloaded freely.</p>
                                
                            </div>
                        </li>
                        <li class="bg-red">
                            <div class="feature-box">
                                <i class="red"></i>
                                <h3>Arabic study</h3>
                                <p style="text-align: justify">were working on a basic and most interactive way for beginners to learn Arabic and start reciting the holy Quran with ease.</p>
                               
                            </div>
                        </li>
                        <li class="bg-violet">
                            <div class="feature-box">
                                <i class="violet"></i>
                                <h3>islamic Audio</h3>
                                <p style="text-align: justify">We Have in library a collection of different islamic authentic audio's and podcasts to be listened online and downloaded freely.</p>
                                
                            </div>
                        </li>
                        <li class="bg-green">
                            <div class="feature-box">
                                <i class="green"></i>
                                <h3>islamic Videos</h3>
                                <p style="text-align: justify">We Have in library a collection of different islamic authentic videos's and series to be viewed online and downloaded freely.</p>
                                
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Features -->

        <!-- Start: Welcome Section -->
        <section class="welcome-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="welcome-wrap">
                            <div class="welcome-text">
                              <h2 class="section-title" style="color: green;" >Welcome to Sunnah kuntiko Media</h2>
                                <span class="underline left"></span>
                                <p style="text-align:justify"> <b> Bismillaahi Rahmaan Raheem</b> – In the Name of Allāh, the Beneficent, the Merciful. <br> <br> Praise be to Allah سُبْحَانَهُۥ وَتَعَالَ, and the peace and blessings of Allah be upon the noble Messenger, his family, companions and those who follow them upon excellence till the day of judgement. <br> <br> Sunnah kuntiko Media has been created to disseminate authentic and beneficial knowledge from Salafi Scholars and Students based on the Blessed and Moderate Methodology of the Sahabah, Taabi’een and Atbaa’ At-Tabi’een. We reject all forms of extremism and religious fanaticism in the name of Salfiyah. We also reject speech from hasty youth who are causing divisions among Salafi communities and rejecting advice of the Scholars. We love and respect our Noble Scholars, past and present, for the sake of Allah سُبْحَانَهُۥ وَتَعَالَ, Who blessed them with knowledge of His Book and Sunnah of the Prophet صلى الله عليه وسلم, and we shall continue to propagate their work, Insh'a Allah. <br>
                                  </p>
                                <a class="btn btn-dark-gray" href="{{route('about-us')}}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="welcome-image"></div>
        </section>
        <!-- End: Welcome Section -->

        <!-- Start: Newsletter -->
        <section class="newsletter section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="center-content">
                            <h2 class="section-title">Subscribe to our Newsletters</h2>
                            <span class="underline center"></span>
                            <p class="lead">Subscribe to Sunnah kuntiko Media newsletter to access any update and information.</p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Enter your Email!" id="newsletter" name="newsletter" type="email">
                            <input class="form-control" value="Subscribe" type="submit">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End: Newsletter -->

       <!-- Start: Category Filter -->
        <section class="category-filter section-padding">
            <div class="container">
                <div class="center-content">
                    <h2 class="section-title" style="color:green;">Check Out The New Releases</h2>
                    <span class="underline center"></span>
                    <p class="lead" id="hadith_intro">All the recently uploaded islamic-books and pdfs in different languages from Sunnah kuntiko Media collection are shown here.</p>
                </div>
            </div>

            
            <div id="category-filter">
                <ul class="category-list">
                    @foreach ($new_release as $info)  
                    <li class="category-item adults">
                        <figure>
                            <img class="image-size" id="pic_bd1" src="{{url('/public/public/BookImage/'.$info->Book_Image)}}"  alt="New Releaase" />
                            <figcaption class="bg-blue">
                                <div class="info-block">
                                    <h4>{{$info->Book_Name}}</h4>
                                    <span class="author"><strong>Author:</strong> {{$info->Author_Name}}</span>
                                    <span class="author"><strong>ISBN:</strong> 9781581573268</span>
                                    <div class="rating">
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                        <span>☆</span>
                                    </div>
                                    <p>Go ahead  explore , read, access and download this book freely....</p>
                                    <a href="{{'final-page/'.$info->id}}">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    <ol>
                                        <li>
                                            <a href="javascript:void()">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <i class="fa fa-envelope"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <i class="fa fa-share-alt"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </li>
                                    </ol>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    @endforeach
                </ul>
                <div class="clearfix"></div>
            </div>

           
            <div class="container">
                <!-- Start: Facts Counter -->
                <div class="fun-stuff">
                    <div class="facts-counter">
                        <ul>
                            <li class="col-sm-3">
                                <div class="fact-item icon-ebooks">
                                    <div class="fact-icon">
                                        <img src="/assets/images/icon-ebooks.png" alt="" />
                                    </div>
                                    <span> BOOKS<strong class="fact-counter">45780</strong></span>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="fact-item icon-eaudio">
                                    <div class="fact-icon">
                                        <img src="/assets/images/icon-eaudio.png" alt="" />
                                    </div>
                                    <span> AUDIO<strong class="fact-counter">32450</strong></span>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="fact-item icon-magazine">
                                    <div class="fact-icon">
                                        <img src="/assets/images/icon-magazine.png" alt="" />
                                    </div>
                                    <span>QURAN<strong class="fact-counter">14450</strong></span>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="fact-item icon-videos">
                                    <div class="fact-icon">
                                        <img src="/assets/images/icon-videos.png" alt="" />
                                    </div>
                                    <span>Videos<strong class="fact-counter">32450</strong></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End: Facts Counter -->
            </div>
        </section>
        <!-- Start: Category Filter -->

        <!-- Start: Our Community Section -->
        <section class="community-testimonial">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-title" style="color:green;">HADITH</h2>
                    <span class="underline center"></span>
                    <span id="hadith_intro" ><strong>  Abu Hurairah (رضي الله عنه)reported:The Messenger of Allah (ﷺ) said,“The world, with all that it contains, is accursed except for the remembrance of Allah that which pleases Allah; and the religious schools and seekers of knowledge.” </strong></p></span>
                </div>
                <div class="owl-carousel">
                    <div class="single-testimonial-box">
                        <div class="top-portion">
                            <img src="/assets/images/testimonial-01.jpg" alt="Testimonial Image" />
                            <div class="user-comment">
                                <div class="arrow-left"></div>
                                <blockquote cite="javascript:void()" style="text-align: justify">
                                    <strong >Abu Huraira reported Allah’s Messenger (ﷺ) as saying:</strong>
                                    (When) the time would draw close to the Last Hour, knowledge would be snatched away, turmoil would be rampant, miserliness would be put (in the hearts of the people) and therewould be much blotshed. They said: What is al-harj? Thereupon he said: It is bloodshed.
                                </blockquote>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="bottom-portion">
                            <a href="javascript:void()" class="author">
                                 — Sahih Muslim 157 d 
                            </a>
                            
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="single-testimonial-box">
                        <div class="top-portion">
                            <img src="/assets/images/testimonial-02.jpg" alt="Testimonial Image" />
                            <div class="user-comment">
                                <div class="arrow-left"></div>
                                <blockquote cite="javascript:void()" style="text-align: justify">
                                    <strong>A’ishah (رضي الله عنه)  narrated that the Prophet (ﷺ) said : </strong> <br>
                                    One who is proficient in reciting the Qur’an is associated with the noble, pious (angel) scribes. As for he who stammers when reciting the Qur’an and find it difficult for him, he will be granted a double reward
                                </blockquote>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="bottom-portion">
                            <a href="javascript:void()" class="author">
                                [Al-Bukhari and Muslim]  
                            </a>
                            
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="single-testimonial-box">
                        <div class="top-portion">
                            <img src="/assets/images/testimonial-01.jpg" alt="Testimonial Image" />
                            <div class="user-comment">
                                <div class="arrow-left"></div>
                                <blockquote cite="javascript:void()" style="text-align: justify"> 
                                    <strong>Abu Hurairah (رضي الله عنه)  reported : </strong> <br> <br>
                                    O Messenger of Allah! Who is most deserving of my fine treatment?" He (ﷺ) said, "Your mother, then your mother, then your mother, then your father, then your nearest, then nearest". <br> <br>
                                </blockquote>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="bottom-portion">
                            <a href="javascript:void()" class="author">
                                [Al-Bukhari and Muslim] 
                            </a>
                            
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="single-testimonial-box">
                        <div class="top-portion">
                            <img src="/assets/images/testimonial-02.jpg" alt="Testimonial Image" />
                            <div class="user-comment">
                                <div class="arrow-left"></div>
                                <blockquote cite="javascript:void()" style="text-align: justify">
                                    <strong>Ibn Abbas  (رضي الله عنه)  reported : Allah's Messenger (ﷺ) said : </strong>
                                    A woman who has been previously married (Thayyib) has more right to her person than her guardian.And a virgin should also be consulted, and her silence implies her consent. <br> <br> 
                                </blockquote>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="bottom-portion">
                            <a href="javascript:void()" class="author">
                                — Sahih Muslim 1421c 
                            </a>
                            
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="single-testimonial-box">
                        <div class="top-portion">
                            <img src="/assets/images/testimonial-01.jpg" alt="Testimonial Image" />
                            <div class="user-comment">
                                <div class="arrow-left"></div>
                                <blockquote cite="javascript:void()" style="text-align: justify">
                                    <strong>Narrated Anas:  (رضي الله عنه)  The Prophet (ﷺ) said: </strong> <br> <br> 
                                    A Muslim whose three children die before the age of puberty will be granted Paradise by Allah due to his mercy for them. <br> <br>
                                </blockquote>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="bottom-portion">
                            <a href="javascript:void()" class="author">
                                — Sahih al-Bukhari 1248 
                            </a>
                            
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="single-testimonial-box">
                        <div class="top-portion">
                            <img src="/assets/images/testimonial-02.jpg" alt="Testimonial Image" />
                            <div class="user-comment">
                                <div class="arrow-left"></div>
                                <blockquote cite="javascript:void()" style="text-align: justify">
                                    <strong>Narrated Abu Huraira:  (رضي الله عنه)  The Prophet (ﷺ) said: </strong>
                                    Allah says, ‘Spend, O son of Adam, and I shall spend on you. The right hand of Allah is full and overflowing and in nothing would diminish it, by overspending day and night. <br> <br> 
                                </blockquote> 
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div class="bottom-portion">
                            <a href="javascript:void()" class="author">
                                — Sahih Muslim, Book 5, 2178
                            </a>
                            
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End: Our Community Section -->

        <p class="mt-5"></p>
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
                                <span>Kisenyi two, Mengo</span>
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
                                <li><a href="{{route('Ugandan-Sheikhs')}}">Audios</a></li>
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
                        <li><a href="{{route('all')}}">BOOKS</a></li>
                        <li><a href="{{route('Quran-Audio')}}">Quran</a></li>
                        <li><a href="{{route('All-videos')}}">VIDEOS</a></li>
                        <li><a href="{{route('Ugandan-Sheikhs')}}">AUDIOS</a></li>
                        <li><a href="{{route('morning-adhkar')}}">Dua & Adhkar</a></li>
                        <li><a href="{{route('about-us')}}">ABOUT US</a></li>
                        <li><a href="{{route('contact')}}">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End: Footer -->

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