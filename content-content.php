<?php
/**
 * The default template for displaying content. Used for single
 *
 * @package green variation
 * @since	Available since Release 1.0
 */
?>

		<article id="post-<?php the_ID(); ?>" class="menu">
			<header class="article-header">
				<h1><?php the_title(); ?></h1>
				<p class="date"><time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>
					<?php echo ' ' . __( 'by', THEME_NAME ) . ' <a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" >' . get_the_author() . '</a>'; ?>
					<?php edit_post_link( __( 'Edit', THEME_NAME ), '<span class="edit-link"> | ', '</span>' ); ?>
					<?php
						if ( comments_open() ) :
							echo '<span class="comment-link-meta">';
							comments_popup_link(__('No Comments &darr;', THEME_NAME), __('1 Comment &darr;', THEME_NAME), __('% Comments &darr;', THEME_NAME));
							echo '</span>';
						endif;
					?>
				</p> <!-- end article-meta -->
			</header>
			<?php if ( has_post_thumbnail()) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
					<?php the_post_thumbnail(); ?>
				</a>
			<?php endif; ?>
			<?php the_content(); ?>

			<footer class="article-footer">
				<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', THEME_NAME ), 'after' => '</p>' ) ); ?>
			</footer>
			<?php comments_template( '', true ); ?>
		</article>
		<div class="navigation">
			<span class="previous-post"><?php previous_post_link( '%link', __( '&#8249; Previous', THEME_NAME ) ); ?></span>
			<span class="next-post"><?php next_post_link( '%link', __( 'Next &#8250;', THEME_NAME ) ); ?></span>
		</div>
