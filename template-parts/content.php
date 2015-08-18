<?php
/**
* Template part for displaying posts.
*/

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-header">
  </div><!-- .entry-header -->
    
  <div class="entry-content"> 
    <?php the_content(); ?>

    <?php wp_link_pages(); ?>
  </div><!-- .entry-content -->
</div><!-- #post-## -->
