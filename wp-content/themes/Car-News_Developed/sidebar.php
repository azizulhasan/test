<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package carnews
 */
?>
<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
    <div class="sidebar-wrap">
        <div class="siderbar-widget">
            <h4 class="sidebar-widget-title">Search</h4>
            <div class="search-form">
                <form action="<?php echo home_url( '/' ); ?>" method="get">
                    <input class="search-field" placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder', 'carnews' ); ?>" value="<?php echo get_search_query();?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'carnews' ); ?>" type="search" name="s">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <div class="siderbar-widget">
            <h4 class="sidebar-widget-title">Category</h4>
            <ul>
                <?php
                        $args = array(
                            'orderby' => 'slug',
                            'parent' => 0
                        );

                        $categories = get_categories( $args );
                        foreach ( $categories as $category ) {
                            echo '<li><a href="' . get_category_link( $category->term_id ) . '" rel="bookmark"> <i class="glyphicon glyphicon-ok"> '  . $category->name . '</i>' . '' . $category->description . '</a></li>';
                         }
                    ?>

            </ul>
        </div>
        <div class="siderbar-widget">
            <h4 class="sidebar-widget-title">ARCHIVES</h4>
            <ul>
                <?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 12,'order' => 'ASC' ));?>
            </ul>
        </div>

        <?php dynamic_sidebar("widget-home-one");?>


        <div class="siderbar-widget">
            <h4 class="sidebar-widget-title">Tecnology Category</h4>
            <?php 
            $tecno  = new WP_Query(array(
                'post_type'      => 'post',
                'posts_per_page' => 4,
                'orderby'        => 'title',
                'order'          => 'DESC',
                'category_name'  => 'Tecnology'
            ));

            if(have_posts()): while($tecno-> have_posts()) : $tecno-> the_post();?>
            <div class="widget-news">
               <?php the_post_thumbnail('myFituredImage', array('class' => 'my-post-thumb')); ?>
                <div class="news-text">
                    <p><?php the_title();?></p>
                    <a class="" href="<?php the_permalink();?>">Read More</a>
                </div>
            </div>
                <?php endwhile;?>
            <?php endif;?>
        </div>

        <div class="siderbar-widget">
            <h4 class="sidebar-widget-title">Random Post</h4>
            <?php 
            $tecno  = new WP_Query(array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'orderby'        => 'rand',
                'order'          => 'ASC',
                'category_name'  => 'Tecnology'
            ));

            if(have_posts()): while($tecno-> have_posts()) : $tecno-> the_post();?>
            <div class="widget-news">
               <?php the_post_thumbnail('myFituredImage', array('class' => 'my-post-thumb')); ?>
                <div class="news-text">
                    <p><?php the_title();?></p>
                    <a class="" href="<?php the_permalink();?>">Read More</a>
                </div>
            </div>
                <?php endwhile;?>
            <?php endif;?>

        </div>

        <div class="siderbar-widget">
            <h4 class="sidebar-widget-title">Most View Post</h4>
            <div class="widget-news">
                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/resource/blog-1.jpg" alt=""></a>
                <div class="news-text">
                    <p>The Act makes provision for the interpretation of Acts of Parliament.</p>
                    <a class="" href="#">Read More</a>
                </div>
            </div>
            <div class="widget-news">
                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/resource/blog-2.jpg" alt=""></a>
                <div class="news-text">
                    <p>The Act makes provision for the interpretation of Acts of Parliament.</p>
                    <a class="" href="#">Read More</a>
                </div>
            </div>
            <div class="widget-news">
                <a href="#"><img src="<?php echo get_template_directory_uri();?>/images/resource/blog-3.jpg" alt=""></a>
                <div class="news-text">
                    <p>The Act makes provision for the interpretation of Acts of Parliament.</p>
                    <a class="" href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>