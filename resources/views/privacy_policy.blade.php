    @extends('layout.app')
    @section('content')

    <div class="sc-breadcrumb-style sc-pt-80 sc-pb-80">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sc-slider-content p-z-idex">
                        <div class="sc-slider-subtitle">Home - Privacy Policy</div>
                        <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">Privacy Policy</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="privacy-policy-area sc-pt-60 sc-pb-60">
        <div class="container">
            <div class="single-content">
                <div class="privacy-text">
                    <h3 class="heading">1. Introduction</h3>
                    <p>
                        Zeltek Limited ("we", "our", "us") is committed to protecting the privacy of our clients, website
                        visitors, and users of our services. This Privacy Policy outlines how we collect, use, disclose, and
                        protect your personal information.
                    </p>
                </div>


                <div class="privacy-text">
                    <h3 class="heading">2. Information We Collect</h3>
                    <p>We may collect the following types of information:</p>
                    <ul>
                        <li><b>Personal Information:</b> Name, email address, phone number, job title, and company name.</li>
                        <li> <b>Payment Information:</b> Credit card details and billing information.</li>
                        <li><b>Technical Information:</b> IP address, browser type, operating system, and usage data.</li>
                        <li><b>Other Information:</b> Any other information you provide to us voluntarily, such as through surveys
                            or contact forms.</li>

                    </ul>
                </div>

                <div class="privacy-text">
                    <h3 class="heading">3. How We Use Your Information</h3>
                    <p>We use the information we collect for the following purposes:</p>
                    <ul>
                        <li><b>Service Delivery:</b> To provide and manage our project management and training services.</li>
                        <li> <b>Communication:</b> To communicate with you about our services, updates, and promotional offers.</li>
                        <li><b>Billing and Payments:</b> To process payments and manage billing.</li>
                        <li><b>Improvement:</b> To improve our services, website, and user experience.</li>
                        <li><b>Compliance:</b> To comply with legal obligations and protect our rights.</li>

                    </ul>
                </div>

                <div class="privacy-text">
                    <h3 class="heading">4. Sharing Your Information</h3>
                    <p>We do not sell or rent your personal information to third parties. We may share your information
                        with:</p>
                    <ul>
                        <li><b>Service Providers:</b> Third-party vendors who assist us in providing our services, such as payment
                            processors and IT support.</li>
                        <li> <b>Legal Obligations:</b> Authorities if required by law or to protect our rights and comply with legal
                            processes.</li>
                        <li><b>Business Transfers:</b> In the event of a merger, acquisition, or sale of all or a portion of our assets.</li>

                    </ul>
                </div>

                <div class="privacy-text">
                    <h3 class="heading">5. Data Security</h3>
                    <p>We implement appropriate technical and organizational measures to protect your personal
                        information from unauthorized access, use, alteration, and destruction.</p>
                </div>

                <div class="privacy-text">
                    <h3 class="heading">6. Data Retention</h3>
                    <p>We retain your personal information only for as long as necessary to fulfill the purposes for
                        which it was collected and to comply with legal and regulatory requirements</p>
                </div>

                <div class="privacy-text">
                    <h3 class="heading">7. Sharing Your Information</h3>
                    <p>You have the following rights regarding your personal information:</p>
                    <ul>
                        <li><b>Access:</b> Request access to your personal information.</li>
                        <li> <b>Correction:</b> Request correction of inaccurate or incomplete information.</li>
                        <li><b>Deletion:</b> Request deletion of your personal information, subject to legal obligations.</li>

                        <li><b>Objection:</b> Object to the processing of your personal information in certain circumstances.</li>

                        <li><b>Data Portability:</b> Request transfer of your personal information to another organization.</li>
                    </ul>
                </div>

                <div class="privacy-text">
                    <h3 class="heading">8. Cookies</h3>
                    <p>Our website uses cookies to enhance your user experience. You can control the use of cookies
                        through your browser settings.</p>
                </div>

                <div class="privacy-text">
                    <h3 class="heading">9. Changes to This Privacy Policy</h3>
                    <p>We may update this Privacy Policy from time to time. We will notify you of any changes by
                        posting the new policy on our website and updating the effective date.</p>
                </div>


                <div class="privacy-text">
                    <h3 class="heading">10. Contact Us</h3>
                    <p>If you have any questions or concerns about this Privacy Policy or our data practices, please
                        contact us at:</p>
                </div>

                <div class="privacy-text">
                    <h3 class="heading">Zeltek Limited</h3>
                    <p>Address: {{ $contact->location }}</p>
                    <p>Email: {{ $contact->email }}</p>
                    <p>Contact: {{ $contact->phone }}</p>
                </div>

                <div class="privacy-text">
                    <p>By using our services or visiting our website, you agree to the terms of this Privacy Policy</p>
                </div>


            </div>
        </div>
    </div>

    @endsection
