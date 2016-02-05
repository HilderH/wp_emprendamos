<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package tarful
 */

get_header(); 

tarful_before_content(); ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<?php tarful_before_loop() ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php

				get_template_part( 'template-parts/content', 'page' ); 

				/*$fw_page_layout = (function_exists('fw_ext_sidebars_get_current_position')) ? fw_ext_sidebars_get_current_position() : 'full';
				
				if($fw_page_layout == 'right') :
     				echo '<div class="col-md-8">';
        			get_template_part( 'template-parts/content', 'page' );
    				echo '</div>';

    				get_sidebar('content');
				endif;

				if($fw_page_layout == 'left') :
     				get_sidebar('content');

     				echo '<div class="col-md-8">';
        			get_template_part( 'template-parts/content', 'page' );
    				echo '</div>';
				endif;

				if($fw_page_layout == 'left_right') :
					echo fw_ext_sidebars_show('blue');
					echo '<div class="col-md-8">';
        			get_template_part( 'template-parts/content', 'page' );
    				echo '</div>';
    				echo fw_ext_sidebars_show('yellow');
    			endif;*/
				?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // End of the loop. ?>

			<?php tarful_after_loop() ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); 
	tarful_after_content();

get_sidebar();
get_footer(); ?>
