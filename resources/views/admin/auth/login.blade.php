<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
     <link rel="shortcut icon" href="{{ url('assets/website/img/logo.png') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('assets/admin/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/admin/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/admin/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/admin/css/tabler-icons.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/admin/css/simplebar.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/admin/css/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ url('assets/admin/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/admin/css/style.css') }}" id="app-style">
</head>

<body>


    <!-- Start Main Wrapper -->



    <div class="main-wrapper auth-bg position-relative overflow-hidden">



        <!-- Start Content -->
        <div class="container-fuild position-relative z-1">
            <div class="w-100 overflow-hidden position-relative flex-wrap d-block vh-100 bg-white">
                <!-- start row-->
                <div class="row">
                    <div class="col-lg-6 p-0">
                        <div
                            class="login-backgrounds login-covers bg-primary d-lg-flex align-items-center justify-content-center d-none flex-wrap p-4 position-relative h-100 z-0">
                            <div class="authentication-card w-100">
                                <div class="authen-overlay-item w-100">
                                    <div class="authen-head text-center">
                                        <h1 class="text-white fs-32 fw-bold mb-2">Welcome to the Blood Life Portal</h1>
                                        <p class="text-light fw-normal text-light"> Every drop counts. Every login saves
                                            a life. </p>
                                    </div>
                                    <div class="mt-4 mx-auto authen-overlay-img">
                                        <img src="{{ url('assets/admin/img/banner.png') }}" alt="Img">
                                    </div>
                                </div>
                            </div>
                            <img src="{{ url('assets/admin/img/banner/cover-imgs-2.webp') }}" alt="cover-imgs-2"
                                class="img-fluid cover-img">
                        </div>
                    </div> <!-- end row-->

                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="row justify-content-center align-items-center overflow-auto flex-wrap vh-100">
                            <div class="col-md-8 mx-auto">
                                <form action="{{ url('admin/login') }}" method="POST"
                                    class="d-flex justify-content-center align-items-center">
                                    @csrf
                                    <div class="d-flex flex-column justify-content-lg-center p-4 p-lg-0 pb-0 flex-fill">
                                        <div class=" mx-auto mb-4 text-center">
                                            <img src="{{ url('assets/admin/img/logo.png') }}" class="img-fluid"
                                                alt="Logo" style="width: 150px">
                                        </div>
                                        <div class="card border-1 p-lg-3 shadow-md rounded-3 m-0">
                                            <div class="card-body">
                                                <div class="text-center mb-3">
                                                    <h5 class="mb-1 fs-20 fw-bold">Sign In</h5>
                                                    <p class="mb-0">Please enter below details to access the dashboard
                                                    </p>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Email Address</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text border-end-0 bg-white">
                                                            <i class="ti ti-mail fs-14 text-dark"></i>
                                                        </span>
                                                        <input type="text" value="" name="email"
                                                            class="form-control border-start-0 ps-0"
                                                            placeholder="Enter Email Address">
                                                    </div>
                                                    @error('email')
                                                            <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                   
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Password</label>
                                                    <div class="position-relative">
                                                        <div
                                                            class="pass-group input-group position-relative border rounded">
                                                            <span class="input-group-text bg-white border-0">
                                                                <i class="ti ti-lock text-dark fs-14"></i>
                                                            </span>
                                                            <input type="password" name="password"
                                                                class="pass-input form-control ps-0 border-0"
                                                                placeholder="****************">
                                                            <span class="input-group-text bg-white border-0">
                                                                <i
                                                                    class="ti toggle-password ti-eye-off text-dark fs-14"></i>
                                                            </span>
                                                        </div>
                                                        @error('password')
                                                            <p class="text-danger">{{$message}}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="form-check form-check-md mb-0">
                                                            <input class="form-check-input" id="remember_me"
                                                                type="checkbox">
                                                            <label for="remember_me"
                                                                class="form-check-label mt-0 text-dark">Remember
                                                                Me</label>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="text-end">
                                                        <a href=""
                                                            class="text-danger">Forgot Password?</a>
                                                    </div> --}}
                                                </div>
                                                <div class="mb-2">
                                                    <button type="submit"
                                                        class="btn bg-primary text-white w-100">Login</button>
                                                </div>


                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div>
                                </form>
                                <p class="fs-14 text-dark text-center mt-4">Copyright &copy; <?php echo Date('Y'); ?> -
                                    Blood Bank System.</p>
                            </div> <!-- end row-->
                        </div>

                    </div>
                </div>
                <!-- end row-->

            </div>
        </div>
        <!-- End Content -->




    </div>
    <!-- End Main Wrapper -->


    <script src="{{ url('assets/admin/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/simplebar.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/moment.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/daterangepicker.js') }}"></script>
    <script src="{{ url('assets/admin/js/select2.min.js') }}"></script>
    <script src="{{ url('assets/admin/js/script.js') }}"></script>
</body>

</html>
