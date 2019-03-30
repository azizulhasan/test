
<?php get_header(); ?>


              <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_template_directory_uri().'/images/ocean.jpg' ?>);"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <?php 

       $description= get_post_meta($post->ID,'description',true);

         ?>
        <p><?php echo $description; ?></p>
      </div>

    </div>  
  </div>

  <div class="container container--narrow page-section">
    <?php while (have_posts()) {
      the_post(); ?>
      <div class="post-item">
        <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"></a></h2>
        
        <div class="generic-content">
        	 <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('event');?>"><i class="fa fa-home" aria-hidden="true"></i> All Event</a> <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>
           <?php the_content(); ?>
          

 

           <?php 

           $relatedPrograms = get_field('related_program');
           
           if($relatedPrograms){
            echo '<hr/>'; 

            echo '<h2 class="headline headline--medium ">Related Programs</h2>';
            echo '<ul class="link-list min-list">';
           foreach ($relatedPrograms as $program) { ?>
            <li><a href="<?php echo get_the_permalink($program); ?>"><?php echo get_the_title($program) ?></a></li>

              
          <?php  }
          echo '</ul>';

           }
           
         
          

          
            ?>
          
        </div>
      </div>
     
   <?php  } ?>

   <?php the_posts_pagination(); ?>
  </div>

 
<?php get_footer(); ?>

