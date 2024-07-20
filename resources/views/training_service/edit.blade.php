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
                    Edit Service
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
                            <h5 class="card-title">Edit Training Service</h5>
                        </div>
                        <div class="card-body">

                            <!-- Row starts -->
                            <div class="row gx-3">
                                <div class="col-sm-12">
                                    <div class="bg-light rounded-2 px-3 py-2 mb-3">
                                        <h6 class="m-0"> Edit Training Service</h6>
                                    </div>
                                </div>
                                <form action="{{ route('update_service', $data->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="mb-3">
                                                    <label class="form-label" for="a1">Service Name <span class="text-danger">*</span></label>
                                                    <input require type="text" value="{{ old('service_name', $data->service_name) }}" name="service_name" class="form-control" id="a1" placeholder="Enter Service Name">
                                                    <span class="text-danger">@error('service_name') {{ $message }} @enderror</span>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-3 mb-4">
                                            <label class="form-label">Image</label>
                                            <div class="logo-upload">
                                                <input type="file" name="image" id="clientImageInput" accept=".png, .jpg, .jpeg">

                                                <label for="clientImageInput" class="camera-icon">
                                                    <img id="clientImagePreview" src="{{ asset('service_images/' . $data->image) }}" class="client-image">
                                                    <i class="ri-file-image-line"></i>
                                                </label>
                                            </div>
                                            <span class="text-danger">@error('image') {{ $message }} @enderror</span>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="mb-3">
                                                <label class="form-label" for="a8">Content <span class="text-danger">*</span></label>
                                                <textarea class="form-control" name="content" id="a8" placeholder="Enter Service Content" rows="4">{{ old('content', $data->content) }}</textarea>
                                                <span class="text-danger">@error('content') {{ $message }} @enderror</span>
                                            </div>
                                        </div>




                                        <div class="col-sm-12">
                                            <div class="d-flex gap-2 justify-content-end">
                                                <button type="Submit" class="btn btn-primary">
                                                    Update Service
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
            height: 200px;
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
