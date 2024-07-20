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
                    Inquiry List
                </li>
            </ol>
            <!-- Breadcrumb ends -->
        </div>
        <!-- App Hero header ends -->

        <!-- App body starts -->
        <div class="app-body">
            <div class="col-sm-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title">Inquiry List</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-outer">
                            <div class="table-responsive">
                                <table class="table align-middle table-hover m-0 truncate">
                                    <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Subject</th>
                                            <th scope="col">Message</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($inquiries as $inq)
                                        <tr class="{{ $inq->is_read ? '' : 'unread-inquiry' }}">

                                            <td>{{ ucfirst($inq->name) }}</td>
                                            <td>{{ $inq->email }}</td>
                                            <td>{{$inq->created_at->format('M d, Y h:i:s A')}}</td>
                                            <td>{{ $inq->subject }}</td>
                                            <td style="text-wrap: wrap;">{{ $inq->message }}</td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2">

                                                    <a class="btn btn-info btn-sm" href="{{ route('reply_inq', $inq->id) }}" onclick="return confirm(' Do you want to reply this inquiry?')">
                                                        <i class="ri-reply-fill"></i>
                                                        <span>Reply</span>
                                                    </a>

                                                    <a class="btn btn- btn-sm" href="{{ route('view_inq', $inq->id) }}">
                                                        <i class="ri-eye-2-line"></i>
                                                        <span>View</span>
                                                    </a>

                                                    <a class="btn btn-danger btn-sm" href="{{ route('delete_inq', $inq->id) }}" onclick="return confirm('Delete message?')">
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
        <style>
            .unread-inquiry {
                background-color: red !important;
            }
        </style>

        <!-- App footer starts -->
        <div class="app-footer bg-white">
            <span>© Zeltek Super Admin 2024</span>
        </div>
        <!-- App footer ends -->

    </div>

    @endsection
