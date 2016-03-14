<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrapper">
			
			<div class="footer-logo">
				<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
			</div>

			<div class="creds">
				<?php 
					$sitemap = get_field('sitemap_link', 'option');
					echo '<a href="'.$sitemap.'">Sitemap</a> | Site by <a target="_blank" href="http://bellaworksweb.com/?ref=cbg">Bellaworks</a>';
				 ?>
			</div><!-- creds -->

	</div><!-- wrapper -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
