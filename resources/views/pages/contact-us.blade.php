@extends('layouts.default')
@section('content')

	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/banners/contact-us.jpg); background-position: center;">
        <div class="auto-container">
            <div class="content">
                <h1>contact <span>Us</span></h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>contact us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Page Section -->
    <section class="contact-page-section">
        <div class="auto-container">
            <div class="inner-container">
                <h2>Contact our support guys or make appointment <br> with <span>our consultant</span></h2>
                <div class="row clearfix">

                    <!-- Info Column -->
                    <div class="info-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="text">Please contact us using the information below. For additional
                                information on our management consulting services, please visit the appropriate page
                                on our site.</div>
                            <ul class="list-style-two">
                                <li><span class="icon fa fa-building"></span> 131 Dartmouth Street <br> Boston,
                                    Massachusetts 02116 <br> United States</li>
                                <li><span class="icon fa fa-fax"></span> +1 617 572 2000</li>
                                <li><span class="icon fa fa-envelope-o"></span>support@pixer.com</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">

                            <!--Contact Form-->
                            <div class="contact-form">
                                <form method="post" action="sendemail.php" id="contact-form">

                                    <div class="form-group">
                                        <input type="text" name="firstname" value="" placeholder="Full name"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="email" value="" placeholder="Email" required>
                                    </div>

                                    <div class="form-group">
                                        <select class="custom-select-box">
                                            <option>Select topic</option>
                                            <option>Topic One</option>
                                            <option>Topic Two</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <textarea name="message" placeholder="write.."></textarea>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="theme-btn btn-style-one">Getting start
                                            now</button>
                                    </div>

                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Page Section -->

    <!-- Map Section -->
    <div class="map-section">
        <!--Map Outer-->
        <div class="map-outer">
            <!--Map Canvas-->
            <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap"
                data-hue="#ffc400" data-title="Envato" data-icon-path="images/icons/map-marker.png"
                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
            </div>
        </div>
    </div>
    <!-- End Map Section -->

    <!-- Contact Info Section -->
    <section class="contact-info-section" style="background-image:url(images/background/10.jpg)">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="column col-lg-4 col-md-6 col-sm-12">
                    <h4>United Kingdom</h4>
                    <ul class="list-style-three">
                        <li><span class="icon flaticon-map-1"></span> 49488 Avenida Obregon, <br> La Quinta, CA
                            92253</li>
                        <li><span class="icon flaticon-phone-receiver"></span> +1-(281)-813 926 <br> +1-(281)-813
                            612</li>
                        <li><span class="icon flaticon-e-mail-envelope"></span>support@pixer.com.uk</li>
                    </ul>
                </div>
                <div class="column col-lg-4 col-md-6 col-sm-12">
                    <h4>Australia</h4>
                    <ul class="list-style-three">
                        <li><span class="icon flaticon-map-1"></span> 13/1 Dixon Street, Sydney <br> NSW 2000</li>
                        <li><span class="icon flaticon-phone-receiver"></span> +1-(281)-813 926 <br> +1-(281)-813
                            612</li>
                        <li><span class="icon flaticon-e-mail-envelope"></span>support@pixer.com.uk</li>
                    </ul>
                </div>
                <div class="column col-lg-4 col-md-6 col-sm-12">
                    <h4>Netherlands</h4>
                    <ul class="list-style-three">
                        <li><span class="icon flaticon-map-1"></span> Nieuwe Leliestraat 27-HS <br> 101J Amsterdam
                        </li>
                        <li><span class="icon flaticon-phone-receiver"></span> +1-(281)-813 926 <br> +1-(281)-813
                            612</li>
                        <li><span class="icon flaticon-e-mail-envelope"></span>support@pixer.com.uk</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
    <!-- End Contact Info Section -->

@stop
