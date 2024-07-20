    @extends('layout.app')
    @section('content')

    <div class="sc-breadcrumb-style sc-pt-80 sc-pb-80">
      <div class="container position-relative">
        <div class="row">
          <div class="col-lg-12">
            <div class="sc-slider-content p-z-idex">
              <div class="sc-slider-subtitle">Home - Terms of Service</div>
              <h1 class="slider-title white-color sc-mb-25 sc-sm-mb-15">Terms of Service</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="privacy-policy-area sc-pt-60 sc-pb-60">
      <div class="container">
        <div class="single-content">
          <div class="privacy-text">
            <h3 class="heading">Effective Date: July, 2024</h3>
          </div>
          <div class="privacy-text">
            <h3 class="heading">1. Acceptance of Terms</h3>
            <p>
              By accessing or using the services provided by Zeltek Limited ("we", "our", "us"), you agree to
              comply with and be bound by these Terms of Service ("Terms"). If you do not agree to these
              Terms, please do not use our services.
            </p>
          </div>


          <div class="privacy-text">
            <h3 class="heading">2. Services</h3>
            <p>Zeltek Limited provides project management and training services. Detailed descriptions of our
              services can be found on our website. We reserve the right to modify or discontinue any service
              at any time without prior notice.</p>
          </div>

          <div class="privacy-text">
            <h3 class="heading">3. User Responsibilities</h3>
            <p>You agree to:</p>
            <ul>
              <li>Provide accurate and complete information when engaging our services.</li>
              <li>Use our services in compliance with all applicable laws and regulations.</li>
              <li>Refrain from using our services for any unlawful or unauthorized purpose.</li>
            </ul>
          </div>

          <div class="privacy-text">
            <h3 class="heading">4. Payment Terms</h3>
            <p>We do not sell or rent your personal information to third parties. We may share your information
              with:</p>
            <ul>
              <li><b>Fees:</b> You agree to pay all fees associated with the services you select.</li>
              <li><b>Billing:</b> Payment is due upon receipt of invoice unless otherwise agreed upon in writing.</li>
              <li><b>Late Payments:</b> We reserve the right to charge interest on overdue amounts and suspend
                services until payment is received.</li>
            </ul>
          </div>

          <div class="privacy-text">
            <h3 class="heading">5. Intellectual Property</h3>
            <p>All content, materials, and services provided by Zeltek Limited, including but not limited to text,
              graphics, logos, and software, are the property of Zeltek Limited or its licensors and are
              protected by intellectual property laws. You agree not to reproduce, distribute, or create
              derivative works from any content or materials without our prior written consent.</p>
          </div>

          <div class="privacy-text">
            <h3 class="heading">6. Confidentiality</h3>
            <p>We are committed to maintaining the confidentiality of your information. Both parties agree to
              keep all confidential information, including but not limited to business strategies, project details,
              and proprietary information, secure and not to disclose it to any third party without prior consent.</p>
          </div>

          <div class="privacy-text">
            <h3 class="heading">7. Limitation of Liability</h3>
            <p>To the fullest extent permitted by law, Zeltek Limited shall not be liable for any direct, indirect,
              incidental, consequential, or punitive damages arising out of or relating to your use of our
              services. This includes, but is not limited to, damages for loss of profits, data, or other intangible
              losses.</p>
          </div>

          <div class="privacy-text">
            <h3 class="heading">8. Indemnification</h3>
            <p>You agree to indemnify and hold Zeltek Limited, its affiliates, officers, agents, and employees
              harmless from any claims, liabilities, damages, losses, and expenses, including legal fees, arising
              out of or in connection with your use of our services or violation of these Terms.</p>
          </div>

          <div class="privacy-text">
            <h3 class="heading">9. Termination</h3>
            <p>We reserve the right to terminate or suspend your access to our services at any time, without
              notice, for conduct that we believe violates these Terms or is harmful to other users or our
              business interests.</p>
          </div>

          <div class="privacy-text">
            <h3 class="heading">11. Changes to Terms</h3>
            <p>We reserve the right to modify these Terms at any time. We will notify you of any changes by
              posting the new Terms on our website and updating the effective date. Your continued use of our
              services after such changes constitutes your acceptance of the new Terms.</p>
          </div>


          <div class="privacy-text">
            <h3 class="heading">10. Governing Law</h3>
            <p>These Terms shall be governed by and construed in accordance with the laws of [Insert
              Jurisdiction], without regard to its conflict of laws principles. Any legal action or proceeding
              arising under these Terms shall be brought exclusively in the courts located in [Insert
              Jurisdiction].</p>
          </div>


          <div class="privacy-text">
            <h3 class="heading">12. Contact Information</h3>
            <p>If you have any questions or concerns about these Terms, please contact us at:</p>
          </div>

          <div class="privacy-text">
            <h3 class="heading">Zeltek Limited</h3>
            <p>Address: {{ $contact->location }}</p>
            <p>Email: {{ $contact->email }}</p>
            <p>Contact: {{ $contact->phone }}</p>
          </div>

          <div class="privacy-text">
            <p>By using our services, you acknowledge that you have read, understood, and agree to be bound
              by these Terms of Service.</p>
          </div>


        </div>
      </div>
    </div>

    @endsection
