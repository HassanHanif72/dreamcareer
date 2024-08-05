<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <?php include 'links.php'?>
</head>

<body>
    <!-- header -->
    <?php include 'header.php'?>
    <!-- End header -->

    <!-- section banner -->
    <section class="top-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="right-col">
                        <h1><span>Contact</span> Us</h1>
                        <p class="mb-4">CVWritingService.UK is one of its kind platform that helps you launch your
                            career with its outstanding CV writing and other related services.</p>
                        <div class="d-flex align-items-center gap-3">
                            <a href="#" class="btn btn-white rounded-pill" data-bs-target="#exampleModalToggle"
                                data-bs-toggle="modal" data-bs-dismiss="modal">Get Started</a>
                            <img src="assets/images/img-1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End section -->

    <!-- section top form -->
    <?php include "top-form.php"?>
    <!-- end -->

    <!-- contact us -->
    <section class="contact-us">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xl-8 col-lg-8 col-md-12">
                    <div class="center-heading">
                        <h2>Get <span>a Quote</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="contact-bg">
                <div class="contact-white">
                    <div class="row align-items-center justify-content-center">
                        <form method="POST" action="signup" class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label>Name <span>*</span></label>
                                        <input type="text" class="form-control bg-white" name="name"
                                            pattern="[A-Za-z ]+" placeholder="Enter Name*" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label>Email <span>*</span></label>
                                        <input type="email" class="form-control bg-white" name="email"
                                            pattern="[^\s@]+@[a-zA-Z]+[^0-9@]+\.[cC][oO][mM]$"
                                            placeholder="Enter Email*" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label>Contact No. <span>*</span></label>
                                        <input type="number" class="form-control bg-white" name="phone"
                                            onkeypress="if(this.value.length==12) return false;"
                                            placeholder="Enter Contact No.*" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label>Service <span>*</span></label>
                                        <select class="form-control form-select" required="" name="service">
                                            <option selected="" disabled="" value="">Select Service</option>
                                            <option value="CV Writing">CV Writing</option>
                                            <option value="CV And Cover Letter Writing">CV And Cover Letter Writing
                                            </option>
                                            <option value="CV And Linkedin Writing">CV And Linkedin Writing</option>
                                            <option value="CV, Cover Letter, And Linkedin
                                            Preparation">CV, Cover Letter, And Linkedin
                                                Preparation</option>
                                            <option value="Linkedin Profile Writing">Linkedin Profile Writing</option>
                                            <option value="Job Placement">Job Placement</option>

                                        </select>
                                    </div>


                                </div>
                                <div class="col-md-12">
                                    <div class="mb-4">
                                        <label>Message</label>
                                        <textarea class="form-control bg-white" id="message"
                                            onkeypress="if(this.value.length==250) return false;" name="message"
                                            rows="4" cols="50" placeholder="Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-theme rounded-pill">Submit</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end -->

    <!-- footer -->
    <?php include 'footer.php'?>
    <!-- end -->


</body>

</html>