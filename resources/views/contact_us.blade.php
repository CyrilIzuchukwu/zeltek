    @extends('layout.app')
    @section('content')

    <div class="sc-breadcrumb-style sc-pt-70 sc-pb-70">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sc-slider-content p-z-idex">
                        <div class="sc-slider-subtitle">Home - Contact Us</div>
                        <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="sc-contact-section sc-pt-100 sc-md-pt-70 sc-pb-80 sc-md-pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sc-md-pr-10">
                        <div class="sc-heading-area sc-pr-30 sc-pt-5">
                            <span class="sub-title"><i class="icon-line me-2"></i>24/7 Customer Support</span>
                            <h2 class="title">Need Assistance? <span class="primary-color">Contact Us</span></h2>
                        </div>
                        <div class="sc-contact-info sc-mt-35 sc-mb-20">
                            <ul class="list-gap white-color">
                                <li><i class="icon-phone-2"></i><a href="tel:+1(520)2563650"> {{ $contact->phone ?? '' }}</a></li>

                                <li><i class="icon-mail"></i><a href="mailto:zeltekgroup@gmail.com">{{ $contact->email ?? '' }}</a></li>

                                <li>
                                    <i class="icon-gap_2"></i>
                                    <p>{{ $contact->location ?? '' }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
                <div class="col-lg-6">
                    <div class="contact-box sc-md-mb-10 sc-md-mt-45">
                        <h4 class="contact-title sc-pb-15">Contact Form</h4>
                        <form id="contactForm" method="POST">

                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-box">
                                        <label for="">Name <span class="text-danger">*</span></label>
                                        <input class="from-control" value="{{ old('name') }}" type="text" id="name" name="name" placeholder="Full name" required="">
                                        <span class="text-danger">@error('name'){{ $message }} @enderror </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Email <span class="text-danger">*</span></label>
                                    <input class="from-control" value="{{ old('email') }}" type="email" id="address" name="email" placeholder="Your email" required="">
                                    <span class="text-danger">@error('email'){{ $message }} @enderror </span>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-box">
                                        <label for="">Phone No <span class="text-danger">*</span></label>
                                        <input class="from-control" value="{{ old('phone') }}" type="text" id="phone" name="phone" placeholder="Your phone">
                                        <span class="text-danger">@error('phone'){{ $message }} @enderror </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Subject <span class="text-danger">*</span></label>
                                    <input class="from-control" value="{{ old('subject') }}" type="text" id="subject" name="subject" placeholder="Subject">
                                    <span class="text-danger">@error('subject'){{ $message }} @enderror </span>
                                </div>

                                <div class="form-box">
                                    <label for="">Message <span class="text-danger">*</span></label>
                                    <textarea id="message" name="message" placeholder="Your Request">{{ old('message') }}</textarea>
                                    <span class="text-danger">@error('message'){{ $message }} @enderror </span>
                                </div>
                            </div>
                            <div class="submit-button sc-primary-btn">
                                <input type="submit" value="Send Message">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- map  -->
    <div class="sc-google-map sc-pb-80">
        <div class="sc-gray-icon"><i class="icon-gap_2"></i></div>
        <iframe height="550" src="https://maps.google.com/maps?width=100%25&amp;height=550&amp;hl=en&amp;q=Prime%20Waters%20Garden%20Estate,%20Lekki%20Phase%201,%20Lagos%20Nigeria+(Zeltek)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
    </div>

    <!-- <div style="width: 100%"><iframe width="100%" height="650" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=650&amp;hl=en&amp;q=Prime%20Waters%20Garden%20Estate,%20Lekki%20Phase%201,%20Lagos%20Nigeria+(Zeltek)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps trackers</a></iframe></div> -->


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (session('message'))
    <script>
        swal("Successful!", "{{ session('message') }}!", "success");
    </script>
    @endif
    @if (session('error'))
    <script>
        swal("Error!", "{{ session('error') }}!", "warning");
    </script>
    @endif
    @if (Session::has('success'))
    <script>
        swal("Successful!", "{{ Session::get('success') }}!", "success");
    </script>
    @endif

    @if (Session::has('error'))
    <script>
        swal("Error!", "{{ Session::get('error') }}!", "warning");
    </script>
    @endif


    <script src="{{ asset('admin_assets/assets/js/jquery.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#contactForm').on('submit', function(e) {
                e.preventDefault(); // Prevent default form submission

                var formData = $(this).serialize(); // Serialize form data
                var form = this; // Store reference to the form

                $.ajax({
                    type: 'POST',
                    url: '{{ route("make_contact") }}', // URL to submit the form data
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            // Display SweetAlert success message
                            swal("Successful!", response.success, "success")
                                .then((value) => {
                                    // Clear the form fields after closing the SweetAlert box
                                    $(form).find('input[type=text], input[type=email], textarea').val('');
                                });
                        }
                    },
                    error: function(xhr) {
                        // Handle errors
                        if (xhr.responseJSON && xhr.responseJSON.errors) {
                            let errors = xhr.responseJSON.errors;
                            let message = "Something went wrong.";
                            if (errors) {
                                message = Object.values(errors).map((e) => e.join('\n')).join('\n');
                            }
                            swal("Error!", message, "error");
                        } else {
                            swal("Error!", "Failed to submit. Please try again.", "error");
                        }
                    }
                });
            });
        });
    </script>


    @endsection
