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
                        <a class="nav-link <?php if ($page == 'about-us') { echo 'active'; } ?>" href="about-us">About Us</a>
                    </li>
                    <li class="nav-item dropdown navdesktop">
                        <a class="nav-link <?php if ($page == '#') { echo 'active'; } ?>" href="#">
                            Services <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-navdesktop" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="cv">CV Writing</a></li>
                            <li><a class="dropdown-item" href="cv-and-cover-letter">CV And Cover Letter Writing</a></li>
                            <li><a class="dropdown-item" href="cv-and-linkedin">CV And Linkedin Writing</a></li>
                            <li><a class="dropdown-item" href="cv-cover-letter-and-linkedin">CV, Cover Letter, And Linkedin Preparation</a></li>
                            <li><a class="dropdown-item" href="linkedin-profile">Linkedin Profile Writing</a></li>
                            <li><a class="dropdown-item" href="job-placement">Job Placement</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'industry-expertise') { echo 'active'; } ?>" href="industry-expertise">
                            Industry Expertise
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'samples') { echo 'active'; } ?>" href="samples">
                            Samples
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == '#') { echo 'active'; } ?>" href="#">
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