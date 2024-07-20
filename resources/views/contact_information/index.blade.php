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
                    Contact Information
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
                            <h5 class="card-title">Contact Information</h5>
                        </div>
                        <div class="card-body">

                            <!-- Row starts -->
                            <div class="row gx-3">
                                <div class="col-sm-12">
                                    <div class="bg-light rounded-2 px-3 py-2 mb-3">
                                        <h6 class="m-0"> Details</h6>
                                    </div>
                                </div>
                                <form action="{{ route('store_contact_information') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="a1">Location <span class="text-danger">*</span></label>
                                                <input require type="text" value="{{ old('location', $contact->location ?? '') }}" name="location" class="form-control" id="a1" placeholder="Enter Location">
                                                <span class="text-danger">@error('location') {{ $message }} @enderror</span>
                                            </div>
                                        </div>
                                        <div class=" col-md-6 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="a2">Email <span class="text-danger">*</span></label>
                                                <input type="email" name="email" value="{{ old('email', $contact->email ?? '') }}" class="form-control" id="a2" placeholder="Enter Email">
                                                <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="a3">Phone Number<span class="text-danger">*</span></label>
                                                <input type="text" name="phone" value="{{ old('phone', $contact->phone ?? '') }}" class="form-control" id="a3" placeholder="Enter Phone Number">
                                                <span class="text-danger">@error('phone') {{ $message }} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="a3">Linkedln Address</label>
                                                <input type="text" name="linkedln" value="{{ old('linkedln', $contact->linkedln ?? '') }}" class="form-control" id="a3" placeholder="Enter Linkedln Address">
                                                <span class="text-danger">@error('linkedln') {{ $message }} @enderror</span>
                                            </div>
                                        </div>


                                        <div class="col-md-6 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="a3">Instagram</label>
                                                <input type="text" name="instagram" value="{{ old('instagram', $contact->instagram ?? '') }}" class="form-control" id="a3" placeholder="Enter Instagram address">
                                                <span class="text-danger">@error('instagram') {{ $message }} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="a3">Facebook Address</span></label>
                                                <input type="text" name="facebook" value="{{ old('facebook', $contact->facebook ?? '') }}" class="form-control" id="a3" placeholder="Enter Instagram address">
                                                <span class="text-danger">@error('facebook') {{ $message }} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="a3">Twitter Handle</label>
                                                <input type="text" name="twitter" value="{{ old('twitter', $contact->twitter ?? '') }}" class="form-control" id="a3" placeholder="Enter Twitter Handle">
                                                <span class="text-danger">@error('twitter') {{ $message }} @enderror</span>
                                            </div>
                                        </div>


                                        <div class="col-md-6 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="a3">Youtube Link</label>
                                                <input type="text" name="youtube" value="{{ old('youtube', $contact->youtube ?? '') }}" class="form-control" id="a3" placeholder="Enter Youtube Link">
                                                <span class="text-danger">@error('youtube') {{ $message }} @enderror</span>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="d-flex gap-2 justify-content-end">

                                                <button type="Submit" class="btn btn-primary">
                                                    Update Information
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
                        <h5 class="card-title">Contact Information</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-outer">
                            <div class="table-responsive">
                                <table class="table align-middle table-hover m-0 truncate">
                                    <thead>
                                        <tr>
                                            <th scope="col">Location</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">LinkedIn</th>
                                            <th scope="col">Instagram</th>
                                            <th scope="col">Facebook</th>
                                            <th scope="col">Twitter</th>
                                            <th scope="col">Youtube</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($contact)
                                        <tr>
                                            <td>{{ $contact->location }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->phone }}</td>
                                            <td>{{ $contact->linkedln }}</td>
                                            <td>{{ $contact->instagram }}</td>
                                            <td>{{ $contact->facebook }}</td>
                                            <td>{{ $contact->twitter }}</td>
                                            <td>{{ $contact->youtube }}</td>

                                        </tr>
                                        @else
                                        <tr>
                                            <td colspan="8" class="text-center">No Contact Information Found</td>
                                        </tr>
                                        @endif
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
