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
