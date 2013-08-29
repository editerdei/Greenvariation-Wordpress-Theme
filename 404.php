<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Green Variation
 * @since	Available since Release 1.0
 */
?>

	<?php get_header(); ?>

	<div id="content-full">
		
		<div class="error-404">
			<h1 class="title-404"><?php _e( '404 &#8212; Fancy meeting you here!', THEME_NAME ); ?></h1>
			<p><?php _e( 'Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', THEME_NAME ); ?></p>
			<p><?php _e( 'You can return', THEME_NAME ); ?> <a href="<?php echo esc_url( home_url() ); ?>/" title="<?php esc_attr_e( 'Home', THEME_NAME ); ?>"><?php _e( '&larr; Home', THEME_NAME ); ?></a> <?php _e( 'or search for the page you were looking for', THEME_NAME ); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>	<!-- end content -->

	<?php get_footer(); ?>
