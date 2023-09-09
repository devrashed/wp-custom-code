<?php

function rk_product_category_sorting_option($options) {

    $options['date_desc'] = __('Date (Newest)', 'rk-wpxpert');
    $options['popularity'] = __('Most Popular', 'rk-wpxpert');
    $options['price'] = __('Price (Low to High)', 'rk-wpxpert');
    $options['price-desc'] = __('Price (High to Low)', 'rk-wpxpert');
    
    if (isset($options['rating'])) {
        unset($options['rating']);
    }
    if (isset($options['date'])) {
        unset($options['date']);
    }
    
    return $options;
}
add_filter('woocommerce_catalog_orderby', 'rk_product_category_sorting_option');


?>