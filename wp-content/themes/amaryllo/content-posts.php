<?php 
/**
 * 
 * @package Amaryllo 
 */
?>
<div class="container margin-top-xl">
	<div class="column-container clearfix">
		<div class="column-9-12 column-md-8-12">
			<div class="articles-container">
				<?php while (have_posts()) : the_post(); ?>
					<div class="article">
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
							<div class="img-container">
								<a href="<?php the_permalink() ?>"><?php the_post_thumbnail($post->ID, 'featured'); ?></a>	
							</div>
							<?php endif; ?>
							<div class="article-text"><a href="<?php the_permalink() ?>" class="link"><h3><?php if(get_the_title($post->ID)) { the_title(); } else { the_time( get_option( 'date_format' ) ); } ?></h3></a>
								<div class="meta-top">
									<span><?php _e( 'Posted by', 'amaryllo' ); ?> &nbsp;</span>
									<span class="color-gray"><?php the_author(); ?></span>
									<span>&nbsp; | &nbsp;</span>
									<span class="color-gray"><?php _e( 'Categories', 'amaryllo' ); ?> : &nbsp;</span>
									<span class="category-meta"><?php the_category(', '); ?></span>
								</div>
								<?php the_excerpt(); ?>
								<div class="meta">
									<div class="column-container">
										<div class="column-4-12">
											<p class="time"><?php the_time( get_option( 'date_format' ) ); ?></p>
										</div>
										<div class="column-4-12">
											<p class="comments"><?php comments_popup_link( 'No comments', '1 comment', '% comments', 'comments-link', 'Comments are off for this post'); ?></p>
										</div>
										<div class="right">
											<a href="<?php the_permalink() ?>" class="read-more"><?php _e( 'Read More', 'amaryllo' ); ?></a>
										</div>
									</div>
								</div>
							</div>
						</div>	
					</div>
				<?php endwhile; ?>							
				<span class="left button-gray"><?php next_posts_link(__('Previous Posts', 'amaryllo')) ?></span>
				<span class="right button-gray"><?php previous_posts_link(__('Next posts', 'amaryllo')) ?></span>
			</div>
		</div>
		<?php  get_sidebar(); ?>
	</div>
</div>