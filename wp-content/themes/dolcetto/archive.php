<?php
/**
 * The template for displaying page NOT FOUND.
 *
 * @package Dolcetto
 */
get_header(); ?>
    <div class="mainContainer">
        <div class="top-page">
		    <?php if ( get_theme_mod('bg_image_blog') ) { ?><img src="<?php echo esc_url(get_theme_mod('bg_image_blog')); ?>" /><?php } ?>
            <div class="black-opacity"></div>
            <?php the_archive_title( ' <h5 class="subtitle">', '</h5>' ); ?>
        </div>
        <div class="content">
            <div class="wrapper">
                <div class="content-container">
                    <div class="articles-container">
                        <?php 
						if( have_posts() ):
							while (have_posts()) : the_post();
								get_template_part( 'content', 'posts' );
							endwhile;
					    else:
							if ( current_user_can( 'edit_posts' ) ){
								printf( __( 'There are no posts, how about creating <a href="%s">one</a>?', 'dolcetto' ), esc_url( admin_url( 'post-new.php' ) ));
							}
						endif;
						?>
                        <span class="left previous-next"><?php next_posts_link(__('Previous Posts', 'dolcetto')) ?></span>
                        <span class="right previous-next"><?php previous_posts_link(__('Next posts', 'dolcetto')) ?></span>
                    </div>
                </div>
                <?php  get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>