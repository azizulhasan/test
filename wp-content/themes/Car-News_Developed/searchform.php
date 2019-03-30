<?php
/**
 * Template for displaying search forms
 *
 * @since Car News 1.0
 */
?>
<div class="header-top-search">
    <form action="<?php echo home_url('/');?>" method="get">
        <input type="search" placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder', 'carnews' ); ?>" value="<?php echo get_search_query();?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'carnews' ); ?>">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>