<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Atrium Design
 */

get_header(); 
?>
  <div class="main-container">
    <div class="content-area">
        <div class="middle-align content_sidebar">
            <div class="site-main" id="sitemain">
				<?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                    // file called called content-___.php
                    get_template_part( 'content', 'page' );
                    endwhile; 
                else :
                     get_template_part( 'no-results' );      
                endif;
                ?>
            </div>
            <?php get_sidebar();?>
            <div class="clear"></div>
        </div>
    </div>

<?php get_footer(); ?>