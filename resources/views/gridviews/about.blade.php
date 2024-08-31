@extends('layouts.aboutus_header') 
@section('about_us_information')

        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2 style="color:green;">Our Services</h2>
                    <span class="underline center"></span>
                    <p class="lead" style="color: #fff">Access free Islamic Books, Quran, Dua & Adhkar, Arabic study, Islamic Audio and Islamic Videos</p>
                    
                    <?php 

                     use Carbon\Carbon;
                     $dt = Carbon::now();
                     $dt->addDays(1);
                    echo "<p style='color:red;'>" . $dt->toHijri()->isoFormat('LL') . " A.H.". "</p>" ;
                    ?>
                
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="index-2.html">Home</a></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->
        <!-- Start: Services Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="services-main">
                        <div class="services-pg">                            
                            <section class="services-offering">
                                <div class="container">
                                    <div class="center-content">
                                        <h2 class="section-title" style="color:green;">SERVICE WE ARE OFFERING</h2>
                                        <span class="underline center"></span>
                                        <p class="lead" style="color: red">Free Islamic Books, Quran, Dua & Adhkar, Arabic study, Islamic Audio and Islamic Videos</p>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="contact-location">
                                        <div class="flipcard">
                                            <div class="front">
                                                <div class="top-info">
                                                    <h3><i class="fa fa-book" aria-hidden="true"></i><span>ISLAMIC BOOKS</span></h3>
                                                </div>
                                                <div class="bottom-info">
                                                    <span class="top-arrow"></span>
                                                    <p>We have a collection of free islamic books from authentic scholars in pdf, doc and other formats to be downloaded freely.</p>
                                                    <a href="{{('all')}}">View Islamic books <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="back">
                                                <div class="bottom-info orange-bg">
                                                    <span class="bottom-arrow"></span>
                                                    <p>We have a collection of free islamic books from authentic scholars in pdf, doc and other formats to be downloaded freely.</p>
                                                    <a href="{{('all')}}">View Islamic books <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="top-info dark-bg">
                                                    <h3><i class="fa fa-book" aria-hidden="true"></i><span>ISLAMIC BOOKS</span></h3>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="flipcard">
                                            <div class="front">
                                                <div class="top-info">
                                                    <h3><i class="fa fa-heart" aria-hidden="true"></i><span>QURAN</span></h3>
                                                </div>
                                                <div class="bottom-info">
                                                    <span class="top-arrow"></span>
                                                    <p>We have Quran in different formats of pdf, doc and others to be read online and even download freely.</p>
                                                    <a href="javascript:void()">View Quran <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="back">
                                                <div class="bottom-info orange-bg">
                                                    <span class="bottom-arrow"></span>
                                                    <p>We have Quran in different formats of pdf, doc and others to be read online and even download freely.</p>
                                                    <a href="javascript:void()">View Quran <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="top-info dark-bg">
                                                    <h3><i class="fa fa-heart" aria-hidden="true"></i><span>QURAN</span></h3>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="flipcard">
                                            <div class="front">
                                                <div class="top-info">
                                                    <h3><i class="fa fa-diamond" aria-hidden="true"></i><span>DUA & ADHKAR</span></h3>
                                                </div>
                                                <div class="bottom-info">
                                                    <span class="top-arrow"></span>
                                                    <p>We have a collection of different authentic dua and Adhkar in pdf, doc and other formats to be downloaded freely.</p>
                                                    <a href="javascript:void()">View Dua & Adhkar <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="back">
                                                <div class="bottom-info orange-bg">
                                                    <span class="bottom-arrow"></span>
                                                    <p>We have a collection of different authentic dua and Adhkar in pdf, doc and other formats to be downloaded freely.</p>
                                                    <a href="javascript:void()">View Dua & Adhkar <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="top-info dark-bg">
                                                    <h3><i class="fa fa-diamond" aria-hidden="true"></i><span>DUA & ADHKAR</span></h3>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="flipcard">
                                            <div class="front">
                                                <div class="top-info">
                                                    <h3><i class="fa fa-graduation-cap" aria-hidden="true"></i><span>ARABIC STUDY</span></h3>
                                                </div>
                                                <div class="bottom-info">
                                                    <span class="top-arrow"></span>
                                                    <p>were working on a basic and most interactive way for beginners to learn Arabic and start reciting the holy Quran with ease.</p>
                                                    <a href="javascript:void()">View Arabic Study <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="back">
                                                <div class="bottom-info orange-bg">
                                                    <span class="bottom-arrow"></span>
                                                    <p>were working on a basic and most interactive way for beginners to learn Arabic and start reciting the holy Quran with ease.</p>
                                                    <a href="javascript:void()">View Arabic Study <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="top-info dark-bg">
                                                    <h3><i class="fa fa-graduation-cap" aria-hidden="true"></i><span>ARABIC STUDY</span></h3>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="flipcard">
                                            <div class="front">
                                                <div class="top-info">
                                                    <h3><i class="fa fa-headphones" aria-hidden="true"></i><span>ISLAMIC AUDIO</span></h3>
                                                </div>
                                                <div class="bottom-info">
                                                    <span class="top-arrow"></span>
                                                    <p>We Have in library a collection of different islamic authentic audio's and podcasts to be listened online and downloaded freely.</p>
                                                    <a href="javascript:void()">View Islamic Audio <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="back">
                                                <div class="bottom-info orange-bg">
                                                    <span class="bottom-arrow"></span>
                                                    <p>We Have in library a collection of different islamic authentic audio's and podcasts to be listened online and downloaded freely.</p>
                                                    <a href="javascript:void()">View Islamic Audio <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="top-info dark-bg">
                                                    <h3><i class="fa fa-headphones" aria-hidden="true"></i><span>ISLAMIC AUDIO</span></h3>
                                                </div>                                                
                                            </div>
                                        </div>
                                        <div class="flipcard">
                                            <div class="front">
                                                <div class="top-info">
                                                    <h3><i class="fa fa-film" aria-hidden="true"></i><span>ISLAMIC VIDEOS</span></h3>
                                                </div>
                                                <div class="bottom-info">
                                                    <span class="top-arrow"></span>
                                                    <p>We Have in library a collection of different islamic authentic videos's and series to be viewed online and downloaded freely.</p>
                                                    <a href="javascript:void()">View Islamic Videos <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                            <div class="back">
                                                <div class="bottom-info orange-bg">
                                                    <span class="bottom-arrow"></span>
                                                    <p>We Have in library a collection of different islamic authentic videos's and series to be viewed online and downloaded freely.</p>
                                                    <a href="javascript:void()">View Islamic Videos <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="top-info dark-bg">
                                                    <h3><i class="fa fa-film" aria-hidden="true"></i><span>ISLAMIC VIDEOS</span></h3>
                                                </div>                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="who-we-are">
                                <div class="company-info">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-8 border">
                                                <div class="row">
                                                    <div class="col-sm-11">
                                                        <div class="company-detail">
                                                            <h3 class="section-title" style="color:green;">Who we are</h3>
                                                            <span class="underline left"></span>
                                                            <p style="text-align: justify"> Our Da'wah (call/ preaching) is established upon Kitaab (the book of Allah) and The Sunnah (Authentic traditions of prophet Muhammad) according to the understanding of The Salaf (righteous predecessors of this Ummah). What they considered to be first and foremost in their da'wah is what is first and foremost in our da'wah. It's nothing else but "Tauhiid", singling out Allah, in His Lordship (Rubuubiyyah), His sole right to be worshipped (Uluuhiyyah) and His perfect names and attributes (Asmaa' wa Asswifaat).</p> <p style="text-align: justify"> Kindly contact us immediately if you find any material contradicting the Quran and the Sunnah or if you come across any errors due to our ignorance and lack of Islamic knowledge. </p>
                                                            <p style="text-align: justify">Sunnah kuntiko Media does not have specific types of members based upon allegiance, identity card, tribe, region, sect, or anything else. Rather, we consider everyone who is pleased with Allah as Lord, with Islam as a religion, and with Muhammad صلى الله عليه وسلم as a Prophet, to automatically be a member of the organization and deserving of the organization’s services. <br> <br> We reject hizbiyyah, (partisanship) and disunity, and we call everyone to be part of the saved sect; To adhere to the Qur'an and the Sunnah according to the understanding of the pious predecessors of this Ummah. </p>
                                                            <p style="text-align: justify">This is <b> not-for-profit</b> website and all material contained within this website is published free of charge and in their original format for spreading Islamic knowledge.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="company-image"></div>
                                </div>
                            </section>
                            <div class="fun-stuff">
                                <div class="container">
                                    <div class="facts-counter">
                                        <ul>
                                            <li class="col-sm-3">
                                                <div class="fact-item icon-ebooks">
                                                    <div class="fact-icon">
                                                        <img src="/assets/images/icon-ebooks.png" alt="" />
                                                    </div>
                                                    <span>BOOKS<strong class="fact-counter">45780</strong></span>
                                                </div>
                                            </li>
                                            <li class="col-sm-3">
                                                <div class="fact-item icon-eaudio">
                                                    <div class="fact-icon">
                                                        <img src="/assets/images/icon-eaudio.png" alt="" />
                                                    </div>
                                                    <span>AUDIO<strong class="fact-counter">32450</strong></span>
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
                                                    <span>VIDEOS<strong class="fact-counter">32450</strong></span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <section class="company-info-box">
                                <div class="company-info">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-10 aligncenter">
                                            <div class="col-md-6 border-dark-left">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="company-detail bg-dark margin-left">
                                                            <h3 class="section-title" style="color:red;">DISCLAIMER</h3>
                                                            <span class="underline left"></span>
                                                            <p style="text-align: justify">All books and lectures here within are provided purely for educational and research purposes, please do not abuse this service by using it for commercial purposes. Give credit to the original content creators and only redistribute in its original format. Everything has been collected from free internet and individual sources.</p>
                                                            <p style="text-align: justify">We ask your Du’a for the Ulama, Scholars, Students of Knowledge, Authors and Speakers whose works have been posted on this website, and for us. May Allah سُبْحَانَهُۥ وَتَعَالَىٰ make this website beneficial for all. May Allah سُبْحَانَهُۥ وَتَعَالَىٰ Help us in this challenging task to spread His Deen, as practiced by the Sahabah and Tabe’ein to seek His Pleasure.</p>
                                                            <b><p style="text-align: justify">May Allah سُبْحَانَهُۥ وَتَعَالَىٰ the Most High, grants this project His Acceptance and success and reward our Scholars, Parents, Families, ourselves and Readers in the Hereafter, Allahuma Amin!</p></b> 
                                                            <a href="#." class="btn btn-primary">Donate</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 border-dark">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="company-detail bg-light margin-right">
                                                            <h3 class="section-title" style="color:green;">COPYRIGHT</h3>
                                                            <span class="underline left"></span>
                                                            <p style="text-align: justify">This site may contain images, books, audio and video content delivered to our audience. Some of these maybe copyrighted materials the use of which has not been specifically authorized by the copyright owners.</p>
                                                            <p style="text-align: justify">Sunnah kuntiko Media is making such material available in our effort to advance understanding of Islam and Prophetic teachings among the Muslim brothers and sisters we do not own nor create some of this content.</p>
                                                            <p style="text-align: justify">We do believe this constitutes a "Fair Use" of any such copyrighted material however would you wish to have any of your work removed from our site, please inform us and we will remove it immediately. Provide legal proof of your right to demand removal. If verified, the material will be removed immediately. Feel free to email us at <span><a href="mailto:info@sunnahislammedia.com">info@sunnahislammedia.com</a></span>  to raise your complaint.</p>
                                                            <b><p style="text-align: justify">All credits go to their rightful owners.</p></b>
                                                            <a href="javascript:void()" class="btn btn-dark-gray" style="background-color:green;">Donate</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- Start: Our Partners Section -->
                            <section class="community-testimonial">
                                <div class="container">
                                    <div class="text-center">
                                        <h2 class="section-title" style="color: green;">Words From Islamic Scholars</h2>
                                        <span class="underline center"></span>
                                        <p class="lead" style="color:red;">Great Advices and words of knowldge from Ulamah's of this Ummah.</p>
                                    </div>
                                    <div class="owl-carousel">
                                        <div class="single-testimonial-box">
                                            <div class="top-portion">
                                                <img src="/assets/images/testimonial-image-01.jpg" alt="Testimonial Image" />
                                                <div class="user-comment">
                                                    <div class="arrow-left"></div>
                                                    <blockquote cite="#">
                                                    Be not of those who curse iblis in public yet obey him in private.
                                                    </blockquote>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="bottom-portion">
                                                    <a href="#" class="author">
                                                        Umar Ibn Abdul-Aziz 
                                                    </a>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="single-testimonial-box">
                                            <div class="top-portion">
                                                <img src="/assets/images/testimonial-image-01.jpg" alt="Testimonial Image" />
                                                <div class="user-comment">
                                                    <div class="arrow-left"></div>
                                                    <blockquote cite="#">
                                                        If you sin, you should never give up on repentance. Repent until Shaytan is the one defeated, not you.
                                                    </blockquote>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="bottom-portion">
                                                    <a href="#" class="author">
                                                        ʿAlī b. Abī Ṭālib 
                                                    </a>
                                              
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="single-testimonial-box">
                                            <div class="top-portion">
                                                <img src="/assets/images/testimonial-image-01.jpg" alt="Testimonial Image" />
                                                <div class="user-comment">
                                                    <div class="arrow-left"></div>
                                                    <blockquote cite="#">
                                                        Knowledge is that which benefits, not that which is memorized.
                                                    </blockquote>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="bottom-portion">
                                                    <a href="#" class="author">
                                                        Imam Ash-Shafi’e
                                                    </a>
                                               
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- End: Our Partners Section -->
                            <section class="category-filter new-release">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-3 text-center">
                                            <h2 class="section-title" style="color: green;">Check Out The New Releases</h2>
                                            <span class="underline center"></span>
                                            <p class="lead" id="hadith_intro">All the recently uploaded islamic-books and pdfs in different languages from Sunnah kuntiko Media collection are shown here.</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="category-filter">
                                    <ul class="category-list">
                                        @foreach ($data as $info)
                                        <li class="category-item">
                                            <figure>
                                                <img class="image-size" id="pic_bd1" src="{{url('public/BookImage/'.$info->Book_Image)}}" alt="New Releaase" />
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
                            </section>
                            <!-- Start: Category Filter -->
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Services Section -->
        
        <!-- Start: Social Network -->
        @include('include.social_media_handles')
        <!-- End: Social Network -->
        
@endsection