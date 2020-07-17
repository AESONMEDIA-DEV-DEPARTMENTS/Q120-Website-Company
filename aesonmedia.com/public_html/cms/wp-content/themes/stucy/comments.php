<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>
<?php if ( have_comments() ) : ?>
<div id="comments" class="comments-area">


		<h2 class="comments-title"><?php echo esc_attr__( 'Discussion', 'stucy' ); ?></h2>

		<ol class="comment-list">
			<?php
			$args = array(
				'style'       => 'ol',
				'short_ping'  => true,
				'avatar_size' => 80,
				'format'      => 'html5',
				'callback'	  => 'Atiframebuilder_Blog::comment'
			);
			wp_list_comments($args);
			?>
		</ol><!-- .comment-list -->

		<?php
			// Are there comments to navigate through?
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
		<nav class="nav-links clearfix">
			<div class="nav-previous alignleft"><?php previous_comments_link( '<i class="nat-arrow-left8"></i> ' . esc_attr__( 'Older Comments', 'stucy' ) ); ?></div>
			<div class="nav-next alignright"><?php next_comments_link( esc_attr__( 'Newer Comments', 'stucy' ) . ' <i class="nat-arrow-right8"></i>' ); ?></div>
		</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Sorry, i decide to closed my comments.' , 'stucy' ); ?></p>
		<?php endif; ?>



</div><!-- #comments -->
<?php endif; // have_comments() ?>

<?php comment_form(); ?>