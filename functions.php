<?php
register_nav_menu( 'primary', __( 'Primary Menu', 'new-grit' ) );
register_nav_menu( 'sticky', __( 'Sticky Menu', 'new-grit' ) );
?>

<?php
wp_register_script( 'myscript', trailingslashit( get_template_directory_uri() ) . 'global.js', array(), '1.0', true );
wp_enqueue_script( 'myscript' );
?>

<?php
  
?>