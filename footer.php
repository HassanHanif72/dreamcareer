<!-- footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="footer-logo">
                    <a href="index"><img src="assets/images/logo.png"></a>
                    <p>Dream Career is the heart of the design community and the best resource to discover and connect
                        with designers and jobs worldwide.
                    </p>
                    <div class="social">
                        <p class="mb-0">
                            <a target="_blank" aria-label="Facebook" href="#"><i
                                    class="fa fa-facebook-official"></i></a>
                            <a target="_blank" aria-label="LinkedIn" href="#"><i class="fa fa-linkedin"></i></a>
                            <a target="_blank" aria-label="Instagram" href="#"><i class="fa fa-instagram"></i></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                <div class="footer-links ">
                    <h6>Quick Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="index">- Home</a></li>
                        <li><a href="about-us">- About Us</a></li>
                        <li><a href="industry-expertise">- Industry Expertise</a></li>
                        <li><a href="samples">- Samples</a></li>
                        <li><a href="contact-us">- Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-6">
                <div class="footer-links ">
                    <h6>Services</h6>
                    <ul class="list-unstyled">
                        <li><a href="cv">- CV Writing</a></li>
                        <li><a href="cv-and-cover-letter">- CV And Cover Letter Writing</a></li>
                        <li><a href="cv-and-linkedin">- CV And Linkedin Writing</a></li>
                        <li><a href="cv-cover-letter-and-linkedin">- CV, Cover Letter, And Linkedin</a></li>
                        <li><a href="linkedin-profile">- Linkedin Profile Writing</a></li>
                        <li><a href="job-placement">- Job Placement</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12">
                <div class="footer-links">
                    <h6>Subscribe Us</h6>

                    <form method="POST" action="subscribe">
                        <div class="input-group mt-3 mb-3">
                            <input type="text" class="form-control" placeholder="Your Email" aria-label="Your Email"
                                aria-describedby="Your Email" name="email"
                                pattern="[^\s@]+@[a-zA-Z]+[^0-9@]+\.[cC][oO][mM]$" required="">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </div>
                    </form>
                    <p>Join our newsletter to stay up to date on features and releases</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer-bottom">
    <div class="container">
        <div class="row align-items-center mt-0 pt-2 pb-2">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="footer-bootom-links d-md-flex align-items-center justify-content-between">
                    <p>© Copyright 2024 . Dream Career . All rights reserved.</p>
                    <div class="last-links">
                        <a href="#">Term And Conditions</a> | <a href="#">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end -->

<!-- Website JS -->
<script src="assets/js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Slick Carousel JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/main.js"></script>


<!-- Offcanvas Side Bar -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
        <a href="#"><img src="assets/images/logo.png" alt="logo"></a>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link <?php if ($page == 'index') { echo 'active'; } ?>" href="index">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($page == 'about-us') { echo 'active'; } ?>" href="about-us">About Us</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link <?php if ($page == 'cv' || $page == 'cv-and-cover-letter' || $page == 'cv-and-linkedin' || $page == 'cv-cover-letter-and-linkedin' || $page == 'linkedin-profile' || $page == 'job-placement') { echo 'active'; } ?>"
                    href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Services <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li class="<?php if ($page == 'cv') { echo 'active'; } ?>"><a class="dropdown-item" href="cv">CV
                            Writing</a></li>
                    <li class="<?php if ($page == 'cv-and-cover-letter') { echo 'active'; } ?>"><a class="dropdown-item"
                            href="cv-and-cover-letter">CV And Cover Letter Writing</a>
                    </li>
                    <li class="<?php if ($page == 'cv-and-linkedin') { echo 'active'; } ?>"><a class="dropdown-item"
                            href="cv-and-linkedin">CV And Linkedin Writing</a></li>
                    <li class="<?php if ($page == 'cv-cover-letter-and-linkedin') { echo 'active'; } ?>"><a
                            class="dropdown-item" href="cv-cover-letter-and-linkedin">CV, Cover Letter, And
                            Linkedin Preparation</a></li>
                    <li class="<?php if ($page == 'linkedin-profile') { echo 'active'; } ?>"><a class="dropdown-item"
                            href="linkedin-profile">Linkedin Profile Writing</a></li>
                    <li class="<?php if ($page == 'job-placement') { echo 'active'; } ?>"><a class="dropdown-item"
                            href="job-placement">Job Placement</a></li>
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
        <div class="mt-3">
            <a href="javascript:void(Tawk_API.toggle())" class="btn btn-theme">Start Chat</a>
        </div>
    </div>
</div>
<!-- end -->