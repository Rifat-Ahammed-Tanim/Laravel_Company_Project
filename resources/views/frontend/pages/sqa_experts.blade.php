@extends('frontend.frontend_master')

@section('main')
    <!-- 2. Banner Section -->
    <section class="bg-colors">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Section -->
                <div class="text-center col-12 col-lg-6 text-lg-start">
                    <p class="text-danger fw-bold">{{$expect->title}}</p>
                    <h1 class="text-light fw-bold">{{$expect->description}}</h1>
                </div>

                <!-- Image Section -->
                <div class="mt-4 text-center col-12 col-lg-6 mt-lg-0">
                    <img class="mt-5 img-fluid blog-img" src="{{ asset($expect->image) }}" alt="">
                </div>
            </div>
        </div>
    </section>


    <!-- card section -->
    <section class="py-5 services-section">
        <div class="container">
            <div class="mb-5 text-center">
                <h6 class="text-danger fw-bold">Software Quality Assurance</h6>
                <h2 class="fw-bold">Our Services</h2>
                <p class="text-muted">
                    Expectations are high, and so is our commitment to quality. Collaborate with us to streamline your
                    software
                    development process, enhance user satisfaction, and minimize defects.
                </p>
            </div>

            <!-- First Row of Services -->
            <div class="text-center row">
                <div class="mb-4 col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="p-4 service-box">
                        <div class="mb-3 icon">
                            <i class="fas fa-search fa-3x text-danger"></i>
                        </div>
                        <h5>On Demand QA Services</h5>
                        <p class="text-muted">
                            Access flexible and reliable quality assurance and testing for seamless user experiences.
                        </p>
                    </div>
                </div>
                <div class="mb-4 col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="p-4 service-box">
                        <div class="mb-3 icon">
                            <i class="fas fa-tools fa-3x text-success"></i>
                        </div>
                        <h5>Full-Service Software QA</h5>
                        <p class="text-muted">
                            Long-term support to ensure top-notch software quality and enhance business.
                        </p>
                    </div>
                </div>
                <div class="mb-4 col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="p-4 service-box">
                        <div class="mb-3 icon">
                            <i class="fas fa-check-circle fa-3x text-primary"></i>
                        </div>
                        <h5>QA Audit & Advisory</h5>
                        <p class="text-muted">
                            Ensuring compliance and optimizing software usage through comprehensive assessment and analysis.
                        </p>
                    </div>
                </div>
                <div class="mb-4 col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="p-4 service-box">
                        <div class="mb-3 icon">
                            <i class="fas fa-laptop-code fa-3x text-info"></i>
                        </div>
                        <h5>Manual & Functional Testing</h5>
                        <p class="text-muted">
                            Unleash the power of precise testing for improved performance with manual & functional testing.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Second Row of Services -->
            <div class="text-center row">
                <div class="mb-4 col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="p-4 service-box">
                        <div class="mb-3 icon">
                            <i class="fas fa-clock fa-3x text-danger"></i>
                        </div>
                        <h5>On Demand QA Services</h5>
                        <p class="text-muted">
                            Access flexible and reliable quality assurance and testing for seamless user experiences.
                        </p>
                    </div>
                </div>
                <div class="mb-4 col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="p-4 service-box">
                        <div class="mb-3 icon">
                            <i class="fas fa-truck fa-3x text-success"></i>
                        </div>
                        <h5>Full-Service Software QA</h5>
                        <p class="text-muted">
                            Long-term support to ensure top-notch software quality and enhance business.
                        </p>
                    </div>
                </div>
                <div class="mb-4 col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="p-4 service-box">
                        <div class="mb-3 icon">
                            <i class="fas fa-buromobelexperte fa-3x text-primary"></i>
                        </div>
                        <h5>QA Audit & Advisory</h5>
                        <p class="text-muted">
                            Ensuring compliance and optimizing software usage through comprehensive assessment and analysis.
                        </p>
                    </div>
                </div>
                <div class="mb-4 col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="p-4 service-box">
                        <div class="mb-3 icon">
                            <i class="fas fa-shield-virus fa-3x text-info"></i>
                        </div>
                        <h5>Manual & Functional Testing</h5>
                        <p class="text-muted">
                            Unleash the power of precise testing for improved performance with manual & functional testing.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- how we work -->
    <section class="py-5 process-section">
        <div class="container text-center">
            <h2 class="mb-4">We Follow To Be A Part Of Your Success</h2>
            <div class="row g-4">
                <!-- Step 1 -->
                <div class="col-md-4 d-flex">
                    <div class="p-4 step-card">
                        <div class="step-number">01</div>
                        <h5>Initial Consultation</h5>
                        <p>Understanding your project. Identify your specific QA needs and objectives.</p>
                    </div>
                </div>
                <!-- Step 2 -->
                <div class="col-md-4 d-flex">
                    <div class="p-4 step-card">
                        <div class="step-number">02</div>
                        <h5>Customized Proposal</h5>
                        <p>Craft a detailed proposal based on your requirements.</p>
                    </div>
                </div>
                <!-- Step 3 -->
                <div class="col-md-4 d-flex">
                    <div class="p-4 step-card">
                        <div class="step-number">03</div>
                        <h5>Work Initiation</h5>
                        <p>Finalize the work order based on client feedback.</p>
                    </div>
                </div>
                <!-- Step 4 -->
                <div class="col-md-4 d-flex">
                    <div class="p-4 step-card">
                        <div class="step-number">04</div>
                        <h5>Feedback & Update</h5>
                        <p>Collect feedback, align with expectations for optimization.</p>
                    </div>
                </div>
                <!-- Step 5 -->
                <div class="col-md-4 d-flex">
                    <div class="p-4 step-card">
                        <div class="step-number">05</div>
                        <h5>Final Test Report</h5>
                        <p>Submit the final test results promptly.</p>
                    </div>
                </div>
                <!-- Step 6 -->
                <div class="col-md-4 d-flex">
                    <div class="p-4 step-card">
                        <div class="step-number">06</div>
                        <h5>Client Satisfaction</h5>
                        <p>Prioritize client happiness throughout the process.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- packages section -->
    <section class="py-5 pricing-section">
        <div class="container text-center">
            <h6 class="text-danger fw-bold">Packages</h6>
            <h2 class="mb-4 fw-bold" style="color: #003a6f;">
                Proper SQA Consulting Is Essential In Addressing SQA Problems
            </h2>

            <!-- Tab navigation -->
            <ul class="mb-4 nav nav-tabs justify-content-center" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="sqa-packages-tab" data-bs-toggle="tab"
                        data-bs-target="#sqa-packages" type="button" role="tab" aria-controls="sqa-packages"
                        aria-selected="true" style="background-color: #003a6f; color: white;">
                        SQA Packages
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="augmentation-packages-tab" data-bs-toggle="tab"
                        data-bs-target="#augmentation-packages" type="button" role="tab"
                        aria-controls="augmentation-packages" aria-selected="false">
                        Augmentation Packages
                    </button>
                </li>
            </ul>

            <!-- Tab content -->
            <div class="tab-content" id="myTabContent">
                <!-- SQA Packages Table -->
                <div class="tab-pane fade show active" id="sqa-packages" role="tabpanel"
                    aria-labelledby="sqa-packages-tab">
                    <div class="table-responsive">
                        <table class="table text-center table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" class="p-2 p-sm-4"
                                        style="background-color: #54595f; color: white;">Features</th>
                                    <th scope="col" class="p-2 p-sm-4"
                                        style="background-color: #003a6f; color: white;">Startup Booster
                                    </th>
                                    <th scope="col" class="p-2 p-sm-4" style="background-color: #c36; color: white;">
                                        Agile Flex</th>
                                    <th scope="col" class="p-2 p-sm-4"
                                        style="background-color: #0170b9; color: white;">Enterprise Elite
                                    </th>
                                    <th scope="col" class="p-2 p-sm-4"
                                        style="background-color: #ff9b00; color: white;">BalancePro</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Targeted To</td>
                                    <td class="p-2 startup-bg p-sm-3">Mid-sized and high-budget projects</td>
                                    <td class="p-2 agile-bg p-sm-3">Perfect for small and medium projects</td>
                                    <td class="p-2 enterprise-bg p-sm-3">Profitable for established companies</td>
                                    <td class="p-2 balance-bg p-sm-3">Agencies with multiple projects</td>
                                </tr>
                                <tr>
                                    <td>Ideal For</td>
                                    <td class="p-2 startup-bg p-sm-3">Initial QA setup</td>
                                    <td class="p-2 agile-bg p-sm-3">Subscription-based engagement</td>
                                    <td class="p-2 enterprise-bg p-sm-3">Large-scale execution</td>
                                    <td class="p-2 balance-bg p-sm-3">Flexible budget and execution</td>
                                </tr>
                                <tr>
                                    <td>Updates & Communication</td>
                                    <td class="p-2 startup-bg p-sm-3">Weekly meetings</td>
                                    <td class="p-2 agile-bg p-sm-3">Bi-weekly meetings</td>
                                    <td class="p-2 enterprise-bg p-sm-3">Priority reporting</td>
                                    <td class="p-2 balance-bg p-sm-3">Scheduled program alignment</td>
                                </tr>
                                <tr>
                                    <td>Issue Resolution</td>
                                    <td class="p-2 startup-bg p-sm-3">Immediate response</td>
                                    <td class="p-2 agile-bg p-sm-3">Priority handling</td>
                                    <td class="p-2 enterprise-bg p-sm-3">Dedicated support</td>
                                    <td class="p-2 balance-bg p-sm-3">Flexible resolution timeline</td>
                                </tr>
                                <tr>
                                    <td>Promotional Discount</td>
                                    <td class="p-2 startup-bg p-sm-3">Yes</td>
                                    <td class="p-2 agile-bg p-sm-3">Yes</td>
                                    <td class="p-2 enterprise-bg p-sm-3">No</td>
                                    <td class="p-2 balance-bg p-sm-3">No</td>
                                </tr>
                                <tr>
                                    <td>Key Features</td>
                                    <td class="p-2 startup-bg p-sm-3">Automated consulting and reporting</td>
                                    <td class="p-2 agile-bg p-sm-3">On-demand audits</td>
                                    <td class="p-2 enterprise-bg p-sm-3">Custom reporting for managers</td>
                                    <td class="p-2 balance-bg p-sm-3">Programmed system execution</td>
                                </tr>
                                <tr>
                                    <td>Payment Model</td>
                                    <td class="p-2 startup-bg p-sm-3">Monthly</td>
                                    <td class="p-2 agile-bg p-sm-3">Pay as you go</td>
                                    <td class="p-2 enterprise-bg p-sm-3">Customized monthly</td>
                                    <td class="p-2 balance-bg p-sm-3">Project-based</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td class="p-2 p-sm-3"><a href="{{route('consultation')}}" class="btn btn-primary btn-sm">Book Now</a>
                                    </td>
                                    <td class="p-2 p-sm-3"><a href="{{route('consultation')}}" class="btn btn-primary btn-sm">Book Now</a>
                                    </td>
                                    <td class="p-2 p-sm-3"><a href="{{route('consultation')}}" class="btn btn-primary btn-sm">Book Now</a>
                                    </td>
                                    <td class="p-2 p-sm-3"><a href="{{route('consultation')}}" class="btn btn-primary btn-sm">Book Now</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Augmentation Packages Tab Content -->
                <div class="tab-pane fade" id="augmentation-packages" role="tabpanel"
                    aria-labelledby="augmentation-packages-tab">
                    <!-- Augmentation Packages content will go here -->
                </div>
            </div>

        </div>
    </section>
@endsection
