<?php
/**
 * The template for displaying the footer.
 *
 *
 * @package Dolcetto
 */
?>
            <footer>
                <div class="footer">
                    <div class="wrapper">
                        <?php if ( is_active_sidebar('footer-widget-area') ) : ?>
                            <?php dynamic_sidebar('footer-widget-area'); ?>
                        <?php else : ?>
                            <div class="widget text">
								<h3 class="widget-title"><?php _e( 'Pages', "dolcetto" ); ?></h3>
								<ul><?php wp_list_pages('title_li='); ?></ul>
                            </div>
                            <div class="widget text">
                                <h3 class="widget-title"><?php _e( 'Categories', "dolcetto" ); ?></h3>
                                <ul><?php wp_list_categories('title_li='); ?></ul>
                            </div>
                            <div class="widget text">
                                <h3 class="widget-title"><?php _e( 'Recent Posts', "dolcetto" ); ?></h3>
                                <?php wp_get_archives('type=postbypost&limit=2'); ?>
                            </div>
                            <div class="widget">
                                <h3 class="widget-title"><?php _e( 'Tag Cloud', "dolcetto" ); ?></h3>
                                <div class="tagcloud"><?php wp_tag_cloud(); ?></div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="copyright">
                    <div class="wrapper">
                        <?php  if ( get_theme_mod('copyrights') ) { ?><p class="left"><?php echo esc_html(get_theme_mod('copyrights')); ?></p><?php  } ?>
                        <p class="right"><?php do_action( 'dolcetto_display_credits' ); ?></p>
                    </div>
                </div>
            </footer>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>
