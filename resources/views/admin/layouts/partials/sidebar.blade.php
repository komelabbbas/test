<div class="default-sidebar light-sidebar has-shadow">
    <!-- Begin Side Navbar -->
    <nav class="side-navbar box-scroll sidebar-scroll">
        
        <!-- Begin Main Navigation -->
        <ul class="list-unstyled">
            <li class="{{ set_active('admin/dashboard*') }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="ti ti-dashboard"></i><span>Dashboard</span>
                </a>
            </li>
            <li class="{{ set_active('admin/users*') }}">
                <a href="{{ route('admin.users.index') }}">
                    <i class="la la-users"></i><span>Users</span>
                </a>
            </li>
            <li class="{{ set_active('admin/packages') }}">
                <a href="{{ route('admin.packages.index') }}">
                    <i class="ti ti-bag"></i><span>Packages</span>
                </a>
            </li>
            <li class="{{ set_active('admin/categories*') }}">
                <a href="{{ route('admin.categories.index') }}">
                    <i class="la la-puzzle-piece"></i><span>Categories</span>
                </a>
            </li>
            <li class="{{ set_active('admin/listings*') }}">
                <a href="{{ route('admin.listings.index') }}">
                    <i class="ti ti-receipt"></i><span>Listings</span>
                </a>
            </li>
            <li class="{{ set_active('admin/listing/user_list*') }}">
                <a href="{{ route('admin.user_list.index') }}">
                    <i class="ti ti-user"></i><span>Listing Users</span>
                </a>
            </li>
            <li class="{{ set_active('admin/listing/products*') }}">
                <a href="{{ route('admin.products.index') }}">
                    <i class="ti ti-archive"></i><span>Products</span>
                </a>
            </li>
            <li class="{{ set_active('admin/listing/medias*') }}">
                <a href="{{ route('admin.medias.index') }}">
                    <i class="ti ti-gallery"></i><span>Medias</span>
                </a>
            </li>
            <li class="{{ set_active('admin/listing/locations*') }}">
                <a href="{{ route('admin.locations.index') }}">
                    <i class="ti ti-map"></i><span>Locations</span>
                </a>
            </li>
            <li class="{{ set_active('admin/listing/business-info*') }}">
                <a href="{{ route('admin.business-info.index') }}">
                    <i class="la la-building"></i><span>Other Business Info</span>
                </a>
            </li>
            <li class="{{ set_active('admin/listing/faqs*') }}">
                <a href="{{ route('admin.faqs.index') }}">
                    <i class="la la-quote-left"></i><span>Faqs</span>
                </a>
            </li>
            <li class="{{ set_active('admin/listing/cities*') }}">
                <a href="{{ route('admin.cities.index') }}">
                    <i class="la la-map-marker"></i><span>Cities</span>
                </a>
            </li>
            {{-- <li class="{{ set_active('/new/user/wizard*') }}">
                <a href="{{ route('welcome.index') }}">
                    <i class="la la-lamp"></i><span>Wizard</span>
                </a>
            </li> --}}
        </ul>
        <!-- End Main Navigation -->
    </nav>
    <!-- End Side Navbar -->
</div>
<!-- End Left Sidebar -->