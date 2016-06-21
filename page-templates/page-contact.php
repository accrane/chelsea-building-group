<?php
/**
 * Template Name: Contact Us
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

<div class="grey-wrapper">
	<div id="primary" class="content-area js-blocks">

			<?php
			while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" class="contact-col">
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					</header><!-- .entry-header -->

					
					<div class="center">
						<div class="contactinfo">
						<div class=""><?php the_content(); ?></div>
							
						</div><!-- .entry-content -->
					</div><!-- center -->

					
				</article><!-- #post-## -->
			<?php endwhile; // End of the loop.
			?>

	
	</div><!-- #primary -->
    
    
    
	<div id="content-right" class="js-blocks">
		<?php the_field("map"); ?>
	</div><!-- content right -->

</div><!-- grey wrap -->
<?php
get_footer();
