<?php
if( !defined( 'ABSPATH') && !defined('WP_UNINSTALL_PLUGIN') )
    exit();
 
function remove_slurp_page() {
  echo "removing slurp page";
  $force_delete = true;
  $post = get_page_by_path('mijireh-secure-checkout');
  wp_delete_post($post->ID, $force_delete);
  delete_option('slurp_page_installed');
}

remove_slurp_page();