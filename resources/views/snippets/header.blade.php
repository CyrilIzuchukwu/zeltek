<header class="sc-header-section" id="sc-header-sticky">
    <div class="sc-topbar-section sc-topbar-section-three">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="sc-header-content-left">
                        <ul class="list-gap white-color">
                            <li><i class="icon-phone"></i><a href="tel:{{ $contact->phone }}"> {{ $contact->phone }}</a></li>
                            <li><i class="icon-message"></i><a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></li>
                            <li>
                                <i class="icon-map"></i>
                                <span class="address-area">{{ $contact->location }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sc-header-content-right align-items-center d-flex justify-content-end">
                        <div class="sc-header-date">
                            <ul class="list-gap sc-date">
                                <li><i class="icon-timer"></i> Mon - Fri: 09:00am - 05:00pm</li>
                            </ul>
                        </div>
                        <div class="sc-header-social-icon">
                            <ul class="list-gap sc-social-list">
                                <li>
                                    <a href="{{ $contact->facebook ?? '#' }}" target="_blank"> <i class="icon-facebook-2"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $contact->twitter ?? '#' }}" target="_blank"> <i class="icon-twiter"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $contact->instagram ?? '#' }}" target="_blank"> <i class="icon-intragram"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $contact->linkedln ?? '#' }}" target="_blank"> <i class="icon-linkedin-2"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Section Start -->
    <div class="sc-header-content sc-header-content-two">
        <div class="container">
            <div class="row align-items-center justify-content-between p-z-idex">
                <div class="col-lg-10 col-6">
                    <div class="sc-menu-inner d-flex align-items-center">
                        <div class="sc-header-logo sc-pr-90">
                            <a href="index.html"><img src="assets/images/ZNB.png" width="100" alt="Logo" style=""mar /></a>
                        </div>
                        <div class="sc-main-menu d-lg-block d-none">
                            <!-- Mainmenu Section Start -->
                            <ul class="list-gap main-menu">
                                <li class="current-menu-item ">
                                    <a class="active" href="/"> Home</a>
                                </li>
                                <li>
                                    <a href="/about_us"> About Us</a>
                                </li>

                                <li>
                                    <a href="/services">Services</a>
                                </li>

                                <li>
                                    <a href="/blog">Blog</a>
                                </li>

                                <li>
                                    <a href="/events">Events</a>
                                </li>

                                <li><a href="/contact_us">Contact</a></li>

                                @auth
                                @if(Auth::user()->role_as == 1)
                                <li><a href="{{ route('admin_dashboard') }}">Dashboard</a></li>
                                @elseif(Auth::user()->role_as == 2)
                                <li><a href="">Dashboard</a></li>
                                @endif

                                @endauth
                            </ul>
                            <!-- Mainmenu Section End -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-6">
                    <div class="sc-menu-select-box d-flex align-items-center justify-content-end">

                        <div class="sc-hambagur-icon sc-mr-20">
                            <a id="canva_expander" href="#" class="nav-menu-link menu-button">
                                <span class="dot1"></span>
                                <span class="dot2"></span>
                                <span class="dot3"></span>
                            </a>
                        </div>
                        <div class="header-btn">
                            <a href="#"><i class="ri-search-line"></i></a>
                            <a class="sc-primary-btn" href="contact.html">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
