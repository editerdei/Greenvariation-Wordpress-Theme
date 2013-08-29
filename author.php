<?php
/**
 * The template for displaying Author Archive pages.
 *
 * Used to display archive-type pages for posts by an author.
 *
 * @package Green Variation
 * @since	Available since Release 1.0
 */
?>

	<?php get_header(); ?>


	<div id="content" class="content-index">

		<?php if ( have_posts() ): ?>

			<h1 class="">Author Archives: <?php echo get_the_author() ; ?></h1>

			<?php if ( get_the_author_meta( 'description' ) ) : ?>
				<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
				<h2 class="">About <?php echo get_the_author() ; ?></h2>
				<?php the_author_meta( 'description' ); ?>
			<?php endif; ?>

		<?php while ( have_posts() ) : the_post(); ?>
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
