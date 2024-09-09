<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from buybootstrap.com/demos/medflex/medflex-admin-dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jul 2024 16:25:16 GMT -->

<head>
    <base href="/public">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zeltek Dashboard</title>

    <!-- Meta -->
    <meta name="description" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="Website">
    <link rel="shortcut icon" href="{{ asset('assets/images/fav.png') }}">


    <script src="{{ asset('admin_assets/assets/js/jquery.min.js') }}"></script>

    <!-- *************
		************ CSS Files *************
	************* -->
    <link rel="stylesheet" href="admin_assets/assets/fonts/remix/remixicon.css">
    <link rel="stylesheet" href="admin_assets/assets/css/main.min.css">

    <!-- *************
		************ Vendor Css Files *************
	************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="admin_assets/assets/vendor/overlay-scroll/OverlayScrollbars.min.css">
</head>

<body>

    <!-- Loading starts -->
    <div id="loading-wrapper">
        <div class='spin-wrapper'>
            <div class='spin'>
                <div class='inner'></div>
            </div>
            <div class='spin'>
                <div class='inner'></div>
            </div>
            <div class='spin'>
                <div class='inner'></div>
            </div>
            <div class='spin'>
                <div class='inner'></div>
            </div>
            <div class='spin'>
                <div class='inner'></div>
            </div>
            <div class='spin'>
                <div class='inner'></div>
            </div>
        </div>
    </div>
    <!-- Loading ends -->

    <!-- Page wrapper starts -->
    <div class="page-wrapper">

        <!-- App header starts -->
        @include('admin_snippets.header')
        <!-- App header ends -->

        <!-- Main container starts -->
        <div class="main-container">

            <!-- Sidebar wrapper starts -->
            @include('admin_snippets.sidebar')
            <!-- Sidebar wrapper ends -->

            <!-- App container starts -->
            @yield('content')
            <!-- App container ends -->

        </div>
        <!-- Main container ends -->

    </div>
    <!-- Page wrapper ends -->

    <!-- *************
			************ JavaScript Files *************
		************* -->
    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <!-- <script src="{{ asset('admin_assets/assets/js/jquery.min.js') }}"></script> -->
    <script src="{{ asset('admin_assets/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="admin_assets/assets/js/moment.min.js"></script>

    <!-- *************
			************ Vendor Js Files *************
		************* -->

    <!-- Overlay Scroll JS -->
    <script src="admin_assets/assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
    <script src="admin_assets/assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

    <!-- Apex Charts -->
    <script src="admin_assets/assets/vendor/apex/apexcharts.min.js"></script>
    <script src="admin_assets/assets/vendor/apex/custom/home/patients.js"></script>
    <script src="admin_assets/assets/vendor/apex/custom/home/treatment.js"></script>
    <script src="admin_assets/assets/vendor/apex/custom/home/available-beds.js"></script>
    <script src="admin_assets/assets/vendor/apex/custom/home/earnings.js"></script>
    <script src="admin_assets/assets/vendor/apex/custom/home/gender-age.js"></script>
    <script src="admin_assets/assets/vendor/apex/custom/home/claims.js"></script>

    <!-- Custom JS files -->
    <script src="admin_assets/assets/js/custom.js"></script>


    <!-- sweet alert  -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('message'))
    <script>
        swal("Successful!", "{{ session('message') }}!", "success");
    </script>
    @endif
    @if(session('error')) < script>
        swal("Error!", "{{ session('error') }}!", "warning");
        </script>
        @endif
        @if (Session::has('success'))
        <script>
            swal("Successful!", "{{ Session::get('success') }}!", "success");
        </script>
        @endif

        @if (Session::has('error'))
        <script>
            swal("Error!", "{{ Session::get('error') }}!", "warning");
        </script>
        @endif
</body>

</html>
