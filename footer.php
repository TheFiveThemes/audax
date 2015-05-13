<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Audax
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <ul class="site-info">
            <li class="cms-info"><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'audax' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'audax' ), 'WordPress' ); ?></a></li>
            <li class="theme-info"><?php printf( __( 'Theme: %1$s by %2$s for&nbsp;%3$s', 'audax' ), 'Audax', '<a href="http://hugobaeta.com" rel="designer">Hugo Baeta</a>', '<a href="http://thefivethemes.com">The Five Themes</a>' ); ?></li>          
        </ul><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
