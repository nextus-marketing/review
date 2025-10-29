<nav class="sidebar-nav scroll-sidebar" data-simplebar>
    <ul id="sidebarnav">
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
        </li>

        @can('dashboard-view')
        <li class="sidebar-item">
            <a class="sidebar-link @if(Route::is('admin.dashboard.*')) active @endif" href="{{ route('admin.dashboard.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
            </a>
        </li>
        @endcan

        @can('role-view')
        <li class="sidebar-item">
            <a class="sidebar-link @if(Route::is('admin.roles.*')) active @endif" href="{{ route('admin.roles.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-user-check"></i>
                </span>
                <span class="hide-menu">Roles</span>
            </a>
        </li>
        @endcan

        @can('employee-view')
        <li class="sidebar-item">
            <a class="sidebar-link @if(Route::is('admin.employees.*')) active @endif" href="{{ route('admin.employees.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-user-circle"></i>
                </span>
                <span class="hide-menu">Employees</span>
            </a>
        </li>
        @endcan

        @can('enquiry-view')
        <li class="sidebar-item">
            <a class="sidebar-link @if(Route::is('admin.enquiries.*')) active @endif" href="{{ route('admin.enquiries.index') }}" aria-expanded="false">
                <span>
                    <i class="ti ti-headset"></i>
                </span>
                <span class="hide-menu">Enquiries</span>
            </a>
        </li>
        @endcan

        
        <!-- End of File -->
    </ul>
</nav>
