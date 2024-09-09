    @extends('layout.app')
    @section('content')

    <div class="sc-breadcrumb-style sc-pt-80 sc-pb-80">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sc-slider-content p-z-idex">
                        <div class="sc-slider-subtitle">Home - Events</div>
                        <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">Events</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="sc-blog-section-area sc-pt-100 sc-md-pt-80 sc-pb-60 sc-md-pb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                    <div class="sc-heading-area sc-mb-35 text-center">
                        <span class="sub-title"><i class="icon-line me-2"></i>Events And Upcoming Events</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sc-blog-content-area">
                        <div class="row">
                            @if($all_events->isEmpty())
                            <div class="col-12 text-center">
                                <p>No record of Event available.</p>
                            </div>
                            @else
                            @foreach($all_events as $single_event)
                            <div class="col-md-6">
                                <div class="sc-blog-style2 blog-area sc-mb-70">
                                    <div class="blog-img">
                                        <a href="{{ route('event_details', $single_event->id) }}"><img src="{{ asset('event_images/' . $single_event->image) }}" alt="Event Image"></a>
                                    </div>
                                    <div class="sc-blog-date-box">
                                        <div class="sc-date-box px-2">
                                            <h4 class="title">{{ $single_event->created_at->format('d') }}</h4>
                                            <span class="sub-title">{{ $single_event->created_at->format('M Y') }}</span>
                                        </div>
                                    </div>
                                    <div class="sc-blog-text">
                                        <h3>
                                            <a class="title" href="{{ route('event_details', $single_event->id) }}">{{ $single_event->title }}</a>
                                        </h3>
                                        <p class="des">
                                            {{ \Illuminate\Support\Str::words(strip_tags($single_event->content), 20, '...') }}
                                        </p>
                                        <div class="sc-blog-btn">
                                            <a class="sc-transparent-btn" href="{{ route('event_details', $single_event->id) }}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>

                        @if($all_events->isNotEmpty())
                        <div class="row">
                            <div class="d-flex justify-content-between">
                                <div>
                                    Showing {{ $all_events->firstItem() }} to {{ $all_events->lastItem() }} of {{ $all_events->total() }} results
                                </div>
                                <div>
                                    {{ $all_events->links('pagination::bootstrap-4') }}
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>



    @endsection
