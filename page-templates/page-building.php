<?php
/**
 * Template Name: Building A Better Home
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

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>


			<div id="team-content">
				<?php if( have_rows('building_practice') ): ?>
					<div class="faqs">
						<?php while( have_rows('building_practice') ): the_row(); 

							$question = get_sub_field('title');
							$answer = get_sub_field('description');

						?>
							<div class="faqrow">

								<div class="question">
									<div class="question-image"></div><!--question-image-->
									<?php the_sub_field('title'); ?>
								</div><!--question-->

								<div class="answer">
									<?php the_sub_field('description'); ?>
								</div><!--answer-->

							</div><!-- faqrow -->

						<?php endwhile; ?>
					</div><!-- faqs -->
				<?php endif; ?>
			</div><!-- team content -->


		</main><!-- #main -->
	</div><!-- #primary -->
    
    
    
	<div id="content-right">

		<?php the_post_thumbnail('page-featured', array('class' => 'page-featured')); ?>

		<?php if (strlen(get_post_meta($post->ID, "excerpt_text", true)) > 0) : ?>
			<div id="content-excerpt-box"><?php the_field("excerpt_text"); ?>
		</div><?php endif; ?>

	</div><!-- content right -->
    
</div><!-- grey wrap -->
<?php
get_footer();
