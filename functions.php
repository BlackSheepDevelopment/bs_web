<?php

/* Load assets */
function load_assets($entries)
{
    $assets = file_get_contents(get_stylesheet_directory() . '/assets.json');
    $assets = json_decode($assets);

    foreach ($assets as $chunk => $files) {
        foreach ($entries as $entry) {
            if ($chunk == $entry) {
                foreach ($files as $type => $asset) {
                    switch ($type) {
                        case 'js':
                            wp_enqueue_script($chunk, get_stylesheet_directory_uri() . '/' . $asset, array(), false, true);
                            break;
                        case 'css':
                            wp_enqueue_style($chunk, get_stylesheet_directory_uri() . '/' . $asset);
                    }
                }
            }
        }
    }
}


/**
 * Functions hooked into storefront_header action
 *
 * @hooked storefront_header_container                 - 0
 * @hooked storefront_skip_links                       - 5
 * @hooked storefront_social_icons                     - 10
 * @hooked storefront_site_branding                    - 20
 * @hooked storefront_secondary_navigation             - 30
 * @hooked storefront_product_search                   - 40
 * @hooked storefront_header_container_close           - 41
 * @hooked storefront_primary_navigation_wrapper       - 42
 * @hooked storefront_primary_navigation               - 50
 * @hooked storefront_header_cart                      - 60
 * @hooked storefront_primary_navigation_wrapper_close - 68
 */



add_action("bs_header", "storefront_header_container");
add_action("bs_header", "add_bs_logo");
add_action("bs_header", "storefront_social_icons");
add_action("bs_header", "storefront_secondary_navigation");
add_action("bs_header", "storefront_header_container_close");
add_action("bs_header", "storefront_primary_navigation_wrapper");
add_action("bs_header", "storefront_primary_navigation");
add_action("bs_header", "storefront_header_cart");
add_action("bs_header", "storefront_primary_navigation_wrapper_close");

function add_bs_logo()
{
?>
    <div class="header__logo">
        <a href="<?php echo get_home_url(); ?>">
            <img src="<?php echo get_stylesheet_directory_uri() . '/src/images/BS_LOGO_BLACK.png'; ?>" alt="blacksheep-logo">
        </a>
    </div>
<?php
}
