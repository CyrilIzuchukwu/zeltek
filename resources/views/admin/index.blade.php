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
                    Dashboard
                </li>
            </ol>
            <!-- Breadcrumb ends -->
        </div>
        <!-- App Hero header ends -->

        <!-- App body starts -->
        <div class="app-body">
            <!-- Row starts -->
            <div class="row gx-3">
                <div class="col-xxl-12 col-sm-12">
                    <div class="card mb-3 bg-2">
                        <div class="card-body">
                            <div class="py-4 px-3 text-white">
                                <h6>{{ $greeting }},</h6>
                                <h2>{{ auth()->user()->name }}</h2>
                                <div class="mt-4 d-flex gap-3">
                                    <div class="d-flex align-items-center">
                                        <div class="icon-box lg bg-arctic rounded-3 me-3">
                                            <i class="ri-admin-fill fs-4"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h2 class="m-0 lh-1">{{ $superAdminCount }}</h2>
                                            <p class="m-0">Super Admin</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="icon-box lg bg-lime rounded-3 me-3">
                                            <i class="ri-group-fill fs-4"></i>
                                        </div>
                                        <div class="d-flex flex-column">
                                            <h2 class="m-0 lh-1">{{ $subAdminCount }}</h2>
                                            <p class="m-0">Admin</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row ends -->

            <!-- Row starts -->
            <div class="row gx-3">
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="p-2 border border-success rounded-circle me-3">
                                    <div class="icon-box md bg-success-subtle rounded-5">
                                        <i class="ri-message-2-fill fs-4 text-success"></i>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <h2 class="lh-1">{{ $inquiryCount }}</h2>
                                    <p class="m-0">Inquiry</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-1">
                                <a class="text-success" href="{{ route('inquiry') }}">
                                    <span>View All</span>
                                    <i class="ri-arrow-right-line text-success ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="p-2 border border-primary rounded-circle me-3">
                                    <div class="icon-box md bg-primary-subtle rounded-5">
                                        <i class="ri-secure-payment-line fs-4 text-primary"></i>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <h2 class="lh-1">{{$testimonialCount}}</h2>
                                    <p class="m-0">Testimonial</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-1">
                                <a class="text-primary" href="{{ route('testimonials') }}">
                                    <span>View All</span>
                                    <i class="ri-arrow-right-line ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="p-2 border border-danger rounded-circle me-3">
                                    <div class="icon-box md bg-danger-subtle rounded-5">
                                        <i class="ri-news-fill fs-4 text-danger"></i>
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <h2 class="lh-1">{{ $blogCount }}</h2>
                                    <p class="m-0">Blog</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between mt-1">
                                <a class="text-danger" href="javascript:void(0);">
                                    <span>View All</span>
                                    <i class="ri-arrow-right-line ms-1"></i>
                                </a>
                            </div>
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
    @endsection
