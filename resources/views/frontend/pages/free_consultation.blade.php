@extends('frontend.frontend_master')

@section('main')
    <!-- 2. Banner Section -->
    <section class="pt-5 bg-colors">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- Text Section -->
                <div class="text-center col-lg-6 col-md-12 text-lg-start">
                    <p class="text-danger fw-bold">Our Blog</p>
                    <h1 class="text-light fw-bold">Great Tips & Suggestions About <br> SQA</h1>
                </div>

                <!-- Image Section -->
                <div class="mt-4 text-center col-lg-6 col-md-12 mt-lg-0">
                    <img class="blog-img img-fluid" src="{{ asset('frontend/images/news.jpg') }}" alt="Blog News Image">
                </div>
            </div>
        </div>
    </section>

    <!-- 3. card section -->
    <div class="container text-center">
        <p class="pt-5 text-danger fw-bold">Free Meeting</p>
        <h1 class="fw-bold" style="color: #003a6f;">Revolutionize your Software through <br> Quality Assurance with just a
            few clicks</h1>
    </div>

    <div class="container py-5">
        <div class="row g-4 justify-content-center">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="p-3 mb-4 card h-100" style="background-color: #ffe4e6; border-radius: 10px;">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('frontend/images/emoji') }}" alt=""
                            class="border rounded-circle border-primary" style="width: 80px; height: 80px;">
                        <div class="ms-3">
                            <h5 class="mb-0">Essential Infotech</h5>
                            <p class="mb-0 text-muted">Managing Director</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="p-3 mb-4 card h-100" style="background-color: #d5ebff;">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('frontend/images/emoji') }}" alt=""
                            class="border rounded-circle border-primary" style="width: 80px; height: 80px;">
                        <div class="ms-3">
                            <h5>Essential Infotech</h5>
                            <p class="text-muted">Biz & Sales Lead</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="p-3 mb-4 card h-100" style="background-color: #d5ebff;">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('frontend/images/emoji') }}" alt=""
                            class="border rounded-circle border-primary" style="width: 80px; height: 80px;">
                        <div class="ms-3">
                            <h5>Essential Infotech</h5>
                            <p class="text-muted">Business Analyst</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- 8.Free Consultation -->
    <div class="p-5">
        <p class="text-center text-danger"><b>Free Consultation</b></p>
        <h1 class="text-center text-color "><b>Schedule Your Consultation</b></h1>
    </div>
        <!-- Calendly inline widget begin -->

        <style>
            .calendly-widget .element-selector-for-name {
                display: none;
            }
        </style>
    
        <div class="calendly-inline-widget" data-url="https://calendly.com/rifatoffical18/30min"
            style="min-width:320px;height:700px;"></div>
        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
        <!-- Calendly inline widget end -->
    {{-- <section>
        <div class="container my-5">
            <div class="p-5 bg-white shadow-lg row">
                <!-- Left Section with Company Info -->
                <div class="text-center col-md-4 border-end">
                    <img src="{{ asset('frontend/images/EIT2.png') }}" alt="Company Logo" class="mb-4 img-fluid logo-img">
                    <h3 class="fw-bold">Essential Infotech</h3>
                </div>

                <!-- Right Section with Booking Form -->
                <div class="col-md-8">
                    <!-- <h2 class="text-center text-primary">Schedule Your Consultation</h2> -->
                    <form id="booking-form" action="/book" method="POST" class="mt-4">
                        <!-- Fixed Service -->
                        <div class="mb-3">
                            <label for="service" class="form-label">Service:</label>
                            <div class="form-control" readonly>40 Mins Meeting | 40 mins</div>
                            <input type="hidden" id="service" name="service" value="40mins">
                        </div>

                        <!-- Date Picker -->
                        <div class="mb-3">
                            <label for="datetime" class="form-label">Choose Date:</label>
                            <input type="text" id="datetime" name="datetime" class="form-control"
                                placeholder="Select a date" required>
                        </div>

                        <!-- Time Slots -->
                        <div class="mb-3">
                            <label for="timeslot" class="form-label">Pick a Time Slot:</label>
                            <div class="row gx-2 gy-2">
                                <div class="col-4">
                                    <button type="button" class="btn btn-outline-primary w-100 timeslot"
                                        data-time="10:00 am">10:00 AM</button>
                                </div>
                                <div class="col-4">
                                    <button type="button" class="btn btn-outline-primary w-100 timeslot"
                                        data-time="11:00 am">11:00 AM</button>
                                </div>
                                <div class="col-4">
                                    <button type="button" class="btn btn-outline-primary w-100 timeslot"
                                        data-time="12:00 pm">12:00 PM</button>
                                </div>
                                <div class="col-4">
                                    <button type="button" class="btn btn-outline-primary w-100 timeslot"
                                        data-time="01:00 pm">01:00 PM</button>
                                </div>
                                <div class="col-4">
                                    <button type="button" class="btn btn-outline-primary w-100 timeslot"
                                        data-time="02:00 pm">02:00 PM</button>
                                </div>
                                <div class="col-4">
                                    <button type="button" class="btn btn-outline-primary w-100 timeslot"
                                        data-time="03:00 pm">03:00 PM</button>
                                </div>
                                <div class="col-4">
                                    <button type="button" class="btn btn-outline-primary w-100 timeslot"
                                        data-time="04:00 pm">04:00 PM</button>
                                </div>
                            </div>
                        </div>

                        <!-- Hidden input to store selected time -->
                        <input type="hidden" id="selectedTime" name="selectedTime">

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}



    <!-- Accordian -->
    <section class="container py-5">
        <div class="row">
            <!-- Left Section -->
            <div class="mb-4 col-md-6 mb-md-0">
                <div class="row">
                    <div class="mb-3 col-12">
                        <div class="p-4 text-white bg-success">
                            <h1>Lorem ipsum dolor sit amet.</h1>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="p-4 bg-warning text-dark">
                            <h1>Lorem ipsum dolor sit amet.</h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Section - Accordion -->
            <div class="col-md-6">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Accordion Item #1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the
                                collapse plugin adds the appropriate classes that we use to style each element.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Accordion Item #2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until
                                the collapse plugin adds the appropriate classes.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Accordion Item #3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                                collapse plugin adds the appropriate classes.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
