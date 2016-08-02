<?php
/**
 * Template Name: Our Team
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
    
	<?php if(get_field('team_member')): ?> 

		<div id="team-content">

			<?php while(has_sub_field('team_member')): ?>
				<div class="team-member">
					<div class="team-member-photo">
						<?php 
						$image = get_sub_field('image');
						if( !empty($image) ): ?>
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> 
						<?php endif; ?>
					</div><!-- team member phooto -->
					
					<div class="team-member-content">
						<h2><?php the_sub_field("name"); ?></h2>
						<h3><?php the_sub_field("title"); ?></h3>

						<p><?php the_sub_field("description"); ?></p>
						</div><!-- team memeber content -->
				 
						
				</div> <!-- team member -->

		<?php endwhile; ?>

		</div><!-- team content -->

	<?php endif; ?>

	<?php the_field("bottom_content"); ?>   
	
    
    
</div><!-- grey wrap -->
<?php
get_footer();
