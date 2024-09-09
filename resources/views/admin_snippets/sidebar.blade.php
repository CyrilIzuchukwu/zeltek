<nav id="sidebar" class="sidebar-wrapper">

    <!-- Sidebar profile starts -->
    <div class="sidebar-profile">
        <img src="admin_assets/assets/images/user6.png" class="img-shadow img-3x me-3 rounded-5" alt="Hospital Admin Templates">
        <div class="m-0">
            <h5 class="mb-1 profile-name text-nowrap text-truncate">{{ auth()->user()->name }}</h5>
            <p class="m-0 small profile-name text-nowrap text-truncate">Super Admin</p>
        </div>
    </div>
    <!-- Sidebar profile ends -->

    <!-- Sidebar menu starts -->
    <div class="sidebarMenuScroll">
        <ul class="sidebar-menu">
            <li class="active current-page">
                <a href="{{ route('admin_dashboard') }}">
                    <i class="ri-home-6-line"></i>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>

            @if (auth()->user()->role_as != 2)
            <li class="">
                <a href="{{ route('users') }}">
                    <i class="ri-nurse-line"></i>
                    <span class="menu-text">Users</span>
                </a>
            </li>
            @endif

            <li class="treeview">
                <a href="#!">
                    <i class="ri-secure-payment-line"></i>
                    <span class="menu-text">Testimonials</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('add_testimonial') }}">Add Testimonial</a>
                    </li>
                    <li>
                        <a href="{{ route('testimonials') }}">All Testimonials</a>
                    </li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#!">
                    <i class="ri-team-fill"></i>
                    <span class="menu-text">Our Teams</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('add_team') }}">Add Team Member</a>
                    </li>
                    <li>
                        <a href="{{ route('teams') }}">View Teams</a>
                    </li>
                </ul>
            </li>





            <li class="treeview">
                <a href="#!">
                    <i class="ri-customer-service-fill"></i>
                    <span class="menu-text">Training Services</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('add_training_service') }}">Add Traing Services</a>
                    </li>
                    <li>
                        <a href="{{ route('training_service') }}">View Training Service</a>
                    </li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#!">
                    <i class="ri-color-filter-line"></i>
                    <span class="menu-text">UI Settings</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="">List Items</a>
                    </li>

                </ul>
            </li>
            <li class="treeview">
                <a href="#!">
                    <i class="ri-news-line"></i>
                    <span class="menu-text">Blogs & Events</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('add_blog') }}">Add a Blog</a>
                    </li>

                    <li>
                        <a href="{{ route('blogs') }}">View Blogs</a>
                    </li>

                    <li>
                        <a href="{{ route('add_event') }}">Add Event</a>
                    </li>

                    <li>
                        <a href="{{ route('events') }}">View Events</a>
                    </li>

                </ul>
            </li>


            <li>
                <a href="{{ route('profile_setting') }}">
                    <i class="ri-settings-5-line"></i>
                    <span class="menu-text">Account Settings</span>
                </a>
            </li>

            <li>
                <a href="{{ route('inquiry') }}">
                    <i class="ri-message-2-line"></i>
                    <span class="menu-text">Inquiry</span>
                </a>
            </li>
            <li>
                <a href="{{ route('contact_information') }}">
                    <i class="ri-road-map-line"></i>
                    <span class="menu-text">Contact Informatioin</span>
                </a>
            </li>

            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="ri-logout-box-line"></i>
                    <span class="menu-text">Logout</span>
                </a>
            </li>
            <form action="{{ route('logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>

        </ul>
    </div>
    <!-- Sidebar menu ends -->
</nav>
