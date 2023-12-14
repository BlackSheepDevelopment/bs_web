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
                <img class="slider__image" src="<?php echo get_stylesheet_directory_uri() . '/src/images/BS_BANNER_2.jpg' ?>" alt="bs-banner-1">
                <img class="slider__image slider__image--2" src="<?php echo get_stylesheet_directory_uri() . '/src/images/BS_BANNER_1.jpg' ?>" alt=" bs-banner-2">
                <img class="slider__image" src="<?php echo get_stylesheet_directory_uri() . '/src/images/BS_BANNER_3.jpg' ?>" alt=" bs-banner-3">
            </div>
            <button class="prev">
                <img class="slider__arrow" src="<?php echo get_stylesheet_directory_uri() . '/src/images/icons/arrow.svg' ?>" />
            </button>
            <button class="next">
                <img class="slider__arrow slider__arrow--right" src="<?php echo get_stylesheet_directory_uri() . '/src/images/icons/arrow.svg' ?>" />
            </button>
        </div>

        <!-- Show the top 5 products from the woocommerce -->
        <div class="col-full top-products">
            <p class="top-products__title">Más vendidos</p>
            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 5,
                'orderby' => 'rand'
            );
            $loop = new WP_Query($args);
            if ($loop->have_posts()) {
                echo '<ul class="products">';
                while ($loop->have_posts()) : $loop->the_post();
                    global $product;
                    echo '<li class="product">';
                    echo '<a href="' . get_permalink() . '">';
                    echo woocommerce_get_product_thumbnail();
                    echo '<h3>' . get_the_title() . '</h3>';
                    echo '<span class="price">' . $product->get_price_html() . '</span>';
                    echo '</a>';
                    echo '</li>';
                endwhile;
                echo '</ul>';
            } else {
                echo __('No products found');
            }
            wp_reset_postdata();
            ?>
        </div>



    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
