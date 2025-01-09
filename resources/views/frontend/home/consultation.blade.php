<section>
    <div class="pt-5">
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
    {{-- <div class="container my-5">
        <div class="p-5 bg-white shadow-lg row">
            <!-- Left Section with Company Info -->
            <div class="text-center col-md-4 border-end">
                <img src="./frontend/images/EIT2.png" alt="Company Logo" class="mb-4 img-fluid logo-img">
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
    </div> --}}
</section>
