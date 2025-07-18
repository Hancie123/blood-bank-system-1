<!--  HEADER -->

<header class="main-header clearfix" data-sticky_header="true">

    <div class="top-bar clearfix">

        <div class="container">

            <div class="row">

                <div class="col-md-8 col-sm-12">

                    <p>
                        <span><i class="fa fa-building-o"></i> <strong>Contact: </strong> Maitighar, Kathmandu</span>
                        <span>&nbsp;<i class="fa fa-phone"></i> <strong>Call Us:</strong> +977 9818536218</span>
                    </p>

                </div>

                <div class="col-md-4col-sm-12">
                    <div class="top-bar-social">
                        <a href="#"><i class="fa fa-facebook rounded-box"></i></a>
                        <a href="#"><i class="fa fa-twitter rounded-box"></i></a>
                        <a href="#"><i class="fa fa-google-plus rounded-box"></i></a>
                        <a href="#"><i class="fa fa-instagram rounded-box"></i></a>
                        <a href="#"><i class="fa fa-youtube rounded-box"></i></a>
                    </div>
                </div>

            </div>

        </div> <!--  end .container -->

    </div> <!--  end .top-bar  -->

    <section class="header-wrapper navgiation-wrapper">

        <div class="navbar navbar-default">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo" href="{{ url('/') }}"><img alt=""
                            src="{{ url('assets/website/img/logo.png') }}" style="width: 50px"></a>
                </div>

                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('blood-donor') }}">Blood Donor</a></li>
                        <li><a href="{{ url('request-blood') }}">Request Donor</a></li>
                        <li><a href="{{ url('search-blood') }}">Search Blood</a></li>
                        <li><a href="{{ url('about-us') }}">About Us</a></li>
                        <li><a href="{{ url('contact-us') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

</header> <!-- end main-header  -->
