<div class="default-sidebar has-shadow">
    <!-- Begin Side Navbar -->
    <nav class="side-navbar box-scroll sidebar-scroll">
        
        <!-- Begin Main Navigation -->
        <ul class="list-unstyled">
            <li class="{{ set_active('/users*') }}">
                <a href="{{ route('users.index') }}">
                    <i class="la la-users"></i><span>Users</span>
                </a>
            </li>
        </ul>
        <!-- End Main Navigation -->
    </nav>
    <!-- End Side Navbar -->
</div>
<!-- End Left Sidebar -->