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