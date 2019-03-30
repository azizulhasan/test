<?php 
/*
Template Name: Home Page Two
 */

include('header-two.php');?>

<?php echo get_template_part("slider");?>


    <!-- News / Blog section  
    ============================================= -->
    <div id="news-area" class="section-gray pdb-28 news-section-single">
        <div class="container">
            <div class="row">
                <?php echo get_template_part("sidebar");?>

                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                    <div class="row">
                         <div class="row">
                       <?php
                            $query = new WP_Query(array("post_type"=>"post","post_per_page"=>10));
                       ?>
                        <?php if ($query->have_posts() ) : while ($query->have_posts() ) : $query->the_post(); ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-box">
                                <div class="inner-post-box">
                                    <div class="image-box v2">
                                      <?php the_post_thumbnail('myFituredImage', array('class' => 'my-post-thumb')); ?>
                                    </div>
                                    <div class="content">
                                        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                        <div class="post-information">
                                            <ul>
                                                <li><i class="fa fa-user"></i> <?php the_author(); ?> </li>
                                                <li><i class="fa fa-calendar"></i>  <?php the_time('M d, Y'); ?> </li>
                                                <li><i class="fa fa-comment"></i>  &nbsp;<?php comments_popup_link( 'No Comments »', '1 Comment »', '% Comments »' ); ?></li>
                                            </ul>
                                        </div>
                                        <div class="text-des">
                                        <?php the_excerpt();?>
                                        </div>

                                    </div>
                                    <div class="post-info clearfix">
                                        <div class="pull-right">
                                        <a class="btn btn-primary transition7s" href="<?php the_permalink();?>">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <?php endwhile; else : ?>
                                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                            <?php endif; ?>




                        <div class="col-md-12">
                            
                            <?php the_posts_pagination();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
 <?php wp_footer();?>