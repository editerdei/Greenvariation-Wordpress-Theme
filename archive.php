<?php
/**
 * The template for displaying Archive pages.
 *
 * @package Green Variation
 * @since	Available since Release 1.0
 */
?>

	<?php get_header(); ?>


	<div id="content" class="content-index">

		<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'excerpt' ); ?>

		<?php endwhile; ?>
			<?php get_template_part( 'content', 'navigation' ); ?>

		<?php else : ?>

			<article>
				<h1 class=""><?php _e( 'Oops, Post Not Found!', THEME_NAME ); ?></h1>
			</article>

		<?php endif; ?>

	</div>	<!-- end content -->

  <?php get_sidebar(); ?>
	<?php get_footer(); ?>
