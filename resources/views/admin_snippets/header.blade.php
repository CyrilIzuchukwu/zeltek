    <div class="app-header d-flex align-items-center">

        <!-- Toggle buttons starts -->
        <div class="d-flex">
            <button class="toggle-sidebar">
                <i class="ri-menu-line"></i>
            </button>
            <button class="pin-sidebar">
                <i class="ri-menu-line"></i>
            </button>
        </div>
        <!-- Toggle buttons ends -->

        <!-- App brand starts -->
        <div class="app-brand ms-3">
            <a href="/" class="d-lg-block d-none">
                <img src="assets/images/admin_logo.png" class="logo" alt="Logo">
            </a>
            <a href="/" class="d-lg-none d-md-block">
                <img src="assets/images/admin_logo.png" class="logo" alt="Logo">
            </a>
        </div>
        <!-- App brand ends -->

        <!-- App header actions starts -->
        <div class="header-actions">
            <!-- Header actions starts -->
            <!-- <div class="d-lg-flex d-none gap-2">
                <div class="dropdown">
                    <a class="dropdown-toggle header-icon" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="ri-message-3-line"></i>
                        <span class="count-label"></span>
                    </a>
                </div>
            </div> -->
            <!-- Header actions ends -->

            <!-- Header user settings starts -->
            <div class="dropdown ms-2">
                <a id="userSettings" class="dropdown-toggle d-flex align-items-center" href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="avatar-box">SP<span class="status busy"></span></div>
                </a>
                <div class="dropdown-menu dropdown-menu-end shadow-lg">
                    <div class="px-3 py-2">
                        <span class="small">{{ auth()->user()->name }}</span>
                    </div>
                    <div class="mx-3 my-2 d-grid">
                        <a href="{{ route('profile_setting') }}" class="btn btn-info">Profile</a>
                    </div>
                    <div class="mx-3 my-2 d-grid">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger">Logout</a>
                    </div>
                </div>
                <form action="{{ route('logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
            </div>
            <!-- Header user settings ends -->

        </div>
        <!-- App header actions ends -->

    </div>
