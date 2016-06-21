<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="">
		<main id="main" class="site-main" role="main">
			<?php
			$wp_query = new WP_Query();
			$wp_query->query(array(
				'post_type'=>'page',
				'page_id' => 40
			));
			if ($wp_query->have_posts()) : ?>
		    <?php while ($wp_query->have_posts()) : ?>
		        
		    <?php $wp_query->the_post(); 

		    // Hero Gallery
		    $gallery = get_field('gallery');
		    
		    // Box 2
		    $box_2_text_top = get_field('box_2_text_top');
		    $box_2_text_bottom = get_field('box_2_text_bottom');
		    
		    // Box 3
		    $page_or_post_link = get_field('page_or_post_link');
		    $box_3_title = get_field('box_3_title');
		    $box_3_excerpt = get_field('box_3_excerpt');
		    
		    // Box 4
		    $box_4_text_top = get_field('box_4_text_top');
		    $box_4_text_bottom = get_field('box_4_text_bottom');
		    
		    // Box 5
		    $box_5_page_or_post_link = get_field('box_5_page_or_post_link');
		    $box_5_title = get_field('box_5_title');
		    $box_5_excerpt = get_field('box_5_excerpt');
		    
		    // Box 6
		    $image = get_field('picture');
		    
		    // Box 7
		    $box_7_top_text = get_field('box_7_top_text');
		    $box_7_bottom_text = get_field('box_7_bottom_text');
		    
		    // Box 8
		    $box_8_page_or_post_link = get_field('box_8_page_or_post_link');
		    //$gallery = get_field('gallery');
		    //$gallery = get_field('gallery');

			$url = $image['url'];
			$title = $image['title'];
			$alt = $image['alt'];
			$caption = $image['caption'];
		 	$size = 'large';
			$thumb = $image['sizes'][ $size ];
			$width = $image['sizes'][ $size . '-width' ];
			$height = $image['sizes'][ $size . '-height' ];
		    ?>
	

		     <?php endwhile;  endif;  // Got our variables, end query?>


        	<section class="home">
        		<!-- 

								Hero

	        		################################################### -->
        		<div class="home-left">
	        		<div class="hero">
	        			<?php if( $gallery ): ?>
	        			<div class="flexslider">
	        				<ul class="slides">
	        					<?php foreach( $gallery as $image ): ?>
		        					<li>
		        						<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
		        					</li>
		        				<?php endforeach; ?>
	        				</ul>
	        			</div><!-- flexslider -->
	        			<?php endif; ?>
	        		</div><!-- hero -->

	        		<!-- 

								Box 2

	        		################################################### -->
	        		<div class="box box-yellow box-third left js-blocks-homeleft">
	        			<div class="text-bottom"><?php echo $box_2_text_top; ?></div>
	        			<div class="text-top"><?php echo $box_2_text_bottom; ?></div>
	        		</div><!-- box -->

	        		
	        		<!-- 

								Box 3

	        		################################################### -->
	        		<div class="box box-grey box-two-third right js-blocks-homeleft box-3">
        			    
        			        <?php

						if( $page_or_post_link ): 

							// override $post
							$post = $page_or_post_link;
							setup_postdata( $post ); 

							?>

				      
	        			    <h2>
						    	<?php if( $box_3_title != '' ) {
						    		echo $box_3_title;
						    	} else {
						    		the_title();
						    	} ?>
						    </h2>
						    <?php if( $box_3_excerpt != '' ) {
						    		echo $box_3_excerpt;
						    	} else {
						    		the_excerpt();
						    	} 
						    	?>

						    	<div class="boxlink">
						    		<a href="<?php the_permalink(); ?>">Go</a>
						    	</div>
						    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php else: ?>

						<?php endif; ?>
	        		</div><!-- box -->

	        	</div><!-- home left -->

	        	<div class="home-right">
	        		<!-- 

								Box 4

	        		################################################### -->
	        		<div class="box box-yellow box-third left js-blocks-homeright">
	        			<div class="text-top"><?php echo $box_4_text_top; ?></div>
	        			<div class="text-bottom"><?php echo $box_4_text_bottom; ?></div>
	        		</div><!-- box -->
	        		<!-- 

								Box 5

	        		################################################### -->
	        		<div class="box box-grey box-two-third right js-blocks-homeright">
	        			<?php

						if( $box_5_page_or_post_link ): 

							// override $post
							$post = $box_5_page_or_post_link;
							setup_postdata( $post ); 

							?>
						    <h2 id="home-right-header">
						    	<?php if( $box_5_title != '' ) {
						    		echo $box_5_title;
						    	} else {
						    		the_title();
						    	} ?>
						    </h2>
						   <?php if( $box_5_excerpt != '' ) {
						    		echo $box_5_excerpt;
						    	} else {
						    		the_excerpt();
						    	} ?>

						    	<div class="boxlink">
						    		<a href="<?php the_permalink(); ?>">Go</a>
						    	</div>
						    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php 
						// If no Post is chosen, show the fields.
						else: ?>
							<h2>
						    	<?php if( $box_5_title != '' ) {
						    		echo $box_5_title;
						    	} ?>
						    </h2>
						    <?php if( $box_5_excerpt != '' ) {
						    		echo $box_5_excerpt;
						    	} ?>
						<?php endif; ?>
	        		</div><!-- box -->
	        		<!-- 

								Box 6

	        		################################################### -->
	        		<div class="box-picture box-two-third left js-blocks-pic">
	        			<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" title="<?php echo $title; ?>" />
	        		</div><!-- box -->

	        		<div class="pic-sister box-third right js-blocks-pic">
	        		<!-- 

								Box 7

	        		################################################### -->
	        		<div class="box box-yellow tall-third">
	        			<div class="text-top"><?php echo $box_7_top_text; ?></div>
	        			<div class="text-bottom"><?php echo $box_7_bottom_text; ?></div>
	        		</div><!-- box -->
	        		<!-- 

								Box 8

	        		################################################### -->
	        		<div id="home-blog-feed" class="box box-grey tall-two-third">
	        			<?php

						if( $box_8_page_or_post_link ): 

							// override $post
							$post = $box_8_page_or_post_link;
							setup_postdata( $post ); 

							?>
						    <h2>
						    	<?php if( $box_8_title != '' ) {
						    		echo $box_8_title;
						    	} else {
						    		the_title();
						    	} ?>
						    </h2>
						    <?php if( $box_8_excerpt != '' ) {
						    		echo $box_8_excerpt;
						    	} else {
						    		the_excerpt(20);
						    	} ?><a href="<?php echo get_permalink(); ?>"> ...read more</a>
						    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php else: 
						// Else pull the latest post
						$wp_query = new WP_Query();
						$wp_query->query(array(
							'post_type'=>'post',
							'posts_per_page' => 1
						));
						if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();


						?>
							<h2><?php the_title(); ?></h2>
							<?php the_excerpt(); ?><a href="<?php echo get_permalink(); ?>"> ...read more</a>
                            
						<?php endwhile; endif; ?>
						<?php endif; // end if have post object?>
	        		</div><!-- box -->
	        	</div><!-- pic sister -->

	        	</div><!-- home right -->

        	</section>



		      

		   

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
