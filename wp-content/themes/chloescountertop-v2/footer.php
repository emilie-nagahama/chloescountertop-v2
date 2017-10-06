<?php
/**
 * The template for displaying the footer.
 *
 * @package Chloes_Countertop_Theme_V2
 */

?>

	<div class="ig-wrapper">
		<h3 class="h2-tag blue"><span><?php _e('Instagram', 'creative_ritual'); ?></span></h3>
	</div>
</div><!-- .container-w-sidebar -->

			<section class="widgets">
				<?php dynamic_sidebar('footer'); ?>
				<div class="social">
					<h3><?php _e('Join My Community', 'creative_ritual'); ?></h3>
					<ul>
						<li><a href="<?php echo esc_url( 'https://www.facebook.com/ChloesCountertop/' ); ?>"><?php _e('Facebook', 'creative_ritual'); ?></a></li>
						<li><a href="<?php echo esc_url( 'https://www.instagram.com/chloescountertop/' ); ?>"><?php _e('Instagram', 'creative_ritual'); ?></a></li>
						<li><a href="<?php echo esc_url( 'https://twitter.com/ChloeCountertop' ); ?>"><?php _e('Twitter', 'creative_ritual'); ?></a></li>
					</ul>
				</div>
			</section>

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<a href="<?php echo esc_url( '/terms-of-use' ); ?>" id="info-terms"><?php _e('Terms of Use', 'creative_ritual'); ?></a>
					<a href="<?php echo esc_url( '/site-credits' ); ?>" id="info-credits"><?php _e('Site Credits', 'creative_ritual'); ?></a>
					<a href="<?php echo esc_url( '#' ); ?>" id="info-copy"><?php _e('&copy 2017 Chloe\'s Countertop All Rights Reserved', 'creative_ritual'); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
