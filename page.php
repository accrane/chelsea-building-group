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

		</main><!-- #main -->
	</div><!-- #primary -->

<div id="content-right">

	<?php the_post_thumbnail('page-featured', array('class' => 'page-featured')); ?>

	<?php if (strlen(get_post_meta($post->ID, "excerpt_box", true)) > 0) : ?>
		<div id="content-excerpt-box">
			<?php the_field("excerpt_box"); ?>
		</div>
	<?php endif; ?>


</div><!-- content right -->
</div><!-- grey wrap -->
<?php
get_footer();
