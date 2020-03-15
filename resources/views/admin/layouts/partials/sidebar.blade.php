<div class="default-sidebar has-shadow">
    <!-- Begin Side Navbar -->
    <nav class="side-navbar box-scroll sidebar-scroll">
        
        <!-- Begin Main Navigation -->
        <ul class="list-unstyled">
            @if(\Auth::user()->isSuperAdmin())
            <li class="{{ set_active('/users*') }}">
                <a href="{{ route('users.index') }}">
                    <i class="la la-users"></i><span>Users</span>
                </a>
            </li>
            @endif
            @can('view', App\User::class)
            <li class="{{ set_active('/profile*') }}">
                <a href="{{ route('profile.index') }}">
                    <i class="la la-user"></i><span>Profile</span>
                </a>
            </li>
            @endcan
            @can('view', App\Role::class)
            <li class="{{ set_active('/roles*') }}">
                <a href="{{ route('roles.index') }}">
                    <i class="la la-unlock"></i><span>Roles</span>
                </a>
            </li>
            @endcan
            @can('view', App\Permission::class)
            <li class="{{ set_active('/permissions*') }}">
                <a href="{{ route('permissions.index') }}">
                    <i class="la la-user-secret"></i><span>Permissions</span>
                </a>
            </li>
            @endcan
        </ul>
        <!-- End Main Navigation -->
    </nav>
    <!-- End Side Navbar -->
</div>
<!-- End Left Sidebar -->