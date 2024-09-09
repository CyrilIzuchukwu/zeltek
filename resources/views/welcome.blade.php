    @extends('layout.app')
    @section('content')
    <!--=========== Slider Section Start =========-->
    <section class="sc-slider-section sc-slider-style2">
        <div class="swiper sc-slider-2">
            <div class="swiper-wrapper">
                <!-- Slide One -->
                <div class="swiper-slide">
                    <div class="slide-image-2 sc-image-layer"></div>
                    <div class="container position-relative">
                        <div class="sc-slider-content p-z-idex">
                            <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">Flawless <span>Execution,</span> Every Time</h1>
                            <div class="slider-desc white-dark-color sc-mb-40 sc-sm-mb-25">
                                Zeltek Limited is a premier project management and training company renowned for its flawless
                                execution and exceptional service delivery.
                            </div>
                            <div class="slider-btn-area d-flex align-items-center">
                                <div class="sc-slider-btn">
                                    <a class="sc-primary-btn p-z-idex2" href="contact.html">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="shape-overly-one"></div> -->
                    </div>
                </div>

                <!-- Slide two -->
                <div class="swiper-slide">
                    <div class="slide-image-3 sc-image-layer"></div>
                    <div class="container position-relative">
                        <div class="sc-slider-content p-z-idex">
                            <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">Flawless <span>Execution,</span> Every Time</h1>
                            <div class="slider-desc white-dark-color sc-mb-40 sc-sm-mb-25">
                                We specialize in executing a wide range of projects
                                for organizations, encompassing both tech and non-tech initiatives.
                            </div>
                            <div class="slider-btn-area d-flex align-items-center">
                                <div class="sc-slider-btn">
                                    <a class="sc-primary-btn p-z-idex2" href="contact.html">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="shape-overly-one"></div> -->
                    </div>
                </div>
                <!-- Slide three -->
                <div class="swiper-slide">
                    <div class="slide-image-4 sc-image-layer"></div>
                    <div class="container position-relative">
                        <div class="sc-slider-content p-z-idex">
                            <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">Flawless <span>Execution,</span> Every Time</h1>
                            <div class="slider-desc white-dark-color sc-mb-40 sc-sm-mb-25">
                                Our expertise ensures that
                                every project is completed to the highest standards, meeting and exceeding client expectations.
                            </div>
                            <div class="slider-btn-area d-flex align-items-center">
                                <div class="sc-slider-btn">
                                    <a class="sc-primary-btn p-z-idex2" href="contact.html">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="shape-overly-one"></div> -->
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!--=========== Slider Section End =========-->

    <!--=========== overview Section Start =========-->
    <section class="sc-statistics-section-area gray-bg-color sc-pb-80">
        <div class="container">
            <div class="sc-statistics-style white-bg-color">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sc-statistics-left-content ai about">
                            <div class="sc-heading-area sc-mb-40">
                                <h2 class="title">Building Good Foundation Success Business</h2>
                            </div>
                            <div class="sc-ab-image" data-sal="slide-up" data-sal-duration="800" data-sal-delay="250">
                                <img class="sc-border-radius" src="assets/images/about/ab-image.jpg" alt="Statistics" />
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="sc-statistics-left-content">
                            <div class="sc-heading-area sc-mb-35">
                                <span class="sub-title"><i class="icon-line me-2"></i> About Us</span>
                            </div>
                            <div class="">
                                <div class="sc-global-content-box d-flex align-items-center sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="500">
                                    <div class="sc-global-text">
                                        <p class="des">
                                            Zeltek Limited is a premier project management and training company renowned for its flawless
                                            execution and exceptional service delivery. We specialize in executing a wide range of projects
                                            for organizations, encompassing both tech and non-tech initiatives. Our expertise ensures that
                                            every project is completed to the highest standards, meeting and exceeding client expectations.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="sc-about-auother-box d-flex align-items-end justify-content-end sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="250">

                                <div class="sc-about-btn">
                                    <a class="sc-primary-btn" href="/about_us">Learn More</a>
                                </div>

                            </div>


                            <div class="about-mission">
                                <div class="sc-global-text">
                                    <p class="about-mission-heading">Mission Statement</p>
                                    <p class="des">
                                        "At Zeltek Limited, our mission is to deliver unparalleled project management and training
                                        solutions that drive excellence and innovation. We are dedicated to empowering our clients with
                                        the skills and strategies needed to achieve their goals, ensuring flawless execution and
                                        sustainable success in every endeavor."
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== overview Section End =========-->


    <!--=========== core value Section Start =========-->
    <div class="sc-service-section-five core-value-section sc-pt-60 sc-md-pt-40 sc-pb-50 sc-md-pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                    <div class="sc-heading-area sc-mb-60 sc-md-mb-40 text-center">
                        <h4 class="sub-title"><i class="icon-line me-2"></i> Our Core Values </h4>
                    </div>
                </div>
            </div>
            <!-- Swiper -->
            <div class="swiper services_scroll_slider sc-pagination-active swiper-initialized swiper-horizontal swiper-pointer-events">
                <div class="swiper-wrapper" id="swiper-wrapper-bea191023ce88cbd2" aria-live="off" style="transform: translate3d(-2696px, 0px, 0px); transition-duration: 0ms;">

                    <div class="swiper-slide" data-swiper-slide-index="1" style="width: 419.333px; margin-right: 30px;" role="group" aria-label="2 / 8">
                        <div class="sc-service-style-four sc-mb-25 text-center">
                            <i class="p-z-idex position-relative icomoon icon-stragy"></i>
                            <h4 class="title p-z-idex position-relative">
                                <a class="title" href="service-details.html">Excellence</a>
                            </h4>
                            <p class="des p-z-idex position-relative">We strive for the highest standards in everything we do, ensuring flawless execution and exceptional service delivery.</p>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="2" style="width: 419.333px; margin-right: 30px;" role="group" aria-label="3 / 8">
                        <div class="sc-service-style-four sc-mb-25 text-center">
                            <i class="p-z-idex position-relative icomoon icon-human"></i>
                            <h4 class="title p-z-idex position-relative">
                                <a class="title" href="service-details.html">Innovation</a>
                            </h4>
                            <p class="des p-z-idex position-relative">We embrace creativity and encourage innovative thinking to develop cutting-edge solutions and stay ahead in the industry.</p>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="3" style="width: 419.333px; margin-right: 30px;" role="group" aria-label="4 / 8">
                        <div class="sc-service-style-four sc-mb-25 text-center">
                            <i class="p-z-idex position-relative icomoon icon-risk"></i>
                            <h4 class="title p-z-idex position-relative">
                                <a class="title" href="service-details.html">Collaboration</a>
                            </h4>
                            <p class="des p-z-idex position-relative">We believe in the power of teamwork and foster a collaborative
                                environment where diverse perspectives are valued and integrated.</p>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="4" style="width: 419.333px; margin-right: 30px;" role="group" aria-label="5 / 8">
                        <div class="sc-service-style-four sc-mb-25 text-center">
                            <i class="p-z-idex position-relative icomoon icon-bussness2"></i>
                            <h4 class="title p-z-idex position-relative">
                                <a class="title" href="service-details.html">Customer-Centricity</a>
                            </h4>
                            <p class="des p-z-idex position-relative">Our clients are at the heart of our business. We prioritize their needs and work tirelessly to exceed their expectations.</p>
                        </div>
                    </div>
                    <div class="swiper-slide" data-swiper-slide-index="5" style="width: 419.333px; margin-right: 30px;" role="group" aria-label="6 / 8">
                        <div class="sc-service-style-four sc-mb-25 text-center">
                            <i class="p-z-idex position-relative icomoon icon-stragy"></i>
                            <h4 class="title p-z-idex position-relative">
                                <a class="title" href="service-details.html">Continuous Improvement</a>
                            </h4>
                            <p class="des p-z-idex position-relative">We are committed to ongoing learning and development,
                                constantly seeking ways to improve our skills, services, and processes.</p>
                        </div>
                    </div>

                </div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-bea191023ce88cbd2"></div>
                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-bea191023ce88cbd2"></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </div>
    <!--=========== core value Section ends =========-->


    <div class="sc-global-section-area aii sc-pb-90  ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6  order-2 order-md-1 sal-animate" data-sal="slide-right" data-sal-duration="800">
                    <div class="sc-global-item ai sc-md-mb-55">
                        <div class="sc-heading-area sc-mb-30">
                            <span class="sub-title white-sub-title"><i class="icon-line me-2"></i>Services</span>
                        </div>

                        <div class="sc-global-content-box d-flex align-items-center sal-animate" data-sal="slide-up" data-sal-duration="800" data-sal-delay="500">

                            <div class="sc-global-text">
                                <h4>
                                    <p class="sub-title white-color"> Project <span class="primary-color">Management</span> Services</p>
                                </h4>
                                <p class="des">
                                    At Zeltek Limited, we offer comprehensive project management services designed to meet the
                                    diverse needs of both tech and non-tech organizations. Our team of seasoned professionals is
                                    equipped with the relevant skills and extensive experience necessary to deliver exceptional
                                    results, regardless of the project's nature or complexity.
                                </p>

                                <p class="des">
                                    Our approach is adaptable, employing both Agile and Waterfall methodologies to ensure that we
                                    can tailor our strategies to best suit each project's unique requirements. This flexibility allows us to manage a wide range of projects effectively, from software development and IT infrastructure
                                    to process improvements and strategic initiatives.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-md-2 sal-animate" data-sal="slide-left" data-sal-duration="800">
                    <div class="service-image-right">
                        <img src="assets/images/project/global-img.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=========== Trainig Service Section Start =========-->
    <div class="sc-team-section-area sc-long-map sc-pb-100 sc-md-pb-80">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="sc-heading-area sc-mb-55 text-center">
                        <span class="sub-title"><i class="icon-line me-2"></i> Our Training Services</span>
                    </div>
                    <div class="sc-global-text training-service-sub-header">
                        <p class="des text-center">
                            We offer a comprehensive suite of training programs designed to enhance the skills and
                            competencies of professionals across various domains.
                        </p>
                    </div>

                </div>
            </div>
            <div class="swiper sc-pagination-active sc-swiper-slider swiper-initialized swiper-horizontal swiper-pointer-events">
                <div class="swiper-wrapper" id="swiper-wrapper-10a787fa1f59bd906" aria-live="off" style="transform: translate3d(-3357.5px, 0px, 0px); transition-duration: 0ms;">

                    @foreach($trainingServices as $sts)
                    <div class="swiper-slide" data-swiper-slide-index="0" style="width: 310.75px; margin-right: 25px;" role="group" aria-label="1 / 8">
                        <div class="sc-team-item text-center">
                            <div class="item-img">
                                <div class="team-image">
                                    <a href=""><img src="{{ asset('service_images/' . $sts->image) }}" alt="Team"></a>
                                </div>
                                <div class="sc-team-content">
                                    <h4>
                                        <p class="title">{{ $sts->service_name }}</p>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-3a031d2fb3633eb1"></div>
                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-3a031d2fb3633eb1"></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </div>
    <!--=========== Trainig Service Section Ends =========-->

    <!--=========== 8 step approach Section Start =========-->
    <div class="sc-team-section-four sc-pt-80 sc-md-pt-30 sc-pb-80" style="background: #000;">
        <div class="container">
            <div class="row">
                <div class="sc-global-text d-flex align-content-center justify-content-center mb-3">
                    <h4 class="text-center">
                        <p class="approach-header sub-title white-color"> Our <span class="primary-color"> 8 steps</span> Approach</p>
                    </h4>
                </div>

                <div class="step-approach">
                    <div class="step-grid">
                        <div class="int_key_item">
                            <div class="step-icon">
                                <i class="icon-bussness2"></i>
                            </div>
                            <h4>Comprehensive Planning</h4>
                        </div>
                        <div class="int_key_item">
                            <div class="step-icon">
                                <i class="icon-decide"></i>
                            </div>
                            <h4>Agile Methodology</h4>
                        </div>
                        <div class="int_key_item">
                            <div class="step-icon">
                                <i class="icon-financial"></i>
                            </div>
                            <h4>Waterfall Methodology</h4>
                        </div>
                        <div class="int_key_item">
                            <div class="step-icon">
                                <i class="icon-risk"></i>
                            </div>
                            <h4>Risk Management</h4>
                        </div>
                        <div class="int_key_item">
                            <div class="step-icon">
                                <i class="icon-human"></i>
                            </div>
                            <h4> Clear Communication</h4>
                        </div>
                        <div class="int_key_item">
                            <div class="step-icon">
                                <i class="icon-satisfied"></i>
                            </div>
                            <h4>Quality Assurance</h4>
                        </div>
                        <div class="int_key_item">
                            <div class="step-icon">
                                <i class="icon-expericence"></i>
                            </div>
                            <h4>Continuous Monitoring and Reporting</h4>
                        </div>
                        <div class="int_key_item">
                            <div class="step-icon">
                                <i class="icon-stragy"></i>
                            </div>
                            <h4>Client-Centric Approach</h4>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!--=========== 8 step approach Section ends =========-->


    <!--=========== partners Section Start =========-->
    <div class="sc-testimonial-section-three">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="sc-heading-area sc-mb-35 p-z-idex">
                        <span class="sub-title"><i class="icon-line"></i> Our Client Testimonials</span>
                    </div>
                </div>
            </div>
            <div class="swiper sc-pagination-active-30 sc-blog-slider swiper-initialized swiper-horizontal swiper-pointer-events">
                <div class="swiper-wrapper" id="swiper-wrapper-38101a1acdb6ffc22" aria-live="off" style="transform: translate3d(-2692px, 0px, 0px); transition-duration: 0ms;">

                    @foreach($testimonialView as $testview)
                    <div class="swiper-slide" data-swiper-slide-index="1" style="width: 418.667px; margin-right: 30px;" role="group" aria-label="2 / 6">
                        <div class="sc-test-item">
                            <div class="sc-testimonial-text">
                                <h6 class="quote">
                                    <i class="icon-quote-icon primary-color"></i>
                                </h6>
                                <p class="des">
                                    {{ \Illuminate\Support\Str::words($testview->testimonial, 35, '...') }}
                                </p>
                            </div>
                            <div class="sc-auother-text d-flex align-items-center">
                                <div class="sc-auother-image sc-mr-15">
                                    <img src="{{ asset('client_logos/' . $testview->client_logo) }}" width="100" height="65" alt="Icon">
                                </div>
                                <div class="sc-auother-header">
                                    <h5>{{ $testview->client_name }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-38101a1acdb6ffc22"></div>
                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-38101a1acdb6ffc22"></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </div>
    <!--=========== partners Section ends =========-->

    @endsection
