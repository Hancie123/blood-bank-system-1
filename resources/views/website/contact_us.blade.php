<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    @include('website.layouts.header')
    <!-- Include Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <!-- Include Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

<body>

    @include('website.layouts.loader')

    <!--  HEADER -->

    @include('website.layouts.navs')

    <!--  PAGE HEADING -->

    <section class="page-header" data-stellar-background-ratio="1.2">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">


                    <h3>
                        Contact Us
                    </h3>

                    <p class="page-breadcrumb">
                        <a href="#">Home</a> / Contact
                    </p>


                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->

    <!--  MAIN CONTENT  -->

    <section class="section-content-block">

        <div class="container">

            <div class="row">

                <div class ="col-md-12">
                    <h2 class="contact-title">Contact us</h2>
                </div>

                <div class="col-md-3">

                    <ul class="contact-info">
                        <li>
                            <span class="icon-container"><i class="fa fa-home"></i></span>
                            <address>Maitighar, Kathmandu</address>
                        </li>
                    </ul>

                </div>

                <div class="col-md-3">

                    <ul class="contact-info">

                        <li>
                            <span class="icon-container"><i class="fa fa-phone"></i></span>
                            <address><a href="#">+977 9818536218</a></address>
                        </li>

                    </ul>

                </div>

                <div class="col-md-3">
                    <ul class="contact-info">
                        <li>
                            <span class="icon-container"><i class="fa fa-envelope"></i></span>
                            <address><a href="mailto:">info@bloodbank.com</a></address>
                        </li>
                    </ul>

                </div>

                <div class="col-md-3">

                    <ul class="contact-info">
                        <li>
                            <span class="icon-container"><i class="fa fa-globe"></i></span>
                            <address><a href="#">www.bloodbank.com</a></address>
                        </li>
                    </ul>

                </div>

            </div>

        </div>

    </section>

    <section class="section-content-block section-secondary-bg">

        <div class="container">

            <div class="row">

                <div class="col-sm-6 wow fadeInLeft">

                    <div class="contact-form-block">

                        <h2 class="contact-title">Say hello to us</h2>

                        <form  action="{{url('contact-us')}}" method="post" id="contact-form">
                            @csrf

                            <div class="form-group">
                                <input type="text" class="form-control" id="user_name" name="name"
                                    placeholder="Name" data-msg="Please Write Your Name" />
                                    @error('name')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" id="user_email" name="email"
                                    placeholder="Email" data-msg="Please Write Your Valid Email" />
                                     @error('email')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="email_subject" name="subject"
                                    placeholder="Subject" data-msg="Please Write Your Message Subject" />
                                     @error('subject')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" rows="5" name="message" id="email_message" placeholder="Message"
                                    data-msg="Please Write Your Message"></textarea>
                                     @error('message')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-theme">Send Now</button>
                            </div>

                        </form>

                    </div> <!-- end .contact-form-block  -->

                </div> <!--  end col-sm-6  -->

                <div class="col-sm-6 wow fadeInRight">

                    <h2 class="contact-title">Our Location</h2>


                    <!-- Map Container -->
                    <div class="section-google-map-block wow fadeInUp">
                        <div id="map_canvas" style="height: 400px; width: 100%;"></div>
                    </div>


                </div> <!--  end col-sm-6  -->

            </div> <!-- end row  -->

        </div> <!--  end .container -->

    </section> <!-- end .section-content-block  -->

    <!-- START FOOTER  -->

    @include('website.layouts.footer')
    <script>
        var map = L.map('map_canvas').setView([27.7172, 85.3240], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([27.7172, 85.3240]).addTo(map)
            .bindPopup('Kathmandu, Nepal')
            .openPopup();
    </script>
</body>

</html>
