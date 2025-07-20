<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
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
            <div class="content pb-0">

                <!-- Page Header -->
                <div class="d-flex align-items-sm-center justify-content-between flex-wrap gap-2 mb-4">
                    <div>
                        <h4 class="fw-bold mb-0">Admin Dashboard </h4>
                    </div>

                </div>
                <!-- End Page Header -->

                <!-- start row -->
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="position-relative border card rounded-2 shadow-sm">
                            <img src="{{ url('assets/admin/img/banner/bg-01.svg') }}" alt="img"
                                class="position-absolute start-0 top-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-2 justify-content-between">
                                    <span class="avatar bg-primary rounded-circle"><i
                                            class="ti ti-calendar-heart fs-24"></i></span>
                                    <div class="text-end">

                                        <p class="fs-13 mb-0">in last 7 Days </p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-1">Blood Donors</p>
                                        <h3 class="fw-bold mb-0">{{ $bloodDonorCount }}</h3>
                                    </div>
                                    <div>
                                        <div id="s-col" class="chart-set"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-xl-4 col-md-6">
                        <div class="position-relative border card rounded-2 shadow-sm">
                            <img src="{{ url('assets/admin/img/banner/bg-02.svg') }}" alt="img"
                                class="position-absolute start-0 top-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-2 justify-content-between">
                                    <span class="avatar bg-danger rounded-circle"><i
                                            class="ti ti-calendar-heart fs-24"></i></span>
                                    <div class="text-end">

                                        <p class="fs-13 mb-0">in last 7 Days </p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-1">Request Bloods</p>
                                        <h3 class="fw-bold mb-0">{{ $requestBloodCount }}</h3>
                                    </div>
                                    <div>
                                        <div id="s-col-2" class="chart-set"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->


                    <div class="col-xl-4 col-md-6">
                        <div class="position-relative border card rounded-2 shadow-sm">
                            <img src="{{ url('assets/admin/img/banner/bg-03.svg') }}" alt="img"
                                class="position-absolute start-0 top-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-2 justify-content-between">
                                    <span class="avatar bg-info rounded-circle"><i
                                            class="ti ti-calendar-heart fs-24"></i></span>
                                    <div class="text-end">

                                        <p class="fs-13 mb-0">in last 7 Days </p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <p class="mb-1">Contact Us</p>
                                        <h3 class="fw-bold mb-0">{{ $countUsCount }}</h3>
                                    </div>
                                    <div>
                                        <div id="s-col-3" class="chart-set"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                </div>
                <!-- end row -->

                <!-- row start -->
                <div class="row">
                    <!-- col start -->
                    <div class="col-xl-8">

                        <!-- card start -->
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Blood Donors Statistics</h5>

                            </div>
                            <div class="card-body pb-0">

                                <div class="chart-set" id="s-col-19"></div>
                            </div>
                        </div>
                        <!-- card end -->



                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-4">
                        <div class="card shadow-sm">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0 text-truncate">Calendar</h5>

                            </div>
                            <div class="card-body">
                                <div class="datepic mb-1"></div>
                            </div>
                        </div>
                    </div>
                    <!-- col end -->
                </div>
                <!-- end row -->


                <div class="row">
                    <!-- col start -->
                    <div class="col-xl-6">

                        <!-- card start -->
                        <div class="card shadow-sm flex-fill w-100">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <h5 class="fw-bold mb-0">Blood Request Statistics</h5>

                            </div>
                            <div class="card-body pb-0">

                                <div class="chart-set" id="s-col-720"></div>
                            </div>
                        </div>
                        <!-- card end -->



                    </div>
                    <!-- col end -->

                    <!-- col start -->
                    <div class="col-xl-6">

                        <!-- card start -->
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Statistics Base On Blood Type</div>
                            </div>
                            <div class="card-body chart-set">
                                <div class="h-250" id="flotPie2"></div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                        <!-- card end -->



                    </div>
                    <!-- col end -->

                </div>




            </div>
            <!-- End Content -->


        </div>

        <!-- ========================
        End Page Content
    ========================= -->




    </div>
    <!-- End Main Wrapper -->

    @include('admin.layouts.footer')
    @include('admin.dashboard.dashboard_js')


    <script src="{{ url('assets/admin/js/jquery.flot.js') }}"></script>
    <script src="{{ url('assets/admin/js/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ url('assets/admin/js/jquery.flot.pie.js') }}"></script>

    <script>
        var piedata = {!! json_encode($piedata) !!};

        $.plot('#flotPie2', piedata, {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    innerRadius: 0.5,
                    label: {
                        show: true,
                        radius: 2 / 3,
                        formatter: labelFormatter,
                        threshold: 0.1
                    }
                }
            },
            grid: {
                hoverable: false,
                clickable: true
            }
        });

        function labelFormatter(label, series) {
            return '<div style="font-size:8pt; text-align:center; padding:2px; color:white;">' +
                label + '<br/>' + Math.round(series.percent) + '%</div>';
        }
    </script>


</body>

</html>
