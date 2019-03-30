<!-- 
Template Name: About us
 -->
 <?php get_header(); ?>


   <?php if(have_posts()):
            while (have_posts()):the_post(); ?> 
    <!-- Banner Section -->
    <section id="banner-wrap" class="banner-section" style="background-image: url(<?php  the_post_thumbnail('slider_image') ?>);">
        <div class="banner-section-overlay">
            <div class="banner-section-text">
                <div class="banner-text-inner">
                    <h2><?php the_title(); ?></h2>
                    <div class="bradcome">
                        <ul>
                            <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
                            <li><i class="fa fa-long-arrow-right"></i></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <?php endwhile;
       endif;
      ?>
    <!--/ Banner Section -->
    <!-- Welcome Section -->
    <section id="about-one" class="section-default">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div id="single-page-description-left">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div id="about-carousel" class="owl-carousel owl-theme">
                                    <!-- Team #1 Starts -->
                                    <div class="team-item">
                                        <img class="img-responsive" src="images/resource/team1.jpg" alt=" ">
                                    </div>
                                    <!-- Team #1 Ends -->
                                    <!-- Team #2 Starts -->
                                    <div class="team-item">
                                        <img class="img-responsive" src="images/resource/team2.jpg" alt=" ">
                                    </div>
                                    <!-- Team #2 Ends -->
                                    <div class="team-item">
                                        <img class="img-responsive" src="images/resource/team3.jpg" alt=" ">
                                    </div>
                                    <!-- Team #1 Ends -->
                                    <!-- Team #2 Starts -->
                                    <div class="team-item">
                                        <img class="img-responsive" src="images/resource/team4.jpg" alt=" ">
                                    </div>
                                    <!-- Team #2 Ends -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="single-page-description">
                        <h2>Welcom to Our Car Care</h2>
                        <p>Founded in 2001 by John Doe, gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat.</p>
                        <ul>
                            <li><a href="#">Serv Auto Group Agent Authorised</a></li>
                            <li><a href="#">ARC Licensed</a></li>
                            <li><a href="#">Capricorn Registered Member</a></li>
                            <li><a href="#">IAME Registered Member</a></li>
                            <li><a href="#">LPG Accredited Installer</a></li>
                        </ul>
                        <p><a class="btn btn-primary" href="#">Details</a></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12 pull-left">
                    <div class="single-page-sidebar">
                        <div class="single-page-sidebar-widget">
                            <h3>Working Hours</h3>
                            <div class="office-hours">
                                <div class="office-hours-text">
                                    <ul>
                                        <li>Monday <span>07:00 - 17:00</span></li>
                                        <li>Tuesday <span>07:00 - 17:00</span></li>
                                        <li>Wednesday <span>07:00 - 17:00</span></li>
                                        <li>Thursday <span>07:00 - 17:00</span></li>
                                        <li>Friday <span>07:00 - 17:00</span></li>
                                        <li>Saturday <span>07:00 -17:00</span></li>
                                        <li>Sunday <span>Closed</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-page-sidebar-widget">
                            <div class="company-address">
                                <strong>(000) 000 - 0000</strong>
                                <ul>
                                    <li>
                                        <i class="flaticon-location"></i>
                                        <em>248/1 Niral Residintial Area, USA, USA-9200</em>
                                    </li>
                                    <li>
                                        <i class="flaticon-technology-4"></i>
                                        <em>+000 - 0000-000000</em>
                                    </li>
                                    <li>
                                        <i class="flaticon-web"></i>
                                        <em>
                                            <a href="">info@carcare.com</a>
                                            <a href="">support@carcarecom</a>
                                        </em>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Welcome Section -->
    <section id="team-member-one-1" class="section bg-primary tac parallax">
        <div class="overlay bg-primary opc-85"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="middle">
                        <div class="middle-inner">
                            <h2>We are here to Solve all your Problems</h2>
                            <p>Call us anytime, anywhere at <span>{000-000-0000}</span> and get direct help from our Engineers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section -->
    <section id="team-member-one" class="section-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area text-center">
                        <h2 class="section-title">Our Expert Engineers</h2>
                        <p>Meet with All Our Qualified Team Members</p>
                        <div class="underline_sep"><i class="fa fa-car"></i></div>
                    </div>
                </div>
            </div>
            <!-- Team Members Carousel Starts -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <div id="team-carousel" class="owl-carousel owl-theme">
                        <!-- Team #1 Starts -->
                        <div class="team-item">
                            <div class="team-member">
                                <img class="img-responsive" src="images/resource/team1.jpg" alt=" ">
                                <div class="overlay">
                                    <div class="team-member-inner">
                                        <div class="team-member-des">
                                            <ul class="team-sm-links">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                            <a class="btn btn-primary" href="attorney-portfolio.html">Read Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-member-name">
                                <h6>Dr. Erica Frank</h6>
                                <span class="designation">Neurosurgeon</span>
                            </div>
                        </div>
                        <!-- Team #1 Ends -->
                        <!-- Team #2 Starts -->
                        <div class="team-item">
                            <div class="team-member">
                                <img class="img-responsive" src="images/resource/team2.jpg" alt=" ">
                                <div class="overlay">
                                    <div class="team-member-inner">
                                        <div class="team-member-des">
                                            <ul class="team-sm-links">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                            <a class="btn btn-primary" href="attorney-portfolio.html">Read Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-member-name">
                                <h6>Dr. Erica Frank</h6>
                                <span class="designation">Neurosurgeon</span>
                            </div>
                        </div>
                        <!-- Team #2 Ends -->
                        <!-- Team #3 Starts -->
                        <div class="team-item">
                            <div class="team-member">
                                <img class="img-responsive" src="images/resource/team3.jpg" alt=" ">
                                <div class="overlay">
                                    <div class="team-member-inner">
                                        <div class="team-member-des">
                                            <ul class="team-sm-links">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                            <a class="btn btn-primary" href="attorney-portfolio.html">Read Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-member-name">
                                <h6>Dr. Erica Frank</h6>
                                <span class="designation">Neurosurgeon</span>
                            </div>
                        </div>
                        <!-- Team #3 Ends -->
                        <!-- Team #4 Starts -->
                        <div class="team-item">
                            <div class="team-member">
                                <img class="img-responsive" src="images/resource/team4.jpg" alt=" ">
                                <div class="overlay">
                                    <div class="team-member-inner">
                                        <div class="team-member-des">
                                            <ul class="team-sm-links">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                            <a class="btn btn-primary" href="attorney-portfolio.html">Read Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-member-name">
                                <h6>Dr. Erica Frank</h6>
                                <span class="designation">Neurosurgeon</span>
                            </div>
                        </div>
                        <!-- Team #4 Ends -->
                        <!-- Team #5 Starts -->
                        <div class="team-item">
                            <div class="team-member">
                                <img class="img-responsive" src="images/resource/team5.jpg" alt=" ">
                                <div class="overlay">
                                    <div class="team-member-inner">
                                        <div class="team-member-des">
                                            <ul class="team-sm-links">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                            <a class="btn btn-primary" href="attorney-portfolio.html">Read Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-member-name">
                                <h6>Dr. Erica Frank</h6>
                                <span class="designation">Neurosurgeon</span>
                            </div>
                        </div>
                        <!-- Team #5 Ends -->
                        <!-- Team #6 Starts -->
                        <div class="team-item">
                            <div class="team-member">
                                <img class="img-responsive" src="images/resource/team6.jpg" alt=" ">
                                <div class="overlay">
                                    <div class="team-member-inner">
                                        <div class="team-member-des">
                                            <ul class="team-sm-links">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                            <a class="btn btn-primary" href="attorney-portfolio.html">Read Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-member-name">
                                <h6>Dr. Erica Frank</h6>
                                <span class="designation">Neurosurgeon</span>
                            </div>
                        </div>
                        <!-- Team #6 Ends -->
                        <!-- Team #7 Starts -->
                        <div class="team-item">
                            <div class="team-member">
                                <img class="img-responsive" src="images/resource/team7.jpg" alt=" ">
                                <div class="overlay">
                                    <div class="team-member-inner">
                                        <div class="team-member-des">
                                            <ul class="team-sm-links">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                            <a class="btn btn-primary" href="attorney-portfolio.html">Read Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-member-name">
                                <h6>Dr. Erica Frank</h6>
                                <span class="designation">Neurosurgeon</span>
                            </div>
                        </div>
                        <!-- Team #7 Ends -->
                        <!-- Team #8 Starts -->
                        <div class="team-item">
                            <div class="team-member">
                                <img class="img-responsive" src="images/resource/team8.jpg" alt=" ">
                                <div class="overlay">
                                    <div class="team-member-inner">
                                        <div class="team-member-des">
                                            <ul class="team-sm-links">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                            <div class="clearfix"></div>
                                            <a class="btn btn-primary" href="attorney-portfolio.html">Read Profile</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="team-member-name">
                                <h6>Dr. Erica Frank</h6>
                                <span class="designation">Neurosurgeon</span>
                            </div>
                        </div>
                        <!-- Team #8 Ends -->
                    </div>
                </div>
            </div>
            <!-- Team Members Carousel Ends -->
        </div>
    </section>
    <!--/ Team Section -->
    <!-- partner Section -->
    <section id="partner-one" class="section-default">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-area text-center">
                        <h2 class="section-title">Our Partner</h2>
                        <p>All Our Company Partners are Listed Below</p>
                        <div class="underline_sep"><i class="fa fa-car"></i></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="partner-table">
                        <div id="owl-partner-slider" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="partner-box">
                                    <div class="partner-box-inner">
                                        <a href=""><img title="Tooltip on left" src="images/resource/partner-1.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner-box">
                                    <div class="partner-box-inner">
                                        <a href=""><img title="Tooltip on left" src="images/resource/partner-2.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner-box">
                                    <div class="partner-box-inner">
                                        <a href=""><img title="Tooltip on left" src="images/resource/partner-3.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner-box">
                                    <div class="partner-box-inner">
                                        <a href=""><img title="Tooltip on left" src="images/resource/partner-4.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner-box">
                                    <div class="partner-box-inner">
                                        <a href=""><img title="Tooltip on left" src="images/resource/partner-5.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="partner-box">
                                    <div class="partner-box-inner">
                                        <a href=""><img title="Tooltip on left" src="images/resource/partner-1.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /partner Section -->
    <div id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h1 class="subs-title">Subscribe to news letter :</h1>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="subcrb-form">
                    <form class="subscription registerForm">
                        <div class="input-group">
                            <input type="email" name="formInput[email]" value="" class="form-control" placeholder="Your Email:" required="" title="valid email is required" id="emaill">
                            <span class="input-group-btn">
                        <button class="btn btn-secondary" type="submit" value="submit" id="submit-btn"><i class="fa fa-paper-plane-o"></i></button>
                      </span>
                        </div>
                        <input type="hidden" name="action" value="submitform">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--=== Right Fixed Appiontment Form ===-->
    <div id="appiontment-now-box">
        <p class="toggle">APPOINTMENT</p>
        <div class="appiontment-now ">
            <div class="appiontment-form">
                <p>Instant online Appiontment</p>
                <form name="contact_us_popup" method="post" action="contact.php">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" placeholder="Enter Name" class="form-control required name" name="name" aria-required="true" id="name1" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="email" placeholder="Email" class="form-control required email" name="email" aria-required="true" id="email" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input name="form_appontment_date" class="form-control required date-picker" type="text" placeholder="Date" aria-required="true" id="datepicker1" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" placeholder="Phone" class="form-control" name="phone" id="phone" required>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="text" placeholder="Vehicle Registration Num* " class="form-control required" name="subject" id="reg1" required>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <textarea placeholder="Message" rows="7" class="form-control required" name="message" required></textarea>
                    </div>
                    <div class="form-group tac">
                        <button class="btn btn-primary transition3s" type="submit">APPOINTMENT Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
   <?php get_footer(); ?>