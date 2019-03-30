
<section id="home-slider-v1" class="slider-v1">
    <div class="main-slider-v1 owl-item">
        <?php $customSlider= new WP_Query(array(
            'post_type'=>'slider',
            ));

        while ($customSlider->have_posts()):$customSlider->the_post(); ?>


         <div class="item" style="background-image:url(<?php   the_post_thumbnail('slider_image') ?> )"> 
            
           <div class="overlay"></div> 
            <div class="slide-description">
                <div class="animate-item">
                    <h2><?php the_title();  ?></h2>
                </div>
                 <div class="animate-item">
                     <h3><?php the_content(); ?></h3>
                </div>
                <div class="animate-item">
                    <a class="btn-1 btn btn-primary" href="#">Contact</a>
                    <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                </div>
            </div>

        </div> 

        <?php endwhile; ?>


        

       <!--  <div class="item" style="background-image:url(images/resource/home-slide-2.jpg);">
            <div class="overlay"></div>
            <div class="slide-description">
                <div class="animate-item">
                    <h2>Welcome to Our Car Care House!!!</h2>
                </div>
                <div class="animate-item">
                    <h3>Top One Car Care in your city with very good quality Engr.</h3>
                </div>
                <div class="animate-item">
                    <a class="btn-1 btn btn-primary" href="#">Contact</a>
                    <a class="btn-2 btn btn-primary" href="#">Appoinment</a>
                </div>
            </div>
        </div> -->
  </div>
</section>
<!-- Slider End 