<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <title>Search Blood Donor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    @include('website.layouts.header')

<body>

    @include('website.layouts.loader')

    <!--  HEADER -->

    @include('website.layouts.navs')

    <!--  PAGE HEADING -->


    <section class="section-content-block section-secondary-bg">

        <div class="container">

            <div class="card text-center mx-auto">

                <div class="card-body">
                    <h2 class="contact-title text-center">Search Blood Donors</h2>

                    <form action="{{ url('search-blood') }}" method="get">
                        @csrf

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
                        <button type="submit" class="btn btn-danger">Search Now</button>


                    </form>
                </div> <!--  end col-sm-6  -->
            </div> <!-- end row  -->

            <br>

            @if ($bloodDonors->count())
                @foreach ($bloodDonors as $data)
                    <div class="card shadow-sm mb-3">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">Blood Donor Details</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <strong>Full Name:</strong> {{ $data->name ?? 'N/A' }}
                                </div>
                                <div class="col-md-6">
                                    <strong>Blood Group:</strong> <span
                                        class="badge bg-danger">{{ $data->blood_group ?? 'N/A' }}</span>
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <strong>Age:</strong>
                                    {{ \Carbon\Carbon::parse($data->dob)->age ?? 'N/A' }}
                                </div>
                                <div class="col-md-6">
                                    <strong>Gender:</strong> {{ ucfirst($data->gender ?? 'N/A') }}
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <strong>Mobile No:</strong> {{ $data->mobile_no ?? 'N/A' }}
                                </div>
                                <div class="col-md-6">
                                    <strong>Email:</strong> {{ $data->email ?? 'N/A' }}
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <strong>Current Location:</strong> {{ $data->current_location ?? 'N/A' }}
                                </div>
                            </div>
                        </div>
                    </div><br>
                @endforeach
            @else
                <div class="alert alert-warning">
                    No blood donors found for the selected criteria.
                </div>
            @endif


        </div> <!--  end .container -->

    </section> <!-- end .section-content-block  -->

    <!-- START FOOTER  -->

    @include('website.layouts.footer')

</body>

</html>
