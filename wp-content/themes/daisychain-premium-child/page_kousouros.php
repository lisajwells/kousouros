<?php
/**
 * The page template file.
 * Template Name: Kousouros1 Page
 * Description: A Page Template for non blogging.
*/

get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="content-headline">
      <h1 class="entry-headline"><?php the_title(); ?></h1>
<?php daisychain_get_breadcrumb(); ?>
    </div>
<?php daisychain_get_display_image_page(); ?>
    <div class="entry-content">
<?php the_content(); ?>
<?php edit_post_link( __( 'Edit', 'daisychain' ), '<p>', '</p>' ); ?>
<?php endwhile; endif; ?>
<?php daisychain_social_buttons_page(); ?>
<?php comments_template( '', true ); ?>
    </div>  
  </div> <!-- end of content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>



