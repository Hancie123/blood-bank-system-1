<!-- Start Settings Sidebar -->
<div class="sidebars settings-sidebar" id="sidebar2">
    <div class="sidebar-inner" data-simplebar>
        <div id="sidebar-menu5" class="sidebar-menu mt-0 p-0">
            <ul>
                <li class="submenu">
                    <a href="javascript:void(0);" class="{{ request()->is('admin/settings*') ? 'active' : '' }}">
                        <i class="ti ti-user-cog me-2"></i><span>Account Settings</span>
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
        </div>
    </div>
</div>
<!-- End Settings Sidebar -->
