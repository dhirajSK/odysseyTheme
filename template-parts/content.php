<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package odyssey
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-preview' ); ?>>
	<?php
			if ( is_single() ) :
				the_title( '<h1 class="post-title">', '</h1>' );
			else :
				the_title( '<h2 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
		if ( ! is_single() ):
		?>
		<p class="post-meta">
			<?php odyssey_posted_on(); ?>
		</p>		
		<?php
		endif;
		?>
		<hr>
		<?php
		if ( is_single() ) :
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'odyssey' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>	', false )
			) );
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'odyssey' ),
				'after'  => '</div>',
			) );
		else:
			the_excerpt();
		endif;
		?>
		<div class="clearfix"></div>
		<div class="post-info">
			<?php if( !is_home() ) : ?>
			<hr />
			<?php endif;?>
			<?php odyssey_entry_footer(); ?>
		</div>
</article><!-- #post-## -->
<hr />