<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Blood Bank</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    @include('website.layouts.header')

<body>


    @include('website.layouts.loader')

    @include('website.layouts.navs')

    <!--  HOME SLIDER BLOCK  -->

    <div class="slider-wrap">
        <div id="slider_1" class="owl-carousel" data-nav="true" data-dots="false" data-autoplay="true"
            data-autoplaytimeout="17000">

            <div class="slider_item_container" data-bg_img="{{ url('assets/website/img/home_1_slider_1.webp') }}"
                data-bg_color="#555555" data-bg_opacity="0.0">
                <div class="item">
                    <div class="slider-content">
                        <div class="container text-left">
                            <div class="row">
                                <div class="slider-bg">
                                    <div class="col-sm-12 wow zoomInUp" data-wow-duration="1s">

                                        <h3>Donate blood,save life !</h3>
                                        <h2>
                                            YOUR BLOOD
                                            <br>
                                            CAN BRING SMILE
                                            <br />
                                            IN OTHER PERSON FACE
                                        </h2>
                                        <a href="{{ url('blood-donor') }}" class="btn btn-theme margin-top-24">Donate
                                            Now</a>
                                        <a href="#" class="btn btn-theme btn-theme-invert margin-top-24">CALL :
                                            +977 9818536218</a>
                                    </div>
                                </div> <!-- end .col-sm-12  -->
                            </div> <!-- end .row  -->
                        </div><!-- end .container -->
                    </div> <!--  end .slider-content -->
                </div> <!-- end .item  -->
            </div> <!-- end .slider_item_container  -->

            <div class="slider_item_container" data-bg_img="{{ url('assets/website/img/home_1_slider_1.webp') }}"
                data-bg_color="#555555" data-bg_opacity="0.0">
                <div class="item">
                    <div class="slider-content">
                        <div class="container text-left">
                            <div class="row">
                                <div class="slider-bg" data-animation-in="zoomInUp" data-animation-out="zoomInDown">
                                    <div class="col-sm-12 wow fadeInDown" data-wow-duration="1s">

                                        <h3>Donate blood,save life !</h3>
                                        <h2>
                                            DONATE BLOOD
                                            <br>
                                            AND INSPIRES OTHERS.
                                        </h2>
                                        <a href="#" class="btn btn-theme margin-top-24">Donate Now</a>
                                    </div>
                                </div> <!-- end .col-sm-12  -->
                            </div> <!-- end .row  -->
                        </div><!-- end .container -->
                    </div> <!--  end .slider-content -->
                </div> <!-- end .item  -->
            </div> <!-- end .slider_item_container  -->

        </div> <!-- end .slider_1  -->
    </div> <!-- end .slider-wrap.  -->

    <!--  FEATURED ABOUT US SECTION-->

    <section class="section-content-block">

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

                    <div class="about-us-container theme-custom-box-shadow">

                        <div class="row section-heading-wrapper margin-bottom-11">

                            <div class="col-lg-12 col-md-12 col-sm-12 text-left no-img-separator">
                                <h2><strong>Who We Are?</strong></h2>
                                <span class="heading-separator heading-separator-horizontal"></span>
                            </div> <!-- end .col-sm-10  -->

                        </div>

                        <div class="about-details">

                            <p>Blood Bank System is the platform for blood donors and needers in the changing
                                health care system.</p>


                            <ul class="custom-bullet-list">
                                <li>Specialist blood donors and clinical supervision.</li>
                                <li>Increasing communication with our members.</li>
                                <li>High quality assessment, diagnosis and treatment.</li>
                                <li>Examine critically to ensure alignment.</li>
                                <li>The extra care of a multi-disciplinary team.</li>
                            </ul>

                        </div> <!--  end .about-details -->

                    </div>

                </div> <!--  end .col-lg-6 col-md-6 col-sm-12 col-xs-12 -->


                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

                    <figure class="about-img theme-custom-box-shadow">
                        <a class="venobox wow bounceIn" data-vbtype="video" data-autoplay="true"
                            href="https://www.youtube.com/watch?v=nrJtHemSPW4"><i class="fa fa-play"></i></a>
                        <img src="{{ url('assets/website/img/about_feat_bg.webp') }}" alt="about" />
                    </figure> <!-- end .cause-img  -->

                </div> <!--  end .col-lg-6 col-md-6 col-sm-12 col-xs-12  -->

            </div> <!--  end .row  -->
        </div>

    </section> <!--  end .section-about-us -->

    <!-- SECTION TESTIMONIAL   -->

    <section class="section-content-block section-custom-bg"
        data-bg_img='{{ url('assets/website/img/testimony_feat_bg.webp') }}' data-bg_size='cover'
        data-bg_position='top center' data-bg_opacity="0">

        <div class="container margin-top-80">
            <div class="row section-heading-wrapper-alt">

                <div class="col-md-12 col-sm-12 text-center no-img-separator">
                    <h4>Awesome Words From Members</h4>
                    <span class="heading-separator heading-separator-horizontal"></span>
                    <h2 class="extra-large">JOIN WITH US AND SAVE LIFE</h2>

                </div> <!-- end .col-sm-10  -->

            </div>
        </div>

        <div
            class="container theme-custom-box-shadow  section-pure-white-bg margin-top-48 margin-bottom-48 wow fadeInUp">

            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12">

                    <div class="testimonial-container owl-carousel text-left" data-items  ="1">

                        <div class="col-md-12 col-sm-12">

                            <div class="testimony-layout-1">
                                <h3 class="people-quote">Donor Opinion</h3>
                                <p class="testimony-text">
                                    I donate blood regularly because I know it can help save lives. It’s a simple act
                                    for me, but it can mean everything to someone in need. Knowing I can make that kind
                                    of difference is a truly rewarding feeling.
                                </p>


                                <h6>Brandon Munson</h6>
                                <span>CTO, Fulcrum Design, USA</span>

                            </div> <!-- end .testimony-layout-1  -->

                        </div> <!--  end col-md-10  -->

                        <div class="col-md-12 col-sm-12">

                            <div class="testimony-layout-1">
                                <h3 class="people-quote">Donor Opinion</h3>
                                <p class="testimony-text">
                                    I have been a donor since high school. Although I have not been a donor every year,
                                    I always want to give to the human race. I love to help others! Moreover it gives a
                                    real peace in my mind.
                                </p>


                                <h6>Munson Brandon</h6>
                                <span>CTO, Fulcrum Design, USA</span>

                            </div> <!-- end .testimony-layout-1  -->

                        </div> <!--  end col-md-10  -->

                        <div class="col-md-12 col-sm-12">

                            <div class="testimony-layout-1">
                                <h3 class="people-quote">Recipient Opinion</h3>
                                <p class="testimony-text">
                                    I wish I could tell you my donor how grateful I am for your selfless act.You gave me
                                    new life. We may be coworkers or schoolmates or just two in the same community.I'm
                                    very grateful to you.
                                </p>


                                <h6>Logan Munson</h6>
                                <span>CTO, Fulcrum Design, USA</span>

                            </div> <!-- end .testimony-layout-1  -->

                        </div> <!--  end col-md-10  -->

                    </div> <!--  end .row  -->
                </div>

                <div class="col-lg-6 hidden-md hidden-xs hidden-sm no-padding">
                    <figure>
                        <img src="{{ url('assets/website/img/testimony_feat_img.webp') }}" alt=""
                            class="db" />
                    </figure>
                </div>

            </div>



        </div> <!-- end .container  -->

    </section>




    <!--  SECTION APPOINTMENT BOX -->

    <section class="section-content-block section-custom-bg section-custom-bg-extra-padding"
        data-bg_img='{{ url('assets/website/img/appointment_female_bg.webp') }}' data-bg_color='#000000'
        data-bg_opacity='0.1'>

        <div class="container">
            <div class="custom-empty-space" data-height="160px" data-class="col-sm-hidden"></div>
        </div>

    </section>

    <!--  SECTION APPOINTMENT   -->

    <section class="section-content-block section-secondary-bg">

        <div class="container">

            <div class="row">

                <div class="col-lg-6 col-md-6">

                    <div class="row section-heading-wrapper">

                        <div class="col-md-12 col-sm-12 text-left no-img-separator">
                            <h4>Good To Know</h4>
                            <span class="heading-separator heading-separator-horizontal"></span>
                            <h2>Helpful Information
                            </h2>

                        </div> <!-- end .col-sm-10  -->

                    </div>

                    <div class="about-details">

                        <ul class="custom-bullet-list">
                            <li>Maintain a healthy iron level by eating iron rich foods.</li>
                            <li>Drink an extra 16 oz. of water prior to your donation.</li>
                            <li>Avoid alcohol consumption before your blood donation.</li>
                            <li>Remember to bring the donor card or national ID/Passport.</li>
                            <li>Finally, Try to get a good night sound sleep after donation.</li>
                        </ul>

                    </div> <!--  end .about-details -->

                </div> <!--  end col-lg-6  -->




            </div> <!--  end .row  -->



        </div> <!--  end .container -->

    </section> <!--  end .appointment-section  -->





    <!-- HIGHLIGHT CTA  -->

    <section class="padding-bottom-100 padding-top-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="cta-section-1 section-secondary-bg text-center theme-custom-box-shadow">
                        <h2 class="text-capitalize">Become A Part Of Great Work Today</h2>
                        <p>
                            You can give blood at any of our blood donation venues all over the world.
                            <br />
                            We have total sixty thousands donor centers and visit thousands of other venues on various
                            occasions.
                        </p>
                        <p class=" margin-top-24 wow bounceIn" href="#">JOIN WITH US</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('website.layouts.footer')
</body>

</html>
