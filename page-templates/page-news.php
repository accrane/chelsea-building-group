<?php
/**
 * Template Name: News
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
    <?php
		$wp_query = new WP_Query();
		$wp_query->query(array(
		'post_type'=>'post',
		'posts_per_page' => 4,
		'paged' => $paged,
	));
		if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

		<div class="team-member">
			<div class="neighborhoods-photo" style="min-height:10px;">
			<?php the_post_thumbnail('news-featured', array('class' => 'page-featured')); ?>
			</div><!-- photo -->
			<div class="neighborhoods-content">
				
				<h2>
					<a href="<?php the_permalink(); ?>">
						<?php the_title(); ?>
					</a>
				</h2>

				<p><?php the_advanced_excerpt();?></p>

				<h6><a href="<?php the_permalink(); ?>">CONTINUE READING</a></h6>

			</div><!-- neighborhoods content -->
		</div><!-- team member -->

		<?php endwhile; ?>
		<div class="team-member"><?php pagi_posts_nav(); ?></div><!-- team member -->  
	<?php endif; ?>


	</div><!-- team content -->  
    
    
</div><!-- grey wrap -->
<?php
get_footer();
