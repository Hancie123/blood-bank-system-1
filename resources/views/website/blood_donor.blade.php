<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Register Blood Donor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    @include('website.layouts.header')

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
                        Register Blood Donor
                    </h3>

                    <p class="page-breadcrumb">
                        <a href="#">Home</a> / Blood Donor
                    </p>


                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->

    </section> <!-- end .page-header  -->

    <!--  MAIN CONTENT  -->



    <section class="section-content-block section-secondary-bg">

        <div class="container">

            <div class="row">

                <div class="col-sm-12">



                    <h2 class="contact-title text-center">Register for blood donation</h2>

                    <form action="{{ url('blood-donor') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" required/>
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email Address" required/>
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="number" class="form-control" name="mobile_no" placeholder="Mobile No" required/>
                            @error('mobile_no')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="form-group">
                            <input type="date" class="form-control" name="dob" placeholder="DOB" required/>
                            @error('dob')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <select class="form-control form-select" name="gender" required>
                                <option value="">-- Select Gender --</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>

                            </select>
                            @error('gender')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <select name="blood_group" class="form-control form-select" required>
                                <option value="">-- Select Blood Group --</option>
                                <option value="A+">A+</option>
                                <option value="A-">A−</option>
                                <option value="B+">B+</option>
                                <option value="B-">B−</option>
                                <option value="O+">O+</option>
                                <option value="O-">O−</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB−</option>
                            </select>
                            @error('blood_group')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>






                        <div class="form-group">
                            <select name="state_id" class="form-control form-select" required>
                                <option value="">-- Select State --</option>
                                @foreach ($states as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach


                            </select>
                            @error('state_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <select name="city_id" class="form-control form-select" required>
                                <option value="">-- Select City --</option>
                                @foreach ($cities as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                @endforeach
                            </select>
                            @error('city_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="form-group">
                            <input type="text" class="form-control" name="current_location"
                                placeholder="Current Location" required/>
                            @error('current_location')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-danger">Register Now</button>


                    </form>



                </div> <!--  end col-sm-6  -->



            </div> <!-- end row  -->

        </div> <!--  end .container -->

    </section> <!-- end .section-content-block  -->

    <!-- START FOOTER  -->

    @include('website.layouts.footer')

</body>

</html>
