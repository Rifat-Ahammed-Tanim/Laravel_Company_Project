<section class="contact pb-5 parant">
    <div class="container bg-light">
        <div class="contact-from">
            <div class="row">
                <div class="col-md-7">
                    <p class="text-danger pt-5"><b>Future-Proof Your Software</b></p>
                    <h1 class="text-color "><b>Lorem ipsum dolor sit amet.<br> a Free QA Consultation!</b></h1>

                    <!-- Form starts here -->
                    <form action="{{ route('qaConsultation.submit') }}" method="POST" class="p-5">
                        @csrf  <!-- Add CSRF token for security -->
                        
                        <div class="mb-3">
                            <label class="form-label">Your Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3 d-flex flex-column">
                            <label class="form-label">Message</label>
                            <textarea name="message" class="form-control" rows="4" required></textarea>
                        </div>
                        <div id="emailHelp" class="form-text">This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <!-- Form ends here -->

                </div>

                <div class="col-md-5">
                    <p class="text-danger pt-5"><b>Who are going to assist you!</b></p>
                    <!-- Card examples go here -->
                    <!-- ... -->
                </div>
            </div>
        </div>
    </div>
</section>
