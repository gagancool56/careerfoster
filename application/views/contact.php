<?php include(APPPATH . 'views/header.php'); ?>
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
                        <form class="form-contact contact_form" action="<?= base_url(); ?>submitcv" method="post" id="submitcv" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">First Name</label>
                                        <input class="form-control" name="firstname" id="firstname" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter first name'" value="<?= set_value('firstname'); ?>" placeholder="Enter first name" />
                                        <span class="text-danger"><?= form_error('firstname'); ?></span>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Last Name</label>
                                        <input class="form-control" name="lastname" id="lastname" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter last name'" value="<?= set_value('lastname'); ?>" placeholder="Enter last name" />
                                        <span class="text-danger"><?= form_error('lastname'); ?></span>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <div class="form-select border" id="default-select">
                                            <select name="gender" id="gender" class="form-control">
                                                <option value="" <?= set_select('gender', '', TRUE) ?>>Select Gender</option>
                                                <option value="Male" <?= set_select('gender', 'Male') ?>>Male</option>
                                                <option value="Female" <?= set_select('gender', 'Female') ?>>Female</option>
                                            </select>
                                        </div>
                                        <span class="text-danger"><?= form_error('gender'); ?></span>
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="dob">Date of Birth</label>
                                        <input class="form-control" name="dob" id="dob" type="date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter DOB'" value="<?= set_value('dob'); ?>" placeholder="Enter DOB" >
                                        <span class="text-danger"><?= form_error('dob'); ?></span>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="phoneno">Phone No</label>
                                        <input class="form-control" name="phoneno" id="phoneno" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter phone no'" value="<?= set_value('phoneno'); ?>" placeholder="Enter phone no">
                                        <span class="text-danger"><?= form_error('phoneno'); ?></span>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" value="<?= set_value('email'); ?>" placeholder="Email">
                                        <span class="text-danger"><?= form_error('email'); ?></span>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <input class="form-control" name="location" id="location" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter location '" value="<?= set_value('location'); ?>" placeholder="Enter Location">
                                        <span class="text-danger"><?= form_error('location'); ?></span>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="company">Company</label>
                                        <input class="form-control" name="company" id="company" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Company '" value="<?= set_value('company'); ?>" placeholder="Enter Company">
                                        <span class="text-danger"><?= form_error('company'); ?></span>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="designation">Designation</label>
                                        <input class="form-control" name="designation" id="designation" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Designation'" value="<?= set_value('designation'); ?>" placeholder="Enter Designation">
                                        <span class="text-danger"><?= form_error('designation'); ?></span>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="experience">Experience</label>
                                        <input class="form-control" name="experience" id="experience" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter experience '" value="<?= set_value('experience'); ?>" placeholder="Enter experience (in years)">
                                        <span class="text-danger"><?= form_error('experience'); ?></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="salary">Salary / CTC</label>
                                        <input class="form-control" name="salary" id="salary" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter salary '" value="<?= set_value('salary'); ?>" placeholder="Current/Last Annual Salary (INR) ">
                                        <span class="text-danger"><?= form_error('salary'); ?></span>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="education">Qualification</label>
                                        <input class="form-control" name="education" id="education" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Education '" value="<?= set_value('education'); ?>" placeholder="Enter Education">
                                        <span class="text-danger"><?= form_error('education'); ?></span>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="institute">Institute Name</label>
                                        <input class="form-control" name="institute" id="institute" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Institute'" value="<?= set_value('institute'); ?>" placeholder="Enter Institute">
                                        <span class="text-danger"><?= form_error('institute'); ?></span>
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="function">Function</label>
                                        <input class="form-control" name="function" id="function" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Function'" value="<?= set_value('function'); ?>" placeholder="Enter Function">
                                        <span class="text-danger"><?= form_error('function'); ?></span>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="industry">Industry</label>
                                        <input class="form-control" name="industry" id="industry" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Industry'" value="<?= set_value('industry'); ?>" placeholder="Enter Industry">
                                        <span class="text-danger"><?= form_error('industry'); ?></span>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="skills">Skills</label>
                                        <input class="form-control" name="skills" id="skills" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter skills'" value="<?= set_value('skills'); ?>" placeholder="Enter Skills Seprated by (,)">
                                        <span class="text-danger"><?= form_error('skills'); ?></span>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="resume">Upload Resume</label>
                                        <input type="file" class="form-control" name="resume" placeholder="resume" />
                                        <span class="text-danger"><?= form_error('resume'); ?></span>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Submit</button>
                            </div>
                        </form>
                    </div> <!-- Card Body End -->
                </div> <!-- Card End -->
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
<?php include(APPPATH . 'views/footer.php'); ?>