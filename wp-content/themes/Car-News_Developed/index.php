<?php get_header();?>

<?php echo get_template_part("slider");?>

    <!-- News / Blog section  
    ============================================= -->
    <div id="news-area" class="section-gray pdb-28 news-section-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                    <div class="row">
                        
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-box">
                                <div class="inner-post-box">
                                    <div class="image-box">
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
                                        <?php echo word_count(get_the_excerpt(),30);?>
                                        </div>
                                      <!--   <?php 
                                            $reporter = get_post_meta($post->ID,'reporter',true);
                                        ?>
                                        <?php if(!empty( $reporter)){
                                            ?>
                                                <h4 style="color: red;">Reporter Name : <?php echo $reporter;?> </h4>
                                            <?php

                                        }?>

                                        <?php 
                                            $price = get_post_meta($post->ID,'price',true);
                                        ?>
                                        <?php if(!empty( $price)){
                                            ?>
                                                <h4 style="color: red;">Price : <?php echo $price;?> </h4>
                                            <?php

                                        }?> -->
                                        

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
<?php echo get_template_part("sidebar");?>
            </div>
        </div>
    </div>
    <!-- /news table  -->
 <?php get_footer();?>