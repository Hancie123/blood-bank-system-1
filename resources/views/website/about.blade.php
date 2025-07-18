<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>About Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    @include('website.layouts.header')

<body>

    @include('website.layouts.loader')

    @include('website.layouts.navs')

    <!--  PAGE HEADING -->

    <section class="page-header">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 text-center">

                    <h3>
                        About Us
                    </h3>

                    <p class="page-breadcrumb">
                        <a href="#">Home</a> / About Us
                    </p>


                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->





    <!--  COUNTER SECTION 02  -->

    <section class="section-content-block section-secondary-bg">

        <div class="container wow fadeInUp">

            <div class="row section-heading-wrapper">

                <div class="col-md-12 col-sm-12 text-center">
                    <h2>OUR ACHIEVEMENTS</h2>
                    <h4>We have been working since 1973 with a prestigious vision to helping patient to provide blood.
                    </h4>
                </div> <!-- end .col-sm-12  -->

            </div>

            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <div class="counter-block-1 text-left">

                        <i class="fa fa-heartbeat icon"></i>
                        <span class="counter">2578</span>
                        <h4 class="text-capitalize">Success Smile</h4>

                    </div>

                </div> <!--  end .col-lg-3  -->

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <div class="counter-block-1 text-left">

                        <i class="fa fa-stethoscope icon"></i>
                        <span class="counter">3235</span>
                        <h4 class="text-capitalize">Happy Donors</h4>

                    </div>

                </div> <!--  end .col-lg-3  -->

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <div class="counter-block-1 text-left">

                        <i class="fa fa-users icon"></i>
                        <span class="counter">3568</span>
                        <h4 class="text-capitalize">Happy Recipient</h4>

                    </div>

                </div> <!--  end .col-lg-3  -->

                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">

                    <div class="counter-block-1 text-left">

                        <i class="fa fa-building icon"></i>
                        <span class="counter">5632</span>
                        <h4 class="text-capitalize">Total Donors</h4>

                    </div>

                </div> <!--  end .col-lg-3  -->


            </div> <!-- end row  -->

        </div> <!--  end .container  -->

    </section>

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
                                    I proudly donate blood on a regular basis because it gives others something they
                                    desperately need to survive. Just knowing I can make a difference in someone else's
                                    life makes me feel great!
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

    <!-- HIGHLIGHT CTA  -->

    <section class="cta-section-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2>We are helping people from 40 years</h2>
                    <p>
                        You can give blood at any of our blood donation venues all over the world. We have total sixty
                        thousands donor centers and visit thousands of other venues on various occasions.
                    </p>
                </div> <!--  end .col-md-8  -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a class="btn btn-cta-1 wow bounceIn" href="{{ url('request-blood') }}">Request Blood</a>
                </div> <!--  end .col-md-4  -->
            </div> <!--  end .row  -->
        </div>
    </section>

    <!-- START FOOTER  -->

    @include('website.layouts.footer')
</body>

</html>
