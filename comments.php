<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to orbit_render_list_comments() which is
 * located in the functions.php file.
 *
 * @package Green Variation
 * @since	Available since Release 1.0
 */
?>

<section id="comments">

	<?php if ( post_password_required() ) : ?>

		<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', THEME_NAME ); ?></p>
		<?php
		/* Stop the rest of comments.php from being processed,
		* but don't kill the script entirely -- we still have
		* to fully load the template.
		*/
		return;?>
	<?php endif; ?>
	<?php if ( have_comments() ) : ?>

		<div class="title-comments">
			<h2><?php echo get_comments_number() . ' ' . __( 'Comments', THEME_NAME ); ?></h2>
		</div>
		<ol>
			<?php wp_list_comments(); ?>
		</ol>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<div class="navigation">
			<div class="previous"><?php previous_comments_link(__( '&#8249; Older comments',THEME_NAME )); ?></div>
			<div class="next"><?php next_comments_link(__( 'Newer comments &#8250;',THEME_NAME, 0 )); ?></div>
		</div><!-- end of.navigation -->
		<?php endif; ?>
		<?php if (!empty($comments_by_type['pings'])) : // let's seperate pings/trackbacks from comments
			$count = count($comments_by_type['pings']);
		?>
		<div class="pings">
			<div class="title-comments">
				<h2 id="pings"><?php echo $count . ' ' . __( 'Pings&#47;Trackbacks', THEME_NAME ) . ' ' . __( 'for', THEME_NAME ); ?> "<?php the_title(); ?>"</h2 >
			</div>

			<ol class="commentlist">
				<?php wp_list_comments(); ?>
			</ol>
		</div>
		<?php endif; ?>

	<?php endif; ?>

	<?php if ( ! comments_open() && get_comments_number() ) :?>

		<p class="nocomments"><?php _e( 'Comments are closed.', THEME_NAME ); ?></p>

	<?php endif; ?>

	<?php //comment_form(); ?>

</section> <!-- End section comments -->
