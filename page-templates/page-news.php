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
	<div id="primary" class="content-area-news">
		<main id="main" class="site-main" role="main">
			<div id="team-content">
			    <?php
					$wp_query = new WP_Query();
					$wp_query->query(array(
					'post_type'=>'post',
					'posts_per_page' => 4,
					'paged' => $paged,
				));
					if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); 

					if ( has_post_thumbnail() ) {
						$postClass = 'has-thumb';
					} else {
						$postClass = 'no-thumb';
					}

					?>

					
						<div class="news-thumb <?php echo $postClass; ?>"><?php the_post_thumbnail('news-featured', array('class' => 'page-featured')); ?></div>

						<div class="news-story <?php echo $postClass; ?>">
							<h2>
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>
							</h2>

							<p class="entry-content"><?php the_advanced_excerpt();?></p>

							<h6><a href="<?php the_permalink(); ?>">CONTINUE READING</a></h6>
						</div><!-- news story -->
						

					<?php endwhile; ?>
					<div class="team-member"><?php pagi_posts_nav(); ?></div><!-- team member -->  
				<?php endif; ?>


				</div><!-- team content -->  

		</main><!-- #main -->
	</div><!-- #primary -->
    
    
    
    <?php get_sidebar(); ?>

</div><!-- grey wrap -->
<?php
get_footer();
