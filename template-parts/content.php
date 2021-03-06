<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package aamirjawaid
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			}
		if ( 'post' === get_post_type() ) : ?>
        <hr/>
		<div class="entry-meta">
			<div class="postedOn"><?php the_time(); ?></div>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
	        <div class="entry-content">
                <?php
                    the_content( sprintf(
                        /* translators: %s: Name of current post. */
                        wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'aamirjawaid' ), array( 'span' => array( 'class' => array() ) ) ),
                        the_title( '<span class="screen-reader-text">"', '"</span>', false )
                    ) );

                    wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aamirjawaid' ),
                        'after'  => '</div>',
                    ) );
                ?>
	        </div><!-- .entry-content -->
        </div>
    </div>

	<footer class="entry-footer">
		<?php aamirjawaid_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
