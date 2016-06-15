<?php
/**
 * Template Name: Client Portal
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

<div class="grey-wrap-full">

	<div class="grey-wrapper-title">
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->
	</div><!-- grey wrap title -->

	<div class="client-portal-wrap">
		<div class="client-portal">
			<iframe class="login" style="margin: 0 auto; display: block;" src="http://www.buildertrend.net/loginFrametemplate.aspx?builderID=2495"  frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
		</div><!-- client portal -->
	</div><!-- c p wrap -->
</div><!-- grey wrap full -->


<div class="grey-wrapper">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">



					<?php
					while ( have_posts() ) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							

							<div class="entry-content">
								<?php
									the_content();

									if(is_page('sitemap')) {
										wp_nav_menu( array( 'theme_location' => 'sitemap' ) );
									}
								?>
							</div><!-- .entry-content -->

							
						</article><!-- #post-## -->

					<?php endwhile; // End of the loop.
					?>
		

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- grey wrapper -->

		
	
    
    

<?php
get_footer();
