<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zeltek Login</title>

    <!-- Meta -->
    <meta name="description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:title" content="Admin Templates - Dashboard Templates">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <link rel="shortcut icon" href="admin_assets/assets/images/favicon.svg">

    <!-- *************
			************ CSS Files *************
		************* -->
    <link rel="stylesheet" href="admin_assets/assets/fonts/remix/remixicon.css">
    <link rel="stylesheet" href="admin_assets/assets/css/main.min.css">

</head>

<body class="login-bg">

    <!-- Container starts -->
    <div class="container">

        <!-- Auth wrapper starts -->
        <div class="auth-wrapper">

            <!-- Form starts -->
            <form method="POST" action="{{ route('login') }}">

                @csrf
                <div class="auth-box">
                    <a href="/" class=" logo-img mb-4">
                        <img src="assets/images/Z1.png" width="150" alt="Bootstrap Gallery">
                    </a>

                    <style>
                        /* .logo-img img{
                            width: 00px;
                            height: 100px;
                            object-fit: cover;
                        } */
                    </style>
                    <h4 class="mb-4">Login</h4>

                    <div class="mb-3">
                        <label class="form-label" for="email">Your email <span class="text-danger">*</span></label>
                        <input type="text" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus class="form-control  @error('email') is-invalid @enderror" placeholder=" Enter your email">
                        <span class="text-danger">@error ('email') {{ $message }} @enderror</span>
                    </div>

                    <div class="mb-2">
                        <label class="form-label" for="pwd">Your password <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <input type="password" name="password" value="{{ old('password') }}" id="pwd" class="form-control @error('password') is-invalid @enderror" placeholder="Enter password">
                            <button class="btn btn-outline-secondary" type="button">
                                <i class="ri-eye-line text-primary"></i>
                            </button>
                            <span class="text-danger">@error ('password') {{ $message }} @enderror</span>
                        </div>
                    </div>

                    <!-- <div class="d-flex justify-content-end mb-3">
                        <a href="forgot-password.html" class="text-decoration-underline">Forgot password?</a>
                    </div> -->

                    <div class="mb-3 d-grid gap-2">
                        <button type="submit" class="btn btn-danger">Login</button>
                    </div>

                </div>

            </form>
            <!-- Form ends -->

        </div>
        <!-- Auth wrapper ends -->

    </div>
    <!-- Container ends -->

</body>


</html>


