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
                    Blog List
                </li>
            </ol>
            <!-- Breadcrumb ends -->
        </div>
        <!-- App Hero header ends -->

        <!-- App body starts -->
        <div class="app-body">


            <div class="col-sm-12 mt-5">
                <div class="card mb-3">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title">Blog List</h5>
                        <div>
                            <a href="{{ route('add_blog') }}" class="btn btn-danger">Add Blog</a>
                        </div>
                    </div>
                    @if($blogs->count() > 0)

                    <div class="card-body">
                        <div class="table-outer">
                            <div class="table-responsive">
                                <table class="table align-middle table-hover m-0 truncate">
                                    <thead>
                                        <tr>
                                            <th scope="col">Title</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Content</th>
                                            <th scope="col">Date Created</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($blogs as $blog)
                                        <tr>

                                            <td>{{ $blog->title }}</td>

                                            <td>
                                                <div class="logo">
                                                    <img src="{{ asset('blog_images/' . $blog->image) }}" width="100" height="60" alt="client logo">
                                                </div>
                                            </td>
                                            <td style="text-wrap: wrap;">{{ \Illuminate\Support\Str::words(strip_tags($blog->content), 20, '...') }}</td>
                                            <td>{{$blog->created_at->format('M d, Y h:i A')}}</td>
                                            <td>
                                                <div class="d-flex align-items-center">

                                                    <a class="btn btn-success btn-sm me-2" href="{{ route('edit_blog', $blog->id) }}" onclick="return confirm('Are you sure you want to edit?')">
                                                        <i class="ri-edit-fill"></i>
                                                        <span>Edit</span>
                                                    </a>

                                                    <a class="btn btn-danger btn-sm" href="{{ route('delete_blog', $blog->id) }}" onclick="return confirm('Are you sure you want to delete?')">
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

                        <div class="d-flex justify-content-between mt-4">
                            <div>
                                Showing {{ $blogs->firstItem() }} to {{ $blogs->lastItem() }} of {{ $blogs->total() }} results
                            </div>
                            <div>
                                {{ $blogs->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>

                    @else
                    <div class="table-responsive">
                        <table class="table align-middle table-hover m-0 truncate">
                            <thead>
                                <tr class="text-center ">
                                    <th scope="col" class="text-danger mb-4" colspan="6">No Record Found</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    @endif

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
