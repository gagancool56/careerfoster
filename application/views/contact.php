<?php include(APPPATH.'views/header.php') ?>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 hero-overly2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Contact US</h2>
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
                        <h2 class="contact-title">Submit Your CV</h2>
                        <form class="form-contact contact_form" action="<?= base_url() ?>submitcv" method="post" id="submitcv" novalidate="novalidate">
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
                                       <select name="gender" id="gender" class="form-control valid">
                                           <option value="">Select Gender</option>
                                           <option value="Male">Male</option>
                                           <option value="Female">Female</option>
                                       </select>
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="dob" id="dob" type="date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter DOB'" placeholder="Enter DOB">
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

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="location" id="location" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter location '" placeholder="location">
                                    </div>
                                </div> 


                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="company" id="company" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter company '" placeholder="company">
                                    </div>
                                </div>  

                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control" name="designation" id="designation" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Designation'" placeholder="Enter Designation">
                                    </div>
                                </div>

                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="experience" id="experience" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter experience '" placeholder=" experience (in years)">
                                    </div>
                                </div> 
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="salary" id="salary" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter salary '" placeholder="Current/Last Annual Salary (INR) ">
                                    </div>
                                </div>

                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="education" id="education" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter education '" placeholder="education">
                                    </div>
                                </div> 

                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="institute" id="institute" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter institute'" placeholder="institute" >
                                    </div>
                                </div>


                                     <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="function" id="function" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter function'" placeholder="function" >
                                    </div>
                                </div>

                                   <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="industry" id="industry" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter industry'" placeholder="industry" >
                                    </div>
                                </div>

                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="skills" id="skills" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter skills'" placeholder="skills" >
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                       <div class="input-group mb-3">
                                          <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">Upload resume</span>
                                          </div>
                                          <input type="file" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                        </div> 
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">Submit</button>
                            </div>
                        </form>
                    </div>   <div class="col-lg-6">
                        <h2 class="contact-title">Questions, Comments, or Feedback?</h2>
                        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
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
    <?php include(APPPATH.'views/footer.php') ?>

