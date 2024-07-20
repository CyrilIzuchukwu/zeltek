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
                    Users
                </li>
            </ol>
            <!-- Breadcrumb ends -->
        </div>
        <!-- App Hero header ends -->

        <!-- App body starts -->
        <div class="app-body">

            <!-- Row starts -->
            <div class="row gx-3">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Add Admin Member</h5>
                        </div>
                        <div class="card-body">

                            <!-- Row starts -->
                            <div class="row gx-3">
                                <div class="col-sm-12">
                                    <div class="bg-light rounded-2 px-3 py-2 mb-3">
                                        <h6 class="m-0"> Details</h6>
                                    </div>
                                </div>
                                <form action="{{ route('create_sub_admin') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="a1">Name <span class="text-danger">*</span></label>
                                                <input require type="text" value="{{ old('name') }}" name="name" class="form-control" id="a1" placeholder="Enter Name">
                                                <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                                            </div>
                                        </div>
                                        <div class=" col-md-6 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="a2">Email <span class="text-danger">*</span></label>
                                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="a2" placeholder="Enter Email">
                                                <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="a3">Password<span class="text-danger">*</span></label>
                                                <input type="password" name="password" value="{{ old('password') }}" class="form-control" id="a3" placeholder="Enter Password">
                                                <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="d-flex gap-2 justify-content-end">
                                                <a href="staff.html" class="btn btn-outline-secondary">
                                                    Cancel
                                                </a>
                                                <button type="Submit" class="btn btn-primary">
                                                    Add Admin Member
                                                </button>
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

            <div class="col-sm-12 mt-5">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title">User List</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-outer">
                            <div class="table-responsive">
                                <table class="table align-middle table-hover m-0 truncate">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Date Created</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>

                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{$user->created_at->format('M d, Y')}}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    @if ($user->active == 0)
                                                    <a class="btn btn-secondary btn-sm me-2" href="{{ route('unban_sub_admin', $user->id) }}" onclick="return confirm('Are you sure you want to unban the user?')">
                                                        <i class="ri-forbid-line"></i>
                                                        <span>Unban</span>
                                                    </a>
                                                    @else
                                                    <a class="btn btn-warning btn-sm me-2" href="{{ route('ban_sub_admin', $user->id) }}" onclick="return confirm('Are you sure you want to ban the user?')">
                                                        <i class="ri-forbid-line"></i>
                                                        <span>Ban</span>
                                                    </a>
                                                    @endif
                                                    <a class="btn btn-danger btn-sm" href="{{ route('delete_sub_admin', $user->id) }}" onclick="return confirm('Are you sure you want to delete the user?')">
                                                        <i class="ri-delete-bin-line"></i>
                                                        <span>Delete</span>
                                                    </a>
                                                </div>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
