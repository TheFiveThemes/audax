<?php
/**
 * @package Audax
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<section class="entry-featured-image">
		<?php // check for featured image
		if ( has_post_thumbnail() ) :
			the_post_thumbnail( 'audax-large' );
		endif; // end check for featured image ?>
	</section><!-- .entry-featured-image -->

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php audax_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'audax' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php audax_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
