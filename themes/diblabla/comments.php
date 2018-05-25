<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php if ( comments_open() ) { ?>		<!-- show only if comments are active -->
	<!--<h4>Comentarios</h4>-->
	<div class="">
		<div class="">
			<i class=""></i>
		</div>
		<div class="">
			<?php //comment_form(); ?>
			<?php  comment_form ( array ( 'comment_notes_after'  =>  '' ));  ?>
			<!--<a href="#" class="[ button button-cancel ]">Cancel</a>-->
		</div>
	</div>
	<?php } ?>


	<?php if ( have_comments() ) : ?>
		<!-- <hr class="[ width--100p ][ margin-top-bottom ]">
		<h2 class="comments-title [ hidden ]">
			<?php
				printf( _nx( 'COMMENT &ldquo;%2$s&rdquo;', '%1$s Comments &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'twentyfifteen' ),
					number_format_i18n( get_comments_number() ), get_the_title() );
			?>
		</h2> -->

		<?php //twentyfifteen_comment_nav(); ?>

		<div class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'div',
					'short_ping'  => true,
					'avatar_size' => 60,
				) );
			?>
		</div><!-- .comment-list -->

		<?php //twentyfifteen_comment_nav(); ?>

	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'twentyfifteen' ); ?></p>
	<?php endif; ?>

</div><!-- .comments-area -->