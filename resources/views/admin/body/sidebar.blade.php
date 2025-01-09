<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="{{ route('admin.dashbord') }}" class="logo">
                <img src="{{asset('frontend/images/ideacast_it.png')}}" alt="navbar brand" class="navbar-brand"
                    height="40" />
                    <h3 class="m-2 text-light">IdeaCast-IT</h3>
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item active">
                    <a href="{{ route('home') }}" target="_blank" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Visit Site</p>
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="{{ route('admin.dashbord') }}" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Components</h4>
                </li>

                {{-- Home Page Start --}}
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#base">
                        <i class="fas fa-layer-group"></i>
                        <p>Home Page</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.home-banner') }}">
                                    <span class="sub-item">Home Banner</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.services.index') }}">
                                    <span class="sub-item">Our Services</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.testimonials.index') }}">
                                    <span class="sub-item">Testimonials</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.awesome.index') }}">
                                    <span class="sub-item">Awesome Things</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('backend.achievement.index') }}">
                                    <span class="sub-item">Achievement</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('qaConsultation.index') }}">
                                    <span class="sub-item">Contact Us</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    {{-- Home Page End --}}

                    {{-- Services Page --}}
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#submenu">
                        <i class="fas fa-bars"></i>
                        <p>Services Page</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="submenu">
                        <ul class="nav nav-collapse">
                            <li>
                                <a data-bs-toggle="collapse" href="#subnav1">
                                    <span class="sub-item">Testing & SQA Services Page</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav1">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="{{ route('admin.testing') }}">
                                                <span class="sub-item">Testing Banner</span>
                                            </a>
                                        </li>
                                        {{-- <li>
                                            <a href="#">
                                                <span class="sub-item">Level 2</span>
                                            </a>
                                        </li> --}}
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a data-bs-toggle="collapse" href="#subnav2">
                                    <span class="sub-item">SQA Experts Augmentation Page</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav2">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="{{ route('admin.expect') }}">
                                                <span class="sub-item">Expect Banner</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- About Page --}}
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-th-list"></i>
                        <p>About Page</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('about.banner.index') }}">
                                    <span class="sub-item">About Banner</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about.whoWeAre.index') }}">
                                    <span class="sub-item">Who we are</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.our_mission') }}">
                                    <span class="sub-item">Our Mission</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.out_vision') }}">
                                    <span class="sub-item">Our Vision</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.our_strategy') }}">
                                    <span class="sub-item">Our Strategy</span>
                                </a>
                            </li>
                            {{-- <li>
                                <a href="##">
                                    <span class="sub-item">Consulting</span>
                                </a>
                            </li> --}}
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#forms">
                        <i class="fas fa-pen-square"></i>
                        <p>Blog Page</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('admin.blog_banner') }}">
                                    <span class="sub-item">Blog Banner</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('blog_card.index') }}">
                                    <span class="sub-item">Blog Cards</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#maps">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>Free Consultation Page</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="maps">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="###">
                                    <span class="sub-item">Free Consultation</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}


                </li>

            </ul>
        </div>
    </div>
</div>
