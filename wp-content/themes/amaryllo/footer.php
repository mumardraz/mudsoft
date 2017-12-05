<?php
/**
 * The template for displaying the footer.
 *
 *
 * @package Amaryllo
 */
?>
        </div>
        <footer class="sticky-footer">
            <div class="container">
				<?php if ( is_active_sidebar('footer-widget-area') ) : ?>
				<?php dynamic_sidebar('footer-widget-area'); ?>
				<?php else : ?>	
					<div class="widget">
						<h3 class="widget-title"><?php _e( 'Recent Posts', "amaryllo" ); ?></h3>
						<ul>
							<?php wp_get_archives('type=postbypost&limit=10'); ?>
						</ul>
					</div>
					<div class="widget">
						<h3 class="widget-title"><?php _e( 'Tag Cloud', "amaryllo" ); ?></h3>
						<div class="tagcloud">
							<?php wp_tag_cloud(); ?>
						</div>
					</div>
					<div class="widget">
						<h3 class="widget-title"><?php _e( 'Pages', "amaryllo" ); ?></h3>
						<ul>
							<?php wp_list_pages('title_li='); ?>
						</ul>
					</div>
					<div class="widget">
						<h3 class="widget-title"><?php _e( 'Categories', "amaryllo" ); ?></h3>
						<ul>
							<?php wp_list_categories('title_li='); ?>
						</ul>
					</div>
				<?php endif; ?>	
            </div>
        </footer>
        <div class="second-footer">
            <div class="container">
                <div class="column-container clearfix copyrights">
                    <div class="column-6-12">
					    <?php if ( get_theme_mod('pp_copyrights') ) { ?> <p class="text-left"><?php echo esc_html(get_theme_mod('pp_copyrights')); ?></p><?php } ?>
                    </div>
                    <div class="column-6-12">
					    <p class="text-right"><?php do_action( 'amaryllo_display_credits' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
       <?php wp_footer(); ?>	
    </body>
</html>