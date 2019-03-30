                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="sidebar-wrap">
                        <!-- Search -->
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Search</h4>
                            <div class="search-form">
                                <form class="" method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
                                    <input name="s" id="s"  class="search-field" placeholder="Search" value="<?php the_search_query(); ?>" type="search">
                                    <button  type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>


                        <!-- Category -->
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Category</h4>
                            <ul>
                               
                            <?php  $categories = get_categories( array(
                                    'orderby' => 'slug',
                                    'parent'  => 0
                                ) );
                             foreach ( $categories as $category ) {
                                  printf( '<li><a href="%1$s"><i class="fa fa-check"></i>  %2$s</a></li><br />',
                                        esc_url( get_category_link( $category->term_id ) ),
                                        esc_html( $category->slug )
                                    );

                                }
                                 ?>
                                 
                            </ul>
                        </div>
                        <!-- ARCHIVE -->
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">ARCHIVES</h4>
                            <ul>
                                <?php $args = array(
                                    'type'            => 'monthly',
                                    'limit'           => 12,
                                    'format'          => 'html', 
                                    'before'          => '',
                                    'after'           => '',
                                    'show_post_count' => false,
                                    'echo'            => 1,
                                    'order'           => 'DESC',
                                    'post_type'     => 'post'
                                );
                                wp_get_archives( $args ); ?>
                                <!-- <li><a href="#">January 2017 <span>(15)</span></a></li> -->
                                
                            </ul>
                        </div>

                        <!-- dynamic_sidebar -->
                        <div class="siderbar-widget">
                             <ul>
                                 <?php dynamic_sidebar('sidebar_1') ?>
                             </ul>
                         </div>

                        <!-- POSTS FROM SPECIPIC CATEGORY -->
                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">TECNOLOGY NEWS</h4>
                            <?php 
                              $techno= new WP_Query(array(

                                'post_type'=>'post',
                                'posts_per_page'=> 2,
                                'orderby'       =>'title',
                                'category_name'=>'hasan',
                                'order'=>'DESC'
                              ));

                             ?>
                            <?php if($techno->have_posts()):
                                while ($techno->have_posts()):$techno->the_post(); ?> 
                            <div class="widget-news">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('my_mini_image') ?></a>
                                <div class="news-text">
                                    <p><?php the_title(); ?></p>
                                    <a class="" href="<?php the_permalink(); ?>">Read More</a>
                                </div>
                            </div>
                            <?php endwhile;
                              endif;
                            ?>   
                        </div>


                         
                        <!-- RANDOM POSTS -->

                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">RANDOM POSTS</h4>
                            <?php 
                              $random= new WP_Query(array(

                                'post_type'=>'post',
                                'posts_per_page'=> 3,
                                'order'=>'DESC',
                                'orderby' =>'rand',

                               
                                
                              ));

                             ?>
                            <?php if($random->have_posts()):
                                while ($random->have_posts()):$random->the_post(); ?> 
                            <div class="widget-news">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('my_mini_image') ?></a>
                                <div class="news-text">
                                    <p><?php the_title(); ?></p>
                                    <a class="" href="<?php the_permalink(); ?>">Read More</a>
                                </div>
                            </div>
                            <?php endwhile;
                              endif;
                            ?>   
                        </div>

                       



                        <div class="siderbar-widget">
                            <h4 class="sidebar-widget-title">Tags</h4>
                            <ul class="tag-list">

                               <!--  <li><a class="active transition7s" href="#">HTML</a></li> -->
                                 <!-- <li><?php the_tags(); ?></li> -->
                                 <?php the_tags( 'Tags: ', ', ', '<br />' ); ?> 
                                
                            </ul>
                        </div>
                    </div>
                </div>