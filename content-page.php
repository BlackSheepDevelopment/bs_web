<?php

/**
 * The template used for displaying page content in page.php
 *
 * @package storefront
 */

?>

<!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> -->
<?php
/**
 * Functions hooked in to storefront_page add_action
 *
 * @hooked storefront_page_header          - 10
 * @hooked storefront_page_content         - 20
 */
// do_action('storefront_page');
?>

<!-- Create Web Banners -->
<div class="slider-container">
    <div class="slider">
        <img class="slider__image" src="<? echo get_stylesheet_directory_uri() . '/src/images/BS_BANNER_1.jpg' ?>" alt="bs-banner-1">
        <img class="slider__image slider__image--2" src="<? echo get_stylesheet_directory_uri() . '/src/images/BS_BANNER_2.jpg' ?>" alt=" bs-banner-2">
        <img class="slider__image" src="<? echo get_stylesheet_directory_uri() . '/src/images/BS_BANNER_3.jpg' ?>" alt=" bs-banner-3">
    </div>
    <button class="prev">Prev</button>
    <button class="next">Next</button>
</div>

<!-- </article>#post-## -->