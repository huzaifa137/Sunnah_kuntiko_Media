@extends('layouts.contact_header_and_footer')
@section('Book_Information')
    {{-- @include('sweetalert::alert') --}}

    <!-- Start: Contact Us Section -->
    <div id="content" class="site-content">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="contact-main">
                    <div class="contact-us">
                        <div class="container">
                            <div class="contact-location">
                                <div class="flipcard">
                                    <div class="front">
                                        <div class="top-info">
                                            <span><i class="fa fa-map-marker" aria-hidden="true"></i> Office Address</span>
                                        </div>
                                        <div class="bottom-info">
                                            <span class="top-arrow"></span>
                                            <ul>
                                                <li>Kisenyi two, Mengo </li>
                                                <li>Kampala, Uganda</li>
                                                <li>PO Box 00100</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="bottom-info orange-bg">
                                            <span class="bottom-arrow"></span>
                                            <ul>
                                                <li>Kisenyi two, Mengo </li>
                                                <li>Kampala, Uganda</li>
                                                <li>PO Box 00100</li>
                                            </ul>
                                        </div>
                                        <div class="top-info dark-bg">
                                            <span><i class="fa fa-map-marker" aria-hidden="true"></i> Office Address</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flipcard">
                                    <div class="front">
                                        <div class="top-info">
                                            <span><i class="fa fa-fax" aria-hidden="true"></i> Phone and Fax</span>
                                        </div>
                                        <div class="bottom-info">
                                            <span class="top-arrow"></span>
                                            <ul>
                                                <li><a href="tel:+256704261823">Local: +256773539723</a></li>
                                                <li><a href="tel:+256702082209">Local: +256702271122</a></li>
                                                <li><a href="tel:+256704261823">Whatsapp:+256704261823</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="bottom-info orange-bg">
                                            <span class="bottom-arrow"></span>
                                            <ul>
                                                <li><a href="tel:+256704261823">Local: +256773539723</a></li>
                                                <li><a href="tel:+256702082209">Local: +256702271122</a></li>
                                                <li><a href="tel:+256704261823">Whatsapp:+256704261823</a></li>
                                            </ul>
                                        </div>
                                        <div class="top-info dark-bg">
                                            <span><i class="fa fa-fax" aria-hidden="true"></i> Phone and Fax</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="flipcard">
                                    <div class="front">
                                        <div class="top-info">
                                            <span><i class="fa fa-envelope" aria-hidden="true"></i> Email Address</span>
                                        </div>
                                        <div class="bottom-info">
                                            <span class="top-arrow"></span>
                                            <ul>
                                                <li>Abdulfatahmatovu@gmail.com</li>
                                                <li>info@sunnahislammedia.com</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="back">
                                        <div class="bottom-info orange-bg">
                                            <span class="bottom-arrow"></span>
                                            <ul>
                                                <li><a
                                                        href="mailto:Abdulfatahmatovu@gmail.com">Abdulfatahmatovu@gmail.com</a>
                                                </li>
                                                <li><a href="mailto:info@sunnahislammedia.com">info@sunnahislammedia.com</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="top-info dark-bg">
                                            <span><i class="fa fa-envelope" aria-hidden="true"></i> Email Address</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                <div class="contact-area">
                                    <div class="container">
                                        <div class="col-md-10 col-md-offset-1 border-gray-left">

                                            <div class="col-md-12 border-gray-right">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="contact-form bg-light ">
                                                            <h2 style="color:green;">Send us a message</h2>
                                                            <span class="underline left"></span>
                                                            <div class="contact-fields">
                                                                <form action="{{ route('send-message') }}" method="post">
                                                                    @csrf
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-sm-6">
                                                                            <div class="form-group">
                                                                                <input class="form-control" type="text"
                                                                                    placeholder="First Name"
                                                                                    name="firstname" id="first-name"
                                                                                    size="30" value=""
                                                                                    aria-required="true" required />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6">
                                                                            <div class="form-group">
                                                                                <input class="form-control" type="text"
                                                                                    placeholder="Last Name" name="lastname"
                                                                                    id="last-name" size="30"
                                                                                    value="" aria-required="true"
                                                                                    required />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6">
                                                                            <div class="form-group">
                                                                                <input class="form-control" type="email"
                                                                                    pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                                                                                    placeholder="Email" name="email"
                                                                                    size="30" value=""
                                                                                    aria-required="true" required />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6">
                                                                            <div class="form-group">
                                                                                <input class="form-control" type="text"
                                                                                    placeholder="Phone Number"
                                                                                    name="phonenumber" id="phone"
                                                                                    size="30" value=""
                                                                                    aria-required="true" required />
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <textarea class="form-control" placeholder="Your message" name="message" aria-required="true" required></textarea>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group form-submit">
                                                                                <input class="btn btn-default" style="background-color:green;"
                                                                                    type="submit" value="Send Message" onclick="return confirm('Please confirm you want to send message !')" />
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        var msg = '{{ Session::get('success') }}';
        var verify = '{{ Session::has('success') }}';

        if (verify) {
            alert(msg);
        }

    </script>

    <!-- End: Contact Us Section -->

    <!-- Start: Social Network -->
    @include('include.social_media_handles')
    <!-- End: Social Network -->
@endsection
