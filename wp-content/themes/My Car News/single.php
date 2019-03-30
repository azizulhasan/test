<?php get_header(); ?>
 <?php if(have_posts()):
        while (have_posts()):the_post(); ?> 
   

    <!-- News / Blog section  
    ============================================= -->
    <div id="news-area" class="section-gray news-section-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                    <div class="single-page-details">
                        <h2><?php the_title(); ?></h2>
                        <p>
                            <?php echo the_post_thumbnail('my_image',
                        array('class'=>'my_class'
                                )); ?>
                            <?php the_content(); ?>
                        </p>
                        <h5><?php the_tags(); ?></h5> 
                    </div>

                    <!-- RELATED POSTS -->
					<div class="row">
                        <div class="col-md-12">
                            <div class="related_post_area">
                                <h4 class="sidebar-widget-title">RELATED POSTS</h4>
                            <?php

                            $relat_tags=  wp_get_post_tags($post->ID);
                            if($relat_tags){

                                $firstTag= $relat_tags[0]->term_id;
                             



                              $my_query = new WP_Query(array(

                                'tag__in'=>array($firstTag),
                                'post__not_in'=>array($post->ID),
                                'posts_per_page'=> 3,
                                'caller_get_posts'=>1


                                
                              ));


                             if($my_query->have_posts() ){
                                while ($my_query->have_posts()):$my_query->the_post(); ?> 
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="related_post_item">
                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('related_image') ?></a>                                        <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>


                                            <p><?php   the_excerpt();?></p>
                                            <a class="" href="<?php the_permalink(); ?>">Read More</a>
                                        </div>
                                    </div>

                            
                            
                            <?php endwhile;
                                };
                             wp_reset_query();
                             }
                            ?>   
                        </div>
                        </div>   
                    </div>
					<div class="row">
                        <div class="col-md-12">
                            <div class="bio-info-area">
                                <h4><span>Author : </span> <?php the_author_posts_link(); ?> <strong>Total post : <?php echo get_the_author_posts() ?></strong></h4>
                                <?php echo  get_avatar(get_the_author_meta('ID')) ?>


                                                           
                                <p><?php the_author_meta('description') ?></p>
                                <div class="author-info">
                                    <ul>
                                        <li><a href="#">View Author All Post</a> </li>
                                        <li><a href="<?php the_author_meta('twitter') ?>">Twitter</a> </li>
                                        <li><a href="<?php the_author_meta('facebook') ?>">Facebook</a> </li>
                                        <li><a href="<?php the_author_meta('googlePlus') ?>">Google Plus</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php comments_template(); ?>  
                </div>
                <!-- /col-md-8 -->
                 <?php get_template_part('sidebar') ?>
                  <!-- /col-md-4 -->   
            </div>
            <!-- /row -->  
        </div>
          <!-- /container -->  
    </div>
    <!-- /section-gray news-section-single -->
        
    </div>
    <!-- /news table  -->
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

     <?php endwhile;
          else:
           get_template_part('404');
          endif;
            ?>
   <?php get_footer(); ?>