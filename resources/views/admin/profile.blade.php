    @extends('layout.admin')
    @section('content')

    <div class="app-container">

        <!-- App hero header starts -->
        <div class="app-hero-header d-flex align-items-center">

            <!-- Breadcrumb starts -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <i class="ri-home-8-line lh-1 pe-3 me-3 border-end"></i>
                    <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item text-primary" aria-current="page">
                    Profile Setting
                </li>
            </ol>
            <!-- Breadcrumb ends -->
        </div>
        <!-- App Hero header ends -->

        <!-- App body starts -->
        <div class="app-body">

            <div class="row">
                <div class="col-md-6 mb-4">
                    <!-- Row starts -->
                    <div class="row gx-3">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Profile</h5>
                                </div>
                                <div class="card-body">
                                    <!-- Row starts -->
                                    <div class="row gx-3">
                                        <div class="col-sm-12">
                                            <div class="bg-light rounded-2 px-3 py-2 mb-3">
                                                <h6 class="m-0">Profile Settings</h6>
                                            </div>
                                        </div>
                                        <form action="{{ route('profile_update') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="name">Name <span class="text-danger">*</span></label>
                                                        <input required type="text" value="{{ old('name', auth()->user()->name) }}" name="name" class="form-control" id="name" placeholder="Enter Name">
                                                        <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="email">Email <span class="text-danger">*</span></label>
                                                        <input required type="email" value="{{ old('email', auth()->user()->email) }}" name="email" class="form-control" id="email" placeholder="Enter Email">
                                                        <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="d-flex gap-2 justify-content-end">
                                                        <button type="submit" class="btn btn-danger">Update Profile</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Row ends -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row ends -->
                </div>

                <div class="col-md-6">
                    <!-- Row starts -->
                    <div class="row gx-3">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Password</h5>
                                </div>
                                <div class="card-body">
                                    <!-- Row starts -->
                                    <div class="row gx-3">
                                        <div class="col-sm-12">
                                            <div class="bg-light rounded-2 px-3 py-2 mb-3">
                                                <h6 class="m-0">Password Update</h6>
                                            </div>
                                        </div>
                                        <form action="{{ route('password_update') }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="old_password">Old Password<span class="text-danger">*</span></label>
                                                        <input type="password" name="old_password" class="form-control" id="old_password" placeholder="Enter Old Password">
                                                        <span class="text-danger">@error('old_password') {{ $message }} @enderror</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="new_password">New Password<span class="text-danger">*</span></label>
                                                        <input type="password" name="new_password" class="form-control" id="new_password" placeholder="Enter New Password">
                                                        <span class="text-danger">@error('new_password') {{ $message }} @enderror</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <div class="mb-3">
                                                        <label class="form-label" for="confirm_password">Confirm Password<span class="text-danger">*</span></label>
                                                        <input type="password" name="new_password_confirmation" class="form-control" id="confirm_password" placeholder="Confirm New Password">
                                                        <span class="text-danger">@error('new_password_confirmation') {{ $message }} @enderror</span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="d-flex gap-2 justify-content-end">
                                                        <button type="Submit" class="btn btn-danger">Update Password</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>


                                    </div>
                                    <!-- Row ends -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row ends -->
                </div>
            </div>

        </div>
        <!-- App body ends -->

        <!-- App footer starts -->
        <div class="app-footer bg-white">
            <span>© Zeltek Super Admin 2024</span>
        </div>
        <!-- App footer ends -->

    </div>

    @endsection
