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
                    Add Team Member
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
                            <h5 class="card-title">Add Team</h5>
                        </div>
                        <div class="card-body">

                            <!-- Row starts -->
                            <div class="row gx-3">
                                <div class="col-sm-12">
                                    <div class="bg-light rounded-2 px-3 py-2 mb-3">
                                        <h6 class="m-0"> Add Team</h6>
                                    </div>
                                </div>
                                <form action="{{ route('create_team') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="row">
                                            <div class="col-md-5 col-sm-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="a1"> Name <span class="text-danger">*</span></label>
                                                    <input require type="text" value="{{ old('name') }}" name="name" class="form-control" id="a1" placeholder="Team Member Name">
                                                    <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-sm-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="a1"> Bio <span class="text-danger">*</span></label>
                                                    <input require type="text" value="{{ old('bio') }}" name="bio" class="form-control" id="a1" placeholder="Short Bio">
                                                    <span class="text-danger">@error('bio') {{ $message }} @enderror</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 mb-4">
                                                <label class="form-label">Upload Team Profile</label>
                                                <div class="logo-upload">
                                                    <input type="file" name="image" id="clientImageInput" accept=".png, .jpg, .jpeg">

                                                    <label for="clientImageInput" class="camera-icon">
                                                        <img id="clientImagePreview" class="client-image">
                                                        <i class="ri-file-image-line"></i>
                                                    </label>
                                                </div>
                                                <span class="text-danger">@error('image') {{ $message }} @enderror</span>
                                            </div>


                                        </div>

                                        <div class="col-sm-12 col-md-6">
                                            <div class="d-flex gap-2 justify-content-start align-items-end align-content-end">
                                                <button type="Submit" class="btn btn-danger">
                                                    Submit
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


        </div>
        <!-- App body ends -->

        <!-- App footer starts -->
        <div class="app-footer bg-white">
            <span>© Zeltek Super Admin 2024</span>
        </div>
        <!-- App footer ends -->

    </div>

    <style>
        .logo-upload {
            position: relative;
            width: 100%;
            height: 250px;
            cursor: pointer;
            background: #eee;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo-upload input[type="file"] {
            display: none;
        }

        .camera-icon {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            cursor: pointer;
        }

        .logo-upload i {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .logo-icon {
            font-size: 18px;
            color: #666;
        }

        .client-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            cursor: pointer;
        }
    </style>

    <script>
        document.getElementById('clientImageInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('clientImagePreview').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>

    @endsection
