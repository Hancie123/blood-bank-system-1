<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Profile Settings</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dreams Technologies">

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
            <div class="content" id="profilePage">

                <!-- Page Header -->
                <div class="mb-3 border-bottom pb-3">
                    <h4 class="fw-bold mb-0">Settings</h4>
                </div>
                <!-- End Page Header -->

                <div class="card">
                    <div class="card-body p-0">
                        <div class="settings-wrapper d-flex">

                            @include('admin.settings.components.setting_sitenavs')




                            <div class="card flex-fill mb-0 border-0 bg-light-500 shadow-none">
                                <div class="card-header border-bottom px-0 mx-3">
                                    <h5 class="fw-bold">Basic Information</h5>
                                </div>
                                <div class="card-body px-0 mx-3">
                                    <form
                                        action="">

                                        <!-- start row -->
                                        <div class="row border-bottom mb-3">
                                            <div class="col-lg-12">

                                                <!-- start row -->
                                                <div class="row align-items-center mb-3">
                                                    <div class="col-lg-2">
                                                        <label class="form-label mb-0">Profile Image</label>
                                                    </div><!-- end col -->
                                                    <div class="col-lg-10">
                                                        <div class="profile-container">
                                                            <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}"
                                                                alt="Profile">
                                                            
                                                            <input type="file" id="profileUpload"
                                                                style="display: none;">
                                                        </div>
                                                    </div><!-- end col -->
                                                </div>
                                                <!-- end row -->

                                            </div><!-- end col -->
                                            <div class="col-lg-6">

                                                <!-- start row -->
                                                <div class="row align-items-center mb-3">
                                                    <div class="col-lg-4">
                                                        <label class="form-label mb-0">Name</label>
                                                    </div><!-- end col -->
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" value="{{Auth::user()->name}}" readonly>
                                                    </div><!-- end col -->
                                                </div>
                                                <!-- end row -->

                                            </div><!-- end col -->
                                            <div class="col-lg-6">

                                                <!-- start row -->
                                                <div class="row align-items-center mb-3">
                                                    <div class="col-lg-4">
                                                        <label class="form-label mb-0">Email</label>
                                                    </div><!-- end col -->
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" value="{{Auth::user()->email}}" readonly>
                                                    </div><!-- end col -->
                                                </div>
                                                <!-- end row -->

                                            </div><!-- end col -->
                                            
                                        </div>
                                        <!-- end row -->

                                       


                                        
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div><!-- end card body -->
                </div><!-- end card -->

            </div>
            <!-- End Content -->



            <!-- ========================
        End Page Content
    ========================= -->




        </div>
        <!-- End Main Wrapper -->

        @include('admin.layouts.footer')
</body>

</html>
