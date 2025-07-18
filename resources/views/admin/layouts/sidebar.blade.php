<!-- Sidenav Menu Start -->
<div class="sidebar" id="sidebar">

    <!-- Start Logo -->
    <div class="sidebar-logo">
        <div>
            <!-- Logo Normal -->
            <a href="{{url('admin/dashboard')}}" class="logo logo-normal">
                <img src="{{ url('assets/admin/img/logo.png') }}"
                    alt="Logo" style="width: 40px">Blood Bank System
            </a>

            <!-- Logo Small -->
            <a href="{{url('admin/dashboard')}}" class="logo-small">
                <img src="{{ url('assets/admin/img/logo.png') }}"
                    alt="Logo">
            </a>

            <!-- Logo Dark -->
            <a href="{{url('admin/dashboard')}}" class="dark-logo">
                <img src="{{ url('assets/admin/img/logo.png') }}"
                    alt="Logo">
            </a>
        </div>
        <button class="sidenav-toggle-btn btn border-0 p-0 active" id="toggle_btn">
            <i class="ti ti-arrow-left"></i>
        </button>

        <!-- Sidebar Menu Close -->
        <button class="sidebar-close">
            <i class="ti ti-x align-middle"></i>
        </button>
    </div>
    <!-- End Logo -->

    <!-- Sidenav Menu -->
    <div class="sidebar-inner" data-simplebar>
        <div id="sidebar-menu" class="sidebar-menu">
            <div class="sidebar-top shadow-sm p-2 rounded-1 mb-3 dropend">
                <a href="javascript:void(0);" class="drop-arrow-none" data-bs-toggle="dropdown"
                    data-bs-auto-close="outside" data-bs-offset="0,22" aria-haspopup="false" aria-expanded="false">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <span class="avatar flex-shrink-0 p-1"><img src="{{ url('assets/admin/img/logo.png') }}"
                                    alt="img"></span>
                            <div class="ms-2">
                                <h6 class="fs-14 fw-semibold mb-0">Blood Bank System</h6>
                                <p class="fs-13 mb-0">Powered By</p>
                            </div>
                        </div>

                    </div>
                </a>

            </div>

            <ul>
                <li class="menu-title"><span>Main Menu</span></li>
                <li>
                    <ul>
                        <li class="menu-title">
                            <a href="{{ url('admin/dashboard') }}"
                                class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                                <i class="ti ti-layout-dashboard"></i><span>Dashboard</span>
                            </a>
                        </li>


                    </ul>
                </li>
                <li class="menu-title"><span>Generals</span></li>
                <li>
                    <ul>

                        <li class="{{ request()->is('admin/blood-donors*') ? 'active' : '' }}">
                            <a href="{{url('admin/blood-donors')}}">
                                <i class="ti ti-home-exclamation"></i><span>Blood Donors</span>
                            </a>
                        </li>

                        <li class="{{ request()->is('admin/request-blood*') ? 'active' : '' }}">
                            <a href="{{url('admin/request-blood')}}">
                                <i class="ti ti-home-exclamation"></i><span>Request Blood</span>
                            </a>
                        </li>

                         <li class="{{ request()->is('admin/contact-us*') ? 'active' : '' }}">
                            <a href="{{url('admin/contact-us')}}">
                                <i class="ti ti-home-exclamation"></i><span>Contact Us</span>
                            </a>
                        </li>

                        

                    </ul>
                </li>

                <li class="menu-title"><span>Settings</span></li>
                <li>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"
                                class="{{ request()->is('admin/settings*') ? 'active subdrop' : '' }}">
                                <i class="ti ti-user-cog"></i><span>Account Settings</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="{{ url('admin/settings/profile-settings') }}"
                                        class="{{ request()->is('admin/settings/profile-settings') ? 'active' : '' }}">Profile</a>
                                </li>
                                <li><a href="{{ url('admin/settings/country-settings') }}"
                                        class="{{ request()->is('admin/settings/country-settings') ? 'active' : '' }}">Country</a>
                                </li>

                                <li><a href="{{ url('admin/settings/state-settings') }}"
                                        class="{{ request()->is('admin/settings/state-settings') ? 'active' : '' }}">State</a>
                                </li>

                                 <li><a href="{{ url('admin/settings/city-settings') }}"
                                        class="{{ request()->is('admin/settings/city-settings') ? 'active' : '' }}">City</a>
                                </li>
                            </ul>
                        </li>

                        





                    </ul>
                </li>


            </ul>



        </div>

    </div>

</div>
<!-- Sidenav Menu End -->
