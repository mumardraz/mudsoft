<?php
/**
 * The template for displaying search
 *
 * @package Amaryllo
 */
 get_header(); ?>
<div class="page-content">
	<div class="banner contact-banner" <?php if(get_theme_mod('blog_header_image')) { ?> style="background-image: url('<?php echo esc_url(get_theme_mod('blog_header_image')); ?>')"  <?php } ?>>
		<div class="container">
			<h3><?php printf( __( 'Search Results for: %s', 'amaryllo' ), '<span>' . get_search_query() . '</span>' ); ?></h3>
		</div>
	</div>
	<?php get_template_part( 'content', 'posts' ); ?>
</div>
<?php get_footer(); ?>