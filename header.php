<?php
$page = basename($_SERVER['PHP_SELF'], '.php');
?>
<header class="header">
    <nav class="navbar navbar-expand-xl navbar-dark stroke bg-transparent">
        <div class="container">
            <a class="navbar-brand me-0" href="index">
                <img src="assets/images/logo.png" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end me-4" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'index') { echo 'active'; } ?>" href="index">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'about-us') { echo 'active'; } ?>" href="about-us">About
                            Us</a>
                    </li>
                    <li class="nav-item dropdown navdesktop">
                        <a class="nav-link <?php if ($page == 'cv' || $page == 'cv-and-cover-letter' || $page == 'cv-and-linkedin' || $page == 'cv-cover-letter-and-linkedin' || $page == 'linkedin-profile' || $page == 'job-placement') { echo 'active'; } ?>"
                            href="#">
                            Services <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-navdesktop" aria-labelledby="navbarDropdown">
                            <li class="<?php if ($page == 'cv') { echo 'active'; } ?>"><a class="dropdown-item"
                                    href="cv">CV Writing</a></li>
                            <li class="<?php if ($page == 'cv-and-cover-letter') { echo 'active'; } ?>"><a
                                    class="dropdown-item" href="cv-and-cover-letter">CV And Cover Letter Writing</a>
                            </li>
                            <li class="<?php if ($page == 'cv-and-linkedin') { echo 'active'; } ?>"><a
                                    class="dropdown-item" href="cv-and-linkedin">CV And Linkedin Writing</a></li>
                            <li class="<?php if ($page == 'cv-cover-letter-and-linkedin') { echo 'active'; } ?>"><a
                                    class="dropdown-item" href="cv-cover-letter-and-linkedin">CV, Cover Letter, And
                                    Linkedin Preparation</a></li>
                            <li class="<?php if ($page == 'linkedin-profile') { echo 'active'; } ?>"><a
                                    class="dropdown-item" href="linkedin-profile">Linkedin Profile Writing</a></li>
                            <li class="<?php if ($page == 'job-placement') { echo 'active'; } ?>"><a
                                    class="dropdown-item" href="job-placement">Job Placement</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'industry-expertise') { echo 'active'; } ?>"
                            href="industry-expertise">
                            Industry Expertise
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'samples') { echo 'active'; } ?>" href="samples">
                            Samples
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'contact-us') { echo 'active'; } ?>" href="contact-us">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
            <div class="my-2 my-lg-0 d-xl-block d-none">
                <a href="javascript:void(Tawk_API.toggle())" class="btn btn-outline">Start Chat</a>
            </div>
        </div>
    </nav>
</header>

<!-- popup -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-md model-sec">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="model-discount">
                            <div class="d-block text-center align-items-center">
                                <div class="animate-div"><span>Avail £40 Discount</span></div>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <hr>
                            <form method="POST" action="signup" class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Name</label>
                                            <input type="text" class="form-control model-input" placeholder="Enter Name"
                                                pattern="[A-Za-z ]+" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="email" class="form-control model-input"
                                                placeholder="Enter Email" name="email"
                                                pattern="[^\s@]+@[a-zA-Z]+[^0-9@]+\.[cC][oO][mM]$" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                                            <input type="number" class="form-control model-input"
                                                placeholder="Enter Phone No." name="phone"
                                                onkeypress="if(this.value.length==12) return false;" required>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Service</label>
                                            <select class="form-control form-select model-input" required="" name="service">
                                                <option selected="" disabled="" value="">Select Service</option>
                                                <option value="CV Writing">CV Writing</option>
                                                <option value="CV And Cover Letter Writing">CV And Cover Letter Writing
                                                </option>
                                                <option value="CV And Linkedin Writing">CV And Linkedin Writing</option>
                                                <option value="CV, Cover Letter, And Linkedin
                                            Preparation">CV, Cover Letter, And Linkedin
                                                    Preparation</option>
                                                <option value="Linkedin Profile Writing">Linkedin Profile Writing
                                                </option>
                                                <option value="Job Placement">Job Placement</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="btn btn-theme mt-1 w-100">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end -->