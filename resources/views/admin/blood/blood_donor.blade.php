<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Blood Donors</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('admin.layouts.header')
</head>

<body>


    <!-- Start Main Wrapper -->
    <div class="main-wrapper">




        @include('admin.layouts.top_bar')

        <!-- Search Modal -->
        <div class="modal fade" id="searchModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content bg-transparent">
                    <div class="card shadow-none mb-0">
                        <div class="px-3 py-2 d-flex flex-row align-items-center" id="search-top">
                            <i class="ti ti-search fs-22"></i>
                            <input type="search" class="form-control border-0" placeholder="Search">
                            <button type="button" class="btn p-0" data-bs-dismiss="modal" aria-label="Close"><i
                                    class="ti ti-x fs-22"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.layouts.sidebar')

        <!-- ========================
        Start Page Content
    ========================= -->

        <div class="page-wrapper">

            <!-- Start Content -->
            <div class="content">

                <!-- Start Page Header -->
                <div
                    class="d-flex align-items-sm-center flex-sm-row flex-column gap-2 pb-3 mb-3 border-1 border-bottom">
                    <div class="flex-grow-1">
                        <h4 class="fw-bold mb-0">Blood Donors List <span
                                class="badge badge-soft-primary fw-medium border py-1 px-2 border-primary fs-13 ms-1">Total
                                Blood Donors : {{ $countBloodDonor }}</span></h4>
                    </div>

                </div>
                <!-- End Page Header -->

                <!--  Start Filter -->
                <div class=" d-flex align-items-center justify-content-between flex-wrap">
                    <div>
                        <div class="search-set mb-3">
                            <div class="d-flex align-items-center flex-wrap gap-2">
                                <div class="table-search d-flex align-items-center mb-0">
                                    <div class="search-input">
                                        <a href="javascript:void(0);" class="btn-searchset"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!--  End Filter -->

                <!--  Start Table -->
                <div class="table-responsive">
                    <table class="table datatable table-nowrap" id="datatable ">
                        <thead class="">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile No</th>
                                <th>DOB</th>
                                <th>Gender</th>
                                <th>Blood Group</th>
                                <th>State</th>
                                <th>City</th>
                                <th>Current Location</th>
                                <th>Is Blood Donated</th>



                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($bloodDonors as $data)
                                <tr>
                                    <td>
                                        {{ $data->id }}
                                    </td>
                                    <td>{{ $data->name }}</td>
                                    <td>
                                        {{ $data->email }}
                                    </td>
                                    <td>{{ $data->mobile_no }}</td>
                                    <td>
                                        {{ $data->dob }}
                                    </td>
                                    <td>
                                        {{ $data->gender }}
                                    </td>
                                    <td>
                                        {{ $data->blood_group }}
                                    </td>

                                    <td>
                                        {{ $data->state->name ?? null }}
                                    </td>

                                    <td>
                                        {{ $data->city->name ?? null }}
                                    </td>
                                    <td>
                                        {{ $data->current_location }}
                                    </td>

                                    <td>
                                        <a href="{{ route('blood.status.toggle', $data->id) }}"
                                            class="btn btn-sm {{ $data->is_blood_donated === 'true' ? 'btn-success' : 'btn-secondary' }}"
                                            onclick="return confirm('Are you sure you want to change the donation status?')">
                                            {{ $data->is_blood_donated === 'true' ? 'Donated' : 'Not Donated' }}
                                        </a>
                                    </td>




                                </tr>
                            @empty
                            @endforelse

                        </tbody>
                    </table>
                </div>
                <!--  End Table -->
            </div>
        </div>
        <!-- End Content -->




    </div>
    <!-- End Main Wrapper -->

    @include('admin.layouts.footer')


</body>

</html>
