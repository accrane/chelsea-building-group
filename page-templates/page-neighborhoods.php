<?php
/**
 * Template Name: Neighborhoods
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

		</main><!-- #main -->
	</div><!-- #primary -->
    
	<div id="team-content">


		<?php if(get_field('neighborhood')): ?>      	
			<?php while(has_sub_field('neighborhood')): ?>
				<div class="team-member">

					<div class="neighborhoods-photo">
						<?php 
						$image = get_sub_field('image');
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> 
						<?php endif; ?>
					</div><!-- photo -->

					<div class="neighborhoods-content">
						<h2><?php the_sub_field("neighborhood_name"); ?></h2>

						<p><?php the_sub_field("description"); ?>

						<?php 
						$link = get_sub_field('link');
						if ( $link != "" ) { ?>
							<h6><a href="<?php echo $link; ?>" target="_blank">VISIT SITE</a></h6>
						<?php } ?>
					</div><!-- neightborhood content -->
				</div> <!-- team member -->
			 <?php endwhile; ?>
		<?php endif; ?>


	</div><!-- team content -->
    
    
</div><!-- grey wrap -->
<?php
get_footer();
