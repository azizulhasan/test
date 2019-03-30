
<?php get_header(); 
   page_banner();


?>


    

  <div class="container container--narrow page-section">
    <?php while (have_posts()) {
      the_post(); ?>
      <div class="post-item">
        <h2 class="headline headline--mediun headline--post-title"><a href="<?php the_permalink(); ?>"></a></h2>
        
        <div class="generic-content">
        	 <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('program');?>"><i class="fa fa-home" aria-hidden="true"></i> All Programs</a> <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>
           <?php the_content(); ?>


           <?php 

           
             $relatedProfessors= new WP_Query(array(
               'post_type'=>'proffessor',
               'orderby'=>'title',
               'order'=>'ASC',
              
               'meta_query'=>array(
                 array(
                  'key'=>'related_program',
                  'compare'=>'LIKE',
                  'value'=>'"' .get_the_ID(). '"'


                 )
               )
               

             ));
             if($relatedProfessors->have_posts()){

             echo '<h4 class="headline headline--medium">'.get_the_title().' Professors.</h2>';
             echo '<ul class="professor-cards">';
             while ($relatedProfessors->have_posts()) {
               $relatedProfessors->the_post();?>

               <li class="proffessor-card__list-item">
                <a class="professor-card"> href="<?php the_permalink(); ?>">
                  <img class="professor-card__image" src="<?php the_post_thumbnail_url() ?>" alt="">
                  <span class="professor-card__name"><?php the_title(); ?></span>
                </a>
              </li>

            <?php } 
             echo '</ul>';
             }

             wp_reset_postdata();




           $taday= date('Ymd');
             $commingEvents= new WP_Query(array(
               'post_type'=>'event',
               'posts_per_page'=>2,
               
               'meta_key'=>'my_event',
               'orderby'=>'meta_value_num',
               'order'=>'ASC',
               'meta_query'=>array(
                 array(
                   'key'=>'my_event',
                   'compare'=>'>=',
                   'value'=> $taday,
                   'type'=>'numeric'
                 ),
                 array(
                  'key'=>'related_program',
                  'compare'=>'LIKE',
                  'value'=>'"' .get_the_ID(). '"'


                 )
               )
               

             ));
             if($commingEvents->have_posts()){

             
               echo '<hr/ class="section-break">';

               echo '<h4>NOtice</h4>';
                echo 'my this function is no working. <h5>function is which program doesno have any upcommin event will no show here, right bello . program is created as instracted.</h5>';

             echo '<h4 class="headline headline--medium"> Upcomming '.get_the_title().' Event.</h2>';
             while ($commingEvents->have_posts()) {
               $commingEvents->the_post();?>
              <div class="event-summary">

             <a class="event-summary__date t-center" href="<?php the_permalink() ?>">
               <span class="event-summary__month"><?php 
              $my_date= get_field('my_event');

               $eventDate= new DateTime($my_date);
               echo $eventDate->format('M');
                ?></span>
               <span class="event-summary__day"><?php  echo $eventDate->format('d'); ?></span>  
             </a>
             <div class="event-summary__content">
               <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink() ?>"><?php echo get_the_title() ?></a></h5>
               <p><?php 
               if(has_excerpt()){
                 echo get_the_excerpt();
               } else {
                 echo wp_trim_words(get_the_content(),20) ;
               }?>
                <a href="<?php the_permalink() ?>" class="nu gray">Learn more</a></p>
             </div>
           </div>


               
            <?php }
             


             }

            ?>
            
            

          
        </div>
      </div>
     
   <?php  } ?>

   <?php the_posts_pagination(); ?>
  </div>


<?php get_footer(); ?>
