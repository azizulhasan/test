<?php get_header();?>

    <!-- News / Blog section  
    ============================================= -->
    <div id="news-area" class="section-gray news-section-single">
        <div class="container">
            <div class="row">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                    <div class="single-page-details">
                        <h2><?php the_title();?></h2>
                        <?php the_content();?>
                        <div class="tag-list"><?php the_tags(); ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="related_post_area">
                                <h3>Related Posts</h3>

                                <?php
                                $myTags = wp_get_post_tags($post->ID);

                                if ($myTags) {
                                    $finalTag = $myTags[0]->term_id;
                                    
                                    $my_query = new WP_Query(array(
                                        'tag__in' => array($finalTag),
                                        'post__not_in' => array($post->ID),
                                        'posts_per_page'=>3,
                                        'caller_get_posts'=>1
                                    ));
                                    
                                    
                                    if( $my_query->have_posts() ) {
                                    while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="related_post_item">
                                             <?php the_post_thumbnail('myFituredImage', array('class' => 'my-post-thumb')); ?>
                                            <h2><a href=""><?php the_title();?></a></h2>
                                            <?php the_excerpt();?>
                                        </div>
                                    </div>
                                        
                                        <?php
                                        endwhile;
                                        }
                                        wp_reset_query();
                                    }
                                ?>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="bio-info-area">
                                <h4><span>Author : </span> <?php the_author_posts_link();?> <strong>Total post : <?php echo get_the_author_posts();?></strong></h4>
                                <?php echo get_avatar(get_the_author_meta( 'ID' ), $size, $default, $alt, $args ); ?>
                            
                                <p><?php the_author_meta('description');?></p>
                                <div class="author-info">
                                    <ul>
                                        <li><a href="#">View Author All Post</a> </li>
                                        <li><a href="<?php the_author_meta('twitter');?>">Twitter</a> </li>
                                        <li><a href="<?php the_author_meta('facebook');?>">Facebook</a> </li>
                                        <li><a href="<?php the_author_meta('googlePlus');?>">Google Plus</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="comment-area">
                                <h2 class="page-header">Comments</h2>

                                <?php comments_template( '', true ); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
                <?php endif;?>
<?php echo get_template_part("sidebar");?>
            </div>
        </div>
    </div>
    <!-- /news table  -->
  <?php get_footer();?>