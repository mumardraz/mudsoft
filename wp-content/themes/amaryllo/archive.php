<?php
/**
 * The template for displaying archive
 *
 *
 * @package Amaryllo
 */
get_header(); ?>
<div class="page-content">
	<div class="banner contact-banner" <?php if(get_theme_mod('blog_header_image')) { ?> style="background-image: url('<?php echo esc_url(get_theme_mod('blog_header_image')); ?>')"  <?php } ?>>
		<div class="container">
			<h3><?php
					if ( is_day() ) :
						printf( __( 'Daily Archives: %s', 'amaryllo' ), '<span>' . get_the_date() . '</span>' );
					elseif ( is_month() ) :
						printf( __( 'Monthly Archives: %s', 'amaryllo' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'amaryllo' ) ) . '</span>' );
					elseif ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'amaryllo' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'amaryllo' ) ) . '</span>' );
					else :
						_e( 'Archives', 'amaryllo' );
					endif;
				?>
			</h3>
		</div>
	</div>
	<?php get_template_part( 'content', 'posts' ); ?>
</div>
<?php get_footer(); ?>