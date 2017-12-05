<?php 
/**
 * 
 * @package Dolcetto
 */
?>
<div class="article">
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
	<div class="img-container">
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail($post->ID, 'featured'); ?></a>	
	</div>
	<?php endif; ?>
	<div class="article-text">
	    <a href="<?php the_permalink() ?>" class="link"><h3><?php if(get_the_title($post->ID)) { the_title(); } else { the_time( get_option( 'date_format' ) ); } ?></h3></a>
		<div class="meta-top">
			<span><?php _e( 'Posted by', 'dolcetto' ); ?> &nbsp;</span>
			<span class="color-gray"><?php the_author(); ?></span>
			<span>&nbsp; | &nbsp;</span>
			<span class="color-gray"><?php _e( 'Categories', 'dolcetto' ); ?> : &nbsp;</span>
			<span class="category-meta"><?php the_category(', '); ?></span>
		</div>
		<?php the_excerpt(); ?>
		<div class="meta">
			<div class="column-container">
				<div class="column-4">
					<p class="time"><?php the_time( get_option( 'date_format' ) ); ?></p>
				</div>
				<div class="column-4">
					<p class="comments"><?php comments_popup_link( __( 'Post a Comment', 'dolcetto' ), __( '1 Comment', 'dolcetto' ), __( '% Comments', 'dolcetto' ),  __( 'Comments are Closed', 'dolcetto' )); ?></p>
                </div>
				<div class="right">
					<a href="<?php the_permalink() ?>" class="read-more"><?php _e( 'Read More', 'dolcetto' ); ?></a>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>	
</div>