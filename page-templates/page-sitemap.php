<?php
/**
 * Template Name: Sitemap
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
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );


			endwhile; // End of the loop.
			?>
            
            <div id="sitemap">
				<?php wp_nav_menu( array( 'theme_location' => 'sitemap' ) ); ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- grey wrap -->
<?php
get_footer();
