<!-- footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-12">
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
                    <h6>Resources</h6>
                    <ul class="list-unstyled">
                        <li><a href="#"> About us</a></li>
                        <li><a href="#"> Our Team</a></li>
                        <li><a href="#"> Products</a></li>
                        <li><a href="#"> Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                <div class="footer-links ">
                    <h6>Community</h6>
                    <ul class="list-unstyled">
                        <li><a href="#"> Feature</a></li>
                        <li><a href="#"> Pricing</a></li>
                        <li><a href="#"> Credit</a></li>
                        <li><a href="#"> FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-6">
                <div class="footer-links ">
                    <h6>Quick links</h6>
                    <ul class="list-unstyled">
                        <li><a href="#"> iOS</a></li>
                        <li><a href="#"> Android</a></li>
                        <li><a href="#"> Microsoft</a></li>
                        <li><a href="#"> Desktop</a></li>
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
                <div class="footer-bootom-links d-flex align-items-center justify-content-between">
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
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Services <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">CV Writing</a></li>
                    <li><a class="dropdown-item" href="#">CV And Cover Letter Writing</a></li>
                    <li><a class="dropdown-item" href="#">Cv And Linkedin Writing</a></li>
                    <li><a class="dropdown-item" href="#">CV, Cover Letter, And Linkedin Preparation</a></li>
                    <li><a class="dropdown-item" href="#">Linkedin Profile Writing</a></li>
                    <li><a class="dropdown-item" href="#">Job Placement</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($page == '#') { echo 'active'; } ?>" href="#">
                    Industry Expertise
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($page == '#') { echo 'active'; } ?>" href="#">
                    Samples
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($page == '#') { echo 'active'; } ?>" href="#">
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