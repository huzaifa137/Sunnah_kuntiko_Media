<!DOCTYPE html>
<html lang="zxx">
    

<head>        

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

        <!-- Title -->
        <title>..:: Sunnah Islam Media ::..</title>

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
                                                <!--<li><a href="{{route('Adhkar-After-Swalah')}}">Adhkar after swalah</a></li>-->
                                                <!--<li><a href="{{route('Famous-Duas-from-the-Quran')}}">Famous Duas from the Quran</a></li>-->
                                                <!--<li><a href="{{route('Other-Duas')}}">Other Dua's</a></li>-->
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


        <!-- Start: Products Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="booksmedia-detail-main">
                        <div class="container">
                            <div class="row">
                                <section class="search-filters">
                                    
                                </section>
                            </div>
                            <div class="booksmedia-detail-box">
                                <div class="table-tabs" id="responsiveTabs">
                                    <ul class="nav nav-tabs alignInfo">
                                        <li class="active"><b class="arrow-up"></b><a data-toggle="tab" href="#sectionA" style="font-weight: bold;font-style:italic">Recitations</a></li>
                                        <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionB" style="font-weight: bold;font-style:italic">Recitations from Haramain Taraweeh</a></li>
                                        <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionC" style="font-weight: bold;font-style:italic">Non-Hafs Recitations</a></li>
                                        <li><b class="arrow-up"></b><a data-toggle="tab" href="#sectionD" style="font-weight: bold;font-style:italic">Recitations with Translations</a></li> 
                                    </ul>
                                    <div class="tab-content">
                                        <div id="sectionA" class="tab-pane fade in active">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>A</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="color: #0dcf31;"> <a href="{{url('surah/Abdullah Awad al-Juhani')}}"> Abdullah Awad al-Juhani </a></td>
                                                        <td> <a href="{{url('surah/Abdullah Basfar')}}" style="color: black !important"> Abdullah Basfar</td></a>
                                                        <td style="color: yellow !important;"> <a href="{{url('surah/Abdur-Rahman as-Sudais')}}" >Abdur-Rahman as-Sudais</td>                                                                
                                                    </tr>
                                                    <tr>
                                                        <td ><a href="{{url('surah/AbdulMuhsin al-Qasim')}}" style="color: #000">AbdulMuhsin al-Qasim</td>
                                                        <td style="color: #0dcf31" ><a href="{{url('surah/AbdulBari ath-Thubaity')}}" >AbdulBari ath-Thubaity</td>
                                                        <td><a href="{{url('surah/Ahmed ibn Ali al-Ajmy')}}" style="color: #000">Ahmed ibn Ali al-Ajmy</td>
                                                    </tr>
                                                    <tr>
                                                        <td ><a href="{{url('surah/AbdulAzeez al-Ahmad')}}" style="color: #0dcf31">AbdulAzeez al-Ahmad</td>
                                                        <td><a href="{{url('surah/AbdulBaset AbdulSamad [Murattal]')}}" style="color: #000">AbdulBaset AbdulSamad [Murattal]</td>
                                                        <td ><a href="{{url('surah/AbdulWadud Haneef')}}" style="color: #0dcf31">AbdulWadud Haneef</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="{{url('surah/Aziz Alili')}}" style="color: #000">Aziz Alili</td>
                                                        <td><a href="{{url('surah/AbdulBaset AbdulSamad [Mujawwad]')}}" style="color: #0dcf31">AbdulBaset AbdulSamad [Mujawwad]</td>
                                                        <td><a href="{{url('surah/Al-Hussayni Al-\'Azazy (with Children)')}}" style="color: #000">Al-Hussayni Al-'Azazy (with Children)</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="{{url('surah/Abdur-Razaq bin Abtan al-Dulaimi [Mujawwad]')}}" style="color: #0dcf31">Abdur-Razaq bin Abtan al-Dulaimi [Mujawwad]</td>
                                                        <td><a href="{{url('surah/Abdullah Khayat')}}" style="color: #000">Abdullah Khayat</td>
                                                        <td><a href="{{url('surah/Adel Kalbani')}}" style="color: #0dcf31"> Adel Kalbani</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="{{url('surah/AbdulKareem Al Hazmi')}}" style="color: #000">AbdulKareem Al Hazmi</td>
                                                        <td><a href="{{url('surah/Abdul-Mun\'im Abdul-Mubdi\'')}}" style="color: #0dcf31">Abdul-Mun'im Abdul-Mubdi'</td>
                                                        <td><a href="{{url('surah/Abdur-Rashid Sufi')}}" style="color: #000">Abdur-Rashid Sufi</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="color: #0dcf31">"***Abdur-Rashid Sufi***"</td>
                                                        <td><a href="{{url('surah/Ahmad al-Huthaify')}}" style="color: black !important">Ahmad al-Huthaify</td>
                                                        <td><a href="{{url('surah/Abu Bakr al-Shatri [Taraweeh]')}}" style="color: #0dcf31">Abu Bakr al-Shatri [Taraweeh]</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="{{url('surah/Abdullah Matroud')}}" style="color: black !important">Abdullah Matroud</td>
                                                        <td><a href="{{url('surah/AbdulWadood Haneef')}}" style="color: #0dcf31">AbdulWadood Haneef</td>
                                                        <td><a href="{{url('surah/Ahmad Nauina')}}" style="color: black !important">Ahmad Nauina</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="{{url('surah/Akram Al-Alaqmi')}}" style="color: #0dcf31">Akram Al-Alaqmi</td>
                                                        <td><a href="{{url('surah/Ali Hajjaj Alsouasi')}}" style="color: black !important">Ali Hajjaj Alsouasi</td>
                                                        <td><a href="{{url('surah/Asim Abdul Aleem')}}" style="color: #0dcf31">Asim Abdul Aleem</td>
                                                    </tr>
                                                    <tr>
                                                        <td><a href="{{url('surah/Abdallah Abdal')}}" style="color: black !important">Abdallah Abdal</td>
                                                        <td><a href="{{url('surah/Abdullah Ali Jabir')}}" style="color: #0dcf31">Abdullah Ali Jabir</td>
                                                    </tr>
                                        </table>
                                        <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>B</th>
                                                        </tr>
                                                    </thead>
                                                <body>
                                                        <tr>
                                                            <td><a href="{{url('surah/Bandar Baleela')}}" style="color: black !important">Bandar Baleela</td>                                                                 
                                                        </tr>
                                                    </thead>
                                                </tbody>
                                        </table>
                                        

                                        
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>D</th>
                                                </tr>
                                            </thead>
                                            <body>
                                                <tr>
                                                    <td><a href="{{url('surah/Dr. Shawqy Hamed [Murattal]')}}" style="color: black !important">Dr. Shawqy Hamed [Murattal]</td>                                                                 
                                                </tr>
                                            </thead>
                                        </tbody>
                                </table>
                            

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>F</th>
                                        </tr>
                                    </thead>
                                    <body>
                                        <tr>
                                            <td><a href="{{url('surah/Fares Abbad')}}" style="color: #0dcf31">Fares Abbad</td>
                                            <td><a href="{{url('surah/Fatih Seferagic')}}" style="color: black !important">Fatih Seferagic</td>                                                                 
                                        </tr>
                                    
                                </tbody>
                        </table>
                        

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>H</th>
                                </tr>
                            </thead>
                            <body>
                                <tr>
                                    <td><a href="{{url('surah/Hani ar-Rifai')}}" style="color: black !important">Hani ar-Rifai</td>
                                    <td><a href="{{url('surah/Hamad Sinan')}}" style="color: #0dcf31 !important">Hamad Sinan</td>         
                                    <td><a href="{{url('surah/Hatem Farid')}}" style="color: black !important">Hatem Farid</td>                                                      
                                </tr>
                            </body>
                </table>
                

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>I</th>
                        </tr>
                    </thead>
                <body>
                        <tr>
                            <td><a href="{{url('surah/Ibrahim Al-Jibrin')}}" style="color: #0dcf31 !important">Ibrahim Al-Jibrin</td>
                            <td><a href="{{url('surah/Imad Zuhair Hafez')}}" style="color: black !important">Imad Zuhair Hafez</td>         
                            <td><a href="{{url('surah/Ibrahim Al Akhdar')}}" style="color: #0dcf31 !important">Ibrahim Al Akhdar</td>                                  
                        </tr>
                        <tr>
                            <td><a href="{{url('surah/Idrees Abkar')}}" style="color: black !important">Idrees Abkar</td>
                        </tr>
                </tbody>
            </table>
            

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>K</th>
                    </tr>
                </thead>
                <body>
                    <tr>
                        <td><a href="{{url('surah/Khalid al-Qahtani')}}" style="color: black !important">Khalid al-Qahtani</td>
                        <td><a href="{{url('surah/Khalid Al Ghamdi')}}" style="color: #0dcf31 !important">Khalid Al Ghamdi</td>         
                        <td><a href="{{url('surah/Khalifah Taniji')}}" style="color: black !important">Khalifah Taniji</td>                                                  
                    </tr>
            </tbody>
        </table>



        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>M</th>
                </tr>
            </thead>
            <body>
                <tr>
                    <td><a href="{{url('surah/Mishari Rashid al-`Afasy')}}" style="color: #0dcf31 !important">Mishari Rashid al-`Afasy</td>
                    <td><a href="{{url('surah/Muhammad Siddiq al-Minshawi')}}" style="color: black !important">Muhammad Siddiq al-Minshawi</td>         
                    <td><a href="{{url('surah/Muhammad Jibreel')}}" style="color: #0dcf31 !important">Muhammad Jibreel</td>                                       
                </tr>
                <tr>
                    <td><a href="{{url('surah/Muhammad al-Mehysni')}}" style="color: black !important">Muhammad al-Mehysni</td>  
                    <td><a href="{{url('surah/Muhammad Siddiq al-Minshawi [Mujawwad]')}}" style="color: #0dcf31 !important">Muhammad Siddiq al-Minshawi [Mujawwad]</td>
                    <td><a href="{{url('surah/Muhammad al-Luhaidan')}}" style="color: black !important">Muhammad al-Luhaidan</td>
                </tr>
                <tr>
                    <td><a href="{{url('surah/Muhammad Abdul-Kareem')}}" style="color: #0dcf31 !important">Muhammad Abdul-Kareem</td>  
                    <td><a href="{{url('surah/Mustafa al-`Azawi')}}" style="color: black !important">Mustafa al-`Azawi</td>
                    <td><a href="{{url('surah/Muhammad Hassan')}}" style="color: #0dcf31 !important">Muhammad Hassan</td>
                </tr>
                <tr>
                    <td><a href="{{url('surah/Mostafa Ismaeel')}}" style="color: black !important">Mostafa Ismaeel</td>  
                    <td><a href="{{url('surah/Muhammad Sulaiman Patel')}}" style="color: #0dcf31 !important">Muhammad Sulaiman Patel</td>
                    <td><a href="{{url('surah/Mohammad Al-Tablawi')}}" style="color: black !important">Mohammad Al-Tablawi</td>
                </tr>
                <tr>
                    <td><a href="{{url('surah/Mohammad Ismaeel Al-Muqaddim')}}" style="color: #0dcf31 !important">Mohammad Ismaeel Al-Muqaddim</td>  
                    <td><a href="{{url('surah/Muhammad Ayyoob [Taraweeh]')}}" style="color: black !important">Muhammad Ayyoob [Taraweeh]</td>
                    <td><a href="{{url('surah/Masjid Quba Taraweeh 1434')}}" style="color: #0dcf31 !important">Masjid Quba Taraweeh 1434</td>
                </tr>
                <tr>
                    <td><a href="{{url('surah/Muhammad Khaleel')}}" style="color: black !important">Muhammad Khaleel</td>  
                    <td><a href="{{url('surah/Mahmoud Khaleel Al-Husary')}}" style="color: #0dcf31 !important">Mahmoud Khaleel Al-Husary</td>
                    <td><a href="{{url('surah/Mahmood Ali Al-Bana')}}" style="color: black !important">Mahmood Ali Al-Bana</td>
                </tr>
                <tr>
                    <td><a href="{{url('surah/Maher al-Muaiqly')}}" style="color: #0dcf31 !important">Maher al-Muaiqly</td>  
                </tr>
            </body>
    </table>


    <table class="table table-bordered">
        <thead>
            <tr>
                <th>N</th>
            </tr>
        </thead>
        <body>
            <tr>
                <td><a href="{{url('surah/Nabil ar-Rifai')}}" style="color: black !important">Nabil ar-Rifai</td>
                <td><a href="{{url('surah/Nasser Al Qatami')}}" style="color: #0dcf31 !important">Nasser Al Qatami</td>                                                          
            </tr>
    </tbody>
</table>


<table class="table table-bordered">
    <thead>
        <tr>
            <th>S</th>
        </tr>
    </thead>
    <body>
        <tr>
            <td><a href="{{url('surah/Sa`ud ash-Shuraym')}}" style="color: #0dcf31 !important">Sa`ud ash-Shuraym</td>
            <td><a href="{{url('surah/Saad al-Ghamdi')}}" style="color: black !important">Saad al-Ghamdi</td>          
            <td><a href="{{url('surah/Sahl Yasin')}}" style="color: #0dcf31 !important">Sahl Yasin</td>                                                
        </tr>
        <tr>
            <td><a href="{{url('surah/Salah Bukhatir')}}" style="color: black !important">Salah Bukhatir</td>
            <td><a href="{{url('surah/Sudais and Shuraym')}}" style="color: #0dcf31 !important">Sudais and Shuraym</td>          
            <td><a href="{{url('surah/Saleh al Taleb')}}" style="color: black !important">Saleh al Taleb</td>                                                
        </tr>
        <tr>
            <td><a href="{{url('surah/Salah al-Budair')}}" style="color: #0dcf31 !important">Salah al-Budair</td>
            <td><a href="{{url('surah/Sadaqat `Ali')}}" style="color: black !important">Sadaqat `Ali</td>          
            <td><a href="{{url('surah/Salah Al-Hashim')}}" style="color: #0dcf31 !important">Salah Al-Hashim</td>                                                
        </tr>
</tbody>
</table>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>T</th>
        </tr>
        </thead>
        <body>
        <tr>
            <td><a href="{{url('surah/Tawfeeq ibn Sa`id as-Sawa\'igh')}}" style="color: black !important"> Tawfeeq ibn Sa`id as-Sawa'igh</td>                                          
        </tr>
</tbody>
</table>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>W</th>
        </tr>
    </thead>
    <body>
        <tr>
            <td><a href="{{url('surah/Wadee Hammadi Al Yamani')}}" style="color: #0dcf31 !important"> Wadee Hammadi Al Yamani</td>                                          
        </tr>
</tbody>
</table>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Y</th>
        </tr>
    </thead>
<body>
        <tr>
            <td><a href="{{url('surah/Yasser ad-Dussary')}}" style="color: black !important">Yasser ad-Dussary</td>                                          
        </tr>
    </tbody>
</table>
</div>
    </div>

    <div id="sectionB" class="tab-pane fade in active">
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Makkah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="{{url('surah/Makkah Taraweeh 1426')}}" style="color: black !important">Makkah Taraweeh 1424</td>
                        <td><a href="{{url('surah/Makkah Taraweeh 1425')}}" style="color: black !important">Makkah Taraweeh 1425 </td>
                        <td><a href="{{url('surah/Makkah Taraweeh 1426')}}" style="color: black !important">Makkah Taraweeh 1426</td>
                        <td><a href="{{url('surah/Makkah Taraweeh 1427')}}" style="color: black !important">Makkah Taraweeh 1427</td>                                                                    
                    </tr>
                    <tr>
                        <td><a href="{{url('surah/Makkah Taraweeh 1428')}}" style="color: black !important">Makkah Taraweeh 1428</td>
                        <td><a href="{{url('surah/Makkah Taraweeh 1429')}}" style="color: black !important">Makkah Taraweeh 1429</td>
                        <td><a href="{{url('surah/Makkah Taraweeh 1430')}}" style="color: black !important">Makkah Taraweeh 1430</td>
                        <td><a href="{{url('surah/Makkah Taraweeh 1431')}}" style="color: black !important">Makkah Taraweeh 1431</td>
                    </tr>
                    <tr>
                        <td><a href="{{url('surah/Makkah Taraweeh 1432')}}" style="color: black !important">Makkah Taraweeh 1432</td>
                        <td><a href="{{url('surah/Makkah Taraweeh 1433')}}" style="color: black !important">Makkah Taraweeh 1433</td>
                        <td><a href="{{url('surah/Makkah Taraweeh 1434')}}" style="color: black !important">Makkah Taraweeh 1434</td>
                        <td><a href="{{url('surah/Makkah Taraweeh 1435')}}" style="color: black !important">Makkah Taraweeh 1435</td>
                    </tr>
                    <tr>
                        <td><a href="{{url('surah/Makkah Taraweeh 1436')}}" style="color: black !important">Makkah Taraweeh 1436</td>
                        <td><a href="{{url('surah/Makkah Taraweeh 1437')}}" style="color: black !important">Makkah Taraweeh 1437</td>
                        <td><a href="{{url('surah/Makkah Taraweeh 1438')}}" style="color: black !important">Makkah Taraweeh 1438</td>
                        <td><a href="{{url('surah/Makkah Taraweeh 1439')}}" style="color: black !important">Makkah Taraweeh 1439</td>
                    </tr>
                    <tr>
                        <td><a href="{{url('surah/Makkah Taraweeh 1440')}}" style="color: black !important">Makkah Taraweeh 1440</td>
                        <td><a href="{{url('surah/Makkah Taraweeh 1441')}}" style="color: black !important">Makkah Taraweeh 1441</td>
                    </tr>
                </tbody>
                </table>
            
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Madinah</th>
                        </tr>
                    </thead>
                        <tr>
                            <td><a href="{{url('surah/Madinah Taraweeh 1419')}}" style="color: black !important">Madinah Taraweeh 1419</td>
                            <td><a href="{{url('surah/Madinah Taraweeh 1423')}}" style="color: black !important">Madinah Taraweeh 1423</td>
                            <td><a href="{{url('surah/Madinah Taraweeh 1426')}}" style="color: black !important">Madinah Taraweeh 1426</td>                                                                 
                        </tr>
                        <tr>
                            <td><a href="{{url('surah/Madinah Taraweeh 1427')}}" style="color: black !important">Madinah Taraweeh 1427</td>
                            <td><a href="{{url('surah/Madinah Taraweeh 1429')}}" style="color: black !important">Madinah Taraweeh 1429</td>
                            <td><a href="{{url('surah/Madinah Taraweeh 1428')}}" style="color: black !important">Madinah Taraweeh 1428</td>
                        </tr>
                       <tr>
                        <td><a href="{{url('surah/Madinah Taraweeh 1430')}}" style="color: black !important">Madinah Taraweeh 1430</td>
                        <td><a href="{{url('surah/Madinah Taraweeh 1431')}}" style="color: black !important">Madinah Taraweeh 1431</td>
                        <td><a href="{{url('surah/Madinah Taraweeh 1432')}}" style="color: black !important">Madinah Taraweeh 1432</td>
                        </tr>
                        <tr>
                            <td><a href="{{url('surah/Madinah Taraweeh 1433')}}" style="color: black !important">Madinah Taraweeh 1433</td>
                            <td><a href="{{url('surah/Madinah Taraweeh 1434')}}" style="color: black !important">Madinah Taraweeh 1434</td>
                            <td><a href="{{url('surah/Madinah Taraweeh 1435')}}" style="color: black !important">Madinah Taraweeh 1435</td>
                        </tr>
                        <tr>
                            <td><a href="{{url('surah/Madinah Taraweeh 1436')}}" style="color: black !important">Madinah Taraweeh 1436</td>
                            <td><a href="{{url('surah/Madinah Taraweeh 1437')}}" style="color: black !important">Madinah Taraweeh 1437</td>
                            <td><a href="{{url('surah/Madinah Taraweeh 1439')}}" style="color: black !important">Madinah Taraweeh 1439</td>
                        </tr>
                        <tr>
                            <td><a href="{{url('surah/Madinah Taraweeh 1440')}}" style="color: black !important">Madinah Taraweeh 1440</td>
                            <td><a href="{{url('surah/Madinah Taraweeh 1441')}}" style="color: black !important">Madinah Taraweeh 1441</td>
                            <td><a href="{{url('surah/Madinah Taraweeh 1442')}}" style="color: black !important">Madinah Taraweeh 1442</td>
                        </tr>
                    </thead>
                </tbody>
        </table>
    </div>


    <div id="sectionC" class="tab-pane fade in active">
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>A</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="{{url('surah/AbdulBaset AbdulSamad [Warsh]')}}" style="color: black !important">AbdulBaset AbdulSamad [Warsh]</td>
                        <td><a href="{{url('surah/Abdur-Rashid Sufi [Soosi]')}}" style="color: black !important">Abdur-Rashid Sufi [Soosi]</td>
                        <td><a href="{{url('surah/Abdur-Rashid Sufi [Khalaf]')}}" style="color: black !important">Abdur-Rashid Sufi [Khalaf]</td>                                                                
                    </tr>
                    <tr>
                        <td><a href="{{url('surah/Abdur-Rashid Sufi [Abi al-Haarith an al-Kasaa\'ee]')}}" style="color: black !important">Abdur-Rashid Sufi [Abi al-Haarith an al-Kasaa'ee]</td>
                        <td><a href="{{url('surah/Abdur-Rashid Sufi [ad-Doori an Abi Amr]')}}" style="color: black !important">Abdur-Rashid Sufi [ad-Doori an Abi Amr]</td>
                        <td><a href="{{url('surah/Abdur-Rashid Sufi [Shu\'bah an Asim]')}}" style="color: black !important">Abdur-Rashid Sufi [Shu'bah an Asim]</td>                                                                
                    </tr>
                    <tr>
                        <td><a href="{{url('surah/Ali al-Huthaify [Qaloon]')}}" style="color: black !important">Ali al-Huthaify [Qaloon]</td>
                        <td><a href="{{url('surah/Abdur-Rashid Sufi [Soosi, 2020]')}}" style="color: black !important">Abdur-Rashid Sufi [Soosi, 2020]</td>                                                              
                    </tr>
                </tbody>
                </table>


                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>M</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="{{url('surah/Mahmoud Khalil Al-Husary [Doori]')}}" style="color: black !important">Mahmoud Khalil Al-Husary [Doori]</td>                                                               
                        </tr>
                    </tbody>
                    </table>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>N</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="{{url('surah/Noreen Siddiq [ad-Doori an Abi Amr]')}}" style="color: black !important">Noreen Siddiq [ad-Doori an Abi Amr]</td>                                                               
                            </tr>
                        </tbody>
                        </table>
    </div>

    <div id="sectionD" class="tab-pane fade in active">
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>A</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="{{url('surah/AbdulBaset AbdulSamad with Naeem Sultan [Pickthall Translation]')}}" style="color: black !important">AbdulBaset AbdulSamad with Naeem Sultan [Pickthall Translation]</td>
                        <td><a href="{{url('surah/AbdulBaset AbdulSamad with Ibrahim Walk [Saheeh Intl Translation]')}}" style="color: black !important">AbdulBaset AbdulSamad with Ibrahim Walk [Saheeh Intl Translation]</td>
                        <td><a href="{{url('surah/Abdullah Basfar with Ibrahim Walk [Saheeh Intl Translation]')}}" style="color: black !important">Abdullah Basfar with Ibrahim Walk [Saheeh Intl Translation]</td>                                                                
                    </tr>
                    
                </tbody>
                </table>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>M</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="{{url('surah/Muhammad Ayyub with Mikaal Waters [Muhsin Khan Translation]')}}" style="color: black !important">Muhammad Ayyub with Mikaal Waters [Muhsin Khan Translation]</td>
                            <td><a href="{{url('surah/Mishari ibn Rashid al-`Afasy with Saabir [Muhsin Khan Translation]')}}" style="color: black !important">Mishari ibn Rashid al-`Afasy with Saabir [Muhsin Khan Translation]</td>
                            <td><a href="{{url('surah/Mishari ibn Rashid al-`Afasy with Ibrahim Walk [Saheeh Intl Translation]')}}" style="color: black !important">Mishari ibn Rashid al-`Afasy with Ibrahim Walk [Saheeh Intl Translation]</td>                                                                
                        </tr>
                    </tbody>
                    </table>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="{{url('surah/Sudais and Shuraym with Aslam Athar [Pickthall Translation]')}}" style="color: black !important">Sudais and Shuraym with Aslam Athar [Pickthall Translation]</td>    
                            <td><a href="{{url('surah/Shakir Qasami with Aslam Athar [Pickthall Translation]')}}" style="color: black !important">Shakir Qasami with Aslam Athar [Pickthall Translation]</td>
                            <td><a href="{{url('surah/Sudais and Shuraym with Naeem Sultan [Pickthall Translation]')}}" style="color: black !important">Sudais and Shuraym with Naeem Sultan [Pickthall Translation]</td>                                                           
                        </tr>
                        <td><a href="{{url('surah/Sudais and Shuraym [Urdu Translation]')}}" style="color: black !important">Sudais and Shuraym [Urdu Translation]</td>
                    </tbody>
                    </table>
    </div>
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


 <!-- Start: Footer -->
 <footer class="site-footer">
    <div class="container">
        <div id="footer-widgets">
            <div class="row">
                <div class="col-md-4 col-sm-6 widget-container">
                    <div id="text-2" class="widget widget_text">
                        <h3 class="footer-widget-title">About &nbsp; Sunnah Islam Media</h3>
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