<?php get_header();?>
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
                    </div><p><?php the_tags(); ?></p>
                </div>
             <?php endwhile;?>
            <?php endif;?>
<?php echo get_template_part("sidebar");?>
            </div>
        </div>
    </div>
    <!-- /news table  -->
  <?php get_footer();?>