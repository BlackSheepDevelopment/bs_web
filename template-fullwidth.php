<?php

/**
 * The template for displaying full width pages.
 *
 * Template Name: Full width
 *
 * @package storefront
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <div class="slider-container">
            <div class="slider">
                <img class="slider__image" src="<?php echo get_stylesheet_directory_uri() . '/src/images/BS_BANNER_1.jpg' ?>" alt="bs-banner-1">
                <img class="slider__image slider__image--2" src="<?php echo get_stylesheet_directory_uri() . '/src/images/BS_BANNER_2.jpg' ?>" alt=" bs-banner-2">
                <img class="slider__image" src="<?php echo get_stylesheet_directory_uri() . '/src/images/BS_BANNER_3.jpg' ?>" alt=" bs-banner-3">
            </div>
            <button class="prev">
                <img class="slider__arrow" src="<?php echo get_stylesheet_directory_uri() . '/src/images/icons/arrow.svg' ?>" />
            </button>
            <button class="next">
                <img class="slider__arrow slider__arrow--right" src="<?php echo get_stylesheet_directory_uri() . '/src/images/icons/arrow.svg' ?>" />
            </button>
        </div>

        <div class="menu-categories">

        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
