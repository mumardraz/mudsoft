<?php
/**
 * The template for displaying page NOT FOUND.
 *
 * @package Amaryllo
 */
 get_header(); ?>
 	<div class="page-content">
		<div class="banner contact-banner" <?php if(get_theme_mod('blog_header_image')) { ?> style="background-image: url('<?php echo esc_url(get_theme_mod('blog_header_image')); ?>')"  <?php } ?>>
			<div class="container">
				<h3><?php _e( 'Not found', 'amaryllo' ); ?></h3>
				<p><?php _e( 'Sorry, but you are looking for something that isn\'t here.', 'amaryllo' ); ?></p>
			</div>
		</div>
	</div>
<?php get_footer(); ?>