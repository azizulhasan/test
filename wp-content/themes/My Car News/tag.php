<?php get_header(); ?>

  


    <!-- News / Blog section  
    ============================================= -->
    <div id="news-area" class="section-gray pdb-28 news-section-single">
        <div class="container">
        	<h1>this is tag page</h1>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ftl">
                    <div class="row">
               
                    

                    <?php if(have_posts()):
                        while (have_posts()):the_post(); ?> 



                    
                    
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="post-box">
                                <div class="inner-post-box">
                            
                                    <div class="image-box">
                                        <a href="<?php the_permalink() ?>">
                                            <?php echo the_post_thumbnail() ?>
                                        </a>
                                        <div class="post-caption transition7s">
                                            <ul>
                                             <li><i class="fa fa-user"></i><?php the_author_posts_link(); ?>
                                             </li>
                                                

                                            <li><i class="fa fa-clock-o"></i> <?php the_time("g:i A") ?></li>

                                            <li><i class="fa fa-comment"></i><?php echo comments_popup_link('No Comments','1 Comment','% Comments','my_comment','Comment Off'); ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <div class="text-des">
                                        <p>
                                            <?php   the_excerpt();?>
                                        </p> 
                                        </div>

                                    </div>
                                    <div class="post-info clearfix">
                                        <div class="pull-left">
                                        <a class="btn btn-primary transition7s" href="news-single.html"><i class="fa fa-calendar"></i> <?php echo get_the_date('M,j,F'); ?></a>
                                        </div>
                                        <div class="pull-right">
                                        <a class="btn btn-primary transition7s" href="<?php the_permalink(); ?>">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                          <?php endwhile;
                        else:
                            echo 'there is no content';
                        endif;
                        ?>
                        <div class="col-md-12">
                            <div class="pagination-area tac">
                                <nav>
                               <ul class="pagination pagination-lg">
                                        
                          <?php the_posts_pagination(); ?>
 
                                    </ul>
                                </nav>
                            </div>
                        </div> 

                         


                        

                    </div>
                    <!-- /row -->

                </div>
                <!-- /col-md-8 -->
                 <?php get_template_part('sidebar') ?>

               
                <!-- /col-md-4 -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <?php get_template_part('newslater') ?>
   <?php get_footer(); ?>