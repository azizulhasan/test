<?php get_header();?>

    <!-- News / Blog section  
    ============================================= -->
    <div id="news-area" class="section-gray pdb-28 news-section-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ftl">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-information-area">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="profile-information-area-left">
                                            <h4><?php the_author();?></h4>
                                            <?php echo get_avatar(get_the_author_meta( 'ID' )); ?>
                                            
                                            <p><?php the_author_meta('description');?></p>
                                            <div class="profile-basic-info">
                                                <ul>
                                                    <li>Total post <span><?php echo get_the_author_posts();?></span></li>
                                                    <li>Total Comments : <span><?php wp_list_comments(); ?></span> </li>
                                                    <li><a href="<?php the_author_meta('facebook');?>">Facebook</a> </li>
                                                    <li><a href="<?php the_author_meta('twitter');?>">Twitter</a> </li>
                                                    <li><a href="<?php the_author_meta('googlePlus');?>">Google Plus</a> </li>
                                                     <li>Email: <?php the_author_meta('user_email');?></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                                        <div class="profile-information-area-right">
                                             <?php $i=0;?>
                                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                                <?php if($i ==0 or  $i ==1 or $i ==2){?>

                                            <div class="author-recent-post">
                                                <div class="author-recent-post-item">
                                                    <h2><?php the_title();?></h2>
                                                    <?php the_post_thumbnail('myFituredImage', array('class' => 'my-post-thumb')); ?>
                                                    <p><?php the_excerpt();?></p>
                                                    <div class="author-post-info">
                                                        <ul>
                                                            <li>By : <?php the_author(); ?> </li>
                                                            <li>Date: <?php the_time('M d, Y'); ?> </li>
                                                            <li>Comments:<?php comments_popup_link( 'No Comments »', '1 Comment »', '% Comments »' ); ?>  </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php }
                                            $i++;
                                        ?>
                                        <?php endwhile; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                    <div class="row">
                        <?php $i=0;?>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php if($i !=0 and $i !=1 and $i !=2){?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-box">
                                <div class="inner-post-box">
                                    <div class="image-box">

                                      <?php the_post_thumbnail('myFituredImage', array('class' => 'my-post-thumb')); ?>

                                        <div class="post-caption transition7s">
                                            <ul>
                                                <li><i class="fa fa-user"></i> <?php the_author(); ?> </li>
                                                <li><i class="fa fa-calendar"></i> <?php the_time("g:i a"); ?> </li>
                                                <li><i class="fa fa-comment"></i><?php comments_popup_link( 'No Comments »', '1 Comment »', '% Comments »' ); ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                                        <div class="text-des">
                                        <?php the_excerpt();?>
                                        </div>

                                    </div>
                                    <div class="post-info clearfix">
                                        <div class="pull-left">
                                        <a class="btn btn-primary transition7s" href=""><i class="fa fa-calendar"></i>  <?php the_time('M d, Y'); ?></a>
                                        </div>
                                        <div class="pull-right">
                                        <a class="btn btn-primary transition7s" href="<?php the_permalink();?>">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }
                            $i++;
                        ?>
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