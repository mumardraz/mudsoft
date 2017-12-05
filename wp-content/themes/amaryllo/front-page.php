<?php 
/**
 * 
 * @package Amaryllo 
 */
get_header(); 
if ( have_posts() ) : 
?>
<div class="page-content">
     <?php if( get_theme_mod('slider_content_1') or get_theme_mod('slider_content_2') or get_theme_mod('background_slider')) { ?>
	<div class="slider" <?php if(get_theme_mod('background_slider')) { ?> style="background-image: url('<?php echo esc_url(get_theme_mod('background_slider')); ?>')"  <?php } ?>>
		<div class="container">
			<div class="slider-container">
				<?php 
				if( get_theme_mod('slider_content_1')) { 
				$queryslider = new WP_query('page_id='.get_theme_mod('slider_content_1' ,true)); 
				while( $queryslider->have_posts() ) : $queryslider->the_post();
				?> 
				<div class="slider-item">
					<div class="column-container clearfix">
						<div class="column-5-12">
							<div class="slide-text">
								<h2><?php the_title(); ?></h2>
								<p><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink(); ?>" class="button orange"><?php echo esc_html(get_theme_mod('slider_button_text_1')); ?></a>
							</div>
						</div>
						<div class="column-7-12">
							<div class="img-container">
								<?php the_post_thumbnail( array (600, 400)); ?>
							</div>
						</div>
					</div>
				</div>				
				<?php endwhile; wp_reset_query(); ?>
				<?php } ?>				
				<?php 
				if( get_theme_mod('slider_content_2')) { 
				$queryslider = new WP_query('page_id='.get_theme_mod('slider_content_2' ,true)); 
				while( $queryslider->have_posts() ) : $queryslider->the_post();
				?> 
				<div class="slider-item">
					<div class="column-container clearfix">
						<div class="column-5-12">
							<div class="slide-text">
								<h2><?php the_title(); ?></h2>
								<p><?php the_excerpt(); ?></p>
								<a href="<?php the_permalink(); ?>" class="button orange"><?php echo esc_html(get_theme_mod('slider_button_text_2')); ?></a>
							</div>
						</div>
						<div class="column-7-12">
							<div class="img-container">
								<?php the_post_thumbnail( array (600, 400)); ?>
							</div>
						</div>
					</div>
				</div>				
				<?php endwhile; wp_reset_query(); ?>
				<?php }  ?>				
		    </div>	
		</div>
	</div>
	<?php }  ?>
	<?php if ( 'posts' != get_option( 'show_on_front')) { ?>
	<?php if( get_theme_mod('circles_box_page_1') or get_theme_mod('circles_box_page_2') or get_theme_mod('circles_box_page_3') or get_theme_mod('circles_box_page_4') or get_theme_mod('circles_box_page_5') or get_theme_mod('circles_box_page_6')) { ?>
	<div class="featured-block">
		<div class="container">
			<div class="column-container clearfix">
				<?php 
				if( get_theme_mod('circles_box_page_1')) { 
				$queryhomebox = new WP_query('page_id='.get_theme_mod('circles_box_page_1' ,true)); 
				while( $queryhomebox->have_posts() ) : $queryhomebox->the_post();
				?> 
				<div class="column-4-12">
					<div class="gutter"> 
						<h3><i class="fa fa-<?php echo esc_html(get_theme_mod('circles_box_image_1',__( 'location-arrow', 'amaryllo' ))); ?>"></i><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p><?php the_excerpt(); ?></p>
					</div>
				</div>					
				<?php endwhile; wp_reset_query(); ?>
				<?php } ?>	
				<?php 
				if( get_theme_mod('circles_box_page_2')) { 
				$queryhomebox = new WP_query('page_id='.get_theme_mod('circles_box_page_2' ,true)); 
				while( $queryhomebox->have_posts() ) : $queryhomebox->the_post();
				?> 
				<div class="column-4-12">
					<div class="gutter"> 
						<h3><i class="fa fa-<?php echo esc_html(get_theme_mod('circles_box_image_2',__( 'crosshairs', 'amaryllo' ))); ?>"></i><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p><?php the_excerpt(); ?></p>
					</div>
				</div>					
				<?php endwhile; wp_reset_query(); ?>
				<?php }  ?>	
				<?php 
				if( get_theme_mod('circles_box_page_3')) { 
				$queryhomebox = new WP_query('page_id='.get_theme_mod('circles_box_page_3' ,true)); 
				while( $queryhomebox->have_posts() ) : $queryhomebox->the_post();
				?> 
				<div class="column-4-12">
					<div class="gutter"> 
						<h3><i class="fa fa-<?php echo esc_html(get_theme_mod('circles_box_image_3',__( 'signal', 'amaryllo' ))); ?>"></i><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p><?php the_excerpt(); ?></p>
					</div>
				</div>					
				<?php endwhile; wp_reset_query(); ?>
				<?php }  ?>	
				<?php 
				if( get_theme_mod('circles_box_page_4')) { 
				$queryhomebox = new WP_query('page_id='.get_theme_mod('circles_box_page_4' ,true)); 
				while( $queryhomebox->have_posts() ) : $queryhomebox->the_post();
				?> 
				<div class="column-4-12">
					<div class="gutter"> 
						<h3><i class="fa fa-<?php echo esc_html(get_theme_mod('circles_box_image_4',__( 'sliders', 'amaryllo' ))); ?>"></i><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p><?php the_excerpt(); ?></p>
					</div>
				</div>					
				<?php endwhile; wp_reset_query(); ?>
				<?php }  ?>	
				<?php 
				if( get_theme_mod('circles_box_page_5')) { 
				$queryhomebox = new WP_query('page_id='.get_theme_mod('circles_box_page_5' ,true)); 
				while( $queryhomebox->have_posts() ) : $queryhomebox->the_post();
				?> 
				<div class="column-4-12">
					<div class="gutter"> 
						<h3><i class="fa fa-<?php echo esc_html(get_theme_mod('circles_box_image_5',__( 'star', 'amaryllo' ))); ?>"></i><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p><?php the_excerpt(); ?></p>
					</div>
				</div>					
				<?php endwhile; wp_reset_query(); ?>
				<?php }  ?>	
				<?php 
				if( get_theme_mod('circles_box_page_6')) { 
				$queryhomebox = new WP_query('page_id='.get_theme_mod('circles_box_page_6' ,true)); 
				while( $queryhomebox->have_posts() ) : $queryhomebox->the_post();
				?> 
				<div class="column-4-12">
					<div class="gutter"> 
						<h3><i class="fa fa-<?php echo esc_html(get_theme_mod('circles_box_image_6',__( 'life-ring', 'amaryllo' ))); ?>"></i><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p><?php the_excerpt(); ?></p>
					</div>
				</div>					
				<?php endwhile; wp_reset_query(); ?>
				<?php } ?>
			</div>
		</div>
	</div>
	 <?php } ?>
    <?php } ?>	
</div>
<?php if ( 'posts' == get_option( 'show_on_front')) { ?>
		<div class="page-content">
			<div class="banner contact-banner" <?php if(get_theme_mod('blog_header_image')) { ?> style="background-image: url('<?php echo esc_url(get_theme_mod('blog_header_image')); ?>')"  <?php } ?>>
				<div class="container">
					<h3><?php echo esc_html(get_theme_mod('blog_header_title',__( 'Our Blog', 'amaryllo' ))); ?></h3>  
				</div>
			</div>
			<?php get_template_part( 'content', 'posts' ); ?>
		</div>
<?php } else { ?>		
        <?php get_template_part( 'content', 'home' ); ?>
<?php } 
endif; 
get_footer(); ?>