    @extends('layout.app')
    @section('content')

    <div class="sc-breadcrumb-style sc-pt-80 sc-pb-80">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sc-slider-content p-z-idex">
                        <div class="sc-slider-subtitle">Home - Event Details</div>
                        <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">Event Details</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .event_details img {
            width: 100%;
            height: 550px;
            object-fit: cover;
            object-position: top;
        }

        @media only screen and (max-width: 767px) {
            .event_details img {
                width: 100%;
                height: 200px;
                object-fit: cover;
                object-position: top;
            }
        }
    </style>

    <div class="sc-blog-section-area sc-blog-section-two sc-pt-100 sc-md-pt-80 sc-pb-80 sc-md-pb-150">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="sc-blog-details-content-area">
                        <div class="sc-blog-item event_details sc-mb-30">
                            <img src="{{ asset('event_images/' . $event_details->image) }}" alt="Event Image">
                            <div class="sc-blog-date-box">
                                <div class="sc-date-box px-2">
                                    <h4 class="title">{{$event_details->created_at->format('d')}}</h4>
                                    <span class="sub-title">{{$event_details->created_at->format('M Y')}}</span>
                                </div>
                            </div>
                            <h2 class="detail-title sc-pt-40 sc-mb-20">{{ $event_details->title }}</h2>
                            <p class="des sc-mb-25">
                                {!! $event_details->content !!}
                            </p>

                        </div>

                        <!-- <div class="contact-box sc-md-mb-10">
                            <h2 class="detail-title sc-mb-20">Leave A Reply</h2>
                            <div class="form-box">
                                <textarea id="message" name="message" placeholder="Comments"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-box">
                                        <input class="from-control" type="text" id="name" name="name" placeholder="Full name *" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <input class="from-control" type="email" id="address" name="email" placeholder="Your email *" required="">
                                </div>
                            </div>
                            <div class="submit-button sc-primary-btn">
                                <input type="submit" value="Post Comment">
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
