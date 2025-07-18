<!-- Topbar Start -->
        <header class="navbar-header">
            <div class="page-container topbar-menu">
                <div class="d-flex align-items-center gap-2">

                    <!-- Logo -->
                    <a href="{{url('admin/dashboard')}}" class="logo">

                        <!-- Logo Normal -->
                        <span class="logo-light">
                            <span class="logo-lg"><img
                                    src="{{ url('assets/admin/img/logo.png') }}"
                                    alt="logo"></span>
                            <span class="logo-sm"><img
                                    src="{{ url('assets/admin/img/logo.png') }}"
                                    alt="small logo"></span>
                        </span>

                        <!-- Logo Dark -->
                        <span class="logo-dark">
                            <span class="logo-lg"><img
                                    src="{{ url('assets/admin/img/logo.png') }}"
                                    alt="dark logo"></span>
                        </span>
                    </a>

                    <!-- Sidebar Mobile Button -->
                    <a id="mobile_btn" class="mobile-btn" href="#sidebar">
                        <i class="ti ti-menu-deep fs-24"></i>
                    </a>

                    <button class="sidenav-toggle-btn btn border-0 p-0 active" id="toggle_btn2">
                        <i class="ti ti-arrow-right"></i>
                    </button>

                    <!-- Search -->
                    <div class="me-auto d-flex align-items-center header-search d-lg-flex d-none">
                        <!-- Search -->
                        <div class="input-icon-start position-relative me-2">
                            <span class="input-icon-addon">
                                <i class="ti ti-search"></i>
                            </span>
                            <input type="text" class="form-control shadow-sm" placeholder="Search">
                            <span
                                class="input-icon-addon text-dark shadow fs-18 d-inline-flex p-0 header-search-icon"><i
                                    class="ti ti-command"></i></span>
                        </div>
                        <!-- /Search -->
                    </div>

                </div>

                <div class="d-flex align-items-center">

                    <!-- Search for Mobile -->
                    <div class="header-item d-flex d-lg-none me-2">
                        <button class="topbar-link btn btn-icon" data-bs-toggle="modal" data-bs-target="#searchModal"
                            type="button">
                            <i class="ti ti-search fs-16"></i>
                        </button>
                    </div>


                    <a href="javascript:void(0);" id="timeButton" class="btn btn-liner-gradient me-3 d-lg-flex d-none">
                        Time:  <span id="realtimeClock"> --:--:-- --</span>
                        <i class="ti ti-chart-bubble-filled ms-1"></i>
                    </a>



                    <script>
                        function updateTime() {
                            const now = new Date();
                            let hours = now.getHours();
                            const minutes = String(now.getMinutes()).padStart(2, '0');
                            const seconds = String(now.getSeconds()).padStart(2, '0');
                            const ampm = hours >= 12 ? 'PM' : 'AM';

                            // Convert to 12-hour format
                            hours = hours % 12;
                            hours = hours ? hours : 12; // 0 should be 12
                            hours = String(hours).padStart(2, '0');

                            const timeString = `${hours}:${minutes}:${seconds} ${ampm}`;
                            document.getElementById('realtimeClock').innerText = timeString;
                        }

                        // Call once to initialize
                        updateTime();

                        // Update every second
                        setInterval(updateTime, 1000);
                    </script>





                   

                    <!-- Settings -->
                    <div class="header-item">
                        <div class="dropdown me-2">
                            <a href="{{url('admin/settings/profile-settings')}}"
                                class="btn topbar-link"><i class="ti ti-settings-2"></i></a>
                        </div>
                    </div>
                    <!-- Settings -->






                    <!-- User Dropdown -->
                    <div class="dropdown profile-dropdown d-flex align-items-center justify-content-center">
                        <a href="javascript:void(0);"
                            class="topbar-link dropdown-toggle drop-arrow-none position-relative"
                            data-bs-toggle="dropdown" data-bs-offset="0,22" aria-haspopup="false" aria-expanded="false">
                            <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}"
                                width="32" class="rounded-circle d-flex" alt="user-image">
                            <span class="online text-success"><i
                                    class="ti ti-circle-filled d-flex bg-white rounded-circle border border-1 border-white"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-md p-2">

                            <div class="d-flex align-items-center bg-light rounded-3 p-2 mb-2">
                                <img src="{{ Avatar::create(Auth::user()->name)->toBase64() }}"
                                    class="rounded-circle" width="42" height="42" alt="">
                                <div class="ms-2">
                                    <p class="fw-medium text-dark mb-0">{{Auth::user()->name}}</p>
                                    <span class="d-block fs-13">Administrator</span>
                                </div>
                            </div>

                            <!-- Item-->
                            <a href="{{url('admin/settings/profile-settings')}}"
                                class="dropdown-item">
                                <i class="ti ti-user-circle me-1 align-middle"></i>
                                <span class="align-middle">Profile Settings</span>
                            </a>

                           

                            <!-- Item-->
                            <div class="pt-2 mt-2 border-top">
                                <a href="{{url('admin/logout')}}"
                                    class="dropdown-item text-danger">
                                    <i class="ti ti-logout me-1 fs-17 align-middle"></i>
                                    <span class="align-middle">Log Out</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>



            </div>
        </header>
        <!-- Topbar End -->