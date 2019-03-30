
<?php get_header(); ?>


              <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_template_directory_uri().'/images/ocean.jpg' ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <!-- <h1 class="page-banner__title"><?php the_archive_title(); ?></h1> -->
      <div class="page-banner__intro">
        <?php the_archive_description(); ?>
      </div>
    </div>  
  </div>

  <div class="container container--narrow page-section">
    <?php while (have_posts()) {
      the_post(); ?>
      <div class="post-item">
        <h2 class="headline headline--mediun headline--post-title"><a href="<?php the_permalink(); ?>">the heading one.</a></h2>
        <div class="metabox">
          <p>posted by <?php the_author_posts_link() ?> on <?php the_time('F j, Y') ?> in <?php the_category(' ,'); ?> </p>
        </div>
        <div class="generic-content">
          <?php the_excerpt(); ?>
          <p><a class="btn btn--blue" href="<?php the_permalink() ?>">Continue Reading &raquo;</a></p>
        </div>
      </div>
     
   <?php  } ?>

   <?php the_posts_pagination(); ?>
  </div>


<?php get_footer(); ?>