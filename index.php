<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
* Learn more: http://codex.wordpress.org/Template_Hierarchy
*/

get_header(); ?>


    
<div class="entry-content">

  <div class="all_content">
    <div class="main_content">
      <div class="landing">
        <div class="jumbotron">
                  
          <?php echo photo_gallery(2); ?>
        </div>

        <div class="welcome"> 
          <h1>Welcome to New Grit Soap Co.</h1>
             
          <?php query_posts('p=59'); ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile;?>
                
        </div>

        <div class="sale_items">
          <h2>Featured Items</h2>
               
          <?php query_posts('p=56'); ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php echo $post->post_content; ?>
          <?php endwhile;?>
                 
        </div>
        <div style="clear: both"></div>
        
      </div>


      <div class="break_line"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/blackLine.png" alt="<?php bloginfo('name'); ?>"></div>
      <div class="about" id="about">
        <h1>History and the Process</h1>
        <p> New Grit Soap Co. was created by Anodyne Briggs, a student of medicinal herbalism and former tattoo artist. It's humble beginnings took place making small batches of soap in an even smaller kitchen. Her passion for art along with an eager curiosity for traditional medicine led her to start this business in 2014. New Grit Soap Co. now features numerous high quality products.</p>

        <p>All of our goods are still crafted in small batches with many of them made fresh to order. We use all natural ingredients, locally sourced when available. This is a business for those with grit. Those who care about their body and how it looks.</p>

        <p> All recipes are unique to our brand and all graphic designs are produced in house.</p>

        <p> Created With: </p>

        <ul>
          <li>[ + ] Natural ingredients</li>
          <li>[ + ] Vegan ingredients</li>
          <li>[ + ] High quality essential oils</li>
          <li>[ + ] Sustainable and responsibly sourced palm oil</li>
        </ul>

        <p>Created Without:</p>

        <ul>
          <li>[ - ] Synthetic ingredients</li>
          <li>[ - ] Animal ingredients</li>
          <li>[ - ] Preservatives</li>
          <li>[ - ] Fragrances</li>
          <li>[ - ] Fillers</li>
          <li>[ - ] Animal Testing</li>
        </ul>
      </div>

      <div class="break_line"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/blackLine.png" alt="<?php bloginfo('name'); ?>"></div>
      <div class="shop" id="shop">
        <h1>The Shop is full and ready to make you feel like a rockstar!</h1>

        <a href="https://www.etsy.com/shop/NewGritSoapCo"><img class="shop_img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/shop-img.png" alt="<?php bloginfo('name'); ?>"></a>

      </div>

      <div class="break_line"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/blackLine.png" alt="<?php bloginfo('name'); ?>"></div>
      <div class="contact" id="contact">
        <h1 class="contact_title">Feel free to contact us with questions, comments or wholesale inquiries.</h1>

        <?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?> 
      </div>

    </div>
  </div>

  <?php get_footer(); ?>
