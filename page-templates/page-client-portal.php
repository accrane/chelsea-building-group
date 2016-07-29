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


	


</div><!-- grey wrap full -->


<div class="grey-wrapper">


	<div class="client-portal">

	<div style="background: #fff; border: 2px solid #ccc; border-radius: 4px; margin: 0 auto; width: 90%; max-width: 600px;">
 	 	<div style="background: #ccc; color: #fff; font-size: 1em; padding: .5em; text-align: center;">CLIENT LOGIN</div>
 	 	<iframe class="portal" style="border: 0px none; height: 100px; margin-top: 1em; width: 100%;" src="http://www.buildertrend.net/loginFrametemplate.aspx?" width="600" height="100" frameborder="0"></iframe>
 	</div>

	</div><!-- client portal -->



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
