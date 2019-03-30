<?php 
/*
Template Name:Contact Us
*/
get_header();?>
    <!-- Banner Section -->
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'slider-items');  ?>
    <section id="banner-wrap" class="banner-section" style="background: url(<?php echo $large_image_url[0];?>) no-repeat !important;">
        <div class="banner-section-overlay">
            <div class="banner-section-text">
                <div class="banner-text-inner">
                    <h2><?php  the_title();?></h2>
                    <div class="bradcome">
                        <ul>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                            <li><i class="fa fa-long-arrow-right"></i></li>
                            <li><a href="<?php  the_permalink();?>"><?php the_title();?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile;?>
    <?php endif;?>
    <!--/ Banner Section -->

    <!-- Welcome Section -->
    <section id="about-wrap" class="section-gray">
        <div class="container">
            <div class="row">
                <div class="contact-page-description">


                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                        <div class="contact_us_popup">
                            <?php the_content();?>
                        </div>
                    </div>
                    <?php endwhile;?>
                    <?php endif;?>


                    <div class="col-mg-4 col-md-4 col-sm-6 col-xs-12">
                         <div class="sidebar-wrap">
                            <div class="siderbar-widget">
                                <h4 class="sidebar-widget-title">Office Address</h4>
                                <div class="single-address-item">
                                    <div class="address-left-bg"></div>
                                    <div class="address-icon">
                                        <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                    </div>
                                    <div class="address-text">
                                        <h4>phone</h4>
                                        <p> (000)-000-0000
                                            <br> +880 0000 000000
                                            <br> +91 000000 00000 00 </p>
                                    </div>
                                </div>
                            
                            <div class="single-address-item">
                                <div class="address-left-bg"></div>
                                <div class="address-icon">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                <div class="address-text">
                                    <h4>phone</h4>
                                    <p> (000)-000-0000
                                        <br> +880 0000 000000
                                        <br> +91 000000 00000 00 </p>
                                </div>
                            </div>
                              <div class="single-address-item">
                                    <div class="address-left-bg"></div>
                                    <div class="address-icon">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="address-text">
                                        <h4>email</h4>
                                        <p> info@carcare.com
                                            <br> admin@carcare.com
                                            <br> support@carcare.com
                                        </p>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Welcome Section -->
  <?php get_footer();?>

