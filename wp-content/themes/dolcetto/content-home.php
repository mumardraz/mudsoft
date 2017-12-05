<?php 
/**
 * 
 * @package Dolcetto
 */
?>
<div class="mainContainer">
    <?php if( get_theme_mod('slider_content_1') or get_theme_mod('slider_content_2')) { ?>
	<div class="slider">
		<?php 
		if( get_theme_mod('slider_content_1')) { 
		$queryslider = new WP_query('page_id='.get_theme_mod('slider_content_1' ,true)); 
		while( $queryslider->have_posts() ) : $queryslider->the_post();
		?> 
		<div class="item">
		    <?php the_post_thumbnail('dolcetto-image-slider'); ?>
			<div class="carousel-caption">
				<h5><?php the_title(); ?></h5>
				<?php if( get_theme_mod('slider_button_text_1')) { ?><a class="tell-me" href="<?php the_excerpt(); ?>"><?php echo esc_html(get_theme_mod('slider_button_text_1')); ?></a><?php } ?>	
			</div>
		</div>		
		<?php endwhile; wp_reset_query(); ?>
		<?php } ?>	
		<?php 
		if( get_theme_mod('slider_content_2')) { 
		$queryslider = new WP_query('page_id='.get_theme_mod('slider_content_2' ,true)); 
		while( $queryslider->have_posts() ) : $queryslider->the_post();
		?> 
		<div class="item">
		    <?php the_post_thumbnail('dolcetto-image-slider'); ?>
			<div class="carousel-caption">
				<h5><?php the_title(); ?></h5>
				<?php if( get_theme_mod('slider_button_text_2')) { ?><a class="tell-me" href="<?php the_excerpt(); ?>"><?php echo esc_html(get_theme_mod('slider_button_text_2')); ?></a><?php } ?>	
			</div>
		</div>		
		<?php endwhile; wp_reset_query(); ?>
		<?php } ?>		
	</div>
	<?php }  ?>
	<div class="content">
		<div class="wrapper">
			<h3><?php echo esc_html(get_theme_mod('wut')); ?></h3>
			<hr>
			<p><?php echo esc_html(get_theme_mod('wuc')); ?></p>
			<div class="col-services">
				<?php 
				if( get_theme_mod('circles_box_page_1')) { 
				$queryhomebox = new WP_query('page_id='.get_theme_mod('circles_box_page_1' ,true)); 
				while( $queryhomebox->have_posts() ) : $queryhomebox->the_post();
				?> 
				<div class="one-service">
					<a href="<?php the_permalink(); ?>"><i class="icon-<?php echo sanitize_html_class(get_theme_mod('circles_box_image_1')); ?>"></i></a>
					<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
					<p><?php the_excerpt(); ?></p>
				</div>				
				<?php endwhile; wp_reset_query(); ?>
				<?php } ?>			
				<?php 
				if( get_theme_mod('circles_box_page_2')) { 
				$queryhomebox = new WP_query('page_id='.get_theme_mod('circles_box_page_2' ,true)); 
				while( $queryhomebox->have_posts() ) : $queryhomebox->the_post();
				?> 
				<div class="one-service">
					<a href="<?php the_permalink(); ?>"><i class="icon-<?php echo sanitize_html_class(get_theme_mod('circles_box_image_2')); ?>"></i></a>
					<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
					<p><?php the_excerpt(); ?></p>
				</div>				
				<?php endwhile; wp_reset_query(); ?>
				<?php } ?>
				<?php 
				if( get_theme_mod('circles_box_page_3')) { 
				$queryhomebox = new WP_query('page_id='.get_theme_mod('circles_box_page_3' ,true)); 
				while( $queryhomebox->have_posts() ) : $queryhomebox->the_post();
				?> 
				<div class="one-service">
					<a href="<?php the_permalink(); ?>"><i class="icon-<?php echo sanitize_html_class(get_theme_mod('circles_box_image_3')); ?>"></i></a>
					<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
					<p><?php the_excerpt(); ?></p>
				</div>				
				<?php endwhile; wp_reset_query(); ?>
				<?php } ?>		
				<?php 
				if( get_theme_mod('circles_box_page_4')) { 
				$queryhomebox = new WP_query('page_id='.get_theme_mod('circles_box_page_4' ,true)); 
				while( $queryhomebox->have_posts() ) : $queryhomebox->the_post();
				?> 
				<div class="one-service">
					<a href="<?php the_permalink(); ?>"><i class="icon-<?php echo sanitize_html_class(get_theme_mod('circles_box_image_4')); ?>"></i></a>
					<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
					<p><?php the_excerpt(); ?></p>
				</div>				
				<?php endwhile; wp_reset_query(); ?>
				<?php } ?>				
			</div>
		</div>
	</div>
	<?php if( get_theme_mod('home_message_textarea') or get_theme_mod('home_message_title')) { ?>
	<div class="portfolio">
		<div class="view-portfolio">
			<div class="wrapper-portfolio">
				<?php if( get_theme_mod('home_message_textarea')) { ?><h3><?php echo esc_html(get_theme_mod('home_message_textarea')); ?></h3><?php } ?>
				<?php if( get_theme_mod('home_message_title')) { ?><a href="<?php echo esc_url(get_theme_mod('home_message_link')); ?>"><?php echo esc_html(get_theme_mod('home_message_title')); ?></a><?php } ?>
			</div>
		</div>
	</div>
	<?php } ?>
</div>
<?php while (have_posts()) : the_post(); ?>
<div class="mainContainer">
	<div class="content">
		<div class="wrapper">
			<div class="content-container pagehomef">
				<div class="articles-container">
					<div class="article">
						<div class="article-text singlepost">
							<div class="text">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>