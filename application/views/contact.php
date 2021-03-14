<?php include(APPPATH . 'views/header.php') ?>
<!--? Hero Start -->
<div class="slider-area2">
    <div class="slider-height2 hero-overly2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap hero-cap2 text-center">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->
<!-- ================ contact section start ================= -->
<section class="contact-section">
    <div class="container-fluid px-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title">Submit Your CV</h2>
                    </div>
                    <div class="card-body">
                        <form class="form-contact contact_form" action="<?= base_url() ?>submitcv" method="post" id="submitcv" novalidate="novalidate">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">First Name</label>
                                        <input class="form-control valid" name="firstname" id="firstname" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter first name'" placeholder="Enter first name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Last Name</label>
                                        <input class="form-control valid" name="lastname" id="lastname" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter last name'" placeholder="Enter last name">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <div class="form-select border" id="default-select">
                                            <select name="gender" id="gender" class="form-control valid">
                                                <option value="">Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="dob">Date of Birth</label>
                                        <input class="form-control valid" name="dob" id="dob" type="date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter DOB'" placeholder="Enter DOB">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phoneno">Phone No</label>
                                        <input class="form-control valid" name="phoneno" id="phoneno" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter phone no'" placeholder="Enter phone no">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <input class="form-control valid" name="location" id="location" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter location '" placeholder="Enter Location">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="company">Company</label>
                                        <input class="form-control valid" name="company" id="company" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Company '" placeholder="Enter Company">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="designation">Designation</label>
                                        <input class="form-control" name="designation" id="designation" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Designation'" placeholder="Enter Designation">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="experience">Experience</label>
                                        <input class="form-control valid" name="experience" id="experience" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter experience '" placeholder="Enter experience (in years)">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="salary">Salary / CTC</label>
                                        <input class="form-control valid" name="salary" id="salary" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter salary '" placeholder="Current/Last Annual Salary (INR) ">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="education">Qualification</label>
                                        <input class="form-control valid" name="education" id="education" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Education '" placeholder="Enter Education">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="institute">Institute Name</label>
                                        <input class="form-control valid" name="institute" id="institute" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Institute'" placeholder="Enter Institute">
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="function">Function</label>
                                        <input class="form-control valid" name="function" id="function" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Function'" placeholder="Enter Function">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="industry">Industry</label>
                                        <input class="form-control valid" name="industry" id="industry" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Industry'" placeholder="Enter Industry">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="skills">Skills</label>
                                        <input class="form-control valid" name="skills" id="skills" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter skills'" placeholder="Enter Skills Seprated by (,)">
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="resume">Upload Resume</label>
                                        <input type="file" class="form-control" placeholder="resume" aria-label="resume">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="contact-title">Questions, Comments, or Feedback?</h2>
                <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="firstname" id="firstname" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter first name'" placeholder="Enter first name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="lastname" id="lastname" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter last name'" placeholder="Enter last name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="phoneno" id="phoneno" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter phone no'" placeholder="Enter phone no">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->
<?php include(APPPATH . 'views/footer.php') ?>