<?php
/**
 * The template for displaying all pages.
 *
 * @package Dolcetto
 */
get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <div class="mainContainer">
         <div class="top-page">
			<?php if ( get_theme_mod('bg_image_blog') ) { ?><img src="<?php echo esc_url(get_theme_mod('bg_image_blog')); ?>" /><?php } ?>
			<div class="black-opacity"></div>
			<h5 class="subtitle"><?php echo esc_html(get_theme_mod('title_blog_page'));?></h5>
        </div>
        <div class="content">
            <div class="wrapper">
                <div class="content-container">
                    <div class="articles-container">
                        <div class="article article-inner">
                            <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                                <div class="img-container">
                                    <?php the_post_thumbnail($post->ID, 'featured'); ?>
                                </div>
                            <?php endif; ?>
                            <div class="article-text singlepost">
                                <h3><?php the_title(); ?></h3>
                                <div class="meta-top">
                                    <span><?php _e( 'Posted by', 'dolcetto' ); ?> &nbsp;</span>
                                    <span class="color-gray"><?php the_author(); ?></span>
                                    <span>&nbsp; | &nbsp;</span>
                                    <span class="color-gray"><?php _e( 'Categories', 'dolcetto' ); ?> : &nbsp;</span>
                                    <span class="category-meta"><?php the_category(', '); ?></span>
                                </div>
                                <div class="text ">
                                    <?php the_content(); ?>
                                </div>
                                <div class="meta">
                                    <div class="column-container">
                                        <div class="column-4-12">
                                            <p class="time"><?php the_time( get_option( 'date_format' ) ); ?></p>
                                        </div>
                                    </div>
                                </div>
								<p class="the-blog-item-general-info"><?php the_tags(); ?></p> 
								<p><?php posts_nav_link(); ?></p>
								<div class="padinate-page"><?php wp_link_pages(); ?></div> 	
								<div class="comments-container">
									<?php comments_template(); ?>
								</div>								
                            </div>
                        </div>
                    </div>
                </div>
                <?php  get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>