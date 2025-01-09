@extends('frontend.frontend_master')


@section('main')
    <!-- 2. Banner Section -->
    <section>
        <div>
            <div class="container">
                <div class="d-flex flex-column flex-md-row align-items-center">
                    <div><a class="px-md-3 text-decoration-none" href="./index.html" style="color: #64748b;">Home</a></div>
                    <div><span style="color: #64748b;"> / Find Jobs</span></div>
                </div>

                <!-- Image Section -->
                <div class="container mt-4">
                    <img class="rounded-2 img-fluid" src="./frontend/images/qajobs-find-jobs-bg-v2.jpg" alt="Find Jobs">
                    <h1 class="text-light fw-bold job-text position-absolute top-50 start-50 translate-middle">All published
                        jobs</h1>
                </div>

                <!-- Search Bar -->
                <div class="container my-5">
                    <div class="row bg-light p-4 search justify-content-around align-items-center">
                        <div class="col-12 col-md-10">
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control" placeholder="Search..." aria-label="Search">

                                <!-- Choose Location Dropdown -->
                                <select class="form-select" aria-label="Choose Location">
                                    <option selected>Choose Location</option>
                                    <option value="1">Location 1</option>
                                    <option value="2">Location 2</option>
                                    <option value="3">Location 3</option>
                                </select>

                                <button class="btn btn-primary" type="button">Search</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- 3. job filter section -->
    <section>
        <div class="container p-5">
            <div class="row">
                <!-- Filter Section -->
                <div class="col-md-3">
                    <div class="card p-3">
                        <h5>Category</h5>
                        <select class="form-select mb-3">
                            <option selected>Select...</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>

                        <h5>Vacancy Type</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="hybridCheck">
                            <label class="form-check-label" for="hybridCheck">Hybrid</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="onSiteCheck">
                            <label class="form-check-label" for="onSiteCheck">On Site</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="remoteCheck">
                            <label class="form-check-label" for="remoteCheck">Remote</label>
                        </div>

                        <h5>Vacancy Status</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="fullTimeCheck">
                            <label class="form-check-label" for="fullTimeCheck">Full Time</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="internCheck">
                            <label class="form-check-label" for="internCheck">Intern</label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="partTimeCheck">
                            <label class="form-check-label" for="partTimeCheck">Part Time</label>
                        </div>

                        <h5>Deadline</h5>
                        <div class="mb-3">
                            <input type="date" class="form-control mb-2" placeholder="From">
                            <input type="date" class="form-control" placeholder="To">
                        </div>

                        <button class="btn btn-primary w-100">Apply</button>
                    </div>
                </div>

                <!-- Job Listings Section -->
                <div class="col-md-9">
                    <h3 class="mb-4">Available Jobs</h3>

                    <!-- Job Card 1 -->
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-3 d-flex align-items-center justify-content-center">
                                <img src="./frontend/images/logo.webp" class="img-fluid" alt="company logo">
                            </div>
                            <div class="col-md-9">
                                <div class="card-body">
                                    <h5 class="card-title">API Test Engineer (SQA/Sr. SQA Engineer)</h5>
                                    <p class="card-text">
                                        <strong>Company:</strong> QA Harbor Limited<br>
                                        <strong>Type:</strong> Full Time<br>
                                        <strong>Experience:</strong> 3Y to 6Y<br>
                                        <strong>Deadline:</strong> 15.09.2024
                                    </p>
                                    <button class="btn btn-outline-primary me-2">Save</button>
                                    <button class="btn btn-primary">View Details</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add more job cards as needed -->
                    <!-- job list -->
                    <div class="container my-5">

                        <div class="card my-4">
                            <div class="row g-0 p-3">
                                <div class="col-md-2 text-center">
                                    <img src="./frontend/images/logo.webp" class="img-fluid" alt="Company Logo"
                                        style="max-width: 80%;">
                                </div>
                                <div class="col-md-10">
                                    <div class="card-body">
                                        <h5 class="card-title">API Test Engineer (SQA/Sr. SQA Engineer)</h5>
                                        <p class="card-text">
                                            <a href="#" class="text-primary">QA Harbor Limited</a>
                                            <span class="badge bg-success">Full Time</span>
                                            <span class="badge bg-warning text-dark">On Site</span>
                                            <span class="float-end text-muted">Negotiable</span>
                                        </p>
                                        <p class="card-text">
                                            Key Responsibilities: Conducting API testing using tools such as Postman,
                                            SoapUI, and RestAssured. Developing and maintaining automation scripts...
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <span class="badge bg-dark">Experience: 3Y to 6Y</span>
                                            <span class="badge bg-dark">Deadline: 15.09.2024</span>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-light me-2"><i class="bi bi-heart"></i>
                                                    Save</a>
                                                <a href="#" class="btn btn-primary">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
